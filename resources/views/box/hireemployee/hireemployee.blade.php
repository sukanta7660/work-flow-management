@section('box')
    <!-- Basic modal -->
    <div id="myModal" class="modal fade">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h5 class="modal-title"><i class="icon-file-plus"></i> Create New Circular</h5>
                </div>

                <form action="{{action('Circular\JobCircularController@save')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-5">
                                    <div class="input-group">
                                        <span class="input-group-addon">Job Title</span>
                                        <input class="form-control" name="jobTitle" placeholder="Job Title" type="text" required>
                                    </div>
                                </div>
                                <div class="form-group mb-5">
                                    <div class="input-group">
                                        <span class="input-group-addon">Vacancy</span>
                                        <input class="form-control" name="vacancy" min="0" value="0" type="number">
                                    </div>
                                </div>
                                <div class="form-group mb-5">
                                    <div class="input-group">
                                        <span class="input-group-addon">Employment Status</span>
                                        <input class="form-control" name="employmentStatus" placeholder="Ex:&nbsp; Full time/ Part Time" type="text">
                                    </div>
                                </div>
                                <div class="form-group mb-5">
                                    <div class="input-group">
                                        <span class="input-group-addon">Job Responsibilities</span>
                                        <textarea class="form-control" name="jobResponsibilities" rows="2" placeholder="Job Responsibilities" ></textarea>
                                    </div>
                                </div>
                                <div class="form-group mb-5">
                                    <div class="input-group">
                                        <span class="input-group-addon">Educational Requirements</span>
                                        <textarea class="form-control" name="edu_Requirements" rows="2" placeholder="Educational Requirements"></textarea>
                                    </div>
                                </div>
                                <div class="form-group mb-5">
                                    <div class="input-group">
                                        <span class="input-group-addon">Experience Requirements</span>
                                        <textarea class="form-control" name="exp_Requirements" rows="2" placeholder="Experience Requirements"></textarea>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-6">
                                <div class="form-group mb-5">
                                    <div class="input-group">
                                        <span class="input-group-addon">Additional Requirements</span>
                                        <textarea class="form-control" name="addi_Requirements" rows="2" placeholder="Experience Requirements"></textarea>
                                    </div>
                                </div>
                                <div class="form-group mb-5">
                                    <div class="input-group">
                                        <span class="input-group-addon">Job Location</span>
                                        <input class="form-control" name="jobLocation" placeholder="Job Location" type="text">
                                    </div>
                                </div>
                                <div class="form-group mb-5">
                                    <div class="input-group">
                                        <span class="input-group-addon">Salary</span>
                                        <input class="form-control" name="salary" min="0" value="0" type="number">
                                    </div>
                                </div>
                                <div class="form-group mb-5">
                                    <div class="input-group">
                                        <span class="input-group-addon">Deadline</span>
                                        <input class="form-control date_pic" name="deadline" type="text" required>
                                    </div>
                                </div>
                                <div class="form-group mb-5">
                                    <div class="input-group">
                                        <span class="input-group-addon">Other Benefits</span>
                                        <textarea class="form-control" name="other_Benefits" rows="2" placeholder="Other Benefits"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="icon-cancel-circle2"></i> Close</button>
                        <button type="submit" id="submit-all" class="btn btn-primary"><i class="icon-checkmark4"></i> Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /basic modal -->

    <!-- Basic Edi modal -->
    <div id="ediModal" class="modal fade">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h5 class="modal-title"><i class="icon-pencil7"></i> Edit Circular</h5>
                </div>

                <form action="{{action('Circular\JobCircularController@edit')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <input type="hidden" id="ediID" name="id">

                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-5">
                                    <div class="input-group">
                                        <span class="input-group-addon">Job Title</span>
                                        <input class="form-control" name="jobTitle" placeholder="Job Title" type="text" required>
                                    </div>
                                </div>
                                <div class="form-group mb-5">
                                    <div class="input-group">
                                        <span class="input-group-addon">Vacancy</span>
                                        <input class="form-control" name="vacancy" min="0" value="0" type="number">
                                    </div>
                                </div>
                                <div class="form-group mb-5">
                                    <div class="input-group">
                                        <span class="input-group-addon">Employment Status</span>
                                        <input class="form-control" name="employmentStatus" placeholder="Ex:&nbsp; Full time/ Part Time" type="text">
                                    </div>
                                </div>
                                <div class="form-group mb-5">
                                    <div class="input-group">
                                        <span class="input-group-addon">Job Responsibilities</span>
                                        <textarea class="form-control" name="jobResponsibilities" rows="2" placeholder="Job Responsibilities" ></textarea>
                                    </div>
                                </div>
                                <div class="form-group mb-5">
                                    <div class="input-group">
                                        <span class="input-group-addon">Educational Requirements</span>
                                        <textarea class="form-control" name="edu_Requirements" rows="2" placeholder="Educational Requirements"></textarea>
                                    </div>
                                </div>
                                <div class="form-group mb-5">
                                    <div class="input-group">
                                        <span class="input-group-addon">Experience Requirements</span>
                                        <textarea class="form-control" name="exp_Requirements" rows="2" placeholder="Experience Requirements"></textarea>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-6">
                                <div class="form-group mb-5">
                                    <div class="input-group">
                                        <span class="input-group-addon">Additional Requirements</span>
                                        <textarea class="form-control" name="addi_Requirements" rows="2" placeholder="Experience Requirements"></textarea>
                                    </div>
                                </div>
                                <div class="form-group mb-5">
                                    <div class="input-group">
                                        <span class="input-group-addon">Job Location</span>
                                        <input class="form-control" name="jobLocation" placeholder="Job Location" type="text">
                                    </div>
                                </div>
                                <div class="form-group mb-5">
                                    <div class="input-group">
                                        <span class="input-group-addon">Salary</span>
                                        <input class="form-control" name="salary" min="0" value="0" type="number">
                                    </div>
                                </div>
                                <div class="form-group mb-5">
                                    <div class="input-group">
                                        <span class="input-group-addon">Deadline</span>
                                        <input class="form-control date_pic" name="deadline" type="text" required>
                                    </div>
                                </div>
                                <div class="form-group mb-5">
                                    <div class="input-group">
                                        <span class="input-group-addon">Other Benefits</span>
                                        <textarea class="form-control" name="other_Benefits" rows="2" placeholder="Other Benefits"></textarea>
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

