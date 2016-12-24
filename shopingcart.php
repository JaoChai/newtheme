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
          รูปสินค้า
        </div>
        <div class="name">
          ชื่อสินค้า
        </div>
        <div class="price">
          ค่าส่ง
        </div>
        <div class="subtotal">
          ราคา
        </div>
      </div>

      <div class="table-row">
        <div class="photo">
          <a href="#" ><img src="//cdn.shopify.com/s/files/1/1323/8471/products/ALCATEL-OneTouch-Idol-3-Global-Unlocked-4G_medium.jpg?v=1471137937" alt="ALCATEL OneTouch"></a>
        </div>
        <div class="name">
          <a href="#">
            ALCATEL OneTouch
          </a>

        </div>
        <div class="price">
          <span class=money>฿20</span>
        </div>

        <div class="subtotal">
            <span class=money>฿100</span>
        </div>
      </div>

    </div>
    <div class="row">
      <div class="col-md-3 total-wrapper">
        <table class="total-price">

          <tr  class="total">
            <td>รวมทั้งหมด</td>
            <td><span class=money>$124.00</span></td>
          </tr>
        </table>
        <div class="cart-action">
          <div><button class="btn" type="submit" name="checkout">สั่งซื้อ</button></div>

        </div>
      </div>



</main>

<?php include('footer.php');?>
