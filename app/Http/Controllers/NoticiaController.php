<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Classificado;
use App\Models\Noticia;
use App\Models\Publicidade;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class NoticiaController extends Controller
{
    private $noticia;
    public function __construct(Noticia $noticia)
    {
        $this->noticia = $noticia;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $noticias = Noticia::orderBy('id', 'DESC')->paginate(50);
        return view('admin.pages.noticias.index', compact('noticias'));
    }

    public function categoria($slug)
    {
        $noticias = Noticia::orderBy('id', 'DESC')->paginate(50);
        return view('admin.pages.noticias.index', compact('noticias'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cat = Categoria::orderby('id', 'DESC')->get();
        return view('admin.pages.noticias.create', compact('cat'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required',
            'desc' => 'required',
            'content' => 'required',
        ]);

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('upload/noticias'), $imageName);
            $this->noticia->img = $imageName;
            $this->noticia->cat_id = $request->cat_id;
            $this->noticia->title = $request->title;
            $this->noticia->slug = Str::slug($request->title, '-');
            $this->noticia->desc = $request->desc;
            $this->noticia->content = $request->content;
            $this->noticia->save();
            return redirect()->back()->with('msg', 'Cadastrado com sucesso!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function view($slug)
    {
        $data = Noticia::where('slug', '=', $slug)->first();
        $cat = Categoria::orderBy('created_at', 'desc')->get();
        $aletoria = Noticia::inRandomOrder()->limit(5)->get();
        $outras = Noticia::offset(5)->limit(2)->get();
        $brasil = Noticia::where('cat_id', '=', 6)->latest()->limit(4)->get();
        $esporte =  Noticia::where('cat_id', '=', 5)->latest()->limit(4)->get();
        $maranhao =  Noticia::where('cat_id', '=', 2)->limit(4)->get();
        $classificados = Classificado::latest()->get();
        $cidades = Categoria::latest()->get();
        $noticiasrodape = Noticia::inRandomOrder()->limit(3)->get();
        $destaque = Noticia::inRandomOrder()->first();
        $categorias = Categoria::all();
        $random = Noticia::inRandomOrder()->limit(10)->get();
        $publicidade = Publicidade::all();
        $data = Noticia::where('slug', '=', $slug)->first();


        return view('home.pages.noticias.view', compact('data', 'cat', 'outras', 'aletoria', 'brasil', 'esporte', 'maranhao', 'classificados', 'cidades', 'noticiasrodape', 'destaque', 'categorias', 'random', 'publicidade'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $noticia = Noticia::find($id);
        $cat = Categoria::all();
        return view('admin.pages.noticias.edit', compact('noticia', 'cat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Noticia $noticia)
    {
        // upload de image
        if ($request->hasFile('img') && $request->file('img')->isValid()) {
            # code...
            $image = $request->file('img');
            // Define um aleatório para o arquivo baseado no timestamps atual
            $name = uniqid(date('HisYmd'));

            // Recupera a extensão do arquivo
            $extension = $image->extension();

            // Define finalmente o nome
            $nameFile = "{$name}.{$extension}";

            $noticia = $this->noticia->find($request->id);
            $image->move(public_path('upload/noticias'), $nameFile);
            $noticia->img = $nameFile;
            $noticia->cat_id = $request->get('cat_id');
            $noticia->title = $request->get('title');
            $noticia->desc = $request->get('desc');
            $noticia->slug = $request->get('title');
            $noticia->content = $request->get('content');
            $noticia->update();
            return redirect()->back()->with('msg', 'Edição efetuada com sucesso!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $this->noticia->destroy($id);
        return redirect()->back()->with('msg', 'Deletada com sucesso!');
    }
}
