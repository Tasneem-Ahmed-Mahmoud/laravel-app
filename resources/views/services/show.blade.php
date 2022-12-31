@extends('master')
@section('title',$service->name)
@section('content')

<h1 class=" my-5 text-center">{{$service->name}}</h1>

<div class="container">

<div class="row">
    <div class="col-lg-6">
        <img src="{{voyager::image($service->image)}}" class="img-fluid">
    </div>
    <div class="col-lg-6">
        <p>{!!$service->content!!}</p>
    </div>
</div>

</div>

@endsection