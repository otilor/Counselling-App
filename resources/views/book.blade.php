@extends('layouts.app')
@section('content')

<div class="account-pages my-5 pt-5">
        <div class="container">
                
            <!-- end row -->

            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body p-4">
                            <div class="p-2">
                                <h5 class="mb-5 text-center">Book an Appointment with the Counsellor</h5>
                                @include('inc.messages')
                            <form class="form-horizontal" name = "input_token" action="{{route('book_appointment')}}" method="POST">
                                    {{csrf_field()}}
                                    <div class="row">
                                        <div class="col-md-12">
                                            
                                            <div class="form-group mb-4">
                                                    <label for="appointment_date"><i class="mdi mdi-calendar-blank-multiple"></i> Appointment Date</label>
                                            <input class="form-control" name="appointment_date" type = "date" value= "{{$request->appointment_date or old('appointment_date')}}">
                                                <label for="userpassword"><i class="mdi mdi-message-text-lock-outline"></i> Personal Message</label>
                                            <textarea id="textarea" name = "personal_message" class="form-control" maxlength="255" rows="5" placeholder="Drop a personal message with the Counsellor(s) maximum of 255 char">{{$message or old('personal_message')}}</textarea>
                                            </div>

                                            
                                            <div class="mt-4">
                                                <button class="btn btn-success btn-block waves-effect waves-light" type="submit">Book Appointment</button>
                                            </div>
                                            <div class="mt-4 text-center" id = "have">
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

<script>
    $(document).ready(function(){
        $('#have').click(function(e){
            e.preventDefault();
            $.ajax({
                url: '/'

            }).done(function(response){
                $('body').html(response);
            });
        });
    });
</script>
@endsection
