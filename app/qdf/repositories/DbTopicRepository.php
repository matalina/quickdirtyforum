<?php namespace Matalina\Qfd\Repositories;

class DbTopicRepository implements TopicRepository {
    use Topic;   
 
    public function all()
    {
        return Topic::all();
    }
    
    public function find($id)
    {
        return Topic::find($id);
    }
}