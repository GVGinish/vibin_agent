@extends('layout')
@section('link')
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
<script src="{{asset('assets/js/layout.js')}}"></script>
<!-- Bootstrap Css -->
<link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
<!-- Icons Css -->
<link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
<!-- App Css-->
<link href="{{asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />
<!-- custom Css-->
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
                  <h4 class="mb-sm-0">Blog</h4>
                  <div class="page-title-right">
                     <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
                        <li class="breadcrumb-item active">Blog</li>
                     </ol>
                  </div>
               </div>
            </div>
         </div>
         <!-- end page title -->
         <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                            <div class="card mb-3">
                                <div class="card">
                                <div class="card-body">
                                    <div class="col-xl-12">
                                        <div class="mt-xl-0">
                                            <div class="row">
                                            <div class="col-md-6">
                                                <div class="cus">
                                                    <div class="cus-view">
                                                    <h5>Customer: <span style="color:#0ab39c">{{ $customer_name }}</span></h5>
                                                    </div>
                                                    <div class="cus-view">
                                                    <h5>Policy Name: <span style="color:#0ab39c">{{ $policy_data->policy_name }}</span></h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="cus">
                                                    <div class="cus-view">
                                                    <h5>Policy Number: <span style="color:#0ab39c">{{ $policy_data->policy_number }}</span></h5>
                                                    </div>
                                                    <div class="cus-view">
                                                    <h5>Policy Type: <span style="color:#0ab39c">{{ $policy_data->policy_type }}</span></h5>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="cus">
                                                    <div class="cus-view">
                                                    <h5>Toatal Paid: <span style="color:#0ab39c">{{ $policy_data->paid_amount }}</span></h5>
                                                    </div>
                                               
                                                </div>
                                            </div>

                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        
                                <div class="tab-content text-muted">
                                        <div class="tab-pane active" id="pill-justified-home-1" role="tabpanel">
                                            <div class="card-body">
                                            <div class="table-responsive">
                                        <table class="table table-bordered" id="buttons-datatables-1" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">Sl.No.</th>
                                                    <th class="text-center">Policy Date</th>
                                                    <th class="text-center">Policy Status</th>
                                                    <th class="text-center">Premium Amount</th>
                                                    <th class="text-center">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($list as $li)
                                                    <tr>
                                                        <td  class="text-center">{{ $li->id }}</td>
                                                        <td class="text-center">{{ date('d M,Y',strtotime($li->date)) }}</td>
                                                        <td class="text-center">{{ $li->status }}</td>
                                                        <td class="text-center">{{ $li->premium_amount }}</td>
                                                        <td class="text-center">
                                                        @if ($li->status !== 'Paid')
                                                        <a href="#" class="status-button btn btn-primary btn-sm" 
                                                            data-status="Paid" 
                                                            data-id="{{ $li->id }}" 
                                                            data-premium_amount="{{ $li->premium_amount }}" 
                                                            data-paid_amount="{{ $li->paid_amount }}"
                                                            onclick="handleStatusClick(this)">Pay</a>
                                                        @else
                                                        <button type="button" class="btn btn-success btn-icon waves-effect waves-light btn-sm"><i class="ri-check-double-line"></i></button>
                                                        @endif
                                                    </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                </div>
                                <div class="modal fade" id="statusModal" tabindex="-1" role="dialog" aria-labelledby="statusModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="statusModalLabel">Confirm Status Change</h5>
                                                <button type="button"  class="btn btn-danger close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form id="changeForm">
                                                <div class="modal-body">
                                                    <label>Payable Amount</label>
                                                <input type="text" name="paid_amount" id="paid_amount" class="form-control" placeholder="Enter the amount want to pay"/>
                                                </div>
                                                <input type="hidden" name="status" id="selectedStatus"/>
                                                <input type="hidden" name="id" id="selectedId"/>
                                                <input type="hidden" name="policy_number" value="{{$policy_data->policy_number}}"/>
                                                <input type="hidden" name="premium_amount" value="{{$policy_data->premium_amount}}" id="premium_amount"/>
                                                <div class="modal-body">
                                                Are you sure you want to change the status to ?
                                                </div>
                                                <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" id="modalCancelButton">Cancel</button>
                                                <button type="button" class="btn btn-success" id="submitBtn" onclick="changeStatus()">Confirm</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>

         <!--end row-->
      </div>
      <!-- container-fluid -->
   </div>
</div> <!-- Closing the div.main-content -->

