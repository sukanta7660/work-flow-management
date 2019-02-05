@extends('layouts.usermaster')
@extends('box.userbox.profile.userprofile')
@section('title')
    {{ isset(Auth::user()->name) ? Auth::user()->name : 'User name' }}
@endsection

@section('content')
    <section class=" profile mb-100 mt-50">
        <div class="container-fluid">
            <div class="row mt-5 mb-20">
                <div class="col-sm-4 col-md-4 col-lg-3">
                    <div class="content-group">
                        <div class="panel-body text-center profile_header">
                            <div class="content-group-sm mb-2 pt-4">
                                <h5 class="text-semibold no-margin-bottom"></h5>
                                <span class=""></span>
                            </div>
                            <a href="#" class="display-inline-block content-group-sm">

                                @if( $table->imageName == '' && $table->gender == 'Male' )
                                    <img src="{{asset('public/profile/profile_placeholder.jpg')}}" class="img-circle img-responsive" alt="" style="width: 120px; height: 120px; border-radius: 50%">
                                 @elseif( $table->imageName == '' && $table->gender == 'Female' )
                                 <img src="{{asset('public/profile/female_placeholder.jpg')}}" class="img-circle img-responsive" alt="" style="width: 120px; height: 120px; border-radius: 50%">
                                 @else
                                    <img src="{{asset('public/uploads/'.$table->imageName)}}" class="img-circle img-responsive" alt="" style="width: 120px; height: 120px; border-radius: 50%">
                                @endif

                            </a>
                            <ul class="list-inline no-margin-bottom social_links">
                                <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                            </ul>
                        </div>

                        <div class="panel panel-body no-border-top no-border-radius-top">
                            <div class="form-group mt-5 mb-10">
                                <div class="form-group mt-5 mb-10">
                                    <button type="button" class="btn btn-sm btn-secondary" value="Edit Profile"
                                            data-toggle="modal" data-target="#ediModal"><i class="fa fa-user-edit mr-2"></i> Edit Profile</button>
                                </div>
                                <label class="text-semibold">Full name:</label>
                                <span class="float-right">{{Auth::user()->name}}</span>
                            </div>
                            <div class="form-group mb-10">
                                <label class="text-semibold">Gender:</label>
                                <span class="float-right">{{ $table->gender }}</span>
                            </div>
							<div class="form-group mb-10">
                                <label class="text-semibold">Date of Birth:</label>
                                <span class="float-right">{{ pub_date($table->dob) }}</span>
                            </div>
							
							<div class="form-group mb-10">
                                <label class="text-semibold">NID:</label>
                                <span class="float-right">{{ $table->nid }}</span>
                            </div>
							
                            <div class="form-group mb-10">
                                <label class="text-semibold">Phone number:</label>
                                <span class="float-right">{{ $table->mobile }}</span>
                            </div>

                            <div class="form-group mb-10">
                                <label class="text-semibold">Personal Email:</label>
                                <span class="float-right"><a href="#">{{ Auth::user()->email }}</a></span>
                            </div>
                            <div class="form-group mb-10">
                                <label class="text-semibold">Basic Salary:</label>
                                <span style="color: #0a001f; font-weight: 700;" class="float-right">{{ money($table->salary) }}</span>
                            </div>
                            <div class="form-group mb-10">
                                <label class="text-semibold">Father Name:</label>
                                <span class="float-right">{{ $table->father }}</span>
                            </div>
                            <div class="form-group mb-10">
                                <label class="text-semibold">Mother Name:</label>
                                <span class="float-right">{{ $table->mother }}</span>
                            </div>
                            <div class="form-group mb-10">
                                <label class="text-semibold">Post Code:</label>
                                <span class="float-right">{{ $table->postCode }}</span>
                            </div>
							<div class="form-group mb-10">
                                <label class="text-semibold">Address:</label>
                                <span class="float-right">{{ $table->address }}</span>
                            </div>
							<div class="form-group mb-10">
                                <label class="text-semibold">City:</label>
                                <span class="float-right">{{ $table->city }}</span>
                            </div>
							<div class="form-group mb-10">
                                <label class="text-semibold">Country:</label>
                                <span class="float-right">{{ $table->country }}</span>
                            </div>
                            <div class="form-group mb-10">
                                <label class="text-semibold">Balance:</label>
                                <span style="color: #0a001f; font-weight: 700;" class="float-right">{{ money($table->account) }}</span>
                            </div>

                        </div>
                    </div>
                    <!-- /user details (with sample pattern) -->
                </div>
                <div class="col-md-8 col-sm-8 col-lg-9">
                    <div class="card bg-dark mb-3 no-border">
                        <h6 class="card-header text-white">Timeline</h6>
                        <div class="card-body bg-white">
                            <nav class="nav-justified">
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav-attendance-tab" data-toggle="tab" href="#nav-attendance" role="tab" aria-controls="nav-home" aria-selected="true">Attendance</a>
                                    <a class="nav-item nav-link " id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Notices</a>
                                    <a class="nav-item nav-link" id="nav-leave-tab" data-toggle="tab" href="#nav-leave" role="tab" aria-controls="nav-leave" aria-selected="false">Leave Requests</a>
                                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">To Admin</a>
                                    <a class="nav-item nav-link" id="nav-admin-tab" data-toggle="tab" href="#nav-admin" role="tab" aria-controls="nav-admin" aria-selected="false">From Admin</a>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-attendance" role="tabpanel" aria-labelledby="nav-attendance-tab">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12">
                                                @if($ckdate == null)
                                                <form action="{{action('User\UserProfileController@attendance_in')}}" method="post" enctype="multipart/form-data">
                                                    <input type="hidden" name="employeeID" value="{{$table->employeeID}}">
                                                    {{csrf_field()}}
                                                    <div class="form-group row">
                                                        <button type="submit" class="btn btn-sm btn-secondary mt-4 form-control col-sm-2" title="Punch In"><i class="fa fa-clipboard mr-2"></i> Punch In</button>
                                                    </div>
                                                </form>
                                                    @endif
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h2 class="mt-3 text-info">Attendance List</h2>
                                                <table class="table table-striped">
                                                    <thead>
                                                    <tr>
                                                        <th class="text-capitalize">date</th>
                                                        <th class="text-capitalize">In Time</th>
                                                        <th class="text-capitalize">Punch Out</th>
                                                        <th class="text-capitalize">Out Time</th>
                                                        <th class="text-capitalize">working hour</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($attendance as $row)
                                                        <tr>
                                                            <th scope="row">{{pub_date($row->created_at)}}</th>
                                                            <td>{{$row->inTime}}</td>
                                                            <td>
                                                                @if($row->outTime == '')
                                                                <a class="btn btn-xs btn-success p-1" href="{{action('User\UserProfileController@attendance_out', ['id' => $row->attendanceID])}}"  onclick="return confirm('Are you sure to Punch Out?')" title="Punch Out">Punch Out</a>
                                                                @else
                                                                <span class="bg-success text-white p-1">Punched Out</span>
                                                                @endif
                                                            </td>
                                                            <td>
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
                                <div class="tab-pane fade" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                    <div class="container">
                                        <div class="row">
                                        @foreach($notice as $row)
                                            <div class="col-md-4 mt-3">
                                                <div class="card text-white bg-secondary mt-3" style="max-width: 20rem;">
                                                    <div class="card-header text-capitalize">
                                                        Posted on: <span class="text-bold ml-1">{{pub_date($row->created_at)}}</span>
                                                    </div>
                                                    <div class="card-body">
                                                        <h4 class="card-title mb-0">{{$row->title}}</h4>
                                                        <p class="mb-2 place"><span class="text_bold mr-2">Place/Venue:</span> {{$row->venue}}</p>
                                                        <p class="card-text">{{$row->description}}</p>
                                                    </div>
                                                    <div class="card-footer notice_footer">
                                                        <a href="#" class="card-link"><span><i class="fas fa-clock mr-2"></i></span> {{pub_time($row->toe)}}</a>
                                                        <a href="#" class="card-link"><span><i class="fas fa-calendar mr-2"></i></span> {{pub_date($row->doe)}}</a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-leave" role="tabpanel" aria-labelledby="nav-leave-tab">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="card bg-light mt-3">
                                                    <div class="card-header text-capitalize text-info">send leave request to administrator</div>
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-md-2"></div>
                                                            <div class="col-md-8">
                                                                <form action="{{action('User\UserProfileController@leave_request')}}" method="post" enctype="multipart/form-data">
                                                                    {{csrf_field()}}
                                                                    <input type="hidden" name="employeeID" value="{{$table->employeeID}}">
                                                                    <p class="mb-2"><strong>To</strong></p>
                                                                    <p class="mb-2">The Administrator,</p>
                                                                    <p class="mb-2"><strong>Leading University, Sylhet</strong></p>
                                                                    <div class="form-group row mt-1">
                                                                        <label for="subject" class="col-sm-2 col-form-label">Subject:</label>
                                                                        <div class="col-sm-10">
                                                                            <input style="font-size: 13px;" type="text" name="subject" id="subject" class="form-control" placeholder="subject" required>
                                                                        </div>
                                                                    </div>
                                                                    <p class="mb-2">Dear Sir,</p>
                                                                    <p class="mb-2">With due respect and humble submission to state that, I am</p>
                                                                    <div class="form-group">
                                                                        <input style="font-size: 13px;" type="text" name="name" class="form-control" value="{{$table->user['name']}}" placeholder="subject" required>
                                                                    </div>
                                                                    <p class="mb-2">I would be like to inform you that ,</p>
                                                                    <div class="form-group">
                                                                        <textarea style="font-size: 13px;" class="form-control" name="description" placeholder="write your description" rows="3" required></textarea>
                                                                    </div>
                                                                    <p class="mb-4">I therefore, pray and hope that, you would be kind enough to grant my leave and oblige thereby.</p>
                                                                    <p class="mb-2"><strong>Your Sincerely</strong></p>
                                                                    <div class="form-group row">
                                                                        <div class="col-sm-5">
                                                                            <input style="font-size: 13px;" type="text" name="sincerely" class="form-control" value="{{$table->user['name']}}" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12 text-right">
                                                                            <div class="form-group">
                                                                                <button type="submit" style="width: 150px" title="Submit Application" class="form-control btn btn-sm btn-primary">Submit</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <div class="col-md-2"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h2 class="mt-3 text-info">All Leave Requests</h2>
                                                <table class="table table-striped">
                                                    <thead>
                                                    <tr>
                                                        <th class="text-capitalize">date</th>
                                                        <th class="text-capitalize">Subject</th>
                                                        <th class="text-capitalize">Status</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($leave_request as $row)
                                                        <tr>
                                                            <th scope="row">{{pub_date($row->created_at)}}</th>
                                                            <td>{{$row->subject}}</td>
                                                            <td>
                                                                @if($row->status == 'Pending')
                                                                    <span style="font-size: 10px; font-weight: 600;" class="text-white bg-primary p-1">{{$row->status}}</span>
                                                                @elseif($row->status == 'Accepted')
                                                                    <span style="font-size: 10px; font-weight: 600;" class="text-white bg-success p-1">{{$row->status}}</span>
                                                                @elseif($row->status == 'Rejected')
                                                                    <span style="font-size: 10px; font-weight: 600;" class="text-white bg-danger p-1">{{$row->status}}</span>
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
                                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="card bg-light mt-3">
                                                    <div class="card-header text-capitalize text-info">to admin</div>
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-md-2"></div>
                                                            <div class="col-md-8">
                                                                <form action="{{action('User\UserProfileController@message')}}" method="post" enctype="multipart/form-data">
                                                                    {{csrf_field()}}
                                                                    <input type="hidden" name="employeeID" value="{{$table->employeeID}}">
                                                                    <input type="hidden" name="name" value="{{$table->user['name']}}">
                                                                    <input type="hidden" name="email" value="{{$table->user['email']}}">
                                                                    <div class="form-group">
                                                                        <input style="font-size: 13px;" type="text" name="subject" class="form-control" placeholder="subject" required>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <textarea style="font-size: 13px;" class="form-control" name="message" placeholder="write your message" rows="3" required></textarea>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <button type="submit" style="width: 150px" title="Send Message" class="form-control btn btn-sm btn-primary">Send Message</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <div class="col-md-2"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h5 class="mt-3 text-info">All Messages</h5>
                                                <table class="table table-striped">
                                                    <thead>
                                                    <tr>
                                                        <th class="text-capitalize">date</th>
                                                        <th class="text-capitalize">Subject</th>
                                                        <th class="text-capitalize">message</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($message as $row)
                                                    <tr>
                                                        <th scope="row">{{pub_date($row->created_at)}}</th>
                                                        <td>{{$row->subject}}</td>
                                                        <td>{{$row->message}}</td>
                                                    </tr>
                                                     @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-admin" role="tabpanel" aria-labelledby="nav-admin-tab">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h5 class="mt-3 text-info"> All Message</h5>
                                                <table class="table table-striped">
                                                    <thead>
                                                    <tr>
                                                        <th class="text-capitalize">date</th>
                                                        <th class="text-capitalize">message</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($adminsms as $row)
                                                    <tr>
                                                        <th scope="row">{{pub_date($row->created_at)}}</th>
                                                        <td>{{$row->message}}</td>
                                                    </tr>
                                                     @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script type="text/javascript" src="{{asset('public/assets/js/plugins/ui/moment/moment.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/assets/js/plugins/pickers/daterangepicker.js')}}"></script>

    <script type="text/javascript">
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
            $("#inputFile").change(function () {
                imgPrev(this , '.preview');
            });
        });
    </script>

@endsection