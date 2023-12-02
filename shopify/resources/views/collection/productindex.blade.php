@extends('layout.layouts')
@section('content')

<div class="container">
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4>Products in Collection: {{ $collection->name }} </h4>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr class="text-center">
                      <th>SL</th>  
                      <th>Product Name</th>
                      <th>Description</th>
                      
                    </tr>
                </thead>
                <tbody>

                    @foreach($products as $i=>$product)
                    <tr class="text-center">
                        <td>{{$i+1}}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->description }}</td>
                        
                    </tr>
                    
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>

</div>
@endsection