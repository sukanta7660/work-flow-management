@section('box')
    <!-- Basic Edi modal -->
    <div id="ediModal" class="modal fade">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h5 class="modal-title"><i class="icon-pencil7"></i> Edit Employee</h5>
                </div>

                <form action="{{action('Employee\EmployeeController@edit')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <input type="hidden" id="ediID" name="id">

                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-5">
                                    <div class="input-group">
                                        <span class="input-group-addon">Position</span>
                                        <input class="form-control" name="position" placeholder="Enter position.." type="text">
                                    </div>
                                </div>

                                <div class="form-group mb-5">
                                    <div class="input-group">
                                        <span class="input-group-addon">Salary</span>
                                        <input class="form-control" name="salary" placeholder="Salary" type="number" min="0" step="any" value="0">
                                    </div>
                                </div>

                                <div class="form-group mb-5 date_picker">
                                    <div class="input-group">
                                        <span class="input-group-addon">Date Of Birth</span>
                                        <input class="form-control date_pic" name="dob" placeholder="Date" type="text">
                                    </div>
                                </div>
                                <div class="form-group mb-5">
                                    <div class="input-group">
                                        <span class="input-group-addon">NID</span>
                                        <input class="form-control" name="nid" placeholder="NID.." type="text">
                                    </div>
                                </div>
                                <div class="form-group mb-5">
                                    <div class="input-group">
                                        <span class="input-group-addon">Father</span>
                                        <input class="form-control" name="father" placeholder="Father Name.." type="text">
                                    </div>
                                </div>

                                <div class="form-group mb-5">
                                    <div class="input-group">
                                        <span class="input-group-addon">Mother</span>
                                        <input class="form-control" name="mother" placeholder="MOther Name.." type="text">
                                    </div>
                                </div>

                                <div class="form-group mb-5">
                                    <div class="input-group">
                                        <span class="input-group-addon">Mobile</span>
                                        <input class="form-control" name="mobile" placeholder="Mobile No.." type="text">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon">PostCode</span>
                                        <input class="form-control" name="postCode" placeholder="Post Code.." type="text">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon">Address</span>
                                        <textarea name="address" class="form-control" rows="3" placeholder="Address.." type="text"></textarea>
                                    </div>
                                </div>
                                <div class="form-group mb-5">
                                    <div class="input-group">
                                        <span class="input-group-addon">City Name</span>
                                        <input class="form-control"  name="city" placeholder="City Name" autocomplete="off" type="text">
                                    </div>
                                </div>
                                <div class="form-group mb-5">
                                    <div class="input-group">
                                        <span class="input-group-addon">Country</span>
                                        <input class="form-control" name="country" placeholder="Country" autocomplete="off" type="text">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="icon-cancel-circle2"></i> Close</button>
                        <button type="submit" class="btn btn-primary"><i class="icon-checkmark4"></i> Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /basic Edi modal -->
@endsection