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
// public function list() {
//      $goods = digital::all();
//      return view('digital.list',compact('goods' , $goods));
// }
// public function create(){
//      return view('digital.create');
// }
//    public function store(Request $request)
//  {
//  $goods = new digital();

//         $goods->title = $request->input('title');
//         $goods->price = $request->input('price');

//         if ($request->hasfile('picture')) {
//             $file = $request->file('picture');
//             $extension = $file->getClientOriginalExtension(); 
//             $filename = time() . '.' . $extension;
//             $file->move('images/', $filename);
//             $goods->picture = $filename;
//         } else {
//             return $request;
//             $goods->picture = '';
//         }
//        $goods->save();
//        return redirect()->back()->with('success', 'App Setting Added');
//  }
   public function details($id) {
      $good = digital::find($id);
      return view('details',[ 'good' => $good]);
 }
 public function shop($id) {
     $good = digital::find($id);
     return view('shop',[ 'good' => $good]);
}
}
