@extends('layout')
@section('link')
    <script src="{{asset('assets/js/layout.js')}}"></script>
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/custom.min.css')}}" rel="stylesheet" type="text/css" />
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
                  





<form class="form-steps" autocomplete="off" id="addCustomer">
                            <div class="text-center pt-3 pb-4 mb-1 d-flex justify-content-center">
                                <img src="{{asset('assets/images/logo-dark.png')}}" class="card-logo card-logo-dark" alt="logo dark" height="17">
                                <img src="{{asset('assets/images/logo-light.png')}}" class="card-logo card-logo-light" alt="logo light" height="17">
                            </div>
                            <div class="step-arrow-nav mb-4">

                                <ul class="nav nav-pills custom-nav nav-justified" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link done" id="steparrow-gen-info-tab" data-bs-toggle="pill" data-bs-target="#steparrow-gen-info" type="button" role="tab" aria-controls="steparrow-gen-info" aria-selected="true">General</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="steparrow-description-info-tab" data-bs-toggle="pill" data-bs-target="#steparrow-description-info" type="button" role="tab" aria-controls="steparrow-description-info" aria-selected="false">Bank Details</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="steparrow-policy-info-tab" data-bs-toggle="pill" data-bs-target="#steparrow-policy-info" type="button" role="tab" aria-controls="steparrow-policy-info" aria-selected="false">Add Policy </button>
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
                                                    <input type="text" class="form-control" id="steparrow-gen-info-username-input" name="username" placeholder="Enter user name" required >
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="steparrow-gen-info-Fathername-input">Father Name</label>
                                                    <input type="text" class="form-control" id="steparrow-gen-info-Fathername-input" name="father_name" placeholder="Enter Fathername" required >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="steparrow-gen-info-mother-input">Mother Name</label>
                                                    <input type="text" class="form-control" id="steparrow-gen-info-mother-input" name="mother_name" placeholder="Enter mother name" required >
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="steparrow-gen-info-email-input">Date of Birth</label>
                                                    <input type="date" class="form-control" id="steparrow-gen-info--input" name="dob" placeholder="Enter date of birth" required max="{{date('Y-m-d')}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="steparrow-gen-info-nominee-input">Nominee Name</label>
                                                    <input type="text" class="form-control" id="steparrow-gen-info-nominee-input" name="nominee_name" placeholder="Enter nominee name" required >
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="steparrow-gen-info-n_dob-input">Nominee BOB</label>
                                                    <input type="date" class="form-control" id="steparrow-gen-info-n_dob-input" name="nominee_dob" placeholder="Enter nominee dob" required max="{{date('Y-m-d')}}" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">

                                        <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="steparrow-gen-info-phone-input">Phone</label>
                                                    <input type="text" class="form-control" id="steparrow-gen-info-phone-input" name="phone" placeholder="Enter phone number" required >
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="steparrow-gen-info-email-input">Email</label>
                                                    <input type="email" class="form-control" id="steparrow-gen-info-email-input" name="email" placeholder="Enter email" required >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="steparrow-gen-info-address-input">Address</label>
                                                    <textarea type="text" class="form-control" id="steparrow-gen-info-address-input" name="address" placeholder="Enter address" required ></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="steparrow-gen-info-occupation-input">Occupation</label>
                                                    <input type="text" class="form-control" id="steparrow-gen-info-occupation-input" name="occupation" placeholder="Enter occupation" required >
                                                </div>
                                            </div>
                                        </div>
                                      
                                    </div>
                                    <div class="d-flex align-items-start gap-3 mt-4">
                                        <button type="button" class="btn btn-success btn-label right ms-auto nexttab nexttab" data-nexttab="steparrow-description-info-tab"><i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Go to Bank</button>
                                    </div>
                                </div>
                                <!-- end tab pane -->

                                <div class="tab-pane fade" id="steparrow-description-info" role="tabpanel" aria-labelledby="steparrow-description-info-tab">
                                    <div>
                                    <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="steparrow-gen-info-bank-input">Bank Name</label>
                                                    <input type="text" class="form-control" id="steparrow-gen-info-bank-input" name="bank_name" placeholder="Enter bank name" required >
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="steparrow-gen-info-ifdc-input">IFSC</label>
                                                    <input type="text" class="form-control" id="steparrow-gen-info-ifsc-input" name="ifsc" 
                                                        placeholder="Enter IFSC" required  
                                                        title="Enter a valid IFSC code" oninput="this.value = this.value.toUpperCase();">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="steparrow-gen-info-account-input">Account Number</label>
                                                    <input type="text" class="form-control" id="steparrow-gen-info-account-input" name="account_num" placeholder="Enter account number" required >
                                                </div>
                                            </div>
                                        
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-start gap-3 mt-4">
                                    <button type="button" class="btn btn-light btn-label previestab" data-previous="steparrow-gen-info-tab"><i class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i> Back to General</button>

                                        <button type="button" class="btn btn-success btn-label right ms-auto nexttab nexttab" data-nexttab="steparrow-policy-info-tab"><i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Go to Policy</button>
                                    </div>
                                                </div>
                                <!-- end tab pane -->



                                <div class="tab-pane fade" id="steparrow-policy-info" role="tabpanel" aria-labelledby="steparrow-policy-info-tab">
                                    <div>
                                    <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="steparrow-gen-info-bank-input">Policy Type</label>
                                                    <select type="text" class="form-control" id="steparrow-gen-info-polict-input" name="policy_type"  required >
                                                    <option selected disabled>Select Policy Type</option> 
                                                    <option value="Monthly">Monthly</option> 
                                                      <option value="Quarterly">Quarterly</option>    
                                                      <option value="Half Yearly">Half Yearly</option>    
                                                      <option value="Yearly">Yearly</option>    
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="steparrow-gen-info-Premium-input">Premium Amount</label>
                                                    <input type="text" class="form-control"  id="premium_amount" name="premium_amount" placeholder="Enter Premium Amount" required >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="steparrow-gen-info-Tenure-input">Tenure</label>
                                                    <input type="text" class="form-control"  name="tenure" id="tenure" placeholder="Enter Tenure" required >
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="steparrow-gen-info-Maturity-input">Maturity Amount</label>
                                                    <input type="text" class="form-control"  id="maturity_amount" name="maturity_amount" placeholder="Enter Maturity Amount" required readonly>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-start gap-3 mt-4">
                                        <button type="button" class="btn btn-light btn-label previestab" data-previous="steparrow-description-info-tab"><i class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i> Back to Bank</button>
                                        <button type="submit" class="btn btn-success btn-label right ms-auto">
                    <i class="ri-check-line label-icon align-middle fs-16 ms-2"></i> Submit
                </button>
                                                </div>
                                </div>








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
    <script src="{{asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{asset('assets/libs/node-waves/waves.min.js')}}"></script>
    <script src="{{asset('assets/libs/feather-icons/feather.min.js')}}"></script>
    <script src="{{asset('assets/js/pages/plugins/lord-icon-2.1.0.js')}}"></script>
    <script src="{{asset('assets/js/plugins.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="{{asset('assets/js/pages/form-wizard.init.js')}}"></script>
    <script src="{{asset('assets/js/app.js')}}"></script>

    <script src="{{ asset('assets/js/validation.js') }}"></script>
    <script>
