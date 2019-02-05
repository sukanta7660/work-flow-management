@extends('layouts.master')
@section('title')
    Salary Sheet
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-flat border-top-success">
                <div class="panel-heading">
                    <h6 class="panel-title">Salary Sheet</h6>
                </div>

                <div class="panel-body">
                    <table class="table table-bordered table-condensed table-hover table-striped datatable">
                        <thead>
                        <tr>
                            <th>Date</th>
                            <th>Name</th>
                            <th>Contact</th>
                            <th>Basic</th>
                            <th>Net Pay</th>
                            <th class="text-right">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($table as $row)
                            <tr>
                                <td>{{pub_date($row->created_at)}}</td>
                                <td>{{$row->employeeName}}</td>
                                <td>{{$row->employee['mobile']}}</td>
                                <td>{{money($row->employee['salary'])}}</td>
                                <td>{{money($row->amount)}}</td>
                                <td class="text-right white_sp">
                                    <a class="btn btn-xs btn-info no-padding" href="{{action('Employee\SalaryController@slip', ['id' => $row->salarysheetID])}}" title="View"><i class="icon-eye"></i></a>
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

    <script type="text/javascript" src="{{asset('public/assets/js/plugins/pickers/daterangepicker.js')}}"></script>

    <script type="text/javascript">

        $(function () {
            $('.datatable').DataTable({
                order: [[ 0, "desc" ]],
                iDisplayLength: 25,
                columnDefs: [
                    { orderable: false, "targets": [6] }//For Column Order
                ]
            });

        });


    </script>

@endsection