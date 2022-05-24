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
                        <form action="{{ route('expense.update', $expenses->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="old_image" value="{{ $expenses->Receipt }}">
                            <input type="hidden" name="id" value="{{ $expenses->id}}">
                            <div class="mb-3">
                                <label class="form-label" for="Merchant">Merchant </label>
                                <input type="text" class="form-control" id="Merchant" value="{{$expenses->Merchant}}" name="Merchant">
                            </div>
                            @error('Merchant')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                            <div class="mb-3">
                                <label class="form-label" for="Total">Total</label>
                                <input type="text" class="form-control" id="Total" value="{{$expenses->Total}}" name="Total">
                            </div>
                            @error('Total')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                            <div class="mb-3">
                                <label class="form-label" for="Date_Issue">Date_Issue</label>
                                <input type="date" class="form-control" id="Date_Issue" value="{{$expenses->Date_Issue}}" name="Date_Issue">
                            </div>
                            @error('Date_Issue')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                            <div class="mb-3">
                                <label class="form-label" for="Status">Status</label>
                                <select class="form-select"  name="Status" autocomplete="off" >
                                    <option selected>{{$expenses->Status}}</option>
                                    <option value="New">New</option>
                                    <option value="In Progress">In Progress</option>
                                    <option value="Reimbursed">Reimbursed</option>
                                </select>
                            </div>
                            @error('Status')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                            <div class="mb-3">
                                <label class="form-label" for="Comment">Comment</label>
                                <textarea class="form-control" name="Comment" cols="10" rows="10" placeholder="Comment">{{$expenses->Comment}}</textarea>
                            </div>
                            @error('Comment')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                            <div class="mb-3">
                                <img src="{{(!empty($expenses->Receipt)) ?  asset($expenses->Receipt) : url('upload/upload.png') }}"
                                    style="width: 30%; height:30%;" id="showImage">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="Receipt">Receipt Image</label>
                                <input type="file" class="form-control" id="Receipt" name="Receipt">
                            </div>
                            @error('Receipt')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                            <a href="{{ route('expense.all') }}" style="float: right;"
                                class="btn btn-rounded btn-outline btn-secondary mb-5">Back</a>
                            <button type="submit" class="btn btn-rounded btn-outline btn-secondary"
                                style="float: right; margin-right:2%;">Update Expense</button>
                        </form>
                    </div>
                </div>

                <script type="text/javascript">
                    $(document).ready(function(e) {
                        $('#Receipt').change(function(e) {
                            var reader = new FileReader();
                            reader.onload = function(e) {
                                $('#showImage').attr('src', e.target.result);
                            }
                            reader.readAsDataURL(e.target.files['0']);
                        });
                    });
                </script>

            @endsection
