<style>
th{
border:solid 1px #DEDEDE;
background:#2e2e2e; 
color:#FFF;
padding:2px;
text-align:center;
border-top-left-radius:6px;
border-top-right-radius:6px;
border-bottom-left-radius:6px;
border-bottom-right-radius:6px;
border-radius:6px 5px;
	}
	tr{
border:solid 1px #DEDEDE;
background:#2e2e2e; 
color:#FFF;
padding:2px;
text-align:center;
border-top-left-radius:6px;
border-top-right-radius:6px;
border-bottom-left-radius:6px;
border-bottom-right-radius:6px;
border-radius:6px 5px;
	}
</style>


<div id="plink"><div style="position:relative;z-index:1">          
          <a href="http://satanic-road.net//index.php">Ranking</a></div></div><div style="float:right;height:0;position:relative;bottom:27px;right:6px;">
</div>
<div class="news">
	<div class="newshead" onclick='$(".newsbody",$(this).parent()).slideToggle(600)'>
		<div class="arr"></div>
		<a href='?ranking=level'>Top 100 Levels</a>	
	</div>
	<div class="newshead" onclick='$(".newsbody",$(this).parent()).slideToggle(600)'>
		<div class="arr"></div>
		<a href='?ranking=jobbers'>Top 100 Jobbers</a>	
	</div>
	<div class="newsbody" style="">
		
		
		
		
		

		
		
		
		
		
		
		<div class="content">
	
<br>








<?php
		

		
		
		
	$type = $_GET['ranking'];
	if($type=='level'){
	
	echo '
	

	<table width="100%" border="0">
	<tr bgcolor="#8e8e8e">
	<th>No.</th>	<th>Name</th>	<th>Level</th>	<th>Exp</th>	<th>Sp</th>
	<tr>
	';
	
					$players = odbc_exec($connectshard, "SELECT TOP 20 CharName16, RemainSkillPoint, MaxLevel, ExpOffSet
									   FROM [dbo].[_Char]
									   ORDER BY MaxLevel DESC, ExpOffSet DESC, RemainSkillPoint DESC, CurLevel DESC");
		
		
	
	
		$i = 1;
		while($prank = odbc_fetch_array($players)):
			echo '<tr> 
					<td style="text-align:center;"><font size="2">'.$i.'&ordm;</font></td>
					<td><font size="2">'.$prank['CharName16'].'</font></td>
					<td style="text-align:center;"><font size="2">'.$prank['MaxLevel'].'</font></td>
					<td><font size="2">'.$prank['ExpOffSet'].'</font></td>
					<td><font size="2">'.$prank['RemainSkillPoint'].'</font></td>
				  </tr>';
			$i++;
		endwhile;
	echo "</table>";
	
	}else if($type=='jobbers'){
	echo '
	
	<table width="100%" border="0">
	<tr bgcolor="#8e8e8e">
	<th>No.</th>	<th>Name</th>	<th>Level</th>	<th>Exp</th>
	<tr>
	
	';
					$players = odbc_exec($connectshard, "SELECT TOP 20 c.CharID, c.CharName16, c.NickName16, c.RemainSkillPoint, c.MaxLevel, c.ExpOffSet, j.Level, j.Exp, j.Contribution
									   FROM [dbo].[_Char] as c
									   LEFT JOIN [dbo].[_CharTrijob] as j
									   ON c.CharID = j.CharID
									   ORDER BY j.Level DESC, j.Exp DESC");
		
		
		
		$i = 1;
	
	while($prank = odbc_fetch_array($players)):
			echo '<tr > 
					<td style="text-align:center;"><font size="2">'.$i.'&ordm;</font></td>
					<td><font size="2">'.$prank['CharName16'].'</font></td>
					<td style="text-align:center;"><font size="2">'.$prank['Level'].'</font></td>
					<td style="text-align:center;"><font size="2">'.$prank['Exp'].'</font></td>
				  </tr>';
			$i++;
		endwhile;
	
		echo "</table>";
	
	}else if($type=='unique'){
	echo '<div id="news-title">Top Unique Killers</div>';
	}else{
	echo "no select";
	
	}
	
	
	
	
	
	
	
	
	
	?>			
		



<br>		</div>
		
</div>