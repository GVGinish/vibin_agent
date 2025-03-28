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
                  <form class="form-steps" autocomplete="off" id="addCustomer">
                    <input name="customer_id" value="{{(!empty($detail->customer_id)) ? $detail->customer_id : '' }}" type="text"readonly>
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
                                                    <input type="text" class="form-control" id="steparrow-gen-info-username-input" name="username" value="{{!empty($detail->username) ? $detail->username : ''}}" placeholder="Enter user name" required >
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="steparrow-gen-info-Fathername-input">Father Name</label>
                                                    <input type="text" class="form-control" id="steparrow-gen-info-Fathername-input" name="father_name" value="{{!empty($detail->father_name) ? $detail->father_name : ''}}" placeholder="Enter Fathername" required >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="steparrow-gen-info-mother-input">Mother Name</label>
                                                    <input type="text" class="form-control" id="steparrow-gen-info-mother-input" name="mother_name" value="{{!empty($detail->mother_name) ? $detail->mother_name : ''}}" placeholder="Enter mother name" required >
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="steparrow-gen-info-email-input">Date of Birth</label>
                                                    <input type="date" class="form-control" id="steparrow-gen-info--input" name="dob" placeholder="Enter date of birth" value="{{!empty($detail->dob) ? $detail->dob : ''}}" required max="{{date('Y-m-d')}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="steparrow-gen-info-nominee-input">Nominee Name</label>
                                                    <input type="text" class="form-control" id="steparrow-gen-info-nominee-input" name="nominee_name" value="{{!empty($detail->nominee_name) ? $detail->nominee_name : ''}}" placeholder="Enter nominee name" required >
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="steparrow-gen-info-n_dob-input">Nominee BOB</label>
                                                    <input type="date" class="form-control" id="steparrow-gen-info-n_dob-input" name="nominee_dob" placeholder="Enter nominee dob" value="{{!empty($detail->nominee_dob) ? $detail->nominee_dob : ''}}" required max="{{date('Y-m-d')}}" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">

                                        <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="steparrow-gen-info-phone-input">Phone</label>
                                                    <input type="text" class="form-control" id="steparrow-gen-info-phone-input" name="phone" placeholder="Enter phone number" value="{{!empty($detail->phone) ? $detail->phone : ''}}" required >
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="steparrow-gen-info-email-input">Email</label>
                                                    <input type="email" class="form-control" id="steparrow-gen-info-email-input" name="email" placeholder="Enter email" value="{{!empty($detail->email) ? $detail->email : ''}}" required >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="steparrow-gen-info-address-input">Address</label>
                                                    <textarea type="text" class="form-control" id="steparrow-gen-info-address-input" name="address" placeholder="Enter address"  required >{{!empty($detail->address) ? $detail->address : ''}}</textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="steparrow-gen-info-occupation-input">Occupation</label>
                                                    <input type="text" class="form-control" id="steparrow-gen-info-occupation-input" name="occupation" placeholder="Enter occupation" value="{{!empty($detail->occupation) ? $detail->occupation : ''}}" required >
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
                                                    <input type="text" class="form-control" id="steparrow-gen-info-bank-input" name="bank_name" value="{{!empty($detail->bank_name) ? $detail->bank_name : ''}}" placeholder="Enter bank name" required >
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="steparrow-gen-info-ifdc-input">IFSC</label>
                                                    <input type="text" class="form-control" id="steparrow-gen-info-ifsc-input" name="ifsc" value="{{!empty($detail->ifsc) ? $detail->ifsc : ''}}" 
                                                        placeholder="Enter IFSC" required  
                                                        title="Enter a valid IFSC code" oninput="this.value = this.value.toUpperCase();">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="steparrow-gen-info-account-input">Account Number</label>
                                                    <input type="text" class="form-control" id="steparrow-gen-info-account-input" name="account_num" placeholder="Enter account number" value="{{!empty($detail->account_num) ? $detail->account_num : ''}}" required >
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
                                                    <label class="form-label" for="steparrow-gen-info-policy-type-input">Policy Type</label>
                                                    <select type="text" class="form-control" id="steparrow-gen-info-policy-type-input" name="policy_type"  required >
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
                                                    <label class="form-label" for="steparrow-gen-info-amount-input">Premium Amount</label>
                                                    <input type="text" class="form-control" id="steparrow-gen-info-amount-input"  name="premium_amount" placeholder="Enter Premium Amount" required >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="steparrow-gen-info-policy-name-input">Policy Name</label>
                                                    <input type="text" class="form-control"  name="policy_name" id="steparrow-gen-info-policy-name-input" placeholder="Enter Policy Name" required >
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="steparrow-gen-info-policy-number-input">Policy Number</label>
                                                    <input type="text" class="form-control"  id="steparrow-gen-info-policy-number-input" name="policy_number" placeholder="Enter Policy Number" required >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="steparrow-gen-info-Premium-term-input">Premium Term</label>
                                                    <input type="text" class="form-control"  name="premium_term" id="premium_term" placeholder="Enter Premium term" required >
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="steparrow-gen-info-Maturity-input">Maturity Term</label>
                                                    <input type="text" class="form-control"  id="maturity_term" name="maturity_term" placeholder="Enter Maturity Term" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="steparrow-gen-info-Start-term-input">Start Date</label>
                                                    <input type="date" class="form-control"  name="start_date" id="start_date" placeholder="Enter start date" required >
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
    <script src="{{asset('public/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('public/assets/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{asset('public/assets/libs/node-waves/waves.min.js')}}"></script>
    <script src="{{asset('public/assets/libs/feather-icons/feather.min.js')}}"></script>
    <script src="{{asset('public/assets/js/pages/plugins/lord-icon-2.1.0.js')}}"></script>
    <script src="{{asset('public/assets/js/plugins.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="{{asset('public/assets/js/pages/form-wizard.init.js')}}"></script>
    <script src="{{asset('public/assets/js/app.js')}}"></script>

    <script>
