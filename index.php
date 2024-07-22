<?php
	session_start();
	include "db/db.php";
	include "db/db.php.show";
	include "db/error.php"; 
	//echo " $hostName  $databaseName  $username <br />"; 
?>

<html><head><title>Kaiju Stats!</title>
<style>
body {margin: 0; padding: 0;
background-color: #ffffff;
color:#996633;
font-family:"Arial","sans-serif";color:#700070;font-size:15px;}
pre{margin: 0; padding: 0;font-family:"Arial","sans-serif";color:#000000;font-size:14px;}


#content{
font-family: Arial, Helvetica, sans-serif;
font-size: 13px;
color: #160154;
background-color:white;	
text-align: center;
position:absolute;
left:370px;
top:35px;
border: 5px outset #000000;
}

div {
    background: linear-gradient(to bottom right, #ff5050 0%, #ccff33 100%);
}

body{
background-image: url('https://i.pinimg.com/originals/ba/3d/be/ba3dbe13a7953aa47b20cee4b7222bc6.jpg');	
}

</style>

</head>

<body>

<?php  
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

$stre = 0;
$spee = 0;
$def = 0;
$inte = 0;
$rad = 0;

if(empty($_POST['select1'])){  $select1 = "select1";  } 
	else {	$select1=$_POST['select1'];	}

if(empty($_POST['select2'])){  $select2 = "select2";  } 
	else {	$select2=$_POST['select2'];	}	
	
if(empty($_POST['select3'])){  $select3 = "select3";  } 
	else {	$select3=$_POST['select3'];	}	
	
if(empty($_POST['select4'])){  $select4 = "select4";  } 
	else {	$select4=$_POST['select4'];	}
	
if(empty($_POST['select5'])){  $select5 = "select5";  } 
	else {	$select5=$_POST['select5'];	}
	
if(empty($_POST['select6'])){  $select6 = "select6";  } 
	else {	$select6=$_POST['select6'];	}
	
if(empty($_POST['select7'])){  $select7 = "select7";  } 
	else {	$select7=$_POST['select7'];	}
	
if(empty($_POST['select8'])){  $select8 = "select8";  } 
	else {	$select8=$_POST['select8'];	}

if(empty($_POST['select9'])){  $select9 = "select9";  } 
	else {	$select9=$_POST['select9'];	}
	
if(empty($_POST['select10'])){  $select10 = "select10";  } 
	else {	$select10=$_POST['select10'];	}
?>
<div id = "content">
<form  method="post">
	&nbsp;	Kaiju Name : <input type="text" name="name" maxlength="64"> <br><br>
	<label class="heading">Has your Kaiju destroyed a city?</label>
	<br><br>
    <select name="select1">
        <option value="">--Select an Answer--</option>
        <option value="yes">Yes</option>
        <option value="no">No</option>
    </select>
	<br><br><label class="heading">Can your Kaiju figth on it's own?</label>
	<br><br>
    <select name="select2">
        <option value="">--Select an Answer--</option>
        <option value="yes">Yes</option>
        <option value="no">No</option>
    </select>
	<br><br><label class="heading">Does your Kaiju come for outer space?</label>
	<br><br>
    <select name="select3">
        <option value="">--Select an Answer--</option>
        <option value="yes">Yes</option>
        <option value="no">No</option>
    </select>
	<br><br><label class="heading">Does your kaiju have wings?</label>
	<br><br>
    <select name="select4">
        <option value="">--Select an Answer--</option>
        <option value="yes">Yes</option>
        <option value="no">No</option>
    </select>
	<br><br><label class="heading">Was your Kaiju built by humans?</label>
	<br><br>
    <select name="select5">
        <option value="">--Select an Answer--</option>
        <option value="yes">Yes</option>
        <option value="no">No</option>
    </select>
	<br><br><label class="heading">Is your Kaiju taller then the empire state building?</label>
	<br><br>
    <select name="select6">
        <option value="">--Select an Answer--</option>
        <option value="yes">Yes</option>
        <option value="no">No</option>
    </select>
	<br><br><label class="heading">Can your Kaiju fight 2 other Kaijus at once?</label>
	<br><br>
    <select name="select7">
        <option value="">--Select an Answer--</option>
        <option value="yes">Yes</option>
        <option value="no">No</option>
    </select>
	<br><br><label class="heading">Does your Kaiju need radiation to survive?</label>
	<br><br>
    <select name="select8">
        <option value="">--Select an Answer--</option>
        <option value="yes">Yes</option>
        <option value="no">No</option>
    </select>
	<br><br><label class="heading">Does your Kaiju have any special powers(Supersonic yell, Thunder Breath, or Digging)?</label>	 
	<br><br>
    <select name="select9">
        <option value="">--Select an Answer--</option>
        <option value="yes">Yes</option>
        <option value="no">No</option>
    </select>
	<br><br><label class="heading">Can your Kaiju surive a missile?</label>	 
	<br><br>
    <select name="select10">
        <option value="">--Select an Answer--</option>
        <option value="yes">Yes</option>
        <option value="no">No</option>
    </select>
	<br><br>
<button type="submit">Submit</button>
</form>

<?php
if($select1 == "yes"){
		$stre += 5;
		$def += 5;
} elseif ($select1 == "no"){
		$def += 2;
		
}
if($select2 == 'yes') {
		$inte += 2;
		$stre += 5;
		$def += 5;
} elseif ($select2 == 'no') {
		$rad += 2;
		$spee += 2;
}
if($select3 == 'yes'){
		$inte += 5;
		$def += 5;
} elseif ($select3 == 'no'){
		$def += 2;
}
if($select4 == 'yes'){
		$spee += 2;
		$inte += 2;
} elseif ($select4 == 'no'){
		$def += 2;
}
if($select5 == 'yes'){
		$def += 5;
} elseif ($select5 == 'no'){
		$inte += 2;
		$rad += 2;
		$def += 2;
}
if($select6 == 'yes'){
		$stre += 5;
		$def += 5;
} elseif ($select6 == 'no'){
		$inte += 2;
}
if($select7 == 'yes'){
		$rad += 5;
} elseif ($select7 == 'no'){
		$def += 5;
}
if($select8 == 'yes'){
		$rad += 5;
		$inte += 2;
} elseif ($select8 == 'no'){
		$def += 5;
		$spee += 2;
}
if($select9 == 'yes'){
		$rad += 2;
		$stre += 2;
} elseif ($select9 == 'no'){
		$inte += 2;
}
if($select10 == 'yes'){
		$spee += 1;
		$def += 5;
} elseif ($select10 == 'no'){
		$inte += 2;
}


if(empty($_POST['name'])){  $name_input = "Name";  } 
	else {	$name_input=$_POST['name'];	}

if(empty($_POST['stre'])){  $stre_input = $stre;  } 
	else {	$stre_input =$_POST['stre'];	}	
	
if(empty($_POST['def'])){  $def_input = $def;  } 
	else {	$def_input=$_POST['def'];	}	
	
if(empty($_POST['spee'])){  $spee_input = $spee;  } 
	else {	$spee_input=$_POST['spee'];	}

if(empty($_POST['inte'])){  $inte_input = $inte;  } 
	else {	$inte_input=$_POST['inte'];	}
	
if(empty($_POST['rad'])){  $rad_input = $rad;  } 
	else {	$rad_input=$_POST['rad'];	}
	
	

	//echo "DEBUG FORM $rad_input : $spee_input<br /> ";
if ( $name_input != "Name" ){
//sql input	*******************************	
	//echo "DEBUG made it past if $hostname $username  <br />"; 		

	if(!($connection = mysqli_connect($hostName,$username, $password))) die ("Counld not connect to database.");
 
	$dbname = "kaiju";
	mysqli_select_db( $connection,  $databaseName);

	$result = mysqli_query ($connection,"SELECT CURDATE();");
	$row = mysqli_fetch_row($result);
	$date = $row[0];
   
	$result = mysqli_query ($connection, "SELECT CURTIME();");
	$row = mysqli_fetch_row($result);
	$time = $row[0];

	$str0 = '';
	$str1 = $_SERVER['REMOTE_ADDR'];
	$str2 = $time;
	$str3 = $date;
	$str4 = $name_input;  
	$str5 = $stre_input;
	$str6 = $spee_input;
	$str7 = $def_input;
	$str8 = $inte_input;
	$str9 = $rad_input;


//echo " $str1 : $date : $time <br>"; 
												// cpu  cooler  motherboard  ram  storage  video  power
$query = "INSERT INTO `stats` (`id`, `ip`, `time`, `date`, `name`, `stre`, `spe`, `def`, `inte`, `rad`) VALUES (NULL, '$str1', '$str2', '$str3', '$str4', '$str5', '$str6', '$str7', '$str8', '$str9');";
//used this to debugINSERT INTO `formdata` (`id`, `ip`, `timein`, `datein`, `name`, `number`) VALUES (NULL, '12.0.0.1', 'now', 'now', 'test', '101902901');
	//echo "$query";
	$result = @ mysqli_query ($connection,$query)  or showerror();
		//$result = @ mysqli_query ($connection,$query);			
		mysqli_close($connection);

}

$data = array($stre, $def, $spee, $inte, $rad);
?>

   <canvas id="chartId" aria-label="chart" height="350" width="580"></canvas>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.1.1/chart.min.js"></script>
   <script>
      var chrt = document.getElementById("chartId").getContext("2d");
      var chartId = new Chart(chrt, {
         type: 'radar',
         data: {
            labels: ["Strength", "Defense", "Speed", "Intelligence", "Radiation",],
            datasets: [{
               label: "Kaiju Stats",
               data: <?php echo json_encode($data); ?>,
               backgroundColor: ['#fcffe8'],
               pointBackgroundColor: ['blue', '#a67503', 'purple', '#bac90a', 'green'],
               borderColor: ['#32a852'],
               borderWidth: 0.5,
               pointRadius: 7,
            }],
         },
         options: {
            responsive: false,
            elements: {
               line: {
                  borderWidth: 3,
               }
            }
         },
      });
   </script>



</div>
</body>
</html>