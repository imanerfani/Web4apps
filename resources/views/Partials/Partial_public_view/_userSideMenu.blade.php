@php
    $checkLicense = \App\Models\Entities\User_license::
                       where('user_id', \Illuminate\Support\Facades\Auth::id())->first();
 if ($checkLicense != null)
     {
        $start = \Carbon\Carbon::now();
        $end = \Carbon\Carbon::parse($checkLicense->expired_at);

        $countDown = $end->diffInDays($start) .' days left';
        }
@endphp

<div class="user-panel mt-3 pb-3 mb-3 d-flex">

    @if ($checkLicense == null)
        <form>
            {{-- @csrf--}}
            <div class="info text-white">

                <button type="button" data-save="Ajax-form" class="btn bg-warning">Upgrade to owner</button>

            </div>
        </form>
    @else
        <div class="info text-white">
            <p>plan Type: {{$checkLicense->planPrice->planPackage->plan_title}}</p>
            @if($countDown < 0)
                <p>Status: Inactive </p>
            @else
                <p>Status: {{$countDown ?? ''}}</p>
            @endif
            <a href="{{url('shop')}}" class="btn bg-warning">Upgrade plan</a>
        </div>
    @endif

</div>
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        {{--@if (checkLicense == null)
        <li class="nav-item">
            <a href="@Url.Action(" index","home",new { area="user"})"
            class="@MenuActivator.Check(ViewContext,"Home") nav-link">
            <i class="fas fa-home"></i>
            <p>
                Home

            </p>
            </a>

        </li>
        <li class="nav-header">Owners</li>
        <li class="nav-item">
            <a href="#" class="no-action  nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                    Manage centers
                </p>
                <span class="right badge "><i class="fas fa-lock"></i></span>
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="no-action  nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                    My divisions
                </p>
                <span class="right badge "><i class="fas fa-lock"></i></span>
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="no-action  nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                    My functions
                </p>
                <span class="right badge "><i class="fas fa-lock"></i></span>
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="no-action  nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                    Manage staff
                </p>
                <span class="right badge "><i class="fas fa-lock"></i></span>
            </a>

        </li>

        <li class="nav-header">Request as client</li>
        <li class="nav-item">
            <a href="@Url.Action(" index","search",new { area="user"})"
            class="@MenuActivator.Check(ViewContext,"search") nav-link">
            <i class="nav-icon fas fa-chart-pie"></i>
            <p>
                Search center

            </p>
            </a>

        </li>
        <li class="nav-item">
            <a href="@Url.Action(" index","RequestToCenter",new { area="user"})"
            class="@MenuActivator.Check(ViewContext,"RequestToCenter") nav-link">
            <i class="nav-icon fas fa-chart-pie"></i>
            <p>
                Request to center

            </p>
            </a>

        </li>
        <li class="nav-item">
            <a href="@Url.Action(" index","ViewProjectProgress",new { area="user"})"
            class="@MenuActivator.Check(ViewContext,"ViewProjectProgress") nav-link">
            <i class="nav-icon fas fa-chart-pie"></i>
            <p>
                View projects in progress

            </p>
            </a>

        </li>
        <li class="nav-header">Work as staff</li>
        <li class="nav-item">
            <a href="@Url.Action(" index","ManageTaskProject",new { area="user"})"
            class="@MenuActivator.Check(ViewContext,"ManageTaskProject") nav-link">
            <i class="fas fa-tasks"></i>
            <p>
                View and manage tasks

            </p>
            </a>

        </li>
        <li class="nav-item">
            <a href="@Url.Action(" index","ViewInvolvedCenters",new { area="user"})"
            class="@MenuActivator.Check(ViewContext,"ViewInvolvedCenters") nav-link">
            <i class="fas fa-sitemap"></i>
            <p>
                View involved centers

            </p>
            </a>

        </li>
        <li class="nav-header">Freelance working</li>
        <li class="nav-item">
            <a href="@Url.Action(" index","JobApplication",new { area="user"})"
            class="@MenuActivator.Check(ViewContext,"JobApplication") nav-link">
            <i class="fas fa-briefcase"></i>
            <p>
                Job applications

            </p>
            </a>

        </li>
        <li class="nav-item">
            <a href="@Url.Action(" index","TaskInProgress",new { area="user"})"
            class="@MenuActivator.Check(ViewContext,"TaskInProgress") nav-link">
            <i class="fas fa-tasks"></i>
            <p>
                Tasks in progress
            </p>
            </a>

        </li>
        @else--}}
        <li class="nav-item">
            <a href="{{url('user/messenger')}}"
               class="nav-link {{\App\Models\Commen_utilities\Utilities\Standard_utilities::activeMenu('messenger')}}">
                <i class="fas fa-envelope"></i>
                <p>
                    My messages

                </p>
            </a>

        </li>
        <li class="nav-item">
            <a href="{{url('user/cashBook')}}"
               class="nav-link {{\App\Models\Commen_utilities\Utilities\Standard_utilities::activeMenu('cashBook')}}">
                <i class="fas fa-cash-register"></i>
                <p>
                    My Cash book

                </p>
            </a>

        </li>
        <li class="nav-item">
            <a href="{{url('user/home')}}"
               class="nav-link {{\App\Models\Commen_utilities\Utilities\Standard_utilities::activeMenu('home')}}">
                <i class="fas fa-home"></i>
                <p>
                    Home

                </p>
            </a>

        </li>
        <li class="nav-header">Owners</li>
        <li class="nav-item">
            <a href="{{url('user/center')}}"
               class="nav-link {{\App\Models\Commen_utilities\Utilities\Standard_utilities::activeMenu('center')}}">
                <i class="nav-icon fas fa-th"></i>
                <p>
                    Manage centers
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{url('user/myStaff')}}"
               class="nav-link {{\App\Models\Commen_utilities\Utilities\Standard_utilities::activeMenu('myStaff')}}">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                    Manage staff
                </p>
            </a>

        </li>
        <li class="nav-item">
            <a href="{{url('user/myDivision')}}"
               class="nav-link {{\App\Models\Commen_utilities\Utilities\Standard_utilities::activeMenu('myDivision')}}">
                <i class="nav-icon fas fa-th"></i>
                <p>
                    My divisions
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{url('user/myFunction')}}"
               class="nav-link {{\App\Models\Commen_utilities\Utilities\Standard_utilities::activeMenu('myFunction')}}">
                <i class="nav-icon fas fa-th"></i>
                <p>
                    My functions
                </p>
            </a>
        </li>
        <li class="nav-header">Request as client</li>
        <li class="nav-item">
            <a href="{{url('user/search')}}"
               class="nav-link {{\App\Models\Commen_utilities\Utilities\Standard_utilities::activeMenu('search')}}">
                <i class="nav-icon fas fa-chart-pie"></i>
                <p>
                    Search center

                </p>
            </a>

        </li>
        <li class="nav-item">
            <a href="{{url('user/requestToCenter')}}"
               class="nav-link {{\App\Models\Commen_utilities\Utilities\Standard_utilities::activeMenu('requestToCenter')}}">
                <i class="nav-icon fas fa-chart-pie"></i>
                <p>
                    My requests

                </p>
            </a>

        </li>
        <li class="nav-item">
            <a href="{{url('user/viewProjectProgress')}}"
               class="nav-link {{\App\Models\Commen_utilities\Utilities\Standard_utilities::activeMenu('viewProjectProgress')}}">
                <i class="nav-icon fas fa-chart-pie"></i>
                <p>
                    view projects in progress

                </p>
            </a>

        </li>
        <li class="nav-header">Work as staff</li>
        <li class="nav-item">
            <a href="{{url('user/manageTaskProject')}}"
               class="nav-link {{\App\Models\Commen_utilities\Utilities\Standard_utilities::activeMenu('manageTaskProject')}}">
                <i class="fas fa-tasks"></i>
                <p>
                    View and manage tasks

                </p>
            </a>

        </li>
        <li class="nav-item">
            <a href="{{url('user/viewInvolvedCenter')}}"
               class="nav-link {{\App\Models\Commen_utilities\Utilities\Standard_utilities::activeMenu('viewInvolvedCenter')}}">
                <i class="fas fa-sitemap"></i>
                <p>
                    View involved owners

                </p>
            </a>

        </li>
        <li class="nav-header">Freelance working</li>
        <li class="nav-item">
            <a href="{{url('user/jobApplication')}}"
               class="nav-link {{\App\Models\Commen_utilities\Utilities\Standard_utilities::activeMenu('jobApplication')}}">
                <i class="fas fa-briefcase"></i>
                <p>
                    Job applications

                </p>
            </a>

        </li>
        <li class="nav-item">
            <a href="{{url('user/taskInProgress')}}"
               class="nav-link {{\App\Models\Commen_utilities\Utilities\Standard_utilities::activeMenu('taskInProgress')}}">
                <i class="fas fa-tasks"></i>
                <p>
                    Tasks in progress
                </p>
            </a>

        </li>
        <li class="nav-item">
            <a href="{{url('user/projectInProgress')}}"
               class="nav-link {{\App\Models\Commen_utilities\Utilities\Standard_utilities::activeMenu('projectInProgress')}}">
                <i class="fas fa-tasks"></i>
                <p>
                    Projects in progress
                </p>
            </a>

        </li>
        {{-- @endif--}}
    </ul>
</nav>
