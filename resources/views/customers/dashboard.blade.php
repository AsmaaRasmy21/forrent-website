@extends('layouts.base',['title'=>'Log in as Customer'])
@section('main')
<main class="main">

    <div class="page-content pt-3">
        <div class="dashboard">
            <div class="container">
                <div class="row">
                    <aside class="col-md-3 col-lg-3 mx-5">
                        <ul class="nav nav-dashboard flex-column mb-3 mb-md-0" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('customer') ? 'active' : '' }}" id="tab-dashboard-link" data-toggle="tab" href="#tab-dashboard" role="tab" aria-controls="tab-dashboard" aria-selected="true">{{trans('site.dashboard')}}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('customer/customer-services') ? 'active' : '' }}"  href="{{ route ('customer-services.index')}}">{{trans('site.services')}}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('customer/favorite-services') ? 'active' : '' }}"  href="{{route ('favorite-services.index')}}">{{trans('site.favorite_services')}}</a>
                            </li>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('customer/logout') ? 'active' : '' }}" href="{{ route ('customer.logout') }}">{{trans('site.log_out')}}</a>
                            </li>
                        </ul>
                    </aside><!-- End .col-lg-3 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End .dashboard -->
    </div><!-- End .page-content -->
</main>
@endsection