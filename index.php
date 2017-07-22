<!DOCTYPE html>

<?php
  $lang = isset($_GET["lang"])? $_GET["lang"]: "ru"; //Берём значение GET-параметра, либо, если его нет, то устанавливаем русский
  $array = parse_ini_file($lang.".ini"); //Открываем соответствующий языковой файл
  $ru_len=langu($_SERVER['REQUEST_URI'],"ru");
  $en_len=langu($_SERVER['REQUEST_URI'],"en");
  function langu($str,$lengi)
  {
	$ru_len='';
	$en_len='';
	if(substr($str,strlen($str)-1)==('/'))
	{
		
		return $str."index.php?lang=".$lengi;
	}
	else
	{
	
		return substr($str,0,strlen($str)-2).$lengi;
	}
  }
  
  
?>


<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>EasyShop</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" href="fa/css/font-awesome.min.css">
	<link href="css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="scripts/jquery.min.js"></script>
    <script src="scripts/bootstrap.js"></script>
	
	
	<div class="container-flued  hidden-xs hidden-sm">
		<div class="container-flued" id="lending">
			<div id="lang">
				<a href="<?php echo $ru_len;?>">ru</a>
				<br>
				<a href="<?php echo $en_len;?>">eng</a> 
			</div>
		</div>
	</div>
  </body>
</html>