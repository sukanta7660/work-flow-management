@extends('layouts.master')
@section('title')
    Dashboard
@endsection
@section('content')
    <div class="row">
        @foreach($company as $row)
        <div class="col-xs-12 text-center mb-20">
            <h1 class="m-0">{{$row->name}}</h1>
            <p class="m-0 text-size-small">{{$row->address}}</p>
            <p class="m-0 text-size-small">
                <span class="white_sp">{!!  ($row->phone != '' ? '<strong>Phone: </strong>'.$company->phone.';':'')!!} {!!($row->mobile != '' ? '<strong>Mobile: </strong>'.$row->mobile:'')!!}</span>
            </p>
            <p class="m-0 text-size-small">
                <span class="white_sp">{!!  ($row->email != '' ? '<strong>Email: </strong>'.$company->email.';':'')!!}</span> <span class="white_sp">{!!($row->website != '' ? '<strong>Website: </strong>'.$row->website:'')!!}</span>
            </p>
        </div>
            @endforeach

    </div>
    <div class="row mt-20">
        <div class="col-xs-6 text-right">
            <div class="btn-group btn-group-xs">
                <button class="btn bg-purple"><i class="icon icon-calendar"></i></button>
                <button class="btn bg-purple" id="date"></button>
            </div>
        </div>
        <div class="col-xs-6">
            <div class="btn-group btn-group-xs" id="clock">
                <button class="btn bg-purple"><i class="icon icon-alarm"></i></button>
                <button type="button" class="unit btn bg-purple" id="hours"></button>
                <button type="button" class="unit btn bg-purple" id="minutes"></button>
                <button type="button" class="unit btn bg-purple" id="seconds"></button>
                <button type="button" class="unit btn bg-purple" id="ampm"></button>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">

            <div class="panel panel-flat border-top-purple">
                <div class="panel-heading">
                    <h6 class="panel-title">Quick Access Bar</h6>
                </div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <a href="{{action('Attendance\AttendanceController@index')}}" class="btn bg-info btn-float btn-float-lg text-capitalize mb-5"><i class="icon-clipboard3"></i> <span>Attendance Check</span></a>
                            <a href="{{action('Employee\PaymentController@index')}}" class="btn bg-success btn-float btn-float-lg text-capitalize mb-5"><i class="icon-paypal"></i> <span>salary payment</span></a>
                            <a href="{{action('Employee\SalaryController@index')}}" class="btn bg-warning btn-float btn-float-lg text-capitalize mb-5"><i class="icon-coin-dollar"></i> <span>salary Sheet</span></a>
                            <a href="{{action('Events\EventsController@index')}}" class="btn bg-purple btn-float btn-float-lg text-capitalize mb-5"><i class="icon-clipboard5"></i> <span>notice generate</span></a>
                            <a href="{{action('Leave\LeaveRequestController@index')}}" class="btn bg-teal btn-float btn-float-lg text-capitalize mb-5"><i class="icon-user-block"></i> <span>leave requests</span></a>
                            <a href="{{action('Message\MessageController@index')}}" class="btn bg-violet btn-float btn-float-lg text-capitalize mb-5"><i class="icon-envelop"></i> <span>Contact Message</span></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-6">

            <div class="panel panel-flat border-top-purple">
                <div class="panel-heading">
                    <h6 class="panel-title">Notice Board</h6>
                </div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-condensed mt-0">
                                <thead>
                                <tr class="bg-violet">
                                    <th class="text-center p-5">Date</th>
                                    <th class="text-center p-5">Time</th>
                                    <th class="text-center p-5">Subject</th>
                                    <th class="text-center p-5">Place</th>
                                    <th class="text-center p-5">Description</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($table as $row)
                                <tr class="bg-info">
                                    <td class="text-center p-5">{{pub_date($row->doe)}}</td>
                                    <td class="text-center p-5">{{pub_time($row->toe)}}</td>
                                    <td class="text-center p-5">{{$row->title}}</td>
                                    <td class="text-center p-5">{{$row->venue}}</td>
                                    <td class="text-center p-5">{{str_limit($row->description,10, '...')}}</td>
                                </tr>
                                 @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div style="margin-top: 30px;" class="col-md-12 mt-4">
                            {{$table->links()}}
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript" src="{{asset('public/assets/js/plugins/ui/moment/moment.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/assets/js/plugins/ui/fullcalendar/fullcalendar.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/assets/js/pages/extra_fullcalendar.js')}}"></script>
    <script type="text/javascript">

        //Clock
        var $dOut = $('#date'),
            $hOut = $('#hours'),
            $mOut = $('#minutes'),
            $sOut = $('#seconds'),
            $ampmOut = $('#ampm');
        var months = [
            'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'
        ];

        var days = [
            'Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'
        ];

        function update(){
            var date = new Date();

            var ampm = date.getHours() < 12
                ? 'AM'
                : 'PM';

            var hours = date.getHours() == 0
                ? 12
                : date.getHours() > 12
                    ? date.getHours() - 12
                    : date.getHours();

            var minutes = date.getMinutes() < 10
                ? '0' + date.getMinutes()
                : date.getMinutes();

            var seconds = date.getSeconds() < 10
                ? '0' + date.getSeconds()
                : date.getSeconds();

            var dayOfWeek = days[date.getDay()];
            var month = months[date.getMonth()];
            var day = date.getDate();
            var year = date.getFullYear();

            var dateString = dayOfWeek + ', ' + month + ' ' + day + ', ' + year;

            $dOut.text(dateString);
            $hOut.text(hours);
            $mOut.text(minutes);
            $sOut.text(seconds);
            $ampmOut.text(ampm);
        }

        update();
        window.setInterval(update, 1000);
        //Clock

        $(function () {
            $("#inputFile").change(function () {
                imgPrev(this , '.preview');
            });
        });


    </script>

@endsection