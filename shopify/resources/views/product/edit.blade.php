@extends('layout.layouts')
@section('content')

<div class="container">

    <div class="card">
        <div class="card-header bg-info text-white">
            <h4>Edit Product</h4>
        </div>
        <div class="card-body">
        <form action="{{route('product.update',['id'=>$product->id])}}" method="post">
            @sessionToken
            <div class="row">
                <div class="col-md-6">
                 <label>Product Name</label>
                 <input type="hidden" name="id" value="{{$product->id}}">
                 <input type="text" class="form-control bg-light" name="name" value="{{$product->name}}">
                </div>
                <div class="col-md-6">
                 <label>Collection</label>
                 <select class="form-control" name="collection_id">
                    <option value="{{$product->collection_id}}" selected>{{$product->collection->name}}</option>
                    @foreach ($collection as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach
                    
                 </select>
                </div>
                
             </div>
             <div class="row">
                <div class="col-md-12">
                    <label>Product Description</label>
                    <textarea class="form-control bg-light" name="description">{{$product->description}}</textarea>
                   </div>
             </div>
           
             <div class="d-flex justify-content-end mt-3">
                 <button type="submit" class="btn btn-success">Save</button>
             </div>
        </form>
            
        </div>

    </div>
</div>
@endsection