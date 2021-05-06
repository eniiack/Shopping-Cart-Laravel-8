<?php

namespace App\Exceptions;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Intervention\Image\Exception\NotFoundException;
use Illuminate\Http\JsonResponse;
use Illuminate\Auth\AuthenticationException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    public function render($request,Throwable $exception)
    {
        if($exception instanceof ModelNotFoundException || $exception instanceof NotFoundException) {
            return $this->NotFoundExceptionMessage($request, $exception);
        }
        return parent::render($request, $exception);
    }
   /**
     * @param $request
     * @param Exception $exception
     * @return JsonResponse|\Symfony\Component\HttpFoundation\Response
     */


    public function NotFoundExceptionMessage($request, Exception $exception)
    {
        return $request->expectsJson()
            ? new JsonResponse([
                'data' => 'not found',
                'status' => 'error'
            ], 404)
            : parent::render($request, $exception);
    }



     /**
     * Convert an authentication exception into a response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Illuminate\Auth\AuthenticationException  $exception
     * @return \Illuminate\Http\Response
     */
    protected function unauthenticated($request, AuthenticationException $exception)
    {
        return $request->expectsJson()
            ? response()->json(['data' => [
                'message' => 'شما اجازه دسترسی ندارید' ],
                'status' => 'error'
            ], 401)
            : redirect()->guest(route('login'));
    }

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }
}
