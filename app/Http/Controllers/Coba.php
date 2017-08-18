<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Coba extends Controller
{
    //

    public function getCobaCoba(){
        $data['halo'] = "halo2";
        $data['arrays'] = array("one","two");


        $text = ' sdifjsdioj fsj sd fsd';
        return  view('coba',$data);
    }

    public function postCobaCoba(){

    }



}
