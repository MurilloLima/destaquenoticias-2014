<?php

use App\Http\Controllers\ClassificadoController;
use App\Http\Controllers\DenunciaController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\ProfileController;
use App\Models\Noticia;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home.pages.index');
Route::get('sobre/', [HomeController::class, 'sobre'])->name('home.pages.sobre.index');
Route::get('noticias/', [HomeController::class, 'noticias'])->name('home.pages.noticias.index');
Route::get('/{slug}', [NoticiaController::class, 'view'])->name('home.pages.noticias.view');
Route::get('portarias/', [HomeController::class, 'portaria'])->name('home.pages.portarias.index');
Route::get('contatos/', [HomeController::class, 'contatos'])->name('home.pages.contatos.index');
Route::post('contatos/store', [HomeController::class, 'store'])->name('home.pages.contato.store');
Route::get('licitacao/', [HomeController::class, 'licitacao'])->name('home.pages.licitacao.index');
// classificados
Route::get('classificados/', [HomeController::class, 'classificados'])->name('home.pages.classificados.index');
Route::get('classificados/{slug}', [ClassificadoController::class, 'show'])->name('home.pages.show');

// registro
Route::post('cliente/store', [HomeController::class, 'store'])->name('home.pages.register.store');

//denuncia
Route::get('denuncia/create', [DenunciaController::class, 'create'])->name('home.pages.denuncia.create');
Route::get('denuncia/store', [DenunciaController::class, 'store'])->name('home.pages.denuncia.store');

Route::get('/dashboard', function () {
    $noticias = Noticia::latest()->get();
    return view('admin.pages.noticias.index', compact('noticias'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
