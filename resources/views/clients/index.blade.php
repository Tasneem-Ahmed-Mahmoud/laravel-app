

  @extends('master')
@section("title","services")
@section('content')
  <section class="my-5 py-5">

<div class=" container ">
  <h2 class="text-center">Our Clients</h2>
  <div class="row">
  @foreach ($clients as $client )
<div class="col-lg-4 mb-4">
  <div class="card">
    <img  src="{{voyager::image($client->image)}}" class="card-img-top imgClint" >
<div class="card-body">
  <h5 class="card-title text-center">{{$client->name}}</h5>
  
  <a href="{{route('clients.show',$client)}}" class="btn btn-danger py-2 ">View Client</a>
</div>

  </div>
 
</div>
@endforeach
  </div>
</div>
</section> 
  @endsection
 