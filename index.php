<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My first PHP</title>
</head>
<style>
input,textarea{
    display:block;
    margin: 10px;
    width: 70%;
    resize:none;
    border-radius: 5px;
}

.submit{
    display: block;
    background: green;
    margin: 10px auto;
    width: 80%;
    border:none;
height: 35px;
color:white;
}

input{
    height: 30px;
}
form{
    width:50%;
    padding: 15px 20px;
    margin: 15px auto;
    color:white;
    font-size: 1.3em;
    background: #193048;
    border-radius: 40px 0px;
}
</style>
<body>
    <form action="index.php" method="POST">
    <h3>Contact us</h3>
      Firstname:   <input type="text" name="first_name" placeholder="Enter Your First Name" required/>
     Lastname:    <input type="text" name="last_name" placeholder="Enter Your Last Name" required/>
     Email:    <input type="email" name="email" placeholder="Enter Your Email" required />

       Message:  <textarea name="message" id="" cols="30" rows="10"></textarea>

         <button type="submit" class="submit">Send Message</button>
        
</form>
 <?php
 $filename = $_POST['first_name'] ." "  .$_POST['last_name'];
 $filetext ="Fullname: " .$filename. "\n". "Email : " .$_POST['email']. "\n". "Message: " .$_POST['message'] ."\n";
 $file = fopen("$filename.text","w");
 fwrite($file,$filetext);
 fclose($file);
 ?>
</body>
</html>