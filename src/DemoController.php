<?php

namespace Ravialdo\DemoPackage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DemoController extends Controller
{
    public function demo($nama){
         $data =  [
              'nama' => $nama,
          ];
            
          return view('demo::index', $data);
    }
}
