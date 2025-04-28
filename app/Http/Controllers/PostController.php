<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new post.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created post in storage.
     */
    public function store(Request $request)
    {
        // Validate request data
        $validated = $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        // Create post using validated data
        Post::create($validated);

        // Redirect with success message
        return redirect()->route('posts.index')
                         ->with('success', 'Post created successfully.');
    }

    /**
     * Display the specified post.
     */
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified post.
     */
    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified post in storage.
     */
    public function update(Request $request, Post $post)
    {
        // Validate request data
        $validated = $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        // Update post with validated data
        $post->update($validated);

        // Redirect with success message
        return redirect()->route('posts.index')
                         ->with('success', 'Post updated successfully.');
    }

    /**
     * Remove the specified post from storage.
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        // Redirect with success message
        return redirect()->route('posts.index')
                         ->with('success', 'Post deleted successfully!');
    }
}
