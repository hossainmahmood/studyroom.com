@extends('layouts.app')
@section('content')
    <style>
        .table td {
            padding: 2px;
            vertical-align: middle;
            border-top: 1px solid #dee2e6;
        }
    </style>
    <div class="table-responsive">
        <table id="" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Department</th>
                    <th>Designation</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($teachers as $teacher)
                    <tr class="viewDetails" style="">
                        <td>{{ $teacher->fullname }}</td>
                        <td>{{ $teacher->email }}</td>
                        <td>{{ $teacher->mobile }}</td>
                        <td>{{ $teacher->department }}</td>
                        <td>{{ $teacher->designation }}</td>

                        <td>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-sm btn-info detailsbtn" type="button" data-id="{{ $teacher->id }}"
                                    data-name="{{ $teacher->fullname }}" data-toggle="modal"
                                    data-target="#DetailsModal">More</button>
                                <button class="btn btn-sm btn-primary editbtn" data-toggle="modal" data-target="#EditModal"
                                    data-name="{{ $teacher->fullname }}" data-id="{{ $teacher->id }}">Edit</button>

                                <button class="btn btn-sm btn-danger deletebtn" data-toggle="modal"
                                    data-target="#DeleteModal" data-name="{{ $teacher->fullname }}"
                                    data-id="{{ $teacher->id }}">Delete</button>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script>
        $(document).ready(function() {
            $('.viewDetails .detailsbtn').click(function(e) {
                var teacherId = $(this).data('id');
                var url = document.location;

                $.ajax({
                    url: url + '/' + teacherId,
                    data: {
                        teacherId: teacherId
                    },
                    type: 'GET',
                    dataType: 'json'
                }).done(function(resp) {

                    var data = "";
                    var oddRow = false;
                    var cnt = 0;

                    for (key in resp) {
                        var col = "";
                        if (cnt % 2 == 0) {
                            col = " bg-light"
                        }
                        cnt++;
                        temp = '<div class="col-6 p-1 border-bottom ' + col + '">' + key +
                            '</div><div class="col-6 p-1 border-bottom ' + col + '">' + resp[key] +
                            '</div>'
                        data += temp;
                    }
                    $('#DetailsModal .modal-body').html('<div class="row p-3">' + data + "</div>");
                });
            });

            $('.viewDetails .editbtn').click(function(e) {
                var teacherId = $(this).data('id');
                var teacherName = $(this).data('name');
                var url = document.location;
                $('#EditModal .modal-title').html(teacherName);
                var formActionUrl = url + '/' + teacherId;

                $.ajax({
                    url: url + '/' + teacherId + '/edit',
                    type: 'GET',
                    dataType: 'json'
                }).done(function(resp) {
                    console.log(resp)
                    $("#updateForm").attr('action',
                        formActionUrl); //To set Form action Url in runtime
                    var data = "";
                    var oddRow = false;
                    var cnt = 0;

                    for (key in resp.teacher) {
                        var col = "";

                        //to make id created_at and updated_at text input field readonly
                        if (key == 'id' || key == 'created_at' || key == 'updated_at') {
                            readonlycon = "readonly";
                        } else readonlycon = null;

                        if (cnt % 2 == 0) {
                            col = " bg-light"
                        }
                        cnt++;
                        temp = '<div class="col-6 p-1 border-bottom ' + col + '">' + key +
                            '</div> <div class="col-6 p-1 border-bottom ' + col +
                            '"><input id = "' + key + '" ' + readonlycon + ' type="text" name = ' +
                            key + '  class="form-control" value="' + resp
                            .teacher[key] + '"></input></div>'
                        data += temp;
                    }

                    $('#EditModal .modal-body-content').html('<div class="row p-3">' + data +
                        "</div>");
                });
            });

            $('.viewDetails .deletebtn').click(function(e) {
                var teacherId = $(this).data('id');
                var teacherName = $(this).data('name');
                var url = document.location;
                $('#DeleteModal .warning-title').html(teacherName);
                var formActionUrl = url + '/' + teacherId;
                $("#deleteForm").attr('action', formActionUrl);
            });
        });
    </script>
@endsection

@section('modals')
    <div id="DetailsModal" class="modal fade " data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-lg modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div id="EditModal" class="modal fade " data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-lg modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Edit</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form id="updateForm" action="" method="POST">
                        @csrf()
                        @method('PUT')
                        <div class="modal-body-content">
                        </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-success" id="submitBtn">Update</button>
                    <button type="button" class="btn  btn-danger" data-dismiss="modal">Close</button>
                    </form>
                </div>
                </form>
            </div>
        </div>
    </div>

    <div id="DeleteModal" class="modal fade " data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-lg modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="alert alert-warning" role="alert">
                        This is a warning alert—check it out!
                      </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times</span>
                    </button>
                </div>

                <div class="modal-body">
                    <p>You are Removing</p><Span><p class="warning-title" id="staticBackdropLabel"></p></Span>
                    <form id="deleteForm" action="" method="POST">
                        @csrf()
                        @method('DELETE')
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger" id="submitBtn">Delete</button>
                    <button type="button" class="btn  btn-primary" data-dismiss="modal">Cancel</button>
                    </form>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection
