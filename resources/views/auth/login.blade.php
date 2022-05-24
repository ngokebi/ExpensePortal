{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}

<!DOCTYPE html>
<html lang="zxx">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Finance</title>
    <link rel="icon" href="{{ asset('frontend/img/logo.png" type="image/png') }}">

    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap1.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('frontend/vendors/themefy_icon/themify-icons.css') }}" />

    <link rel="stylesheet" href="{{ asset('frontend/vendors/swiper_slider/css/swiper.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('frontend/vendors/select2/css/select2.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('frontend/vendors/niceselect/css/nice-select.css') }}" />

    <link rel="stylesheet" href="{{ asset('frontend/vendors/owl_carousel/css/owl.carousel.css') }}" />

    <link rel="stylesheet" href="{{ asset('frontend/vendors/gijgo/gijgo.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('frontend/vendors/font_awesome/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/vendors/tagsinput/tagsinput.css') }}" />

    <link rel="stylesheet" href="{{ asset('frontend/vendors/datatable/css/jquery.dataTables.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/vendors/datatable/css/responsive.dataTables.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/vendors/datatable/css/buttons.dataTables.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('frontend/vendors/text_editor/summernote-bs4.css') }}" />

    <link rel="stylesheet" href="{{ asset('frontend/vendors/morris/morris.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/vendors/material_icon/material-icons.css') }}" />

    <link rel="stylesheet" href="{{ asset('frontend/css/metisMenu.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/css/style1.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/colors/default.css" id="colorSkinCSS') }}">
</head>

<body class="crm_body_bg">
    <div class="main_content_iner ">
        <div class="container-fluid  body_white_bg pt_30">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="white_box mb_30">
                        <div class="row justify-content-center">
                            <div class="col-lg-6">

                                    <div class="modal-content cs_modal">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Log in</h5>
                                        </div>
                                        <div class="modal-body">
                                            <form method="POST" action="{{ route('login') }}">
                                                @csrf
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Email:</label>
                                                    <input type="text" class="form-control" name="email" placeholder="Email">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Password:</label>
                                                    <input type="password" class="form-control" name="password" placeholder="Password">
                                                </div>
                                                <button class="btn_1 full_width text-center">{{ __('Log in') }}</button>
                                                <p>Need an account? <a href="{{route('register')}}"> Sign Up</a></p>
                                                <div class="text-center">
                                                    <a href="{{ route('password.request') }}" class="pass_forget_btn">Forget
                                                        Password?</a>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <script src="{{ asset('frontend/js/jquery1-3.4.1.min.js') }}"></script>

            <script src="{{ asset('frontend/js/popper1.min.js') }}"></script>

            <script src="{{ asset('frontend/js/bootstrap1.min.js') }}"></script>

            <script src="{{ asset('frontend/js/metisMenu.js') }}"></script>

            <script src="{{ asset('frontend/vendors/count_up/jquery.waypoints.min.js') }}"></script>

            <script src="{{ asset('frontend/vendors/chartlist/Chart.min.js') }}"></script>

            <script src="{{ asset('frontend/vendors/count_up/jquery.counterup.min.js') }}"></script>

            <script src="{{ asset('frontend/vendors/swiper_slider/js/swiper.min.js') }}"></script>

            <script src="{{ asset('frontend/vendors/niceselect/js/jquery.nice-select.min.js') }}"></script>

            <script src="{{ asset('frontend/vendors/owl_carousel/js/owl.carousel.min.js') }}"></script>

            <script src="{{ asset('frontend/vendors/gijgo/gijgo.min.js') }}"></script>

            <script src="{{ asset('frontend/vendors/datatable/js/jquery.dataTables.min.js') }}"></script>
            <script src="{{ asset('frontend/vendors/datatable/js/dataTables.responsive.min.js') }}"></script>
            <script src="{{ asset('frontend/vendors/datatable/js/dataTables.buttons.min.js') }}"></script>
            <script src="{{ asset('frontend/vendors/datatable/js/buttons.flash.min.js') }}"></script>
            <script src="{{ asset('frontend/vendors/datatable/js/jszip.min.js') }}"></script>
            <script src="{{ asset('frontend/vendors/datatable/js/pdfmake.min.js') }}"></script>
            <script src="{{ asset('frontend/vendors/datatable/js/vfs_fonts.js') }}"></script>
            <script src="{{ asset('frontend/vendors/datatable/js/buttons.html5.min.js') }}"></script>
            <script src="{{ asset('frontend/vendors/datatable/js/buttons.print.min.js') }}"></script>
            <script src="{{ asset('frontend/js/chart.min.js') }}"></script>

            <script src="{{ asset('frontend/vendors/progressbar/jquery.barfiller.js') }}"></script>

            <script src="{{ asset('frontend/vendors/tagsinput/tagsinput.js') }}"></script>

            <script src="{{ asset('frontend/vendors/text_editor/summernote-bs4.js') }}"></script>
            <script src="{{ asset('frontend/vendors/apex_chart/apexcharts.js') }}"></script>

            <script src="{{ asset('frontend/js/custom.js') }}"></script>

            <script src="{{ asset('frontend/js/active_chart.js') }}"></script>
            <script src="{{ asset('frontend/vendors/apex_chart/radial_active.js') }}"></script>
            <script src="{{ asset('frontend/vendors/apex_chart/stackbar.js') }}"></script>
            <script src="{{ asset('frontend/vendors/apex_chart/area_chart.js') }}"></script>

            <script src="{{ asset('frontend/vendors/apex_chart/bar_active_1.js') }}"></script>
            <script src="{{ asset('frontend/vendors/chartjs/chartjs_active.js') }}"></script>

    </body>

    </html>
