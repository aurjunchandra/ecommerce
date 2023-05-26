@extends('admin.master');

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="col-md-12 container grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h3 class="card-title">Add Product</h3> 

                    <form class="forms-sample" action="{{ url('/product/store') }}" method="post" enctype="multipart/form-data">
                        @csrf 
                      <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input type="text" name="name" value = "{{old('name')}}" class="form-control" id="exampleInputName1" placeholder="Product Name">

                        @if($errors->has('name'))
                        <div class="text-danger">{{$errors->first('name')}}</div>
                        @endif
                      </div> 

                      <div class="form-group">
                        <label for="category_id">Select Category</label>
                        <select class="form-control" name="category_id">
                          <option disabled selected>Select a Category</option>                         
                          @foreach($categories as $category)
                          <option value="{{$category->id}}"> {{$category->name}}</option>
                          @endforeach 
                        </select>
                        @if($errors->has('name'))
                        <div class="text-danger">{{$errors->first('name')}}</div>
                        @endif
                      </div> 

                      <div class="form-group">
                        <label for="brand_id">Select Brand</label>
                        <select class="form-control" name="brand_id">
                          <option disabled selected>Select a Bradn</option>                         
                          @foreach($brands as $brand)
                          <option value="{{$brand->id}}">{{$brand->name}}</option>
                          @endforeach 
                        </select>
                        @if($errors->has('brand_id'))
                        <div class="text-danger">{{$errors->first('brand_id')}}</div>
                        @endif
                      </div> 


                      <div class="form-group">
                        <label for="price">Price</label>
                        <input type="text" name="price" value = "{{old('price')}}" class="form-control" id="price" placeholder="Product Price">
                        @if($errors->has('price'))
                        <div class="text-danger">{{$errors->first('price')}}</div>
                        @endif
                      </div> 


                      <div class="form-group">
                        <label for="qty">Quantity</label>
                        <input type="number" name="qty" value = "{{old('qty')}}" class="form-control" id="qty" placeholder="Product Quantity">
                        @if($errors->has('qty'))
                        <div class="text-danger">{{$errors->first('qty')}}</div>
                        @endif
                      </div> 

                      

                      <div class="form-group">
                        <label for="short_description">Short Description</label>
                        <textarea type="text" name="short_description" row="8" value = "" class="form-control" id="short_description" placeholder="Product Short Description"> </textarea>
                        @if($errors->has('short_description'))
                        <div class="text-danger">{{$errors->first('short_description')}}</div>
                        @endif
                      </div> 


                      <div class="form-group">
                        <label for="long_description">Long Description</label>
                        <textarea type="text" name="long_description" row="8" value = "" class="ckeditor form-control" id="long_description" placeholder="Product Long Description"> </textarea>
                        @if($errors->has('long_description'))
                        <div class="text-danger">{{$errors->first('long_description')}}</div>
                        @endif
                      </div> 


                      <div class="form-group">
                        <label for="image">Main Image </label>
                        <input type="file" name="image" class="form-control" id="image" >
                        @if($errors->has('image'))
                        <div class="text-danger">{{$errors->first('image')}}</div>
                        @endif
                      </div>


                      <div class="form-group">
                        <label for="gallery_image">Gallery Image </label>
                        <input type="file" name="gallery_image[]" multiple class="form-control" id="gallery_image" >
                        @if($errors->has('gallery_image'))
                        <div class="text-danger">{{$errors->first('gallery_image')}}</div>
                        @endif
                      </div>

                      <div class="form-group">
                        <label for="type">Select Type</label>
                        <select class="form-control" name="type">
                          <option disabled selected>Select a Type</option>
                          <option value="new"  >New Arrival</option>  
                          <option value="top"  >Top Products</option>
                          <option value="discount" >Discount Products</option>                                     
                        </select>
                        @if($errors->has('type'))
                        <div class="text-danger">{{$errors->first('type')}}</div>
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

@push('script')
<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
    });
</script>
@endpush