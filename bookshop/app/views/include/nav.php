<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Home</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a href="about.php">About</a>
                </li>
                <li>
                    <a href="contact.php">Contact</a>
                </li>
            </ul>


            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle"
                       data-toggle="dropdown"><b>Login</b> <span
                            class="caret"></span></a>
                    <ul id="login-dp" class="dropdown-menu">
                        <li>
                            <div class="row">
                                <div class="col-md-12">

                                    <form class="form" role="form" method="post"
                                          action="index.php?op=login"
                                          accept-charset="UTF-8" id="login-nav">
                                        <?php
                                        if ($_GET['msg'] == "loginFail") {
                                            echo "<label style='color:red;'>Login Fail!</label> ";
                                        }
                                        ?>

                                        <div class="form-group">
                                            <label class="sr-only"
                                                   for="exampleInputEmail2">Username</label>
                                            <input type="text"
                                                   class="form-control"
                                                   id="exampleInputEmail2"
                                                   placeholder="Email address"
                                                   name="username" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only"
                                                   for="exampleInputPassword2">Password</label>
                                            <input type="password"
                                                   name="password"
                                                   class="form-control"
                                                   id="exampleInputPassword2"
                                                   placeholder="Password"
                                                   required>

                                            <div class="help-block text-right">
                                                <a href="">Forget the password
                                                    ?</a></div>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit"
                                                    class="btn btn-primary btn-block"
                                                    name="submit">Sign in
                                            </button>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox"
                                                       name="keepLogin"> keep me
                                                logged-in
                                            </label>
                                        </div>
                                    </form>
                                </div>
                                <div class="bottom text-center">
                                    New here ? <a href="signUp.php"><b>Join
                                            Us</b></a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>


        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
