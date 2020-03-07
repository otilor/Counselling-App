@extends('layouts.app')
@section('content')

<div class="account-pages my-5 pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center mb-5">
                        <a href="/" class="logo"><img src="assets/images/logo-light.png" height="24" alt="logo"></a>
                        <h5 class="font-size-16 text-white-50 mb-4">Counselling App by Gabriel</h5>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body p-4">
                            <div class="p-2">
                                <h5 class="mb-5 text-center">View your Application Status</h5>
                                @include('messages')
                            <form class="form-horizontal" name = "input_token" action="{{ route('verify')}}" method="GET">

                                    <div class="row">
                                        <div class="col-md-12">
                                            
                                            <div class="form-group mb-4">
                                                    <label for="appointment_date"><i class="mdi mdi-calendar-blank-multiple"></i> Appointment Date</label>
                                                    <input class="form-control" name="appointment_date" type = "date">
                                                <label for="userpassword"><i class="mdi mdi-message-text-lock-outline"></i> Personal Message</label>
                                                <textarea id="textarea" class="form-control" maxlength="225" rows="5" placeholder="Drop a personal message with the Counsellor(s) maximum of 255 char"></textarea>
                                            </div>

                                            
                                            <div class="mt-4">
                                                <button class="btn btn-success btn-block waves-effect waves-light" type="submit">Book Appointment</button>
                                            </div>
                                            <div class="mt-4 text-center">
                                                <a href="/" class="text-muted"><i class="mdi mdi-calendar-blank-multiple "></i>Have an Appointment?</a>
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
