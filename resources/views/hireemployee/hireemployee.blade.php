@extends('layouts.master')
@extends('box.hireemployee.hireemployee')
@section('title')
    Job Circular
@endsection
@section('content')
    <div class="row">
        <div class="col-md-6">
            <p><button type="button" class="btn btn-primary btn-labeled" data-toggle="modal" data-target="#myModal"><b><i class="icon-file-plus"></i></b> Create New Circular</button></p>
        </div>
        <div class="col-md-6"></div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-flat border-top-success">
                <div class="panel-heading">
                    <h6 class="panel-title">All Circular</h6>
                </div>

                <div class="panel-body">
                    <table class="table table-bordered table-condensed table-hover table-striped datatable">
                        <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Job Title</th>
                            <th>Vacancy</th>
                            <th>Deadline</th>
                            <th class="text-right">Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($table as $row)
                            <tr>
                                <td>{{$row->circularID}}</td>
                                <td class="text-capitalize">{{$row->jobTitle}}</td>
                                <td class="">{{$row->vacancy}}</td>
                                <td class="">{{pub_date($row->deadline)}}</td>
                                <td class="text-right">
                                    <button class="btn btn-xs btn-success no-padding mr-5 ediBtn"
                                            data-title="{{$row->jobTitle}}"
                                            data-id="{{$row->circularID}}"
                                            data-vacancy="{{$row->vacancy}}"
                                            data-jobres="{{$row->jobResponsibilities}}"
                                            data-deadline="{{pub_date($row->deadline)}}"
                                            data-edureq="{{$row->edu_Requirements}}"
                                            data-addireq="{{$row->addi_Requirements}}"
                                            data-exreq="{{$row->exp_Requirements}}"
                                            data-jobarea="{{$row->jobLocation}}"
                                            data-salary="{{$row->salary}}"
                                            data-otherben="{{$row->other_Benefits}}"
                                            data-status="{{$row->employmentStatus}}"
                                    data-toggle="modal" data-target="#ediModal" title="Edit"><i class="icon-pencil5"></i></button>
                                    <a class="btn btn-xs btn-danger no-padding" href="{{action('Circular\JobCircularController@del',['id'=>$row->circularID])}}"  onclick="return confirm('Are you sure to delete?')" title="Delete"><i class="icon-bin"></i></a>
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
    <script type="text/javascript" src="{{asset('public/assets/js/plugins/ui/moment/moment.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/assets/js/plugins/pickers/daterangepicker.js')}}"></script>
    <script type="text/javascript">

        $(function () {
            $('.ediBtn').click(function () {
                var id = $(this).data('id');
                var title = $(this).data('title');
                var vacancy = $(this).data('vacancy');
                var status = $(this).data('status');
                var jobres = $(this).data('jobres');
                var edureq = $(this).data('edureq');
                var exreq = $(this).data('exreq');
                var addireq = $(this).data('addireq');
                var jobarea = $(this).data('jobarea');
                var salary = $(this).data('salary');
                var otherben = $(this).data('otherben');
                var deadline = $(this).data('deadline');


                $('#ediID').val(id);
                $('#ediModal [name=jobTitle]').val(title);
                $('#ediModal [name=vacancy]').val(vacancy);
                $('#ediModal [name=employmentStatus]').val(status);
                $('#ediModal [name=jobResponsibilities]').val(jobres);
                $('#ediModal [name=edu_Requirements]').val(edureq);
                $('#ediModal [name=exp_Requirements]').val(exreq);
                $('#ediModal [name=addi_Requirements]').val(addireq);
                $('#ediModal [name=jobLocation]').val(jobarea);
                $('#ediModal [name=salary]').val(salary);
                $('#ediModal [name=other_Benefits]').val(otherben);
                $('#ediModal [name=deadline]').val(deadline);

            });
        });

        $(function () {

            $('.datatable').DataTable({
                order: [[ 0, "desc" ]],
                iDisplayLength: 25,
                columnDefs: [
                    { orderable: false, "targets": [4] }//For Column Order
                ]
            });
        });

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