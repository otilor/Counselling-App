@extends('layouts.status_app')
@section('content')

        <!-- Begin page -->
        <div id="layout-wrapper">

            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="/assets/images/logo-sm-dark.png" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="/assets/images/logo-dark.png" alt="" height="20">
                                </span>
                            </a>

                            <a href="" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="/assets/images/logo-sm-light.png" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="/assets/images/logo-light.png" alt="" height="20">
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                            <i class="mdi mdi-backburger"></i>
                        </button>

                        <!-- App Search-->
                        
                    </div>

                    <div class="d-flex">

                        <div class="dropdown d-inline-block d-lg-none ml-2">
                            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-magnify"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                                aria-labelledby="page-header-search-dropdown">
                    
                                <form class="p-3">
                                    <div class="form-group m-0">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                            <div class="input-group-append">paxy
                                                <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        

                        <div class="dropdown d-none d-lg-inline-block ml-1">
                            <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                                <i class="mdi mdi-fullscreen"></i>
                            </button>
                        </div>

                        

                        

                        <div class="dropdown d-none d-lg-inline-block ml-1">
                        <form action="{{ route('logout') }}" method="POST">
                            {{ csrf_field() }}
                            
                            <button type="submit" class="btn header-item noti-icon waves-effect">
                            
                                <i class="mdi mdi-logout"></i>
                            </button>
                            
                        
                        </form>
                        </div>
                    </div>
                </div>
            </header>

            <!-- ========== Left Sidebar Start ========== -->
           @include('inc.nav')
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0 font-size-18">Dashboard</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">AnCounsel</a></li>
                                            <li class="breadcrumb-item active">Admin Profile</li>
                                        </ol>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>     
                        <!-- end page title -->
                        
                            <h1 class="text-center" style="font-family:'Courier New', Courier, monospace; text-decoration:underline"><strong>Create Admin Profile</strong></h1>
                            
                            <hr>
                    
                    

                            
                            <hr>    
                            <form method="POST">
                                @include('inc.messages')
                            {{ csrf_field() }}
                            <label>Enter email:</label>
                            <input class="form-control" type="email" value="{{old('email')}}" name= "email" required = "">
                            <br>

                            <label>Enter name:</label>
                            <input class="form-control" type="text" value="{{old('name')}}" name= "name" required= "">
                            <br>

                            <label>Enter Password:</label>
                            <input class="form-control" type="password" value="{{old('password')}}" name= "password" required = "">
                            <br>

                            <label>Confirm Password:</label>
                            <input class="form-control" type="password" value="{{old('confirm_password')}}" name= "password_confirmation" required="" >
                            <br>
                            
                            
                            <button type="submit" class="col-2 btn btn-primary waves-effect waves-light text-center">Create Account</button>
                            

                            </form>
                
                            
                            <!-- Change Font later on -->
                        
                        
                        

                        
                        
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                2019 © AnCounsel.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-right d-none d-sm-block">
                                    <p>Crafted by <a href="https://github.com/GabielFemi">Akinyosoye Gabriel</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
        
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        

        <!-- JAVASCRIPT -->
        
        @endsection
        