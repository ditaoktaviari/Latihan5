<html>
<head>
  <title>Latihan 5</title>
</head>
<style type="text/css">
*{
	margin:0;
	padding:0;
	}
body{
	background-color:white;
	font-family:sans-serif;
	}
.container{
	width:100%;
	height:100%;
	}
header{
	width:100%;
	height:17%;
	background-color:#090ED7;
	color:white;
	line-height:110px;;
	text-align:center;
	}
nav{
	width:100%;
	height:8.1%;
	margin-top:2%;
	}
.btn-fibonacci, .btn-aritmatika{
	width:10%;
	padding:1.5% 2%;
	background-color:#1111F4;
	color:white;
	border:1px #1111F4 solid;
	margin-left:38%;
	border-radius:3px;
	font-size:14px;
	font-weight:bold;
	font-family:sans-serif;
	}
.btn-aritmatika{
	margin-left:3%;
	}
.btn-fibonacci:hover, .btn-aritmatika:hover{
	background-color:#0A0EB8;
	border:1px #0A0EB8 solid;
	transition:.5s;
	}
main{
	height:70%;
	width:40%;
	padding:2% 30%;
	}
h4{
	text-align:center;
	margin-bottom:5%;
	}
h5{
	margin-bottom:5%;
	margin-top:3%;
	color:#006;
	font-size:17px;
	text-align:center;
	}
.label{
	width:100%;
	float:left;
	}
.field{
	width:100%;
	padding:4%;
	margin-bottom:2%;
	border:1px #CCCCCC solid;
	border-radius:4px;
	}
.submit, .submit{
	float:right;
	margin:3% 0% 3% 5%;
	width:20%;
	padding:2% 0%;
	background-color:#00F;
	color:white;
	border:1px #0000FF solid;
	border-radius:3px;
	}
.submit:hover{
	background-color:#009;
	transition:.3s;
	}
footer{
	background-color:#090ED7;
	text-align:center;
	color:white;
	height:9%;
	line-height:60px;
	}
</style>
<body>
  <div class="container">
  	<header><h3>DERET FIBONACCI DAN ARITMATIKA</h3></header>
    <nav>
    	<a href="?page=fibonacci"><input type="button" value="FIBONACCI" class="btn-fibonacci"></a>
    	<a href="?page=aritmatika"><input type="button" value="ARITMATIKA" class="btn-aritmatika"></a>
    </nav>
    <main>
    	<?php
			if(@$_GET['page'] == 'fibonacci'){
				include ('includes/fibonacci.php');
				}
        	if(@$_GET['page'] == 'aritmatika'){
				include ('includes/aritmatika.php');
				}
		?>
    </main>
    <footer>Copyright &copy; Dita Oktaviari</footer>
  </div>
</body>
</html>
