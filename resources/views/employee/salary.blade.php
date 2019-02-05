@extends('layouts.master')
@extends('box.employee.pay_salary')
@section('title')
    Employee Salary
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-flat border-top-success">
                <div class="panel-heading">
                    <h6 class="panel-title">Employee Salary</h6>
                </div>

                <div class="panel-body">
                    <table class="table table-bordered table-condensed table-hover table-striped datatable">
                        <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Type</th>
                            <th>Name</th>
                            <th>Contact</th>
                            <th class="text-right">Salary</th>
                            <th class="text-right">Balance</th>
                            <th class="text-right">Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($table as $row)
                            <tr>
                                <td>{{$row->employeeID}}</td>
                                <td>{{$row->user['userType']}}</td>
                                <td>{{$row->user['name']}}</td>
                                <td>{{$row->mobile}}</td>
                                <td class="text-right">{{money($row->salary)}}</td>
                                <td class="text-right">{{money($row->account)}}</td>
                                <td class="text-right white_sp">
                                    @if($row->account > 0)
                                        <button class="btn btn-xs btn-primary no-padding mr-5 ediBtn"  data-toggle="modal" data-account ="{{$row->account}}"  data-id ="{{$row->employeeID}}" data-target="#salaryPay" title="Pay Salary"><i class="icon-wallet"></i></button>
                                    @endif
                                    <a class="btn btn-xs btn-info no-padding" href="{{action('Employee\SalaryController@sheet',[$row->employeeID])}}" title="Create New Salary"><i class="icon-hammer-wrench"></i></a>
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

    <script type="text/javascript">

        $(function () {
            $('.ediBtn').click(function () {
                var id = $(this).data('id');
                var account = $(this).data('account');

                $('#employeeID').val(id);
                $('#salaryPay [name=account]').val(account);
            });
        });

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