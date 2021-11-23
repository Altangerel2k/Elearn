
//job Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('job','\App\Http\Controllers\JobController');
  Route::post('job/{id}/update','\App\Http\Controllers\JobController@update');
  Route::get('job/{id}/delete','\App\Http\Controllers\JobController@destroy');
  Route::get('job/{id}/deleteMsg','\App\Http\Controllers\JobController@DeleteMsg');
});

//feedback Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('feedback','\App\Http\Controllers\FeedbackController');
  Route::post('feedback/{id}/update','\App\Http\Controllers\FeedbackController@update');
  Route::get('feedback/{id}/delete','\App\Http\Controllers\FeedbackController@destroy');
  Route::get('feedback/{id}/deleteMsg','\App\Http\Controllers\FeedbackController@DeleteMsg');
});

//comment Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('comment','\App\Http\Controllers\CommentController');
  Route::post('comment/{id}/update','\App\Http\Controllers\CommentController@update');
  Route::get('comment/{id}/delete','\App\Http\Controllers\CommentController@destroy');
  Route::get('comment/{id}/deleteMsg','\App\Http\Controllers\CommentController@DeleteMsg');
});

//questionnaire Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('questionnaire','\App\Http\Controllers\QuestionnaireController');
  Route::post('questionnaire/{id}/update','\App\Http\Controllers\QuestionnaireController@update');
  Route::get('questionnaire/{id}/delete','\App\Http\Controllers\QuestionnaireController@destroy');
  Route::get('questionnaire/{id}/deleteMsg','\App\Http\Controllers\QuestionnaireController@DeleteMsg');
});

//question Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('question','\App\Http\Controllers\QuestionController');
  Route::post('question/{id}/update','\App\Http\Controllers\QuestionController@update');
  Route::get('question/{id}/delete','\App\Http\Controllers\QuestionController@destroy');
  Route::get('question/{id}/deleteMsg','\App\Http\Controllers\QuestionController@DeleteMsg');
});

Route::group(['middleware'=> 'web'],function(){
});
//lessoncategory Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('lessoncategory','\App\Http\Controllers\LessoncategoryController');
  Route::post('lessoncategory/{id}/update','\App\Http\Controllers\LessoncategoryController@update');
  Route::get('lessoncategory/{id}/delete','\App\Http\Controllers\LessoncategoryController@destroy');
  Route::get('lessoncategory/{id}/deleteMsg','\App\Http\Controllers\LessoncategoryController@DeleteMsg');
});
