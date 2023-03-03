<?php

namespace App\Http\Controllers\Shule\Vehicle;

use App\Models\Njia;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VehicleController extends Controller
{
    public function index()
    {
        $vehicles=Vehicle::where('flug',1)->get();
        $njia=Njia::where('flug',1)->get();
        return view('shule.vehicle.index',compact('vehicles','njia'));
    }

   
    public function store(Request $request)
    {
        $vehicles = Vehicle::create($request->all());
         return redirect()->back()->with('success','Vehicle added successfully!');

    }
   
    public function update(Request $request, $id)
    {
        $vehicles=Vehicle::find($id)->update($request->all());
        return redirect()->back()->with('success','Vehicle updated successfully!');
    }

    public function destroy($id)
    {
        $vehicles=Vehicle::find($id);
        $vehicles->flug=0;
        $vehicles->update();
        return redirect()->back()->with('success','Vehicle deleted successfully!');
       
    }  
}
