<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Classificado;
use App\Models\Denuncia;
use App\Models\Noticia;
use Illuminate\Http\Request;

class DenunciaController extends Controller
{
    private $denuncia;
    public function __construct(Denuncia $denuncia)
    {
        $this->denuncia = $denuncia;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // menu
        $brasil = Noticia::where('cat_id', '=', 6)->latest()->limit(4)->get();
        $esporte =  Noticia::where('cat_id', '=', 5)->latest()->limit(4)->get();
        $maranhao =  Noticia::where('cat_id', '=', 2)->limit(4)->get();
        $classificados = Classificado::latest()->get();
        $cidades = Categoria::latest()->get();
        $noticiasrodape = Noticia::inRandomOrder()->limit(3)->get();
        $destaque = Noticia::inRandomOrder()->first();
        $cat = Categoria::orderBy('created_at', 'desc')->get();
        $categorias = Categoria::all();

        return view('home.pages.denuncie.index', compact('cat', 'brasil', 'esporte', 'maranhao', 'classificados', 'cidades', 'noticiasrodape', 'destaque', 'categorias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function pagamento()
    {
        $cat = Categoria::orderBy('created_at', 'desc')->get();
        return view('home.pages.pagamento.index', compact('cat'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'assunto' => 'required',
            'denuncia' => 'required',
        ]);
        $this->denuncia->assunto = $request->assunto;
        $this->denuncia->denuncia = $request->denuncia;
        $this->denuncia->save();
        return redirect()->back()->with('msg', 'Denuncia enviada com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Denuncia $denuncia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Denuncia $denuncia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Denuncia $denuncia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Denuncia $denuncia)
    {
        //
    }
}
