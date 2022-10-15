<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Postagen;
use App\Models\user;
use App\Models\User as ModelsUser;
//use Auth;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    //
    public function index(){
        $classPosts=Postagen::class;
        
        $users=User::all();  
        $postController = $this;   
        $auth= new Auth;
        
        $search = request('search');
        
        if($search){
            $posts = Postagen::where([
                ['title','like','%'.$search.'%']
            ])->get();    
        }else{
            $posts=Postagen::all(); 
        }

        return view('index',['posts'=>$posts,'users'=>$users,'classPosts'=>$classPosts,'auth'=>$auth, 'postController'=>$postController]);

    }

    public function create(){
        return view('postagens.criar');
    }

    public function store(Request $request){
        /*estancia uma noca classe postagen*/
        $post= new Postagen;
    
        /* monta os dados a serem salvos no db*/
        $post->titulo=$request->title;
        $post->descricao=$request->description;
        $post->conteudo=$request->cont;
        $post->editor = Auth::user()->id;
        $post->data_criacao = date('Y-m-d');
        $post->hora_criacao = date('H:i:s');
        $post->private=$request->private;
       

        // upload file

        /*salva os dados do form  no db*/
        $post->save();
        
        return redirect('/')->with('msg', 'Nova publicação criada com sucesso!!'); // redireciona o usuario para a pagina index da aplicação
        
    }


    public function show($id){
        $post = Postagen::findOrFail($id);
        $controller = $this;
        return view('postagens.show',['post'=>$post, 'postController'=>$controller]);
    }

    public function editor(Postagen $posts){
        $users = User::all(); 
        foreach( $users as $users ){
            if($users->id == $posts->editor){
                return $users->name;
            }
        }
    }
}
