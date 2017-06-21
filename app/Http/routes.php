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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
// web middleware disable, because as of laravel 5.2,
// this is included automatically
//Route::group(['middleware' => ['web']], function () {
	Route::get('/', 'PublicFormsController@index');
	Route::post('results', 'PublicFormsController@postIndex');
	Route::get('message', 'PublicFormsController@getMessage');
	Route::post('message', 'PublicFormsController@postMessage');
	Route::get('pubhelp', 'PublicFormsController@pubhelp');
	Route::post('pubhelp_results', 'PublicFormsController@postPubhelp');
	
//	Route::get('/test', function(){ return \Illuminate\Support\Facades\Cookie::get('cookie_test'); });
		// public routes
	Route::get('test_bootstrap', 'PublicFormsController@get_test_bootstrap');
	Route::get('dialog_page', 'PublicPagesController@dialogPage');
	Route::get('dialog/test_form', 'DialogPagesController@getDialogForm');
// test CRM forms
	Route::get('crm/landing_page', 'PublicPagesController@showLandingPage');
	Route::get('crm/show_zoho_form', 'PublicPagesController@showZohoForm');
// next two lines are the route to test the post request 
// sent to clients
	Route::get('crm/test_landing_page', 'PublicFormsController@testLandingPage');
	Route::post('crm/test_landing_page', 'PublicFormsController@testLandingPage');
	
	
	// AJAX- public routes
	Route::get('ajax/set_item/{item_name}/{item_value}', 'Ajax\AjaxController@post_set_item');
	Route::post('ajax/set_item', 'Ajax\AjaxController@post_set_item');
	Route::get('ajax/get_genre', 'Ajax\AjaxController@post_get_genre');
	Route::post('ajax/get_genre', 'Ajax\AjaxController@post_get_genre');
	Route::get('ajax/get_question/{question_name}', 'Ajax\AjaxController@post_get_question');
	Route::post('ajax/get_question', 'Ajax\AjaxController@post_get_question');
	// AJAX - auth routes
	//	Route::get('ajax/get_user_info_admin', 'AjaxController@get_user_info_admin');
	Route::post('ajax/get_user_info_admin', 'Ajax\AjaxAuthController@get_user_info_admin');
	//	Route::get('ajax/resort_users_admin', 'AjaxController@resort_users_admin');
	Route::post('ajax/resort_users_admin', 'Ajax\AjaxAuthController@resort_users_admin');
	Route::post('ajax/get_role_info_admin', 'Ajax\AjaxAuthController@get_role_info_admin');
	Route::get('ajax/get_role_info_admin', 'Ajax\AjaxAuthController@get_role_info_admin');
	Route::post('ajax/get_log_event', 'Ajax\AjaxAuthController@get_log_event');
	
	
	// authorization routes
//	Route::auth();
//	Route::get('/home', 'HomeController@index');
	

	// Authentication routes...
	Route::get('login', 'Auth\AuthController@getLogin');
	Route::post('login', 'Auth\AuthController@postLogin');
//	Route::get('auth/logout', 'Auth\AuthController@getLogout');
	Route::get('auth/logout', 'Auth\AuthController@logout');
	
	// Registration routes...
	Route::get('auth/register', 'Auth\AuthController@getRegister');
	Route::post('auth/register', 'Auth\AuthController@postRegister');
	
	// Password reset link request routes...
	Route::get('password/email', 'Auth\PasswordController@getEmail');
	Route::post('password/email', 'Auth\PasswordController@postEmail');
	
	// Password reset routes...
	Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
	Route::post('password/reset', 'Auth\PasswordController@postReset');
	// admin routes
	Route::get('admin/add_client/{client_user_id}', 'Admin\AdminController@get_add_client');
	Route::post('admin/add_client/{client_user_id}', 'Admin\AdminController@post_add_client');
	Route::get('admin/add_client/{client_user_id}', 'Admin\AdminController@get_add_client');
	Route::post('admin/add_client/{client_user_id}', 'Admin\AdminController@post_add_client');
	Route::get('admin/add_user', 'Admin\AdminController@get_add_user');
	Route::post('admin/add_user', 'Admin\AdminController@post_add_user');
	Route::get('admin/dashboard', 'Admin\AdminController@index');
	Route::get('admin/choose_client', 'Admin\AdminController@get_choose_client');
	Route::post('admin/choose_client', 'Admin\AdminController@post_choose_client');
//	Route::get('admin/choose_user_add_client', 'Admin\AdminController@get_choose_user_add_client');
//	Route::post('admin/choose_user_add_client', 'Admin\AdminController@post_choose_user_add_client');
	Route::get('admin/choose_user_add_client', 'Admin\AdminController@get_choose_user_add_client');
	Route::post('admin/choose_user_add_client', 'Admin\AdminController@post_choose_user_add_client');
	Route::get('admin/edit_user', 'Admin\AdminController@get_edit_user');
	Route::post('admin/edit_user', 'Admin\AdminController@post_edit_user');
	Route::get('admin/edit_client_lead_vars/{client_user_id}', 'Admin\AdminController@get_edit_client_lead_vars');
	Route::post('admin/edit_client_lead_vars/{client_user_id}', 'Admin\AdminController@post_edit_client_lead_vars');
	Route::get('admin/test_client/{client_user_id}', 'Admin\AdminController@get_test_client');
	Route::get('admin/edit_client/{client_user_id}', 'Admin\AdminController@get_edit_client');
	Route::post('admin/edit_client/{client_user_id}', 'Admin\AdminController@post_edit_client');
	Route::get('admin/test_client/{client_user_id}', 'Admin\AdminController@get_test_client');
	Route::post('admin/test_client/{client_user_id}', 'Admin\AdminController@post_test_client');
	Route::get('admin/see_posts', 'Admin\AdminController@get_see_posts');
	Route::get('admin/view_client/{client_user_id}', 'Admin\AdminController@get_view_client');
	Route::get('admin/view_all_registrations', 'Admin\AdminController@get_view_all_registrations');
	Route::get('admin/view_one_registration/{registration_id}', 'Admin\AdminController@get_view_one_registration');
	
