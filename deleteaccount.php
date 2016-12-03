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
      <h1>My Account</h1>
    </div>
  </div>
</div>


<div class="grid">
  <div class="form-card">
    <?php include('profilemenu.php');?>
    <div class="col-md-9">
      <div>
        <h2>Auccount Detail</h2>
        ปิดบัญชี BidCups ของคุณ

        สิ่งสำคัญ: คุณจะไม่สามารถลงทะเบียนได้อีกครั้ง โดยใช้ที่อยู่อีเมลล์นี้ภายใน 2 เดือน และสิทธิ์ประมูลทั้งหมดจะถูกยกเลิก
        <div class="checkbox">
          <label>
            <input type="checkbox"> ใช่ฉันต้องการที่จะปิดบัญชี BidCups ของฉัน
          </label>
        </div>

              <div>
                <a href="editaccount.php" class="btn btn-lg" style="width:200px;"></i>
                  <span>Delete</span></a>
                </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>


</main>



<?php include('footer.php');?>
