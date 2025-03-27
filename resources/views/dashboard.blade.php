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
                  <h4 class="mb-sm-0">Blog </h4>
                  
                  @php
$today = date('Y-m-d');
$pendingCountRed = 0; // Count for red alert (<= 2 days)
$pendingCountYellow = 0; // Count for yellow alert (3 to 5 days)
$monthlyPoliciesRed = []; // Store policy numbers for red alert
$monthlyPoliciesYellow = []; // Store policy numbers for yellow alert

// Fetch all policies where policy_type is 'Monthly'
$policies = App\Models\PolicyModel::orderBy('id', 'DESC')
    ->where('policy_type', 'Monthly')
    ->get();

// Loop through each policy and check for pending status
foreach ($policies as $policy) {
    $term_schedule = json_decode($policy->term_schedule, true);
    foreach ($term_schedule as $schedule) {
        // Check if the date is pending and compare with today
        $schedule_date = $schedule['date'];
        $date_diff = (strtotime($schedule_date) - strtotime($today)) / (60 * 60 * 24); // Difference in days

        if ($date_diff >= 0 && $schedule['status'] === 'Pending') {
            if ($date_diff <= 2) {
                $pendingCountRed++;
                $monthlyPoliciesRed[] = $policy->policy_number;
            } elseif ($date_diff >= 3 && $date_diff <= 5) {
                $pendingCountYellow++;
                $monthlyPoliciesYellow[] = $policy->policy_number;
            }
        }
    }
}
@endphp


@if($pendingCountRed > 0)
    <div id="pending-alert-red" class="alert alert-danger text-center" role="alert" style="background-color: #f8d7da; color: #721c24;">
        <strong>Urgent:</strong> There are {{ $pendingCountRed }} pending <strong>Monthly Term</strong> policies that need immediate attention within 2 days!<br>
        <strong>Policy Numbers:</strong> {{ implode(', ', $monthlyPoliciesRed) }}
    </div>
@endif

@if($pendingCountYellow > 0)
    <div id="pending-alert-yellow" class="alert alert-warning text-center" role="alert" style="background-color: #fff3cd; color: #856404;">
        <strong>Warning:</strong> There are {{ $pendingCountYellow }} pending <strong>Monthly Term</strong> policies that need attention within 3 to 5 days!<br>
        <strong>Policy Numbers:</strong> {{ implode(', ', $monthlyPoliciesYellow) }}
    </div>
@endif

@php
$today = date('Y-m-d');
$pendingCountRedQuarterly = 0; // Count for red alert (<= 5 days)
$pendingCountYellowQuarterly = 0; // Count for yellow alert (<= 15 days)
$quarterlyPoliciesRed = []; // Store policy numbers for red alert
$quarterlyPoliciesYellow = []; // Store policy numbers for yellow alert

// Fetch all policies where policy_type is 'Quarterly'
$policies = App\Models\PolicyModel::orderBy('id', 'DESC')
    ->where('policy_type', 'Quarterly')
    ->get();

// Loop through each policy and check for pending status
foreach ($policies as $policy) {
    $term_schedule = json_decode($policy->term_schedule, true);
    foreach ($term_schedule as $schedule) {
        // Check if the date is pending and compare with today
        $schedule_date = $schedule['date'];
        $date_diff = (strtotime($schedule_date) - strtotime($today)) / (60 * 60 * 24); // Difference in days

        if ($date_diff >= 0 && $schedule['status'] === 'Pending') {
            // Check conditions for red and yellow alerts
            if ($date_diff <= 5) {
                $pendingCountRedQuarterly++;
                $quarterlyPoliciesRed[] = $policy->policy_number;
            } elseif ($date_diff > 5 && $date_diff <= 15) {
                $pendingCountYellowQuarterly++;
                $quarterlyPoliciesYellow[] = $policy->policy_number;
            }
        }
    }
}
@endphp

