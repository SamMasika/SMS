<?php

namespace App\Http\Controllers\Shule\Level;

use App\Models\Level;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LevelController extends Controller
{
    public function index()
    {
        $levels=Level::where('flug',1)->get();
        return view('shule.level.index',compact('levels',));
    }

   
    public function store(Request $request)
    {
        $levels = Level::create($request->all());
         return redirect()->back()->with('success','Level added successfully!');

    }
   
    public function update(Request $request, $id)
    {
        $levels=Level::find($id)->update($request->all());
        return redirect()->back()->with('success','Level updated successfully!');
    }

    public function destroy($id)
    {
        $levels=Level::find($id);
        $levels->flug=0;
        $levels->update();
        return redirect()->back()->with('success','Level deleted successfully!');
       
    }  
 
}
