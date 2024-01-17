<?php

namespace App\Http\Controllers;

use App\Repositories\PostsRepository;
use Illuminate\Http\Request;

class PostController extends Controller
{
    protected $postsRepository;

    /**
     * Constructor for the class.
     *
     * @param PostsRepository $postsRepository An instance of the PostsRepository class.
     */
    public function __construct(PostsRepository $postsRepository)
    {
        $this->postsRepository = $postsRepository;
    }

    /**
     * Display the index page.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        // Retrieve all posts from the repository
        $posts = $this->postsRepository->all();

        // Render the index view with the retrieved posts
        return view('posts.index', compact('posts'));
    }

    /**
     * Display the specified post.
     *
     * @param  int  $id The ID of the post
     * @return \Illuminate\View\View The view with the post details
     */
    public function show($id)
    {
        // Find the post with the given ID
        $post = $this->postsRepository->find($id);

        // Return the view with the post details
        return view('posts.show', compact('post'));
    }

    /**
     * Display the form to create a new post.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        // Render the 'posts.create' view and return it
        return view('posts.create');
    }

    /**
     * Store a new post.
     *
     * @param  Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Validate the request data
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        // Create a new post using the validated data
        $post = $this->postsRepository->create($data);

        // Redirect to the show page of the created post
        return redirect()->route('posts.show', $post->id);
    }

    /**
     * Edit a post.
     *
     * @param int $id The ID of the post to edit.
     * @return \Illuminate\View\View The view for editing the post.
     */
    public function edit($id)
    {
        // Find the post by its ID
        $post = $this->postsRepository->find($id);

        // Return the view for editing the post
        return view('posts.edit', compact('post'));
    }

    /**
     * Update a post.
     *
     * @param Request $request The request object.
     * @param int $id The ID of the post to update.
     * @return Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        // Validate the request data
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        // Update the post
        $post = $this->postsRepository->update($id, $data);

        // Redirect to the post show page
        return redirect()->route('posts.show', $post->id);
    }

    /**
     * Delete a post by its ID
     *
     * @param int $id The ID of the post to delete
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        // Delete the post from the repository
        $this->postsRepository->delete($id);

        // Redirect the user to the posts index page
        return redirect()->route('posts.index');
    }
}
