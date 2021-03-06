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

Route::get('/',function(){ //links (/laravel/blog/public/)
    return view('welcome'); //bleida nosaukums
});


Route::get('/contact',function(){ //links (/laravel/blog/public/contact)
    return view('contacts');
});

Route::get('/blog',function(){ //links (a href="/laravel/blog/public/blog")
    return view('blog');
});

Route::get('/blogs',function(){ //links (a href="/laravel/blog/public/blogs")
    return view('blog');
});

Route::get('/blogs/{id}',function($id){ //links (a href="/laravel/blog/public/blogs/1, <- u.t.t.")
    // $todoitem = \App\ToDoItem::find($id);  <- vienīgi šim tev vajag visus blogus datubāzē
    
    return view('blog');
});


// Route::get('/', function () {

//     $todoitem = \App\ToDoItem::get();


//     return view('list', [

//         'items' => $todoitem,
//     ]);
// });


// Route::post('/', function () {
//     $item = new \App\ToDoItem;
//     $item->body = \Request('body', 'NOTHING WAS WRITTEN');
//     $item->is_done = false;

//     $item->save();


//     $todoitem = \App\ToDoItem::get();
//     return view('list', [

//         'items' => $todoitem,
//     ]);



// });

// Route::get('/delete/{id}', function ($id){

//     $todoitem = \App\ToDoItem::find($id);

//     if ($todoitem ==null){
//         return redirect('/');
//     }

//     $todoitem->delete();


//     return redirect('/');
// });

// Route::get('/toggle/{id}', function ($id){

//     $todoitem = \App\ToDoItem::find($id);

//     if ($todoitem == null){
//         return redirect('/');
//     }

//     if ($todoitem->is_done){
//         $todoitem->is_done = false;
//     } else {
//         $todoitem->is_done = true;
//     }
//     $todoitem->save();
//     return redirect('/');
// });