
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return redirect('/dashboard');
});

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/dashboard/create', [DashboardController::class, 'create']);

Route::post('/dashboard', [DashboardController::class, 'store']);

Route::get('/dashboard/{id}/edit', [DashboardController::class, 'edit']);

Route::put('/dashboard/{id}', [DashboardController::class, 'update']);

Route::delete('/dashboard/{id}', [DashboardController::class, 'destroy']);
