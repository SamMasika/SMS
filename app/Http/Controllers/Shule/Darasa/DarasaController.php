<?php

namespace App\Http\Controllers\Shule\Darasa;

use App\Models\Level;
use App\Models\Darasa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DarasaController extends Controller
{
    public function index()
    {
        $darasa=Darasa::where('flug',1)->get();
        $level=Level::where('flug',1)->get();
        return view('shule.darasa.index',compact('darasa','level'));
    }

   
    public function store(Request $request)
    {
        $darasa = Darasa::create($request->all());
         return redirect()->back()->with('success','Class added successfully!');

    }
   
    public function update(Request $request, $id)
    {
        $darasa=Darasa::find($id)->update($request->all());
        return redirect()->back()->with('success','Class updated successfully!');
    }

    public function destroy($id)
    {
        $darasa=Darasa::find($id);
        $darasa->flug=0;
        $darasa->update();
        return redirect()->back()->with('success','Class deleted successfully!');
       
    }  
}
