<?php
use App\Models\Producto;
use App\Http\Controllers\Productos;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usuarios;
use App\Http\Controllers\Proveedores;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UsuariosController;

Route::get('/home', function () {
    return view('home');
});


Route::get('/', [Productos::class, 'index'])->name('index');
Route::get('/create', [Productos::class, 'create'])->name('create');
Route::post('/store', [Productos::class, 'store'])->name('store'); 
Route::get('/show/{id}', [Productos::class, 'show'])->name('show');
Route::get('/edit/{id}', [Productos::class, 'edit'])->name('edit');
Route::put('/update/{id}', [Productos::class, 'update'])->name('update');
Route::delete('/destroy/{id}', [Productos::class, 'destroy'])->name('destroy');

Route::get('/usuarios', [Usuarios::class, 'index'])->name('usuarios.index');
Route::get('/usuarios/create', [Usuarios::class, 'create'])->name('usuarios.create');
Route::post('/usuarios', [Usuarios::class, 'store'])->name('usuarios.store');
Route::get('/usuarios/{usuario}/show', [Usuarios::class, 'show'])->name('usuarios.show');
Route::get('/usuarios/{usuario}/edit', [Usuarios::class, 'edit'])->name('usuarios.edit');
Route::put('/usuarios/{usuario}', [Usuarios::class, 'update'])->name('usuarios.update');
Route::delete('/usuarios/{usuario}', [Usuarios::class, 'destroy'])->name('usuarios.destroy');



Route::get('/proveedores', [Proveedores::class, 'index'])->name('proveedores.index');
Route::get('/proveedores/create', [Proveedores::class, 'create'])->name('proveedores.create');
Route::post('/proveedores', [Proveedores::class, 'store'])->name('proveedores.store');
Route::get('/proveedores/{proveedor}/show', [Proveedores::class, 'show'])->name('proveedores.show');
Route::get('/proveedores/{proveedor}/edit', [Proveedores::class, 'edit'])->name('proveedores.edit');
Route::put('/proveedores/{proveedor}', [Proveedores::class, 'update'])->name('proveedores.update');
Route::delete('/proveedores/{proveedor}', [Proveedores::class, 'destroy'])->name('proveedores.destroy');







