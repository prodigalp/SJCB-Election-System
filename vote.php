<!----Start here----------->


<?php

$con=mysql_connect('localhost','root','');
mysql_select_db('preselect',$con);


if (isset($_POST['submit'])){
	$cname=$_POST['candi'];	
	$transac=$_POST['txtstore'];

	

	$qstring="SELECT * FROM tag where tag_num='$transac'";
	$a=mysql_query($qstring);
	$result=mysql_num_rows($a);

	if($result=='1') { 
		foreach($cname as $fullname)
			{
			if($fullname=='-')
			  {
			    exit('Please select..');
			  }
			$qstring="INSERT INTO tbl_can(candidates) VALUES('$fullname')";
			mysql_query($qstring);
	
			}
		$qstring="DELETE FROM tag where tag_num='$transac'";
		mysql_query($qstring);

	}
	else	{
	 	 echo "Invalid Entry! TRY AGAIN";
		}

}

?>

<!-------END of COde--->

<!Eyestrain modification on going...>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<title>SJCB Automated Election 2012</title>
</head>
<body>

<div id="wrap">

<div id="header">
<h1><center><font color="yellow">SJCB Automated Election 2012</font></center></h1>

</div>

<div id="menu">
<ul>   <!---Upper panel--->
    <li><a href="index.php"><font color="000000">Home</font></a></li>
<!--can.php-->	<li><a href="can.php"><font color="000000">Candidates and Positions</font></a></li>
<!--art.php-->	<li><a href="art.php"><font color="000000">Articles</font></a></li>
<!--mis.php-->	<li><a href="mis.php"><font color="000000">Mission</font></a></li>
<!--vis.php-->	<li><a href="vis.php"><font color="000000">Vision</font></a></li>
<!--cre.php-->	<li><a href="cre.php"><font color="000000">Credits</font></a></li>
</ul>
</div>

<div id="content">
<!--------------BODY_Content------------->
<!-----------Start of voting here----->

<center><h1><font color="BLUE">Candidates and Positions</font></h1></center><hr>
<br>

<form method="POST">
<center><!------------MAYOR-------------------->
	
<table bgcolor="00FF00" border="2">
	<tr>
	<td><center><b>Mayor :</b><br></center>
        <select name="candi[]">
	<option>-</option>
	<option> Carl John A. Cabuhat (Mayor)</option> 
	<option> Denniele Layague (Mayor)</option> 
        </select> 
	<!center> <!---MAYORS--> 
        </td>

</table>
</center><br>

<center><!------------VICE Mayor------------------>
<table bgcolor="00FF00" border="2">
	<tr>
	<td><center><!center><b>Vice-Mayor :</b><br></center>
	<select name="candi[]">
 	<option>-</option>
   	<option> Katrina Roxanne Aquino (V-Mayor)</option>
   	<option> Jobelle Pascual (V-Mayor)</option>
	</select>
	<!/center> <!---Vice Mayor--->
	</td>
</table>
</center><br>


<center><!-----------LABORATORY---------------->
<table bgcolor="00FF00" border="2">
	<tr>
	<td><center><b>Laboratory :</b><br></center>
	<select name="candi[]">
   	<option>-</option>
   	<option> Arthur Sta. Rosa (Lab)</option>
   	<option> Jerome Casilao (Lab)</option>
	</select>
	</center> <!---Laboratory---><br>
	</td>
</table>
</center><br>

<center><!-------------SENIOR COUNCILORS 1 and 2---------->
<table bgcolor="00FF00" border="2">
	<tr>
	<td><center><b>Senior Councilors 1 and 2 :</b><br></center>
	<select name="candi[]">
	<option>-</option>
   	<option> Mark Joshua Halili (S.Coun)</option>
   	<option> Ronna Mae Nepomuceno (S.Coun)</option>
	<option> Kajel Cabigo (S.Coun)</option>
   	<option> Raymond Almosura (S.Coun)</option>
   	</select>
	<br>

	<center>
	<select name="candi[]">
   	<option>-</option>
   	<option> Mark Joshua Halili (S.Coun)</option>
   	<option> Ronna Mae Nepomuceno (S.Coun)</option>
	<option> Kajel Cabigo (S.Coun)</option>
   	<option> Raymond Almosura (S.Coun)</option>
	</select><br>
 	<!---Senior Councilors 2--->
	</center>
	</td>

</table>
</center>

<center><!------------JUNIOR COUNCILORS 1 and 2-------------->
<table bgcolor="00FF00" border="2">
	<tr>
	<td><center><b>Junior Councilors 1 and 2:</b><br>
	<select name="candi[]">
   	<option>-</option>
     	<option> Romina Nepomuceno (J.Coun)</option>
   	<option> Rey Justin Datolayta (J.Coun)</option>
	<option> Legrand Belostrino (J.Coun)</option>
   	<option> Mara Dela Cruz (J.Coun)</option>
	</select>
	<br>
	<select name="candi[]">
   	<option>-</option>
   	<option> Romina Nepomuceno (J.Coun)</option>
   	<option> Rey Justin Datolayta (J.Coun)</option>
	<option> Legrand Belostrino (J.Coun)</option>
   	<option> Mara Dela Cruz (J.Coun)</option>
  	</select>
	</center> <!---Junior Councilors 2--->
	</td>
	<br>
