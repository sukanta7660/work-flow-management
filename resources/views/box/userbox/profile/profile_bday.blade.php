@section('box')
    <!--birthdate-->
    <div class="modal modal_zindex fade" id="ediModal1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle"><i class="fa fa-edit"></i> Update Your Birthday</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{action('User\UserProfileController@update_birthday')}}" method="post" enctype="multipart/form-data">

                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>

                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="input-group input-group-sm mb-2">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Date Of Birth</span>
                                    </div>
                                    <input type="date" name="dob" class="form-control" required>
                                </div>
                                <div class="input-group input-group-sm mb-2">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Gender</span>
                                    </div>
                                    <select class="form-control " name="gender" required>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-sm btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endSection