$(document).ready(function () {
    var form = $("#addCustomer");

    form.validate({
        rules: {
            username: { required: true },
            father_name: { required: true },
            mother_name: { required: true },
            dob: { required: true },
            nominee_name: { required: true },
            nominee_dob: { required: true },
            phone: { required: true, digits: true, minlength: 10, maxlength: 15 },
            email: { required: true, email: true },
            address: { required: true },
            occupation: { required: true },
            bank_name: { required: true },
            ifsc: { required: true ,minlength:11,maxlength:11},
            account_num: { required: true, digits: true,minlength:11,maxlength:18},
            policy_type: { required: true},
            premium_amount: { required: true ,digits:true, min:1 },
            tenure: { required: true ,digits:true , min:1 },
            maturity_amount: { required: true ,digits:true, min:1 }


        },
        messages: {
            username: "Please enter a username",
            father_name: "Please enter a father name",
            mother_name: "Please enter a mother name",
            dob: "Please enter a valid date of birth",
            nominee_name: "Please enter a nominee name",
            nominee_dob: "Please enter a nominee date of birth",
            phone: "Please enter a valid phone number",
            email: "Please enter a valid email",
            address: "Please enter an address",
            occupation: "Please enter an occupation",
            bank_name: "Please enter a bank name",
            ifsc: "Please enter a valid IFSC code",
            account_num: "Please enter an account number",
            policy_type: "Please select policy type",
            premium_amount: "Please enter an premium amount",
            tenure: "Please enter an tenure",
            maturity_amount: "Please enter an maturity amount",

        }
    });

    // AJAX Form Submission with CSRF Token
    $("#addCustomer").on("submit", function (e) {
        e.preventDefault(); // Prevent default form submission

        if (form.valid()) { // Check if form is valid
            $.ajax({
                url: "{{ route('add_customer') }}", // Replace with your actual route
                type: "POST",
                data: form.serialize(),
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content") // Add CSRF token
                },
                dataType: "json",
                beforeSend: function () {
                    $(".nexttab").prop("disabled", true).text("Submitting...");
                },
                success: function (response) {
                    if (response.status === "success") {
                        toastr.success("Customer added successfully");
                        setTimeout(() => window.location.reload(), 1000);
                    } else {
                        toastr.error(response.message);

                    }
                    $(".nexttab").prop("disabled", false).text("Submit");
                },
                error: function (xhr) {
                    console.log(xhr.responseText);
                    
                    toastr.error("An error occurred. Please try again.");

                    $(".nexttab").prop("disabled", false).text("Submit");
                }
            });
        }
    });
});
</script>
<script>
    $(document).on('input', '#tenure', function() {
        var premium_amount = parseFloat($('#premium_amount').val()) || 0;
        var tenure = parseFloat($(this).val()) || 0;

        // Ensure premium_amount is not empty before calculating
        if (premium_amount > 0) {
            var maturity_amount = premium_amount * tenure;
            $('#maturity_amount').val(maturity_amount);
        } else {
            $('#maturity_amount').val(''); // Clear result if premium_amount is empty
        }
    });
</script>


    @endsection
