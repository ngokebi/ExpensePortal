@extends('layouts.app')


@section('content')

<style>
    .pCard_card .pCard_up {
    position: absolute;
    width: 100%;
    height: 437px;
    background-image: url({{'upload/images/' . $user->profile_photo_path}});
    background-position: 50%;
    background-size: cover;
    z-index: 3;
    text-align: center;
    -webkit-border-top-left-radius: 30px;
    -moz-border-top-left-radius: 30px;
    -ms-border-top-left-radius: 30px;
    -o-border-top-left-radius: 30px;
    border-top-left-radius: 30px;
    -webkit-border-top-right-radius: 30px;
    -moz-border-top-right-radius: 30px;
    -ms-border-top-right-radius: 30px;
    -o-border-top-right-radius: 30px;
    border-top-right-radius: 30px;
    -webkit-transition: 0.5s ease-in-out;
    -moz-transition: 0.5s ease-in-out;
    -ms-transition: 0.5s ease-in-out;
    -o-transition: 0.5s ease-in-out;
    transition: 0.5s ease-in-out;
}
</style>
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session('success') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div class="main_content_iner ">
        <div class="container-fluid plr_30 body_white_bg pt_30">
            <div class="row justify-content-center">

                <div class="col-md-8">
                    <div class="white_box mb_30">
                        <div class="box_header ">
                            <div class="main-title">
                                <h3 class="mb-0">My Profile</h3>
                            </div>
                        </div>
                        <div class="pCard_card">
                            {{-- <img src="{{ !empty($user->profile_photo_path) ? url('upload/images/' . $user->profile_photo_path) : url('upload/admin.png') }}" alt=""> --}}
                            <div class="pCard_up">
                                <img src="{{$user->profile_photo_path}}" alt="">
                                <div class="pCard_text">
                                    <h2 style="color: black">{{$user->name}}</h2>
                                    <p style="color: black">{{$user->job_description}}</p>
                                </div>
                                <div class="pCard_add"><i class="fa fa-plus"></i></div>
                            </div>
                            <div class="pCard_down">
                                <div>
                                    <p>Location</p>
                                    <p>{{$user->location}}</p>
                                </div>
                                <div>
                                    <p></p>
                                    <p></p>
                                </div>
                                <div>
                                    <p>Department</p>
                                    <p>{{$user->department}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    @endsection
