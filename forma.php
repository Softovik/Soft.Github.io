<html>
<head>
<meta charset="utf-8">
<title>Сайт web-студії "Web-DECO" </title>
  <style>
   .shadowtext {
    text-shadow: 1px 2px 2px white, 0 0 1em red; /* Параметры тени */
    color: navy; /* Белый цвет текста */
    font-size: 2em; /* Размер надписи */
   }
  </style>
<script src="js/clock.js"></script>
<script src="js/game.js"></script>
<script type="text/javascript">
function send()
{ 	var valid = true;
	var elems = document.forms[0].elements;
	for(var i=0; i<document.forms[0].length; i++){
		if( elems[i].getAttribute('type') == 'text' ||
			elems[i].getAttribute('type') == 'password' ||
			elems[i].getAttribute('type') == 'email' ) {
			if(elems[i].value == '') {
				elems[i].style.border = '2px solid red';
				valid = false;
			}
		}
	}	
	if(!valid) {
		alert('Заповніть всі поля !!!');
		return false;
	} else 
	{ var r = /^\w+@\w+\.\w{2,4}$/i;
		if (!r.test(elems[3].value)) {
			alert('Заповніть вірно E-Mail !!');
			return false;
	    } else return true;
	}
}	

	
window.onload = function() {
setInterval(clockPainting, 1000);	
document.forms[0].onmousemove = function() {	var elems = document.forms[0].elements;

	for(var i=0; i<elems.length; i++)
		if(elems[i].style.border == '2px solid red')
			elems[i].style.border='';
		} 
	
}	

</script>
<?php
$log_path = 'log.txt';
$user_ip = getenv(REMOTE_ADDR);
$user_browser = getenv(HTTP_USER_AGENT);
$curent_time = date ("ymd H:i:s");
$log_string = "$user_ip|$user_brouser|$curent_time|\r\n";
$file = fopen($log_path,"a");
fwrite($file, $log_string, strlen($log_string));
fclose($file);
?>
</head>

<body background="images/bg.jpg">
  
<table border="1" align="center"   background="images/bg-3.jpg" cellpadding="10" >
 
    <tr>
      <td colspan="2" height="150" align="right" hspace="5">
		<img src="images/logo.png" height="140" width="140" align="left" >	  
	  <font size="5" color="Maroon"><h1 class="shadowtext">Сайт web-студії "Web-DECO"</h1></font></td>
    </tr>
    <tr>
      <td colspan="2">
	  <font size="4"><b><a href="index.php">Наші послуги</a>&nbsp;&nbsp; <a href="input.php">Про нас</a>&nbsp;&nbsp; <a href="log.php">Інформація</a>&nbsp; &nbsp;<a href="foto.php">Галерея робіт</a></b></font></td>
    </tr>
    <tr>
      <td width="30%" valign="top" background="images/bg.jpg">
<center><canvas id="canvas" height="120" width="120"></canvas></center>
<br>
<hr>
	  <font size="5" color="navy"><h2>Новини</h2></font>
      <font size="5" ><ul>
      <li><a href="#">Сайт будіівельної компанії </a></li>
      <li><a href="#">Сайт ТМ "Новашкола" </a></li>
      <li><a href="#">Редизайн сайту classno.com.ua</a></li>
      <li><a href="#">Розробка CMS для Metro Cash&Carry</a></li>
      <li><a href="#">Сайт-візитка дизайнера інтерфейсів</a></li><br>
      <p align="right"><a href="#">інші...</a></p>
      </ul>
      </font>
 	  <hr>
<H1 align="center"><font color="green">Реєстрація</font></H1>
 <form action="forma.php" method="post" onsubmit="return send();">
<TABLE align="center" bgcolor="#ccc">
<TR>
<TD><font color="green">Прізвище</font>: </TD>
<TD><input type="text" size="10" maxlength="20" name="name2"> </TD>
</TR>

<TR>
<TD><font color="green">Ім'я</font> :  </TD>
<TD><input type="text" size="10" maxlength="20" name="name1"> </TD>
</TR>
<TR>
<TD><font color="green">Бажаний Login</font> :  </TD>
<TD><input type="text" size="10" maxlength="20" name="nic1"> </TD>
</TR>
<TR>
<TD><font color="green">E-Mail</font> : </TD>
<TD><input type="email" size="10" maxlength="20" name="email"></TD>
</TR>
<TR>
<TD><font color="green">Пароль</font> : </TD>
<TD><input type="password" size="10" maxlength="20" name="password"></TD>
</TR>
</TABLE>

<p align="center"> 
<input type="submit" value="Зареєструватись" >
<input type="reset" value="Очистити">
</p>
 </form> 
<hr>

      <td width="70%" background="images/bg.jpg"><font size="5" color="navy">
<!-- ========================================================================================= -->	  
	<?php
	$st = $_POST['name2'].";".$_POST['name1'].";".$_POST['nicl'].";".$_POST['email'].";".$_POST['password']."n";
	$fp = fopen ("baza.txt","a");
	?>
	<hl align="center"><?php echo $_POST ['name2']." ".$_POST['name1']; ?></hl>
	<?php echo "<h2 align='center'>Ваш Login :".$_POST['nic1']."<br> Ваш -mail :".$_POST['email']."<br>Ваш пароль : ".$_POST['password']."<h2>"; ?>
	<h1 align="center">Дякуэмо за реэстрацыю !</h1>
<!-- ===================================================================================================================== -->   
   </td>
    </tr>
    <tr>
      <td background="images/bg-3.jpg" colspan="2" valign="middle" height="90"><font size="4">Сайт розробив "Автор"</font></td>
     
    </tr>
 
</table>

 </body>
