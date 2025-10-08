

@extends('admin.main')

@section('content')
<div class="container my-5">
    {{-- Order Header --}}
    <div class="card shadow-sm mb-4">
        <div class="card-header bg-primary text-white">
            <div class="d-flex justify-content-between align-items-center">
                <h2 class="mb-0">Order #{{ $order->id }}</h2>
                @if($order->status === 'completed')
                    <span class="badge bg-success">Completed</span>
                @elseif($order->status === 'pending')
                    <span class="badge bg-warning text-dark">Pending</span>
                @elseif($order->status === 'cancelled')
                    <span class="badge bg-danger">Cancelled</span>
                @else
                    <span class="badge bg-info">Processing</span>
                @endif
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <p><strong>Order Date:</strong> {{ $order->created_at->format('M d, Y - h:i A') }}</p>
                    <p><strong>Customer:</strong> {{ $order->user->name }}</p>
                    <p><strong>Email:</strong> {{ $order->user->email }}</p>
                </div>
        
            </div>
        </div>
    </div>

    {{-- Order Items --}}
    <div class="card shadow-sm mb-4">
        <div class="card-header bg-primary text-dark">
            <h4 class="mb-0">Order Items</h4>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>Product</th>
                            <th class="text-center">Quantity</th>
                            <th class="text-end">Price</th>
                            <th class="text-end">Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($order->items as $item)
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    @if(isset($item->product->image))
                                    <img src="{{ asset('storage/' . $item->product->image) }}" 
                                         alt="{{ $item->product->name }}" 
                                         class=" me-3" 
                                         style="width: 40px; height: 40px; object-fit: cover;">
                                    @endif
                                    <div class="p-3">
                                        <strong>{{ $item->product->name }}</strong>
                                        @if(isset($item->product->description))
                                        <br><small class="text-muted">{{ Str::limit($item->product->description, 50) }}</small>
                                        @endif
                                    </div>
                                </div>
                            </td>
                            <td class="text-center align-middle">
                                <span class="badge bg-light text-dark">{{ $item->quantity }}</span>
                            </td>
                            <td class="text-end align-middle">${{ number_format($item->price, 2) }}</td>
                            <td class="text-end align-middle">
                                <strong>${{ number_format($item->quantity * $item->price, 2) }}</strong>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{-- Order Summary --}}
    <div class="row">
        <div class="col-md-8">
            <a href="{{ route('order') }}" class="btn btn-secondary">
                <i class="bi bi-arrow-left"></i> Back to Orders
            </a>
            
            @if($order->status === 'pending')
            <form action="{{ route('order.delete', $order->id) }}" method="POST" class="d-inline">
                @csrf
                @method('PATCH')
                <button type="submit" class="btn btn-danger" 
                        onclick="return confirm('Are you sure you want to cancel this order?')">
                    <i class="bi bi-x-circle"></i> Cancel Order
                </button>
            </form>
            @endif
        </div>
        
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Order Summary</h5>
                    <hr>
                    <div class="d-flex justify-content-between mb-2">
                        <span>Subtotal:</span>
                        <span>${{ number_format($order->items->sum(function($item) {
                            return $item->quantity * $item->price;
                        }), 2) }}</span>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                        <span>Tax:</span>
                        <span>${{ number_format($item->quantity * $item->price*0.14, 2) }}</span>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                        <span>Shipping:</span>
                        <span>$0.00</span>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <strong class="h5">Total:</strong>
                        <strong class="h5 text-primary">${{ number_format($order->total, 2) }}</strong>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection