@extends('layouts.app')
@section('content')

<div class="account-pages my-5 pt-5">
        <div class="container">
            
            <!-- end row -->

            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="card">
                        <div class="card-body p-4">
                            <div class="p-2">
                                <h5 class="mb-5 text-center">Login to your Account</h5>
                                
                            <form class="form-horizontal" name = "input_token" action="{{ route('login')}}" method="POST">
                                    {{ csrf_field() }}
                                    <div class="row">
                                        <div class="col-md-12">
                                            <!--Account Username-->
                                            <div class="form-group mb-4">
                                                <label for="userpassword"><i class="mdi mdi-email-multiple"></i> Account email</label>
                                                <input name = "email" class="form-control" id="userpassword" type = "email" placeholder="Enter Email address" required = "">
                                                @if($errors->has('email'))
                                                <strong>{{ $errors->first('email') }}</strong>
                                                @endif
                                                
                                            </div>
                                            <!--Account Password-->
                                            <div class="form-group mb-4">
                                                <label for="userpassword"><i class="mdi mdi-lock"></i> Account Passkey</label>
                                                <input name = "password" type = "password" class="form-control" id="userpassword" placeholder="Enter Password" required="">
                                                @if($errors->has('password'))
                                                <strong> {{ $errors->first('password') }}</strong>
                                                @endif
                                            </div>
                                                     
                                            
                                            <div class="mt-4">
                                                <button class="btn btn-success btn-block waves-effect waves-light" type="submit">Login</button>
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
<script>
    document.input_token.token.focus();
</script>
@endsection
