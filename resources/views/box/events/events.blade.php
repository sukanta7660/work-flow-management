@section('box')
    <!-- Basic modal -->
    <div id="myModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h5 class="modal-title"><i class="icon-file-plus"></i> Create New Notice</h5>
                </div>

                <form action="{{action('Events\EventsController@save')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Notice Title:</label>
                            <div class="col-lg-9">
                                <input class="form-control" name="title" placeholder="Notice Title..." type="text" required>
                            </div>
                        </div><br>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Date:</label>
                            <div class="col-lg-9">
                                <input class="form-control date_pic" name="doe" required>
                            </div>
                        </div><br>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Time:</label>
                            <div class="col-lg-9">
                                <input class="form-control" name="toe" type="time" required>
                            </div>
                        </div><br>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Venue:</label>
                            <div class="col-lg-9">
                                <input class="form-control" name="venue" placeholder="Venue..." type="text" required>
                            </div>
                        </div><br>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Description:</label>
                            <div class="col-lg-9 mb-10">
                                <textarea class="form-control" name="description" placeholder="Put The Brief..." rows="4"></textarea>
                            </div>
                        </div><br>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="icon-cancel-circle2"></i> Close</button>
                        <button type="submit" id="submit-all" class="btn btn-primary"><i class="icon-checkmark4"></i> Save changes</button>
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
                    <h5 class="modal-title"><i class="icon-pencil7"></i> Edit Notice</h5>
                </div>

                <form action="{{action('Events\EventsController@edit')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <input type="hidden" id="ediID" name="id">

                    <div class="modal-body">
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Notice Title:</label>
                            <div class="col-lg-9">
                                <input class="form-control" name="title" placeholder="Notice Title..." type="text" required>
                            </div>
                        </div><br>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Date:</label>
                            <div class="col-lg-9">
                                <input class="form-control date_pic" type="text" name="doe">
                            </div>
                        </div><br>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Time:</label>
                            <div class="col-lg-9">
                                <input class="form-control" name="toe" type="time">
                            </div>
                        </div><br>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Venue:</label>
                            <div class="col-lg-9">
                                <input class="form-control" name="venue" placeholder="Venue..." type="text" required>
                            </div>
                        </div><br>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Description:</label>
                            <div class="col-lg-9 mb-10">
                                <textarea class="form-control" name="description" placeholder="Put The Brief..." rows="4"></textarea>
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