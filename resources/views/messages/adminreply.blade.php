@extends('layouts.master')
@section('title')
    Admin Reply
@endsection
@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-flat border-top-primary">
                <div class="panel-heading pb-0">
                    <h6 class="panel-title">Send Message</h6>
                </div>
                <div class="panel-body">
                    <form action="{{action('Message\AdminReplyController@save')}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                            <div class="form-group">
                                <label class="col-lg-3 control-label">To :</label>
                                <div class="col-lg-9">
                                    <select class="form-control select2" name="employeeID" required>
                                        <option value="">Select an Employee</option>
                                        @foreach($employee as $row)
                                            <option value="{{$row->employeeID}}">{{$row->user['name']}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div><br><br/>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Message :</label>
                            <div class="col-lg-9">
                                <textarea class="form-control" rows="2" cols="4" name="message"  placeholder="Your Message" required></textarea>
                            </div>
                        </div><br><br/>
                        <div class="form-group margin_top">
                            <div class="col-lg-9"></div>
                            <div class="col-lg-3 text-right">
                                <button type="submit" id="submit-all" class="btn btn-primary btn-sm">Send &nbsp;<i class="icon-arrow-right14"></i></button>
                            </div>
                        </div><br>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6"></div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-flat border-top-success">
                <div class="panel-heading">
                    <h6 class="panel-title">All Reply</h6>
                </div>

                <div class="panel-body">
                    <table class="table table-bordered table-condensed table-hover table-striped datatable">
                        <thead>
                        <tr>
                            <th>Date</th>
                            <th>To</th>
                            <th>Message</th>
                            <th class="text-right">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($table as $row)
                            <tr>
                                <td class="text-capitalize">{{pub_date($row->created_at)}}</td>
                                <td class="text-capitalize">{{$row->name}}</td>
                                <td class="text-">{{$row->message}}</td>
                                <td class="text-right">
                                    <a href="#" class="btn btn-float-lg btn-sm p-0" data-toggle="modal" data-target="#showModal"><i class="icon-eye8 pr-5"></i> View</a>
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
            $('.select2').select2();
        });
        $(function () {

            $('.datatable').DataTable({
                order: [[ 0, "DESC" ]],
                iDisplayLength: 25,
                columnDefs: [
                    { orderable: false, "targets": [4] }//For Column Order
                ]
            });
        });



    </script>

@endsection