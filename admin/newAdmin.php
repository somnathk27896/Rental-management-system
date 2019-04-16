<?php
    require_once 'config.php';
    //error_reporting(0);
    session_start();
    if($_SESSION["name"]=="")
    {
?>
    <script type="text/javascript">
        window.location="index.php";
    </script>
<?php
    }
?>
<html>
<body>

<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="row">
        <h2>Add New Admin</h2>
        <hr />
        <div class="row">
            <div class="col-sm-8">
                <form method="post" name="">
                    <div class="form-group float-label-control">
                        <label for="">Admin Username</label>
                        <input type="text" name="name" class="form-control" placeholder="Username">
                    </div>
                    <div class="form-group float-label-control">
                        <label for="">Admin Password</label>
                        <input type="password" name="pass" class="form-control" placeholder="Password">
                    </div>
                    <input type=submit name="add" class="btn-primary">
                </form>
            </div>
        </div>
    </div>
</div>
<?php
if(isset($_POST["add"]))
{
$con= mysqli_connect("localhost","root","");
mysqli_select_db($con,"avlroom");


$res=mysqli_query($con, "select * from admin where name='$_POST[name]'");
if(mysqli_num_rows($res))
{
?>
<script type="text/javascript">
alert("ADMIN ALREADY EXIST");
</script>
<?php

}
else
{
mysqli_query($con, "insert into admin values('','$_POST[name]','$_POST[pass]')");
?>
<script type="text/javascript">
alert("ADMIN CREATED SUCCESSFULLY");
window.location="index.php";

</script>		
<?php
}
}
?>
</body>
</html>