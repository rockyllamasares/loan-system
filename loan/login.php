
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/cyborg.css">
	<title>Log in as admin</title>
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
        input{
            padding: 20px 40px;
            height: 20%;
            width: 20%;
        }
    </style>
</head>

<body>
    <div>
    <h1>LOG IN AS ADMIN</h1>

    </div>
    </div>
<center>
    <form action="view.php" method="post">
<input type="text" name="username" id="username" placeholder="Username" required><br><br>
<input type="password" name="password" id="password" placeholder="Password" required><br><br>
<input type="submit" value="Login" onclick="myFunction()">
</form>
</center>
</div>
<script>
function myFunction() {
  alert(" thank you!!");
}
</script>
</body>
</html>