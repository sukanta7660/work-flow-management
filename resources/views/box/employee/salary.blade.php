@section('box')
    <!-- Basic modal -->
    <div id="myModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h5 class="modal-title"><i class="icon-file-plus"></i> Create New Salary</h5>
                </div>

                <form action="{{action('Employee\SalaryController@save')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <input type="hidden" name="employeeID" value="{{$table->employeeID}}">

                    <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-5">
                                            <div class="input-group">
                                                <span class="input-group-addon">Salary Date</span>
                                                <input class="form-control date_pic" name="created_at" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group mb-5">
                                            <div class="input-group">
                                                <span class="input-group-addon">NID</span>
                                                <input class="form-control" name="nid" placeholder="NID.." value="{{$table->nid}}" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-5">
                                            <div class="input-group">
                                                <span class="input-group-addon">Salary Name</span>
                                                <input class="form-control" name="name" placeholder="Ex: January-2018/Week-1/Custom name" type="text" required>
                                            </div>
                                        </div>
                                        <div class="form-group mb-5">
                                            <div class="input-group">
                                                <span class="input-group-addon">Basic Salary</span>
                                                <input class="form-control" id="salary" name="salary" placeholder="Basic Salary.." type="number" step="any" min="0" value="{{$table->salary}}" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        <hr>
                        <p class="text-muted text-size-small mt-15 mb-0">Salary Payment</p>

                        <div class="form-group mb-5">
                            <div class="input-group">
                                <span class="input-group-addon">Salary Payment</span>
                                <input class="form-control" id="amount" name="amount" placeholder="Salary Payment" type="number" step="any" value="0" min="0" readonly>
                            </div>
                        </div><br>
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
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h5 class="modal-title"><i class="icon-pencil7"></i> Edit Salary Slip</h5>
                </div>

                <form action="{{action('Employee\SalaryController@edit')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <input type="hidden" id="ediID" name="id">
                    <input type="hidden" name="employeeID" value="{{$table->employeeID}}">
                    <input type="hidden" name="old_basicPay" value="{{$table->salary}}">

                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-5">
                                    <div class="input-group">
                                        <span class="input-group-addon">Salary Date</span>
                                        <input class="form-control date_pic" name="created_at" type="text">
                                    </div>
                                </div>
                                <div class="form-group mb-5">
                                    <div class="input-group">
                                        <span class="input-group-addon">NID</span>
                                        <input class="form-control" name="nid" placeholder="NID.." value="{{$table->nid}}" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-5">
                                    <div class="input-group">
                                        <span class="input-group-addon">Salary Name</span>
                                        <input class="form-control" name="name" placeholder="Ex: January-2018/Custom" type="text" required>
                                    </div>
                                </div>
                                <div class="form-group mb-5">
                                    <div class="input-group">
                                        <span class="input-group-addon">Basic Salary</span>
                                        <input class="form-control" id="salary1" name="salary" placeholder="Basic Salary.." type="number" step="any" min="0" value="{{$table->salary}}" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <p class="text-muted text-size-small mt-15 mb-0">Salary Payment</p>

                        <div class="form-group mb-5">
                            <div class="input-group">
                                <span class="input-group-addon">Salary Payment</span>
                                <input class="form-control" id="amount1" name="amount" placeholder="Salary Payment" type="number" step="any" value="0" min="0" readonly>
                            </div>
                        </div><br>
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

