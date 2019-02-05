@section('box')

    <!-- Basic Edi modal -->
    <div id="salaryPay" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h5 class="modal-title"><i class="icon-wallet"></i> Pay Salary</h5>
                </div>

                <form action="{{action('Employee\PaymentController@pay_option')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <input type="hidden" id="employeeID" name="employeeID">
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="col-lg-4 control-label">Pay Salary Amount:</label>
                            <div class="col-lg-8">
                                <input class="form-control" name="account" placeholder="Pay Salary Amount" type="number" step="any" value="0" min="0" required>
                            </div>
                        </div><br>
                    </div>
                    <div class="modal-footer mt-15">
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="icon-cancel-circle2"></i> Close</button>
                        <button type="submit" class="btn btn-primary"><i class="icon-checkmark4"></i> Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /basic Edi modal -->

@endsection