<?php

// p3 assignment routes
Route::get('/p3', function(){
    return View::make('p3.index');
});

//p3 passing to p3Controller to generate
Route::get('/p3/list/{query?}', 'p3Controller@showPara');

























//Homepage
Route::get('/', function()
{
	return View::make('index');
});

//List all the posts / search
Route::get('/list/{format?}', function($format = 'html'){
    if(strtolower($format) =='json') {
        return 'JSON Version';
    }
    elseif(strtolower($format) == 'pdf') {
        return 'PDF Version';
    }
    else {
        return View::make('posts.index')
            ->with('name','Susan');
    }
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