<?php

namespace App\Http\Controllers\Shule\Domitory;

use App\Models\Domitory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DomitoryController extends Controller
{
    public function index()
    {
        $dom=Domitory::where('flug',1)->get();
        return view('shule.domitory.index',compact('dom'));
    }

   
    public function store(Request $request)
    {
        $dom = Domitory::create($request->all());
         return redirect()->back()->with('status','Domitory added successfully!');

    }
   
    public function update(Request $request, $id)
    {
        $dom=Domitory::find($id)->update($request->all());
        return redirect()->back()->with('status','Domitory updated successfully!');
    }

    public function destroy($id)
    {
        $dom=Domitory::find($id);
        $dom->flug=0;
        $dom->update();
        return redirect()->back()->with('status','Domitory deleted successfully!');
       
    }
}
