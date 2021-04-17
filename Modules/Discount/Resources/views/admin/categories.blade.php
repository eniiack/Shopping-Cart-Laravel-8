  @foreach ($categories as $category)
    <option value="{{ $category->id }}"
    {{ in_array($category->id, $product->categories->pluck('id')->toArray()) ? 'selected' : '' }}>
    {{ $category->name }}</option>
    @include('panel.products.categories' , ['categories' => $category->child])
    @endforeach