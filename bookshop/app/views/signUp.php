<?php
include( 'include/header.php' );

include( 'include/nav.php' );
?>
<style type="text/css" media="screen">
    .form .form-control {
        margin-bottom : 10px;
    }
</style>
<div class="container" id="wrap">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <form action="signUp.php" method="post" accept-charset="utf-8"
                  class="form" role="form">
                <legend>Sign Up</legend>
                <div class="row">
                    <div class="col-xs-6 col-md-6">
                        <input type="text" name="firstName" value=""
                               class="form-control input-lg"
                               placeholder="First Name"/></div>
                    <div class="col-xs-6 col-md-6">
                        <input type="text" name="lastName" value=""
                               class="form-control input-lg"
                               placeholder="Last Name"/></div>
                </div>
     <input type="text" name="username" value=""
                       class="form-control input-lg"
                       placeholder="Username"/>
                <input type="text" name="email" value=""
                       class="form-control input-lg"
                       placeholder="Your Email"/>
<input type="password"
                                                        name="password" value=""
                                                        class="form-control input-lg"
                                                        placeholder="Password"/><input
                    type="password" name="confirm_password" value=""
                    class="form-control input-lg"
                    placeholder="Confirm Password"/>
                <span class="help-block">By clicking Create my account, you agree to our Terms and that you have read our Data Use Policy, including our Cookie Use.</span>
                <button class="btn btn-lg btn-primary btn-block signup-btn"
                        type="submit" name="submit">
                    Create my account
                </button>
            </form>
        </div>
    </div>
</div>
</div>

<?php
include( 'include/footer.php' );
?>





