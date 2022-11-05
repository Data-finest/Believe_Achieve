<?php

use App\Http\Livewire\GetMembersComponent;
use App\Http\Livewire\MemberComponent;
use Illuminate\Support\Facades\Route;

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

Route::get('/', GetMembersComponent::class)->name('home');

Route::prefix('member')->name('member.')->group(function () {
    Route::get('upload', MemberComponent::class)->name('upload');
});
