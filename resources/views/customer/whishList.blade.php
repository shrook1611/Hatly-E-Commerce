 <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasHeart" aria-labelledby="My wishlist">
     <div class="offcanvas-header justify-content-center">
         <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
     </div>
     <div class="offcanvas-body">
         <div class="order-md-last">
             <h4 class="d-flex justify-content-between align-items-center mb-3">
                 <span class="text-primary">Your WhishList</span>
                 @if(isset($wishList))
                 <span class="badge bg-primary rounded-pill">{{$wishList->items->count()}}</span>
                    @else
                    <span class="badge bg-primary rounded-pill">0</span>
                 @endif
             </h4>
@if(!isset($wishList) || $wishList->items->isEmpty())     
             <p class="text-center">Your wishlist is empty.</p>
             @else
              <ul class="list-group mb-3">
                 @foreach($wishList->items as $item)
             
                 @if($item->product)
               <li class="list-group-item d-flex justify-content-between align-items-center lh-sm">
    <div>
        <h6 class="my-0">{{ $item->product->name }}</h6>
        <small class="text-body-secondary">{{ $item->product->description }}</small>
    </div>
    
    <div class="d-flex align-items-center gap-3">
        <span class="text-body-secondary">Qty: {{ $item->quantity }}</span>
      
        
        <form action="{{ route('wish.deleteItem', $item->id) }}" method="POST" class="m-0">
            @csrf
            @method('DELETE')
            <button type="submit" 
                    class="btn btn-link text-danger p-0">
                <i class="fas fa-trash-alt"></i>
            </button>
        </form>
    </div>
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

               
             </ul>

@endif

             <a href="{{route('wish.delete', $wishList->id)}}" class="w-100 btn btn-primary btn-lg" type="submit">Clear</a>
         </div>
     </div>
 </div>