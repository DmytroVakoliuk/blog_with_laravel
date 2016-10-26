<?php

namespace App\Http\Controllers;

//use DB;
use App\Post;

use Illuminate\Http\Request;
use Session;

use App\Http\Requests;

//use Symfony\Component\HttpFoundation\Session\Session;

class PostController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $posts = \DB::table('posts')->where('id',1)->get();
//        $posts = DB::table('posts')->take(5)->orderBy('title')->get();
        $prosts = Post::orderBy('title')->take(5)->get();

//        return view('posts.index', compact('posts'));
        return view('posts.index')->withPosts($prosts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate the data
        $this->validate($request, [
            'title' => 'bail|required|unique:posts|max:255',
            'body' => 'required|min:10'
        ]);

        // store in the database
        $post = new Post;

        $post->title = $request->title;
        $post->body = $request->body;

        $post->save();// save into the database

//        Session::flash('key', 'value');
        Session::flash('success', 'The blog was successfully saved!');
//        Session::put('success', 'The blog was successfully saved!');

        // redirect to another page (may be index, show or else)
        return redirect()->route('posts.show', $post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        // $post = Post::find($id);

        return view('posts.show')->withPost($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //find the post in DB and save as variable
        $post = Post::find($id);
        //return the view and pass in the var we previously created
        return view('posts.edit')->withPost($post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //Validate data
        $this->validate($request, [
            'title' => 'bail|required|max:255',
            'body' => 'required'
        ]);

        //Save the data to DB
        $post->update($request->except('_token', '_method'));
        Session::flash('success', 'This post was successfully changed!');
        //Redirect to posts.show
        return redirect()->route('posts.show', $post->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);

        $post->delete();

        Session::flash('success', 'The blog was successfully deleted!');

        return redirect()->route('posts.index');
    }
}
;