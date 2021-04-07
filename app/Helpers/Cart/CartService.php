<?php

namespace App\Helpers\Cart;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class CartService 
{
    protected $cart;

    public function __construct()
    {
        $this->cart = session()->get('cart') ?? collect([]);
    }

    public function put(array $value , $obj = null)
    {
        if(! is_null($obj) && $obj instanceof Model) {
            $value = array_merge($value , [
               'id' => Str::random(10),
                'subject_id' => $obj->id,
                'subject_type' => get_class($obj)
            ]);
        } elseif(! isset($value['id'])) {
            $value = array_merge($value , [
                'id' => Str::random(10)
            ]);
        }

        $this->cart->put($value['id'] , $value);
        session()->put('cart' , $this->cart);

        return $this;
    }

    public function update($key , $options)
    {
        $item = collect($this->get($key, false));

        if(is_numeric($options)) {
            $item = $item->merge([
               'quantity' => $item['quantity'] + $options
            ]);
        }

        $this->put($item->toArray());

        return $this;
    }
    public function minus($key , $options)
    {
        $item = collect($this->get($key, false));

        if(is_numeric($options)) {
            $item = $item->merge([
               'quantity' => $item['quantity'] - $options
            ]);
        }

        $this->put($item->toArray());

        return $this;
    }

    public function count($key)
    {
        if(! $this->has($key) ) return 0;

        return $this->get($key)['quantity'];
    }

    public function has($key)
    {
        if($key instanceof Model) {
            return ! is_null(
                $this->cart->where('subject_id' , $key->id)->where('subject_type' , get_class($key))->first()
               
            );
        }

        return ! is_null(
            $this->cart->firstWhere('id' , $key)
        );
    }


  



    public function get($key , $withRelationShip = true)
    {
        $item = $key instanceof Model
                    ? $this->cart->where('subject_id' , $key->id)->where('subject_type' , get_class($key))->first()
                    : $this->cart->firstWhere('id' , $key);

        return $withRelationShip ? $this->withRelationshipIfExist($item) : $item;
    }

    public function all()
    {
        $cart = $this->cart;
        $cart = $cart->map(function($item) {
            return $this->withRelationshipIfExist($item);
        });

        return $cart;
    }

    public function delete($key)
    {
        if( $this->has($key) ) {
            $this->cart = $this->cart->filter(function ($item) use ($key) {
                if($key instanceof Model) {
                    return ( $item['subject_id'] != $key->id ) && ( $item['subject_type'] != get_class($key) );
                }

                return $key != $item['id'];
            });

            session()->put('cart' , $this->cart);

            return true;
        }

        return false;
    }

    protected function withRelationshipIfExist($item)
    {
        if(isset( $item['subject_id'] ) && isset($item['subject_type']) ) {
            $class = $item['subject_type'];
            $subject = (new $class())->find( $item['subject_id'] );

            $item[strtolower(class_basename($class))] = $subject;

            unset($item['subject_id']);
            unset($item['subject_type']);

            return $item;
        }


        return $item;
    }
}