<?php

app()->singleton('App\Services\Twitter', function () {
  return new \App\Services\Twitter('adsfjalk;sfdj;alkn');
});

Route::get('/', function () {
    // dd(app('App\Example'));

    return view('welcome');
});

Route::resource('projects', 'ProjectsController');

Route::post('/projects/{project}/tasks', 'ProjectTasksController@store');
Route::post('/completed-tasks/{task}', 'CompletedTasksController@store');
Route::delete('/completed-tasks/{task}', 'CompletedTasksController@destroy');
