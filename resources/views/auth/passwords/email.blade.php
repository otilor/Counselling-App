@extends('layouts.status_app')
@section('content')
<body class="bg-primary bg-pattern">
<div class="home-btn d-none d-sm-block">
    <a href="/"><i class="mdi mdi-home-variant h2 text-white"></i></a>
</div>

<div class="account-pages my-5 pt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center mb-5">
                    <a href="/" class="logo"><img src="/assets/images/logo-light.png" height="24" alt="logo"></a>
                    <h5 class="font-size-16 text-white-50 mb-4">Counselling App for Anchor University, Lagos</h5>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card">
                    <div class="card-body p-4">
                        <div class="p-2">
                            <h5 class="mb-5 text-center">Reset Password</h5>
                        <form class="form-horizontal" action="{{ route('password.email') }}" method="POST">
                            {{ csrf_field() }}

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="alert alert-warning alert-dismissible">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                            Enter your <b>Email</b> and instructions will be sent to you!
                                        </div>

                                        <div class="form-group mt-4">
                                            <label for="useremail">Email</label>
                                            <input type="email" class="form-control" id="useremail" placeholder="Enter email" name="email">
                                        </div>
                                        @if ($errors->has('email'))
                                        <span>
                                        <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                        @endif
                                        
                                        <div class="mt-4">
                                            <button class="btn btn-success btn-block waves-effect waves-light" type="submit">Send Email</button>
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
<!-- end Account pages -->
</body>



@endsection