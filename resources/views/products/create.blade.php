@extends('layouts.app');

@section('content')

<div class="container">
  <div class="card padding">
    <header>
      <h4>Create a new product</h4>
    </header>

    <div class="card-body">
      @include('products.form')
    </div>

  </div>

</div>

@endsection
