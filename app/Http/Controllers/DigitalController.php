<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\digital;

class DigitalController extends Controller
{
   public function list() {
        $goods = digital::all();
        return view('digitalgoods',[ 'goods' => $goods]);
   }
}
