<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="./cart.css">
    <link rel="stylesheet" href="./style.css">
    <style>
        .proceed-to-checkout-btn {
    display: block;
    width: 200px;
    padding: 10px 20px;
    margin: 20px auto;
    text-align: center;
    background-color: #f0c14b;
    color: #111;
    font-size: 16px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    text-decoration: none;
    transition: background-color 0.3s ease;
}

.proceed-to-checkout-btn:hover {
    background-color: #d1a641;
}
    </style>
</head>

<body>
    <nav>
        <a href="/"><img src="./assets/amazon_logo.png" width="100" alt=""></a>
        <div class="nav-country">
            <img src="./assets/location_icon.png" height="20" alt="">
            <div>
                <p>Deliver to</p>
                <h1>Dehradun,Uttrakhand</h1>
            </div>
        </div>
        <div class="nav-search">
            <div class="nav-search-category">
                <p>All</p>
                <img src="./assets/dropdown_icon.png" height="12" alt="">
            </div>
            <input type="text" class="nav-search-input" placeholder="Search Amazon">
            <img src="./assets/search_icon.png" class="nav-search-icon" alt="">
        </div>
        <div class="nav-language">
            <img src="./assets/us_flag.webp" width="25px" alt="">
            <p>EN</p>
            <img src="./assets/dropdown_icon.png" width="8px" alt="">
        </div>
        <div class="nav-texts">
            <p><a href="/login.php">Hello, sign in</a></p>
            <h1>Account & Lists <img src="./assets/dropdown_icon.png" width="8px" alt=""> </h1>
        </div>
        <div class="nav-texts">
            <p>Returns</p>
            <h1>& Orders</h1>
        </div>
        <a href="/login.html" class="mobile-user-icon" style="display: none;">
            <img src="./assets/user.png">
        </a>
        <a href="/cart.php" class="nav-cart">
            <img src="./assets/cart_icon.png" width="35px" alt="">
            <h4>Cart</h4>
        </a>
    </nav>
    <div class="nav-bottom">
        <div>
            <img src="./assets/menu_icon.png" width="25px" alt="">
            <p>All</p>
        </div>
        <p>Today's Deals</p>
        <p>Customer Service</p>
        <p>Registry</p>
        <p>Gift Cards</p>
        <a href="./product.php">Sell</a>
    </div>

    <div class="cart">
        <div class="cart-left">
            <h1>Shopping Cart</h1>
            <hr>
            <div class="product-cart-list">
                <img src="./assets/ipad_img.jpg" alt="">
                <div>
                    <div class="product-cart-titleprice">
                        <p>Apple iPad (9th Generation): with A13 Bionic chip, 10.2-inch Retina Display, 64GB, Wi-Fi,
                            12MP front/8MP Back Camera, Touch ID, All-Day Battery Life – Space Gray</p>
                        <p><b>₹25000</b></p>
                    </div>
                    <p class="product-cart-bestseller"><span>#1 Best Seller</span> in Computer Tablets</p>
                    <p class="product-cart-stock">In Stock</p>
                    <p class="product-cart-delivery">FREE delivery <b>Thursday,July 11</b> available at checkout</p>
                    <p class="product-cart-returns">FREE Returns &#11191</p>
                    <p class="product-cart-giftoption">Gift options not available. <span>Learn more</span></p>
                    <div class="product-cart-specs">
                        <p><b>Style:</b></p>
                        <p>WiFi</p>
                        <p><b>Size:</b></p>
                        <p>64GB</p>
                        <p><b>Color:</b></p>
                        <p>Space Gray</p>
                    </div>
                    <div class="product-cart-list-action">
                        <select>
                            <option value="Qty: 1">Qty: 1</option>
                            <option value="Qty: 2">Qty: 2</option>
                            <option value="Qty: 3">Qty: 3</option>
                            <option value="Qty: 4">Qty: 4</option>
                            <option value="Qty: 5">Qty: 5</option>
                        </select>
                        <hr>
                        <p class="action-btn">Delete</p>
                        <hr>
                        <p class="action-btn">Save for later</p>
                        <hr>
                        <p class="action-btn">Compare with similar items</p>
                        <hr>
                        <p class="action-btn">Share</p>
                    </div>
                </div>
            </div>
            <hr>
            <div class="product-cart-list">
                <img src="./assets/product_img.jpg" width="180px" alt="">
                <div>
                    <div class="product-cart-titleprice">
                        <p>BENGOO G9000 Stereo Gaming Headset for PS4 PC Xbox One PS5 Controller, Noise Cancelling Over
                            Ear Headphones with Mic, LED Light, Bass Surround</p>
                        <p><b>₹1500</b></p>
                    </div>
                    <p class="product-cart-bestseller"><span>#1 Best Seller</span> in PC Game Headsets</p>
                    <p class="product-cart-stock">In Stock</p>
                    <p class="product-cart-delivery">FREE delivery <b>Wednesday,July 10</b> on ₹1000 of items shipped by Amazon
                    </p>
                    <p class="product-cart-returns">FREE Returns &#11191</p>
                    <p class="product-cart-giftoption"><input type="checkbox"> This is a gift <span>Learn more</span>
                    </p>
                    <div class="product-cart-specs">
                        <p><b>Style:</b></p>
                        <p>Wired</p>
                        <p><b>Size:</b></p>
                        <p>Free</p>
                        <p><b>Color:</b></p>
                        <p>Blue</p>
                    </div>
                    <div class="product-cart-list-action">
                        <select>
                            <option value="Qty: 1">Qty: 1</option>
                            <option value="Qty: 2">Qty: 2</option>
                            <option value="Qty: 3">Qty: 3</option>
                            <option value="Qty: 4">Qty: 4</option>
                            <option value="Qty: 5">Qty: 5</option>
                        </select>
                        <hr>
                        <p class="action-btn">Delete</p>
                        <hr>
                        <p class="action-btn">Save for later</p>
                        <hr>
                        <p class="action-btn">Compare with similar items</p>
                        <hr>
                        <p class="action-btn">Share</p>
                    </div>
                </div>
            </div>
            <hr>
            <div class="cart-list-subtotal">
                <!-- Subtotal (2 items): <b>$274.39</b> -->
            </div>
        </div>
        <div class="cart-right">
            <div class="cart-free-delivery">
                <p>&#x2705</p>
                <p>Your order qualifies for FREE Shipping. <br> Choose this option at checkout. <br> See details</p>
            </div>
            <p class="cart-subtotal">Subtotal (2 items): <b>₹26500</b></p>
            <p class="cart-right-gift"><input type="checkbox"> This order contains a gift</p>
            <button ><a href="./checkout.php" class="proceed-to-checkout">Proceed to Checkout</a></button>
        </div>
    </div>

    <div class="products-slider-with-price">
        <h2>Deals Under ₹1000</h2>
        <div class="products">
            <div class="product-card">
                <div class="product-img-container">
                    <img src="./assets/product2-1.jpg" alt="">
                </div>
                <div class="product-offer">
                    <p>27% off</p> <span>Deal</span>
                </div>
                <p class="product-price">₹ <span>750</span> List Price:₹975</p>
                <h4>This product is the best for you</h4>
            </div>
            <div class="product-card">
                <div class="product-img-container">
                    <img src="./assets/product2-2.jpg" alt="">
                </div>
                <div class="product-offer">
                    <p>27% off</p> <span>Deal</span>
                </div>
                <p class="product-price">₹ <span>932</span> List Price:₹1,200</p>
                <h4>This product is the best for you</h4>
            </div>
            <div class="product-card">
                <div class="product-img-container">
                    <img src="./assets/product2-3.jpg" alt="">
                </div>
                <div class="product-offer">
                    <p>27% off</p> <span>Deal</span>
                </div>
                <p class="product-price">₹<span>1,111</span> List Price:₹1,200</p>
                <h4>This product is the best for you</h4>
            </div>
            <div class="product-card">
                <div class="product-img-container">
                    <img src="./assets/product2-4.jpg" alt="">
                </div>
                <div class="product-offer">
                    <p>27% off</p> <span>Deal</span>
                </div>
                <p class="product-price">₹ <span>1,232</span> List Price:₹1,253</p>
                <h4>This product is the best for you</h4>
            </div>
            <div class="product-card">
                <div class="product-img-container">
                    <img src="./assets/product2-5.jpg" alt="">
                </div>
                <div class="product-offer">
                    <p>27% off</p> <span>Deal</span>
                </div>
                <p class="product-price">₹ <span>789</span> List Price:₹1,180</p>
                <h4>This product is the best for you</h4>
            </div>
            <div class="product-card">
                <div class="product-img-container">
                    <img src="./assets/product2-6.jpg" alt="">
                </div>
                <div class="product-offer">
                    <p>27% off</p> <span>Deal</span>
                </div>
                <p class="product-price">₹ <span>632</span> List Price:₹800</p>
                <h4>This product is the best for you</h4>
            </div>
            <div class="product-card">
                <div class="product-img-container">
                    <img src="./assets/product2-7.jpg" alt="">
                </div>
                <div class="product-offer">
                    <p>27% off</p> <span>Deal</span>
                </div>
                <p class="product-price">₹ <span>1,100</span> List Price:₹1,400</p>
                <h4>This product is the best for you</h4>
            </div>
            <div class="product-card">
                <div class="product-img-container">
                    <img src="./assets/product2-8.jpg" alt="">
                </div>
                <div class="product-offer">
                    <p>27% off</p> <span>Deal</span>
                </div>
                <p class="product-price">₹ <span>1,000</span> List Price:₹1,350</p>
                <h4>This product is the best for you</h4>
            </div>
            <div class="product-card">
                <div class="product-img-container">
                    <img src="./assets/product2-9.jpg" alt="">
                </div>
                <div class="product-offer">
                    <p>27% off</p> <span>Deal</span>
                </div>
                <p class="product-price">₹ <span>900</span> List Price:₹1,250</p>
                <h4>This product is the best for you</h4>
            </div>
            <div class="product-card">
                <div class="product-img-container">
                    <img src="./assets/product2-10.jpg" alt="">
                </div>
                <div class="product-offer">
                    <p>27% off</p> <span>Deal</span>
                </div>
                <p class="product-price">₹ <span>770</span> List Price:₹950</p>
                <h4>This product is the best for you</h4>
            </div>
            <div class="product-card">
                <div class="product-img-container">
                    <img src="./assets/product2-11.jpg" alt="">
                </div>
                <div class="product-offer">
                    <p>27% off</p> <span>Deal</span>
                </div>
                <p class="product-price">₹ <span>830</span> List Price:₹1,080</p>
                <h4>This product is the best for you</h4>
            </div>
            <div class="product-card">
                <div class="product-img-container">
                    <img src="./assets/product2-12.jpg" alt="">
                </div>
                <div class="product-offer">
                    <p>27% off</p> <span>Deal</span>
                </div>
                <p class="product-price">₹ <span>700</span> List Price:₹1,100</p>
                <h4>This product is the best for you</h4>
            </div>
        </div>
    </div>

    </section>

    <footer class="footer-cart">
        <img src="./assets/amazon_logo.png" width="100" alt="">
        <p>© 1996-2024, Amazon.com, Inc. or its affiliates</p>
    </footer>


