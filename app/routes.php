<?php

//Homepage
Route::get('/', function()
{
    return View::make('p3.index');
});

// p3 assignment routes

Route::controller('p3', 'p3Controller');

// p2 assignment routes

Route::get('/p2', function() {
    return View::make('p2.index');
});

Route::get('/p1', function(){
    return View::make('p1.index');
});


//Display the form for a new post
Route::get('/add', function(){

});

// Add a mew post
Route::post('/add', function(){

});

// Display the form to edit the post
Route::get('/edit/{title}', function($title){

});

// Edit a post
Route::post('/edit/', function(){

});

Route::post('/add', function(){

});

// p3 specific routes
Route::get('/p3', function(){
    return View::make('p3.index');
});

//p3 passing to p3Controller to generate
Route::get('/p3/list/{query?}', 'p3Controller@showPara');

// Posts routes
Route::resource('posts', 'postsController');






Route::get("/data",function(){
    // get posts from the database
    $posts = Post::all();
    // convert to json (though we don't need
    $posts = json_decode($posts,true);
    //returns the posts in the database
    echo Pre::render($posts);
});