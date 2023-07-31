<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddTask;
use App\Models\Task;

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
  
});
Route::get('/AddFatora/{id}', function ($id) {
    $task=Task::find($id);
    return view('AddFatora',['task'=>$task]);
});
Route::get('/ShowFiles', [AddTask::class, 'ShowFiles']);
Route::view('/start', 'userheader');
Route::view('/Addtask', 'Add-task');
Route::post('/Addtask', [AddTask::class,'AddTask']);
Route::post('/AddFatora/{id}', [AddTask::class,'AddFatora']);
Route::get('/search', [AddTask::class, 'search']);
Route::get('/edit_fatora/{id}', [AddTask::class, 'edit_fatora']);
Route::post('/editFatora/{id}', [AddTask::class, 'editFatora']);
Route::get('/delete_fatora/{id}', [AddTask::class, 'delete_fatora']);
Route::get('/showfatora/{id}', [AddTask::class, 'showdetails']);
