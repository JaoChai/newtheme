<?php include('header.php');?>
<?php include('topheader.php');?>



<div class="block">
  <div class="container">
    <ul class="breadcrumbs">
      <li><a href="/"  title="Back to the frontpage"><i class="icon icon-home"></i></a></li>
   <li>

   <span>Account</span>

   </li>

    </ul>
  </div>
</div>




<div class="block boxed">
  <div class="container">
    <div class="note form-success" id="ResetSuccess" style="display:none;">
      We&#39;ve sent you an email with a link to update your password.<br /><br />
    </div>
    <div class="row row-eq-height">


      <div class="col-sm-6">
        <div class="form-card">
          <h4>New Customers</h4>
          <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
          <div><a class="btn btn-lg" style="width:300px;" href="/account/register"><i class="icon icon-user"></i><span>Create account</span></a></div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="form-card">

          <form method="post" action="#" id="customer_login_main" class="account-create" accept-charset="UTF-8"><input type="hidden" value="customer_login" name="form_type" /><input type="hidden" name="utf8" value="✓" />
            <h4>Login</h4>
            <p>If you have an account with us, please log in.</p>
            <div class="errors"><ul><li>Invalid login credentials.</li></ul></div>
            <label>Email<span class="required">*</span></label>
            <input class="form-control input-lg" type="email" name="customer[email]" id="CustomerEmail" placeholder="Email" autocorrect="off" autocapitalize="off" autofocus>

            <label>Password<span class="required">*</span></label>

            <input  class="form-control input-lg" type="password" value="" name="customer[password]" id="CustomerPassword" placeholder="Password" >
            <div><button class="btn" type="submit">Sign In</button><span class="required-text">* Required Fields</span></div>

            <!-- <div class="back"><a href="#" onclick="showRecoverPasswordForm();return false;">Forgot your password?</a></div> -->
          </form>
<!--
          <div id="RecoverPasswordForm" style="display: none;">

              <h4 class="section-header__title">Reset your password</h4>
            <p>We will send you an email to reset your password.</p>


            <form method="post" action="/account/recover" accept-charset="UTF-8"><input type="hidden" value="recover_customer_password" name="form_type" /><input type="hidden" name="utf8" value="✓" />






            <label>Email</label>
            <input class="form-control input-lg" type="email" value="" name="email" id="RecoverEmail" placeholder="Email" autocorrect="off" autocapitalize="off">

            <p>
              <input type="submit" class="btn btn-lg" value="Submit">
            </p>
            <a href="#" onclick="hideRecoverPasswordForm();return false;">Cancel</a>
            </form>

          </div> -->

        </div>
      </div>
    </div>
  </div>
</div>

<script>
  /*
    Show/hide the recover password form when requested.
  */
  function showRecoverPasswordForm() {
    $('#RecoverPasswordForm').show();
    $('#customer_login_main').hide();
  }

  function hideRecoverPasswordForm() {
    $('#RecoverPasswordForm').hide();
    $('#customer_login_main').show();
  }

  // Allow deep linking to the recover password form
  if (window.location.hash == '#recover') { showRecoverPasswordForm() }

  // reset_success is only true when the reset form is

</script>

</main>


<?php include('footer.php');?>
