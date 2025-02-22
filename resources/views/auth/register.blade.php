


<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">
   <!-- Mirrored from themesbrand.com/velzon/html/default/auth-signin-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Oct 2023 11:49:41 GMT -->
   <head>
      <meta charset="utf-8" />
      <title>Sign In | Velzon - Admin & Dashboard Template</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
      <meta content="Themesbrand" name="author" />
      <!-- App favicon -->
      <link rel="shortcut icon" href="{{asset('public/assets/images/favicon.ico')}}">
      <!-- Layout config Js -->
      <script src="{{asset('public/assets/js/layout.js')}}"></script>
      <!-- Bootstrap Css -->
      <link href="{{asset('public/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
      <!-- Icons Css -->
      <link href="{{asset('public/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
      <!-- App Css-->
      <link href="{{asset('public/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />
      <!-- custom Css-->
      <link href="{{asset('public/assets/css/custom.min.css')}}" rel="stylesheet" type="text/css" />
   </head>
   <body>
      <div class="auth-page-wrapper pt-5">
         <!-- auth page bg -->
         <div class="auth-one-bg-position auth-one-bg" id="auth-particles">
            <div class="bg-overlay"></div>
         </div>
         <!-- auth page content -->
         <div class="auth-page-content">
            <div class="container">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="text-center mt-sm-5 mb-4 text-white-50">
                        <div>
                           <a href="index.html" class="d-inline-block auth-logo">
                           <img src="{{asset('public/assets/images/logo-light.png')}}" alt="" height="20">
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- end row -->
               <div class="row justify-content-center">
                  <div class="col-md-8 col-lg-6 col-xl-5">
                     <div class="card mt-4">
                        <div class="card-body p-4">
                           <div class="text-center mt-2">
                              <h5 class="text-primary">Welcome Back !</h5>
                              <p class="text-muted">Enter Your data to Register.</p>
                           </div>
                           <!-- Session Status -->
                           <x-auth-session-status class="mb-4" :status="session('status')" />
                           <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <!-- Name -->
                                <div>
                                    <x-input-label for="name" :value="__('Name')" />
                                    <x-text-input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                </div>

                                <!-- Email Address -->
                                <div class="mt-4">
                                    <x-input-label for="email" :value="__('Email')" />
                                    <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autocomplete="username" />
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>

                                <!-- Password -->
                                <div class="mt-4">
                                    <x-input-label for="password" :value="__('Password')" />

                                    <x-text-input id="password" class="form-control"
                                                    type="password"
                                                    name="password"
                                                    required autocomplete="new-password" />

                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>

                                <!-- Confirm Password -->
                                <div class="mt-4">
                                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                                    <x-text-input id="password_confirmation" class="form-control"
                                                    type="password"
                                                    name="password_confirmation" required autocomplete="new-password" />

                                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                </div>

                                <div class="flex items-center justify-end mt-4">
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                                        {{ __('Already registered?') }}
                                    </a>

                                    <x-primary-button class="btn btn-primary">
                                        {{ __('Register') }}
                                    </x-primary-button>
                                </div>
                            </form>
                        </div>
                        <!-- end card body -->
                     </div>
                     <!-- end card -->
                  </div>
               </div>
               <!-- end row -->
            </div>
            <!-- end container -->
         </div>
         <!-- end auth page content -->
         <!-- footer -->
         <footer class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="text-center">
                        <p class="mb-0 text-muted">
                           &copy;
                           <script>document.write(new Date().getFullYear())</script> Velzon. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand
                        </p>
                     </div>
                  </div>
               </div>
            </div>
         </footer>
         <!-- end Footer -->
      </div>
      <!-- end auth-page-wrapper -->
      <!-- JAVASCRIPT -->
      <script src="{{asset('public/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{asset('public/assets/libs/simplebar/simplebar.min.js')}}"></script>
      <script src="{{asset('public/assets/libs/node-waves/waves.min.js')}}"></script>
      <script src="{{asset('public/assets/libs/feather-icons/feather.min.js')}}"></script>
      <script src="{{asset('public/assets/js/pages/plugins/lord-icon-2.1.0.js')}}"></script>
      <script src="{{asset('public/assets/js/plugins.js')}}"></script>
      <script src="{{asset('public/assets/libs/particles.js')}}/particles.js')}}"></script>
      <script src="{{asset('public/assets/js/pages/particles.app.js')}}"></script>
      <script src="{{asset('public/assets/js/pages/password-addon.init.js')}}"></script>
   </body>
</html>
