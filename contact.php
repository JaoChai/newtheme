<?php include('header.php');?>
<?php include('topheader.php');?>

<div class="block">
  <div class="container">
    <ul class="breadcrumbs">
      <li><a href="/"  title="Back to the frontpage"><i class="icon icon-home"></i></a></li>
      <li>

        <span></span>
      </li>
    </ul>
  </div>
</div>

<div class="block">
 <div class="container">
   <div class="row">
     <div class="col-sm-5">
       <div class="text-wrapper">
         <h2>ออฟฟิต</h2>
         <div class="address-block">
           <h3>ที่อยู่</h3><ul class='simple-list'><li><i class='icon icon-location-pin'></i>เลขที่: xxxx</li><li><i class='icon icon-phone'></i>เบอร์โทรศัพท์: xxxx</li><li><i class='icon icon-phone'></i>แฟกซ์: 123456789xxxx</li><li><i class='icon icon-close-envelope'></i>อีเมลล์: <a href='#'>bidcups@gmail.com</a></li></ul>
         </div>
         <div class="address-block last">
           <!-- <h3>ADDRESS 2</h3><ul class='simple-list'><li><i class='icon icon-location-pin'></i>Adress: 8901 Marmora Road, Glasgow D04 64 GR, New York</li><li><i class='icon icon-phone'></i>Phone: 9823xxx</li><li><i class='icon icon-phone'></i>Fax: 123456789xxxx</li><li><i class='icon icon-close-envelope'></i>Email: <a href='mailto:support@seiko.com'>Seico@example.com</a></li></ul> -->
         </div>
       </div>
     </div>
     <div class="col-sm-7">
       <div class="text-wrapper">
         <h2>ติดต่อเรา</h2>
         <form method="post" action="/contact#contact_form" id="contact_form" class="contact-form white" accept-charset="UTF-8"><input type="hidden" value="contact" name="form_type" /><input type="hidden" name="utf8" value="✓" />


           <input class="form-control input-lg" type="text" id="ContactFormName" name="name" placeholder="ชื่อ"  value="">

           <input class="form-control input-lg" type="email" id="ContactFormEmail" name="email" placeholder="อีเมลล์:"  value="">

           <textarea  class="form-control input-lg" rows="10" id="ContactFormMessage" name="body" placeholder="ข้อความ"></textarea>

           <div><button class="btn btn-lg" type="submit">ส่ง</button></div>
         </form>
       </div>
     </div>
   </div>
 </div>
</div>

</main>


<?php include('footer.php');?>
