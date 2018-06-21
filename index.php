<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
     <!-- Bootstrap-->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <title>Steam API Exam Code</title>
</head>
<body style="background-color: #384a68;color:#fff">
<div align="center">
<img src="steam.png" alt="Steam Logo" align="center" style="padding-top:50px;width:200px;">
</div>


<form action="result.php" method="post">
<div align="center">
    <h1 style="padding-top 50px;">Steam User Lookup</h1>
  <div class="input-group mb-3" style="padding-top:20px;width:400px">
    <input type="text" class="form-control" placeholder="76561198357369235" name="sid" id="sid">
    <div class="input-group-append">
      <span type="submit" class="input-group-text" >SteamID64</span>
    </div>
    
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>

<p style="padding-top:380px;text-align:center">Powered by Steam, a registered trademark of Valve Corporation.</p>
</body>
</html>