{{-- RED ALERT FOR QUARTERLY --}}
@if($pendingCountRedQuarterly > 0)
    <div id="pending-alert-red-quarterly" class="alert alert-danger text-center" role="alert" style="background-color: #f8d7da; color: #721c24;">
        <strong>Urgent:</strong> There are {{ $pendingCountRedQuarterly }} pending <strong>Quarterly Term</strong> policies that need immediate attention within 5 days!<br>
        <strong>Policy Numbers:</strong> {{ implode(', ', $quarterlyPoliciesRed) }}
    </div>
@endif

{{-- YELLOW ALERT FOR QUARTERLY --}}
@if($pendingCountYellowQuarterly > 0)
    <div id="pending-alert-yellow-quarterly" class="alert alert-warning text-center" role="alert" style="background-color: #fff3cd; color: #856404;">
        <strong>Warning:</strong> There are {{ $pendingCountYellowQuarterly }} pending <strong>Quarterly Term</strong> policies that need attention within 15 days!<br>
        <strong>Policy Numbers:</strong> {{ implode(', ', $quarterlyPoliciesYellow) }}
    </div>
@endif


@php
$today = date('Y-m-d');
$pendingCountRedHalfYearly = 0; // Count for red alert (<= 5 days)
$pendingCountDarkYellowHalfYearly = 0; // Count for dark yellow alert (<= 15 days)
$pendingCountYellowHalfYearly = 0; // Count for yellow alert (<= 30 days)

$halfYearlyPoliciesRed = []; // Store policy numbers for red alert
$halfYearlyPoliciesDarkYellow = []; // Store policy numbers for dark yellow alert
$halfYearlyPoliciesYellow = []; // Store policy numbers for yellow alert

// Fetch all policies where policy_type is 'Half Yearly'
$policies = App\Models\PolicyModel::orderBy('id', 'DESC')
    ->where('policy_type', 'Half Yearly')
    ->get();

// Loop through each policy and check for pending status
foreach ($policies as $policy) {
    $term_schedule = json_decode($policy->term_schedule, true);
    foreach ($term_schedule as $schedule) {
        // Check if the date is pending and compare with today
        $schedule_date = $schedule['date'];
        $date_diff = (strtotime($schedule_date) - strtotime($today)) / (60 * 60 * 24); // Difference in days

        if ($date_diff >= 0 && $schedule['status'] === 'Pending') {
            // Check conditions for red, dark yellow, and yellow alerts
            if ($date_diff <= 5) {
                $pendingCountRedHalfYearly++;
                $halfYearlyPoliciesRed[] = $policy->policy_number;
            } elseif ($date_diff > 5 && $date_diff <= 15) {
                $pendingCountDarkYellowHalfYearly++;
                $halfYearlyPoliciesDarkYellow[] = $policy->policy_number;
            } elseif ($date_diff > 15 && $date_diff <= 30) {
                $pendingCountYellowHalfYearly++;
                $halfYearlyPoliciesYellow[] = $policy->policy_number;
            }
        }
    }
}
@endphp

{{-- RED ALERT FOR HALF YEARLY --}}
@if($pendingCountRedHalfYearly > 0)
    <div id="pending-alert-red-halfyearly" class="alert alert-danger text-center" role="alert" style="background-color: #f8d7da; color: #721c24;">
        <strong>Urgent:</strong> There are {{ $pendingCountRedHalfYearly }} pending <strong>Half Yearly Term</strong> policies that need immediate attention within 5 days!<br>
        <strong>Policy Numbers:</strong> {{ implode(', ', $halfYearlyPoliciesRed) }}
    </div>
@endif

{{-- DARK YELLOW ALERT FOR HALF YEARLY --}}
@if($pendingCountDarkYellowHalfYearly > 0)
    <div id="pending-alert-dark-yellow-halfyearly" class="alert alert-warning text-center" role="alert" style="background-color: #ffeeba; color: #856404;">
        <strong>Notice:</strong> There are {{ $pendingCountDarkYellowHalfYearly }} pending <strong>Half Yearly Term</strong> policies that need attention within 15 days!<br>
        <strong>Policy Numbers:</strong> {{ implode(', ', $halfYearlyPoliciesDarkYellow) }}
    </div>
