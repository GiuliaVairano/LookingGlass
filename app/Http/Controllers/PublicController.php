<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;


class PublicController extends Controller
{
    public function home(){
        return view('welcome');
    }
    public $services = [
            [
                'id'=>'1',
                'title'=>'Reframe',
                'type'=>'lorem ipsum',
                'price'=>'500\900',
                'img'=>'/img/serv/3.png',
            ],
            [
                'id'=>'2',
                'title'=>'Professional Clean',
                'type'=>'dolor sit amet',
                'price'=>'100',
                'img'=>'/img/serv/2.png',
            ],
            [
                'id'=>'3',
                'title'=>'Interior Design',
                'type'=>'quosque faciam id',
                'price'=>'390',
                'img'=>'/img/serv/1.png',
            ],   
        ];
    public function services(){
        return view ('serv.services',['services'=> $this->services]);
}
public function serviceId($serviceId) {
    foreach($this->services as $service){
        if ($serviceId == $service['id']){
            return view ('serv.showServices',['service' => $service]);
    }
}abort (404,'not found');
}

}