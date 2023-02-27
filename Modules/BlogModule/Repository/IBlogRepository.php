<?php

namespace Modules\BlogModule\Repository;

interface IBlogRepository{
    public function getAll();
    public function createBlog(Request $req);
    public function editBlog($id);
    public function deleteBlog($id);
    public function updateBlog(Request $req,$id);
}

?>