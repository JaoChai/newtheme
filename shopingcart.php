<?php include('header.php');?>
<?php include('topheader.php');?>
<div class="block">
  <div class="container">

  </div>
</div>

<br/>

<div class="block">
  <div class="container">
    <div class="title center">
      <h1>Shopping cart</h1>
    </div>
    <form action="/cart" method="post" novalidate class="cart white">
    <div class="cart-table">
      <div class="table-header">
        <div class="photo">
          Product Image
        </div>
        <div class="name">
           Product Name
        </div>
        <div class="price">
          Unit Price
        </div>
        <div class="subtotal">
          Total
        </div>
        <div class="remove">
          <span class="hidden-sm hidden-xs">Remove</span>
        </div>
      </div>

      <div class="table-row">
        <div class="photo">
          <a href="/products/alcatel-onetouch?variant=27503474183" ><img src="//cdn.shopify.com/s/files/1/1323/8471/products/ALCATEL-OneTouch-Idol-3-Global-Unlocked-4G_medium.jpg?v=1471137937" alt="ALCATEL OneTouch"></a>
        </div>
        <div class="name">
          <a href="/products/alcatel-onetouch?variant=27503474183">
            ALCATEL OneTouch
          </a>

        </div>
        <div class="price">
          <span class=money>$124.00</span>
        </div>

        <div class="subtotal">

            <span class=money>$124.00</span>

        </div>
        <div class="remove">
          <a href="#" class="icon icon-close-2"></a>
        </div>
      </div>

    </div>
    <div class="row">
      <div class="col-md-3 total-wrapper">
        <table class="total-price">

          <tr  class="total">
            <td>Subtotal</td>
            <td><span class=money>$124.00</span></td>
          </tr>
        </table>
        <div class="cart-action">
          <div><button class="btn" type="submit" name="checkout">Checkout</button></div>

        </div>
      </div>



</main>

<?php include('footer.php');?>
