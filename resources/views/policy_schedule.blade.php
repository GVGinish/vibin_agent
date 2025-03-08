@extends('layout')
@section('link')
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
<script src="{{asset('public/assets/js/layout.js')}}"></script>
<!-- Bootstrap Css -->
<link href="{{asset('public/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
<!-- Icons Css -->
<link href="{{asset('public/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
<!-- App Css-->
<link href="{{asset('public/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />
<!-- custom Css-->
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
                                                            <a href="{{route('pay',$li->id)}}" class="btn btn-sm btn-primary">Pay</a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
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
<script src="{{asset('public/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('public/assets/libs/simplebar/simplebar.min.js')}}"></script>
<script src="{{asset('public/assets/libs/node-waves/waves.min.js')}}"></script>
<script src="{{asset('public/assets/libs/feather-icons/feather.min.js')}}"></script>
<script src="{{asset('public/assets/js/pages/plugins/lord-icon-2.1.0.js')}}"></script>
<script src="{{asset('public/assets/js/plugins.js')}}"></script>
<script src="{{asset('public/assets/libs/apexcharts/apexcharts.min.js')}}"></script>
<script src="{{asset('public/assets/js/pages/dashboard-blog.init.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
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
<script src="{{asset('public/assets/js/pages/datatables.init.js')}}"></script>
<script src="{{asset('public/assets/js/app.js')}}"></script>
<script>
         $(document).ready(function() {
            $('#buttons-datatables-1').DataTable();
           
         });
         </script>
@endsection