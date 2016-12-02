<?php include('header.php');?>
<?php include('topheader.php');?>



<div class="block">
  <div class="container">
    <ul class="breadcrumbs">
      <li><a href="/"  title="Back to the frontpage"><i class="icon icon-home"></i></a></li>
      <li>

        <span>Create Account</span>
      </li>
    </ul>
  </div>
</div>

<div class="block boxed">
  <div class="container">
    <div class="form-card">
      <h2>Register<p class="lead">Name - last name as identification. To insist on auction</p></h2>
            <form role="form" class="form-horizontal">
              <div class="form-group">
                  <div class="col-sm-3"><label>First name</label><input type="text" class="form-control" placeholder="First"></div>
                  <div class="col-sm-3"><label>Last name</label><input type="text" class="form-control" placeholder="Last"></div>
              </div>


              <div class="form-group">
                <div class="col-sm-3"><label>Birthday</label><input type="text" class="form-control" placeholder="01/02/2534"></div>
                <div class="col-sm-3"><label>Gender</label><input type="text" class="form-control" placeholder="Male & Female"></div>
              </div>

              <div class="form-group">
                  <label class="col-sm-12" for="Phone">Phone</label>
                  <div class="col-sm-6"><input type="text" class="form-control"  placeholder="Phone Number"></textarea></div>
              </div>

              <div class="form-group">
                  <label class="col-sm-12" for="TextArea">Address</label>
                  <div class="col-sm-6"><textarea class="form-control" id="TextArea"></textarea></div>
              </div>

              <div class="form-group">
                  <label class="col-sm-1" for="Province">Province</label>
                  <div class="col-sm-5"><input type="province" class="form-control" id="province" placeholder="Province"></div>
              </div>

              <div class="form-group">
                  <label class="col-sm-1" for="inputEmail1">Zipcode</label>
                  <div class="col-sm-5"><input type="Zipcode" class="form-control" id="Zipcode" placeholder="Zipcode"></div>
              </div>

              <h2>Please<p class="lead">Data logging</p></h2>
              <div class="form-group">
                  <label class="col-sm-1" for="inputEmail1">Username</label>
                  <div class="col-sm-5"><input type="username" class="form-control" id="username" placeholder="username"></div>
              </div>
                <div class="form-group">
                    <label class="col-sm-1" for="inputEmail1">Email</label>
                    <div class="col-sm-5"><input type="email" class="form-control" id="inputEmail1" placeholder="Email"></div>
                </div>
                <div class="form-group">
                    <label class="col-sm-1" for="inputPassword1">Password</label>
                    <div class="col-sm-5"><input type="password" class="form-control" id="inputPassword1" placeholder="Password"></div>
                </div>


                <div class="form-group">
                    <div class="col-sm-6">
                        <button type="submit" class="btn btn-info pull-right">Submit</button>
                    </div>
                </div>
                
          </form>
    </div>


  </div>
</div>





</main>

<?php include('footer.php');?>
