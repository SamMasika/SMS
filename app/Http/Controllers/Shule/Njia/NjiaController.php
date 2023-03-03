<?php

namespace App\Http\Controllers\Shule\Njia;

use App\Models\Njia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NjiaController extends Controller
{
    public function index(){

        $njia=Njia::where('flug',1)->get();
        return view('shule.njia.index',compact('njia',));
    }

public function store(Request $request)
{
    $njia = Njia::create($request->all());
     return redirect()->back()->with('success','Route added successfully!');

}

public function update(Request $request, $id)
{
    $njia=Njia::find($id)->update($request->all());
    return redirect()->back()->with('success','Route updated successfully!');
}

public function destroy($id)
{
    $njia=Njia::find($id);
    $njia->flug=0;
    $njia->update();
    return redirect()->back()->with('success','Route deleted successfully!');
   
}  

}
