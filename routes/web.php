<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', 'User\UserHomeController@index');
//===============Single Circular======================
Route::get('circular/single/{id}', 'User\SingleCircularController@index');
//===============/Single Circular=====================

Route::group(['middleware' => 'auth'], function () {



    //==============Employee========================
//    Route::group(['middleware' => ['employee']], function () {
        //==============Employee========================
        Route::get('userprofile', 'User\UserProfileController@index');
        Route::post('userprofile/edit', 'User\UserProfileController@update_profile');
        Route::post('userprofile/birthday', 'User\UserProfileController@update_birthday');

//===============Contact Message======================
        Route::post('userprofile/message', 'User\UserProfileController@message');
        Route::post('userprofile/leave_request', 'User\UserProfileController@leave_request');
//===============/Contact Message=====================

//===============Leave Request======================
    Route::post('userprofile/leave_request', 'User\UserProfileController@leave_request');
//===============/Leave Request=====================

//===============Attendance======================
    Route::post('userprofile/attendance/punch-in', 'User\UserProfileController@attendance_in');
    Route::get('userprofile/attendance/punch-out/{id}', 'User\UserProfileController@attendance_out');
//===============/Attendance=====================
//    });


    //==================Admin============================
    Route::group(['middleware' => ['admin']], function () {

    //==============Admin========================
    Route::get('admin', 'MainController@index');

//====================Events=======================
    Route::get('event/list', 'Events\EventsController@index');
    Route::post('event/save', 'Events\EventsController@save');
    Route::post('event/edit', 'Events\EventsController@edit');
    Route::get('event/del/{id}', 'Events\EventsController@del');
//====================/Events=======================

//====================Month=======================
//    Route::get('month/list', 'Month\MonthController@index');
//    Route::post('month/list/save', 'Month\MonthController@save');
//    Route::post('month/list/edit', 'Month\MonthController@edit');
//    Route::get('month/list/del/{id}', 'Month\MonthController@del');
//====================/Month=======================

//====================Message=======================
    Route::get('message/list', 'Message\MessageController@index');
//====================/Message=======================

//====================Admin Reply=======================
    Route::get('reply/list', 'Message\AdminReplyController@index');
    Route::post('reply/save', 'Message\AdminReplyController@save');
//====================/Admin Reply=======================

//====================Attendance=======================
        Route::get('attendance/list', 'Attendance\AttendanceController@index');
//====================/Attendance=======================

//====================Leave=======================
        Route::get('leave/list', 'Leave\LeaveRequestController@index');
        Route::get('leave/accept/{id}', 'Leave\LeaveRequestController@accept');
        Route::get('leave/reject/{id}', 'Leave\LeaveRequestController@reject');
//====================/Leave=======================

//====================Employee=======================
    Route::get('employee', 'Employee\EmployeeController@index');
    Route::post('employee/edit', 'Employee\EmployeeController@edit');
    Route::get('employee/{id}', 'Employee\EmployeeController@del');



    Route::get('allemployee/salary', 'Employee\SalaryController@index');
    Route::post('salary/save', 'Employee\SalaryController@save');
    Route::post('salary/edit', 'Employee\SalaryController@edit');
    Route::get('salary/slip/{id}', 'Employee\SalaryController@slip');
    Route::get('salary/slip/del/{id}', 'Employee\SalaryController@del');
    Route::get('salary/sheet/{id}', 'Employee\SalaryController@sheet');

    Route::get('salary/payment', 'Employee\PaymentController@index');
    Route::post('salary/payment/pay', 'Employee\PaymentController@pay_option');

//====================/Employee=======================

//====================Reports=======================
        Route::get('attendance/report', 'Reports\AttendanceReportController@index');
        Route::post('attendance/report/show', 'Reports\AttendanceReportController@show');
        Route::post('attendance/report/single', 'Reports\AttendanceReportController@employee_show');
//====================/Reports=======================

//====================JobCircular=======================
        Route::get('circular/list', 'Circular\JobCircularController@index');
        Route::post('circular/save', 'Circular\JobCircularController@save');
        Route::post('circular/edit', 'Circular\JobCircularController@edit');
        Route::get('circular/del/{id}', 'Circular\JobCircularController@del');
//====================/JobCircular=======================

//==================== Company =======================
        Route::get('company', 'Company\CompanyController@index');
        Route::post('company/save', 'Company\CompanyController@save');
        Route::post('company/edit', 'Company\CompanyController@edit');
        Route::get('company/del/{id}', 'Company\CompanyController@del');
//==================== /Company =======================
    });

});

Auth::routes();