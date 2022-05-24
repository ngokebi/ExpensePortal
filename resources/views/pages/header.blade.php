<div class="container-fluid g-0">
    <div class="row">
        <div class="col-lg-12 p-0">
            <div class="header_iner d-flex justify-content-between align-items-center">
                <div class="sidebar_icon d-lg-none">
                    <i class="ti-menu"></i>
                </div>
                <div class="serach_field-area">
                    <div class="search_inner">
                        {{-- <form action="#">
                            <div class="search_field">
                                <input type="text" placeholder="Search here...">
                            </div>
                            <button type="submit"> <img src="{{ asset('frontend/img/icon/icon_search.svg') }}" alt="">
                            </button>
                        </form> --}}
                    </div>
                </div>
                <div class="header_right d-flex justify-content-between align-items-center">
                    <div class="header_notification_warp d-flex align-items-center">

                    </div>
                    <div class="profile_info">
                        <img src="{{ (!empty($user->profile_photo_path)) ?  url('upload/images/' . $user->profile_photo_path) : url('upload/admin.png') }}" alt="#">
                        <div class="profile_info_iner">
                            <p>Welcome Admin!</p>
                            <h5>{{ Auth::user()->name }}</h5>
                            <div class="profile_info_details">
                                <a href="{{route('profile')}}">My Profile <i class="ti-user"></i></a>
                                <a href="{{route('settings')}}">Settings <i class="ti-settings"></i></a>
                                <a href="{{ route('logout') }}">Log Out <i class="ti-shift-left"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
