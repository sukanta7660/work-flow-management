@extends('layouts.usermaster')
@extends('box.userbox.profile.profile_bday')
@section('title')
    Home
@endsection
@section('content')
    <!-- Slider Start-->
    <section id="home" class="slider_area">
        <div class="slider owl-carousel">
            <div style="background-image: url({{asset('public/userassets/images/bg_image.jpg')}});" class="single_slide">
                <div class="slide_content">
                    <h1 class="text-uppercase text-center">
                        <strong>Welcome to Our site </br> red green blue</strong>
                    </h1>
                    <div class="silider_description">
                        <p>Unifying disconnected systems</p>
                    </div>
                </div>
            </div>
            <div style="background-image: url({{asset('public/userassets/images/bg_image1.jpg')}});" class="single_slide">
                <div class="slide_content">
                    <h1 class="text-uppercase text-center">
                        <strong>We create our best design </br> based on RGB</strong>
                    </h1>
                    <div class="silider_description">
                        <p>Unifying disconnected systems</p>
                    </div>
                </div>
            </div>
            <div class="single_slide" style="background-image: url({{asset('public/userassets/images/bg_image2.jpg')}});">
                <div class="slide_content">
                    <h1 class="text-uppercase text-center">
                        <strong>We create our best design </br> based on RGB</strong>
                    </h1>
                    <div class="silider_description">
                        <p>Unifying disconnected systems</p>
                    </div>
                </div>
            </div>
            <div style="background-image: url({{asset('public/userassets/images/bg_image3.jpg')}});" class="single_slide">
                <div class="slide_content">
                    <h1 class="text-uppercase text-center">
                        <strong>We create our best design </br> based on RGB</strong>
                    </h1>
                    <div class="silider_description">
                        <p>Unifying disconnected systems</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Slider End-->

