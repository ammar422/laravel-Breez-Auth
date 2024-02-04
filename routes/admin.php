<?php


use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


route::name('admin.')->group(function () {
    route::middleware('isAdmin')->group(function () {
        route::view('dashboard', 'adminAuth.dashboard');
    });
    require __DIR__ . '/adminAuth.php';
});
