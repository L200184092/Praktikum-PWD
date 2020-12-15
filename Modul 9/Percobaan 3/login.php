<center>
<form method='POST' action='login.php'>
    <table border='0'>
        <tr>
            <td>Username</td>
            <td>:</td>
            <td><input type="text" name="username" id="username"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td>:</td>
            <td><input type="password" name="password" id="password"></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" value="Submit" name="submit"></td>
        </tr>
    </table>
</form>
</center>
<?php
    session_start();
    error_reporting(E_ALL^E_NOTICE^E_DEPRECATED);
    mysqli_connect('localhost','root','','informatika');
    $username=$_POST['username'];
    $password=$_POST['password'];
    $submit=$_POST['submit'];
    if($submit){
        $sql="select * from user where username='$username' and password='$password'";
        $query=mysqli_query($sql);
        $row=mysqli_fetch_array($query);
        if($row['username']!=""){
            $_SESSION['username']=$row['username'];
            $_SESSION['status']=$row['status'];
?>
    <script language script="JavaScript">
        alert("Anda Berhasil Login Sebagai <?php echo $row['username']; ?>");
        document.location='hasillogin.php';
    </script>
<?php
    }else{
?>
    <script language script="JavaScript">
        alert('Gagal Login');
        document.location='login.php';
    </script>
<?php
        }
    }
?>