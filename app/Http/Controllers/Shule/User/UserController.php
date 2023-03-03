<?php

namespace App\Http\Controllers\Shule\User;

use App\Models\Njia;
use App\Models\Room;
use App\Models\User;
use App\Models\Level;
use App\Models\Darasa;
use App\Models\Stream;
use App\Models\Student;
use App\Models\Vehicle;
use App\Models\Domitory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index($id=NULL)
    {
        $users=User::where('flug',1)->get();
        $njia=Njia::where('flug',1)->get();
        $level=Level::where('flug',1)->get();
        $darasa=Darasa::where('flug',1)->get();
        $stream=Stream::where('flug',1)->get();
        $vehicle=Vehicle::where('flug',1)->get();
        $domitory=Domitory::where('flug',1)->get();
        $room=Room::where('flug',1)->get();
        return view('auth.user.index',compact('users','njia','level','darasa','stream','vehicle','domitory','room'));
    }

    public function fetchClass(Request $request)
    {
        $data['darasas'] = Darasa::where("level_id", $request->level_id)->get(["name", "id"]);
        return response()->json($data);
    }
    public function fetchStream(Request $request)
    {
        $data['streams'] = Stream::where("darasa_id", $request->darasa_id)->get(["name", "id"]);
        return response()->json($data);
    }

    public function fetchVehicle(Request $request)
    {
        $data['vehicles'] = Vehicle::where("njia_id", $request->njia_id)->get(["name", "id"]);
        return response()->json($data);
    }
    public function fetchRoom(Request $request)
    {
        $data['rooms'] = Room::where("dom_id", $request->dom_id)->get(["name", "id"]);
        return response()->json($data);
    }



    public function store( Request $request) 
    {
        // $this->validate($request, [
        //     'name' => 'required',
        //     'lname' => 'required',
        //     'email' => 'required|email|unique:users,email',
        //     'password' => 'required|confirmed',
         
        // ]);
        
    
      $users=new User();
      $users->firstname=$request->firstname;
      $users->middlename=$request->middlename;
      $users->lastname=$request->lastname;
      $users->email=$request->email;
      $users->username=$request->username;
      $users->password=bcrypt($request->password);
      $users->phone=$request->phone;
        $users->user_type=$request->user_type;
      if($users->save()){
       
          if($users->user_type=='student'){
           
                
            $students = new Student;
            if($request->hasFile('image')){
                $file=$request->file('image');
                $ext=$file->getClientOriginalExtension();
                $filename=time().$ext;
                $file->move('master/assets/students/images/',$filename);
                $students->image=$filename;
            }
            if($request->hasFile('document')){
                $file=$request->file('document');
                $ext=$file->getClientOriginalExtension();
                $filename=time().$ext;
                $file->move('master/assets/students/documents/',$filename);
                $students->document=$filename;
            }
            $students->addmission_no=$request->addmission_no;
            $students->addmission_date=$request->addmission_date;
            $students->birth_date=$request->birth_date;
            $students->gender=$request->gender;
            $students->permanent_address=$request->permanent_address;
            $students->current_address=$request->current_address;
            $students->scholaring_type=$request->scholaring_type;
            $students->njia_id=$request->njia_id;
            $students->vehicle_id=$request->vehicle_id;
            $students->dom_id=$request->dom_id;
            $students->room_id=$request->room_id;
            $students->darasa_id=$request->darasa_id;
            $students->stream_id=$request->stream_id;
            $students->user_id=$users->id;
            $students->parent_id=$request->parent_id;
            $students->level_id=$request->level_id;
            $students->year_id=$request->year_id;
            $students->gender=$request->gender;
            $students->save();
                
           
            
          }
        //   if($users->user_type=='parent'){
        //     $students = Parent::create($request->all());
        //   }

      }
        return redirect()->back()
            ->with('status',"User created successfully.");
    }

    public function update()
    {
        $users->User::find($id);
        $users->name=$request->name;
        $users->email=$request->email;
        $users->username=$request->username;
        $users->password=bcrypt($request->password);
        $users->phone=$request->phone;
        $users->depart_id=$request->depart_id;
        $users->update();
        return redirect()->back()
            ->with('status',"User Updated successfully.");
    }
    public function view($id)
    {
        $users=User::find($id);
        $roles = Role::join('model_has_roles','model_has_roles.role_id' , '=', 'roles.id')
        ->where('model_has_roles.model_id',$id)
        ->get(['roles.name',]);
        return view('auth.users.assign',compact('roles','users'));
    }

  
    public function assignView($id)
    {
       $users = User::find($id);
       $roles = Role::get();
        $userRole = DB::table('model_has_roles')
        ->where('model_has_roles.model_id', $id)
        ->pluck('model_has_roles.role_id','model_has_roles.role_id')
        ->all();
        return view('auth.user.assign',compact('users','roles','userRole'));
        // return   $userRole;
    }

   

     public function assignRole(Request $request,$id)
    {
            $user=User::find($id);
            $user->name=$request->name;
            $user->email=$request->email;
            $user->username=$request->username;
            $user->phone=$request->phone;
            $user->depart_id=$request->depart_id;
            DB::table('model_has_roles')->where('model_id',$id)->delete();
            $user->assignRole($request->role);
            return redirect('/user-list')->with('status', 'Role assigned.');   
    }

  

    public function destroy($id)
    {
        $user=User::find($id);
        if ($user->hasRole('Admin')) {
            return back()->with('status', 'you are superAdmin.');
        }
        $user->flug=0;
        $user->update();
        return back()->with('status', 'User deleted.');
    }  


    public function changePassword()
{
   return view('auth.passwords.change');
}

public function updatePassword(Request $request)
{
   
        # Validation
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);

       
        #Match The Old Password
        if(!Hash::check($request->old_password, auth()->user()->password)){
            return back()->with("status", "Old Password Doesn't match!");
        }

        #Update the new Password
      User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);
        return back()->with("status", "Password changed successfully!");
}

public function activate($id)
{
    $user=User::find($id);
    if($user->status==0)
    {
        $user->status=1;
        $user->save();
        return redirect()->back()->with('status','User is Activated');  
    }elseif($user->status==1)
    {
        $user->status=0;
        $user->save();
        return redirect()->back()->with('status','User is inactive');
    }
}
}
