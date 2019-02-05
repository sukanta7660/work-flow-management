@extends('layouts.master')
@section('title')
    Leave Request
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-flat border-top-success">
                <div class="panel-heading">
                    <h6 class="panel-title">All Leave Request</h6>
                </div>

                <div class="panel-body">
                    <table class="table table-bordered table-condensed table-hover table-striped datatable">
                        <thead>
                        <tr>
                            <th>Date</th>
                            <th>Name</th>
                            <th>Subject</th>
                            <th class="text-center">View</th>
                            <th class="text-right">Action/Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($table as $row)
                            <tr>
                                <td>{{pub_date($row->created_at)}}</td>
                                <td class="text-capitalize">{{$row->name}}</td>
                                <td class="text-capitalize">{{$row->subject}}</td>
                                <td class="text-capitalize">
                                    <a href="#" class="btn btn-float-lg" data-toggle="modal" data-target="#showModal{{$row->leaverequestID}}"><i class="icon-eye8 pr-5"></i> View</a>
                                </td>
                                <td class="text-right">
                                    @if($row->status == 'Pending')
                                        <a class="btn btn-xs btn-success no-padding" href="{{action('Leave\LeaveRequestController@accept', ['id' => $row->leaverequestID])}}"  onclick="return confirm('Are you sure to Accept?')" title="Accept"><i class="icon-checkbox-checked"></i></a>
                                        <a class="btn btn-xs btn-danger no-padding" href="{{action('Leave\LeaveRequestController@reject', ['id' => $row->leaverequestID])}}"  onclick="return confirm('Are you sure to Reject?')" title="Reject"><i class="icon-close2"></i></a>
                                    @elseif($row->status == 'Accepted')
                                        <span style="padding: 5px;font-weight: 600;" class="bg-success">{{$row->status}}</span>
                                    @elseif($row->status == 'Rejected')
                                        <span style="padding: 5px;font-weight: 600;" class="bg-danger">{{$row->status}}</span>
                                    @endif
                                </td>
                            </tr>

                            {{--start Show modal--}}
                            <div id="showModal{{$row->leaverequestID}}" class="modal fade">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header bg-slate-600 pt-10 pb-10">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h5 class="modal-title"><i class=" icon-magazine pr-10"></i> Full Details</h5>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="panel-body">
                                                        <p><strong>{{pub_date($row->created_at)}}</strong></p>
                                                        <p class="mb-2"><strong>To</strong></p>
                                                        <p class="mb-2">The Administrator,</p>
                                                        <p class="mb-2"><strong>Leading University, Sylhet</strong></p>
                                                        <p><span class="text-bold mr-2">Subject : </span>{{$row->subject}}.</p>
                                                        <p class="mb-2">Dear Sir,</p>
                                                        <p class="mb-2">With due respect and humble submission to state that, I am &nbsp; <strong>{{$row->name}}</strong>.</p>
                                                        <p class="mb-2">I would be like to inform you that ,</p>
                                                        <p>{{$row->description}}</p>
                                                        <p class="mb-4">I therefore, pray and hope that, you would be kind enough to grant my leave and oblige thereby.</p>
                                                        <p class="m-0"><strong>Your Sincerely</strong></p>
                                                        <p><strong>{{$row->sincerely}}</strong></p>
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
                order: [[ 0, "DESC" ]],
                iDisplayLength: 25,
                columnDefs: [
                    { orderable: false, "targets": [3,4] }//For Column Order
                ]
            });
        });



    </script>

@endsection