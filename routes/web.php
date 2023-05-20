<?php

use App\Http\Controllers\ComplaintsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ResponsesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentcontroller;
use App\Models\Complaints;
use App\Models\responses;
use Illuminate\Http\Request;
 
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('website.index');
// });

Route::get('/userdashboard', function () {
    // return view('dashboard');
    return  view('students.index');
})->middleware(['auth', 'verified'])->name('dashboard');

///when you have logged in

Route::middleware('auth')->group(function () {


    Route::get('/contact', function () {
        return view('website.contact.index');
    });

    ///students routes
    // Route::get('/student',function() {
        
    // });

    Route::get('/totalcomplaints',[studentcontroller::class,'totalcomplaints']);

    Route::get('/responses',[studentcontroller::class,'responses']);

    Route::get('/pendingcompliants',[studentcontroller::class,'pendingcompliants']);

    Route::get('/userdashboard',[studentcontroller::class,'userdashboard']);

    Route::get('/studentmarks',[studentcontroller::class,'marksindex']);

    Route::post('/postmarks',[studentcontroller::class,'storemarks']);
    
    Route::get('/studentregistration',[studentcontroller::class,'registrationindex']);

    Route::post('/postregistration',[studentcontroller::class,'storeregistration']);
    
    Route::get('/studenttuition',[studentcontroller::class,'tutionindex']);

    Route::post('/posttution',[studentcontroller::class,'storetution']);
    
    
    
    




    // Route::resource("/student", studentcontroller::class);
    // Route::resource('/sent', ComplaintsController::class);
    // Route::resource('/inbox', ResponsesController::class);
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


////admindashboard




//admin route functions only
Route::get('/marks',function(){
    return view('admin.complaints.marks.index');
});

Route::get('/registration',function(){
    return view('admin.complaints.registration.index');
});

Route::get('/tuition',function(){
    return view('admin.complaints.tution.index');
});

Route::get('/admin',function() {
    $total=Complaints::count();
    return  view('student.index',['total'=>$total]);
});

require __DIR__.'/auth.php';
