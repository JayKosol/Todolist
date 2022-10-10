<?php

use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
//search data
Route::get('/{search?}', function ($search=null){
    $tasks=DB::table('tasks')->get();
    if($search!=null){
        $tasks=DB::table('tasks')->where('status',$search)->get();
    }
    return view('form')->with('tasks',$tasks);
});
//add data into database table
Route::post('add-task',function(Request $request){
    $detail=$request->input('task');
    $status=$request->input('status');
    $data=compact('detail','status');
    if(DB::table('tasks')->insert($data))
    return redirect('/');
});
//edit row data information
Route::get('task-edit/{id?}', function($id){
    if(!$id) return abort(404);
    $tasks=DB::table('tasks')->where('id',$id)->first();
    if($tasks)
    return view('edit')->with('task',$tasks);
});
// update data back from edit
Route::put('task-edit/{id?}',function(Request $req,$id){
    $detail=$req->input('detail');
    $status=$req->input('status');
    $data=compact('detail','status');
    if(DB::table('tasks')->where('id',$id)->update($data));
    return redirect('/');
});
// delete data from database table
Route::delete('task-delete/{id}',function($id){
    if(DB::table('tasks')->where('id',$id)->delete())
        return redirect('/');
});
// select one row by id
Route::get('task-view/{id}',function($id){
    if(!$id) return abort(404);
    $task=DB::table('tasks')->where('id',$id)->first();
    if($task){
        return view('detail')->with('task',$task);
    }
});