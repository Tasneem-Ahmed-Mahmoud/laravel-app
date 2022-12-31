@extends('master')
@section('title',$client->name)
@section('content')

<h1 class=" my-5 text-center">{{$client->name}}</h1>

<div class="container">

<div class="row">
    <div class="col-lg-6">
        <img src="{{voyager::image($client->image)}}" class="img-fluid">
    </div>
    <div class="col-lg-6">
        <p>{!!$client->content!!}</p>
    </div>
</div>

</div>

@endsection