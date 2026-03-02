<?php

use App\Livewire\Login;
use App\Livewire\Pages\Content\Create;
use App\Livewire\Pages\Dashboard\Content;
use App\Livewire\Pages\Dashboard\Index;
use App\Livewire\Pages\Dashboard\Profile;
use App\Livewire\Pages\Dashboard\Settings;
use App\Livewire\Pages\Index as PagesIndex;
use Illuminate\Support\Facades\Route;

Route::get('/', PagesIndex::class);
Route::get('/login', Login::class);
Route::get('/dashboard', Index::class);
Route::get('/dashboard/content', Content::class);
Route::get('/dashboard/content/create', Create::class);
Route::get('/dashboard/profile', Profile::class);
Route::get('/dashboard/settings', Settings::class);
