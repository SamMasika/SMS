@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card mb-3">
            <div class="card-body">
                <h4 class="mt-0 header-title">Rooms
                    <button type="button" class="btn btn-primary waves-effect waves-light float-right " data-toggle="modal" data-target=".bs-example-modal-lg"> <i class="fa fa-plus"></i> Add Room</button>
                </h4>
            </div>
        </div>
        <div class="card m-b-20">
            <div class="card-body">
               
                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Domitory</th>
                        <th>Action</th> 
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($rooms as $item) 
                        <tr>
                            <td>{{$item['id']}}</td>
                            <td>{{$item['name']}}</td>
                            <td>{{$item['domitory']['name']}}</td>
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
                    <h5 class="modal-title mt-0 text-light" id="myLargeModalLabel">Add Room</h5>
                    <button type="button" class="close text-light" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                   <form action="{{url('room-store')}}" method="POST">
                    @csrf
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <label class="col-sm-2 col-form-label">Name</label>
                            <input class="form-control form-control-lg" name="name" type="text" placeholder="Name" id="example-text-input-lg">
                        </div>
                        <div class="col-sm-6">
                            <label class="col-sm-2 col-form-label">Domitory</label>
                            <select class="form-control" name="dom_id" >
                                <option>--Domitory--</option>
                                @foreach ($dom as $item)   
                                <option value="{{$item['id']}}">{{$item['name']}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    
                    <div class="float-right">
                        <button type="submit" class="btn btn-primary waves-effect waves-light mr-1">
                            Submit
                        </button>
                    </div>
                   </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div>

@endsection


