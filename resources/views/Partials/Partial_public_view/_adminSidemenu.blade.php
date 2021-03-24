@php
    $url = url()->current();
    $path = explode('/', $url);
@endphp
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
    with font-awesome or any other icon font library -->
        <li class="nav-item">
            <a href="{{url('admin/dashboard')}}"
               class="nav-link {{\App\Models\Utilities\Standard_utilities::activeMenu('dashboard')}}">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Dashboard
                </p>
            </a>
        </li>
        <li class='nav-item'>
            <a href="{{url('admin/sector')}}"
               class="nav-link {{\App\Models\Utilities\Standard_utilities::activeMenu('sector')}}">
                <i class="nav-icon nav-icon fas fa-th"></i>
                {{-- @*<img src="~/flaticon/black/edit-tools.svg" class="flaticon" />*@--}}
                <p>
                    One
                </p>
            </a>
        </li>
        <li class='nav-item'>
            <a href="{{url('admin/specialty')}}"
               class="nav-link {{\App\Models\Utilities\Standard_utilities::activeMenu('specialty')}}">
                <i class="nav-icon nav-icon fas fa-th"></i>
                {{-- @*<img src="~/flaticon/black/edit-tools.svg" class="flaticon" />*@--}}
                <p>
                    Two
                </p>
            </a>
        </li>
        <li class='nav-item'>
            <a href="{{url('admin/currency')}}"
               class="nav-link {{\App\Models\Utilities\Standard_utilities::activeMenu('currency')}}">
                <i class="nav-icon fas fa-money-bill"></i>
                {{-- @*<img src="~/flaticon/black/edit-tools.svg" class="flaticon" />*@--}}
                <p>
                    Three
                </p>
            </a>
        </li>
        @if($path[4] == "division")
            <li class="nav-item has-treeview {{\App\Models\Utilities\Standard_utilities::openMenu('division')}}">
        @elseif($path[4] == "assignDivisionToSector")
            <li class="nav-item has-treeview {{\App\Models\Utilities\Standard_utilities::openMenu('assignDivisionToSector')}}">
        @else
            <li class="nav-item has-treeview">
                @endif
                <a href=" #" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Four
                        <i class="right fas fa-angle-down"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{url('admin/division')}}"
                           class="nav-link {{\App\Models\Utilities\Standard_utilities::activeMenu('division')}}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Divisions</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('admin/assignDivisionToSector')}}"
                           class="nav-link {{\App\Models\Utilities\Standard_utilities::activeMenu('assignDivisionToSector')}}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Assign division to sector</p>
                        </a>
                    </li>
                </ul>
            </li>
            @if($path[4] == "function")
                <li class="nav-item has-treeview {{\App\Models\Utilities\Standard_utilities::openMenu('function')}}">
            @elseif($path[4] == "assignFunctionToDivision")
                <li class="nav-item has-treeview {{\App\Models\Utilities\Standard_utilities::openMenu('assignFunctionToDivision')}}">
            @else
                <li class="nav-item has-treeview">
                    @endif
                    <a href=" #" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Five
                            <i class="right fas fa-angle-down"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview {{\App\Models\Utilities\Standard_utilities::openMenu('function')}}">
                        <li class="nav-item">
                            <a href="{{url('admin/function')}}"
                               class="nav-link {{\App\Models\Utilities\Standard_utilities::activeMenu('function')}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Fives</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('admin/assignFunctionToDivision')}}"
                               class="nav-link {{\App\Models\Utilities\Standard_utilities::activeMenu('assignFunctionToDivision')}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Assign function to division</p>
                            </a>
                        </li>
                    </ul>
                </li>
    </ul>
</nav>