{{--Welcome - Notice Section--}}
    <section class="message_section mt-5 mb-4">
        <div class="container">
            <div class="row">
                <div class="col-xl-9">
                    <div class="card welcome_msg">
                        <div class="card-header bg-info p-0"><h4 style="color:#fff; font-weight: 700;"  class="text-capitalize pt-3 text-center">welcome message</h4></div>
                        <div class="card-body msg_content">
                            <p class="card-text text-left pr-6 pl-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum fermentum nec ex id egestas. Ut ipsum diam, sollicitudin ac leo ac, mattis laoreet neque. Vestibulum arcu leo, gravida ut elit eget, convallis aliquet justo. Morbi quis ornare neque. Sed vel nisi dapibus, ullamcorper lorem eu, viverra orci. Donec interdum at est et vehicula. Integer pharetra dui felis, ut interdum tellus euismod sed. Integer et dolor a ex malesuada accumsan. Donec vitae lectus sed est ullamcorper ultrices id ut orci. Mauris porta lorem ac nunc convallis aliquet. Integer ullamcorper sit amet risus a blandit.Vestibulum arcu leo, gravida ut elit eget, convallis aliquet justo. Morbi quis ornare neque.Vestibulum arcu leo, gravida ut elit eget, convallis aliquet justo. Morbi quis ornare neque.Vestibulum arcu leo, gravida ut elit eget, convallis aliquet justo. Morbi quis ornare neque.</p>
                            {{--<a href="" class="bottom_btn transition text-dark">read more</a>--}}
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="section_title bg-info">
                        <h3>Notice</h3>
                    </div>
                    <div class="notices">
                        @foreach($events as $row)
                            <div class="single_notice">
                                <a href="" type="button" data-toggle="modal" data-target="#showmodal{{$row->eventID}}">
                                    <div class="notice_title">
                                            {{$row->title}}
                                    </div>
                                    <div class="notice_venue pb-2">
                                        <i class="fas fa-map-marker-alt"></i>
                                        {{$row->venue}}
                                    </div>
                                    <div class="notice_date">
                                        <i class="far fa-calendar-alt"></i>
                                        {{pub_date($row->doe)}}
                                        &nbsp;
                                        <i class="fa fa-clock"></i>
                                        {{pub_time($row->toe)}}
                                    </div>
                                </a>
                            </div>
                            <!--birthdate-->
                            <div class="modal modal_zindex fade" id="showmodal{{$row->eventID}}">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h6 class="modal-title" id="exampleModalLongTitle">Notice Details</h6>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>

                                            <div class="modal-body">
                                                <div class="container">
                                                    <div class="row">
                                                      <p style="margin-right: 4px;" class="mb-2"><span class="text-secondary text-bold">Title:</span> {{$row->title}}</p><br/>
                                                      <p class="mb-2"><span class="text-primary text-bold">Venue:</span> {{$row->venue}}</p>
                                                      <p class="mb-2"><span class="text-danger text-bold">Description:</span> <br/>{{$row->description}}</p>
                                                      <p style="margin-right: 28px;" class="mb-2"><span class="text-grey">Date:</span> {{pub_date($row->doe)}}</p>
                                                      <p><span class="text-warning text-bold">Time:</span> {{pub_time($row->toe)}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="all_notice bg-info"><a href="" class="transition text-white">
                                see all
                            </a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
{{--Welcome - Notic Section--}}

{{--Message Section--}}
    <section class="news_section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="news_title">
                        <h2 class="text-capitalize">lorem ipsum</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-6">
                    <div class="card h-100 news-item">
                        <a href="#"><img class="card-img-top official_img" src="{{asset('public/userassets/images/2.jpg')}}" alt=""></a>
                        <div class="card-body">
                            <p class="card-title">
                                <a class="text-uppercase" href="#">CEO'S Message</a>
                            </p>
                            <h2 class="card-text">
                                <a href="#">Counting the Cost of Delay & Disruption</a>
                            </h2>
                            <p class="post-date">
                                <a href="#">November 30, 2017</a>
                            </p>
                            <p class="message">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum fermentum nec ex id egestas. Ut ipsum diam, sollicitudin ac leo ac, mattis laoreet neque. Vestibulum arcu leo, gravida ut elit eget, convallis aliquet justo. Morbi quis ornare neque. Sed vel nisi dapibus, ullamcorper lorem eu, viverra orci. Donec interdum at est et vehicula.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="card h-100 news-item">
                        <a href="#"><img class="card-img-top" src="{{asset('public/userassets/images/3.jpg')}}" alt=""></a>
                        <div class="card-body">
                            <p class="card-title">
                                <a class="text-uppercase" href="#">CTO'S Message</a>
                            </p>
                            <h2 class="card-text">
                                <a href="#">Counting the Cost of Delay & Disruption</a>
                            </h2>
                            <p class="post-date">
                                <a href="#">November 30, 2017</a>
                            </p>
                            <p class="message">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum fermentum nec ex id egestas. Ut ipsum diam, sollicitudin ac leo ac, mattis laoreet neque. Vestibulum arcu leo, gravida ut elit eget, convallis aliquet justo. Morbi quis ornare neque. Sed vel nisi dapibus, ullamcorper lorem eu, viverra orci. Donec interdum at est et vehicula.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
{{--Message Section--}}

{{--Circular Section--}}
    <section class="circular_section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="news_title">
                        <h3 class="text-capitalize">Employee Hire</h3>
                        <p>We hire employee on the basis of their talent & experiences.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($table as $row)
                        <div class="col-md-4 mb-3">
                            <div class="card h-100 news-item">
                                <div class="card-body circular_single">
                                    <h2 class="card-text">
                                        <a href="{{action('User\SingleCircularController@index',['id'=>$row->circularID])}}">{{$row->jobTitle}}</a>
                                    </h2>
                                    <p class="post-date">
                                        <a href="#">{{$row->created_at->format('F j, Y')}}</a>
                                    </p>
                                    <p class="mt-3"><i class="fas fa-user-tie mr-2"></i>{{$row->employmentStatus}}</p>
                                    <p class="mt-3"><i class="fas fa-map-marker-alt mr-2"></i>{{$row->jobLocation}}</p>
                                    <p class="mt-3"><span class="text-danger mr-3">Deadline &nbsp;:</span>{{pub_date($row->deadline)}}</p>
                                </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    {{$table->links()}}
                </div>
            </div>
        </div>
    </section>
{{--Circular Section--}}

{{--Counter Up Section--}}
    <section class="counter_area mb-10">
        <div class="overlay1"></div>
        <div class="container">
            <div class="row text-center">
                <div class="col-xl-3">
                    <div class="single_counter">
                        <i class="bi bi-alarm-clock"></i>
                        <h1><span class="counter">2,523</span></h1>
                        <h5>Working Hours</h5>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="single_counter">
                        <i class="bi bi-graduation-cap"></i>
                        <h1><span class="counter">7,523</span></h1>
                        <h5>Completed Projects</h5>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="single_counter">
                        <i class="bi bi-emo-smile"></i>
                        <h1><span class="counter">2,523</span></h1>
                        <h5>No. of Clients</h5>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="single_counter">
                        <i class="bi bi-group"></i>
                        <h1><span class="counter">23</span></h1>
                        <h5>Team Member</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
{{--Counter Up Section--}}

    <!-- Start Blog  -->
    <section id="blog" class="blog_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title">
                        <h2 class="text-secondary">Our Team</h2>
                        <div class="section_border">
                            <span class="f_class"></span>
                            <span class="s_class"></span>
                            <span class="f_class"></span>
                        </div>
                        <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime</p>
                    </div>
                </div>
            </div>
            <div class="blogs mt-5">
                <div class="row">
                    <div class="col-xl-4">
                        <div class="single_blog">
                            <div class="blog_img mb-3">
                                <img src="{{asset('public/userassets/images/blog-1.jpg')}}" alt="" />
                            </div>
                            <div class="blog_content">
                                <strong>BUSINESS</strong>
                                <div class="blog_content_top">
                                    <h4>There are many variations</h4>
                                    <p>Maecenas class semper class semper sollicitudin lectus lorem iaculis imperdiet aliquam.</p>
                                </div>
                                <div class="blog_content_bottom">
                                    <p>By<span> John Doe</span></p>
                                    <p>8 November</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="single_blog">
                            <div class="blog_img mb-3">
                                <img src="{{asset('public/userassets/images/blog-2.jpg')}}" alt="" />
                            </div>
                            <div class="blog_content">
                                <strong>BUSINESS</strong>
                                <div class="blog_content_top">
                                    <h4>There are many variations</h4>
                                    <p>Maecenas class semper class semper sollicitudin lectus lorem iaculis imperdiet aliquam.</p>
                                </div>
                                <div class="blog_content_bottom">
                                    <p>By<span> John Doe</span></p>
                                    <p>8 November</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="single_blog">
                            <div class="blog_img mb-3">
                                <img src="{{asset('public/userassets/images/blog-3.jpg')}}" alt="" />
                            </div>
                            <div class="blog_content">
                                <strong>BUSINESS</strong>
                                <div class="blog_content_top">
                                    <h4>There are many variations</h4>
                                    <p>Maecenas class semper class semper sollicitudin lectus lorem iaculis imperdiet aliquam.</p>
                                </div>
                                <div class="blog_content_bottom">
                                    <p>By<span> John Doe</span></p>
                                    <p>8 November</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Blog  -->

{{--Start Clients Says--}}
    <section id="client" class="client_area pb-5">
        <div class="overlay1"> </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title">
                        <h2>What's Clients Says?</h2>
                        <div class="section_border">
                            <span class="f_class"></span>
                            <span class="s_class"></span>
                            <span class="f_class"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" owl-carousel">
                <div class="single_client item">
                    <p>" we are Dragon, a design and branding partners worldwide been working in his.The standard chunk of Lorem Ipsum used since the is reproduced below for those interested."</p>
                    <h5>- Jeffery Newman, Dragon</h5>
                    <img src="{{asset('public/userassets/images/testi-1.jpg')}}" alt="" />
                </div>

                <div class="single_client item">
                    <p>" we are Dragon, a design and branding partners worldwide been working in his.The standard chunk of Lorem Ipsum used since the is reproduced below for those interested."</p>
                    <h5>- Jeffery Newman, Dragon</h5>
                    <img src="{{asset('public/userassets/images/testi-2.jpg')}}" alt="" />
                </div>

                <div class="single_client item">
                    <p>" we are Dragon, a design and branding partners worldwide been working in his.The standard chunk of Lorem Ipsum used since the is reproduced below for those interested."</p>
                    <h5>- Jeffery Newman, Dragon</h5>
                    <img src="{{asset('public/userassets/images/testi-1.jpg')}}" alt="" />
                </div>
            </div>
        </div>
    </section>
{{--End Clients Says--}}
@endsection