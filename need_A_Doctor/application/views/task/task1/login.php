<!DOCTYPE html>
<html>
<head>
	<title>login</title>
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
      text-decoration-line: none;
    }
    form
    {
    	text-align: center;
    	padding-top: 200px;
    	

    }
	</style>
</head>
<body>
		<div class="header">
			<a href="http://localhost/course/Task1/" 
			   style="text-decoration-line: none;">HomePage</a>
		</div>
<form  method="post" action="http://localhost/course/Task1/login">
      <fieldset>
    <input type="text" name="username"  height="300px"><br>
    <input type="password" name="password"><br>
    <input type="submit" value="login"><br>

     </fieldset>
    
</form>
<?php
	/* if ($user== "hosam" and $pass == "123") {
	 		         

	 	}
	 	else
	 		 echo "this incorrect email<br>";*/
	 	?>
</body>
</html>
