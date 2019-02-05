@extends('layouts.master')
@section('title')
    Attendance
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-flat border-top-success">
                <div class="panel-heading">
                    <h6 class="panel-title">Attendance List</h6>
                </div>

                <div class="panel-body">
                    <table class="table table-bordered table-condensed table-hover table-striped datatable">
                        <thead>
                        <tr>
                            <th>Date</th>
                            <th>Name</th>
                            <th>In Time</th>
                            <th>Out Time</th>
                            <th>Working Hour</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($table as $row)
                            <tr>
                                <td>{{pub_date($row->created_at)}}</td>
                                <td class="text-capitalize">{{$row->user['name']}}</td>
                                <td class="text-capitalize">{{$row->inTime}}</td>
                                <td class="text-capitalize">
                                    @if($row->outTime != '')
                                        {{$row->outTime}}
                                    @else
                                        Not Yet Punch Out
                                    @endif
                                </td>
                                @php
                                    $punchIn = new DateTime($row->inTime);
                                    $punchOut = new DateTime($row->outTime);
                                    $workHour = $punchIn->diff($punchOut);
                                @endphp
                                <td>
                                    @if($row->inTime != '' && $row->outTime != '')
                                        {{$workHour->format('%H:%I:%S')}}<strong>&nbsp;hr.</strong>
                                    @endif
                                </td>
                            </tr>
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
                columnDefs: [
                    { orderable: false, "targets": [] }//For Column Order
                ]
            });
        });



    </script>

@endsection