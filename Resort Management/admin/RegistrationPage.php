<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp page</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body >
<?php
	include('connection.php');

    if(isset($_POST['submit']))
    {
        $fullname=mysqli_real_escape_string($conn,$_POST['name']);
        $contact=mysqli_real_escape_string($conn,$_POST['contact']);
        $mail=mysqli_real_escape_string($conn,$_POST['mail']);
        $address=mysqli_real_escape_string($conn,$_POST['address']);
        $password=mysqli_real_escape_string($conn,$_POST['password']);

        $pass=password_hash($password,PASSWORD_BCRYPT);
        $mail=strtolower($mail);
        $emailquery="select * from customer where email='$mail' ";
        $query=mysqli_query($conn,$emailquery);
        $emailcount=mysqli_num_rows($query);

        if(filter_var($mail,FILTER_VALIDATE_EMAIL))
        {
            if($emailcount>0){
				?>
					<script>
						alert("Email already exists");
					</script>
					<?php
            }	
        
        else
        {

            $insertquery="INSERT into customer(fullname, contact, email, address, password)
						values('$fullname',' $contact','$mail','$address','$pass')";
            $iquery=mysqli_query($conn,$insertquery);

            if($iquery){
                ?>
                <script>
                    alert("Registration Successful");
                </script>
                <?php
            }
            else{

                ?>
					<script>
						alert("Registration NOT Done");
					</script>
					<?php
            }
        }

        }
        else{
            ?>
					<script>
						alert("Incorrect email...");
					</script>
			<?php
        }
    
}
?>
    
       <div id="out">
        <h2> <u>SIGN UP</u></h2>
        </div><br>
        <DIV id="in">
            <form action="" method="post">
                <br>
                <i><b><input type="text" class="col" name="name" placeholder="Enter your user name" required><br><br>
                    <input type="tel" class="col" name="contact" placeholder="Enter Contact number" required><br><br>
                    <input type="email" class="col1" name="mail" placeholder="Enter your mail id"required><br><br>
                   <input type="text" class="col2" name="address"  placeholder=" Enter address:"required><br><br>
                    <input type="password" class="col3" name="password" placeholder="Enter your password:" required><br><br></b></i>
                    <a href="index.html" style="color: white;font-size: small;">Go to Website</a> <br><br>

                    <center><input type="submit" id="col4" name="submit"  placeholder=" Submit"></center><br><br>

            </form>
        </DIV>
       
    
</body>
</html>