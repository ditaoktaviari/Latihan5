<form action="" method="post" name="aritmatika" class="aritmatika">
    	<table width="100%" align="center">
        	<tr>
            	<td colspan="2"><h5>DERET ARITMATIKA</h5></td>
            </tr>
        	<tr>
            	<td><div class="label"><label>Suku Pertama</label></div></td>
                <td><input type="text" name="u1" class="field" required></td>
            </tr>
            <tr>
            	<td><div class="label"><label>Suku Kedua</label></div></td>
                <td><input type="text" name="u2" class="field" required></td>
            </tr>
            <tr>
            	<td><div class="label"><label>Suku Ke-n</label></div></td>
                <td><input type="text" name="n" class="field" required></td>
            </tr>
            <tr>
            	<td colspan="2"><input type="submit" name="submit2" value="=" class="submit"></td>
            </tr>           
        </table>  
        <?php
		  error_reporting(0);
		  if(isset($_POST['submit2'])){
			$u1=$_POST['u1'];
			$u2=$_POST['u2'];
			$n=$_POST['n'];
	
			$beda = $u2-$u1;
			$un = $u1 + ($n-1) * $beda;
			echo "Suku Pertama &nbsp;: $u1 <br> <br>";
			echo "Beda &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: $beda <br> <br>";
			echo "Suku Ke- $n &nbsp; &nbsp; &nbsp;: ".$un;
		  }
	  ?>
    </form>