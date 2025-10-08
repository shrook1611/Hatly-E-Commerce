 <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasHeart" aria-labelledby="My wishlist">
     <div class="offcanvas-header justify-content-center">
         <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
     </div>
     <div class="offcanvas-body">
         <div class="order-md-last">
             <h4 class="d-flex justify-content-between align-items-center mb-3">
                 <span class="text-primary">Your WhishList</span>
                 <span class="badge bg-primary rounded-pill">{{$wishList->items->count()}}</span>
             </h4>

              <ul class="list-group mb-3">
                 @foreach($wishList->items as $item)
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



             <a href="{{route('userhome')}}"      class="w-100 btn btn-primary btn-lg" type="submit">Continue Shopping</a>
         </div>
     </div>
 </div>