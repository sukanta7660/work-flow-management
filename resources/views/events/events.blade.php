@extends('layouts.master')
@extends('box.events.events')
@section('title')
    Notices
@endsection
@section('content')
    <div class="row">
        <div class="col-md-6">
            <p><button type="button" class="btn btn-primary btn-labeled" data-toggle="modal" data-target="#myModal"><b><i class="icon-file-plus"></i></b> Create New Notice</button></p>
        </div>
        <div class="col-md-6"></div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-flat border-top-success">
                <div class="panel-heading">
                    <h6 class="panel-title">All Notices</h6>
                </div>

                <div class="panel-body">
                    <table class="table table-bordered table-condensed table-hover table-striped datatable">
                        <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Title</th>
                            <th>Venue</th>
                            <th>Description</th>
                            <th class="text-right">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($table as $row)
                            <tr>
                                <td>{{$row->eventID}}</td>
                                <td class="text-capitalize">{{pub_date($row->doe)}}</td>
                                <td class="text-capitalize">{{pub_time($row->toe)}}</td>
                                <td class="text-capitalize">{{$row->title}}</td>
                                <td class="text-capitalize">{{$row->venue}}</td>
                                <td class="text-capitalize">{{str_limit($row->description,50, '...')}}</td>
                                <td class="text-right">
                                    <button class="btn btn-xs btn-success no-padding mr-5 ediBtn"
                                            data-title="{{$row->title}}"
                                            data-doe="{{$row->doe}}"
                                            data-toe="{{$row->toe}}"
                                            data-id="{{$row->eventID}}"
                                            data-venue="{{$row->venue}}"
                                            data-desc="{{$row->description}}"
                                            data-toggle="modal" data-target="#ediModal" title="Edit"><i class="icon-pencil5"></i></button>
                                    <a class="btn btn-xs btn-danger no-padding" href="{{action('Events\EventsController@del', ['id' => $row->eventID])}}"  onclick="return confirm('Are you sure to delete?')" title="Delete"><i class="icon-bin"></i></a>
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
                var title = $(this).data('title');
                var doe = $(this).data('doe');
                var toe = $(this).data('toe');
                var venue = $(this).data('venue');
                var desc = $(this).data('desc');


                $('#ediID').val(id);
                $('#ediModal [name=title]').val(title);
                $('#ediModal [name=doe]').val(doe);
                $('#ediModal [name=toe]').val(toe);
                $('#ediModal [name=venue]').val(venue);
                $('#ediModal [name=description]').val(desc);

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