@endif

{{-- YELLOW ALERT FOR HALF YEARLY --}}
@if($pendingCountYellowHalfYearly > 0)
    <div id="pending-alert-yellow-halfyearly" class="alert alert-warning text-center" role="alert" style="background-color: #fff3cd; color: #856404;">
        <strong>Warning:</strong> There are {{ $pendingCountYellowHalfYearly }} pending <strong>Half Yearly Term</strong> policies that need attention within 30 days!<br>
        <strong>Policy Numbers:</strong> {{ implode(', ', $halfYearlyPoliciesYellow) }}
    </div>
@endif

@php
$today = date('Y-m-d');
$pendingCountRedYearly = 0; // Count for red alert (<= 5 days)
$pendingCountDarkYellowYearly = 0; // Count for dark yellow alert (<= 15 days)
$pendingCountYellowYearly = 0; // Count for yellow alert (<= 30 days)

$yearlyPoliciesRed = []; // Store policy numbers for red alert
$yearlyPoliciesDarkYellow = []; // Store policy numbers for dark yellow alert
$yearlyPoliciesYellow = []; // Store policy numbers for yellow alert

// Fetch all policies where policy_type is 'Yearly'
$policies = App\Models\PolicyModel::orderBy('id', 'DESC')
    ->where('policy_type', 'Yearly')
    ->get();

// Loop through each policy and check for pending status
foreach ($policies as $policy) {
    $term_schedule = json_decode($policy->term_schedule, true);
    foreach ($term_schedule as $schedule) {
        // Check if the date is pending and compare with today
        $schedule_date = $schedule['date'];
        $date_diff = (strtotime($schedule_date) - strtotime($today)) / (60 * 60 * 24); // Difference in days

        if ($date_diff >= 0 && $schedule['status'] === 'Pending') {
            // Check conditions for red, dark yellow, and yellow alerts
            if ($date_diff <= 5) {
                $pendingCountRedYearly++;
                $yearlyPoliciesRed[] = $policy->policy_number;
            } elseif ($date_diff > 5 && $date_diff <= 15) {
                $pendingCountDarkYellowYearly++;
                $yearlyPoliciesDarkYellow[] = $policy->policy_number;
            } elseif ($date_diff > 15 && $date_diff <= 30) {
                $pendingCountYellowYearly++;
                $yearlyPoliciesYellow[] = $policy->policy_number;
            }
        }
    }
}
@endphp

{{-- RED ALERT FOR YEARLY --}}
@if($pendingCountRedYearly > 0)
    <div id="pending-alert-red-yearly" class="alert alert-danger text-center" role="alert" style="background-color: #f8d7da; color: #721c24;">
        <strong>Urgent:</strong> There are {{ $pendingCountRedYearly }} pending <strong>Yearly Term</strong> policies that need immediate attention within 5 days!<br>
        <strong>Policy Numbers:</strong> {{ implode(', ', $yearlyPoliciesRed) }}
    </div>
@endif

{{-- DARK YELLOW ALERT FOR YEARLY --}}
@if($pendingCountDarkYellowYearly > 0)
    <div id="pending-alert-dark-yellow-yearly" class="alert alert-warning text-center" role="alert" style="background-color: #ffeeba; color: #856404;">
        <strong>Notice:</strong> There are {{ $pendingCountDarkYellowYearly }} pending <strong>Yearly Term</strong> policies that need attention within 15 days!<br>
        <strong>Policy Numbers:</strong> {{ implode(', ', $yearlyPoliciesDarkYellow) }}
    </div>
@endif

{{-- YELLOW ALERT FOR YEARLY --}}
@if($pendingCountYellowYearly > 0)
    <div id="pending-alert-yellow-yearly" class="alert alert-warning text-center" role="alert" style="background-color: #fff3cd; color: #856404;">
        <strong>Warning:</strong> There are {{ $pendingCountYellowYearly }} pending <strong>Yearly Term</strong> policies that need attention within 30 days!<br>
        <strong>Policy Numbers:</strong> {{ implode(', ', $yearlyPoliciesYellow) }}
    </div>
