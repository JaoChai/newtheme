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
        <h2>Edit Auccount Detail</h2>
        <form>

          <div class="form-group">
            <label for="address">Username</label>
            <input type="text" class="form-control" id="Username" placeholder="Username">
          </div>


          <div class="form-group">
            <label for="jung">Gender</label>
            <input type="text" class="form-control" id="jung" placeholder="Gender">
          </div>

          <div class="form-group">
            <label for="zip">Name</label>
            <input type="text" class="form-control" id="zip" placeholder="Name">
          </div>

          <div class="form-group">
            <label for="address">Lname</label>
            <input type="text"class="form-control" id="Address" placeholder="Lname">
          </div>


          <div class="form-group">
            <label for="jung">Birthday</label>
            <input type="text" class="form-control" id="jung" placeholder="Birthday">
          </div>

          <div class="form-group">
            <label for="zip">E-Mail</label>
            <input type="text" class="form-control" id="zip" placeholder="E-Mail">
          </div>

          <div class="form-group">
            <label for="zip">Phone</label>
            <input type="text" class="form-control" id="zip" placeholder="Phone">
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
