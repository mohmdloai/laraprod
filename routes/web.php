<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;


//
//Route::get('/', function () {
////    $jobs = Job::all();
////    dd($jobs[0]->salary);
//    return view('home');
//});

Route::get('/test', function () {
    return new \App\Mail\JobPosted();
});

Route::view('/', 'home');
Route::view('/contact','contact');


Route::get('/jobs', [JobController::class,'index']);
Route::get('/jobs/create', [JobController::class,'create']);
Route::post('/jobs', [JobController::class,'store'])->middleware(['auth']);
Route::get('jobs/{job}', [JobController::class,'show']);
Route::get('jobs/{job}/edit', [JobController::class,'edit'])
    ->middleware(['auth'])
    ->can('edit','job');

Route::patch('jobs/{job}', [JobController::class,'update'])
    ->middleware(['auth'])
    ->can('update-job','job');


Route::delete('jobs/{job}', [JobController::class,'destroy'])
    ->middleware(['auth'])
    ->can('delete-job','job');



// Auth
Route::get('/register',[RegisteredUserController::class,'create']);
Route::post('/register',[RegisteredUserController::class,'store']);

Route::get('/login',[SessionController::class,'create'])->name('login');
Route::post('/login',[SessionController::class,'store']);
Route::post('/logout',[SessionController::class,'destroy']);










//Route::controller(JobController::class)->group(function () {
//    Route::get('/jobs','index');
//    Route::get('/jobs/create','create');
//    Route::get('/jobs/{job:id}','show');
//    Route::POST('/jobs','store');
//    Route::patch('/jobs/{job}','update');
//    Route::get('/jobs/{job}/edit','edit');
//    Route::delete('/jobs/{job}','destroy');
//});
//



//Route::get('/contact', function () {
//    return view('contact');
//});


//Index



//Route::get('/jobs', function () {
//    $jobs = Job::with('employer')->latest()->cursorPaginate(3);
//    return view('jobs.index',[
//        'jobs'=>$jobs         //fetAll()
//    ]);
//})->name('jobs');

//create
//Route::get('jobs/create', function () {
//    return view('jobs.create');
//});

// To show a Job

//Route::get('/jobs/{job:id}', function (Job $job) {

//        $job = Job::find($id);
//    Arr::first($jobs, function ($value) use ($id) {
//    $job = Arr::first(Job::fetAll(), fn($job) => $job['id'] ==$id);

//    return view('jobs.show',['job'=>$job]);
//        return $value['id'] == $id;

//    return view('contact');
//});

// Store


//Route::post('/jobs', function () {
//    // validation
//    request()->validate([
//        'title' => ['required', 'min:3'],
//        'salary' => ['required',],
//    ]);
//
//
//    Job::create([
//        'title' => request('title'),
//        'salary' => request('salary'),
//        'employer_id' => 1,
//    ]);
//    return redirect('/jobs');
//});
//Edit

//Route::get('/jobs/{job}/edit', function (Job $job) {
////    $job = Job::find($id);
//    return view('jobs.edit',['job'=>$job]);
//});
//Update

//Route::patch('/jobs/{job}', function (Job $job) {
//    //validate
//    request()->validate([
//        'title' => ['required', 'min:3'],
//        'salary' => ['required',]]);
//    //authorise
//    //update the job
////    $job = Job::findOrFail($id);
////    $job->title = request('title');
////    $job->salary = request('salary');
////    $job->save();
//    $job->update([
//        'title' => request('title'),
//        'salary' => request('salary'),
//
//    ]);
//    // and perist
//    // redirect to job page
//    return redirect('/jobs/'. $job->id);
//
//
//});

//Route::delete('/jobs/{job}', function (Job $job) {
//   // authorise
//    // delete
////    $job = Job::findOrfail($id);
//    $job->delete();
//    // redirect
//    return redirect('/jobs');
//
//
//});

