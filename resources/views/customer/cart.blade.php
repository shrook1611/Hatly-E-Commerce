 <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasCart" aria-labelledby="My Cart">
     <div class="offcanvas-header justify-content-center">
         <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
     </div>
     <div class="offcanvas-body">
         <div class="order-md-last">
             <h4 class="d-flex justify-content-between align-items-center mb-3">
                 <span class="text-primary">Your cart</span>
                 <span class="badge bg-primary rounded-pill">{{$cart->items->count()}}</span>
             </h4>

             <ul class="list-group mb-3">
                 @foreach($cart->items as $item)
                 @if($item->product)
                 <li class="list-group-item d-flex justify-content-between lh-sm">
                     <div>
                         <h6 class="my-0">{{ $item->product->name }}</h6>
                         <small class="text-body-secondary">{{ $item->product->description }}</small>
                     </div>
                     <span class="text-body-secondary">{{ $item->quantity }}</span>
                 </li>
                 @else
                 <li class="list-group-item d-flex justify-content-between lh-sm text-danger">
                     <div>
                         <h6 class="my-0">Product not found</h6>
                         <small class="text-body-secondary">This product may have been removed.</small>
                     </div>
                     <span class="text-body-secondary">{{ $item->quantity }}</span>
                 </li>
                 @endif
                 @endforeach

                 <li class="list-group-item d-flex justify-content-between">
                     <span>Total (egp)</span>
                     <strong>{{ $total }}</strong>
                 </li>
             </ul>

<form method="POST" action="{{ route('createOrder') }}">
@csrf
             <button class="w-100 btn btn-primary btn-lg" type="submit">Continue to Checkout</button>
</form>
         </div>
     </div>
 </div>