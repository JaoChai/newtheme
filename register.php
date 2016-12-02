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
      <h3>สมัครเลย</h3>
      <br/>
      <form method="post" action="#" id="create_customer" class="account-create" accept-charset="UTF-8">
        <input type="hidden" value="create_customer" name="form_type" /><input type="hidden" name="utf8" value="✓" />
        <div class="col-sm-6">
        <label>ชื่อ<span class="required">*</span></label>
        <input type="text" class="form-control input-lg" name="customer[first_name]" id="FirstName"  autocapitalize="words" autofocus>
        </div>

      <div class="col-sm-6">
        <label>นามสกุล<span class="required">*</span></label>
        <input class="form-control input-lg" type="text" name="customer[last_name]" id="LastName"  autocapitalize="words">
      </div>

        <label>Email<span class="required">*</span></label>
        <input class="form-control input-lg" type="email" name="customer[email]" id="Email"  autocorrect="off" autocapitalize="off">

        <label>Password<span class="required">*</span></label>
        <input class="form-control input-lg" type="password" name="customer[password]" id="CreatePassword" >

        <div><button class="btn">สมัครเลย</button><span class="required-text">* Required Fields</span></div>
      </form>

    </div>
  </div>
</div>
</main>





<?php include('footer.php');?>
