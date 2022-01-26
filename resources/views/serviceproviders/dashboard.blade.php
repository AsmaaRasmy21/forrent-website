
@extends('layouts.base',['title'=>'Log in as Service Provider'])
@section('main')
<main class="main">
    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route ('serviceProvider.main')}}">{{trans('site.dashboard')}}</a></li>
                <li class="breadcrumb-item active"><a>{{trans('site.my_account')}}</a></li>
            </ol>
        </div><!-- End .container -->
      </nav><!-- End .breadcrumb-nav -->
    <div class="page-content ">
        <div class="dashboard">
            <div class="container">
                <div class="row">
                    <aside class="col-md-4 col-lg-3 mx-5">
                        <ul class="nav nav-dashboard flex-column mb-3 mb-md-0 " role="tablist">
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('service-provider') ? 'active' : '' }}" id="tab-dashboard-link" href="{{route ('serviceProvider.main')}}" role="tab" aria-controls="tab-dashboard" aria-selected="true">{{trans('site.dashboard')}}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('service-provider/account-details') ? 'active' : '' }}"  href="{{ route ('service.provider.account')}}">{{trans('site.account_details')}}</a>
                            </li>
                        
                            <li class="nav-item">
                                <a class="nav-link  {{ Request::is('service-provider/all-services') ? 'active' : '' }}" href="{{ route ('all-services.index') }}" >{{trans('site.my_services')}}</a>
                            </li>
    
                            <li class="nav-item ">
                                <a class="nav-link {{ Request::is('service-provider/logout') ? 'active' : '' }}" href="{{ route ('service.provider.logout') }}">{{trans('site.log_out')}}</a>
                            </li>
                        </ul>
                    </aside><!-- End .col-lg-3 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End .dashboard -->
    </div><!-- End .page-content -->
</main>
@endsection