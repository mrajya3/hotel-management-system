<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<style type="text/css">
body{
background-image:url(share.JPG);
background-size:cover;
}
.container{
width:300px;
height:230px;
background-color:#FFCC00;
margin:0 auto;
margin-top:40px;
padding-top:10px;
padding-left:50px;
opacity: 0.9;
    filter: alpha(opacity=90); 

}
.container input[type="email"]{
width:200px;
}
.container input[type="password"]{
width:200px;
}
.container input[type="text"]{
width:200px;
}

</style>

<title>login</title>
</head>

<body>


<div class="container">

<form method="post" action="admin.php"> 
Username: <br />
<input type="text" name="username" class="textinput" placeholder="enter your username" required /><br />
Password:<br />
 <input type="password" name="password" placeholder="enter your password" class="textinput" required/><br /> <br />
<br /><input type="submit" name="login_btn"  value="Let me in" /><br><br />
<input type="checkbox" /> Remember me
</form>
</div>
    </body>
</html>