// this route is to test guzzle, to see if a post request is produced
	Route::get('admin/test_post', 'Admin\AdminController@get_test_post');
	Route::post('admin/test_post', 'Admin\AdminController@post_test_post');
	//	Route::get('admin/dashboard', 'Admin\AdminController@index');
//	Route::get('admin/edit_client', 'Admin\AdminController@get_edit_client');
//	Route::post('admin/edit_client', 'Admin\AdminController@post_edit_client');
	Route::get('admin/add_role', 'Admin\AdminController@get_add_role');
	Route::post('admin/add_role', 'Admin\AdminController@post_add_role');
	Route::get('admin/delete_role', 'Admin\AdminController@get_delete_role');
	Route::post('admin/delete_role', 'Admin\AdminController@post_delete_role');
// survey routes
// add
	Route::get('admin/add_survey_project', 'Admin\AdminController@get_add_survey_project');
	Route::post('admin/add_survey_project', 'Admin\AdminController@post_add_survey_project');
	Route::get('admin/add_survey_question/{id}', 'Admin\AdminController@get_add_survey_question');
	Route::post('admin/add_survey_question/{id}', 'Admin\AdminController@post_add_survey_question');
	Route::get('admin/add_survey_item/{id}', 'Admin\AdminController@get_add_survey_item');
	Route::post('admin/add_survey_item/{id}', 'Admin\AdminController@post_add_survey_item');
// choose
	Route::get('admin/choose_survey_item/{id}', 'Admin\AdminController@get_choose_survey_item');
	Route::post('admin/choose_survey_item/{id}', 'Admin\AdminController@post_choose_survey_item');
	Route::get('admin/choose_survey_project', 'Admin\AdminController@get_choose_survey_project');
	Route::post('admin/choose_survey_project', 'Admin\AdminController@post_choose_survey_project');
	Route::get('admin/choose_survey_question/{id}', 'Admin\AdminController@get_choose_survey_question');
	Route::post('admin/choose_survey_question/{id}', 'Admin\AdminController@post_choose_survey_question');
	Route::get('admin/choose_survey_question_asi', 'Admin\AdminController@get_choose_survey_question_asi');
	Route::post('admin/choose_survey_question_asi', 'Admin\AdminController@post_choose_survey_question_asi');
	Route::get('admin/choose_survey_question_esi', 'Admin\AdminController@get_choose_survey_question_esi');
	Route::post('admin/choose_survey_question_esi', 'Admin\AdminController@post_choose_survey_question_esi');
	Route::get('admin/edit_survey_item/{id}', 'Admin\AdminController@get_edit_survey_question');
	Route::post('admin/edit_survey_item/{id}', 'Admin\AdminController@post_edit_survey_question');
// edit
	Route::get('admin/edit_survey_item/{id}', 'Admin\AdminController@get_edit_survey_item');
	Route::post('admin/edit_survey_item/{id}', 'Admin\AdminController@post_edit_survey_item');
	Route::get('admin/edit_survey_project/{id}', 'Admin\AdminController@get_edit_survey_project');
	Route::post('admin/edit_survey_project/{id}', 'Admin\AdminController@post_edit_survey_project');
	Route::get('admin/edit_survey_question/{id}', 'Admin\AdminController@get_edit_survey_question');
	Route::post('admin/edit_survey_question/{id}', 'Admin\AdminController@post_edit_survey_question');
	//	Route::get('log/add_log_event', 'LogController@get_add_log_event');
//	Route::post('log/add_log_event', 'LogController@post_add_log_event');
//	Route::get('log/edit_log_event', 'LogController@get_edit_log_event');
//	Route::post('log/edit_log_event', 'LogController@post_edit_log_event');
	

	// client routes
	Route::get('client/dashboard', 'ClientController@index');
	Route::get('client/edit_client', 'ClientController@getEditClient');
	Route::post('client/edit_client', 'ClientController@postEditClient');
	Route::get('client/edit_lead_vars', 'ClientController@getEditLeadVars');
	Route::post('client/edit_lead_vars', 'ClientController@postEditLeadVars');
	
	// public routes
	Route::get('sign_up', 'PublicFormsController@getSignUp');
	Route::post('sign_up', 'PublicFormsController@postSignUp');
	Route::get('contact', 'PublicFormsController@getContact');
	Route::post('contact', 'PublicFormsController@postContact');
	

	// test post request
	Route::get('public/post_test', 'PostTestController@get_post_test');
	Route::post('public/post_test', 'PostTestController@post_post_test');
	

//Route::auth();
// testing shows route:auth does nto work
/* route:auth is equivalent to
// Authentication Routes...

// Registration Routes...
Route::get('register', 'App\Http\Controllers\Auth\AuthController@showRegistrationForm');
Route::post('register', 'App\Http\Controllers\Auth\AuthController@register');

// Password Reset Routes...
Route::get('password/reset/{token?}', 'App\Http\Controllers\Auth\PasswordController@showResetForm');
Route::post('password/email', 'App\Http\Controllers\Auth\PasswordController@sendResetLinkEmail');
Route::post('password/reset', 'App\Http\Controllers\Auth\PasswordController@reset');
 * 
 */

Route::get('/home', 'HomeController@index');
//}); // end route group middleware web
