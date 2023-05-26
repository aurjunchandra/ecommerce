@extends('admin.master');

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="col-md-12 container grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h3 class="card-title">Add Brand</h3> 

                    <form class="forms-sample" action="{{url('/brand/store')}}" method="post" enctype="multipart/form-data">
                        @csrf 
                      <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input type="text" name="name" class="form-control" id="exampleInputName1" placeholder="Brand Name">

                        @if($errors->has('name'))
                        <div class="text-danger">{{$errors->first('name')}}</div>
                        @endif
                      </div>   
                      <div class="form-group">
                        <label for="category_id">Select Category</label>
                        <select class="form-control" name="category_id">
                          <option disabled selected>Select a Category</option>                         
                          @foreach($categories as $category)
                          <option value="{{$category->id}}">{{$category->name}}</option>
                          @endforeach 

                        </select>
                        @if($errors->has('name'))
                        <div class="text-danger">{{$errors->first('name')}}</div>
                        @endif
                      </div> 
                      <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>                     
                    </form>
                  </div>
                </div>
            </div>
        </div>
    </div>
@endsection