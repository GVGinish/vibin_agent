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
                     <div class="col-xl-9">
                        <div class="row">
                           <div class="col-lg-3">
                              <div class="card">
                                 <div class="card-body d-flex gap-3 align-items-center">
                                    <div class="avatar-sm">
                                       <div class="avatar-title border bg-success-subtle border-success border-opacity-25 rounded-2 fs-17">
                                          <i data-feather="users" class="icon-dual-success"></i>
                                       </div>
                                    </div>
                                    <div class="flex-grow-1">
                                       <h5 class="fs-15">17.6k</h5>
                                       <p class="mb-0 text-muted">Followers</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!--end col-->
                           <div class="col-lg-3">
                              <div class="card">
                                 <div class="card-body d-flex gap-3 align-items-center">
                                    <div class="avatar-sm">
                                       <div class="avatar-title border bg-warning-subtle border-warning border-opacity-25 rounded-2 fs-17">
                                          <i data-feather="file-text" class="icon-dual-warning"></i>
                                       </div>
                                    </div>
                                    <div class="flex-grow-1">
                                       <h5 class="fs-15">149</h5>
                                       <p class="mb-0 text-muted">Total Post</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!--end col-->
                           <div class="col-lg-3">
                              <div class="card">
                                 <div class="card-body d-flex gap-3 align-items-center">
                                    <div class="avatar-sm">
                                       <div class="avatar-title border bg-danger-subtle border-danger border-opacity-25 rounded-2 fs-17">
                                          <i data-feather="heart" class="icon-dual-danger"></i>
                                       </div>
                                    </div>
                                    <div class="flex-grow-1">
                                       <h5 class="fs-15">24.8k</h5>
                                       <p class="mb-0 text-muted">Likes</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!--end col-->
                           <div class="col-lg-3">
                              <div class="card">
                                 <div class="card-body d-flex gap-3 align-items-center">
                                    <div class="avatar-sm">
                                       <div class="avatar-title border bg-primary-subtle border-primary border-opacity-25 rounded-2 fs-17">
                                          <i data-feather="bar-chart" class="icon-dual-primary"></i>
                                       </div>
                                    </div>
                                    <div class="flex-grow-1">
                                       <h5 class="fs-15">54.3k</h5>
                                       <p class="mb-0 text-muted">Views</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!--end col-->
                           <div class="col-lg-12">
                           <div class="card">
                           <div class="card-body">
                              <!-- Nav tabs -->
                              <ul class="nav nav-pills nav-justified mb-3" role="tablist">
                                 <li class="nav-item waves-effect waves-light">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#pill-justified-home-1" role="tab">
                                      Montly
                                    </a>
                                 </li>
                                 <li class="nav-item waves-effect waves-light">
                                    <a class="nav-link" data-bs-toggle="tab" href="#pill-justified-profile-1" role="tab">
                                    Quarterly
                                    </a>
                                 </li>
                                 <li class="nav-item waves-effect waves-light">
                                    <a class="nav-link" data-bs-toggle="tab" href="#pill-justified-messages-1" role="tab">
                                    Half Yearly
                                    </a>
                                 </li>
                                 <li class="nav-item waves-effect waves-light">
                                    <a class="nav-link" data-bs-toggle="tab" href="#pill-justified-settings-1" role="tab">
                                    Yearly
                                    </a>
                                 </li>
                              </ul>
                              <!-- Tab panes -->
                              <div class="tab-content text-muted">
                                 <div class="tab-pane active" id="pill-justified-home-1" role="tabpanel">
                                    <div class="card-body">
                                       <div class="table-responsive">
                                          <table id="buttons-datatables-1 class="display table table-bordered" style="width:100%">
                                             <thead>
                                                   <tr>
                                                      <th>Name</th>
                                                      <th>Position</th>
                                                      <th>Office</th>
                                                      <th>Age</th>
                                                      <th>Start date</th>
                                                      <th>Salary</th>
                                                   </tr>
                                             </thead>
                                             <tbody>
                                                   <tr>
                                                      <td>Tiger Nixon</td>
                                                      <td>System Architect</td>
                                                      <td>Edinburgh</td>
                                                      <td>61</td>
                                                      <td>2011/04/25</td>
                                                      <td>$320,800</td>
                                                   </tr>
                                                   <tr>
                                                      <td>Garrett Winters</td>
                                                      <td>Accountant</td>
                                                      <td>Tokyo</td>
                                                      <td>63</td>
                                                      <td>2011/07/25</td>
                                                      <td>$170,750</td>
                                                   </tr>
                                                   <tr>
                                                      <td>Ashton Cox</td>
                                                      <td>Junior Technical Author</td>
                                                      <td>San Francisco</td>
                                                      <td>66</td>
                                                      <td>2009/01/12</td>
                                                      <td>$86,000</td>
                                                   </tr>
                                          </table>
                                       </div>
                                   </div>
                                 </div>
                                 <div class="tab-pane" id="pill-justified-profile-1" role="tabpanel">
                                 <div class="card-body">
                                       <div class="table-responsive">
                                          <table id="buttons-datatables-2 class="display table table-bordered" style="width:100%">
                                             <thead>
                                                   <tr>
                                                      <th>Name</th>
                                                      <th>Position</th>
                                                      <th>Office</th>
                                                      <th>Age</th>
                                                      <th>Start date</th>
                                                      <th>Salary</th>
                                                   </tr>
                                             </thead>
                                             <tbody>
                                                   <tr>
                                                      <td>Tiger Nixon</td>
                                                      <td>System Architect</td>
                                                      <td>Edinburgh</td>
                                                      <td>61</td>
                                                      <td>2011/04/25</td>
                                                      <td>$320,800</td>
                                                   </tr>
                                                   <tr>
                                                      <td>Garrett Winters</td>
                                                      <td>Accountant</td>
                                                      <td>Tokyo</td>
                                                      <td>63</td>
                                                      <td>2011/07/25</td>
                                                      <td>$170,750</td>
                                                   </tr>
                                                   <tr>
                                                      <td>Ashton Cox</td>
                                                      <td>Junior Technical Author</td>
                                                      <td>San Francisco</td>
                                                      <td>66</td>
                                                      <td>2009/01/12</td>
                                                      <td>$86,000</td>
                                                   </tr>
                                          </table>
                                       </div>
                                   </div>
                                 </div>
                                 <div class="tab-pane" id="pill-justified-messages-1" role="tabpanel">
                                 <div class="card-body">
                                       <div class="table-responsive">
                                          <table id="buttons-datatables-3 class="display table table-bordered" style="width:100%">
                                             <thead>
                                                   <tr>
                                                      <th>Name</th>
                                                      <th>Position</th>
                                                      <th>Office</th>
                                                      <th>Age</th>
                                                      <th>Start date</th>
                                                      <th>Salary</th>
                                                   </tr>
                                             </thead>
                                             <tbody>
                                                   <tr>
                                                      <td>Tiger Nixon</td>
                                                      <td>System Architect</td>
                                                      <td>Edinburgh</td>
                                                      <td>61</td>
                                                      <td>2011/04/25</td>
                                                      <td>$320,800</td>
                                                   </tr>
                                                   <tr>
                                                      <td>Garrett Winters</td>
                                                      <td>Accountant</td>
                                                      <td>Tokyo</td>
                                                      <td>63</td>
                                                      <td>2011/07/25</td>
                                                      <td>$170,750</td>
                                                   </tr>
                                                   <tr>
                                                      <td>Ashton Cox</td>
                                                      <td>Junior Technical Author</td>
                                                      <td>San Francisco</td>
                                                      <td>66</td>
                                                      <td>2009/01/12</td>
                                                      <td>$86,000</td>
                                                   </tr>
                                          </table>
                                       </div>
                                   </div>
                                 </div>
                                 <div class="tab-pane" id="pill-justified-settings-1" role="tabpanel">
                                 <div class="card-body">
                                       <div class="table-responsive">
                                          <table id="buttons-datatables-4 class="display table table-bordered" style="width:100%">
                                             <thead>
                                                   <tr>
                                                      <th>Name</th>
                                                      <th>Position</th>
                                                      <th>Office</th>
                                                      <th>Age</th>
                                                      <th>Start date</th>
                                                      <th>Salary</th>
                                                   </tr>
                                             </thead>
                                             <tbody>
                                                   <tr>
                                                      <td>Tiger Nixon</td>
                                                      <td>System Architect</td>
                                                      <td>Edinburgh</td>
                                                      <td>61</td>
                                                      <td>2011/04/25</td>
                                                      <td>$320,800</td>
                                                   </tr>
                                                   <tr>
                                                      <td>Garrett Winters</td>
                                                      <td>Accountant</td>
                                                      <td>Tokyo</td>
                                                      <td>63</td>
                                                      <td>2011/07/25</td>
                                                      <td>$170,750</td>
                                                   </tr>
                                                   <tr>
                                                      <td>Ashton Cox</td>
                                                      <td>Junior Technical Author</td>
                                                      <td>San Francisco</td>
                                                      <td>66</td>
                                                      <td>2009/01/12</td>
                                                      <td>$86,000</td>
                                                   </tr>
                                          </table>
                                       </div>
                                   </div>
                                 </div>
                              </div>
                           </div>
                           <!-- end card-body -->
                        </div>
                           </div>
                          
                        </div>
                        <!--end row-->
                     </div>
                     <!--end col-->
                     <div class="col-xl-3">
                        <div class="card">
                           <div class="card-header align-items-center d-flex">
                              <h4 class="card-title mb-0 flex-grow-1">Recent Comment</h4>
                              <div class="flex-shrink-0">
                                 <button type="button" class="btn btn-soft-primary btn-sm">
                                 View All
                                 </button>
                              </div>
                           </div>
                           <div class="card-body">
                              <div data-simplebar class="mx-n3 px-3" style="height: 375px;">
                                 <div class="vstack gap-3">
                                    <div class="d-flex gap-3">
                                       <img src="{{asset('public/assets/images/users/avatar-3.jpg')}}" alt="" class="avatar-sm rounded flex-shrink-0">
                                       <div class="flex-shrink-1">
                                          <h6 class="mb-2">Diana Kohler <span class="text-muted">Has commented</span></h6>
                                          <p class="text-muted mb-0">" Really well-written and informative. The emotional connection strategy is something I’ll be testing out more! "</p>
                                       </div>
                                    </div>
                                    <div class="d-flex gap-3">
                                       <img src="{{asset('public/assets/images/users/avatar-5.jpg')}}" alt="" class="avatar-sm rounded flex-shrink-0">
                                       <div class="flex-shrink-1">
                                          <h6 class="mb-2">Tonya Noble <span class="text-muted">Has commented</span></h6>
                                          <p class="text-muted mb-0">" Incredibly helpful tips, especially about adding a call to action. I’ve been missing that step and will implement it in my next post! "</p>
                                       </div>
                                    </div>
                                    <div class="d-flex gap-3">
                                       <img src="{{asset('public/assets/images/users/avatar-6.jpg')}}" alt="" class="avatar-sm rounded flex-shrink-0">
                                       <div class="flex-shrink-1">
                                          <h6 class="mb-2">Donald Palmer <span class="text-muted">Has commented</span></h6>
                                          <p class="text-muted mb-0">" Fantastic read! The power of visuals and trends really stood out to me. Thanks for sharing these useful insights! "</p>
                                       </div>
                                    </div>
                                    <div class="d-flex gap-3">
                                       <img src="{{asset('public/assets/images/users/avatar-7.jpg')}}" alt="" class="avatar-sm rounded flex-shrink-0">
                                       <div class="flex-shrink-1">
                                          <h6 class="mb-2">Joseph Parker <span class="text-muted">Has commented</span></h6>
                                          <p class="text-muted mb-0">" Great post! Simple yet powerful tips that I can start using immediately. Thanks for sharing your expertise! "</p>
                                       </div>
                                    </div>
                                    <div class="d-flex gap-3">
                                       <img src="{{asset('public/assets/images/users/avatar-9.jpg')}}" alt="" class="avatar-sm rounded flex-shrink-0">
                                       <div class="flex-shrink-1">
                                          <h6 class="mb-2">Timothy Smith <span class="text-muted">Has commented</span></h6>
                                          <p class="text-muted mb-0">" Wow, this has opened my eyes to a new perspective on creating content. Emotional triggers—such a smart way to engage users! "</p>
                                       </div>
                                    </div>
                                    <div class="d-flex gap-3">
                                       <img src="{{asset('public/assets/images/users/avatar-10.jpg')}}" alt="" class="avatar-sm rounded flex-shrink-0">
                                       <div class="flex-shrink-1">
                                          <h6 class="mb-2">Alexis Clarke <span class="text-muted">Has commented</span></h6>
                                          <p class="text-muted mb-0">" Fantastic read! The power of visuals and trends really stood out to me. Thanks for sharing these useful insights! "</p>
                                       </div>
                                    </div>
                                    <div class="d-flex gap-3">
                                       <img src="{{asset('public/assets/images/users/avatar-2.jpg')}}" alt="" class="avatar-sm rounded flex-shrink-0">
                                       <div class="flex-shrink-1">
                                          <h6 class="mb-2">Thomas Taylor <span class="text-muted">Has commented</span></h6>
                                          <p class="text-muted mb-0">" Loved the section on visual storytelling. It’s true that images speak louder on social media platforms. More visuals in my next posts for sure! "</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                 
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
            $('#buttons-datatables-2').DataTable();
            $('#buttons-datatables-3').DataTable();
            $('#buttons-datatables-4').DataTable();
         });
         </script>
      @endsection
