<?php

$male;
$female;
  if ($_POST["sex"] > 1) {
    $male = "s";
	$female = "o";
  } else {
    $male = "o";
	$female = "s";
  }
?>



<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<link href="https://fonts.googleapis.com/css?family=Content|Moul|Roboto&display=swap" rel="stylesheet">

<script>
function printContent(el){
	var restorepage = document.body.innerHTML;
	var printcontent = document.getElementById(el).innerHTML;
	document.body.innerHTML = printcontent;
	window.print();
	document.body.innerHTML = restorepage;
}
</script>
<script src="html2canvas.js"></script>
<script>
	function doCapture(){
		window.scrollTo(0,0);
		
		html2canvas(document.getElementById("print-container")).then(function(canvas){	
			var ajax = new XMLHttpRequest();
			ajax.open("POST", "save-capture.php", true);
			ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			ajax.send("image=" + canvas.toDataURL("image/jpeg", 5));
			
			ajax.onreadystatechange = function (){
				if(this.readyState == 4 && this.status == 200) {
					console.log(this.responseText);

				}
			}
		});
		

	}
	
</script>
<script>
function showImage() {
window.open("image.php","_self");
}
</script>

</head>
<body onload="doCapture()">


<div id="print-container">	
<page size="A4">
<div id="capture">	
<img src="sremeas.svg" alt="logo" width="160" height="auto"></br>
<div style="font-family: 'Moul', sans-serif;">
<center>ពាក្យស្នើសុំអនុញ្ញាតិឈប់សម្រាក</center>
</div>
</br></br>
<div align="center" style="font-family: 'Content', sans-serif;">
<<?php echo $male; ?>>ខ្ញុំបាទ</<?php echo $male; ?>>/<<?php echo $female; ?>>នាងខ្ញុំ </<?php echo $female; ?>><tab1><?php echo $_POST["name"]; ?></tab1>  តួនាទី  <tab1><?php echo $_POST["position"]; ?> </tab1></br></br>
</div>
<center>
<div style="font-family: 'Moul', sans-serif;">
សូមគោរពជូន</br>
លោកប្រធានហាងស្រែមាស</br></br>
</div>

</center>
<div style="font-family: 'Content', sans-serif;">
<table align="center" style="width:90%">
  <tr>
    <td>
	កម្មវត្ថុ៖
	</td>
    <td>
	សុំច្បាប់ឈប់សម្រាកចំនួន<tab3>&nbsp;<?php echo $_POST["period"]; ?>&nbsp;</tab3>ថ្ងៃ
	</td>
  </tr>
  
  <tr>
    <td>
	</td>
    <td>
	ចាប់ពីថ្ងៃទី  <tab3><?php echo $_POST["fdate"]; ?> ខែ <?php echo $_POST["fmonth"]; ?>  ឆ្នាំ <?php echo $_POST["fyear"]; ?></tab3>
	&nbsp;ដល់ថ្ងៃទី <tab3><?php echo $_POST["tdate"]; ?> ខែ <?php echo $_POST["tmonth"]; ?> ឆ្នាំ <?php echo $_POST["tyear"]; ?></tab3></br>
	ចូលធ្វើការវិញនៅថ្ងៃទី <tab3><?php echo $_POST["bdate"]; ?>  ខែ  <?php echo $_POST["bmonth"]; ?> ឆ្នាំ <?php echo $_POST["byear"]; ?></tab3> 
	</td>
  </tr>
  
  <tr>
    <td >
	មូលហេតុ៖
	</td>
    <td ><tab3>
	<?php echo $_POST["reason"]; ?></tab3></br>
	
	</td>
  </tr>
  
  <tr>
    <td>
	</td>
    <td>
	សេចក្តីដូចបានជម្រាបជូនខាងលើ សូមលោកប្រធានមេត្តាអនុញ្ញាត្តិដោយក្តីអនុគ្រោះ </br>
	សូមលោកប្រធានទទួលនូវការគោរពដ៏ខ្ពង់ខ្ពស់អំពី<<?php echo $male; ?>>ខ្ញុំបាទ</<?php echo $male; ?>>/<<?php echo $female; ?>>នាងខ្ញុំ</<?php echo $female; ?>>។ </br> </br>	
	</td>
  </tr>
</table>


<table align="center" style="width:90%" class="tg">
  <tr>
    <th class="tg-c3ow"></th>
    <td class="tg-c3ow" rowspan="2"><center>
		ធ្វើនៅ <?php echo $_POST["place"]; ?>, ថ្ងៃទី <?php echo $_POST["mdate"]; ?> ខែ <?php echo $_POST["mmonth"]; ?> ឆ្នាំ <?php echo $_POST["myear"]; ?></br>
		ហត្ថលេខាអ្នកស្នើសុំ</br>
		<img src="uploads/<?php echo $_POST["signcode"]; ?>.svg"  width="200px" height="100px" onerror="this.src='uploads/none.svg'">
		
		
		</br>
		<?php echo $_POST["name"]; ?></center>
	</td>
  </tr>
  <tr>
    <td class="tg-c3ow" rowspan="2"><center></br></br></br>
		បានឃើញ និងឯកភាព</br>
		ធ្វើនៅ..............ថ្ងៃទី..........ខែ...........ឆ្នាំ.........</br>
		លោកប្រធានក្រុមហ៊ុន</br>	</center>
	
	</td>
  </tr>
  <tr>
    <td class="tg-c3ow" rowspan="2"><center></br>
	
			បានឃើញ និងឯកភាព</br>
		ធ្វើនៅ..............ថ្ងៃទី..........ខែ...........ឆ្នាំ.........</br>
		លោកប្រធានគ្រប់គ្រងទូទៅ</br></center>
	</td>
  </tr>
  <tr>
    <td class="tg-9wq8"></td>
  </tr>
</table>
</div>
</page>
</div>
</div>
<center>
<table style="font-family:'Content', sans-serif !important;font-size:16px;">
  <tr>
    <td>
<button style="
	float: right;
    text-align: center;
    border: 1px solid transparent;
    padding: .375rem .75rem;
	margin: 10px;
    font-size: 2.5rem;
    line-height: 1.5;
    border-radius: .25rem;
	color: #fff;
	background-color: #007bff; 
	border-color: #007bff;" 
	onclick="showImage()">
	Save As Photo
</button>

<button style="
	float: right;
    text-align: center;
    border: 1px solid transparent;
    padding: .375rem .75rem;
	margin: 10px;
    font-size: 2.5rem;
    line-height: 1.5;
    border-radius: .25rem;
	color: #fff;
	background-color: #007bff; 
	border-color: #007bff;" 
	onclick="printContent('print-container')">
	Print
</button> 
	</td>
  </tr>
</table>
</center>
</body>
</html>