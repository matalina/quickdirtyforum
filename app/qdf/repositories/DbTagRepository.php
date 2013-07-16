<?php namespace Matalina\Qfd\Repositories;

class DbTagRepository implements TagRepository {
    use Tag;   
 
    public function all()
    {
        return Tag::all();
    }
    
    public function find($id)
    {
        return Tag::find($id);
    }
}