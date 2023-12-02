@extends('layout.layouts')
@section('content')

<div class="container">

    <div class="card">
        <div class="card-header bg-info text-white">
            <h4>Add Collection</h4>
        </div>
        <div class="card-body bg-light">
        <form action="{{route('collection.store')}}" method="post">
            @sessionToken
            <div class="row">
                <div class="col-md-6">
                 <label>Collection Name</label>
                 <input type="text" class="form-control bg-light border border-dark" name="name">
                </div>
                <div class="col-md-6">
                 <label>Collection Description</label>
                 <textarea class="form-control bg-light border border-dark" name="description"></textarea>
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
                      <th>Name</th>
                      <th>Description</th>
                      <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                   @foreach ($collection as $item)
                    <tr class="text-center">
                        <td>{{$item->name}}</td>
                        <td>{{$item->description}}</td>
                        <td>
                            <a href="{{URL::tokenRoute('collection.edit',['id'=>$item->id])}}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                            <a href="{{URL::tokenRoute('product.view',['id' => $item->id])}}" class="btn btn-primary"><i class="fas fa-p"></i></a>
                        </td>
                    </tr>
                   @endforeach
                </tbody>
            </table>
        </div>

    </div>

</div>
@endsection