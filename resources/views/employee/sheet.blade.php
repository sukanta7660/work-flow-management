@extends('layouts.general')
@extends('box.employee.salary')
@section('title')
    Employee No #{{invoice_n($table->employeeID)}}
@endsection

@section('back-url')
    <div class="col-xs-4"><a class="btn btn-danger btn-xs heading-btn" href="{{action('Employee\SalaryController@index')}}"><i class="icon-arrow-left16 position-left"></i> Back</a></div>
    <div class="col-xs-8 text-right text-size-large text-bold">Employee: {{$table->user['name']}}</div>
@endsection

@section('content')
    <div class="row">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped">
                    <tr>
                        <th class="p-5 pt-0 pb-0 text-bold bg-orange">Name</th>
                        <td class="p-5 pt-0 pb-0">{{$table->user['name']}}</td>
                        <th class="p-5 pt-0 pb-0 text-bold bg-orange">Mobile</th>
                        <td class="p-5 pt-0 pb-0">{{$table->mobile}}</td>
                    </tr>
                    <tr>
                        <th class="p-5 pt-0 pb-0 text-bold bg-orange">Date Of Birth</th>
                        <td class="p-5 pt-0 pb-0">{{pub_date($table->dob)}}</td>
                        <th class="p-5 pt-0 pb-0 text-bold bg-orange">Position</th>
                        <td class="p-5 pt-0 pb-0">{{$table->position}}</td>
                    </tr>
                    <tr>
                        <th class="p-5 pt-0 pb-0 text-bold bg-orange">Father</th>
                        <td class="p-5 pt-0 pb-0">{{$table->father}}</td>
                        <th class="p-5 pt-0 pb-0 text-bold bg-orange">Gender</th>
                        <td class="p-5 pt-0 pb-0">{{$table->gender}}</td>
                    </tr>
                    <tr>
                        <th class="p-5 pt-0 pb-0 text-bold bg-orange">Mother</th>
                        <td class="p-5 pt-0 pb-0">{{$table->mother}}</td>
                        <th class="p-5 pt-0 pb-0 text-bold bg-orange">Post Code</th>
                        <td class="p-5 pt-0 pb-0">{{$table->postCode}}</td>
                    </tr>
                    <tr>
                        <th class="p-5 pt-0 text-bold pb-0 bg-orange">NID</th>
                        <td class="p-5 pt-0 pb-0">{{$table->nid}}</td>
                        <th class="p-5 pt-0 text-bold pb-0 bg-orange">Address</th>
                        <td class="p-5 pt-0 pb-0">{{$table->address}}</td>
                    </tr>
                    <tr>
                        <th class="p-5 pt-0 text-bold pb-0 bg-orange">Email</th>
                        <td class="p-5 pt-0 pb-0">{{$table->user['email']}}</td>
                        <th class="p-5 pt-0 text-bold pb-0 bg-orange">City</th>
                        <td class="p-5 pt-0 pb-0">{{$table->city}}</td>
                    </tr>
                    <tr>
                        <th class="p-5 pt-0 text-bold pb-0 bg-orange">Basic Salary</th>
                        <td class="p-5 pt-0 pb-0">{{money($table->salary)}}</td>
                        <th class="p-5 pt-0 text-bold pb-0 bg-orange">Country</th>
                        <td class="p-5 pt-0 pb-0">{{$table->country}}</td>
                    </tr>
                </table>
                <hr>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="row">
            <div class="col-md-6">
                <p><button type="button" class="btn btn-primary btn-labeled" data-toggle="modal" data-target="#myModal"><b><i class="icon-file-plus"></i></b> Create New Salary</button></p>
            </div>
            <div class="col-md-6"></div>
        </div>
    </div>

    <h3>Salary List</h3>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered table-condensed table-hover table-striped mb-15">
                <thead>
                <tr>
                    <th class="text-bold">Date</th>
                    <th class="text-bold text-right">Basic</th>
                    <th class="text-bold text-right">Total Pay</th>
                    <th class="text-bold text-right">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($sheet as $row)
                    <tr>
                        <td>{{pub_date($row->created_at)}}</td>
                        <td class="text-right">{{money($row->amount)}}</td>
                        <td class="text-right">{{money($row->amount)}}</td>
                        <td class="text-right white_sp">
                            <a class="btn btn-xs btn-info no-padding" href="{{action('Employee\SalaryController@slip', ['id' => $row->salarysheetID])}}" title="View"><i class="icon-eye"></i></a>
                            <button class="btn btn-xs btn-success no-padding mr-5 ediBtn"  data-toggle="modal"
                                    data-id ="{{$row->salarysheetID}}"
                                    data-name="{{$row->name}}"
                                    data-dates="{{pub_date($row->created_at)}}"
                                    data-target="#ediModal" title="Edit"><i class="icon-pencil5"></i></button>
                            <a class="btn btn-xs btn-danger no-padding" href="{{action('Employee\SalaryController@del', ['id' => $row->salarysheetID])}}"  onclick="return confirm('Are you sure to delete?')" title="Delete"><i class="icon-bin"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


@endsection


@section('script')
    <script type="text/javascript" src="{{asset('public/assets/js/plugins/ui/moment/moment.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/assets/js/plugins/pickers/daterangepicker.js')}}"></script>

    <script type="text/javascript">
        $(function () {
            $('.ediBtn').click(function () {

                var id = $(this).data('id');
                var name = $(this).data('name');
                var dates = $(this).data('dates');


                $('#ediID').val(id);
                $('#ediModal [name=name]').val(name);
                $('#ediModal [name=created_at]').val(dates);


                editChange();
                change_method()
            });
        });
        $(function () {
            var salary = $('#salary').val();

            $('#amount').val(salary);



            $('#salary').on('keypress keyup keydown change', function () {
                var salary = $('#salary').val();

                $('#amount').val(salary);
            });

        });

        function editChange(){
            var salary = $('#salary1').val();

            $('#amount1').val(salary);



            $('#salary1').on('keypress keyup keydown change', function () {
                var salary = $('#salary1').val();

                $('#amount1').val(salary);
            });
        }
        $(function () {
            $('.date_pic').daterangepicker({
                singleDatePicker: true,
                showDropdowns: true,
                locale: {
                    format: 'DD/MM/YYYY'
                }
            });
        });

    </script>

@endsection