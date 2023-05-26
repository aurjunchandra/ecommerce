@extends('admin.master');

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="col-md-12 container grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h3 class="card-title">Manage Category</h3> 

                    <table class="table table-borderd">
                        <tr>
                            <th>SL</th>
                            <th>Name</th>
                            <th> Status</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                        @foreach($categories as $category)

                       
                        <tr>
                            <td>{{$loop-> index+1 }}</td>
                            <td>{{$category->name}}</td>
                            <td> 
                                @if($category->status==1)
                                <span>Active</span>
                                @else 
                                <span>Inactive</span>
                                @endif

                            </td>
                            <td><img src="{{asset('/category/'.$category->image)}}"/> </td>
                            <td>
                                <a href="{{url('/category/edit/'.$category->id)}}" class="btn btn-sm btn-info">Edit</a>
                                <a href="{{url('/category/delete/'.$category->id)}}" class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>
                        @endforeach

                    </table>
                    
                  </div>
                </div>
            </div>
        </div>
    </div>
@endsection