<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use App\Models\Job;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');
Route::view('/contact', 'contact');
// Route::resource('jobs', JobController::class)->middleware('auth');
Route::get('/jobs', [JobController::class, 'index']);
Route::get('/jobs/create', [JobController::class, 'create']);
Route::post('/jobs', [JobController::class, 'store'])->middleware('auth');
Route::get('/jobs/{job}', [JobController::class, 'show']);

Route::get('/jobs/{job}/edit', [JobController::class, 'edit'])->middleware('auth')->can('edit', 'job');
Route::patch('/jobs/{job}', [JobController::class, 'update']);
Route::delete('/jobs/{job}', [JobController::class, 'destroy']);


// Auth
Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/login', [SessionController::class, 'create'])->name('login');
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);

// Route::get('/', function () {
//     return view('home', [
//         'greeing' => 'hi',
//         'name' => 'donggun',
//     ]);
// });

// Route::controller(JobController::class)->group(function () {
//     Route::get('/jobs', 'index');
//     Route::get('/jobs/create', 'create');
//     Route::get('/jobs/{job}', 'show');
//     Route::post('/jobs', 'store');
//     Route::get('/jobs/{job}/edit', 'edit');
//     Route::patch('/jobs/{job}', 'update');
//     Route::delete('/jobs/{job}', 'destory');
// });

// Route::resource('jobs', JobController::class, [
//     'except' => ['edit']
// ]);



// jobs
// Route::get('/jobs', function () {
//     $jobs = Job::with('employer')->latest()->simplePaginate(3);
//     return view('jobs.index', [
//         'jobs' => $jobs,
//     ]);
// });

// create
// Route::get('/jobs/create', function () {
//     return view('jobs.create');
// });

// show
// Route::get('/jobs/{job}', function (Job $job) {
//     // $job = Job::find($id);
//     return view('jobs.show', ['job' => $job]);
// });

// store
// Route::post('/jobs', function () {
//     request()->validate([
//         'title' => ['required', 'min:3'],
//         'salary' => ['required'],
//     ]);

//     Job::create([
//         'title' => request('title'),
//         'salary' => request('salary'),
//         'employer_id' => 1,
//     ]);

//     return redirect('/jobs');
// });

// Edit
// Route::get('/jobs/{job}/edit', function (Job $job) {
//     // $job = Job::find($id);

//     return view('jobs.edit', ['job' => $job]);
// });

// Update
// Route::patch('/jobs/{job}', function (Job $job) {
//     // authorize

//     // validate
//     request()->validate([
//         'title' => ['required', 'min:3'],
//         'salary' => ['required'],
//     ]);


//     // update the job (two way)
//     // $job = Job::findOrFail($id);

//     // $job->title = request('title');
//     // $job->salary = request('salary');
//     // $job->save();

//     $job->update([
//         'title' => request('title'),
//         'salary' => request('salary'),
//     ]);

//     // redireect to the job page 
//     return redirect('/jobs/' . $job->id);
// });

// Destory
// Route::delete('/jobs/{job}', function (Job $job) {
//     // authorize

//     //delete the job

//     // $job = Job::findOrFail($id);
//     $job->delete();
//     // Job::findOrFail($id)->delete();
//     return redirect('/jobs');
// });


// Route::get('/contact', function () {
//     return view('contact');
// });
