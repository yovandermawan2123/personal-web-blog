<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use App\Models\Comment;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index(){
        $title = '';
        if(request('category')){
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }
        if(request('author')){
            $author = User::firstWhere('username', request('author'));
            $title = ' By ' . $author->name;
        }

    


        return view('posts', [
        
            "title" => "All Post" . $title,
            "active" => 'posts',
            
            // "posts" => Post::All()
            "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString()
        ]);
    }

    public function show(Post $post)
    {

        DB::table('posts')
            ->where('slug', $post->slug)
            ->increment('post_views', 1);

        return view('post', [
            "title" => "Single Post",
            "active" => 'posts',
            "post" => $post,
            "comments" => Comment::latest()->where('post_id', $post->id)->with('user')->get()
        
        ]);
        
    }

    public function store(Request $request)
    {
     $redirectPost = request('post_slug');
        $validatedData = $request->validate([
          
            "body" => "required"
        ]);

       
        
        $validatedData['post_id'] = request('post_id');
        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 100);

        Comment::create($validatedData);

        return redirect('/posts/' . $redirectPost)->with('success', 'New post has been added!');


    
}
}
