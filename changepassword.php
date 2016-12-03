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
        <h2>Change Password</h2>
        <form>
          <div class="form-group">
            <label for="password1">Please enter your password.</label>
              <input type="text" class="form-control" id="password1">
          </div>


          <div class="form-group">
            <label for="password2">Please enter your password again.</label>
            <input type="text" class="form-control" id="password2">
          </div>

          <button type="submit" class="btn">Save</button>
        </form>

      </div>

    </div>
  </div>
</div>
</div>
</div>
</div>


</main>



<?php include('footer.php');?>
