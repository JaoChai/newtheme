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
        <form>
          <div class="form-group">
            <label for="address">Address</label>
            <textarea class="form-control" id="Address"></textarea>
          </div>


          <div class="form-group">
            <label for="jung">Province</label>
            <input type="text" class="form-control" id="jung" placeholder="Province">
          </div>

          <div class="form-group">
            <label for="zip">Zip</label>
            <input type="text" class="form-control" id="zip" placeholder="Zip">
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
