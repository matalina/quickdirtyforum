<?php namespace Matalina\Qfd\Repositories;

class DbPostRepository implements PostRepository {
    use Post;   
 
    public function all()
    {
        return Post::all();
    }
    
    public function find($id)
    {
        return Post::find($id);
    }
}