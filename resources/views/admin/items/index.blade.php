@extends('items.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Crafttary Handmade items</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('admin.items.create') }}"> Create New Item</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Id</th>
            <th>Name</th>
            <th>Category</th>
            <th>Price</th>
            <th>Available quantity</th>
            <th>Restock level</th>
            <th>Details</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($items as $item)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $item->id }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->category }}</td>
            <td>{{ $item->unit_price }}</td>
            <td>{{ $item->available_quantity }}</td>
            <td>{{ $item->restock_level }}</td>
            <td>{{ $item->details }}</td>
            <td>
                <form action="{{ route('admin.items.destroy',$item->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('admin.items.show',$item->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('admin.items.edit',$item->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $items->links() !!}
      
@endsection