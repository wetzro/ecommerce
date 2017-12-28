@extends("layouts.app");

@section("content")


<div class="container white">
  <h1> New Product </h1>
  <!--- Form --->


  {!! Form::open(['url' => '/products','method' => 'POST']) !!}


  <div class="form-group">
    {{ Form::text('title','',['class' => 'form-control','placeholder' => 'Tittle']) }}
  </div>
  <div class="form-group">
    {{ Form::text('description','',['class' => 'form-control','placeholder' => 'Description']) }}
  </div>
  <div class="form-group">
    {{ Form::number('pricing','',['class' => 'form-control','placeholder' => 'Price']) }}
  </div>

  <div class="form-group text-right">
    <a href="{{url('/products')}}"> Back to Product List </a>
    <input type="submit" value="Send" class="btn btn-success">
  </div>


  {!! Form::close() !!}

</div>
@endsection
