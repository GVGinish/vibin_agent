@extends('layout')
@section('link')
    <script src="{{asset('public/assets/js/layout.js')}}"></script>
    <link href="{{asset('public/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('public/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('public/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('public/assets/css/custom.min.css')}}" rel="stylesheet" type="text/css" />
    @endsection
  
  @section('content')
  <div class="main-content">

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Wizard</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                            <li class="breadcrumb-item active">Wizard</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
          
            <!-- end col -->
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mb-0">Add New Policy</h4>
                    </div><!-- end card header -->
                    <div class="card-body">
                        <form action="#" class="form-steps" autocomplete="off">
                            <div class="text-center pt-3 pb-4 mb-1 d-flex justify-content-center">
                                <img src="{{asset('public/assets/images/logo-dark.png')}}" class="card-logo card-logo-dark" alt="logo dark" height="17">
                                <img src="{{asset('public/assets/images/logo-light.png')}}" class="card-logo card-logo-light" alt="logo light" height="17">
                            </div>
                            <div class="step-arrow-nav mb-4">

                                <ul class="nav nav-pills custom-nav nav-justified" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link done" id="steparrow-gen-info-tab" data-bs-toggle="pill" data-bs-target="#steparrow-gen-info" type="button" role="tab" aria-controls="steparrow-gen-info" aria-selected="true">General</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="steparrow-description-info-tab" data-bs-toggle="pill" data-bs-target="#steparrow-description-info" type="button" role="tab" aria-controls="steparrow-description-info" aria-selected="false">Description</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-experience-tab" data-bs-toggle="pill" data-bs-target="#pills-experience" type="button" role="tab" aria-controls="pills-experience" aria-selected="false">Finish</button>
                                    </li>
                                </ul>
                            </div>

                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="steparrow-gen-info" role="tabpanel" aria-labelledby="steparrow-gen-info-tab">
                                    <div>
                                        <div class="row">
                                        <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="steparrow-gen-info-username-input">User Name</label>
                                                    <input type="text" class="form-control" id="steparrow-gen-info-username-input" placeholder="Enter user name" required >
                                                    <div class="invalid-feedback">Please enter a user name</div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="steparrow-gen-info-Fathername-input">Father Name</label>
                                                    <input type="Fathername" class="form-control" id="steparrow-gen-info-Fathername-input" placeholder="Enter Fathername" required >
                                                    <div class="invalid-feedback">Please enter an father name</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="steparrow-gen-info-mother-input">Mother Name</label>
                                                    <input type="text" class="form-control" id="steparrow-gen-info-mother-input" placeholder="Enter mother name" required >
                                                    <div class="invalid-feedback">Please enter a mother name</div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="steparrow-gen-info-email-input">Date of Birth</label>
                                                    <input type="date" class="form-control" id="steparrow-gen-info-email-input" placeholder="Enter email" required max="{{date('Y-m-d')}}">
                                                    <div class="invalid-feedback">Please enter an DOB</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="steparrow-gen-info-nominee-input">Nominee Name</label>
                                                    <input type="text" class="form-control" id="steparrow-gen-info-nominee-input" placeholder="Enter nominee name" required >
                                                    <div class="invalid-feedback">Please enter a nominee name</div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="steparrow-gen-info-n_dob-input">Nominee BOB</label>
                                                    <input type="date" class="form-control" id="steparrow-gen-info-n_dob-input" placeholder="Enter nominee dob" required >
                                                    <div class="invalid-feedback">Please enter an nominee name</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="steparrow-gen-info-phone-input">Phone</label>
                                                    <input type="text" class="form-control" id="steparrow-gen-info-phone-input" placeholder="Enter phone number" required >
                                                    <div class="invalid-feedback">Please enter a phone number</div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="steparrow-gen-info-email-input">Email</label>
                                                    <input type="email" class="form-control" id="steparrow-gen-info-email-input" placeholder="Enter email" required >
                                                    <div class="invalid-feedback">Please enter an email address</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="steparrow-gen-info-address-input">Address</label>
                                                    <textarea type="text" class="form-control" id="steparrow-gen-info-address-input" placeholder="Enter address" required ></textarea>
                                                    <div class="invalid-feedback">Please enter a address</div>
                                                </div>
                                            </div>
                                        </div>
                                      
                                    </div>
                                    <div class="d-flex align-items-start gap-3 mt-4">
                                        <button type="button" class="btn btn-success btn-label right ms-auto nexttab nexttab" data-nexttab="steparrow-description-info-tab"><i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Go to more info</button>
                                    </div>
                                </div>
                                <!-- end tab pane -->

                                <div class="tab-pane fade" id="steparrow-description-info" role="tabpanel" aria-labelledby="steparrow-description-info-tab">
                                    <div>
                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">Upload Image</label>
                                            <input class="form-control" type="file" id="formFile" />
                                        </div>
                                        <div>
                                            <label class="form-label" for="des-info-description-input">Description</label>
                                            <textarea class="form-control" placeholder="Enter Description" id="des-info-description-input" rows="3" required></textarea>
                                            <div class="invalid-feedback">Please enter a description</div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-start gap-3 mt-4">
                                        <button type="button" class="btn btn-light btn-label previestab" data-previous="steparrow-gen-info-tab"><i class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i> Back to General</button>
                                        <button type="button" class="btn btn-success btn-label right ms-auto nexttab nexttab" data-nexttab="pills-experience-tab"><i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Submit</button>
                                    </div>
                                </div>
                                <!-- end tab pane -->

                                <div class="tab-pane fade" id="pills-experience" role="tabpanel">
                                    <div class="text-center">

                                        <div class="avatar-md mt-5 mb-4 mx-auto">
                                            <div class="avatar-title bg-light text-success display-4 rounded-circle">
                                                <i class="ri-checkbox-circle-fill"></i>
                                            </div>
                                        </div>
                                        <h5>Well Done !</h5>
                                        <p class="text-muted">You have Successfully Signed Up</p>
                                    </div>
                                </div>
                                <!-- end tab pane -->
                            </div>
                            <!-- end tab content -->
                        </form>
                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->
        </div><!-- end row -->
     
    </div>
    <!-- container-fluid -->
</div>

</div>
        @endsection
       
       @section('script')
  
    <!-- JAVASCRIPT -->
    <script src="{{asset('public/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('public/assets/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{asset('public/assets/libs/node-waves/waves.min.js')}}"></script>
    <script src="{{asset('public/assets/libs/feather-icons/feather.min.js')}}"></script>
    <script src="{{asset('public/assets/js/pages/plugins/lord-icon-2.1.0.js')}}"></script>
    <script src="{{asset('public/assets/js/plugins.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="{{asset('public/assets/js/pages/form-wizard.init.js')}}"></script>
    <script src="{{asset('public/assets/js/app.js')}}"></script>

    @endsection
