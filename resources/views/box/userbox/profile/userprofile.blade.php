@section('box')
    <!-- Modal -->
    <div class="modal modal_zindex fade" id="ediModal">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle"><i class="fa fa-edit"></i> Update Your Profile</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <form action="{{action('User\UserProfileController@update_profile')}}" method="post" enctype="multipart/form-data">

                <input type="hidden" name="_token" value="{{csrf_token()}}"/>

                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group input-group-sm mb-2">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Position</span>
                                </div>
                                <input type="text" value="{{ $table->position }}" placeholder="Position" name="position" class="form-control" >
                            </div>
                            <div class="input-group input-group-sm mb-2">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Mobile</span>
                                </div>
                                <input type="text" value="{{ $table->mobile}}" name="mobile" placeholder="Mobile No" class="form-control" >
                            </div>
                            {{--<div class="input-group input-group-sm mb-2">--}}
                                {{--<div class="input-group-prepend">--}}
                                    {{--<span class="input-group-text">Date Of Birth</span>--}}
                                {{--</div>--}}
                                {{--<input type="date" value="{{ $table->dob }}" name="dob" class="form-control" >--}}
                            {{--</div>--}}
                            <div class="input-group input-group-sm mb-2">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">NID</span>
                                </div>
                                <input type="number" value="{{ $table->nid }}" placeholder="NID" name="nid" maxlength="17" class="form-control" >
                            </div>
                            <div class="input-group input-group-sm mb-2">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Father</span>
                                </div>
                                <input type="text" value="{{ $table->father}}" placeholder="Father" name="father" class="form-control" >
                            </div>
                            <div class="input-group input-group-sm mb-2">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Mother</span>
                                </div>
                                <input type="text" value="{{ $table->mother}}" placeholder="Mother" name="mother" class="form-control" >
                            </div>
                            <div class="input-group input-group-sm mb-2">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">PostCode</span>
                                </div>
                                <input type="text"  value="{{ $table->postCode}}" placeholder="Post Code" name="postCode" class="form-control" >
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group input-group-sm mb-2">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Address</span>
                                </div>
                                <textarea name="address" rows="4" class="form-control" placeholder="Enter Address" >{{ $table->address }}</textarea>
                            </div>
                            <div class="input-group input-group-sm mb-2">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">City</span>
                                </div>
                                <input type="text"  value="{{ $table->city}}" placeholder="City" name="city" class="form-control" >
                            </div>
                            <div class="input-group input-group-sm mb-2">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Country</span>
                                </div>
                                <input type="text"  value="{{ $table->country}}" placeholder="Country" name="country" class="form-control" >
                            </div>
                            <div class="input-group input-group-sm mb-2">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Select an Image</span>
                                </div>
                                <input id="inputFile" type="file" name="imageName" class="form-control" >
                            </div><br/>
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