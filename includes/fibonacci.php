<html>
<head>
<title>Deret Fibonacci</title>
</head>
<body>
    <form action="" method="post" name="fibonacci">
    	<table width="100%" align="center">
        	<tr>
     	       <td colspan="2"><h5>DERET FIBONACCI</h5></td>
            </tr>
            <tr>
                <td><div class="label"><label>Suku Pertama</label></div></td>
                <td><input type="text" name="suku1" class="field" required></td>
            </tr>
            <tr>
               <td><div class="label"><label>Suku Kedua</label></div></td>
               <td><input type="text" name="suku2" class="field" required></td>
            </tr>
            <tr>
               <td><div class="label"><label>Jumlah Deret</label></div></td>
               <td><input type="text" name="jumlah" class="field" required></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="submit" value="=" class="submit"></td>
            </tr>           
       </table>            
            <?php
              error_reporting(0);
              if(isset($_POST['submit'])){
                $suku1=$_POST['suku1'];
                $suku2=$_POST['suku2'];
                $jumlah=$_POST['jumlah'];
                
                echo "Suku Pertama &nbsp;: $suku1 <br> <br>";
                echo "Suku Kedua &nbsp; &nbsp; : $suku2 <br> <br>";
                echo "Hasil &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : ";
        
                for ($i=0; $i<$jumlah; $i++)
                {
                  $output = $suku2 + $suku1;
                  echo " $output";
        
                  $suku1 = $suku2;
                  $suku2 = $output;
                }
              }
          ?>
	 </form>
</body>
</html>