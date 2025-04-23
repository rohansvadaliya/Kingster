<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\JobDetailsController;
use App\Livewire\Pages\Dashboard;
use App\Livewire\Pages\Jobs\{Index,Create};
use App\Livewire\Pages\Skills\{Index as SkillsIndex};
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::redirect('/', '/admin/dashboard');

// Dashboard
Route::get('/dashboard', Dashboard::class)->name('dashboard');

// Skills
Route::get('/skills', SkillsIndex::class)->name('skills.index');
Route::post('/skill/records', [SkillController::class, 'records'])->name('skill.records');
Route::get('/skill/single/records', [SkillController::class, 'singleRecords'])->name('skill.single.records');
Route::post('/skill/save', [SkillController::class, 'save'])->name('skill.save');
Route::get('/skill/delete', [SkillController::class, 'delete'])->name('skill.delete');
Route::get('/skill/lists', [SkillController::class, 'lists'])->name('skill.lists');

// Jobs
Route::get('/jobs', Index::class)->name('jobs.index');
Route::get('/jobs/create', Create::class)->name('jobs.create');

Route::post('/job/records', [JobDetailsController::class, 'records'])->name('job.records');
Route::get('/job/single/records', [JobDetailsController::class, 'singleRecords'])->name('job.single.records');
Route::post('/job/save', [JobDetailsController::class, 'save'])->name('job.save');
Route::get('/job/delete', [JobDetailsController::class, 'delete'])->name('job.delete');

