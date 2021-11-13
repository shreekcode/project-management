<?php
require_once 'include/header.php';
?>
        <div>
            <h2 style="text-align: center;"><u>Login</u></h2>
            <form name="login" action="include/login_inc.php" method="post" style="text-align: center;">
                <table style="margin-left:auto;margin-right:auto;" cellpadding="08" cellspacing="08">
                    <tr>
                        <td><label for="user_id">User_id : </label></td>
                        <td><input type="text" name="user_id" placeholder="User id"></td>
                    </tr>
                    <tr>
                        <td><label for="password">Password : </label></td>
                        <td><input type="password" name="password" placeholder="Password"></td>
                    </tr>
                </table>
                <br>
                <button type="submit" name="submit" style="text-align: center;background-color:black;color:white;width:100px;height:30px;">Log in</button>
            </form>
        </div>
        <div style="text-align:center;">
          <h3>No account?</h3>
          <a href="register.php">Register Now!</a>
        </div>
<?php
require_once 'include/footer.php';

 ?>
