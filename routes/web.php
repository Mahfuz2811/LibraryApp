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


Route::get('home', function () {
    return redirect()->route('admin_dashboard_index');
})->name('home');

Route::get('redirect-login', function () {
    return redirect()->route('get_login');
})->name('login');

Route::prefix('auth')->group(function() {

    // Authentication Routes...
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('get_login');
    Route::post('login', 'Auth\LoginController@login')->name('post_login');
    Route::get('logout', 'Auth\LoginController@getLogout')->name('get_logout');
    Route::post('logout', 'Auth\LoginController@logout')->name('post_logout');

    // Registration Routes...
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('get_register');
    Route::post('register', 'Auth\RegisterController@register')->name('post_register');

    // Password Reset Routes...
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('reset');

    // Activation Routes
    Route::get('user/activation/{token}', 'Auth\ActivationController@activateUser')->name('activation');
    Route::get('resend/activation/{email}', 'Auth\ActivationController@resendActivation')->name('resend.activation');

});

Route::group(['prefix' => 'admin/notice', 'middleware' => 'auth'], function(){
    Route::get('/', 'NoticeController@index')->name('admin_notice');

    Route::get('/add', 'NoticeController@addNotice')->name('admin_notice_add');
    Route::post('/add', 'NoticeController@postNotice')->name('admin_notice_post');

    Route::get('{id}/edit', 'NoticeController@editNotice')->name('admin_notice_edit');
    Route::post('{id}/edit', 'NoticeController@postEditNotice')->name('admin_notice_edit_post');

    Route::get('{id}/delete', 'NoticeController@deleteNotice')->name('admin_notice_delete');
});

Route::group(['prefix' => 'admin/book', 'middleware' => 'auth'], function(){
    Route::get('/', 'BookController@index')->name('admin_book');

    Route::get('/add', 'BookController@addBook')->name('admin_book_add');
    Route::post('/add', 'BookController@postBook')->name('admin_book_post');

    Route::get('{id}/edit', 'BookController@editBook')->name('admin_book_edit');
    Route::post('{id}/edit', 'BookController@postEditBook')->name('admin_book_edit_post');

    Route::get('{id}/delete', 'BookController@deleteBook')->name('admin_book_delete');
});

Route::group(['prefix' => 'admin/form-downloads', 'middleware' => 'auth'], function(){
    Route::get('/', 'FormController@index')->name('admin_form');

    Route::get('/add', 'FormController@addForm')->name('admin_form_add');
    Route::post('/add', 'FormController@postForm')->name('admin_form_post');

    Route::get('{id}/edit', 'FormController@editForm')->name('admin_form_edit');
    Route::post('{id}/edit', 'FormController@postEditForm')->name('admin_form_edit_post');

    Route::get('{id}/delete', 'FormController@deleteForm')->name('admin_form_delete');
});


Route::group(['prefix' => 'admin/slider', 'middleware' => 'auth'], function(){
    Route::get('/', 'SliderController@index')->name('admin_slider');

    Route::get('/add', 'SliderController@addSlider')->name('admin_slider_add');
    Route::post('/add', 'SliderController@postSlider')->name('admin_slider_post');

    Route::get('{id}/edit', 'SliderController@editSlider')->name('admin_slider_edit');
    Route::post('{id}/edit', 'SliderController@postEditSlider')->name('admin_slider_edit_post');

    Route::get('{id}/delete', 'SliderController@deleteSlider')->name('admin_slider_delete');
});

Route::group(['prefix' => 'admin/library/member', 'middleware' => 'auth'], function(){
    Route::get('/', 'MemberController@index')->name('admin_member');

    Route::get('/add', 'MemberController@addMember')->name('admin_member_add');
    Route::post('/add', 'MemberController@postMember')->name('admin_member_post');

    Route::get('{id}/edit', 'MemberController@editMember')->name('admin_member_edit');
    Route::post('{id}/edit', 'MemberController@postEditMember')->name('admin_member_edit_post');

    Route::get('{id}/delete', 'MemberController@deleteMember')->name('admin_member_delete');
});

Route::group(['prefix' => 'admin/administration/member', 'middleware' => 'auth'], function(){
    Route::get('/', 'AdministrationController@index')->name('admin_administration');

    Route::get('/add', 'AdministrationController@addMember')->name('admin_administration_add');
    Route::post('/add', 'AdministrationController@postMember')->name('admin_administration_post');

    Route::get('{id}/edit', 'AdministrationController@editMember')->name('admin_administration_edit');
    Route::post('{id}/edit', 'AdministrationController@postEditMember')->name('admin_administration_edit_post');

    Route::get('{id}/delete', 'AdministrationController@deleteMember')->name('admin_administration_delete');
});


