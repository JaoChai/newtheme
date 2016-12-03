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
        <h2>My Address</h2>
        <div class="table-responsive">
          <table class="table table-bordered table-striped">
            <tbody>

              <tr>
                <td><strong>Address</strong></td>
                <td><strong>982 ถ.ร่วมนนทรี ต.ไทรม้า อ.ไทรม้า<strong></td>
                </tr>

                <tr>
                  <td><strong>Province</strong></td>
                  <td><strong>กรุงเทพ<strong></td>
                </tr>

                <tr>
                  <td><strong>Zip</strong></td>
                  <td><strong>27120<strong></td>
                </tr>


                </tbody>
              </table>

              <div>
                <a href="editaddress.php" class="btn btn-lg" style="width:200px;"></i>
                  <span>Edit</span></a>
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
