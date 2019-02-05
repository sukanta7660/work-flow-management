@extends('layouts.master')
@extends('box.company.company')
@section('title')
    Company
@endsection
@section('content')
    <div class="row">
        <div class="col-md-6">
            <p><button type="button" class="btn btn-primary btn-labeled" data-toggle="modal" data-target="#myModal"><b><i class="icon-file-plus"></i></b> Add New Company</button></p>
        </div>
        <div class="col-md-6"></div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-flat border-top-success">
                <div class="panel-heading">
                    <h6 class="panel-title">All Company</h6>
                </div>

                <div class="panel-body">
                    <table class="table table-bordered table-condensed table-hover table-striped datatable">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Website</th>
                            <th>Mobile</th>
                            <th>Address</th>
                            <th class="text-right">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($table as $row)
                            <tr>
                                <td class="text-capitalize">{{$row->name}}</td>
                                <td class="text-capitalize">{{$row->email}}</td>
                                <td class="text-capitalize">{{$row->website}}</td>
                                <td class="text-capitalize">{{$row->mobile}}</td>
                                <td class="text-capitalize">{{$row->address}}</td>
                                <td class="text-right">
                                    <button class="btn btn-xs btn-success no-padding mr-5 ediBtn"
                                            data-name="{{$row->name}}"
                                            data-id="{{$row->companyID}}"
                                            data-website="{{$row->website}}"
                                            data-phone="{{$row->phone}}"
                                            data-email="{{$row->email}}"
                                            data-mobile="{{$row->mobile}}"
                                            data-address="{{$row->address}}"
                                            data-owner="{{$row->owner}}"
                                            data-toggle="modal" data-target="#ediModal" title="Edit"><i class="icon-pencil5"></i></button>
                                    <a class="btn btn-xs btn-danger no-padding" href="{{action('Company\CompanyController@del',['id'=>$row->companyID])}}"  onclick="return confirm('Are you sure to delete?')" title="Delete"><i class="icon-bin"></i></a>
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

            $('.datatable').DataTable({
                order: [[ 0, "asc" ]],
                iDisplayLength: 25,
                columnDefs: [
                    { orderable: false, "targets": [5] }//For Column Order
                ]
            });
        });

        $(function () {
            $('.ediBtn').click(function () {
                var id = $(this).data('id');
                var name = $(this).data('name');
                var address = $(this).data('address');
                var email = $(this).data('email');
                var website = $(this).data('website');
                var phone = $(this).data('phone');
                var mobile = $(this).data('mobile');
                var owner = $(this).data('owner');


                $('#ediID').val(id);
                $('#ediModal [name=name]').val(name);
                $('#ediModal [name=email]').val(email);
                $('#ediModal [name=address]').val(address);
                $('#ediModal [name=website]').val(website);
                $('#ediModal [name=phone]').val(phone);
                $('#ediModal [name=mobile]').val(mobile);
                $('#ediModal [name=owner]').val(owner);

            });
        });



    </script>

@endsection