@endif


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
            <div class="col-xl-12">
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
                                 Monthly
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
                                    <table id="buttons-datatables-1" class="display table table-bordered" style="width:100%">
    <thead>
        <tr>
            <th class="text-center">Sl.No.</th>
            <th class="text-center">Name</th>
            <th class="text-center">Policy ID</th>
            <th class="text-center">Premium Amount</th>
            <th class="text-center">Premium Term</th>
            <th class="text-center">Maturity Amount</th>
            <th class="text-center">Pending Status</th>
        </tr>
    </thead>
    <tbody>
        @php
        use Carbon\Carbon;
        use App\Models\PolicyModel;
        use App\Models\CustomerModel;

        $c = 1;
        $today = Carbon::today();

        // Fetch all monthly policies and filter to get only past pending data
        $monthly = PolicyModel::orderBy('id', 'DESC')
            ->where('policy_type', 'Monthly')
            ->get()
            ->filter(function ($mon) use ($today) {
                // Decode term_schedule and convert to collection
                $term_schedule = collect(json_decode($mon->term_schedule, true));

                // Sort term_schedule by date in ascending order
                $term_schedule = $term_schedule->sortBy('date');

                // Check for any pending term before or equal to today
                foreach ($term_schedule as $schedule) {
                    $schedule_date = Carbon::parse($schedule['date']);
                    // Show only past or today’s pending
                    if ($schedule_date->lessThanOrEqualTo($today) && $schedule['status'] === 'Pending') {
                        return true; // Policy has pending status before today
                    }
                }
                return false;
            });
        @endphp

        @if($monthly->isNotEmpty())
            @foreach($monthly as $mon)
                @php
                // Get customer name based on customer_id
                $customer_name = CustomerModel::where('customer_id', $mon->customer_id)->value('username');

                // Decode and sort term_schedule again to get past pending terms
                $term_schedule = collect(json_decode($mon->term_schedule, true))->sortBy('date');

                // Get the most recent pending term before or equal to today
                $pending_term = $term_schedule->last(function ($schedule) use ($today) {
                    $schedule_date = Carbon::parse($schedule['date']);
                    return $schedule_date->lessThanOrEqualTo($today) && $schedule['status'] === 'Pending';
                });
                @endphp
                <tr>
                    <td class="text-center">{{ $c++ }}</td>
                    <td class="text-center">{{ $customer_name }}</td>
                    <td class="text-center">{{ $mon->policy_number }}</td>
                    <td class="text-center">{{ $mon->premium_amount }}</td>
                    <td class="text-center">{{ $mon->premium_term }}</td>
                    <td class="text-center">{{ $mon->maturity_term }}</td>
                    <td class="text-center">
                        @if($pending_term)
                            <span class="badge bg-danger">Pending - {{ $pending_term['date'] }}</span>
                        @else
                            <span class="badge bg-success">No Pending</span>
                        @endif
                    </td>
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="7" class="text-center">No past pending policies found.</td>
            </tr>
        @endif
    </tbody>
