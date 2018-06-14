<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Requests\StorePost;
use Image;
use Auth;
use Storage;
use App;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::with('user')->get()->sortByDesc("created_at");
        return view("admin.post.index", compact("posts"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.post.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePost $request)
    {
        $request->validated();

        $post = new Post;
        $post->titre = $request->titre;
        $post->contenu = $request->contenu;
        $post->user_id = Auth::user()->id;

        // $post->image = App::make('ImageResize')->resizeStore($request->image);



        if($post->save()){
            return redirect()->route('posts.index')->with([
                "status"=> "success",
                "message"=> trans("notification.post_store")
                ]);
        }else{
            return redirect()->route('posts.index')->with([
                "status"=> "danger",
                "message"=> trans("notification.post_store_error")
                ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('admin.post.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $this->authorize('update',$post);
        return view("admin.post.edit",compact("post"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(StorePost $request, Post $post)
    {
        $this->authorize('update',$post);

        $post->titre = $request->titre;
        $post->contenu = $request->contenu;
        if ($request->image != null){
            App::make('ImageResize')->imageDelete($post->image);
            $post->image = App::make('ImageResize')->imageStore§($request->imge);

        }
        if($post->save()){
            return redirect()->route('posts.show',['post'=> $post->id])->with([
                "status"=> "success",
                "message"=> trans("notification.post_update")
                ]);
        }else{
            return redirect()->route('posts.show',['post'=> $post->id])->with([
                "status"=> "danger",
                "message"=> trans("notification.post_store_error")
                ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $this->authorize('delete', $post);
        if($post->delete()){
            App::make('ImageResize')->imageDelete($post->image);
            return redirect()->route('posts.index')->with([
                "status"=> "success",
                "message"=> trans("notification.post_delete")
                ]);
            }else{
            return redirect()->route('posts.index')->with([
                "status"=> "danger",
                "message"=> trans("notification.post_store_error")
                ]);
        }
    }
}
