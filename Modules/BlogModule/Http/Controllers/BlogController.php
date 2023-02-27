<?php

namespace Modules\BlogModule\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\BlogModule\Repository\IBlogRepository;

class BlogController extends Controller
{

    public $blog;

    public function __construct(IBlogRepository $blog){

        $this->blog= $blog;
    }

    public function getAllBlogs(){
        
        $blogs= $this->blog->getAll();

        return view('blogmodule::layouts.homeblog')->with('blogs',$blogs);
    }

    public function editBlog($id){
        $specificBlog= $this->blog->editBlog($id);
        //return view('blogmodule::layouts.editblog')->with('blog',$specificBlog);
        return view('blogmodule::layouts.editblog')->with('blog',$specificBlog);
    }

    public function updateBlog(Request $req,$id){

        /*if($this->blog->updateBlog($req,$id)=='1'){
            return redirect('admin')->with('success','Data Updated');
        }else{
            return redirect('admin')->with('failure','Data have not been Updated');
        }*/

        //return redirect('blogmodule::layouts.homeblog')->with('success','Data Updated');
        //$blogs= $this->blog->getAll();
        
        
        //return view('blogmodule::layouts.homeblogforadmin')->with('blogs','$blogs');
        //return redirect('blogmodule::layouts.homeblogforadmin');
        print_r($req);
        $this->blog->updateBlog($req,$id);
        return redirect('admin');

    }

    public function deleteBlog($id){

        $this->blog->deleteBlog($id);
        

        return redirect('admin')->with('başarılı','data have been deleted');
       
        
    }

    public function createBlog(Request $req){
        

        return view('blogmodule::layouts.createPost');
    }


    public function storeBlog(Request $req){
        $this->blog->storeBlog($req);

        return redirect('admin');
    }


    
    
    
    
}
