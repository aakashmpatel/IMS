<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware'  => ['web']], function(){

    Route::get('/', function(){
        return view('landing');
    })->name('home');

    Route::get('admin', [
        'uses'  => 'AdminController@getAdminSignIn',
        'as'    => 'admin'
    ]);

    Route::post('/admin/signin', [
        'uses'  => 'AdminController@postAdminSignIn',
        'as'    =>  'admin-signin'
    ]);

    Route::get('students', [
        'uses'  =>  'StudentsController@getStudentLogin',
        'as'    => 'student'
    ]);

    Route::post('students/signin', [
        'uses'  =>  'StudentsController@postStudentSignIn',
        'as'    => 'student-signin'
    ]);

    Route::get('/admin/dashboard', [
        'uses'  => 'AdminController@getAdminDashboard',
        'as'    => 'admin-dashboard'
    ]);

    Route::get('students/dashboard', [
        'uses'  => 'StudentsController@getStudentsDashboard',
        'as'    => 'students-dashboard'
    ]);
    
    Route::get('/admin/addStudents', [
        'uses'  =>  'AdminController@getAdminAddStudents',
        'as'    => 'admins_add_students'
    ]);

    Route::get('/students/{username}', [
        'uses'  => 'StudentsController@getUsernameProfile',
        'as'    => 'username'
    ]);

    Route::post('/students/create', [
        'uses'  => 'AdminController@postCreateStudentAccount',
        'as'    => 'create-student'
    ]);

    Route::get('admin/dashboard/internships/', [
        'uses'  => 'AdminController@getInternships',
        'as'    => 'internships'
    ]);

    Route::get('admin/internships/manage', [
        'uses'  =>  'AdminController@getManageInternships',
        'as'    => 'manage-internships'
    ]);

    Route::post('admin/internships/manage/{operation}/{id?}', [
        'uses'  => 'AdminController@postManageInternshipsType',
        'as'    =>  'manage-internships-type'
    ]);
    Route::get('/logout', [
        'uses'  => 'AdminController@getLogout',
        'as'    => 'logout'
    ]);

    Route::get('admin/dashboard/internships/{type}',[
        'uses'  => 'AdminController@getInternshipView',
        'as'    => 'internship_type'
    ]);

    Route::get('/skills/{skill_name}', [
        'uses'  => 'StudentsController@getSkillsRelatedJob',
        'as'    => 'skills'
    ]);

    Route::post('admin/dashboard/internships/{internship_type}/add', [
        'uses'  => 'AdminController@addInternship',
        'as'    =>'addInternships'
    ]);

    Route::get('students/dashboard/{internship_type}', [
        'uses'  => 'AdminController@getList',
        'as'    =>  'list'
    ]);
    Route::get('admin/dashboard/internships/{internship_type}/list', [
        'uses'  =>  'AdminController@getList',
        'as'    => 'list'
    ]);

    Route::get('students/dashboard/{internship_type}/{internship_id}/addInterest', [
        'uses'  =>  'StudentsController@addNotification',
        'as'    => 'add-interest'
    ]);

    Route::get('students/dashboard/{internship_type}/{internship_id/removeInterest}', [
        'uses'  => 'StudentsController@removeNotification',
        'as'    => 'remove-interest'
    ]);

    Route::get('/students/dashboard/info/accounts', [
        'uses'  =>  'StudentsController@getAccounts',
        'as'    =>  'student-accounts'
    ]);

    Route::get('/students/dashboard/info/accounts/education/add', function(){
        return view('addEducation');
    });
    Route::post('/students/dashboard/info/accounts/education/add', [
        'uses'  =>'StudentsController@postAddEducation',
        'as'    =>  'add-education'
    ]);

    Route::get('/students/dashboard/info/accounts/jobs/add', function(){
        return view('addJobs');
    });
    Route::post('/students/dashboard/info/accounts/jobs/add', [
        'uses'  =>'StudentsController@postAddEducation',
        'as'    =>  'add-jobs'
    ]);

    Route::get('/students/dashboard/info/accounts/jobs/add', function(){
        return view('addJobs');
    });

    Route::post('/students/dashboard/info/accounts/jobs/add', [
        'uses'  =>'StudentsController@postAddEducation',
        'as'    =>  'add-jobs'
    ]);

    Route::get('search', [
        'uses'  => 'AdminController@getSearch',
        'as'    => 'search'
    ]);

    Route::get('search/{v}', [
       'uses'   =>  'AdminController@getTheSearch',
        'as'    =>  'get-search'
    ]);

    Route::get('/admin/dashboard/internships/Company');


});