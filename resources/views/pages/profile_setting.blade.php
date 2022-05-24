@extends('layouts.app')


@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <div class="main_content_iner ">
        <div class="container-fluid plr_30 body_white_bg pt_30">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="white_box mb_30">
                        <div class="box_header ">
                            <div class="main-title">
                                <h3 class="mb-0">Profile Settings</h3>
                            </div>
                        </div>
                        <form action="{{ route('profile.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label" for="name">Name </label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Full Name">
                            </div>
                            @error('name')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                            <div class="mb-3">
                                <label class="form-label" for="job_description">Job Description</label>
                                <input type="text" class="form-control" id="job_description" name="job_description"
                                    placeholder="Job Description">
                            </div>
                            @error('job_description')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                            <div class="mb-3">
                                <label class="form-label" for="location">Location</label>
                                <textarea class="form-control" name="location" cols="10" rows="10" placeholder="Your Location"></textarea>
                            </div>
                            @error('location')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                            <div class="mb-3">
                                <label class="form-label" for="department">Department</label>
                                <input type="text" class="form-control" id="department" name="department"
                                    placeholder="Department">
                            </div>
                            @error('department')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                            <div class="mb-3">
                                <img src="{{ !empty($user->profile_photo_path) ? url('upload/images/' . $user->profile_photo_path) : url('upload/admin.png') }}"
                                    style="width: 40%; height:40%;" id="showImage">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="exampleFormControlSelect2">Profile Image</label>
                                <input type="file" class="form-control" id="profile_photo_path" name="profile_photo_path">
                            </div>
                            @error('profile_photo_path')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                            <a href="{{ route('profile') }}" style="float: right;"
                                class="btn btn-rounded btn-outline btn-secondary mb-5">Back</a>
                            <button type="submit" class="btn btn-rounded btn-outline btn-secondary"
                                style="float: right; margin-right:2%;">Update</button>
                        </form>
                    </div>
                </div>
                <script type="text/javascript">
                    $(document).ready(function(e) {
                        $('#profile_photo_path').change(function(e) {
                            var reader = new FileReader();
                            reader.onload = function(e) {
                                $('#showImage').attr('src', e.target.result);
                            }
                            reader.readAsDataURL(e.target.files['0']);
                        });
                    });
                </script>
            @endsection
