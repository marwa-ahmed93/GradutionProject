<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/homepage', function () {
    return view('welcome');
});

Auth::routes();

 Route::get('/home', 'HomeController@index')->name('home');


Route::namespace('Auth')->group(function(){
//register student
Route::get('student/register','RegisterController@studentRegister')->name('register.form');
Route::get('student/login/','LoginController@loginPage')->name('login.form');
Route::post('handl/login','LoginController@loginHandel')->name('login');

Route::post('get/student/register','RegisterController@sortstudentRegister')->name('register');

//register professor
Route::get('professor/register','RegisterController@professorRegister')->name('professor.form');
Route::post('get/professor/register','RegisterController@sortprofessorRegister')->name('professor.register');


//register employee
Route::get('employee/register','RegisterController@employeeRegister')->name('employee.form');
Route::post('get/employee/register','RegisterController@sortemployeeRegister')->name('employee.register');

});
Route::namespace('Front')->group(function(){

    Route::get('/', 'HomePageController@index')->name('front.homepage');
    Route::get('/about/home', 'HomePageController@about')->name('front.about');
    Route::get('/message/contact/view','MessageController@viewMessage')->name('front.message.view');
    Route::post('/message/contact','MessageController@contact')->name('front.message.contact');
// student home
Route::get('/student/show', 'StudentController@studentshow')->name('student.show');
// graduate view
Route::get('/graduate/student/show', 'StudentController@studentgraduateshow')->name('graduate.student.show');
// grade Certificates form
Route::get('/graduate/tempCertificate/show', 'StudentController@tempCertificate')->name('graduate.tempCertificate.show');
Route::post('/graduate/tempCertificate/request', 'StudentController@tempCertificateRequest')->name('graduate.tempCertificate.request');

Route::get('/graduate/certificateEn/show', 'StudentController@certificateEn')->name('graduate.certificateEn.show');
Route::post('/graduate/certificateEn/request', 'StudentController@certificateEneRequest')->name('graduate.certificateEn.request');

Route::get('/graduate/certificateAr/show', 'StudentController@certificateAr')->name('graduate.certificateAr.show');
Route::get('/graduate/gradeCertificate/show', 'StudentController@gradeCertificate')->name('graduate.gradeCertificate.show');
Route::get('/staff/view', 'StudentController@staffshow')->name('staff.show');
Route::get('/student/payment/{id}', 'StudentController@studentpayment')->name('student.payment');

Route::middleware('isLoggedin')->group(function(){ 

 });
//staff view

//student card
Route::get('/student/card', 'StudentController@studentcard')->name('student.card');
Route::post('/student/cardform', 'StudentController@cardform')->name('student.cardform');
// student srevices
Route::get('/student/news', 'StudentController@studentnews')->name('student.news');
Route::get('/student/table', 'StudentController@studenttable')->name('student.table');

Route::get('/student/care', 'StudentController@studentcare')->name('student.care');
// student desires
Route::get('/student/desires', 'StudentController@studentdesires')->name('student.desires');
//desire primary
Route::post('/student/desires/primary', 'StudentController@primarydesires')->name('primary.desires');
//desire electrical
Route::post('/student/desires/electrical', 'StudentController@electricaldesires')->name('electrical.desires');
//email
Route::get('/student/email', 'StudentController@studentemail')->name('student.email');
//complaints
Route::get('/student/complaints', 'StudentController@studentcomplaints')->name('student.complaints');
Route::post('/student/complaintsForms', 'StudentController@complaintsForms')->name('student.complaintsForms');

//register
// Route::get('student/register','StudentRegiserController@studentRegister')->name('student.register');
// Route::post('get/student/register','StudentRegiserController@sortstudentRegister')->name('sortStudent.register');

});


Route::middleware('isAdmin')->group(function(){
Route::namespace('Admin')->group(function(){
    //employee login
Route::get('/employee/home','EmployeeController@empHome')->name('emp.home');
// for real time search
Route::get('/emp/search','EmployeeController@search')->name('emp.search');

//view student
Route::get('/student/view','EmployeeController@viewStudent')->name('emp.view');

// Route::get('/student/view','EmployeeController@viewStudent')->name('student.view');
Route::get('/edit/student/{id}','EmployeeController@editStudent')->name('edit.student');
Route::post('/update/student','EmployeeController@updateStudent')->name('update.student');
Route::get('/delete/student/{id}','EmployeeController@deleteStudent')->name('delete.student');

//view Id Card
Route::get('/id_card/view','EmployeeController@viewIdRequest')->name('request.id_card');
Route::get('/delete/idRequest/{id}','EmployeeController@deleteIdRequest')->name('delete.idRequest');
// view primary desire
Route::get('/primary/desire/view','EmployeeController@viewPrimaryDesire')->name('primary.view.desire');
Route::get('/delete/desire/{id}','EmployeeController@deleteDesire')->name('delete.desire');
//view electrical desire     
Route::get('/electrical/desire/view','EmployeeController@viewElectricalDesire')->name('electrical.view.desire');
Route::get('/delete/electrical/desire/{id}','EmployeeController@deleteElectricalDesire')->name('delete.electrical.desire');

//view complaints
Route::get('/complaints/view','EmployeeController@viewComplaints')->name('complaints.view');
Route::get('/delete/complaints/{id}','EmployeeController@deletecomplaints')->name('delete.complaints');


//schedular
Route::get('/schedulesView','EmployeeController@schedulesView')->name('schedulesView');
Route::post('/schedulesView/upload','EmployeeController@schedulesViewupload')->name('schedulesView.upload');

 //view professor
Route::get('/professor/view','EmployeeController@viewProf')->name('professor.view');
Route::get('/editProf/user/{id}','EmployeeController@editProf')->name('edit.professor');
Route::post('/updateProf/user','EmployeeController@updateProf')->name('update.professor');
Route::get('/deleteProf/user/{id}','EmployeeController@deleteProf')->name('delete.professor');


 //view employee
 Route::get('/employee/view','EmployeeController@viewEmp')->name('employee.view');
 Route::get('/editEmp/user/{id}','EmployeeController@editEmp')->name('edit.employee');
 Route::post('/updateEmp/user','EmployeeController@updateEmp')->name('update.employee');
 Route::get('/deleteEmp/user/{id}','EmployeeController@deleteEmp')->name('delete.employee');

});
});
//not auth
Route::get('/notauth',function(){
    return "You dont have permation to acess this link";
});