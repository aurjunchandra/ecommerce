@extends('admin.master');

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="col-md-12 container grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h3 class="card-title">Manage Brand</h3> 

                    <table class="table table-borderd">
                        <tr>
                            <th>SL</th>
                            <th>Category Name</th>
                            <th> Brand Name</th>
                            <th>status</th>
                            <th>Action</th>
                        </tr>
                        @foreach($brands as $brand)
                           
                       
                        <tr>
                            <td>{{$loop-> index+1 }}</td>
                            <td>{{$brand->category->name}}</td>
                            <td>{{$brand->name}}</td>
                            
                            <td> 
                                @if($brand->status==1)
                                <span>Active</span>
                                @else 
                                <span>Inactive</span>
                                @endif

                            </td>
                           
                            <td>
                                <a href="{{url('/brand/edit/'.$brand->id)}}" class="btn btn-sm btn-info">Edit</a>
                                <a href="{{url('/brand/delete/'.$brand->id)}}" class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>
                        @endforeach

                    </table>
                    {{$brands->links()}}
                  </div>
                </div>
            </div>
        </div>
    </div>
@endsection