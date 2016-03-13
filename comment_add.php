<?php


			require_once("connect.php");
						$mypic = $_FILES['upload']['name'];
						
						$temp = $_FILES['upload']['tmp_name'];
						
						$type = $_FILES['upload']['type'];


			$query="select * from comment_tbl where cover = '".$mypic."'";
			$result=mysql_query($query);

			$row = mysql_fetch_array($result);
			

				if($row['cover'] != null){
					
					echo"
							<script type = 'text/javascript'>
							alert('Picture already exist');
							window.location='news.php'
							</script>";	
							
				}

				elseif($mypic == null){
										
					$mypic = "avatar.gif";
					mysql_query("INSERT INTO comment_tbl(name,comment,cover) VALUES ('$_POST[name]','$_POST[comment]','$mypic')");
					
					move_uploaded_file($temp, "img/demo/$mypic");

						echo"
							<script type = 'text/javascript'>
							window.location='news.php'
							</script>
						";	
						}

				
				elseif(($type =='image/jpg') || ($type =='image/jpeg') || ($type =='image/png') || ($type =='image/bmp')){
							
						move_uploaded_file($temp, "img/demo/$mypic");
							
					mysql_query("INSERT INTO comment_tbl(name,comment,cover) VALUES ('$_POST[name]','$_POST[comment]','$mypic')");
						echo"
							<script type = 'text/javascript'>
							window.location='news.php'
							</script>";	
				}
				else{
							echo"
							<script type = 'text/javascript'>
							alert('Error *.*!');
							window.location='news.php'
							</script>";	
				}

		
?>
