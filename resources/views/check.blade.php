@extends('layouts.app')
@section('content')

<div class="account-pages my-5 pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center mb-5">
                        <a href="index.html" class="logo"><img src="assets/images/logo-light.png" height="24" alt="logo"></a>
                        <h5 class="font-size-16 text-white-50 mb-4">Counselling App by Gabriel</h5>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="card">
                        <div class="card-body p-4">
                            <div class="p-2">
                                <h5 class="mb-5 text-center">View your Application Status</h5>
                                @include('messages')
                            <form class="form-horizontal" action="{{ route('verify')}}" method="GET">

                                    <div class="row">
                                        <div class="col-md-12">
                                            
                                            <div class="form-group mb-4">
                                                <label for="userpassword"><i class="mdi mdi-lock"></i> Application Token</label>
                                                <input name = "token" maxlength = "10" class="form-control" id="userpassword" placeholder="Enter Token">
                                            </div>

                                            
                                            <div class="mt-4">
                                                <button class="btn btn-success btn-block waves-effect waves-light" type="submit">Check Appointment</button>
                                            </div>
                                            <div class="mt-4 text-center">
                                                <a href="#" class="text-muted"><i class="mdi mdi-calendar-blank-multiple "></i> Book an Appointment?</a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
    </div>

@endsection