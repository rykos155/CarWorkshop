<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ClientController; 
use App\Http\Controllers\CarController; 
use App\Http\Controllers\EstimateController; 
use App\Http\Controllers\CarmodelController; 
use App\Http\Controllers\PartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\MailerController;

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

// Route::redirect('/', 'home', 301 );

Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();

Route::middleware(['auth'])->group(function() {

    Route::name('clients.')->prefix('clients')->group(function(){
        Route::get('', [ClientController::class,'index'])
            ->name('index');
        Route::get('softDeleteClients', [ClientController::class,'softDeleteClients'])
            ->name('softDeleteClients');
        Route::get('create',  [ClientController::class,'create'])
            ->name('create');
        Route::post('',  [ClientController::class,'store'])
            ->name('store');
        Route::get('{id}',  [ClientController::class,'show'])
            ->name('show')
            ->where('id', '[0-9]+');
        Route::get('{id}/edit',  [ClientController::class,'edit'])
            ->name('edit')
            ->where('id', '[0-9]+');
        Route::get('{id}/ban',  [ClientController::class,'ban'])
            ->name('ban')
            ->where('id', '[0-9]+');
        Route::patch('{id}',  [ClientController::class,'update'])
            ->name('update')
            ->where('id', '[0-9]+');
        Route::get('{id}/restore',  [ClientController::class,'restore'])
            ->name('restore')
            ->where('id', '[0-9]+');
    });

    Route::name('cars.')->prefix('cars')->group(function(){
        Route::get('', [CarController::class,'index'])
            ->name('index');
        Route::get('{id}/create',  [CarController::class,'create'])
            ->name('create')
            ->where('id', '[0-9]+');
        Route::post('{id}',  [CarController::class,'store'])
            ->name('store')
            ->where('id', '[0-9]+');
        Route::get('{id}/showOneCar',  [CarController::class,'showOneCar'])
            ->name('showOneCar')
            ->where('id', '[0-9]+');
        Route::get('{id}/show',  [CarController::class,'show'])
            ->name('show')
            ->where('id', '[0-9]+');
        Route::get('{id}/edit',  [CarController::class,'edit'])
            ->name('edit')
            ->where('id', '[0-9]+');
        Route::patch('{id}',  [CarController::class,'update'])
            ->name('update')
            ->where('id', '[0-9]+');
    });

    Route::name('estimates.')->prefix('estimates')->group(function(){
        Route::get('', [EstimateController::class,'index'])
            ->name('index');
        Route::get('{id}/create',  [EstimateController::class,'create'])
            ->name('create')
            ->where('id', '[0-9]+');
        Route::post('{id}',  [EstimateController::class,'store'])
            ->name('store')
            ->where('id', '[0-9]+');
        Route::get('{id}/instantCreate',  [EstimateController::class,'instantCreate'])
            ->name('instantCreate')
            ->where('id', '[0-9]+');
        Route::get('{id}/show',  [EstimateController::class,'show'])
            ->name('show')
            ->where('id', '[0-9]+');
        Route::get('{id}/showOneEstimate',  [EstimateController::class,'showOneEstimate'])
            ->name('showOneEstimate')
            ->where('id', '[0-9]+');
        Route::delete('{id}',  [EstimateController::class,'destroy'])
            ->name('destroy')
            ->where('id', '[0-9]+');
        Route::get('{email}/{id}/sendEmail',  [EstimateController::class,'sendEmail'])
            ->name('sendEmail')
            ->where('id', '[0-9]+');
        Route::get('{id}/generatePDFforEstimate',  [EstimateController::class,'generatePDFforEstimate'])
            ->name('generatePDFforEstimate')
            ->where('id', '[0-9]+'); 
    });

    Route::name('carmodels.')->prefix('carmodels')->group(function(){
        Route::get('', [CarmodelController::class,'index'])
            ->name('index');
        Route::get('create',  [CarmodelController::class,'create'])
            ->name('create');
        Route::post('',  [CarmodelController::class,'store'])
            ->name('store');
        Route::get('{id}',  [CarmodelController::class,'show'])
            ->name('show')
            ->where('id', '[0-9]+');
        Route::get('{id}/edit',  [CarmodelController::class,'edit'])
            ->name('edit')
            ->where('id', '[0-9]+');
        Route::patch('{id}',  [CarmodelController::class,'update'])
            ->name('update')
            ->where('id', '[0-9]+');
        Route::delete('{id}',  [CarmodelController::class,'destroy'])
            ->name('destroy')
            ->where('id', '[0-9]+');
        Route::get('{id}/getModels',  [CarmodelController::class,'getModels'])
            ->name('getModels')
            ->where('id', '[0-9]+');
    });

    Route::name('parts.')->prefix('parts')->group(function(){
        Route::get('', [PartController::class,'index'])
            ->name('index');
        Route::get('{id}/create',  [PartController::class,'create'])
            ->name('create')
            ->where('id', '[0-9]+');
        Route::post('{id}',  [PartController::class,'store'])
            ->name('store')
            ->where('id', '[0-9]+');
        Route::get('{id}/show',  [PartController::class,'show'])
            ->name('show')
            ->where('id', '[0-9]+');
        Route::get('{id}/edit',  [PartController::class,'edit'])
            ->name('edit')
            ->where('id', '[0-9]+');
        Route::patch('{id}',  [PartController::class,'update'])
            ->name('update')
            ->where('id', '[0-9]+');
        Route::delete('{id}',  [PartController::class,'destroy'])
            ->name('destroy')
            ->where('id', '[0-9]+');
        Route::get('/partToBuy',  [PartController::class,'partToBuy'])
            ->name('partToBuy');
        Route::get('{id}/orderedPart',  [PartController::class,'orderedPart'])
            ->name('orderedPart')
            ->where('id', '[0-9]+');
        Route::get('/countPartToBuy',  [PartController::class,'countPartToBuy'])
            ->name('countPartToBuy');
        Route::get('{id}/generatePDFforParts',  [PartController::class,'generatePDFforParts'])
            ->name('generatePDFforParts')
            ->where('id', '[0-9]+');
    });

    Route::name('orders.')->prefix('orders')->group(function(){
        Route::get('', [OrderController::class,'index'])
            ->name('index');
        Route::get('showActiveOrders',  [OrderController::class,'showActiveOrders'])
            ->name('showActiveOrders');
        Route::get('showPriorityOrders',  [OrderController::class,'showPriorityOrders'])
            ->name('showPriorityOrders');
        Route::get('showEndedOrders',  [OrderController::class,'showEndedOrders'])
            ->name('showEndedOrders');
        Route::get('showOrdersToday',  [OrderController::class,'showOrdersToday'])
            ->name('showOrdersToday');
        Route::get('countOrdersToday',  [OrderController::class,'countOrdersToday'])
            ->name('countOrdersToday');
        Route::get('showOrdersEndToday',  [OrderController::class,'showOrdersEndToday'])
            ->name('showOrdersEndToday');
        Route::get('countOrdersEndToday',  [OrderController::class,'countOrdersEndToday'])
            ->name('countOrdersEndToday');
        Route::get('{id}/create',  [OrderController::class,'create'])
            ->name('create')
            ->where('id', '[0-9]+');
        Route::post('{id}',  [OrderController::class,'store'])
            ->name('store')
            ->where('id', '[0-9]+');
        Route::get('{id}/show',  [OrderController::class,'show'])
            ->name('show')
            ->where('id', '[0-9]+');
        Route::get('{id}/showCar',  [OrderController::class,'showCar'])
            ->name('showCar')
            ->where('id', '[0-9]+');
        Route::get('{id}/showEnded',  [OrderController::class,'showEnded'])
            ->name('showEnded')
            ->where('id', '[0-9]+');
        Route::get('{id}/showCarHistory',  [OrderController::class,'showCarHistory'])
            ->name('showCarHistory')
            ->where('id', '[0-9]+');
        Route::get('{id}/showEndedHistory',  [OrderController::class,'showEndedHistory'])
            ->name('showEndedHistory')
            ->where('id', '[0-9]+'); 
        Route::get('{id}/edit',  [OrderController::class,'edit'])
            ->name('edit')
            ->where('id', '[0-9]+');
        Route::patch('{id}',  [OrderController::class,'update'])
            ->name('update')
            ->where('id', '[0-9]+');
        Route::get('{id}/endOrder',  [OrderController::class,'endOrder'])
            ->name('endOrder')
            ->where('id', '[0-9]+');
        Route::get('{id}/cancelOrder',  [OrderController::class,'cancelOrder'])
            ->name('cancelOrder')
            ->where('id', '[0-9]+');
        Route::get('{id}/progressOrder',  [OrderController::class,'progressOrder'])
            ->name('progressOrder')
            ->where('id', '[0-9]+');
        Route::get('{id}/getOrders',  [OrderController::class,'getOrders'])
            ->name('getOrders')
            ->where('id', '[0-9]+');
        Route::get('{id}/showOneOrder',  [OrderController::class,'showOneOrder'])
            ->name('showOneOrder')
            ->where('id', '[0-9]+');
        Route::get('{id}/generatePDFforOrder',  [OrderController::class,'generatePDFforOrder'])
            ->name('generatePDFforOrder')
            ->where('id', '[0-9]+');
    });

    Route::name('brands.')->prefix('brands')->group(function(){
        Route::get('', [BrandController::class,'index'])
            ->name('index');
        Route::get('create',  [BrandController::class,'create'])
            ->name('create');
        Route::post('',  [BrandController::class,'store'])
            ->name('store');
        Route::get('{id}/show',  [BrandController::class,'show'])
            ->name('show')
            ->where('id', '[0-9]+');
        Route::get('{id}/edit',  [BrandController::class,'edit'])
            ->name('edit')
            ->where('id', '[0-9]+');
        Route::patch('{id}',  [BrandController::class,'update'])
            ->name('update')
            ->where('id', '[0-9]+');
        Route::delete('{id}',  [BrandController::class,'destroy'])
            ->name('destroy')
            ->where('id', '[0-9]+');
    });

    Route::name('calendar.')->prefix('calendar')->group(function(){
        Route::get('', [CalendarController::class,'index'])
            ->name('index');
    });

    Route::name('users.')->prefix('users')->group(function(){
        Route::get('', [UserController::class,'index'])
            ->name('index')
            ->middleware(['permission:admin']);
        Route::post('',  [UserController::class,'store'])
            ->name('store')
            ->middleware(['permission:admin']);
        Route::get('{id}/edit',  [UserController::class,'edit'])
            ->name('edit')
            ->where('id', '[0-9]+');
        Route::get('{id}/changePasswordView',  [UserController::class,'changePasswordView'])
            ->name('changePasswordView')
            ->where('id', '[0-9]+');
        Route::get('{id}/changePassword',  [UserController::class,'changePassword'])
            ->name('changePassword')
            ->where('id', '[0-9]+');
        Route::get('{id}/formedit',  [UserController::class,'formedit'])
            ->name('formedit')
            ->where('id', '[0-9]+');
        Route::patch('{id}',  [UserController::class,'update'])
            ->name('update')
            ->where('id', '[0-9]+');
        Route::get('create',  [UserController::class,'create'])
            ->name('create')
            ->middleware(['permission:admin']);
        Route::delete('{id}',  [UserController::class,'destroy'])
            ->name('destroy')
            ->where('id', '[0-9]+');
    });

    Route::name('comments.')->prefix('comments')->group(function(){
        Route::get('', [CommentController::class,'index'])
            ->name('index');
        Route::get('{id}/edit',  [CommentController::class,'edit'])
            ->name('edit')
            ->where('id', '[0-9]+');
        Route::patch('{id}',  [CommentController::class,'update'])
            ->name('update')
            ->where('id', '[0-9]+');
        Route::post('{id}/store',  [CommentController::class,'store'])
            ->name('store');
        Route::delete('{id}',  [CommentController::class,'destroy'])
            ->name('destroy')
            ->where('id', '[0-9]+');
    });

    Route::name('services.')->prefix('services')->group(function(){
        Route::get('', [ServiceController::class,'index'])
            ->name('index');
        Route::get('{id}/create',  [ServiceController::class,'create'])
            ->name('create')
            ->where('id', '[0-9]+');
        Route::post('{id}',  [ServiceController::class,'store'])
            ->name('store')
            ->where('id', '[0-9]+');
        Route::get('{id}/show',  [ServiceController::class,'show'])
            ->name('show')
            ->where('id', '[0-9]+');
        Route::get('{id}/edit',  [ServiceController::class,'edit'])
            ->name('edit')
            ->where('id', '[0-9]+');
        Route::patch('{id}',  [ServiceController::class,'update'])
            ->name('update')
            ->where('id', '[0-9]+');
        Route::delete('{id}',  [ServiceController::class,'destroy'])
            ->name('destroy')
            ->where('id', '[0-9]+');
        Route::get('{id}/generatePDFforService',  [ServiceController::class,'generatePDFforService'])
            ->name('generatePDFforService')
            ->where('id', '[0-9]+');
        });    

    Route::name('files.')->prefix('files')->group(function(){
        Route::get('{id}/index', [FileController::class,'index'])
            ->name('index');
        Route::post('{id}/create',  [FileController::class,'create'])
            ->name('create')
            ->where('id', '[0-9]+');
        Route::delete('{id}',  [FileController::class,'destroy'])
            ->name('destroy')
            ->where('id', '[0-9]+');
        Route::get('{id}/downloadFile', [FileController::class,'downloadFile'])
            ->name('downloadFile')
            ->where('id', '[0-9]+');
        Route::delete('{id}/destroy',  [FileController::class,'destroy'])
            ->name('destroy')
            ->where('id', '[0-9]+');
        });   

    Route::get('change-password', [ChangePasswordController::class,'index']);
    Route::post('change-password', [ChangePasswordController::class,'store'])->name('change.password');

    

    //HOME PAGE
    Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    //EMAIl
    Route::get("email", [MailerController::class, "email"])->name("email");
    Route::post("{id}/send-email", [MailerController::class, "composeEmail"])->name("send-email");

});