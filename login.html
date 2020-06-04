<?php



	

	
	if(!isset($_SESSION['loggedin'])) {
									print '
									<form class="form" action="" method="POST">  
      <div id="login-box">
		<div class="status-box log-outer">
	<form id="logfrm" style="margin:0;z-index:1;position:relative" action="indexlogin.php" method="post">
	<input name="username" style="border: 1px solid rgba(70, 70, 70, 0.5);border-radius: 5px 5px 5px 5px;padding: 3px 5px;width: 186px;margin: 3px 0;" size="16" value="User" id="lun" type="text">
	<br>
	<input type="password" name="password" style="border: 1px solid rgba(70, 70, 70, 0.5);border-radius: 5px 5px 5px 5px; width: 123px; padding: 3px 5px;margin:0 0 6px;" value="pass" size="16" id="lpw" type="password">
	<input name="login" id="login" value="Login" type="submit">
	<br>
	  <a href="lostpw.php" style="padding:0px;font-family:lucida,arial,helvetica,sans-serif"><font style="color:#bbb;cursor:pointer;font-size:11px">Forgot your password ?</font></a>
	</form>
	</div>
	<div class="status-box">
	  <a href="?register" style="padding:0px"><div style="width:186px;height:40px;background:url(img/reg_btn.gif);margin:0 3px;border-radius:5px;cursor:pointer;"></div></a>             
	</div>
	</div>
									</form> ';
			if(isset($_POST['login'])) {
			
	
			
					
									
		$username	= anti_injection($_POST["username"]);
		$password	= anti_injection($_POST["password"]);
		if($username == "" || $password == "")
		{


			header("location:.././");
	
		}else
		{
		$enpass		= md5($password);
		$newpass	= sha1($enpass);
		

				$verifyAccount = odbc_num_rows(odbc_exec($connectacc, "select * from TB_User where StrUserID = '$username' AND password = '$enpass'"));
				if($verifyAccount <= 0) {

					echo '<script type="text/javascript">';
			echo ' alert("Invalid username and/or password!");';
			echo '</script>';	

				} else {
				
					$name = odbc_fetch_array(odbc_exec($connectacc, "select * from TB_User where StrUserID = '$username'"));
					
					$_SESSION['loggedin'] = "YES";
				$_SESSION['name'] = $username;
				$_SESSION['nick'] = $name['Name'];

					header("location:?news");



					}
				}
			}
									
											
									
								} else{
								echo "<div id='user'>";
								$userID = $_SESSION['name'];
								
									
									
									$getUserJID = odbc_exec($connectacc, "select * from TB_User where StrUserID = '$userID'");
									while ($row = odbc_fetch_array($getUserJID)) {
										$userJID = $row['JID'];
										$userGM  = $row['sec_content'];
										$userNICK  = $row['Name'];
										
						
									}
										echo "Welcome  $userNICK!<br />";
							
									$getSilkQuery = odbc_exec($connectacc,"select * from SK_Silk where JID = '$userJID'");
									$row = odbc_fetch_array($getSilkQuery); 
									
							
									$silk = $row['silk_own'];
									
									if ($silk == '') {
									$silk = 0;
									}
								
								
									
							echo "
							<hr color='#3f1b1b' align='center' size='1'/>
									Silk balance: ".$silk." Silk.
							<hr color='#3f1b1b' align='center' size='1'/>
							";
									
									
									
									
								echo "
								<table width='100%'>
								<tr>
								<td><a href='?changepw'>Change Password</a></td> <td>	<a href='?logout'>Logout</a></td>
								</tr>
						
								";
								
								If ($userGM == '1'){
								echo"<a href='?admin'><font color='#780000'>Admin Panel</font></a>";
								
								}
								
								echo "</table></div>";
								
								}
								  





		
	
	
	
?>