<?php

namespace App\Http\Controllers\Shule\Stream;

use App\Models\Darasa;
use App\Models\Stream;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StreamController extends Controller
{
    public function index()
    {
        $stream=Stream::where('flug',1)->get();
        $darasa=Darasa::where('flug',1)->get();
        return view('shule.stream.index',compact('stream','darasa'));
    }

   
    public function store(Request $request)
    {
        $stream = Stream::create($request->all());
         return redirect()->back()->with('success','Stream added successfully!');

    }
   
    public function update(Request $request, $id)
    {
        $stream=Stream::find($id)->update($request->all());
        return redirect()->back()->with('success','Stream updated successfully!');
    }

    public function destroy($id)
    {
        $stream=Stream::find($id);
        $stream->flug=0;
        $stream->update();
        return redirect()->back()->with('success','Stream deleted successfully!');
       
    }  
}