</table>
</center>


<center><!--------------SOPHOMORE COUNCILORS 1 and 2------------>
<table bgcolor="00FF00" border="2">
	<tr>
	<td><center><b>Sophomore Councilors 1 and 2 :</b><br>
	<select name="candi[]">
   	<option>-</option>
   	<option> Ma. Veronica Victolero (Sop.Coun)</option>
   	<option> Gean Bernardo (Sop.Coun)</option>
	<option> Mico Nepomuceno (Sop.Coun)</option>
   	<option> Kenneth Torres (Sop.Coun)</option>
    	</select>
	<br>
	<select name="candi[]">
   	<option>-</option>
   	<option> Ma. Veronica Victolero (Sop.Coun)</option>
   	<option> Gean Bernardo (Sop.Coun)</option>
	<option> Mico Nepomuceno (Sop.Coun)</option>
   	<option> Kenneth Torres (Sop.Coun)</option>
  	</select>
	</center> <!---Sophomore Councilors :--->
	</td>
	<br>


</table>
</center>

<center><!--------------- GRADE 7 Councilors 1 and 2 ----------->
<table bgcolor="00FF00" border="2">
	<tr>
	<td><center><b>Grade 7 Councilors 1 and 2:</b><br>
	<select name="candi[]">
   	<option>-</option>
   	<option> Krizia Betina Santos (G7 Coun)</option>
   	<option> Marlon Victolero (G7 Coun)</option>
	<option> Lovelle Evangelista (G7 Coun)</option>
   	<option> Eunice Tabao (G7 Coun)</option>
	</select>
	<br>
	<select name="candi[]">
   	<option>-</option>
   	<option> Krizia Betina Santos (G7 Coun)</option>
   	<option> Marlon Victolero (G7 Coun)</option>
	<option> Lovelle Evangelista (G7 Coun)</option>
   	<option> Eunice Tabao (G7 Coun)</option>	
   	</select>
	</center> <!---Grade 7 Councilors :--->
	</td>
	<br>
</table>
</center>


<center><!------------- GRADE 6 Councilors 1 and 2----------->
<table bgcolor="00FF00" border="2">
	<tr>
	<td><center><b>Grade 6 Councilors 1 and 2:</b><br>	
	<select name="candi[]">
   	<option>-</option>
   	<option> Kristel Eugenio (G6 Coun)</option>
   	<option> Jimmuel Joaquin (G6 Coun)</option>
	<option> Jericho Gumogdo (G6 Coun)</option>
   	<option> Angela Villanueva (G6 Coun)</option>
	</select>
	<br>
	<select name="candi[]">
   	<option>-</option>
   	<option> Kristel Eugenio (G6 Coun)</option>
   	<option> Jimmuel Joaquin (G6 Coun)</option>
	<option> Jericho Gumogdo (G6 Coun)</option>
   	<option> Angela Villanueva (G6 Coun)</option>
   	</select>
	</center> <!---Grade 6 Councilors :--->
	</td>
	<br>
</table>
</center>


<center><!-------------- GRADE 5 Councilors 1 and 2----------->
<table bgcolor="00FF00" border="2">
	<tr>	
	<td><center><b>Grade 5 Councilors 1 and 2:</b><br>
	<select name="candi[]">
   	<option>-</option>
   	<option> Jean Claude Torre (G5 Coun)</option>
   	<option> Romel Bernardo (G5 Coun)</option>
	<option> Kim Atienza (G5 Coun)</option>
   	<option> Joshua Godoy (G5 Coun)</option>
	</select>
	<br>
	<select name="candi[]">
   	<option>-</option>
   	<option> Jean Claude Torre (G5 Coun)</option>
   	<option> Romel Bernardo (G5 Coun)</option>
	<option> Kim Atienza (G5 Coun)</option>
   	<option> Joshua Godoy (G5 Coun)</option>
   	</select>
	</center> <!---Grade 5 Councilors :--->
	</td>
	<br>
</table>
</center>


<center><!-------------- GRADE 4 COUNCILORS 1 and 2------------>
<table bgcolor="00FF00" border="2">
	<tr>
	<td><center><b>Grade 4 Councilors 1 and 2 :</b><br>
	<select name="candi[]">
   	<option>-</option>
   	<option> Christal Cabuhat (G4 Coun)</option>
   	<option> Gem Bernardo (G4 Coun)         </option>
	<option> Jasmin Pascual (G4 Coun)</option>
   	<option> Christian Alcantara (G4 Coun)</option>
	</center>
	</select>
	<center>
	<select name="candi[]">
   	<option>-</option>
   	<option> Christal Cabuhat (G4 Coun)</option>
   	<option> Gem Bernardo (G4 Coun)         </option>
	<option> Jasmin Pascual (G4 Coun)</option>
   	<option> Christian Alcantara (G4 Coun)</option>
   	</select>
	</center> <!---Grade 4 Councilors :--->
	</td>
	<br>
