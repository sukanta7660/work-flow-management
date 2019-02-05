@extends('layouts.master')
@section('title')
    Message
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-flat border-top-success">
                <div class="panel-heading">
                    <h6 class="panel-title">All Messages</h6>
                </div>

                <div class="panel-body">
                    <table class="table table-bordered table-condensed table-hover table-striped datatable">
                        <thead>
                        <tr>
                            <th>Date</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th class="text-right">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($table as $row)
                            <tr>
                                <td>{{pub_date($row->created_at)}}</td>
                                <td class="text-capitalize">{{$row->name}}</td>
                                <td class="text-capitalize">{{$row->email}}</td>
                                <td class="text-capitalize">{{$row->subject}}</td>
                                <td class="text-capitalize">{{str_limit($row->message,20,'...')}}</td>
                                <td class="text-right">
                                    <a href="#" class="btn btn-float-lg btn-sm p-0" data-toggle="modal" data-target="#showModal{{$row->contactID}}"><i class="icon-eye8 pr-5"></i> View</a>                                </td>
                            </tr>

                            {{--start Show modal--}}
                            <div id="showModal{{$row->contactID}}" class="modal fade">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header bg-slate-600 pt-10 pb-10">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h5 class="modal-title"><i class=" icon-magazine pr-10"></i> Full Message Details</h5>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                        <div class="panel-body">
                                                            <p><span class="mr-2">Date: </span>{{pub_date($row->created_at)}}</p>
                                                            <h6><span class="mr-2 text-bold">Name : </span>{{$row->name}}</h6>
                                                            <p><span class="text-bold mr-2">Email : </span>{{$row->email}}</p>
                                                            <p><span class="text-bold mr-2">Subject : </span>{{$row->subject}}</p>
                                                            <p><span class="text-bold">Message : </span><br>{{$row->message}}</p>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{--End show Modal--}}
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')

    <script src="{{asset('public/js/jquery.geocomplete.min.js')}}" type="text/javascript"></script>

    <script type="text/javascript">

        $(function () {

            $('.datatable').DataTable({
                order: [[ 0, "asc" ]],
                iDisplayLength: 25,
                columnDefs: [
                    { orderable: false, "targets": [5] }//For Column Order
                ]
            });
        });



    </script>

@endsection