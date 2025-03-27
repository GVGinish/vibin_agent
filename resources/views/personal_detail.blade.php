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
                        <div class="row">
                         
                         
                           <div class="col-lg-12">
                           <div class="card">
                           <div class="card-body">
                              <!-- Nav tabs -->
                              <ul class="nav nav-pills nav-justified mb-3" role="tablist">
                                 <li class="nav-item waves-effect waves-light">
                                    <a class="nav-link active">Profile Detail</a>
                                 </li>
                              </ul>
                              <!-- Tab panes -->
                              <div class="tab-content text-muted">
                                 <div class="tab-pane active" id="pill-justified-home-1" role="tabpanel">
                                    <div class="card-body">
                                       <div class="table-responsive">
                                          <table id="buttons-datatables-1" class="display table table-bordered" style="width:100%">
                                             <thead>
                                                   <tr>
                                                      <th  class="text-center">Sl.No.</th>
                                                      <th  class="text-center">Name</th>
                                                      <th  class="text-center">DOB</th>
                                                      <th  class="text-center">Phone</th>
                                                      <th  class="text-center">Email</th>
                                                      <th  class="text-center">Nominee Name</th>
                                                      <th  class="text-center">Nominee DOB</th>
                                                      <th  class="text-center">Add Policy</th>
                                                      <th  class="text-center">View Policy</th>
                                                   </tr>
                                             </thead>
                                             <tbody>
                                                @php $c=1; @endphp
                                                @foreach($list as $li)
                                                   <tr>
                                                      <td  class="text-center">{{$c++}}</td>
                                                      <td  class="text-center">{{$li->username}}</td>
                                                      <td  class="text-center">{{date('d M,Y',strtotime($li->dob))}}</td>
                                                      <td  class="text-center">{{$li->phone}}</td>
                                                      <td  class="text-center">{{$li->email}}</td>
                                                      <td  class="text-center">{{$li->nominee_name}}</td>
                                                      <td  class="text-center">{{date('d M,Y',strtotime($li->nominee_dob))}}</td>
                                                      <td  class="text-center"><a href="{{route('add_customer_page',['type'=>$li->customer_id])}}"class="btn btn-sm btn-primary">Add new policy</a></td>                                                      
                                                      <td  class="text-center"><a href="{{route('policy_list',$li->customer_id)}}"class="btn btn-sm btn-warning">View policy</a></td>
                                                   </tr>
                                                 @endforeach  
                                                </tbody>
                                          </table>
                                       </div>
                                   </div>
                                 </div>
                              </div>
                           </div>
                           <!-- end card-body -->
                        </div>
                         
                          
                        </div>
                        <!--end row-->
                     </div>
                     <!--end col-->
                 
                 
                     <!--end col-->
                  </div>
                  <!--end row-->
               </div>
               <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
            <footer class="footer">
               <div class="container-fluid">
                  <div class="row">
                     <div class="col-sm-6">
                        <script>document.write(new Date().getFullYear())</script> © Velzon.
                     </div>
                     <div class="col-sm-6">
                        <div class="text-sm-end d-none d-sm-block">
                           Design & Develop by Themesbrand
                        </div>
                     </div>
                  </div>
               </div>
            </footer>
         </div>

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
      <script src="{{asset('assets/js/pages/datatables.init.js')}}"></script>
      <script src="{{asset('assets/js/app.js')}}"></script>
      <script>
         $(document).ready(function() {
            $('#buttons-datatables-1').DataTable();
            $('#buttons-datatables-2').DataTable();
            $('#buttons-datatables-3').DataTable();
            $('#buttons-datatables-4').DataTable();
         });
         </script>
  
      @endsection