<script>
    const scrollContainer = document.querySelectorAll(".products");
        for (const item of scrollContainer) {
            item.addEventListener("wheel", (evt) => {
            evt.preventDefault();
            item.scrollLeft += evt.deltaY;
        });
    }

    



    document.addEventListener("DOMContentLoaded", function() {
    // Function to remove item from cart
    const deleteButtons = document.querySelectorAll(".action-btn");
    deleteButtons.forEach(button => {
        button.addEventListener("click", function() {
            if (this.innerText === "Delete") {
                const productContainer = this.closest(".product-cart-list");
                productContainer.remove();
                updateSubtotal();
            }
        });
    });

    // Function to update subtotal
    const quantitySelects = document.querySelectorAll(".product-cart-list-action select");
    quantitySelects.forEach(select => {
        select.addEventListener("change", function() {
            updateSubtotal();
        });
    });

    function updateSubtotal() {
        let subtotal = 0;
        const productContainers = document.querySelectorAll(".product-cart-list");
        if (productContainers.length === 0) {
            // If there are no items, update subtotal to 0
            const subtotalElements = document.querySelectorAll(".cart-subtotal");
            subtotalElements.forEach(element => {
                element.innerHTML = `Subtotal (0 items): <b>0.00</b>`;
            });
            // Update subtotal on the right side
            const cartSubtotalRight = document.querySelector(".cart-right .cart-subtotal");
            if (cartSubtotalRight) {
                cartSubtotalRight.innerHTML = `Subtotal (0 items): <b>0.00</b>`;
            }
            return; // Exit the function
        }

        productContainers.forEach(container => {
            const price = parseFloat(container.querySelector(".product-cart-titleprice b").innerText.slice(1));
            const quantity = parseInt(container.querySelector(".product-cart-list-action select").value.slice(5));
            subtotal += price * quantity;
        });

        const subtotalElements = document.querySelectorAll(".cart-subtotal");
        subtotalElements.forEach(element => {
            element.innerHTML = `Subtotal (${productContainers.length} items): <b>${subtotal.toFixed(2)}</b>`;
        });

        // Update subtotal on the right side
        const cartSubtotalRight = document.querySelector(".cart-right .cart-subtotal");
        if (cartSubtotalRight) {
            cartSubtotalRight.innerHTML = `Subtotal (${productContainers.length} items): <b>${subtotal.toFixed(2)}</b>`;
        }
    }
});




</script>
</body>

</html>