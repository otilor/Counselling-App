@extends ('layouts.admin.app')


@section ('content')
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        
                        <!--
                        <h4 class="mb-0 font-size-18">Current Info</h4>
                        -->
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">AnCounsel</a></li>
                                <li class="breadcrumb-item active">Admin Dashboard</li>
                            </ol>
                        </div>
                        
                    </div>
                </div>
            </div>     
            <!-- end page title -->

            

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="header-title">All Applications</h4>
                            <p class="card-title-desc">Latest applications are shown once reloaded!
                            </p>
                        <div class="">
                        <h3>Hello, {{ Auth::user()->name }}, so far, you've had {{ count($applications) }} applications. ain't that cute?</h3>
                        </div>
                        
                            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                <tr>
                                    <th>Appointment Date</th>
                                    <th>Personal Message</th>
                                    <th>Status</th>
                                    
                                    <th>Token</th>
                                </tr>
                                </thead>


                                <tbody>
                                    @foreach ($applications as $application)
                                <tr>
                                    <td>{{ $application->appointment_date }}</td>
                                    <td>{{ str_limit($application->personal_message, 25) }}</td>
                                    
                                    @if ($application->application_status == 0)
                                    <td class="badge badge-warning">Pending</td>
                                    
                                    @elseif ($application->application_status == 1)
                                    <td class="badge badge-success">Approved</td>

                                    @else
                                    <td class="badge badge-danger">Declined</td>

                                    @endif
                                    <td>{{ $application->application_token }}</td>
                                    
                                </tr>
                                @endforeach
                                
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->

        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

    
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    2019 © Gabriel Akinyosoye.
                </div>
                <div class="col-sm-6">
                    <div class="text-sm-right d-none d-sm-block">
                        Crafted with <i class="mdi mdi-heart text-danger"></i> by <a target = "_blank" href="https://github.com/GabielFemi">Gabriel Akinyosoye</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
@endsection