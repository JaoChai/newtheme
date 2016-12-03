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
        <div class="table-responsive">
          <table class="table table-bordered table-striped">
            <tbody>

              <tr>
                <td><strong>Username</strong></td>
                <td><strong>demo<strong></td>
                </tr>

                <tr>
                  <td><strong>Gender</strong></td>
                  <td><strong>Man<strong></td>
                </tr>

                <tr>
                  <td><strong>Name</strong></td>
                  <td><strong>Demo<strong></td>
                </tr>


                <tr>
                  <td><strong>Lname</strong></td>
                  <td><strong>Ondemo<strong></td>
                  </tr>

                  <tr>
                    <td><strong>Birthday</strong></td>
                    <td><strong>18/08/1996<strong></td>
                  </tr>

                  <tr>
                    <td><strong>E-Mail</strong></td>
                    <td><strong>demo@demo.com<strong></td>
                  </tr>

                  <tr>
                    <td><strong>Phone</strong></td>
                    <td><strong>0862211887<strong></td>
                  </tr>


                </tbody>
              </table>

              <div>
                <a href="editaccount.php" class="btn btn-lg" style="width:200px;"></i>
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
