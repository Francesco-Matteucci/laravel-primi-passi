<?php

use Illuminate\Support\Facades\Route;

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

// ROUTE HOME
Route::get('/', function () {
    $name = 'Boolean';
    $pageTitle = 'Home';
    $pages = [
        ['name' => 'Home', 'url' => '/'],
        ['name' => 'About us', 'url' => 'about'],
        ['name' => 'Contact us', 'url' => 'contact']
    ];
    return view('home', compact('name', 'pages', 'pageTitle'));
});

//ROUTE ABOUT
Route::get('/about', function () {
    $pageTitle = 'About us';
    $pages = [
        ['name' => 'Home', 'url' => '/'],
        ['name' => 'About us', 'url' => 'about'],
        ['name' => 'Contact us', 'url' => 'contact']
    ];
    return view('about', compact('pages', 'pageTitle'));
});

//ROUTE CONTACT
Route::get('/contact', function () {
    $pageTitle = 'Contact us';
    $pages = [
        ['name' => 'Home', 'url' => '/'],
        ['name' => 'About us', 'url' => 'about'],
        ['name' => 'Contact us', 'url' => 'contact']
    ];
    return view('contact', compact('pages', 'pageTitle'));
});