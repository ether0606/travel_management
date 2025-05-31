
<?php include_once('include/connection.php'); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Travel Managments</title>

    <!-- Bootstrap -->
    <link href="assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="assets/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="assets/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form method="post" action="">
              <h1>Login Form</h1>
              <div>
                <input type="text" name="email" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="password" name="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <button class="btn btn-default submit" name="login" type="submit">Log in</button>
                <a class="reset_pass" href="#">Lost your password?</a>
              </div>
                    <?php
                      if(isset($_POST['login'])){
                        $_POST['password']=sha1($_POST['password']);
                        unset($_POST['login']);
                        $res=$mysqli->common_select('admin','id,full_name, email, password, contact, address, status',$_POST);
                        
                        if($res['error']==0){
                          if($res['data'][0]->status==0){
                            echo "<script>alert('Your account is blocked')</script>";
                          }else{
                            $where=array('id'=>$res['data'][0]->role_id); 
                            $_SESSION['user']=$res['data'][0];
                            $_SESSION['log_user_status']=true;
                            echo "<script>location.href='index.php'</script>";
                          }
                        }else{
                          echo "<script>alert('Login Failed')</script>";
                        }
                        
                      }
                    ?>
              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">New to site?
                  <a href="#signup" class="to_register"> Create an Account </a>
                </p>

                <div class="clearfix"></div>
                <br />

                
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form method="post" action="">
              <h1>Create Account</h1>
              <div>
                <input type="text" name="full_name" class="form-control" placeholder="Full Name" required="" />
              </div>
              <div>
                <input type="email" name="email" class="form-control" placeholder="Email" required="" />
              </div>
              <div>
                <input type="text" name="contact" class="form-control" placeholder="Contact No" required="" />
              </div>
              <div>
                <input type="password" name="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <input type="password" name="c_password" class="form-control" placeholder="Confirm Password" required="" />
              </div>
              <div>
                <button class="btn btn-default submit" name="register" type="submit">Submit</button>
              </div>
<?php
                      if($_POST){
                        if($_POST['c_password'] !== $_POST['password']){
                          echo "Password and confirm password are not same";
                          return false;
                        }
                        $_POST['status']=1;
                        $_POST['created_at']=date('Y-m-d H:i:s');
                        $_POST['password']=sha1($_POST['password']);
                        unset($_POST['c_password'],$_POST['register']);
                        $res=$mysqli->common_insert('admin',$_POST);
                        if($res){
                          echo "<script>window.location.href='login.php'</script>";
                        }
                        else{
                          echo "Something went wrong";
                        }
                      }
                    ?>
              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
