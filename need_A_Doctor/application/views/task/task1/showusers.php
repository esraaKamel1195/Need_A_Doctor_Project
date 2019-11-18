<!DOCTYPE html>
<html>
<head>
	<title>show user</title>
	<style >
		body
		{
			background:  #808080;
		}
    div{
      height: 50px;
      background: black;
      padding: 10px;
      font-size: 30px;
    }
	</style>
</head>
<body>
  <div>
  <a href="http://localhost/course/Task1/" style="text-decoration-line: none;">HomePage</a>  
  </div>
  
<h1>The users </h1>
<table border ="|" width ="800px" >
        <tr>
            <td>name</td>
            <td>age</td>
            <td>e_mail</td>
        </tr>
      
      <?php 
      for ($i=0; $i < 5; $i++) { 
	 echo "<tr>";
      echo "<td>".$name[$i]."</td>";
      echo "<td>".$age[$i]."</td>";
      echo "<td>".$mail[$i]."</td>";
      echo " </tr>"  ;
       }
     
	?>
 </table>
</body>
</html>