@extends('layouts.client')

<!-- index body start -->
@section('content')
    <!-- Breadcrumb Section Start -->
    <section class="breadscrumb-section pt-0">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="breadscrumb-contain">
                        <h2>Cart</h2>
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="index.html">
                                        <i class="fa-solid fa-house"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Cart</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Cart Section Start -->
    <section class="cart-section section-b-space">
        <div class="container-fluid-lg">
            <div class="row g-sm-5 g-3">
                <div class="col-xxl-9">
                    <div class="cart-table">
                        <div class="table-responsive-xl">
                            <table class="table">
                                <tbody>
                                    @foreach ($carts as $cart)
                                        <tr class="product-box-contain">
                                            <td class="product-detail">
                                                <div class="product border-0">
                                                    <a href="product-left-thumbnail.html" class="product-image">
                                                        <img src="{{ $cart->products->image }}"
                                                            class="img-fluid blur-up lazyloaded" alt="">
                                                    </a>
                                                    <div class="product-detail">
                                                        <ul>
                                                            <li class="name">
                                                                <a
                                                                    href="product-left-thumbnail.html">{{ $cart->products->name }}</a>
                                                            </li>

                                                            <li class="text-content"><span class="text-title">Category
                                                                    :</span> {{ $cart->products->categorys->category_name }}
                                                            </li>

                                                            <li class="text-content"><span
                                                                    class="text-title">Attribute</span>
                                                                {{ $cart->attribute }}</li>

                                                            <li>
                                                                <h5 class="text-content d-inline-block">Price :</h5>
                                                                <span>{{ $cart->products->price }}</span>

                                                            </li>

                                                            <li>
                                                                <h5 class="saving theme-color">Saving : ${{ $cart->price }}
                                                                </h5>
                                                            </li>

                                                            <li class="quantity-price-box">
                                                                <div class="cart_qty">
                                                                    <div class="input-group">
                                                                        <button type="button" class="btn qty-left-minus"
                                                                            data-type="minus" data-field="">
                                                                            <i class="fa fa-minus ms-0"
                                                                                aria-hidden="true"></i>
                                                                        </button>
                                                                        <input class="form-control input-number qty-input"
                                                                            type="text" name="quantity" value="">
                                                                        <button type="button" class="btn qty-right-plus"
                                                                            data-type="plus" data-field="">
                                                                            <i class="fa fa-plus ms-0"
                                                                                aria-hidden="true"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </li>

                                                            <li>
                                                                <h5>Total: $35.10</h5>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>

                                            <td class="price">
                                                <h4 class="table-title text-content">Price</h4>
                                                <h5>${{ $cart->products->price }} </h5>
                                                <h6 class="theme-color">You Save : ${{ $cart->price }}</h6>
                                            </td>

                                            <td class="quantity">
                                                <h4 class="table-title text-content">Qty</h4>
                                                <div class="quantity-price">
                                                    <div class="cart_qty">
                                                        <div class="input-group">
                                                            <button type="button" class="btn qty-left-minus"
                                                                data-type="minus" data-field=""
                                                                onclick="minusQuantity({{ $cart->id }}, {{ $cart->price }})">
                                                                <i class="fa fa-minus ms-0" aria-hidden="true"></i>
                                                            </button>

                                                            <input class="form-control input-number qty-input"
                                                                type="number" name="quantity"
                                                                value="{{ $cart->quantity }}"
                                                                onchange="console.log('object')">

                                                            <button type="button" class="btn qty-right-plus"
                                                                data-type="plus" data-field=""
                                                                onclick="plusQuantity({{ $cart->id }}, {{ $cart->price }})">
                                                                <i class="fa fa-plus ms-0" aria-hidden="true"></i>
                                                            </button>

                                                            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                                                            <script>
                                                                function plusQuantity(cartId, price) {
                                                                    console.log('Cart ID:', cartId);
                                                                    console.log('Price:', price);

                                                                    $.ajax({
                                                                        url: '/cart/' + cartId + '/plus',
                                                                        type: 'GET',

                                                                    });
                                                                    // console.log(c)
                                                                    var currentTotal = parseFloat($('.total-' + cartId).text().replace('$', ''));
                                                                    var priceNew = parseFloat(price)
                                                                    // Tính toán giá trị mới    
                                                                    var newTotal = currentTotal + priceNew;
                                                                    console.log(currentTotal)
                                                                    console.log(priceNew)

                                                                    // Cập nhật giá trị tổng
                                                                    $('.total-' + cartId).text('$' + newTotal);
                                                                }

                                                                function minusQuantity(cartId, price) {
                                                                    console.log('Cart ID:', cartId);
                                                                    console.log('Price:', price);

                                                                    $.ajax({
                                                                        url: '/cart/' + cartId + '/minus',
                                                                        type: 'GET',

                                                                    });
                                                                    var currentTotal = parseFloat($('.total-' + cartId).text().replace('$', ''));
                                                                    var priceNew = parseFloat(price)
                                                                    // Tính toán giá trị mới    
                                                                    var newTotal = currentTotal - priceNew;
                                                                    console.log(currentTotal)
                                                                    console.log(priceNew)

                                                                    // Cập nhật giá trị tổng
                                                                    $('.total-' + cartId).text('$' + newTotal);
                                                                }
                                                            </script>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>

                                            <td class="subtotal">
                                                <h4 class="table-title text-content">Total</h4>
                                                <h5 class="total-{{ $cart->id }}">
                                                    {{ $cart->price * $cart->quantity }}
                                                </h5>
                                            </td>

                                            <td class="save-remove">
                                                <h4 class="table-title text-content">Action</h4>
                                                <a class="save notifi-wishlist" href="javascript:void(0)">Save for later</a>
                                                <a class="remove close_button" style="cursor: pointer"
                                                    onclick="deleteCart({{ $cart->id }})">Remove</a>

                                                <script>
                                                    function deleteCart(cartId) {
                                                        event.preventDefault();

                                                        // Gửi yêu cầu Ajax để xóa giỏ hàng dựa trên ID
                                                        fetch('/cart/' + cartId + '/delete', {
                                                                method: 'GET',
                                                                headers: {
                                                                    'Content-Type': 'application/json',
                                                                    'X-CSRF-TOKEN': '{{ csrf_token() }}' // Thêm mã CSRF token (nếu cần thiết)
                                                                }
                                                            })
                                                            .then(function(response) {
                                                                if (response.ok) {
                                                                    console.log('Cart with ID', cartId, 'deleted successfully.');
                                                                    // Thực hiện các hành động cần thiết sau khi xóa giỏ hàng thành công
                                                                } else {
                                                                    console.error('Failed to delete cart with ID', cartId);
                                                                }
                                                            })
                                                            .catch(function(error) {
                                                                console.error('Error occurred while deleting cart with ID', cartId, ':', error);
                                                            });
                                                    }
                                                </script>
                                            </td>
                                        </tr>
                                    @endforeach


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-3">
                    <div class="summery-box p-sticky">
                        <div class="summery-header">
                            <h3>Cart Total</h3>
                        </div>

                        <div class="summery-contain">
                            <div class="coupon-cart">
                                <h6 class="text-content mb-2">Coupon Apply</h6>
                                <div class="mb-3 coupon-box input-group">
                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        placeholder="Enter Coupon Code Here...">
                                    <button class="btn-apply" onclick="applyCoupon()">Apply</button>
                                    @foreach ($coupons as $coupon)
                                        <input style="display: none" type="text" name="{{ $coupon->code }}"
                                            value="{{ $coupon->discount }}">
                                    @endforeach
                                    <script>
                                        function applyCoupon() {
                                            var couponCode = document.getElementById("exampleFormControlInput1").value;
                                            var hiddenInputs = document.querySelectorAll('input[type="text"][style="display: none"]');
                                            var inputFound = false;

                                            for (var i = 0; i < hiddenInputs.length; i++) {
                                                var input = hiddenInputs[i];
                                                if (input.name === couponCode) {
                                                    inputFound = true;
                                                    var discount = input.value;
                                                    var total = {{ $total }};
                                                    var discountedPrice = (total * discount) / 100;
                                                    var finalPrice = total - discountedPrice;

                                                    // Update the displayed discounted price
                                                    var priceElement = document.getElementById("totalPrice");
                                                    priceElement.textContent = "- $" + discountedPrice.toFixed(2);

                                                    // Update the displayed final price
                                                    var priceElement1 = document.getElementById("finalPrice");
                                                    priceElement1.textContent = "$" + finalPrice.toFixed(2);

                                                    // Save the discounted price and coupon code in localStorage
                                                    localStorage.setItem('discountedPrice', discountedPrice);
                                                    localStorage.setItem('couponCode', couponCode);

                                                    break;
                                                }
                                            }

                                            if (!inputFound) {
                                                // No matching input field found, set couponCode to an empty string
                                                localStorage.setItem('couponCode', '');
                                            }
                                        }
                                    </script>
                                </div>
                            </div>
                            <ul>
                                <li>
                                    <h4>Subtotal</h4>
                                    <h4 class="price">${{ $total }}</h4>


                                </li>

                                <li>
                                    <h4>Coupon Discount</h4>
                                    <h4 class="price" id="totalPrice">-0.00</h4>
                                </li>


                            </ul>
                        </div>

                        <ul class="summery-total">
                            <li class="list-total border-top-0">
                                <h4>Total (USD)</h4>


                                <h4 class="price theme-color" id="finalPrice">${{ $total }}</h4>
                            </li>
                        </ul>

                        <div class="button-group cart-button">
                            <ul>
                                <li>
                                    <button onclick="location.href = 'checkout';"
                                        class="btn btn-animation proceed-btn fw-bold">Process To Checkout</button>
                                </li>

                                <li>
                                    <button onclick="location.href = 'index.html';"
                                        class="btn btn-light shopping-button text-dark">
                                        <i class="fa-solid fa-arrow-left-long"></i>Return To Shopping</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Cart Section End -->
@endsection
<!-- index body end -->

<!-- Page Body End -->
