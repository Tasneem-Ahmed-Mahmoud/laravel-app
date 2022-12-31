
    

@extends("master")

@section("content")
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
  <div class="carousel-indicators">
  @foreach($sliders as $slider)
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{$loop->index}}" class="@if($loop->first) active @endif" aria-current="true" aria-label="Slide 1"></button>
    @endforeach
  </div>
  <div class="carousel-inner">
    @foreach($sliders as $slider)
    <div class="carousel-item @if($loop->first) active @endif">
      <img src="{{ Voyager::image($slider->image) }}" class="d-block w-100 vh-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h3>{{$slider->title}}</h3>
        <p>{{$slider->subtitle}}</p>
      </div>
    </div>
    @endforeach
  </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<section class="my-5 py-5">

<div class=" container ">
  <h2 class="text-center">Our Services</h2>
  <div class="row">
  @foreach ($services as $service )
<div class="col-lg-4">
  <div class="card">
    <img  src="{{voyager::image($service->image)}}" class="card-img-top">
<div class="card-body">
  <h5 class="card-title">{{$service->name}}</h5>
  <!-- {{url('services/'.$service->id)}} -->
  <!-- {{route('services.show',$service->id)}} -->
<a href="{{route('services.show',$service)}}" class="btn btn-info ">View Service</a>
@auth
  @can('delete',$service)
    
  

<a href="{{route('services.show',$service)}}" class="btn btn-danger">Delete</a>
@endcan
@endauth
</div>

  </div>
 
</div>
@endforeach
  </div>
</div>
</section> 
@endsection

