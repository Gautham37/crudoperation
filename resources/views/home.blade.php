@extends('layouts.app')

@section('content')

    <!-- Content -->
    
    <div class="container-xxl flex-grow-1 container-p-y">
        
        
        <h4 class="fw-bold py-1">
            <span class="text-muted fw-light">Dashboard </span> 
        </h4>

        <!-- User Profile Content -->
        <div class="row">

            <div class="col-xl-12 col-lg-12 col-md-12">
                <!-- About User -->
                <div class="card mb-4">
                    <div class="card-body">

                    <div class="col-md-6 order-2 order-md-1">
                        <div class="card-body">
                            <h4 class="card-title pb-xl-2">Welcome back <strong> {{auth()->user()->name}}!</strong>🎉</h4>
                        </div>
                    </div>

                    </div>
                </div>
            </div>
            
        </div>
        <!--/ User Profile Content -->
        
                    
    </div>
    <!-- / Content -->

@endsection
