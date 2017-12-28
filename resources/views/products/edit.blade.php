@extends("layouts.app");

@section("content")


<div class="container white">
  <h1> New Product </h1>
  <!--- Form --->
@include('products.form',['product' => $product, 'url' => '/products/'.$product->id])

</div>
@endsection
