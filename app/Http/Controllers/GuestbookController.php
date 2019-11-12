<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guestbook;
class GuestbookController extends Controller
{
    public function index(){
        $guestbooks = Guestbook::latest()->get();
        return view('index',['guestbooks' => $guestbooks]);
    }
    public function store(Request $request){
        Guestbook::create([
            'name' => $request->name,
            'message' => $request->message
        ]);

        return redirect()->back();
    }
}
