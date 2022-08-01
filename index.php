<html>
<head>
    <title>Login Page</title>
    <style type="text/css">
        body {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 14px;
        }

        label {
            font-weight: bold;
            width: 100px;
            font-size: 14px;
        }

        .box {
            border: #666666 solid 1px;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body bgcolor="#FFFFFF">
<div align="center">
    <div style="width:300px; border: solid 1px #333333; " align="left">
        <div style="background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>

        <div style="margin:30px">

            <form action="" method="post">
                <label>UserName :</label><input type="text" name="username" class="box"/><br/><br/>
                <label>Password :</label><input type="password" name="password" class="box"/><br/><br/>
                <input type="checkbox" id="rememberMe" name="rememberMe">
                <label for="rememberMe"> Remember Me</label><br>
                <input type="submit" value=" Submit "/><br/>
            </form>
            <div style="font-size:11px; color:#cc0000; margin-top:10px">
                <?php echo $error; ?>
            </div>
        </div>
    </div>
</div>
</body>
</html>