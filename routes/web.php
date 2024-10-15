<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\blogcontroller;
use App\Http\Controllers\blogfrontcontroller;
use App\Http\Controllers\contactcontroller;
use App\Http\Controllers\contectcontroller;
use App\Http\Controllers\herocontroller;
use App\Http\Controllers\Menucontroller;
use App\Http\Controllers\Menudesertcontroller;
use App\Http\Controllers\Menudesertfrontcontroller;
use App\Http\Controllers\Menudinnercontroller;
use App\Http\Controllers\Menudinnerfrontcontroller;
use App\Http\Controllers\Menuformcontroller;
use App\Http\Controllers\Menulunchcontroller;
use App\Http\Controllers\Menulunchfrontendcontroller;
use App\Http\Controllers\ReservationController;

use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::post('/reserve-table', [ReservationController::class, 'store']);
    //  Frontend Routes 

  Route::get('/home',[herocontroller::class,'get_data'])->name('data');
  Route::get('/menu',[Menucontroller::class,'menus'])->name('menu');
  Route::get('/menus',[Menucontroller::class,'menu'])->name('menus');
  Route::get('/contact-us',[contactcontroller::class,'form_contact'])->name('contact-us');
 
  Route::get('/menu-lunch',[Menulunchfrontendcontroller::class,'menus'])->name('menu-lunch');
  Route::get('/menu-dinner',[Menudinnerfrontcontroller::class,'menus'])->name('menu-dinner');
  Route::get('/menu-desert',[Menudesertfrontcontroller::class,'menus'])->name('menu-desert');
  Route::get('/blogs',[blogfrontcontroller::class,'get_data'])->name('blogs-data');
 // Route for Admin 
 Route::group(['prefix' => 'admin'], function() {
     Route::get('/menu-form', [Menuformcontroller::class, 'form'])->name('menu-form');
     Route::post('/submit-menu-form', [Menuformcontroller::class, 'store'])->name('submit-menu-form');
     Route::get('/menu-data', [Menuformcontroller::class, 'get_data'])->name('menu-data');
     Route::get('/edit-data/{id}',[Menuformcontroller::class,'edit'])->name('edit-data');
     Route::post('/update-data/{id}',[Menuformcontroller::class,'update'])->name('update-data');
                          //   Lunch        
             Route::get('/menu-lunch', [Menulunchcontroller::class, 'form'])->name('menu-lunch-form');
             Route::post('/submit-menu-lunch', [Menulunchcontroller::class, 'store'])->name('submit-menu-lunch');
             Route::get('/menu-lunch-data', [Menulunchcontroller::class, 'get_data'])->name('menu-lunch-data');
             Route::get('/edit-data/{id}',[Menulunchcontroller::class,'edit'])->name('edit-data');
             Route::post('/update-data/{id}',[Menulunchcontroller::class,'update'])->name('update-data');
 
             // Dinner
             Route::get('/menu-dinner-form', [Menudinnercontroller::class, 'form'])->name('menu-dinner-form');
             Route::post('/submit-menu-dinner', [Menudinnercontroller::class, 'store'])->name('submit-menu-dinner');
             Route::get('/menu-dinner-data', [Menudinnercontroller::class, 'get_data'])->name('menu-dinner-data');
             Route::get('/edit-data/{id}',[Menudinnercontroller::class,'edit'])->name('edit-data');
             Route::post('/update-data/{id}',[Menudinnercontroller::class,'update'])->name('update-data');
             Route::post('/delete/{id}',[Menudinnercontroller::class,'delete'])->name('delete-data');
                         // Desert
            Route::get('/menu-desert-form', [Menudesertcontroller::class, 'form'])->name('menu-desert-form');     
            Route::post('/submit-menu-desert', [Menudesertcontroller::class, 'store'])->name('submit-menu-desert');  
            Route::get('/menu-desert-data', [Menudesertcontroller::class, 'get_data'])->name('menu-desert-data');
            Route::get('/edit-data/{id}',[Menudesertcontroller::class,'edit'])->name('edit-data');
            Route::post('/update-data/{id}',[Menudesertcontroller::class,'update'])->name('update-data');
            Route::post('/delete/{id}',[Menudesertcontroller::class,'delete'])->name('delete-data');
 
                             // Blog
           Route::get('/blog-form', [blogcontroller::class, 'form'])->name('blog-form');     
           Route::post('/submit-blog', [blogcontroller::class, 'store'])->name('submit-blog');  
           Route::get('/blog-data', [blogcontroller::class, 'get_data'])->name('blog-data');
           Route::get('/edit-data/{id}',[blogcontroller::class,'edit'])->name('edit-data');
           Route::post('/update-data/{id}',[blogcontroller::class,'update'])->name('update-data');
           Route::delete('/delete/{id}',[blogcontroller::class,'delete'])->name('delete-data');

 
 });      


 Route::get('rel',[contectcontroller::class,'index']);
});

require __DIR__.'/auth.php';
