<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/cyborg.css">
	<title>Loan Management System</title>
    <style>
        div {text-align: center;
        }
        
        h1,a {font-family: "Times New Roman", Times, serif;
            color:crimson;
        }
        div {
            border: 3px solid red;
            border-radius: 115px;
            margin: 50px 350px 75px 350px;
            
            }
        table{text-align: center;
        }
    </style>
</head>

<body>
<div>
      <p><h1>Loan Management System</h1></p><hr>
   
    <button type="button" class="btn btn-outline-success"> 
	<a href="index.php"> HOME</a>
    </button> 
    <button type="button" class="btn btn-outline-success"> 
    <a href="pages/about.php"> ABOUT</a>
    </button> 
    <button type="button" class="btn btn-outline-success"> 
    <a href="login.php" onclick="myFunction()"> LOG IN AS ADMIN</a>
    </button> 
    <button type="button" class="btn btn-outline-success"> 
    <a href="pages/setting.php"> SETTING</a>
    </button> <br><br><br><br>

    <button type="button" class="btn btn-outline-primary"> 
    <a href="user.php"> VISIT AS USER</a>
    </button> <br><br><br>

    <script>
function myFunction() {
  alert("Hello friend as of now log in form is open for any username and password for demo of system! thank you!!");
}
</script>
</body>
</html>