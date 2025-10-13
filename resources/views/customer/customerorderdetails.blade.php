@include('customer.layouts.head')
@include('customer.layouts.topnavbar')


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

                    @foreach ($orders as $order)
    @foreach ($order->items as $item)
                   
          
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
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
 
@include('customer.layouts.footer')