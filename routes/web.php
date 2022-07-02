<?php
    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\HolaController;
    use App\Http\Controllers\AlumnoController;
    Route::get('/', function () {
        return view('welcome');
    });
    
    Route::get('/hola', [HolaController::class, 'index'] )->name('hola');
    Route::get('/alumnos', [AlumnoController::class, 'index'])->name('alumnos.index');
    Route::get('/alumnos/create', [AlumnoController::class, 'create'])->name('alumnos.create');
    Route::post('/alumnos/store', [AlumnoController::class, 'store'])->name('alumnos.store');
    Route::post('/alumnos/edit', [AlumnoController::class, 'edit'])->name('alumnos.edit');
    Route::delete('/alumnos/destroy/{cod_estudiante}', [AlumnoController::class, 'destroy'])->name('alumnos.destroy');
    Route::get('/alumnos/view/{cod_estudiante}', [AlumnoController::class, 'view'])->name('alumnos.view');
    Route::get('/alumnos/viewdelete/{cod_estudiante}', [AlumnoController::class, 'viewdelete'])->name('alumnos.viewdelete');