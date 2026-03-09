<?php

use App\Livewire\Pages\Index;
use App\Livewire\Pages\Dashboard\Index as Dashboard;
use App\Livewire\Pages\Dashboard\Hero;
use App\Livewire\Pages\Dashboard\About;
use App\Livewire\Pages\Dashboard\Education;
use App\Livewire\Pages\Dashboard\Workexp;
use App\Livewire\Pages\Dashboard\Projects;
use App\Livewire\Pages\Dashboard\Contact;
use Illuminate\Support\Facades\Route;


Route::get('/', Index::class)->name('home');
Route::get('/dashboard', Dashboard::class)->name('dashboard');
Route::get('/dashboard/hero', Hero::class)->name('dashboard.hero');
Route::get('/dashboard/about', About::class)->name('dashboard.about');
Route::get('/dashboard/education', Education::class)->name('dashboard.edu');
Route::get('/dashboard/work-experiences', Workexp::class)->name('dashboard.work');
Route::get('/dashboard/projects', Projects::class)->name('dashboard.projects');
Route::get('/dashboard/contact', Contact::class)->name('dashboard.contact');
