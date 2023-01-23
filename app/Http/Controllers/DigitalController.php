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
   public function details() {
      $goods = digital::all();
      return view('details',[ 'goods' => $goods]);
 }
}