</table>
</center>



<center><!------------------ GRADE 3 Councilors 1 and 2------------>
<table bgcolor="00FF00" border="2">
	<tr>
	<td><center><b>Grade 3 Councilors 1 and 2: </b></br>
	<select name="candi[]">
   	<option>-</option>
   	<option> lark Arvin Atienza (G3 Coun)</option>
   	<option> Angela Bustamante (G3 Coun)</option>
	<option> Carl Adriano (G3 Coun)</option>
   	<option> Zaira Punzal (G3 Coun)</option>
	</select>
	<br>
	<select name="candi[]">
   	<option>-</option>
   	<option> lark Arvin Atienza (G3 Coun)</option>
   	<option> Angela Bustamante (G3 Coun)</option>
	<option> Carl Adriano (G3 Coun)</option>
   	<option> Zaira Punzal (G3 Coun)</option>
  	</select>
	</center> <!---Grade 3 Councilors :--->
	</td>
	<br>
</table>
</center>
<br>



<!---Textbox--->
<center><b>Control # : </b><input type="textbox" name="txtstore" maxlength="10"></center><br>


<center><img height=150 width=150 border=0 src="vote.jpg" alt="LOGO"></center>
<center><b>Vote wisely.Think twice!</b></center>
<br>
<!---Button-->
<center><input type="submit" name="submit" value="Click to register your vote!!!"></center>
<br>
</form>

<!-------------End of voting here------------>

</div>

<div id="sidebar">
<h3><font size='3' color="#FFFF00">Candidates Profile</font></h3>
<br>
<!--vote.php-->	<a href="vote.php"><font size='4' color="yellow"><b><center>VOTE HERE !!!</center></b></font></a>
<ol>
	<li><a><font size='2' color="#ffffff">Other Positions</font></a></li>
	<li><a><font size='2' color="#ffffff">Grade 7 Councilors</font></a></li>
	<li><a><font size='2' color="#ffffff">Grade 6 Councilors</font></a></li>
	<li><a><font size='2' color="#ffffff">Grade 5 Councilors</font></a></li>
	<li><a><font size='2' color="#ffffff">Grade 4 Councilors</font></a></li>
	<li><a href="oc.php"><font size='2' color="#ffffff">Official Count</font></a></li>
</ol>

<h3><font size='3' color="#FFFF00">Activities</font></h3>
<ul>
	<!--acq.php--><li><a href="acq.php"><font size='3' color="#ffffff">Acquiantance</font></a></li></a></li>
	<!--bul.php--><li><a href="bul.php"><font size='3' color="#ffffff">Bulprisa</font></a></li>
	<!--tim.php--><li><a href="tim.php"><font size='3' color="#ffffff">Team Building</font></a></li></a></li>
	<!--edu.php--><li><a href="edu.php"><font size='3' color="#ffffff">Educational Trip</font></a></li>
	<!--var.php--><li><a href="var.php"><font size='3' color="#ffffff">Varsitie's Corner </font></a></li>
	<!--sa.php--><li><a href="sa.php"><font size='3' color="#ffffff">Student Aid (SA)</font></a></li>
</ul>

</div>

<div style="clear: both;"> </div>

<div id="columns">

<div id="column1">
<h3><font size='3' color="FFFF00">Greetings!</font></h3>
<br>
<b><center>Birthday Celebrant's</center></b>
<ul>
<li>Marcus Paraiso - July 3
<li>Maynard Castro - July 13
<li>Fatima Zangswela - July 18
<li>Sigrid Crisostomo - July 22
<li>Philip Catanyag - July 31
</ul>
<br>
</div>

<div id="column2">
<h3><font size='3' color="#CDEB8B">Annoucement</font></h3>
<p>
<center>General Meeting of all 3rd and 4th year student all courses at AVR room August 10, 2012 at 1:30PM. (Everyone must participate no exception allowed).</center>
<br>
</p>
</div>

<div id="column3">
<h3><font size='3' color="#F778A1">Highlights</font></h3>
<h2><center>Congratulation!!!</center></h2>
<ol>
<li>Lester Chavez
<li>Marwin Ezequiel
<li>Marjorie Panganiban
</ol>
<center>For Passing the TESDA Certification Exam NCII<center>
<br>
</div>


<div style="clear: both;"> </div>

</div>

<div id="footer">
<p>&copy; Copyright 2012 | Designed and developed by: <a href="http://www.blogliber.com">Eyestrain (SJCB) </a></p>
</div>

</div>

</body>
</html>
