 <?php
 $url='localhost';
    $username='root';
    $password='';
    $conn=mysqli_connect($url,$username,$password,"localreg");
    if(!$conn){
    die('Could not Connect My Sql:' .mysql_error());
    }

    $name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$feedback = mysqli_real_escape_string($conn, $_POST['feedback']);

    $rs=mysqli_query($conn,"select * from user where email='$email'");
        if (mysqli_num_rows($rs)>0)
        {
            echo "Login Id Already Exists";
            exit;
        }
        $query="insert into user(name,email,feedback) values('$name','$email','$feedback')";
        $rs=mysqli_query($conn,$query)or die("Could Not Perform the Query");
?>
