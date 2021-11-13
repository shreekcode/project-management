<?php
require_once 'include/header.php';
?>

        <div>
            <h2 style="text-align: center;"><u>Register</u></h2>
            <form name="register" action="include/register_inc.php" method="post" style="text-align: center;">
                <table style="margin-left:auto;margin-right:auto;" cellpadding="08" cellspacing="08">
                    <tr>
                        <td style="text-align:right;"><label for="name">Name : </label></td>
                        <td><input type="text" name="name" placeholder="Name"></td>
                    </tr>
                    <tr>
                        <td style="text-align:right;"><label for="user_id">User_id : </label></td>
                        <td><input type="text" name="user_id" placeholder="User id"></td>
                    </tr>
                    <tr>
                        <td style="text-align:right;"><label for="password">Password : </label></td>
                        <td><input type="password" name="password" placeholder="Password"></td>
                    </tr>
                    <tr>
                        <td style="text-align:right;"><label for="confirmpassword">Confirm Password : </label></td>
                        <td><input type="password" name="confirm_password" placeholder="Confirm Password"></td>
                    </tr>
                </table>
                <button type="submit" name="submit" style="text-align: center;background-color:black;color:white;width:100px;height:30px;">Register</button>
            </form>
        </div>
<?php
require_once 'include/footer.php';
 ?>
