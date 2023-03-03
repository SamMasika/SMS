<?php

namespace App\Http\Controllers\Shule\Room;

use App\Models\Room;
use App\Models\Domitory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoomController extends Controller
{
    public function index()
    {
        $rooms=Room::where('flug',1)->get();
        $dom=Domitory::where('flug',1)->get();
        return view('shule.room.index',compact('rooms','dom'));
    }

   
    public function store(Request $request)
    {
        $rooms = Room::create($request->all());
         return redirect()->back()->with('success','Room added successfully!');

    }
   
    public function update(Request $request, $id)
    {
        $rooms=Room::find($id)->update($request->all());
        return redirect()->back()->with('success','Room updated successfully!');
    }

    public function destroy($id)
    {
        $rooms=Room::find($id);
        $rooms->flug=0;
        $rooms->update();
        return redirect()->back()->with('success','Room deleted successfully!');
       
    }  
 
}
