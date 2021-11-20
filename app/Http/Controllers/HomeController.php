<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Comment;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $articles = Article::all();
        $ar=Array('articles'=>$articles);
        return view('site.home',$ar);
    }


    public function admin_index()
    {

        $articles = Article::all();
        $ar=Array('articles'=>$articles);
        return view('admin.home',$ar);
    }


    
    public function AddArticle(Request $request){
        if($request ->isMethod('post')){
           $ar = new Article();
           $file_extension = $request -> image -> getClientOriginalExtension();
           $file_name = time().'.'.$file_extension;
           $path = "upload";
           $request -> image -> move($path,$file_name);
           $ar->title=$request->input('title');
           $ar->body=$request->input('body');
           $ar->image=$file_name;
           $ar->user_id=Auth::user()->id;
           $ar->save();
           return redirect("dashboard");
        }
        return view('admin.AddArticle');
    }


    public function read(Request $request,$id){
        if($request ->isMethod('post')){
            $ar = new Comment();
            $ar->Comment=$request->input('body');
            $ar->article_id=$id;
            $ar->save();
         }
        $article = Article::find($id);
        $ar=Array('article'=>$article);
        return view('site.read',$ar);
    }
    public function DeleteArticle($id){
        $article = Article::find($id);
        $article->delete();
        return redirect("dashboard");
    }
    public function Edit(Request $request,$id){
        if($request ->isMethod('post')){
            $ar = Article::find($id);
        //     if($request->image != ''){        
        //         $path = "upload";
      
        //         //code for remove old file
        //         if($ar->image != ''  && $ar->image != null){
        //             $path = "public/upload/";
        //              $file_old = $path.$ar->image;
        //              unlink($file_old);
        //         }
      
        //         //upload new file
        //         $file = $request->image;
        //         $file_extension = $request -> image -> getClientOriginalExtension();
        //         $file_name = time().'.'.$file_extension;
        //         $request -> image -> move($path,$file_name);
      
        //         //for update in table
        //         $ar->update(['image' => $file_name]);
        //    }
        if($request->hasFile('image')) {
            $file_extension = $request -> image -> getClientOriginalExtension();
            $file_name = time().'.'.$file_extension;
            $path = "upload";
           
                $request -> image -> move($path,$file_name);

                $ar->image=$file_name;
                }
            $ar->title=$request->input('title');
            $ar->body=$request->input('body');

            $ar->user_id=Auth::user()->id;
            
            $ar->save();
            return redirect("dashboard");
        }else{
            $article = Article::find($id);
            $ar=Array('article'=>$article);
            return view('admin.edit',$ar);
        }
    }

}
