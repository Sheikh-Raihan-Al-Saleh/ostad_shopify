@extends('layout.layouts')
@section('content')

<div class="container">

    <div class="card">
        <div class="card-header bg-info text-white">
            <h4>Edit Collection</h4>
        </div>
        <div class="card-body">
        <form action="{{route('collection.update',['id'=>$collection->id])}}" method="post">
            @sessionToken
            <div class="row">
                <div class="col-md-6">
                 <label>Collection Name</label>
                 <input type="hidden" name="id" value="{{$collection->id}}">
                 <input type="text" class="form-control bg-light" name="name" value="{{$collection->name}}">
                </div>
                <div class="col-md-6">
                 <label>Collection Description</label>
                 <textarea class="form-control bg-light" name="description">{{$collection->description}}</textarea>
                </div>
             </div>
           
             <div class="d-flex justify-content-end mt-3">
                 <button type="submit" class="btn btn-success">Update</button>
             </div>
        </form>
            
        </div>

    </div>

</div>
@endsection