<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ExternalController;
use App\Http\Controllers\ExternalStatusController;
use App\Http\Controllers\InternalStatusController;
use App\Http\Controllers\InternalController;
use App\Http\Controllers\ExternalRouteController;
use App\Http\Controllers\InternalRouteController;
use App\Http\Controllers\ProExRouteController;
use App\Http\Controllers\ProInRouteController;
use App\Http\Controllers\HoldExRouteController;
use App\Http\Controllers\HoldInRouteController;
use App\Http\Controllers\DoneExRouteController;
use App\Http\Controllers\DoneInRouteController;
use App\Http\Controllers\DocIdExController;
use App\Http\Controllers\DocIdInController;
use App\Http\Controllers\DocIdExRouteController;
use App\Http\Controllers\DocIdInRouteController;
use App\Http\Controllers\QrCodeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Livewire\Files\Forward\ForwardDocs;
use App\Http\Livewire\Files\Forward\ForwardInDocs;
use App\Http\Controllers\CreateNewController;
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

// Route::group(['middleware' => [
//     'auth:sanctum',
//     'verified',
//     'accessrole'
// ]], function () {

//     Routeget::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');

// });


Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Auth::routes();

// Guest Users: RouteServiceProvider::NEWEMPLOYEE //
Route::view('guest','livewire.home');

// Active Users: RouteServiceProvider::HOME //
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route Middleware //
Route::group(['middleware' => ['can:user-view']], function () {

    // Create New Document External //
    Route::get('/docs/e/create', function () {
        return view('livewire.docs.e.create');
    });

    // Create New Document Internal //
    Route::get('/docs/i/create', function () {
        return view('livewire.docs.i.create');
    });

    // My Files - Table //
    Route::get('/files/external', [ExternalController::class, 'index'])->name('external.index');
    Route::get('/files/internal', [InternalController::class, 'index'])->name('internal.index');

    // Graph - Table //
    Route::get('/files/department/external', [ExternalStatusController::class, 'ex_department'])->name('department.external.index');
    Route::get('/files/department/internal', [InternalStatusController::class, 'in_department'])->name('department.internal.index');
    Route::get('/files/department/ead', [ExternalStatusController::class, 'exroute_department'])->name('department.ead.index');
    Route::get('/files/department/iad', [InternalStatusController::class, 'inroute_department'])->name('department.iad.index');

    Route::get('/files/office/external', [ExternalStatusController::class, 'ex_office'])->name('office.external.index');
    Route::get('/files/office/internal', [InternalStatusController::class, 'in_office'])->name('office.internal.index');
    Route::get('/files/office/ead', [ExternalStatusController::class, 'exroute_office'])->name('office.ead.index');
    Route::get('/files/office/iad', [InternalStatusController::class, 'inroute_office'])->name('office.iad.index');

    Route::get('/files/div-unit/external', [ExternalStatusController::class, 'ex_div_unit'])->name('div-unit.external.index');
    Route::get('/files/div-unit/internal', [InternalStatusController::class, 'in_div_unit'])->name('div-unit.internal.index');
    Route::get('/files/div-unit/ead', [ExternalStatusController::class, 'exroute_div_unit'])->name('div-unit.ead.index');
    Route::get('/files/div-unit/iad', [InternalStatusController::class, 'inroute_div_unit'])->name('div-unit.iad.index');

    // Files - View //
    Route::resource('files', DocIdExController::class);
    Route::get('/files/ev/{id}', [DocIdExController::class, 'display'])->name('ev.index');
    Route::get('/files/ev/edit/{id}', [DocIdExController::class, 'edit'])->name('edit.edit');
    Route::put('/files/ev/update/{id}', [DocIdExController::class, 'update'])->name('ev.update');
    Route::get('/files/ev/print/{id}', [DocIdExController::class, 'print'])->name('print.print');
    Route::get('/files/ev/pdf/{id}', [DocIdExController::class, 'createPDF']);
    Route::post('delete-document', [DocIdExController::class,'destroy'])->name('delete-document');

    Route::resource('files', DocIdInController::class);
    Route::get('/files/iv/{id}', [DocIdInController::class, 'display'])->name('iv.index');
    Route::get('/files/iv/edit/{id}', [DocIdInController::class, 'edit'])->name('edit.edit');
    Route::put('/files/iv/update/{id}', [DocIdInController::class, 'update'])->name('iv.update');
    Route::get('/files/iv/print/{id}', [DocIdInController::class, 'print'])->name('print.print');
    Route::get('/files/iv/pdf/{id}', [DocIdInController::class, 'createPDF']);
    Route::post('delete-document', [DocIdInController::class,'destroy'])->name('delete-document');

    // Files Route - Dashboard Table //
    Route::get('/files/n/external', [ExternalRouteController::class, 'index'])->name('n.external.index');
    Route::get('/files/n/internal', [InternalRouteController::class, 'index'])->name('n.internal.index');

    Route::get('/files/p/external', [ProExRouteController::class, 'index'])->name('p.external.index');
    Route::get('/files/p/internal', [ProInRouteController::class, 'index'])->name('p.internal.index');

    Route::get('/files/h/external', [HoldExRouteController::class, 'index'])->name('h.external.index');
    Route::get('/files/h/internal', [HoldInRouteController::class, 'index'])->name('h.internal.index');

    Route::get('/files/d/external', [DoneExRouteController::class, 'index'])->name('d.external.index');
    Route::get('/files/d/internal', [DoneInRouteController::class, 'index'])->name('d.internal.index');

    Route::get('/files/a/external', [ExternalRouteController::class, 'assigned_total'])->name('a.external.index');
    Route::get('/files/a/internal', [InternalRouteController::class, 'assigned_total'])->name('a.internal.index');

    // Files Route - View //
    Route::get('/files/ev/{dts_no}', [ExternalRouteController::class], 'displayroute')->name('ev.index');
    Route::get('/files/forward/exroute/edit/{id}', [DocIdExRouteController::class, 'edit'])->name('edit.exroute.edit');
    Route::put('/files/forward/exroute/update/{id}', [DocIdExRouteController::class, 'update'])->name('forward.exroute.update');
    Route::put('/files/forward/exroute/open/{id}', [DocIdExRouteController::class, 'open'])->name('forward.exroute.open');
    Route::get('/files/forward/exroute/print/{id}', [DocIdExRouteController::class, 'print'])->name('print.print');
    Route::get('/files/forward/exroute/pdf/{id}', [DocIdExRouteController::class, 'createPDF']);

    Route::get('/files/iv/{dts_no}', [InternalRouteController::class], 'displayroute')->name('iv.index');
    Route::get('/files/forward/inroute/edit/{id}', [DocIdInRouteController::class, 'edit'])->name('edit.inroute.edit');
    Route::put('/files/forward/inroute/update/{id}', [DocIdInRouteController::class, 'update'])->name('forward.inroute.update');
    Route::put('/files/forward/inroute/open/{id}', [DocIdInRouteController::class, 'open'])->name('forward.inroute.open');
    Route::get('/files/forward/inroute/print/{id}', [DocIdInRouteController::class, 'print'])->name('print.print');

    // Qr Code
    Route::get('/files/ev/qrcode/{id}', [QrCodeController::class, 'externalqr']);
    Route::get('/files/iv/qrcode/{id}', [QrCodeController::class, 'internalqr']);
});

// User Roles and Permissions
Route::group(['middleware' => ['auth']], function() {
    Route::resource('/admin/roles', RoleController::class);
    Route::resource('/admin/users', UserController::class);
});

?>