@endsection
@section('script')
<script src="{{asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
<script src="{{asset('assets/libs/node-waves/waves.min.js')}}"></script>
<script src="{{asset('assets/libs/feather-icons/feather.min.js')}}"></script>
<script src="{{asset('assets/js/pages/plugins/lord-icon-2.1.0.js')}}"></script>
<script src="{{asset('assets/js/plugins.js')}}"></script>
<script src="{{asset('assets/libs/apexcharts/apexcharts.min.js')}}"></script>
<script src="{{asset('assets/js/pages/dashboard-blog.init.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!--datatable js-->
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="{{asset('assets/js/pages/datatables.init.js')}}"></script>
<script src="{{asset('assets/js/app.js')}}"></script>
<script>
         $(document).ready(function() {
            $('#buttons-datatables-1').DataTable();
           
         });
         </script>
         <script>
   $(document).ready(function () {
       var selectedStatus;
       var selectedId;
       var currentButton;
       var premium_amount;
   
       window.handleStatusClick = function (element) {
           selectedStatus = $(element).data('status');
           selectedId = $(element).data('id');
           premium_amount = $(element).data('premium_amount');
           paidAmount = $(element).data('paid_amount');
           currentButton = $(element);
           

           var payField = (paidAmount == 0) ? premium_amount : (premium_amount - paidAmount);
   
           // Set modal data
           $('#selectedStatus').val(selectedStatus);
           $('#selectedId').val(selectedId);
           $('#paid_amount').val(payField);
           $('#modalStatusText').text(selectedStatus);
   
           // Show modal
           $('#statusModal').modal('show');
       };
   
       $('#modalCancelButton, #statusModal .close').on('click', function () {
           $('#statusModal').modal('hide');
       });
   
       $('#confirmStatusButton').on('click', function () {
           // Handle status update logic here (AJAX request or form submission)
           alert('Status updated to: ' + selectedStatus + ' for ID: ' + selectedId);
           $('#statusModal').modal('hide');
       });
   });
</script>
<script>
   function changeStatus() {
       var form = $("#changeForm");
       var premium_amount = parseFloat($('#premium_amount').val()); 
       var paid_amount = parseFloat($('#paid_amount').val()); 
       var submitBtn = $("#submitBtn"); // Target your button by ID or class

       // Validate the form
       form.validate({
           rules: {
               paid_amount: { required: true, number: true, min: 1 }
           },
           messages: {
               paid_amount: { required: "Please fill paid amount" }
           }
       });

       // Check if paid amount is greater than EMI amount
       if (paid_amount > premium_amount) {
           toastr.error("Pay amount cannot be greater than loan amount");
           return false;
       }

       // If the form is valid, proceed with AJAX submission
       if (form.valid()) {
           // Disable the button to prevent multiple clicks
           submitBtn.prop("disabled", true).html('<i class="fa fa-spinner fa-spin"></i> Processing...');

           var formData = new FormData(form[0]);

           $.ajax({
               url: "{{ route('change_status') }}", // Ensure you have defined the route in your Laravel routes file
               type: "POST",
               data: formData,
               processData: false,
               contentType: false,
               headers: {
                   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // Include CSRF token
               },
               success: function(response) {
                   if (response.status === "success") {
                       toastr.success("Amount paid successfully");
                       setTimeout(() => window.location.reload(), 1000);
                   } else if (response.status === "error") {
                       toastr.error(response.message);
                       // Re-enable button in case of error
                       submitBtn.prop("disabled", false).html('Pay Amount');
                   }
               },
               error: function(xhr) {
                   // Handle server or AJAX errors
                   if (xhr.status === 422) {
                       toastr.error("Validation failed. Please check your inputs.");
                   } else {
                       toastr.error("An error occurred during the AJAX request.");
                   }
                   // Re-enable button if there's an error
                   submitBtn.prop("disabled", false).html('Pay Amount');
               }
           });
       }
   }
</script>

<script> 
    document.getElementById('downloadPdfBtn').addEventListener('click', function () {
        const { jsPDF } = window.jspdf;
        const doc = new jsPDF();

        // **Get Loan Details**
        let customerName = "{{ $cust->cust_name ?? 'N/A' }}";
        let loanTotalAmount = "{{ $loan->loan_amount ?? '0' }}";
        let loanId = "{{ $loan->policy_number ?? 'N/A' }}"; // Loan ID

        // **Set Document Title**
        doc.text("Loan Schedule", 14, 10);

        // **Show Loan Details in PDF**
        doc.text(`Loan ID: ${loanId}`, 14, 20);
        doc.text(`Customer: ${customerName}`, 14, 30);
        doc.text(`Loan Total Amount: ${loanTotalAmount}`, 14, 40);

        let data = [];
        let serialNumber = 1; // Start serial number from 1

        document.querySelectorAll('.table tbody tr').forEach(row => {
            let rowData = [serialNumber]; // First column: Serial Number
            let columns = row.querySelectorAll('td');

            let emiDate = columns[0]?.textContent.trim() || ''; // EMI Date
            let amount = columns[1]?.textContent.trim() || ''; // Installment Amount

            // **Get Status Based on Button**
            let status = row.querySelector('.btn-success') ? 'Paid' : 'Unpaid';

            rowData.push(emiDate, amount, status);
            data.push(rowData);
            serialNumber++; // Increment serial number
        });

        doc.autoTable({
            head: [['S.No', 'EMI Date', 'Installment Amount', 'Status']],
            body: data,
            startY: 50, // Start table after loan details
        });

        // **Save PDF with Loan ID & Customer Name**
        doc.save(`Loan_${loanId}_${customerName}_Schedule.pdf`);
    });
</script>

@endsection