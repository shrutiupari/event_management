<?php
	ini_set('mysql.connect_timeout',300);
	ini_set('default_socket_timeout',300);
?>

<html>
	<body>
		<form method="post" enctype="multipart/form-data">
		<br/>
			<input type="file" name="image" />
			<br/><br/>
			<input type="submit" name="sumit" value="upload" />
			<br/><br/>
		<form>
		
		<?php
			include 'dbconnect.php';
			if(isset($_POST['sumit']))
			{
				if(getimagesize($_FILES['image']['tmp_name'])==FALSE)
				{
					echo "Please select an image";
				}
				else
				{
					$image=addslashes($_FILES['image']['tmp_name']);
					$name=addslashes($_FILES['image']['name']);
					$image=file_get_contents($image);
					$image=base64_encode($image);
					saveimage($name,$image);
				}
			}
			
			
			
			function saveimage($name,$image)
			{
				$qry="insert into images (name,image) values ('$name','$image')";
				$result = mysql_query($qry);
				if($result)
				{
					echo "<br />Image uploaded <br />";
				}
				else
				{
					echo "<br />Image not uploaded";
				}
			}
			
			displayimage();
			
			function displayimage()
			{
				$qry="select * from images";
				$result = mysql_query($qry);
				while($row = mysql_fetch_array($result))
				{
					echo '<img height="300" width="200" src="data:image;base64,'.$row[2].' "> ';
				}
			}
		?>
	</body>
</html>