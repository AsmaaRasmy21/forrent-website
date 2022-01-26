@extends('layouts.base',['title'=>'Favorite Services'])

@section('main') 
<div class="page-content">
    <div class="container">
        <!-- row opened -->
        <div class="row">
            <aside class="col-md-3 col-lg-3 m-5">
                @include('customers.navbar')
            </aside><!-- End .col-lg-3 -->
            <div class="col-md-8 col-lg-8 mt-3">
                <div class="heading heading-flex mb-3">
                    <div class="heading-left">
                        <h2 class="title">{{trans('site.favorite_services')}}</h2><!-- End .title -->
                    </div><!-- End .heading-left -->
                </div><!-- End .heading -->
                <div class="row d-flex justify-content-lg-start" >
                    @if($services->isNotEmpty())
                    @foreach($favorites as $favorite)
                    <div class="product text-center col-md-3 m-5">
                        <figure class="product-media favorite my-2">
                                
                            <a href="{{route ('single-service', [$favorite->service->id])}}">
                                <img src="{{asset('uploads/'.$favorite->service->image)}}" alt="Product image" class="product-image">
                            </a>
                            <div class="product-action-vertical">
                                <button class="btn-remove modal-effect btn-product-icon" data-effect="effect-scale"  data-toggle="modal" href="#delete{{$favorite->id}}"
                                    ><i class="icon-close" style="font-size: 20px; color: black;"></i></button> 
                            </div>
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                    <h3 class="product-title">
                                        @if(App::getlocale()=='ar')
                                        {{$favorite->service->title_ar}}
                                    @else
                                    {{$favorite->service->title}}
                                    @endif</h3>
                            </div><!-- End .product-cat -->
                        </div><!-- End .product-body -->
                </div><!-- End .product -->
                @include('customers.delete')
                 @endforeach
                     @else 
                        <div class="product">
                            <div class="product-body">
                                <div class="product-cat p-5">
                                    <h2>{{trans('site.no_service')}}</h2>

                                </div><!-- End .product-cat -->
                        </div>
                    @endif
                
                </div><!-- bd -->
            </div><!-- End .bg-lighter -->
        </div>    
     </div>
</div>                           
@endsection