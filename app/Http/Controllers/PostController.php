<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Qna;
use App\Models\Setting;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function welcome(){
        return view('welcome',[
            'posts'=> Post::latest()->paginate(6),
            'getNavbar' => Setting::where('type', 'navbar')->get(),
            'getFooterA' => Setting::where('type', 'footerA')->get(),
            'getFooterB' => Setting::where('type', 'footerB')->get(),
            'getFacebook' => Setting::where('type', 'facebook')->get(),
            'getInstagram' => Setting::where('type', 'instagram')->get(),
            'getYoutube' => Setting::where('type', 'youtube')->get(),
            'getTiktok' => Setting::where('type', 'tiktok')->get(),
            'getQna' => Qna::all(),
        ]);
    }

    public function posts(){
        return view('post',[
            'posts'=> Post::latest()->paginate(6),
            'getNavbar' => Setting::where('type', 'navbar')->get(),
            'getFooterA' => Setting::where('type', 'footerA')->get(),
            'getFooterB' => Setting::where('type', 'footerB')->get(),
            'getFacebook' => Setting::where('type', 'facebook')->get(),
            'getInstagram' => Setting::where('type', 'instagram')->get(),
            'getYoutube' => Setting::where('type', 'youtube')->get(),
            'getTiktok' => Setting::where('type', 'tiktok')->get(),
        ]);
    }

    public function liputan(){
        return view('liputan',[
            'posts'=> Post::latest()->paginate(6),
            'getNavbar' => Setting::where('type', 'navbar')->get(),
            'getFooterA' => Setting::where('type', 'footerA')->get(),
            'getFooterB' => Setting::where('type', 'footerB')->get(),
            'getFacebook' => Setting::where('type', 'facebook')->get(),
            'getInstagram' => Setting::where('type', 'instagram')->get(),
            'getYoutube' => Setting::where('type', 'youtube')->get(),
            'getTiktok' => Setting::where('type', 'tiktok')->get(),
        ]);
    }

    public function pengumuman(){
        return view('pengumuman',[
            'posts'=> Post::latest()->paginate(6),
            'getNavbar' => Setting::where('type', 'navbar')->get(),
            'getFooterA' => Setting::where('type', 'footerA')->get(),
            'getFooterB' => Setting::where('type', 'footerB')->get(),
            'getFacebook' => Setting::where('type', 'facebook')->get(),
            'getInstagram' => Setting::where('type', 'instagram')->get(),
            'getYoutube' => Setting::where('type', 'youtube')->get(),
            'getTiktok' => Setting::where('type', 'tiktok')->get(),
        ]);
    }

    public function show(Post $post){
            return view('posts.show', [
                'post' => $post,
                'getNavbar' => Setting::where('type', 'navbar')->get(),
                'getFooterA' => Setting::where('type', 'footerA')->get(),
                'getFooterB' => Setting::where('type', 'footerB')->get(),
                'getFacebook' => Setting::where('type', 'facebook')->get(),
                'getInstagram' => Setting::where('type', 'instagram')->get(),
                'getYoutube' => Setting::where('type', 'youtube')->get(),
                'getTiktok' => Setting::where('type', 'tiktok')->get(),
            ]);
        }
    

    
}