</table>


                                    </div>
                                 </div>
                              </div>
                              <div class="tab-pane" id="pill-justified-profile-1" role="tabpanel">
                                 <div class="card-body">
                                    <div class="table-responsive">
                                    <table id="buttons-datatables-2" class="display table table-bordered" style="width:100%">
    <thead>
        <tr>
            <th class="text-center">Sl.No.</th>
            <th class="text-center">Name</th>
            <th class="text-center">Policy ID</th>
            <th class="text-center">Premium Amount</th>
            <th class="text-center">Premium Term</th>
            <th class="text-center">Maturity Amount</th>
            <th class="text-center">Pending Status</th>
        </tr>
    </thead>
    <tbody>
        @php
      

        $c = 1;
        $today = Carbon::today();

        // Fetch all quarterly policies and filter to get only past pending data
        $quarterly = PolicyModel::orderBy('id', 'DESC')
            ->where('policy_type', 'Quarterly')
            ->get()
            ->filter(function ($qua) use ($today) {
                // Decode term_schedule and convert to collection
                $term_schedule = collect(json_decode($qua->term_schedule, true));

                // Sort term_schedule by date in ascending order
                $term_schedule = $term_schedule->sortBy('date');

                // Check for any pending term before or equal to today
                foreach ($term_schedule as $schedule) {
                    $schedule_date = Carbon::parse($schedule['date']);
                    // Show only past or today’s pending
                    if ($schedule_date->lessThanOrEqualTo($today) && $schedule['status'] === 'Pending') {
                        return true; // Policy has pending status before today
                    }
                }
                return false;
            });
        @endphp

        @if($quarterly->isNotEmpty())
            @foreach($quarterly as $qua)
                @php
                // Get customer name based on customer_id
                $customer_name = CustomerModel::where('customer_id', $qua->customer_id)->value('username');

                // Decode and sort term_schedule again to get past pending terms
                $term_schedule = collect(json_decode($qua->term_schedule, true))->sortBy('date');

                // Get the most recent pending term before or equal to today
                $pending_term = $term_schedule->last(function ($schedule) use ($today) {
                    $schedule_date = Carbon::parse($schedule['date']);
                    return $schedule_date->lessThanOrEqualTo($today) && $schedule['status'] === 'Pending';
                });
                @endphp
                <tr>
                    <td class="text-center">{{ $c++ }}</td>
                    <td class="text-center">{{ $customer_name }}</td>
                    <td class="text-center">{{ $qua->policy_number }}</td>
                    <td class="text-center">{{ $qua->premium_amount }}</td>
                    <td class="text-center">{{ $qua->premium_term }}</td>
                    <td class="text-center">{{ $qua->maturity_term }}</td>
                    <td class="text-center">
                        @if($pending_term)
                            <span class="badge bg-danger">Pending - {{ $pending_term['date'] }}</span>
                        @else
                            <span class="badge bg-success">No Pending</span>
                        @endif
                    </td>
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="7" class="text-center">No past pending policies found.</td>
            </tr>
        @endif
    </tbody>
</table>


                                    </div>
                                 </div>
                              </div>
                              <div class="tab-pane" id="pill-justified-messages-1" role="tabpanel">
                                 <div class="card-body">
                                    <div class="table-responsive">
                                    <table id="buttons-datatables-3" class="display table table-bordered" style="width:100%">
    <thead>
        <tr>
            <th class="text-center">Sl.No.</th>
            <th class="text-center">Name</th>
            <th class="text-center">Policy ID</th>
            <th class="text-center">Premium Amount</th>
            <th class="text-center">Premium Term</th>
            <th class="text-center">Maturity Amount</th>
            <th class="text-center">Pending Status</th>
        </tr>
    </thead>
    <tbody>
        @php


        $c = 1;
        $today = Carbon::today();

        // Fetch all half-yearly policies and filter to get only past pending data
        $halfYearly = PolicyModel::orderBy('id', 'DESC')
            ->where('policy_type', 'Half Yearly')
            ->get()
            ->filter(function ($half) use ($today) {
                // Decode term_schedule and convert to collection
                $term_schedule = collect(json_decode($half->term_schedule, true));

                // Sort term_schedule by date in ascending order
                $term_schedule = $term_schedule->sortBy('date');

                // Check for any pending term before or equal to today
                foreach ($term_schedule as $schedule) {
                    $schedule_date = Carbon::parse($schedule['date']);
                    // Show only past or today’s pending
                    if ($schedule_date->lessThanOrEqualTo($today) && $schedule['status'] === 'Pending') {
                        return true; // Policy has pending status before today
                    }
                }
                return false;
            });
        @endphp

        @if($halfYearly->isNotEmpty())
            @foreach($halfYearly as $half)
                @php
                // Get customer name based on customer_id
                $customer_name = CustomerModel::where('customer_id', $half->customer_id)->value('username');

                // Decode and sort term_schedule again to get past pending terms
                $term_schedule = collect(json_decode($half->term_schedule, true))->sortBy('date');

                // Get the most recent pending term before or equal to today
                $pending_term = $term_schedule->last(function ($schedule) use ($today) {
                    $schedule_date = Carbon::parse($schedule['date']);
                    return $schedule_date->lessThanOrEqualTo($today) && $schedule['status'] === 'Pending';
                });
                @endphp
                <tr>
                    <td class="text-center">{{ $c++ }}</td>
                    <td class="text-center">{{ $customer_name }}</td>
                    <td class="text-center">{{ $half->policy_number }}</td>
                    <td class="text-center">{{ $half->premium_amount }}</td>
                    <td class="text-center">{{ $half->premium_term }}</td>
                    <td class="text-center">{{ $half->maturity_term }}</td>
                    <td class="text-center">
                        @if($pending_term)
                            <span class="badge bg-danger">Pending - {{ $pending_term['date'] }}</span>
                        @else
                            <span class="badge bg-success">No Pending</span>
                        @endif
                    </td>
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="7" class="text-center">No past pending policies found.</td>
            </tr>
        @endif
    </tbody>
