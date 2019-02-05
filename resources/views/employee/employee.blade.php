@extends('layouts.master')
@extends('box.employee.employee')
@section('title')
    Employee
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-flat border-top-success">
                <div class="panel-heading">
                    <h6 class="panel-title">All Employee</h6>
                </div>

                <div class="panel-body">
                    <table class="table table-bordered table-condensed table-hover table-striped datatable">
                        <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Position</th>
                            <th>Name</th>
                            <th>DOB</th>
                            <th>Contact</th>
                            <th>Address</th>
                            <th class="text-right">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($table as $row)
                            <tr>
                                <td>{{$row->employeeID}}</td>
                                <td class="text-capitalize">{{$row->position}}</td>
                                <td class="text-capitalize">{{$row->user['name']}}</td>
                                <td class="text-capitalize">{{pub_date($row->dob)}}</td>
                                <td class="text-capitalize">{{$row->mobile}}</td>
                                <td class="text-capitalize">{{$row->address}}</td>
                                <td class="text-right">
                                    <button type="button" class="btn btn-xs btn-success no-padding mr-5 ediBtn" data-toggle="modal" data-target="#showModal{{$row->employeeID}}"> <i class="icon-eye"></i></button>
                                    <button class="btn btn-xs btn-success no-padding mr-5 ediBtn"
                                            data-position="{{$row->position}}"
                                            data-father="{{$row->father}}"
                                            data-mother="{{$row->mother}}"
                                            data-salary="{{$row->salary}}"
                                            data-dob="{{pub_date($row->dob)}}"
                                            data-id="{{$row->employeeID}}"
                                            data-mobile="{{$row->mobile}}"
                                            data-address="{{$row->address}}"
                                            data-city="{{$row->city}}"
                                            data-country="{{$row->country}}"
                                            data-nid="{{$row->nid}}"
                                            data-postcode="{{$row->postCode}}"
                                            data-toggle="modal" data-target="#ediModal" title="Edit"><i class="icon-pencil5"></i></button>
                                    <a class="btn btn-xs btn-danger no-padding" href="{{action('Employee\EmployeeController@del', ['id' => $row->employeeID])}}"  onclick="return confirm('Are you sure to delete?')" title="Delete"><i class="icon-bin"></i></a>
                                </td>
                            </tr>

                            {{--show modal--}}
                            <div id="showModal{{$row->employeeID}}" class="modal fade">
                            <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header bg-slate-600 pt-10 pb-10">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h5 class="modal-title"><i class=" icon-magazine pr-10"></i>Employee Details</h5>
                            </div>
                            <div class="modal-body pb-10">
                            <div class="row">
                            <div class="col-md-12">
                            <div class="row">
                            <div class="panel-body">
                                <div style="width: 100%; display: table;">
                                    <div style="display: table-row;">
                                        <div style="display: table-cell; font-weight: bold;">Name</div>
                                        <div style="display: table-cell;">{{$row->user['name']}}</div>
                                        <div style="display: table-cell; font-weight: bold;">PostCode</div>
                                        <div style="display: table-cell;">{{$row->postCode}}</div>
                                    </div>
                                    <div style="display: table-row;">
                                        <div style="display: table-cell; font-weight: bold;">Father</div>
                                        <div style="display: table-cell;">{{$row->father}}</div>
                                        <div style="display: table-cell; font-weight: bold;">Mobile</div>
                                        <div style="display: table-cell;">{{$row->mobile}}</div>
                                    </div>
                                    <div style="display: table-row;">
                                        <div style="display: table-cell; font-weight: bold;">Mother</div>
                                        <div style="display: table-cell;">{{$row->mother}}</div>

                                        <div style="display: table-cell; font-weight: bold;">Email</div>
                                        <div style="display: table-cell;">{{$row->user['email']}}</div>
                                    </div>
                                    <div style="display: table-row;">
                                        <div style="display: table-cell; font-weight: bold;">POsition</div>
                                        <div style="display: table-cell;">{{$row->position}}</div>
                                        <div style="display: table-cell; font-weight: bold;">Address</div>
                                        <div style="display: table-cell;">{{$row->address}}</div>
                                    </div>
                                    <div style="display: table-row;">
                                        <div style="display: table-cell; font-weight: bold;">NID</div>
                                        <div style="display: table-cell;">{{$row->nid}}</div>
                                        <div style="display: table-cell; font-weight: bold;">City</div>
                                        <div style="display: table-cell;">{{$row->city}}</div>
                                    </div>
                                    <div style="display: table-row;">
                                        <div style="display: table-cell; font-weight: bold;">Date Of Birth</div>
                                        <div style="display: table-cell;">{{pub_date($row->dob)}}</div>
                                        <div style="display: table-cell; font-weight: bold;">Country</div>
                                        <div style="display: table-cell;">{{$row->country}}</div>
                                    </div>
                                    <div style="display: table-row;">
                                        <div style="display: table-cell; font-weight: bold;">Salary</div>
                                        <div style="display: table-cell;">{{money($row->salary)}}</div>
                                    </div>
                                    <div style="display: table-row;">

                                    </div>
                                </div>
                            </div>
                            <div class="panel-footer pl-20 pr-5 no-border-top">
                            <button type="button" class="btn btn-danger pull-right btn-sm mt-10" data-dismiss="modal"><i class="icon-cancel-circle2"></i> Close</button>
                            </div>
                            </div>
                            </div>
                            </div>
                            </div>
                            </div>
                            </div>
                            </div>
                            {{-----show modal-----}}
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript" src="{{asset('public/assets/js/plugins/ui/moment/moment.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/assets/js/plugins/pickers/daterangepicker.js')}}"></script>

    <script type="text/javascript">
        $(function () {
            $('.date_pic').daterangepicker({
                singleDatePicker: true,
                showDropdowns: true,
                locale: {
                    format: 'DD/MM/YYYY'
                }
            });
        });
        $(function () {
            $('.ediBtn').click(function () {
                var id = $(this).data('id');
                var position = $(this).data('position');
                var father = $(this).data('father');
                var mother = $(this).data('mother');
                var address = $(this).data('address');
                var city = $(this).data('city');
                var country = $(this).data('country');
                var nid = $(this).data('nid');
                var postcode = $(this).data('postcode');
                var mobile = $(this).data('mobile');
                var salary = $(this).data('salary');
                var dob = $(this).data('dob');


                $('#ediID').val(id);
                $('#ediModal [name=position]').val(position);
                $('#ediModal [name=father]').val(father);
                $('#ediModal [name=mother]').val(mother);
                $('#ediModal [name=address]').val(address);
                $('#ediModal [name=city]').val(city);
                $('#ediModal [name=country]').val(country);
                $('#ediModal [name=nid]').val(nid);
                $('#ediModal [name=postCode]').val(postcode);
                $('#ediModal [name=mobile]').val(mobile);
                $('#ediModal [name=salary]').val(salary);
                $('#ediModal [name=dob]').val(dob);

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