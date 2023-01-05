<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <title>Simple Dental Booking</title>
      <link rel="stylesheet" href="materialize/css/materialize.min.css">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <script src="https://code.jquery.com/jquery-3.6.1.min.js"  integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="  crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <style>
         * {
         box-sizing: border-box;
         }
         html {
         font-family: GillSans, Calibri, Trebuchet, sans-serif;
         }
         input[type="text"],input[type="password"],input[type="email"]{
         width: 100%;
         padding: 12px;
         border: 1px solid #ccc;
         margin:3px 0px;
         resize: vertical;
         }
         .submit-btn{
         margin:5px 0px;
         padding:10px;
         width:100%;
         font-size:16px;
         color:#eee;
         background:#2da2d8;
         border:none;
         cursor: pointer;
         }
         h4{
         color:#2da2d8;
         }
         a.active {
         background-color: #2da2d8;
         }
      </style>
</head>
<body>

          <div id="book_appt"class="form-wrapper section scrollspy"style="box-shadow:1px 1px 5px 1px #eee;overflow:hidden;width:400px;height:auto;padding:20px; margin:100px auto;border:1px solid #eee;background:#ffff;">
         <form action="functions/insert_func.php" style="max-width:100%;border:px solid red;" method="post">
            <h4>Admin Login</h4>
            <input type="text" placeholder="Username" name="uname"><br>
            <input type="password" placeholder="Password" name="pass"><br>

      
            <input type="submit" value="Login" name="login"class="submit-btn">
         </form>
      </div>
</body>