$(document).ready(function () {
    var form = $("#addCustomer");

    // Custom Validation Rule for Maturity Term
    $.validator.addMethod("maturityGreaterThanPremium", function(value, element) {
        var premiumTerm = parseFloat($("#premium_term").val()) || 0;
        return parseFloat(value) > premiumTerm;
    }, "Maturity term must be greater than premium term");

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
            ifsc: { required: true, minlength: 11, maxlength: 11},
            account_num: { required: true, digits: true, minlength: 11, maxlength: 18 },
            policy_type: { required: true },
            premium_amount: { required: true, digits: true, min: 1 },
            policy_number: { required: true, digits: true, min: 1 },
            policy_name: { required: true },
            premium_term: { required: true, digits: true, min: 1 },
            maturity_term: { required: true, digits: true, min: 1, maturityGreaterThanPremium: true },
            start_date: { required: true },

        },
   
            messages: {
                username: {
                    required: "Please enter a username"
                },
                father_name: {
                    required: "Please enter a father name"
                },
                mother_name: {
                    required: "Please enter a mother name"
                },
                dob: {
                    required: "Please enter a valid date of birth"
                },
                nominee_name: {
                    required: "Please enter a nominee name"
                },
                nominee_dob: {
                    required: "Please enter a nominee date of birth"
                },
                phone: {
                    required: "Please enter a phone number",
                    digits: "Only numbers are allowed",
                    minlength: "Phone number must be at least 10 digits",
                    maxlength: "Phone number cannot exceed 15 digits"
                },
                email: {
                    required: "Please enter an email address",
                    email: "Please enter a valid email address"
                },
                address: {
                    required: "Please enter an address"
                },
                occupation: {
                    required: "Please enter an occupation"
                },
                bank_name: {
                    required: "Please enter a bank name"
                },
                ifsc: {
                    required: "Please enter an IFSC code",
                    minlength: "IFSC code must be exactly 11 characters",
                    maxlength: "IFSC code must be exactly 11 characters"
                  },
                account_num: {
                    required: "Please enter an account number",
                    digits: "Only numbers are allowed",
                    minlength: "Account number must be at least 11 digits",
                    maxlength: "Account number cannot exceed 18 digits"
                },
                policy_type: {
                    required: "Please select a policy type"
                },
                premium_amount: {
                    required: "Please enter the premium amount",
                    digits: "Only numbers are allowed",
                    min: "Premium amount must be greater than 0"
                },
                policy_number: {
                    required: "Please enter a policy number",
                    digits: "Only numbers are allowed",
                    min: "Policy number must be greater than 0"
                },
                policy_name: {
                    required: "Please enter a policy name"
                },
                premium_term: {
                    required: "Please enter the premium term",
                    digits: "Only numbers are allowed",
                    min: "Premium term must be greater than 0"
                },
                maturity_term: {
                    required: "Please enter the maturity term",
                    digits: "Only numbers are allowed",
                    min: "Maturity term must be greater than 0",
                    maturityGreaterThanPremium: "Maturity term must be greater than premium term"
                },
                start_date: {
                    required: "Please select start date"                  
                }

        }
    });

    // AJAX Form Submission
    $("#addCustomer").on("submit", function (e) {
        e.preventDefault();

        if (form.valid()) {
            $.ajax({
                url: "{{ route('add_customer') }}",
                type: "POST",
                data: form.serialize(),
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
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


    @endsection
