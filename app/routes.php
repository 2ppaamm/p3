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