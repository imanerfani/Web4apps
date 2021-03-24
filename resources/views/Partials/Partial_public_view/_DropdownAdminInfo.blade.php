{{--
@inject SignInManager<ApplicationUser> SignInManager
@inject IApplicationUserManager UserManager
@{
    var user = await UserManager.GetUserAsync(User);
}
--}}

{{--@if(true)--}}
    <div id="btn_account" class="btn-group">
        <button type="button" class="btn bg-transparent dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
           {{-- @if(Auth::user()->avatar != null)
                <img class="img-circle avatar" alt="" src="{{Auth::user()->avatar}}">
            @else
                <img src="{{asset('public/Images/avatar.png')}}" class="img-circle avatar" alt="">
            @endif

            @if(Auth::user()->full_name)
                <span class="top-username">{{Auth::user()->full_name}}</span>
            @else
                <span class="top-username">{{Auth::user()->email}}</span>
            @endif
--}}
        </button>
        <div class="dropdown-menu">

                <a href="{{url('admin/account')}}" class="dropdown-item">
                    <i class="fas fa-user"></i> Profile
                </a>
                <a class="dropdown-item" href="{{url('admin/account/changePassword')}}"><i class="fas fa-key"></i>
                    Change password</a>
                <div class="dropdown-divider"></div>

                <a href="{{--{{ route('user.logout') }}--}}"  id="btn_signOut" class="btn-link dropdown-item">
                    <i class="fas fa-sign-out-alt"></i> Sign out
                </a>
        </div>
    </div>
{{--
@endif
--}}
