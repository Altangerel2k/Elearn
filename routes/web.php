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





Route::get('/', function () {
    return view('front.pages.home');
});


Route::get('/contact', function () {
    return view('front.pages.contact');
});


Route::get('detail/{id}/{name}','FrontController@detailpage');
Route::get('detailc/{id}/{name}','FrontController@detailpagecontent');

Route::get('lang/{lang}', ['as'=>'lang.switch', 'uses'=>'LanguageController@switchLang']);
Route::get('web/{lang}', ['as'=>'lang.switchweb', 'uses'=>'LanguageController@switchWeb']);
//Route::get('/lang/{locale}', function ($locale) {
//
//        App::setLocale($locale);
//
//    return view('welcome');
//});


//Auth::routes();
// Authentication Routes...
$this->get('admin/login', 'Auth\LoginController@showLoginForm')->name('login');
$this->post('admin/login', 'Auth\LoginController@login');
$this->post('logout', 'Auth\LoginController@logout')->name('logout');

//// Registration Routes...
//$this->get('admin/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
//$this->post('admin/register', 'Auth\RegisterController@register');

Route::get('/home', 'HomeController@index')->middleware('auth');
Route::get('/menu', 'HomeController@menu')->middleware('auth');
Route::get('/help', 'HomeController@help');

Route::get('/users', 'ScaffoldInterface\UserController@index')->middleware('auth');
Route::get('/users/create', 'ScaffoldInterface\UserController@create')->middleware('auth');
Route::post('/users/store', 'ScaffoldInterface\UserController@store')->middleware('auth');
Route::get('/users/edit/{id}', 'ScaffoldInterface\UserController@edit')->middleware('auth');
Route::post('/users/update', 'ScaffoldInterface\UserController@update')->middleware('auth');
Route::get('/users/delete/{id}', 'ScaffoldInterface\UserController@destroy')->middleware('auth');

Route::post('/users/addRole', 'ScaffoldInterface\UserController@addrole')->middleware('auth');

Route::get('/roles', 'ScaffoldInterface\RoleController@index')->middleware('auth');
Route::get('/roles/create', 'ScaffoldInterface\RoleController@create');
Route::post('/roles/store', 'ScaffoldInterface\RoleController@store');
Route::get('/roles/edit/{id}', 'ScaffoldInterface\RoleController@edit')->middleware('auth');
Route::post('/roles/update', 'ScaffoldInterface\RoleController@update')->middleware('auth');
Route::get('/roles/delete/{id}', 'ScaffoldInterface\RoleController@destroy')->middleware('auth');

Route::get('/lessons','LessonsController@index')->middleware('auth');
Route::get('/lessons/create', 'LessonsController@create');
/*API*/


Route::get('api/group',function()
{
    return App\Group::where('group_id',1)->get();
})->middleware('auth');
Route::get('api/groupoption',function()
{
    return App\Group::where('group_id',5)->where('type',null)->get();
})->middleware('auth');
Route::get('api/groupoption1',function()
{
    return App\Group::where('group_id',5)->where('type',1)->get();
})->middleware('auth');
Route::get('api/groupoption2',function()
{
    return App\Group::where('group_id',5)->where('type',2)->get();
})->middleware('auth');
Route::get('api/grouplang',function()
{
    return App\Group::where('group_id',6)->get();
})->middleware('auth');

Route::get('/grouplist',function(){
    $groups=App\Group::all();
    return view('group.index',compact('groups'));
})->middleware('auth');
Route::get('/showgroup/{id}',function($id){

    $group=App\Group::find($id);

    return view('group.show',compact('group'));
})->middleware('auth');

//Route::get('/grouplist','HomeController@showgroup');
Route::get('/creategroup/{parentid}',function($id){

    $group=App\Group::find($id);
    return view('group.create',compact('group'));
})->middleware('auth');

Route::post('/menucreate','GroupController@store')->middleware('auth');
Route::post('/menudelete/{id}','GroupController@destroy')->middleware('auth');
Route::post('/menuedit/{id}','GroupController@update')->middleware('auth');
Route::get('/editgroup/{id}', function($id){
    $group=App\Group::find($id);
    return view('group.edit',compact('group'));
})->middleware('auth');
Route::get('/deletegroup/{id}', function($id){
    $group=App\Group::find($id);
    return view('group.delete',compact('group'));
})->middleware('auth');

