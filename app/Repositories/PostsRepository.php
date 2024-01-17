<?php

namespace App\Repositories;

use App\Models\Post;

class PostsRepository
{
    protected $post;

    /**
     * Constructor for the class.
     *
     * @param Post $post The post object.
     */
    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    /**
     * Retrieve all posts.
     *
     * @return array
     */
    public function all()
    {
        // Call the all() method on the post object and return the result.
        return $this->post->all();
    }

    /**
     * Find a post by its ID.
     *
     * @param int $id The ID of the post to find.
     * @return \App\Models\Post The found post.
     *
     * @throws \Illuminate\Database\Eloquent\ModelNotFoundException if the post is not found.
     */
    public function find($id)
    {
        return $this->post->findOrFail($id);
    }

    /**
     * Create a new resource using the given data.
     *
     * @param array $data The data to create the resource.
     * @return mixed The newly created resource.
     */
    public function create(array $data)
    {
        // Delegate the creation of the resource to the post service.
        return $this->post->create($data);
    }

    /**
     * Update a post by its ID
     *
     * @param int $id The ID of the post to update
     * @param array $data The data to update the post with
     * @return Post The updated post
     */
    public function update($id, array $data)
    {
        // Find the post by its ID
        $post = $this->post->findOrFail($id);

        // Update the post with the provided data
        $post->update($data);

        // Return the updated post
        return $post;
    }

    /**
     * Delete a post by its ID.
     *
     * @param int $id The ID of the post to delete.
     * @return Post|null The deleted post, or null if not found.
     */
    public function delete($id)
    {
        // Find the post by its ID
        $post = $this->post->findOrFail($id);

        // Delete the post
        $post->delete();

        // Return the deleted post
        return $post;
    }
}
