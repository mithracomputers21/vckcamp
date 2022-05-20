<?php

use App\Http\Controllers\Admin\AssemblyController;
use App\Http\Controllers\Admin\CampController;
use App\Http\Controllers\Admin\DistrictController;
use App\Http\Controllers\Admin\HabitationController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\MemberController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\PanchayatController;
use App\Http\Controllers\Admin\ParlimentController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\StateController;
use App\Http\Controllers\Admin\UnionController;
use App\Http\Controllers\Admin\UserAlertController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\UserProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/login');

Auth::routes(['verify' => true]);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth', 'verified']], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');

    // Permissions
    Route::resource('permissions', PermissionController::class, ['except' => ['store', 'update', 'destroy']]);

    // Roles
    Route::resource('roles', RoleController::class, ['except' => ['store', 'update', 'destroy']]);

    // Users
    Route::resource('users', UserController::class, ['except' => ['store', 'update', 'destroy']]);

    // User Alert
    Route::get('user-alerts/seen', [UserAlertController::class, 'seen'])->name('user-alerts.seen');
    Route::resource('user-alerts', UserAlertController::class, ['except' => ['store', 'update', 'destroy']]);

    // States
    Route::resource('states', StateController::class, ['except' => ['store', 'update', 'destroy']]);

    // Districts
    Route::resource('districts', DistrictController::class, ['except' => ['store', 'update', 'destroy']]);

    // Unions
    Route::resource('unions', UnionController::class, ['except' => ['store', 'update', 'destroy']]);

    // Panchayats
    Route::resource('panchayats', PanchayatController::class, ['except' => ['store', 'update', 'destroy']]);

    // Habitations
    Route::resource('habitations', HabitationController::class, ['except' => ['store', 'update', 'destroy']]);

    // Assemblys
    Route::resource('assemblies', AssemblyController::class, ['except' => ['store', 'update', 'destroy']]);

    // Parliments
    Route::resource('parliments', ParlimentController::class, ['except' => ['store', 'update', 'destroy']]);

    // Camps
    Route::resource('camps', CampController::class, ['except' => ['store', 'update', 'destroy']]);

    // Members
    Route::post('members/media', [MemberController::class, 'storeMedia'])->name('members.storeMedia');
    Route::resource('members', MemberController::class, ['except' => ['store', 'update', 'destroy']]);

    // Messages
    Route::get('messages', [MessageController::class, 'index'])->name('messages.index');
    Route::post('messages', [MessageController::class, 'store'])->name('messages.store');
    Route::get('messages/inbox', [MessageController::class, 'inbox'])->name('messages.inbox');
    Route::get('messages/outbox', [MessageController::class, 'outbox'])->name('messages.outbox');
    Route::get('messages/create', [MessageController::class, 'create'])->name('messages.create');
    Route::get('messages/{conversation}', [MessageController::class, 'show'])->name('messages.show');
    Route::post('messages/{conversation}', [MessageController::class, 'update'])->name('messages.update');
    Route::post('messages/{conversation}/destroy', [MessageController::class, 'destroy'])->name('messages.destroy');
});

Route::group(['prefix' => 'profile', 'as' => 'profile.', 'middleware' => ['auth']], function () {
    if (file_exists(app_path('Http/Controllers/Auth/UserProfileController.php'))) {
        Route::get('/', [UserProfileController::class, 'show'])->name('show');
    }
});
