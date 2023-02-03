<!DOCTYPE html>
<html>
  <head>
    <title>My E-Store</title>
    <style>
      /* Add CSS styles here */
      body {
        font-family: Arial, sans-serif;
      }

      h1 {
        text-align: center;
        margin-top: 50px;
      }

      .product {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin: 50px 0;
        padding: 20px;
        border: 1px solid lightgray;
        border-radius: 10px;
      }

      .product-image {
        width: 200px;
        height: 200px;
        background-size: cover;
        background-position: center;
        margin-right: 20px;
      }

      .product-title {
        font-size: 24px;
        font-weight: bold;
      }

      .product-price {
        font-size: 18px;
        color: green;
      }

      .btn-add-to-cart {
        background-color: green;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
      }
    </style>
  </head>
  <body>
    <h1>My E-Store</h1>

    <!-- Product 1 -->
    <div class="product">
      <div class="product-image" style="background-image: url(product-1.jpg)"></div>
      <div class="product-title">Product 1</div>
      <div class="product-price">$49.99</div>
      <button class="btn-add-to-cart">Add to Cart</button>
    </div>

    <!-- Product 2 -->
    <div class="product">
      <div class="product-image" style="background-image: url(product-2.jpg)"></div>
      <div class="product-title">Product 2</div>
      <div class="product-price">$29.99</div>
      <button class="btn-add-to-cart">Add to Cart</button>
    </div>

    <!-- Product 3 -->
    <div class="product">
      <div class="product-image" style="background-image: url(product-3.jpg)"></div>
      <div class="product-title">Product 3</div>
      <div class="product-price">$59.99</div>
      <button class="btn-add-to-cart">Add to Cart</button>
    </div>

    <script>
      // Add JavaScript code here
      const addToCartButtons = document.querySelectorAll('.btn-add-to-cart');

      addToCartButtons.forEach(function(button) {
        button.addEventListener('click', function() {
          alert('Product added to cart!');
        });
      });
    </script>
  </body>
</html>
