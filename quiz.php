<HTML>
<BODY bgcolor=F5C3C3>
<font size=5><br>  WELCOME TO THE QUIZ PROGRAM BY NAVNEET KUMAR JHA<BR>

EACH QUESTION OF 5 MARKS<BR> <br></font>

<form method ="post">

NAME :
<input type = "text" name= "na" size=40> <br> <br>
Q1. WHO SCORED MAXIMUM RUN IN CRICKET WORLD CUP 2011? SELECT THE CORRECT OPTION <br>
  <select name="place" size="3" >
  <option value="SEHWAG">SEHWAG</option>
  <option value="VIRAT">VIRAT</option>
  <option value="GUPTIL">GUPTIL</option>
  <option value="DILSHAN">DILSHAN</option>
  <option value="GAYLE">GAYLE</option>
</select> <br>
<br>
Q2 WHICH OF THE FOLLOWINGS IS THE WONDER OF WORLD <br>
 <input type="radio" name="w" value="AJANTA CAVE" checked>




 AJANTA CAVE<br>
  <input type="radio" name="w" value="MACHU PICHU"> MACHU PICHU<br>
  <input type="radio" name="w" value="HOWRAH BRIDGE "> HOWRAH BRIDGE <BR>
  <input type="radio" name="w" value="RIO DE SANARIO "> RIO DE SANARIO <BR>
<br>
Q3. WHICH COUNTRY WILL HOST THE 2023 CRICKET WORLD CUP<br>
 <input type="radio" name="c" value="BANGLADESH<" checked> BANGLADESH<br>
  <input type="radio" name="c" value="AUSTRALIA">AUSTRALIA<br>
  <input type="radio" name="c" value="ENGLAND"> ENGLAND <BR>
  <input type="radio" name="c" value="INDIA"> INDIA <BR>
<br>
Q4. IN WHICH YEARS KKR WON THE CRICKET IPL FINAL <BR>
   <input type="checkbox" name="f[]" value="2010"> 2010
   <input type="checkbox" name="f[]" value="2012"> 2012 
   <input type="checkbox" name="f[]" value="2017">2017
   <input type="checkbox" name="f[]" value="2014"> 2014 
<br>
Q5. HOW MANY MEDALS WON BY INDIA IN 2016 OLYMPIC- <BR>
ENTER BETWEEN 0 and 20:<br>
<input type="number" name="nu" min="0" max="20">
  
<br>  
POST YOUR COMMENT- <br>
<textarea name="message" rows="10" cols="60">

</textarea> <br>

<input type="submit" name = "sub1" value="Submit">

<input type="button" onclick="alert('BEST WISHES')" value="Click Me!">
</FORM>

<?php
if (isset($_POST['sub1'])){

$n1= $_POST['na'];
 $n2 = isset($_POST['place']) ? $_POST['place'] : "";

$n3= $_POST['w'];
$n4= $_POST['c'];

$n9= $_POST['nu'];
$n10= $_POST['message'];
echo "DEAR $n1 YOUR ANSWERS ARE : <BR>";
echo "Q1 $n2 <BR> ";
echo "Q2 $n3 <BR> ";
echo "Q3 $n4 <BR> ";
echo "Q4   ";
if(!empty($_POST['f'])){
$str="";
foreach($_POST['f'] as $selected)
{
	echo "$selected";
	$str= $str ." ". strval($selected);
}

}
echo "<br>Q5 $n9 <BR> ";
echo "your comment $n10  <BR><br> ";
$s=0;
if ($n2== "DILSHAN"){
	echo "Q1 IS CORRECT <BR>";
	$s=$s +5;
}
else
{
	echo "Q1 IS INCORRECT. CORRECT ANSWER IS DILSHAN <BR>";
}	

if ($n3== "MACHU PICHU"){
	echo "Q2 IS CORRECT <BR>";
	$s=$s +5;
}
else
{
	echo "Q2 IS INCORRECT. CORRECT ANSWER IS MACHU PICHU <BR>";
}	

if ($n4== "INDIA"){
	echo "Q3 IS CORRECT <BR>";
	$s=$s +5;
}
else
{
	echo "Q3 IS INCORRECT. CORRECT ANSWER IS INDIA <BR>";
}	

if(!empty($_POST['f'])){
$c=0;
foreach($_POST['f'] as $selected)
{
	if($selected==2012 or $selected==2014 ){
	$c=$c+1;}
}

if($c==2)
{
	echo "Q4 IS CORRECT <BR>";
	$s=$s +5;
}
else
{
	echo "Q4 IS INCORRECT. CORRECT ANSWER IS 2012 2014 <BR>";
}		
}

if ($n9== 2){
	echo "Q5 IS CORRECT <BR>";
	$s=$s +5;
}
else
{
	echo "Q5 IS INCORRECT. CORRECT ANSWER IS 2<BR>";
}	
echo "<h3> TOTAL SCORE = $s</h3>";

$con = mysqli_connect("localhost","id12341488_navneetjha","Navneet_jha123","id12341488_navneet2")or die( "error found")  ;
  if(! $con ) {  
            
			echo "error";
         }
		else
		{
		 $n1= $_POST['na'];
         $n2 = isset($_POST['place']) ? $_POST['place'] : "";

         $n3= $_POST['w'];
         $n4= $_POST['c'];
        
         $n9= $_POST['nu'];
         $n10= $_POST['message']; 
		
		 
		 $q= "insert into quiz values('$n1', '$n2','$n3','$n4', '$str',$n9,'$n10');";
		
		 $run= mysqli_query($con, $q );
		
		 if ($run )
			 echo " <b><font color= blue SIZE=4> THANKS YOUR DATA SAVED  </font> <b>";
		 else
			 echo " error";
         mysqli_close($con);
      
		}
}

?>
</BODY>
</HTML>