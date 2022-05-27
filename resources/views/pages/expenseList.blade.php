@extends('layouts.app')


@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <style>
        .modal_image {
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        .modal_image:hover {
            opacity: 0.7;
        }


        /* The Modal (background) */
        .modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1;
            /* Sit on top */
            padding-top: 100px;
            /* Location of the box */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(0, 0, 0, 0.9);
            /* Black w/ opacity */
        }

        /* Modal Content (image) */
        .modal-content {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
        }

        /* Caption of Modal Image */
        #caption {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
            text-align: center;
            color: #ccc;
            padding: 10px 0;
            height: 150px;
        }

        /* Add Animation */
        .modal-content,
        #caption {
            -webkit-animation-name: zoom;
            -webkit-animation-duration: 0.6s;
            animation-name: zoom;
            animation-duration: 0.6s;
        }

        @-webkit-keyframes zoom {
            from {
                -webkit-transform: scale(0)
            }

            to {
                -webkit-transform: scale(1)
            }
        }

        @keyframes zoom {
            from {
                transform: scale(0.1)
            }

            to {
                transform: scale(1)
            }
        }

        /* The Close Button */
        .close {
            position: absolute;
            top: 15px;
            right: 35px;
            color: #f1f1f1;
            font-size: 40px;
            font-weight: bold;
            transition: 0.3s;
        }

        .close:hover,
        .close:focus {
            color: #bbb;
            text-decoration: none;
            cursor: pointer;
        }

        /* 100% Image Width on Smaller Screens */
        @media only screen and (max-width: 700px) {
            .modal-content {
                width: 100%;
            }
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
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <a href="{{ route('expense.add') }}" style="float: right"
                                    class="btn btn-rounded btn-outline btn-secondary">Add
                                    Expense</a>
                                <a href="{{ route('expense.import') }}" style="float: right; margin-right:5px;"
                                    class="btn btn-rounded btn-outline btn-secondary">Upload
                                    Expense</a>
                                <div class="serach_field-area">
                                    <div class="search_inner">
                                        <form action="#">
                                            <div class="search_field">
                                                <input type="text" placeholder="Search here..." id="myInput"
                                                    onkeyup="myFunction()">
                                            </div>
                                            <button type="submit"> <img
                                                    src="{{ asset('frontend/img/icon/icon_search.svg') }}" alt="">
                                            </button>
                                        </form>

                                    </div>

                                </div>

                                <br>
                                <!-- <h4 class="header-title"></h4> -->
                                <div class="single-table">
                                    <div class="table-responsive">
                                        <table
                                            class="table table-hover table-bordered table-striped progress-table text-center"
                                            id="myTable">
                                            <thead class="text-uppercase">


                                                <th>S.N</th>
                                                <th>Merchant </th>
                                                <th>Total</th>
                                                <th>Status </th>
                                                <th>Comment </th>
                                                <th>Date Issue </th>
                                                <th>View Receipt</th>
                                                <th>Action</th>
                                            </thead>

                                            <tbody>
                                                @foreach ($expenses as $expense)
                                                    <tr>
                                                        <td>{{ $expenses->firstItem() + $loop->index }}</td>
                                                        <td>{{ $expense->Merchant }}</td>
                                                        <td>{{ $expense->Total }}</td>
                                                        <td>{{ $expense->Status }}</td>
                                                        <td>{{ $expense->Comment }}</td>
                                                        <td>{{ $expense->Date_Issue }}</td>
                                                        <td>
                                                            @if ($expense->Receipt == null)
                                                                <span class="text-danger"> No Receipt Found</span>
                                                            @else
                                                                <img src="{{ asset($expense->Receipt) }}" alt="Receipt"
                                                                    width="50%" class="modal_image" height="30%">
                                                            @endif

                                                            <div id="myModal" class="modal">
                                                                <span class="close">×</span>
                                                                <img class="modal-content" id="img01">
                                                                <div id="caption"></div>
                                                            </div>
                                                        </td>
                                                        <td> <a href="{{ route('expense.edit', $expense->id) }}"
                                                                class="btn btn-rounded btn-outline btn-secondary"
                                                                title="Edit"><i class="fa fa-pencil-square-o"></i>Edit</a>
                                                        </td>
                                                @endforeach
                                                </tr>
                                            </tbody>
                                        </table>
                                        {{-- {{ $expenses->links('pagination::bootstrap-4') }} --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <script>

                    // Search Query
                    function myFunction() {

                        var input = document.getElementById("myInput");
                        var filter = input.value.toUpperCase();
                        var table = document.getElementById("myTable");
                        var trs = table.tBodies[0].getElementsByTagName("tr");

                        for (var i = 0; i < trs.length; i++) {
                            var tds = trs[i].getElementsByTagName("td");
                            trs[i].style.display = "none";
                            for (var i2 = 0; i2 < tds.length; i2++) {
                                if (tds[i2].innerHTML.toUpperCase().indexOf(filter) > -1) {
                                    trs[i].style.display = "";
                                    continue;
                                }
                            }
                        }

                    }

                    // Image Pop up
                    var modal = document.getElementById('myModal');
                    var img = document.getElementsByClassName('modal_image');
                    for (var i = 0; i < img.length; i++) {
                        var modalImg = document.getElementById("img01");
                        var captionText = document.getElementById("caption");
                        img[i].addEventListener('click', function() {
                            modal.style.display = "block";
                            modalImg.src = this.src;
                            captionText.innerHTML = this.alt;
                        })
                    }
                    var span = document.getElementsByClassName("close")[0];
                    span.onclick = function() {
                        modal.style.display = "none";
                    }

                </script>
            @endsection
