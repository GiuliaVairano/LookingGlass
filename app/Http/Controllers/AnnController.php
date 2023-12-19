<?php

namespace App\Http\Controllers;



use App\Models\Announcement;
use Illuminate\Http\Request;
use App\Http\Requests\AnnRequest;

class AnnController extends Controller
{

    public function index(){

        $announcements = Announcement::all();
        return view('Ann.index', compact('announcements'));
    }   

    public function show($id){
        $announcement = Announcement::where('id',$id)->get();
        return view('Ann.show', compact('announcement'));
    }

    public function create(){
        return view('Ann.create');
    }

    public function store(AnnRequest $request){

        $price_request = $request->input('price');
        $title_request = $request->input('title');
        $body_request = $request->input('body');
        $img_request = $request->file('img');

        $announcements = Announcement::create(
            ['price'=>$price_request,
            'title'=> $title_request,
            'body'=>$body_request,
            'img'=>$img_request->store('public/img')]

        );
        return redirect(route('Ann.create'))->with('message','Thanks for your announcement');

    }


}