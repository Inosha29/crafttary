@extends('orders.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 6 CRUD Example from scratch - ItSolutionStuff.com</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('orders.create') }}"> Create New Order</a>
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
            <th>Discount</th>
            <th>Subtotal</th>
            <th>Total</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($orders as $order)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $order->id }}</td>
            <td>{{ $order->discount }}</td>
            <td>{{ $order->subtotal }}</td>
            <td>{{ $order->total }}</td>
            <td>
                <form action="{{ route('orders.destroy',$order->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('orders.show',$order->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('orders.edit',$order->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $orders->links() !!}
      
@endsection