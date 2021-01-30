<?php
/**
 * Created by PhpStorm.
 * User: Genady
 * Date: 1/28/21
 * Time: 6:32 PM
 */
use Illuminate\Support\Facades\Route;
use App\Admin\Modules\Dashboard\DashboardController;

Route::get('/',[DashboardController::class,'index']);
