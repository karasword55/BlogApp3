<?php

namespace Modules\BlogModule\Entities;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    //$incrementing = true
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'header',
        'content',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        /*'password',
        'remember_token',*/
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static function createBlog(Request $req){
        
    }

    public static function getAll(){

        return $blogs = DB::select('SELECT * FROM blogs');
    }

    public static function editBlog($id){
        $specificBlog= DB::select('select * from blogs where id= ?',[$id]);
        return $specificBlog;
    }

    public static function updateBlog(Request $req,$id){

        //$success='0';
        
        
        $baslik= $req->input('header');
        $icerik= $req->input('content');

        DB::update('update blogs set  header = ?, content = ? where id=?',
        [ $baslik, $icerik,$id]);
        //$success='1';
        

        
    }

    public static function deleteBlog($id){
        $success='0';
        try{
            DB::select('delete from blogs where id= ?',[$id]);
            $success='1';
            return $success;
        }catch(Exception $e){
            $success='0';
            return $success;
        }
        
    }

    public static function storeBlog(Request $req){
        $baslik= $req->input('header');
        $icerik= $req->input('content');

        DB::select('insert into blogs (header, content) values (?, ?)',[$baslik,$icerik]);
    }
}