</table>


                                    </div>
                                 </div>
                              </div>
                              <div class="tab-pane" id="pill-justified-settings-1" role="tabpanel">
                                 <div class="card-body">
                                    <div class="table-responsive">
                                    <table id="buttons-datatables-4" class="display table table-bordered" style="width:100%">
    <thead>
        <tr>
            <th class="text-center">Sl.No.</th>
            <th class="text-center">Name</th>
            <th class="text-center">Policy ID</th>
            <th class="text-center">Premium Amount</th>
            <th class="text-center">Premium Term</th>
            <th class="text-center">Maturity Amount</th>
            <th class="text-center">Pending Status</th>
        </tr>
    </thead>
    <tbody>
        @php


        $c = 1;
        $today = Carbon::today();

        // Fetch all yearly policies and filter to get only past pending data
        $yearly = PolicyModel::orderBy('id', 'DESC')
            ->where('policy_type', 'Yearly')
            ->get()
            ->filter(function ($year) use ($today) {
                // Decode term_schedule and convert to collection
                $term_schedule = collect(json_decode($year->term_schedule, true));

                // Sort term_schedule by date in ascending order
                $term_schedule = $term_schedule->sortBy('date');

                // Check for any pending term before or equal to today
                foreach ($term_schedule as $schedule) {
                    $schedule_date = Carbon::parse($schedule['date']);
                    // Show only past or today’s pending
                    if ($schedule_date->lessThanOrEqualTo($today) && $schedule['status'] === 'Pending') {
                        return true; // Policy has pending status before today
                    }
                }
                return false;
            });
        @endphp

        @if($yearly->isNotEmpty())
            @foreach($yearly as $year)
                @php
                // Get customer name based on customer_id
                $customer_name = CustomerModel::where('customer_id', $year->customer_id)->value('username');

                // Decode and sort term_schedule again to get past pending terms
                $term_schedule = collect(json_decode($year->term_schedule, true))->sortBy('date');

                // Get the most recent pending term before or equal to today
                $pending_term = $term_schedule->last(function ($schedule) use ($today) {
                    $schedule_date = Carbon::parse($schedule['date']);
                    return $schedule_date->lessThanOrEqualTo($today) && $schedule['status'] === 'Pending';
                });
                @endphp
                <tr>
                    <td class="text-center">{{ $c++ }}</td>
                    <td class="text-center">{{ $customer_name }}</td>
                    <td class="text-center">{{ $year->policy_number }}</td>
                    <td class="text-center">{{ $year->premium_amount }}</td>
                    <td class="text-center">{{ $year->premium_term }}</td>
                    <td class="text-center">{{ $year->maturity_term }}</td>
                    <td class="text-center">
                        @if($pending_term)
                            <span class="badge bg-danger">Pending - {{ $pending_term['date'] }}</span>
                        @else
                            <span class="badge bg-success">No Pending</span>
                        @endif
                    </td>
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="7" class="text-center">No past pending policies found.</td>
            </tr>
        @endif
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