@extends('layouts.print')

@section('title')
    Slip No #{{invoice_n($table->serialNo)}}
@endsection

@section('content')
    <div class="panel panel-white mb-5">
        <div class="panel-heading hidden-print">
            <h6 class="panel-title">View Pay Slip #{{invoice_n($table->salarysheetID)}}</h6>
            <div class="heading-elements">
                <a class="btn btn-danger btn-xs heading-btn" href="{{URL::previous()}}"><i class="icon-arrow-left16 position-left"></i> Go Back</a>
                <button type="button" class="btn btn-success btn-xs heading-btn" onclick="window.print()"><i class="icon-printer position-left"></i> Print</button>
            </div>
        </div>

        <div class="panel-body no-padding-bottom no-margin-bottom">
            <div class="row">
                <div class="col-xs-12 text-center mb-10">
                    <h1 class="m-0">{{$company->name}}</h1>
                    <p class="m-0 text-size-small">{{$company->address}}</p>
                    <p class="m-0 text-size-small">
                        <span class="white_sp">{!!  ($company->phone != '' ? '<strong>Phone: </strong>'.$company->phone.';':'')!!} {!!($company->mobile != '' ? '<strong>Mobile: </strong>'.$company->mobile:'')!!}</span>
                    </p>
                    <p class="m-0 text-size-small">
                        <span class="white_sp">{!!  ($company->email != '' ? '<strong>Email: </strong>'.$company->email.';':'')!!}</span> <span class="white_sp">{!!($company->website != '' ? '<strong>Website: </strong>'.$company->website:'')!!}</span>
                    </p>
                </div>

            </div>

            <div class="row">
                <div class="col-xs-12">
                    <table class="table table-hover table-bordered table-condensed table-hover">
                        <thead>
                        <tr>
                            <th class="pt-0 pb-0 p-5 text-center" colspan="4">Payments</th>
                            <th class="pt-0 pb-0 p-5 text-center" colspan="2">Deductions</th>
                            <th class="pt-0 pb-0 p-5 text-center" colspan="2"></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th class="pt-0 pb-0 p-5 text-center bg-teal">DESCRIPTION</th>
                            <th class="pt-0 pb-0 p-5 text-center bg-teal">HOURS</th>
                            <th class="pt-0 pb-0 p-5 text-center bg-teal">RATE</th>
                            <th class="pt-0 pb-0 p-5 text-center bg-teal">AMOUNT</th>
                            <th class="pt-0 pb-0 p-5 text-center bg-teal">DESCRIPTION</th>
                            <th class="pt-0 pb-0 p-5 text-center bg-teal">AMOUNT</th>
                            <th class="pt-0 pb-0 p-5 text-center bg-teal">DESCRIPTION</th>
                            <th class="pt-0 pb-0 p-5 text-center bg-teal">AMOUNT</th>
                        </tr>

                        <tr>
                            <td class="pt-0 pb-0 p-5 text-center">Basic Pay</td>
                            <td class="pt-0 pb-0 p-5 text-center"></td>
                            <td class="pt-0 pb-0 p-5 text-center"></td>
                            <td class="pt-0 pb-0 p-5 text-center">{{money($table->amount)}}</td>
                            <td class="pt-0 pb-0 p-5 text-center">Income Tax</td>
                            <td class="pt-0 pb-0 p-5 text-center">{{money_c(0)}}</td>
                            <td class="pt-0 pb-0 p-5 text-center">Earnings for NI</td>
                            <td class="pt-0 pb-0 p-5 text-center">{{money_c(0)}}</td>
                        </tr>
                        <tr>
                            <th class="pt-0 pb-0 p-5 text-center">Total Payments</th>
                            <th class="pt-0 pb-0 p-5 text-center"></th>
                            <th class="pt-0 pb-0 p-5 text-center"></th>
                            <th class="pt-0 pb-0 p-5 text-center">{{money($table->amount)}}</th>
                            <td class="pt-0 pb-0 p-5 text-center">National Insurance</td>
                            <td class="pt-0 pb-0 p-5 text-center">{{money_c(0)}}</td>
                            <td class="pt-0 pb-0 p-5 text-center">Gross for Tax</td>
                            <td class="pt-0 pb-0 p-5 text-center">{{money_c(0)}}</td>
                        </tr>
                        <tr>
                            <td class="pt-0 pb-0 p-5 text-center"></td>
                            <td class="pt-0 pb-0 p-5 text-center"></td>
                            <td class="pt-0 pb-0 p-5 text-center"></td>
                            <td class="pt-0 pb-0 p-5 text-center"></td>
                            <td class="pt-0 pb-0 p-5 text-center">NEST</td>
                            <td class="pt-0 pb-0 p-5 text-center">{{money_c(0)}}</td>
                            <td class="pt-0 pb-0 p-5 text-center">Total Gross Pay</td>
                            <td class="pt-0 pb-0 p-5 text-center">{{money_c(0)}}</td>
                        </tr>
                        <tr>
                            <td class="pt-0 pb-0 p-5 text-center"></td>
                            <td class="pt-0 pb-0 p-5 text-center"></td>
                            <td class="pt-0 pb-0 p-5 text-center"></td>
                            <td class="pt-0 pb-0 p-5 text-center"></td>
                            <th class="pt-0 pb-0 p-5 text-center">Total Deductions</th>
                            <th class="pt-0 pb-0 p-5 text-center">{{money_c(0)}}</th>
                            <th class="pt-0 pb-0 p-5 text-center" colspan="2">Year to Date</th>
                        </tr>
                        <tr>
                            <td class="pt-0 pb-0 p-5 text-center"></td>
                            <td class="pt-0 pb-0 p-5 text-center"></td>
                            <td class="pt-0 pb-0 p-5 text-center"></td>
                            <td class="pt-0 pb-0 p-5 text-center"></td>
                            <td class="pt-0 pb-0 p-5 text-center"></td>
                            <td class="pt-0 pb-0 p-5 text-center"></td>
                            <td class="pt-0 pb-0 p-5 text-center">Taxable Gross Pay</td>
                            <td class="pt-0 pb-0 p-5 text-center">{{money_c(0)}}</td>
                        </tr>
                        <tr>
                            <td class="pt-0 pb-0 p-5 text-center"></td>
                            <td class="pt-0 pb-0 p-5 text-center"></td>
                            <td class="pt-0 pb-0 p-5 text-center"></td>
                            <td class="pt-0 pb-0 p-5 text-center"></td>
                            <td class="pt-0 pb-0 p-5 text-center"></td>
                            <td class="pt-0 pb-0 p-5 text-center"></td>
                            <td class="pt-0 pb-0 p-5 text-center">Income Tax</td>
                            <td class="pt-0 pb-0 p-5 text-center">{{money_c(0)}}</td>
                        </tr>
                        <tr>
                            <td class="pt-0 pb-0 p-5 text-center"></td>
                            <td class="pt-0 pb-0 p-5 text-center"></td>
                            <td class="pt-0 pb-0 p-5 text-center"></td>
                            <td class="pt-0 pb-0 p-5 text-center"></td>
                            <td class="pt-0 pb-0 p-5 text-center"></td>
                            <td class="pt-0 pb-0 p-5 text-center"></td>
                            <td class="pt-0 pb-0 p-5 text-center">Employee NIC</td>
                            <td class="pt-0 pb-0 p-5 text-center">{{money_c(0)}}</td>
                        </tr>
                        <tr>
                            <td class="pt-0 pb-0 p-5 text-center"></td>
                            <td class="pt-0 pb-0 p-5 text-center"></td>
                            <td class="pt-0 pb-0 p-5 text-center"></td>
                            <td class="pt-0 pb-0 p-5 text-center"></td>
                            <td class="pt-0 pb-0 p-5 text-center"></td>
                            <td class="pt-0 pb-0 p-5 text-center"></td>
                            <td class="pt-0 pb-0 p-5 text-center">Employer NIC</td>
                            <td class="pt-0 pb-0 p-5 text-center">{{money_c(0)}}</td>
                        </tr>

                        <tr>
                            <td class="pt-0 pb-0 p-5 text-center"></td>
                            <td class="pt-0 pb-0 p-5 text-center"></td>
                            <td class="pt-0 pb-0 p-5 text-center"></td>
                            <td class="pt-0 pb-0 p-5 text-center"></td>
                            <td class="pt-0 pb-0 p-5 text-center"></td>
                            <td class="pt-0 pb-0 p-5 text-center"></td>
                            <td class="pt-0 pb-0 p-5 text-center" colspan="2">&nbsp;</td>
                        </tr>

                        <tr>
                            <td class="pt-0 pb-0 p-5 text-center"></td>
                            <td class="pt-0 pb-0 p-5 text-center"></td>
                            <td class="pt-0 pb-0 p-5 text-center"></td>
                            <td class="pt-0 pb-0 p-5 text-center"></td>
                            <td class="pt-0 pb-0 p-5 text-center"></td>
                            <td class="pt-0 pb-0 p-5 text-center"></td>
                            <td class="pt-0 pb-0 p-5 text-center">NI Number</td>
                            <td class="pt-0 pb-0 p-5 text-center"></td>
                        </tr>

                        <tr>
                            <td class="pt-0 pb-0 p-5 text-center"></td>
                            <td class="pt-0 pb-0 p-5 text-center"></td>
                            <td class="pt-0 pb-0 p-5 text-center"></td>
                            <td class="pt-0 pb-0 p-5 text-center"></td>
                            <td class="pt-0 pb-0 p-5 text-center"></td>
                            <td class="pt-0 pb-0 p-5 text-center"></td>
                            <td class="pt-0 pb-0 p-5 text-center">Passport</td>
                            <td class="pt-0 pb-0 p-5 text-center"></td>
                        </tr>

                        <tr>
                            <td class="pt-0 pb-0 p-5 text-center"></td>
                            <td class="pt-0 pb-0 p-5 text-center"></td>
                            <td class="pt-0 pb-0 p-5 text-center"></td>
                            <td class="pt-0 pb-0 p-5 text-center"></td>
                            <td class="pt-0 pb-0 p-5 text-center"></td>
                            <td class="pt-0 pb-0 p-5 text-center"></td>
                            <td class="pt-0 pb-0 p-5 text-center">NID Number</td>
                            <td class="pt-0 pb-0 p-5 text-center">{{$table->nid}}</td>
                        </tr>

                        <tr>
                            <td class="pt-0 pb-0 p-5 text-center"></td>
                            <td class="pt-0 pb-0 p-5 text-center"></td>
                            <td class="pt-0 pb-0 p-5 text-center"></td>
                            <td class="pt-0 pb-0 p-5 text-center"></td>
                            <td class="pt-0 pb-0 p-5 text-center"></td>
                            <td class="pt-0 pb-0 p-5 text-center"></td>
                            <td class="pt-0 pb-0 p-5 text-center">TIN Number</td>
                            <td class="pt-0 pb-0 p-5 text-center"></td>
                        </tr>

                        </tbody>
                    </table>

                    <table class="table table-hover table-bordered table-condensed table-hover mb-20">
                        <thead>
                        <tr>
                            <th class="pt-0 pb-0 p-5 text-center bg-teal">WK/MT</th>
                            <th class="pt-0 pb-0 p-5 text-center bg-teal">DATE</th>
                            <th class="pt-0 pb-0 p-5 text-center bg-teal">DOB.</th>
                            <th class="pt-0 pb-0 p-5 text-center bg-teal">EMPL. NID</th>
                            <th class="pt-0 pb-0 p-5 text-center bg-teal">EMPL. NO</th>
                            <th class="pt-0 pb-0 p-5 text-center bg-teal">EMPLOYEE NAME</th>
                            <th class="pt-0 pb-0 p-5 text-center bg-teal">DESC.</th>
                            <th class="pt-0 pb-0 p-5 text-center bg-teal">NET PAY</th>

                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="pt-0 pb-0 p-5 text-center">{{$table->name}}</td>
                            <td class="pt-0 pb-0 p-5 text-center">{{pub_date($table->created_at)}}</td>
                            <td class="pt-0 pb-0 p-5 text-center">{{pub_date($table->dob)}}</td>
                            <td class="pt-0 pb-0 p-5 text-center">{{$table->nid}}</td>
                            <td class="pt-0 pb-0 p-5 text-center">{{$table->employeeID}}</td>
                            <td class="pt-0 pb-0 p-5 text-center">
                                <p class="m-0"><strong>{{$table->employeeName}}</strong></p>
                                <p class="m-0">{{$table->address}}</p>
                            </td>
                            <td class="pt-0 pb-0 p-5 text-center">{{$table->description}}</td>
                            <td class="pt-0 pb-0 p-5 text-center">{{money($table->amount)}}</td>
                        </tr>
                        </tbody>

                    </table>
                </div>
            </div>


        </div>

    </div>






@endsection

@section('script')
    <script type="text/javascript" src="{{asset('public/assets/js/plugins/notifications/sweet_alert.min.js')}}"></script>
    <script type="text/javascript">

        $(function () {
            $('#mailer').click(function () {
                var url = $(this).data('href');
                $.get( url, function( result ) {
                    if(result == 1){
                        swal({
                            title: "Invoice send to employee email Successfully!!",
                            confirmButtonColor: "#2196F3",
                            type: "success"
                        });
                    }
                });
            });
        });

    </script>
@endsection