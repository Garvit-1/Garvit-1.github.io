<!DOCTYPE html>
<html lang="en">
<?php 

session_start()
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-Up</title>
    <link rel="icon" type="image/ico" href="img\android-chrome-512x512.png" >
    <style>
        * {
            margin: 0px;
            padding: 0px;

        }

        header {
            height: 10vh;
            background: black;
        }

        header a {
            float: left;
            color: white;
            text-align: center;
            padding: 20px 20px;
            text-decoration: none;
            font-size: 17px;
        }

        header a:hover {
            background-color: #ddd;
            color: black;
        }

        main {
            min-height: 80vh;
            padding: 20px;
            background-image: url("https://images.pexels.com/photos/3184357/pexels-photo-3184357.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2");
            background-size: cover;
            background-repeat: no-repeat;
            
        }

        form {
            border: 2px solid black;
            margin: auto;
            width: 60em;
            background: rgb(187 219 242 / 0.67);
            text-align: center;
        }

        form:hover {
            background: rgb(187 219 242);

        }

        .btn {
            height: 30px;
            width: 70px;
            background: #00b8ff8f;
            border-radius: 5px;
            cursor: pointer;
        }

        footer {
            height: 5vh;
            background: black;
            color: white;
            text-align: center;
        }

        .fin {
            height: 20px;
            border-radius: 5px;

        }
    </style>
</head>

<body>
    <header>
        <ul>
            <a href="#"> Home </a>
            <a href="##">  </a>
            <a href="#">  </a>
            <ul>
    </header>
    <main>
        <h1>Leave Page</h1><br>
        <form id="leave"  name="leave" action="<?php echo $_SERVER['PHP_SELF'];?>" method="Post">
            <br>
            <label for="reason">Reason</label>
            <input class="fin" type="text" id="fname" name="fname" placeholder="Enter Leave Reason" autofocus required><br><br>
            <label for="from">From:</label>
            <input class="fin" type="date" id="from" name="from" placeholder="Date From" required>
            <label for="to">To:</label>
            <input class="fin" type="date" id="to" name="to" placeholder="Date To" required>
            <br>
            <br>
            
            <input class="btn" type="submit" value="Apply">
            <input class="btn" type="reset" name="reset">
            <br>
            <br>
            <p style="color:red" id="alert" name="alert"> </p>
        </form>


    </main>
    <footer>
        <h> Copyrights &copy Company</h>
    </footer>
</body>

</html>

<?php
 $profile=$_SESSION['user'];
 if($profile==true){
 }
 else{
    header('location:login.html');
 }
if(isset($_POST)){
    
$day1 = strtotime($_POST["date1"]);

$uname=$_SESSION['user'];
 foreach($xml as $result){
    if($result->username==$uname){
    
  }
  else{
    continue;
  }
}
}