Route::group(['prefix' => 'admin/dynamic-page', 'middleware' => 'auth'], function(){
    Route::get('/', 'DynamicPageController@index')->name('admin_dynamic_page');

    Route::get('/add', 'DynamicPageController@addDynamicPage')->name('admin_dynamic_page_add');
    Route::post('/add', 'DynamicPageController@postDynamicPage')->name('admin_dynamic_page_post');

    Route::get('{id}/edit', 'DynamicPageController@editDynamicPage')->name('admin_dynamic_page_edit');
    Route::post('{id}/edit', 'DynamicPageController@postEditDynamicPage')->name('admin_dynamic_page_edit_post');

    Route::get('{id}/delete', 'DynamicPageController@deleteDynamicPage')->name('admin_dynamic_page_delete');
});


Route::group(['prefix' => 'admin/dashboard', 'middleware' => 'auth'], function () {

    Route::get('/', 'DashboardController@index')->name('admin_dashboard_index');

});



//for admin lib
Route::group(['prefix' => 'admin/library-management', 'middleware' => 'auth'], function () {

    Route::get('/', 'adminLib\AdminManagementController@index')->name('admin_lib_index');

});

Route::group(['prefix' => 'admin/library-management/book', 'middleware' => 'auth'], function () {

    Route::get('/book-list', 'adminLib\BookController@bookList')->name('admin_lib_book_list');
    Route::get('/lost-book-list', 'adminLib\BookController@lostBookList')->name('admin_lib_lost_book');
    Route::get('/add-book', 'adminLib\BookController@addBook')->name('admin_lib_add_book');
    Route::post('/add-book', 'adminLib\BookController@storeBook')->name('admin_lib_book_store');

});

Route::group(['prefix' => 'admin/library-management/circulation', 'middleware' => 'auth'], function () {

    Route::get('/issue-book-list', 'adminLib\CirculationController@issueBookList')->name('admin_lib_issue_book_list');
    Route::get('/add-issue-book', 'adminLib\CirculationController@addIssueBook')->name('admin_lib_add_issue_book');
    Route::get('/add-return-book', 'adminLib\CirculationController@addReturnBook')->name('admin_lib_add_return_book');

});

Route::group(['prefix' => 'admin/library-management/student', 'middleware' => 'auth'], function () {

    Route::get('/student-list', 'adminLib\StudentController@studentList')->name('admin_lib_student_list');
    Route::get('/student-form', 'adminLib\StudentController@studentForm')->name('admin_lib_student_form');

});

Route::group(['prefix' => 'admin/library-management/fee-adjustment', 'middleware' => 'auth'], function () {

    Route::get('/', 'adminLib\FeeAdjustmentController@feeAdjustment')->name('admin_lib_fee_adjustment');

});

Route::group(['prefix' => 'admin/library-management/lock-system', 'middleware' => 'auth'], function () {

    Route::get('/', 'adminLib\LockSystemController@lockSystem')->name('admin_lib_lock_system');

});

Route::group(['prefix' => 'admin/library-management/lock-system', 'middleware' => 'auth'], function () {

    Route::get('/', 'adminLib\LockSystemController@lockSystem')->name('admin_lib_lock_system');

});




//for admin lib
Route::group(['prefix' => 'user', 'middleware' => 'auth'], function () {

    Route::get('/', 'userLib\UserController@index')->name('user_lib_index');
    Route::get('/aooly-book', 'userLib\UserController@applyBook')->name('user_lib_apply_book');
    Route::get('/book-list', 'userLib\UserController@bookList')->name('user_lib_book_list');
    Route::get('/previous-issued-book-list', 'userLib\UserController@previousIssuedBookList')->name('user_lib_previouse_issued');
    Route::get('/pending-book-list', 'userLib\UserController@pendingBookList')->name('user_lib_pending');

});



//frontend route
Route::get('/', 'FrontendController@home');
Route::get('page/{id}', 'FrontendController@dynamicPage');
Route::get('library-members', 'FrontendController@libraryMember');
Route::get('library-administration', 'FrontendController@libraryAdministration');
Route::get('notice/{id}', 'FrontendController@noticeDetails');
Route::get('book-details/{id}', 'FrontendController@bookDetails');
Route::get('download-notice/{attachment}', 'FrontendController@downloadNotice');
Route::get('download-form/{attachment}', 'FrontendController@downloadForm');
