@extends('layouts.app')


@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <div class="main_content_iner ">

    <div class="main_content_iner ">
        <div class="container-fluid plr_30 body_white_bg pt_30">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="white_box mb_30">
                        <div class="box_header ">
                            <div class="main-title">
                                <h3 class="mb-0">Add New Expense</h3>
                            </div>
                        </div>
                        <form action="{{ route('expense.upload') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label" for="file">Import Expense File</label>
                                <input type="file" class="form-control" id="Receipt" name="file">
                            </div>
                            @error('file')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                            <a href="{{ route('expense.all') }}" style="float: right;"
                                class="btn btn-rounded btn-outline btn-secondary mb-5">Back</a>
                            <button type="submit" class="btn btn-rounded btn-outline btn-secondary"
                                style="float: right; margin-right:2%;">Upload Expense</button>
                        </form>
                    </div>
                </div>


            @endsection