Route::group(['middleware'=>'auth'], function()
{
    Route::resource('contents', 'ContentController');
});
Route::group(['middleware'=>'auth'], function()
{
    Route::resource('mediatbs', 'MediatbController');
});

Route::get('/create/content/{id}',function ($id){
    $group=App\Group::find($id);
    return view('content.create',compact('group'));
})->middleware('auth');

Route::get('/create/media/{id}',function ($id){
    $group=App\Group::find($id);
    return view('mediatb.create',compact('group'));
})->middleware('auth');


Auth::routes();

Route::get('/register',function(){
    return view('front.splash');
});
Route::get('/contact',function(){
    return view('front.views.contact');
});
Route::get('/job','FrontController@job');
Route::get('/job/{id}','FrontController@jobdetail');

//Route::resource('product', 'ProductController')->middleware('auth');
Route::get('/applicants','JobController@index')->middleware('auth');
Route::get('/job/create','JobController@create')->middleware('auth');
Route::post('/job/save','JobController@store')->middleware('auth');
Route::get('/job/{id}/edit','JobController@edit')->middleware('auth');
Route::post('/job/{id}/update','JobController@update')->middleware('auth');
Route::get('/job/{id}/delete','JobController@destroy')->middleware('auth');

Route::get('/news','FrontController@news');
Route::get('/suggest','FrontController@suggest');

Route::post('/feedback','FrontController@storefeedback');

Route::get('/feedbacklist','FeedbackController@index')->middleware('auth');
Route::get('/feedback/{id}/delete','FeedbackController@destroy')->middleware('auth');

Route::get('/commentlist','CommentController@index')->middleware('auth');
Route::post('/comment/save','CommentController@store')->middleware('auth');
Route::post('/comment/saveit','CommentController@storeit')->middleware('auth');
Route::post('/comment/{id}/savestatus','CommentController@update')->middleware('auth');
Route::post('/comment/savereply','CommentController@storereply')->middleware('auth');
Route::post('/comment/savereplyit','CommentController@storereplyit')->middleware('auth');
Route::get('/commentlistit','CommentController@indexit')->middleware('auth');
Route::get('/comment/{id}/delete','CommentController@destroy')->middleware('auth');
Route::get('/commentit/{id}/delete','CommentController@destroyit')->middleware('auth');

Route::get('/qlist','QuestionnaireController@index')->middleware('auth');
Route::get('/qlist/create','QuestionnaireController@create')->middleware('auth');
Route::post('/qlist/store','QuestionnaireController@store')->middleware('auth');
Route::get('/qlist/edit/{id}','QuestionnaireController@edit')->middleware('auth');
Route::post('/qlist/{id}/update','QuestionnaireController@update')->middleware('auth');
Route::get('/qlist/{id}/delete','QuestionnaireController@destroy')->middleware('auth');
Route::get('/qlist/{id}','QuestionnaireController@show')->middleware('auth');


Route::get('/questionlist/{id}/create','QuestionController@create')->middleware('auth');
Route::post('/questionlist/store','QuestionController@store')->middleware('auth');
Route::get('/questionlist/{id}/delete','QuestionController@destroy')->middleware('auth');
Route::get('/questionlist/{id}/edit','QuestionController@edit')->middleware('auth');
Route::post('/questionlist/{id}/update','QuestionController@update')->middleware('auth');

Route::get('/quiz','QuestionnaireController@indexfront');
Route::get('/quizdet/{id}','QuestionnaireController@quizdet');
Route::get('/quizproceed/{id}','FrontController@quizproceed');
Route::get('/qlistexcel/{id}','FrontController@qlistexcel');
Route::get('/commentitexcel','FrontController@commentexcel');

Route::post('/quizres/store1','FrontController@storequizresult');
Route::post('/quiz/resultajax','FrontController@storequizresultajax');

Route::get('/search','FrontController@search');
//Route::get('/socialshare/{id}/{title}/{thumb}','FrontController@socialshare');
Route::get('/socialshare/{id}','FrontController@socialshare');


