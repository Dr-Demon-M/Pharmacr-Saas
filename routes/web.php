<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('saas.dashboard');
})->name('dashboard');
Route::get('/pos', function () {
    return view('saas.pos');
})->name('pos');
Route::get('/sales', function () {
    return view('saas.sales');
})->name('sales');
Route::get('/products', function () {
    return view('saas.products');
})->name('products');
Route::get('/customers', function () {
    return view('saas.customers');
})->name('customers');
Route::get('/stock', function () {
    return view('saas.stock');
})->name('stock');
Route::get('/expire', function () {
    return view('saas.expire');
})->name('expire');
Route::get('/activity', function () {
    return view('saas.activity');
})->name('activity');
Route::get('/reports', function () {
    return view('saas.reports');
})->name('reports');
Route::get('/users', function () {
    return view('saas.users');
})->name('users');
Route::get('/purchases', function () {
    return view('saas.purchases');
})->name('purchases');
Route::get('/suppliers', function () {
    return view('saas.suppliers');
})->name('suppliers');
Route::get('/settings', function () {
    return view('saas.settings');
})->name('settings');
