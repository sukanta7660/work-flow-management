@extends('layouts.usermaster')
@section('title')
    {{$s_circular->jobTitle}} : Circular
@endsection

@section('content')
    <section class="single_circular mt-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-9">
                    <div class="card mb-3">
                        <h3 class="card-header">{{$s_circular->jobTitle}}</h3>
                        <div class="card-body">
                            <h6 class="card-title"><span class="mr-3">Job Status &nbsp;:</span>{{$s_circular->employmentStatus}}</h6>
                            <h6 class="card-subtitle text-muted"><span class="mr-3">Vacancy &nbsp;:</span>{{$s_circular->vacancy}}</h6>
                        </div>
                        <img style="height: 400px; width: 100%; display: block;" src="{{asset('public/userassets/images/job_hire.jpg')}}" alt="Card image">
                        <div class="card-body">
                            <div class="mb-3">
                                <span style="font-weight: 600; font-size: 16px;">Job Responsibilities &nbsp;:</span>
                                <p class="card-text pl-5 mt-2 mb-2">{{$s_circular->jobResponsibilities}}</p>
                            </div>
                            <div class="mb-3">
                                <span style="font-weight: 600; font-size: 16px;">Educational Requirements &nbsp;:</span>
                                <p class="card-text pl-5 mt-2 mb-2">{{$s_circular->edu_Requirements}}</p>
                            </div>
                            <div class="mb-3">
                                <span style="font-weight: 600; font-size: 16px;">Experience Requirements &nbsp;:</span>
                                <p class="card-text pl-5 mt-2 mb-2">{{$s_circular->exp_Requirements}}</p>
                            </div>
                            <div class="mb-3">
                                <span style="font-weight: 600; font-size: 16px;">Additional Requirements &nbsp;:</span>
                                <p class="card-text pl-5 mt-2 mb-2">{{$s_circular->addi_Requirements}}</p>
                            </div>
                            <div class="mb-3">
                                <span style="font-weight: 600; font-size: 16px;">Job Location &nbsp;:</span>
                                <p class="card-text pl-5 mt-2 mb-2">{{$s_circular->jobLocation}}</p>
                            </div>
                            <div class="mb-3">
                                <span style="font-weight: 600; font-size: 16px;">Salary &nbsp;:</span>
                                <p class="card-text pl-5 mt-2 mb-2">{{money($s_circular->salary)}}</p>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-md-6">
                                    <a class="btn btn-danger btn-xs" href="{{action('User\UserHomeController@index')}}"><i class="fa fa-arrow-alt-circle-left position-left"></i> Back</a>
                                </div>
                                <div class="col-md-6 text-right">
                                    <a class="btn btn-info btn-xs" href="#"><span>Deadline &nbsp;:</span> {{pub_date($s_circular->deadline)}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="section_title bg-info">
                        <h3>Hire Employee</h3>
                    </div>
                    <div class="notices">
                        @foreach($table as $row)
                            <div class="single_notice">
                                <a href="{{action('User\SingleCircularController@index',['id'=>$row->circularID])}}">
                                    <div class="notice_title">
                                        {{$row->jobTitle}}
                                    </div>
                                    <div class="notice_venue pb-2">
                                        <i class="fas fa-user-tie"></i>
                                        {{$row->employmentStatus}}
                                    </div>
                                    <div class="notice_venue pb-2">
                                        <i class="fas fa-map-marker-alt"></i>
                                        {{$row->jobLocation}}
                                    </div>
                                    <div class="notice_date">
                                        <i class="far fa-calendar-alt"></i><span class="mr-3">Deadline &nbsp;:</span>
                                        {{pub_date($row->deadline)}}
                                    </div>
                                </a>
                            </div>
                        @endforeach
                        <div class="all_notice bg-info"><a href="{{action('User\UserHomeController@index')}}" class="transition text-white">
                                all circular
                            </a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection