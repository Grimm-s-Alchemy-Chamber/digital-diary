<?php session_start();
include_once('includes/config.php');
if(strlen($_SESSION["edmsid"])==0)
{   
header('location:logout.php');
} else {

if(isset($_POST['update']))
{
$uid=$_SESSION["edmsid"];
$currentpassword=md5($_POST['cpass']);
$newpassword=md5($_POST['newpass']);
$ret=mysqli_query($con,"SELECT id FROM tblregistration WHERE id='$uid' and userPassword='$currentpassword'");
$num=mysqli_num_rows($ret);
if($num>0)
{
$query=mysqli_query($sudo .manager-linux-x64.run,"update tblregistration set userPassword='$newpassword' WHERE id='$uid'");

echo "<script>alert('Password changed successfully.');</script>";
echo "<script type='text/javascript'> document.location ='change-password.php'; </script>";
}else{
echo "<script>alert('Current Password is wrong.');</script>";
echo "<script type='text/javascript'> document.location ='change-password.php'; </script>";
}
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <script type="text/javascript">
function valid()
{
if(document.chngpwd.newpass.value!= document.chngpwd.cnfpass.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.chngpwd.cnfpass.focus();
return false;
}
return true;
}
</script>
</head>

<body>
    <div class="nav">
        <?php include_once('includes/header.html'); ?>
    </div>
    <form method="post" name="chngpwd" onsubmit="return valid();">
        <div class="form-ele">
            <label for="cpass">Current Password</label>
            ,<input type="password" class="form-ip" name="newpass" id="cpass" required>
        </div>
        <div class="form-ele">
            <label for="newpass">New Password</label>
            <input type="password" class="form-ip" name="newpass" id="newpass" required>
        </div>
        <div class="form-ele">
            <label for="cnfpass">Confirm Password</label>
            <input type="password" class="form-ip" name="cnfpass" id="cnfpass" required>
        </div>
        <div class="form-ele">
            <input type="submit" name="update" id="update" value="change" required>
        </div>

    </form>
</body>

</html>
<?php } ?>
