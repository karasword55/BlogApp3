<?php

namespace Modules\BlogModule\Repository;
use Modules\BlogModule\Repository\IBlogRepository;
//use Illuminate\Http\Request;
use Modules\BlogModule\Entities\Blog;

class BlogRepository implements IBlogRepository {

    public function getAll(){

        return Blog::getAll();

    }

    public function createBlog(Request $req){
        return Blog::createBlog($req);
    }

    public function editBlog($id){
        return Blog::editBlog($id);
    }

    public function deleteBlog($id){
        return Blog::deleteBlog($id);
    }

    public function updateBlog($req,$id){
        
        Blog::updateBlog($req,$id);
        
    }

    public function storeBlog($req){
        Blog::storeBlog($req);
    }


    

}
?>