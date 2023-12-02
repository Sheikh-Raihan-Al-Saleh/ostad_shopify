@extends('layout.layouts')
@section('content')

<div class="container">

    <div class="card">
        <div class="card-header bg-info text-white">
            <h4>Add Product</h4>
        </div>
        <div class="card-body">
        <form action="{{route('product.store')}}" method="post">
            @sessionToken
            <div class="row">
                <div class="col-md-6">
                 <label>Product Name</label>
                 <input type="text" class="form-control bg-light" name="name">
                </div>
                <div class="col-md-6">
                 <label>Collection</label>
                 <select class="form-control" name="collection_id">
                    <option>Please Select Collection</option>
                    @foreach ($collection as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach
                    
                 </select>
                </div>
                
             </div>
             <div class="row">
                <div class="col-md-12">
                    <label>Product Description</label>
                    <textarea class="form-control bg-light" name="description"></textarea>
                   </div>
             </div>
           
             <div class="d-flex justify-content-end mt-3">
                 <button type="submit" class="btn btn-success">Save</button>
             </div>
        </form>
            
        </div>

    </div>
    <div class="card mt-3">
        <div class="card-header bg-info text-white">
            <h4>Collection List</h4>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr class="text-center">
                      <th>SL</th>
                      <th>Product Name</th>
                      <th>Product Description</th>
                      <th>Collection</th>
                      <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                   @foreach ($product as $i=>$item)
                   <tr class="text-center">
                        <td>{{$i+1}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->description}}</td>
                        <td>{{$item->collection->name}}</td>
                        <td>
                            <a href="{{URL::tokenRoute('product.edit',['id'=>$item->id])}}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                           
                        </td>
                   </tr>
                   @endforeach
                    
                   
                </tbody>
            </table>
        </div>

    </div>

</div>
@endsection