<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\Aspiration;
use Illuminate\Http\Request;

class AspirasiController extends Controller
{
    public function aspirasi(){
        return view('aspirasi',[
            'aspirations'=> Aspiration::latest()->paginate(12),
            'getNavbar' => Setting::where('type', 'navbar')->get(),
            'getFooterA' => Setting::where('type', 'footerA')->get(),
            'getFooterB' => Setting::where('type', 'footerB')->get(),
            'getFacebook' => Setting::where('type', 'facebook')->get(),
            'getInstagram' => Setting::where('type', 'instagram')->get(),
            'getYoutube' => Setting::where('type', 'youtube')->get(),
            'getTiktok' => Setting::where('type', 'tiktok')->get(),
        ]);
    }

    public function create(){
        return view('aspirasi.create',[
            'getNavbar' => Setting::where('type', 'navbar')->get(),
            'getFooterA' => Setting::where('type', 'footerA')->get(),
            'getFooterB' => Setting::where('type', 'footerB')->get(),
            'getFacebook' => Setting::where('type', 'facebook')->get(),
            'getInstagram' => Setting::where('type', 'instagram')->get(),
            'getYoutube' => Setting::where('type', 'youtube')->get(),
            'getTiktok' => Setting::where('type', 'tiktok')->get(),
        ]);
    }

    public function store(Request $request){
        $this->validate($request,[
            "sender"=> ["required"],
            "class"=> ["required"],
            "title"=> ["required"],
            "content"=> ["required"],
        ],[
            "sender.required"=> "Belum diisi",
            "class.required"=> "Belum diisi",
            "title.required"=> "Belum diisi",
            "content.required"=> "Belum diisi",
        ]);
        $aspiration = new Aspiration();
        $aspiration->sender = $request->sender;
        $aspiration->class = $request->class;
        $aspiration->title = $request->title;
        $aspiration->content = $request->content;
        
        $aspiration->save();
        session()->flash('success','Aspirasi anda berhasil dikirim.');
        return redirect()->back();
    }
}
