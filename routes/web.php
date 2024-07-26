<?php

use App\Http\Controllers\CategoriaClassificadosController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ClassificadoController;
use App\Http\Controllers\DenunciaController;
use App\Http\Controllers\DepoimentoController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PublicidadeController;
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
Route::get('noticias/{slug}', [NoticiaController::class, 'view'])->name('home.pages.noticias.view');
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
Route::get('denuncia/store', [DenunciaController::class, 'store'])->name('home.pages.denuncia.store');


Route::get('download/', [HomeController::class, 'download'])->name('home.pages.download');

Route::get('/dashboard', function () {
    $noticias = Noticia::latest()->get();
    return view('admin.pages.noticias.index', compact('noticias'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    //categoria
    Route::get('/admin/categorias', [CategoriaController::class, 'index'])->name('admin.pages.categoria.index');
    Route::get('/admin/categorias/create', [CategoriaController::class, 'create'])->name('admin.pages.categoria.create');
    Route::post('/admin/categorias/store', [CategoriaController::class, 'store'])->name('admin.pages.categoria.store');
    Route::get('admin/categorias/edit/{id}', [CategoriaController::class, 'edit'])->name('admin.pages.categorias.edit')->middleware(['auth']);;
    Route::post('/admin/categoria/update', [CategoriaController::class, 'update'])->name('admin.pages.categoria.update');
    Route::get('admin/categoria/delete/{id}', [CategoriaController::class, 'destroy'])->name('admin.pages.categoria.destroy')->middleware(['auth']);

    //licitacoes e contratos
    Route::get('/admin/licitacoes', [LicitacoeController::class, 'index'])->name('admin.licitacoes.index');
    Route::get('/admin/licitacoes/create', [LicitacoeController::class, 'create'])->name('admin.licitacoes.create');
    Route::post('/admin/licitacoes/store', [LicitacoeController::class, 'store'])->name('admin.licitacoes.store');
    Route::delete('admin/licitacoes/delete/{id}', [LicitacoeController::class, 'destroy'])->name('admin.licitacoes.destroy');
    //categoria
    Route::get('/admin/categoria', [CategoriaController::class, 'index'])->name('admin.pages.categoria.index');
    Route::get('/admin/categoria/create', [CategoriaController::class, 'create'])->name('admin.pages.categoria.create');
    Route::post('/admin/categoria/store', [CategoriaController::class, 'store'])->name('admin.pages.categoria.store');
    Route::delete('admin/categoria/delete/{id}', [CategoriaController::class, 'destroy'])->name('admin.pages.categoria.destroy');
    //noticias
    Route::get('/admin/noticias', [NoticiaController::class, 'index'])->name('admin.pages.noticias.index');
    Route::get('/admin/noticias/create', [NoticiaController::class, 'create'])->name('admin.pages.noticias.create');
    Route::get('/admin/noticias/edit/{}', [NoticiaController::class, 'edit'])->name('admin.pages.noticias.edit');
    Route::post('/admin/noticias/store', [NoticiaController::class, 'store'])->name('admin.pages.noticias.store');
    Route::delete('admin/noticias/delete/{id}', [NoticiaController::class, 'destroy'])->name('admin.pages.noticias.destroy');

    //classificados
    Route::get('/admin/classificados', [ClassificadoController::class, 'index'])->name('admin.pages.classificados.index');
    Route::get('/admin/classificados/create', [ClassificadoController::class, 'create'])->name('admin.pages.classificados.create');
    Route::post('/admin/classificados/store', [ClassificadoController::class, 'store'])->name('admin.pages.classificados.store');
    Route::delete('admin/classificados/delete/{id}', [ClassificadoController::class, 'destroy'])->name('admin.pages.classificadosdestroy');

     //categorias classificados
     Route::get('/admin/classificados/categorias', [CategoriaClassificadosController::class, 'index'])->name('admin.pages.classificados.categoria.index');
     Route::post('/admin/classificados/categorias/store', [CategoriaClassificadosController::class, 'store'])->name('admin.pages.classificados.categoria.store');
     Route::delete('/admin/classificados/destroy/{id}', [CategoriaClassificadosController::class, 'destroy'])->name('admin.pages.classificados.categoria.destroy');
 
    //publicidade
    Route::get('/admin/publicidade', [PublicidadeController::class, 'index'])->name('admin.pages.publicidade.index');
    Route::get('/admin/publicidade/create', [PublicidadeController::class, 'create'])->name('admin.pages.publicidade.create');
    Route::get('admin/publicidade/edit/{id}', [PublicidadeController::class, 'edit'])->name('admin.pages.publicidade.edit');
    Route::post('/admin/publicidade/store', [PublicidadeController::class, 'store'])->name('admin.pages.publicidade.store');
    Route::post('/admin/publicidade/update', [PublicidadeController::class, 'update'])->name('admin.pages.publicidade.update');
    Route::get('admin/publicidade/delete/{id}', [PublicidadeController::class, 'destroy'])->name('admin.pages.publicidade.destroy');

    //depoimentos
    Route::get('/admin/depoimento', [DepoimentoController::class, 'index'])->name('admin.pages.depoimento.index');
    Route::get('/admin/depoimento/create', [DepoimentoController::class, 'create'])->name('admin.pages.depoimento.create');
    Route::post('/admin/depoimento/store', [DepoimentoController::class, 'store'])->name('admin.pages.depoimento.store');
    Route::get('admin/depoimento/delete/{id}', [DepoimentoController::class, 'destroy'])->name('admin.pages.depoimento.destroy');

    //denuncia
    Route::get('/admin/denuncia', [DenunciaController::class, 'index'])->name('admin.pages.denuncia.index');
    Route::get('/admin/denuncia/create', [DenunciaController::class, 'create'])->name('admin.pages.denuncia.create');
    Route::post('/admin/denuncia/store', [DenunciaController::class, 'store'])->name('admin.pages.denuncia.store');
    Route::delete('admin/denuncia/delete/{id}', [DenunciaController::class, 'destroy'])->name('admin.pages.denuncia.destroy');

    //portaria
    Route::get('/admin/portaria', [PortariasController::class, 'index'])->name('admin.portaria.index');
    Route::get('/admin/portaria/create', [PortariasController::class, 'create'])->name('admin.portaria.create');
    Route::post('/admin/portaria/store', [PortariasController::class, 'store'])->name('admin.portaria.store');
    //contatos
    Route::get('/admin/contatos', [ContatoController::class, 'index'])->name('admin.pages.contatos.index');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
