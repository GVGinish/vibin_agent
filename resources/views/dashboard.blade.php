@extends('layout')
@section('link')

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
                                    Home
                                    </a>
                                 </li>
                                 <li class="nav-item waves-effect waves-light">
                                    <a class="nav-link" data-bs-toggle="tab" href="#pill-justified-profile-1" role="tab">
                                    Profile
                                    </a>
                                 </li>
                                 <li class="nav-item waves-effect waves-light">
                                    <a class="nav-link" data-bs-toggle="tab" href="#pill-justified-messages-1" role="tab">
                                    Messages
                                    </a>
                                 </li>
                                 <li class="nav-item waves-effect waves-light">
                                    <a class="nav-link" data-bs-toggle="tab" href="#pill-justified-settings-1" role="tab">
                                    Settings
                                    </a>
                                 </li>
                              </ul>
                              <!-- Tab panes -->
                              <div class="tab-content text-muted">
                                 <div class="tab-pane active" id="pill-justified-home-1" role="tabpanel">
                                    <div class="d-flex">
                                       <div class="flex-shrink-0">
                                          <i class="ri-checkbox-circle-fill text-success"></i>
                                       </div>
                                       <div class="flex-grow-1 ms-2">
                                          Raw denim you probably haven't heard of them jean shorts Austin.
                                          Nesciunt tofu stumptown aliqua, retro synth master cleanse.
                                       </div>
                                    </div>
                                    <div class="d-flex mt-2">
                                       <div class="flex-shrink-0">
                                          <i class="ri-checkbox-circle-fill text-success"></i>
                                       </div>
                                       <div class="flex-grow-1 ms-2">
                                          Too much or too little spacing, as in the example below, can make things unpleasant for the reader. The goal is to make your text as comfortable to read as possible.
                                       </div>
                                    </div>
                                 </div>
                                 <div class="tab-pane" id="pill-justified-profile-1" role="tabpanel">
                                    <div class="d-flex">
                                       <div class="flex-shrink-0">
                                          <i class="ri-checkbox-circle-fill text-success"></i>
                                       </div>
                                       <div class="flex-grow-1 ms-2">
                                          In some designs, you might adjust your tracking to create a certain artistic effect. It can also help you fix fonts that are poorly spaced to begin with.
                                       </div>
                                    </div>
                                    <div class="d-flex mt-2">
                                       <div class="flex-shrink-0">
                                          <i class="ri-checkbox-circle-fill text-success"></i>
                                       </div>
                                       <div class="flex-grow-1 ms-2">
                                          A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.
                                       </div>
                                    </div>
                                 </div>
                                 <div class="tab-pane" id="pill-justified-messages-1" role="tabpanel">
                                    <div class="d-flex">
                                       <div class="flex-shrink-0">
                                          <i class="ri-checkbox-circle-fill text-success"></i>
                                       </div>
                                       <div class="flex-grow-1 ms-2">
                                          Each design is a new, unique piece of art birthed into this world, and while you have the opportunity to be creative and make your own style choices.
                                       </div>
                                    </div>
                                    <div class="d-flex mt-2">
                                       <div class="flex-shrink-0">
                                          <i class="ri-checkbox-circle-fill text-success"></i>
                                       </div>
                                       <div class="flex-grow-1 ms-2">
                                          For that very reason, I went on a quest and spoke to many different professional graphic designers and asked them what graphic design tips they live.
                                       </div>
                                    </div>
                                 </div>
                                 <div class="tab-pane" id="pill-justified-settings-1" role="tabpanel">
                                    <div class="d-flex mt-2">
                                       <div class="flex-shrink-0">
                                          <i class="ri-checkbox-circle-fill text-success"></i>
                                       </div>
                                       <div class="flex-grow-1 ms-2">
                                          For that very reason, I went on a quest and spoke to many different professional graphic designers and asked them what graphic design tips they live.
                                       </div>
                                    </div>
                                    <div class="d-flex mt-2">
                                       <div class="flex-shrink-0">
                                          <i class="ri-checkbox-circle-fill text-success"></i>
                                       </div>
                                       <div class="flex-grow-1 ms-2">
                                          After gathering lots of different opinions and graphic design basics, I came up with a list of 30 graphic design tips that you can start implementing.
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
      <script src="{{asset('public/assets/js/app.js')}}"></script>
      @endsection
