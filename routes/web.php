<?php

use App\Livewire\Login;
use App\Livewire\Pages\Content\Create;
use App\Livewire\Pages\Dashboard\Content;
use App\Livewire\Pages\Dashboard\Index;
use App\Livewire\Pages\Dashboard\Profile;
use App\Livewire\Pages\Dashboard\Settings;
use App\Livewire\Pages\Index as PagesIndex;
use App\Livewire\Pages\Portal;
use Illuminate\Support\Facades\Route;

Route::get('/', PagesIndex::class);
Route::get('/portal', Portal::class);
Route::get('/login', Login::class);

Route::group(['prefix' => 'project'], function () {
    Route::get('/', function () {
        return ('halo project');
    })->name('project.index');
});
Route::group(['prefix' => 'profile'], function () {
    Route::get('/dashboard', Index::class)->name('profile.index');
    Route::get('/dashboard/content', Content::class)->name('profile.content');
    Route::get('/dashboard/content/create', Create::class)->name('profile.content.create');
    Route::get('/dashboard/content/edit/{id}', Create::class)->name('profile.content.edit');
    Route::get('/dashboard/profile', Profile::class)->name('profile.profile');
    Route::get('/dashboard/settings', Settings::class)->name('profile.settings');
    Route::get('/dashboard/signout', function () {
        return ('halo signout');
    })->name('profile.signout');
});
Route::group(['prefix' => 'expense'], function () {
    Route::get('/', function () {
        return ('halo expense');
    })->name('expense.index');
});
