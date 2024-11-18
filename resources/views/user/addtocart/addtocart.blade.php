  {{-- <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shopping Cart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body>
    <section class="h-100">
      <div class="container h-100 py-5">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-10">
            <div class="d-flex justify-content-between align-items-center mb-4">
              <h3 class="fw-normal mb-0">Shopping Cart</h3>
            </div>

            @foreach ($dbn as $index => $item)
            <div class="card rounded-3 mb-4">
              <div class="card-body p-4">
                <div class="row d-flex justify-content-between align-items-center">
                  <div class="col-md-2 col-lg-2 col-xl-2">
                    <img src="{{ asset('image/'.$item['image']) }}" class="img-fluid rounded-3" alt="Item Image">
                  </div>
                  <div class="col-md-3 col-lg-3 col-xl-3">
                    <p class="lead fw-normal mb-2">{{ $item['name'] }}</p>
                    <p><span class="text-muted">Size: </span>'M' </p>
                  </div>
                  <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                    <button data-mdb-button-init data-mdb-ripple-init class="btn btn-link px-2"
                      onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                      <i class="fas fa-minus"></i>
                    </button>

                    <input id="form1" min="0" name="quantity" value="{{ $item['quantity']  }}" type="number"
                      class="form-control form-control-sm" />

                    <button data-mdb-button-init data-mdb-ripple-init class="btn btn-link px-2"
                      onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                      <i class="fas fa-plus"></i>
                    </button>
                  </div>
                  <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                    <h5 class="mb-0">{{ $item['price'] }}</h5>
                  </div>
                  <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                    <a href="{{ route('cart.remove', $index) }}" class="text-danger"><i class="fas fa-trash fa-lg"></i></a>
                  </div>
                </div>
              </div>
            </div>
            @endforeach

            <div class="card">
              <div class="card-body">
                <form action="{{route('stripe')}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <input type="hidden" name="item_id" value="{{$index}}">
                  <input type="hidden" name="item_name" value="{{$item['name']}}">
                  <input type="hidden" name="item_price" value="{{$item['price']}}">
                  <input type="hidden" name="item_image" value="{{$item['image']}}">
                <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-warning btn-block btn-lg">Proceed to Pay</button>
              </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/js/all.min.js" integrity="sha512-6sSYJqDreZRZGkJ3b+YfdhB3MzmuP9R7X1QZ6g5aIXhRvR1Y/N/P47jmnkENm7YL3oqsmI6AK+V6AD99uWDnIw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  </body>
</html>
   --}}

   <!doctype html>
   <html lang="en">
   <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Add to Cart</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   </head>
   <body>
     <section class="h-100">
       <div class="container h-100 py-5">
         <div class="row d-flex justify-content-center align-items-center h-100">
           <div class="col-10">
             <div class="d-flex justify-content-between align-items-center mb-4">
               <h3 class="fw-normal mb-0">Add to Cart</h3>
             </div>
   
             <!-- Check if there are items in the cart -->
             @if(count($dbn) > 0)
             @foreach ($dbn as $index => $item)
             @dd($dbn)
             <div class="card rounded-3 mb-4 cart-item">
               <div class="card-body p-4">
                 <div class="row d-flex justify-content-between align-items-center">
                   <div class="col-md-2 col-lg-2 col-xl-2">
                     <img src="{{ asset('image/'.$item['image']) }}" class="img-fluid rounded-3" alt="Item Image">
                   </div>
                   <div class="col-md-3 col-lg-3 col-xl-3">
                     <p class="lead fw-normal mb-2">{{ $item['name'] }}</p>
                   </div>
                   <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                     <button class="btn btn-link px-2"
                       onclick="this.parentNode.querySelector('input[type=number]').stepDown(); updatePrice({{ $index }}, {{ $item['price'] }})">
                       <i class="fas fa-minus"></i>
                     </button>
           
                     <input id="quantity{{ $index }}" class="quantity" min="1" name="quantity" value="{{ $item['quantity'] }}" type="number"
                       class="form-control form-control-sm" onchange="updatePrice({{ $index }}, {{ $item['price'] }})" />
           
                     <button class="btn btn-link px-2"
                       onclick="this.parentNode.querySelector('input[type=number]').stepUp(); updatePrice({{ $index }}, {{ $item['price'] }})">
                       <i class="fas fa-plus"></i>
                     </button>
                   </div>
                   <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-2">
                     <h5 class="mb-0 item-price" data-price="{{ $item['price'] }}" id="price{{ $index }}"> {{ $item['price'] * $item['quantity'] }}.00</h5>
                   </div>
                   <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                     <a href="{{ route('cart.remove', $index) }}" class="text-danger"><i class="fas fa-trash fa-lg"></i></a>
                   </div>
                 </div>
               </div>
             </div>
           @endforeach
           
   
               <!-- Total Price Section -->
               <div class="card">
                 <div class="card-body">
                   <h4 class="mb-3">Total Price:</h4>
                   <h5 id="totalPrice" class="mb-4">
                     <!-- Calculate total price here -->
                     ${{ array_sum(array_map(function ($item) {
                         return $item['price'] * $item['quantity'];
                     }, $dbn)) }}.00
                   </h5>
   
                   <!-- Hidden input to store the total price -->
                   <form action="{{route('stripe')}}" method="POST" enctype="multipart/form-data">
                     @csrf
                     <input type="hidden" name="total_price" id="totalPriceInput" value="{{ array_sum(array_map(function ($item) {
                         return $item['price'] * $item['quantity'];
                     }, $dbn)) }}" />
                     <input type="hidden" name="item_id" value="{{ $index ?? '' }}">
                     <input type="hidden" name="item_name" value="{{ $item['name'] ?? '' }}">
                     <input type="hidden" name="item_quantity" value="{{ $item['quantity'] ?? '' }}">
                     <button type="submit" class="btn btn-warning btn-block btn-lg">Proceed to Pay</button>
                   </form>
                 </div>
               </div>
   
             @else
               <!-- Message shown when the cart is empty -->
               <div class="alert alert-info text-center mt-5" role="alert">
                 Your cart is empty.
               </div>
             @endif
           </div>
         </div>
       </div>
     </section>
   
     <script>
      // Function to update the price when quantity changes
      function updatePrice(index, pricePerItem) {
        const quantityInput = document.getElementById('quantity' + index);
        let quantity = parseInt(quantityInput.value);
    
        // Ensure quantity doesn't go below 1
        if (quantity < 1) {
          quantity = 1; // Set quantity to 1 if it's less than 1
          quantityInput.value = 1; // Update the input field value to 1
        }
    
        const priceElement = document.getElementById('price' + index);
        const newPrice = quantity * pricePerItem;
        priceElement.textContent = newPrice.toFixed(2); // Update the price
    
        // Update the total price after changing the quantity
        updateTotalPrice();
      }
    
      // Function to update the total price
      function updateTotalPrice() {
        let total = 0;
        
        // Loop through all cart items and calculate the total price dynamically
        const cartItems = document.querySelectorAll('.cart-item');  // Use class to select all items
        cartItems.forEach(function(item, index) {
          const quantity = parseInt(item.querySelector('.quantity').value);
          const pricePerItem = parseFloat(item.querySelector('.item-price').dataset.price);  // Store price in data-price attribute
          total += quantity * pricePerItem;
        });
    
        // Update the total price displayed on the page
        document.getElementById('totalPrice').textContent = `$${total.toFixed(2)}`;
    
        // Update the hidden input field with the new total price
        document.getElementById('totalPriceInput').value = total.toFixed(2);
      }
    
      // Initial total price calculation when the page loads
      document.addEventListener('DOMContentLoaded', updateTotalPrice);
    </script>
    
    
   
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/js/all.min.js" integrity="sha512-6sSYJqDreZRZGkJ3b+YfdhB3MzmuP9R7X1QZ6g5aIXhRvR1Y/N/P47jmnkENm7YL3oqsmI6AK+V6AD99uWDnIw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   </body>
   </html>
   
   
   
