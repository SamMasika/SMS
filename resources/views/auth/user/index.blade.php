@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-12 mb-3">
        <div class="card mb-3">
            <div class="card-body">
                <h4 class="mt-0 header-title">Users
                    <button type="button" class="btn btn-primary waves-effect waves-light float-right " data-toggle="modal" data-target=".bs-example-modal-lg"> <i class="fa fa-plus"></i> Add User</button>
                </h4>
            </div>
        </div>
        <div class="card m-b-20 pt-5">
            <div class="card-body">
                
                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                    <tr>
                        
                        <th>Firstname</th>
                        <th>Middlename</th>
                        <th>Lastname</th>
                        <th>Username</th>
                        <th>UserType</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Action</th> 
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $item) 
                        <tr>
                            <td>{{$item['firstname']}}</td>
                            <td>{{$item['middlename']}}</td>
                            <td>{{$item['lastname']}}</td>
                            <td>{{$item['username']}}</td>
                            <td>{{$item['user_type']}}</td>
                            <td>{{$item['email']}}</td>
                            <td>{{$item['phone']}}</td>
                            <td><a href=""> <i class="fa fa-pencil"></i> </a></td>
                        </tr>
                        @endforeach
                    
                    </tbody>
                </table>

            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->



<div class="col-md-4 m-t-30">
    <!--  Modal content for the above example -->
    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h5 class="modal-title mt-0 text-light" id="myLargeModalLabel">Add User</h5>
                    <button type="button" class="close text-light" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                   <form action="{{url('user-store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <div class="col-sm-4">
                            <label class="col-sm-2 col-form-label">UserType</label>
                            <select class="form-control" name="user_type"   id="user_cat">
                                <option>--UserType--</option> 
                                <option value="student">Student</option>
                                <option value="teacher">Teacher</option>
                                <option value="parent">Parent</option>
                                <option value="normal">Normal</option>
                            </select>
                        </div>
                      
                        <div class="col-sm-4">
                            <label class="col-sm-2 col-form-label">Firstname</label>
                            <input class="form-control form-control-lg" name="firstname" type="text" placeholder="Firstname"  >
                        </div>
                       
                        <div class="col-sm-4">
                            <label class="col-sm-2 col-form-label">Middlename</label>
                            <input class="form-control form-control-lg" name="middlename" type="text" placeholder="Middlename"  >
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-4">
                            <label class="col-sm-2 col-form-label">Lastname</label>
                            <input class="form-control form-control-lg" name="lastname" type="text" placeholder="Lastname"  >
                        </div>
                        <div class="col-sm-4">
                            <label class="col-sm-2 col-form-label">Username</label>
                            <input class="form-control form-control-lg" name="username" type="text" placeholder="Username"  >
                        </div>
                        <div class="col-sm-4">
                            <label class="col-sm-2 col-form-label">Phone</label>
                            <input class="form-control form-control-lg" name="phone" type="text" placeholder="Phone"  >
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-4">
                            <label class="col-sm-2 col-form-label">Email</label>
                            <input type="email" class="form-control form-control-lg" name="email"  placeholder="Email"  >
                        </div>
                        <div class="col-sm-4">
                            <label class="col-sm-2 col-form-label">Password</label>
                            <input  type="password" class="form-control form-control-lg" name="password"  placeholder="Password"  >
                        </div>
                    </div>

                    <h5 id="study" style="display:none;" class=" mb-3" align="center">Student Informations</h5>
                    <div class="form-group row" style="display: none" id="students">
                    <div class="col-sm-4">
                        <label class="col-sm-2 col-form-label">ScholaringType</label>
                        <select class="form-control" name="scholaring_type"   id="scholaring">
                            <option>--ScholaringType--</option> 
                            <option value="day">Day</option>
                            <option value="boarding">Boarding</option>
                        </select>
                    </div>
                    <div class="col-sm-4">
                        <label class="col-sm-2 col-form-label">Image</label>
                        <input class="form-control form-control-lg" name="image" type="file" placeholder="Addmission No"  >
                    </div>
                    <div class="col-sm-4">
                        <label class="col-sm-2 col-form-label">Certificate</label>
                        <input class="form-control form-control-lg" name="document" type="file" placeholder="Addmission No"  >
                    </div>
                    </div>
                    <div class="form-group row" style="display: none" id="student">
                        <div class="col-sm-4">
                            <label class="col-sm-2 col-form-label">AddmissionNo.</label>
                            <input class="form-control form-control-lg" name="addmission_no" type="text" placeholder="Addmission No"  >
                        </div>
                        <div class="col-sm-4">
                            <label class="col-sm-2 col-form-label">AddmissionDate</label>
                            <input type="date" class="form-control form-control-lg" name="addmission_date"  placeholder="Addmission Date"  required>
                        </div>
                        <div class="col-sm-4">
                            <label class="col-sm-2 col-form-label">BirthDate</label>
                            <input type="date" class="form-control form-control-lg" name="birth_date"  placeholder="Birth Date"  required>
                        </div>
                    </div>
                    <div class="form-group row" style="display: none" id="studen">
                       
                        <div class="col-sm-4">
                            <label class="col-sm-2 col-form-label">PermanentAddress</label>
                            <input class="form-control form-control-lg" name="permanent_address" type="text" placeholder="Permanent Address"  required>
                        </div>
                        <div class="col-sm-4">
                            <label class="col-sm-2 col-form-label">CurrentAddress</label>
                            <input class="form-control form-control-lg" name="current_address" type="text" placeholder="Current Address"  required>
                        </div>
                        <div class="col-sm-4">
                            <label class="col-sm-2 col-form-label">Level</label>
                            <select class="form-control form-control-lg" name="level_id"  required id="level">
                                <option>--Level--</option>
                                @foreach ($level as $item)   
                                <option value="{{$item['id']}}">{{$item['name']}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row" style="display: none" id="stude">

                        <div class="col-sm-6">
                            <label class="col-sm-2 col-form-label">Class</label>
                            <select class="form-control form-control-lg" name="darasa_id"  required id="darasa">
                               
                            </select>
                        </div>
                        <div class="col-sm-6">
                            <label class="col-sm-2 col-form-label">Stream</label>
                            <select class="form-control form-control-lg" name="stream_id"  required id="stream">
                                
                            </select>
                        </div>
                    </div>
                    <div class="form-group row" style="display: none" id="stud">
                        <div class="col-sm-6">
                            <label class="col-sm-2 col-form-label">Domitory</label>
                            <select class="form-control form-control-lg" name="njia_id"  required id="domitory">
                                <option>--Domitory--</option>
                                @foreach ($domitory as $item)   
                                <option value="{{$item['id']}}">{{$item['name']}}</option>
                                @endforeach
                            </select>
                        </div>
                    <div class="col-sm-6">
                        <label class="col-sm-2 col-form-label">Room</label>
                        <select class="form-control form-control-lg" name="room_id"   id="room">
                            
                        </select>
                    </div>
                    </div>
                    <div class="form-group row" style="display: none" id="stu">
                    <div class="col-sm-6">
                        <label class="col-sm-2 col-form-label">Route</label>
                        <select class="form-control form-control-lg" name="njia_id"   id="route">
                            <option>--Route--</option>
                            @foreach ($njia as $item)   
                            <option value="{{$item['id']}}">{{$item['name']}}</option>
                            @endforeach
                        </select>
                    </div>
                        <div class="col-sm-6">
                            <label class="col-sm-2 col-form-label">Vehicle</label>
                            <select class="form-control form-control-lg" name="vehicle_id"   id="vehicle">
                                
                            </select>
                        </div>
                    </div>

                    <h5 id="parent" style="display:none;" class=" mb-3" align="center">Parent Informations</h5> 
                    <div class="form-group row" style="display: none" id="parents">
                        <div class="col-sm-4">
                            <label class="col-sm-2 col-form-label"></label>
                            <input class="form-control form-control-lg" name="addmission_no" type="text" placeholder="Addmission No"  >
                        </div>
                       
                    </div>
                    <div class="float-right">
                        <button type="submit" class="btn btn-primary waves-effect waves-light mr-1">
                            Submit
                        </button>
                    </div>
                   </form>
                </div>
            </div>
</div>





@endsection


