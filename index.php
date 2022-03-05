<?php
?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="formstyle.css">
		<link href="https://fonts.googleapis.com/css?family=Content|Moul|Roboto&display=swap" rel="stylesheet">
	<script>
	function showImage() {
	window.open("image.php","_self");
	}
	</script>
	
	</head>
	<body>
		<div >
			<form action="attendance.php" method="post" enctype="multipart/form-data">
				<table class="table">
					<tr>
					<th colspan="6">ពាក្យស្នើសុំអនុញ្ញាតិឈប់សម្រាក</th>
					</tr>
					<tr>
					<td  colspan="6"></td>
					</tr>
					<tr>
					<td>ឈ្មោះ</td>
					<td  colspan="5"><input type="text" name="name" required></td>
					</tr>
					<tr>
					<td>ភេទ</td>
					<td  colspan="5"><select name="sex" required>
					<option value="1">ប្រុស</option>
					<option value="2">ស្រី</option></td>
					</tr>
					<tr>
					<td>តួនាទី</td>
					<td  colspan="5"><input type="text" name="position" required></td>
					</tr>
					<tr>
					<td>សម្រាកចំនួន</td>
					<td><input type="text" name="period" required></td>
					<td>ថ្ងៃ</td>
					<td  colspan="3"></td>
					</tr>
					<tr>
					<td>ចាប់ពីថ្ងៃទី</td>
					<td >
					<select name="fdate" required>
					<option value="01">01</option>
					<option value="02">02</option>
					<option value="03">03</option>
					<option value="04">04</option>
					<option value="05">05</option>
					<option value="06">06</option>
					<option value="07">07</option>
					<option value="08">08</option>
					<option value="09">09</option>
					<option value="10">10</option>
					<option value="11">11</option>
					<option value="12">12</option>
					<option value="13">13</option>
					<option value="14">14</option>
					<option value="15">15</option>
					<option value="16">16</option>
					<option value="17">17</option>
					<option value="18">18</option>
					<option value="19">19</option>
					<option value="20">20</option>
					<option value="21">21</option>
					<option value="22">22</option>
					<option value="23">23</option>
					<option value="24">24</option>
					<option value="25">25</option>
					<option value="26">26</option>
					<option value="27">27</option>
					<option value="28">28</option>
					<option value="29">29</option>
					<option value="30">30</option>
					<option value="31">31</option>
					</select>
					</td>
					<td>ខែ</td>
					<td>
					<select name="fmonth" required>
					<option value="មករា">មករា</option>
					<option value="កុម្ភៈ">កុម្ភៈ</option>
					<option value="មិនា">មិនា</option>
					<option value="មេសា">មេសា</option>
					<option value="ឧសភា">ឧសភា</option>
					<option value="មិថុនា">មិថុនា</option>
					<option value="កក្កដា">កក្កដា</option>
					<option value="សីហា">សីហា</option>
					<option value="កញ្ញា">កញ្ញា</option>
					<option value="តុលា">តុលា</option>
					<option value="វិច្ឆិកា">វិច្ឆិកា</option>
					<option value="ឆ្នូ">ឆ្នូ</option>
					</select>
					</td>
					<td>ឆ្នាំ</td>
					<td >
					<select name="fyear" required>
					<option value="2020">2020</option>
					<option value="2021">2021</option>
					<option value="2022">2022</option>
					<option value="2023">2023</option>
					<option value="2024">2024</option>
					<option value="2025">2025</option>
					</select>
					</td>
					</tr>
					<tr>
					<td >ដល់ថ្ងៃទី</td>
					<td>
					<select name="tdate" required>
					<option value="01">01</option>
					<option value="02">02</option>
					<option value="03">03</option>
					<option value="04">04</option>
					<option value="05">05</option>
					<option value="06">06</option>
					<option value="07">07</option>
					<option value="08">08</option>
					<option value="09">09</option>
					<option value="10">10</option>
					<option value="11">11</option>
					<option value="12">12</option>
					<option value="13">13</option>
					<option value="14">14</option>
					<option value="15">15</option>
					<option value="16">16</option>
					<option value="17">17</option>
					<option value="18">18</option>
					<option value="19">19</option>
					<option value="20">20</option>
					<option value="21">21</option>
					<option value="22">22</option>
					<option value="23">23</option>
					<option value="24">24</option>
					<option value="25">25</option>
					<option value="26">26</option>
					<option value="27">27</option>
					<option value="28">28</option>
					<option value="29">29</option>
					<option value="30">30</option>
					<option value="31">31</option>
					</select>
					</td>
					<td >ខែ</td>
					<td >
					<select name="tmonth" required>
					<option value="មករា">មករា</option>
					<option value="កុម្ភៈ">កុម្ភៈ</option>
					<option value="មិនា">មិនា</option>
					<option value="មេសា">មេសា</option>
					<option value="ឧសភា">ឧសភា</option>
					<option value="មិថុនា">មិថុនា</option>
					<option value="កក្កដា">កក្កដា</option>
					<option value="សីហា">សីហា</option>
					<option value="កញ្ញា">កញ្ញា</option>
					<option value="តុលា">តុលា</option>
					<option value="វិច្ឆិកា">វិច្ឆិកា</option>
					<option value="ឆ្នូ">ឆ្នូ</option>
					</select>
					</td>
					<td >ឆ្នាំ</td>
					<td >
					<select name="tyear" required>
					<option value="2020">2020</option>
					<option value="2021">2021</option>
					<option value="2022">2022</option>
					<option value="2023">2023</option>
					<option value="2024">2024</option>
					<option value="2025">2025</option>
					</select>
					</td>
					</tr>
					<tr>
					<td width="25%">ធ្វើការវិញថ្ងៃទី</td>
					<td >
					<select name="bdate" required>
					<option value="01">01</option>
					<option value="02">02</option>
					<option value="03">03</option>
					<option value="04">04</option>
					<option value="05">05</option>
					<option value="06">06</option>
					<option value="07">07</option>
					<option value="08">08</option>
					<option value="09">09</option>
					<option value="10">10</option>
					<option value="11">11</option>
					<option value="12">12</option>
					<option value="13">13</option>
					<option value="14">14</option>
					<option value="15">15</option>
					<option value="16">16</option>
					<option value="17">17</option>
					<option value="18">18</option>
					<option value="19">19</option>
					<option value="20">20</option>
					<option value="21">21</option>
					<option value="22">22</option>
					<option value="23">23</option>
					<option value="24">24</option>
					<option value="25">25</option>
					<option value="26">26</option>
					<option value="27">27</option>
					<option value="28">28</option>
					<option value="29">29</option>
					<option value="30">30</option>
					<option value="31">31</option>
					</select>	
					</td>
					<td >ខែ</td>
					<td >
					<select name="bmonth" required>
					<option value="មករា">មករា</option>
					<option value="កុម្ភៈ">កុម្ភៈ</option>
					<option value="មិនា">មិនា</option>
					<option value="មេសា">មេសា</option>
					<option value="ឧសភា">ឧសភា</option>
					<option value="មិថុនា">មិថុនា</option>
					<option value="កក្កដា">កក្កដា</option>
					<option value="សីហា">សីហា</option>
					<option value="កញ្ញា">កញ្ញា</option>
					<option value="តុលា">តុលា</option>
					<option value="វិច្ឆិកា">វិច្ឆិកា</option>
					<option value="ឆ្នូ">ឆ្នូ</option>
					</select>	
					</td>
					<td>ឆ្នាំ</td>
					<td >
					<select name="byear" required>
					<option value="2020">2020</option>
					<option value="2021">2021</option>
					<option value="2022">2022</option>
					<option value="2023">2023</option>
					<option value="2024">2024</option>
					<option value="2025">2025</option>
					</select>
					</td>
					</tr>
					<tr>
					<td >មូលហេតុ</td>
					<td  colspan="5"><input type="text" name="reason" required></td>
					</tr>
					<tr>
					<td >ធ្វើនៅ</td>
					<td  colspan="5">
					<select name="place" required>
					<option value="កណ្ដាល">កណ្ដាល</option>
					<option value="កែប">កែប</option>
					<option value="កោះកុង">កោះកុង</option>
					<option value="ក្រចេះ">ក្រចេះ</option>
					<option value="កំពង់ចាម">កំពង់ចាម</option>
					<option value="កំពង់ឆ្នាំង">កំពង់ឆ្នាំង</option>
					<option value="កំពង់ធំ">កំពង់ធំ</option>
					<option value="កំពង់ស្ពឺ">កំពង់ស្ពឺ</option>
					<option value="កំពត">កំពត</option>
					<option value="តាកែវ">តាកែវ</option>
					<option value="ត្បូងឃ្មុំ">ត្បូងឃ្មុំ</option>
					<option value="បន្ទាយមានជ័យ">បន្ទាយមានជ័យ</option>
					<option value="ប៉ៃលិន">ប៉ៃលិន</option>
					<option value="បាត់ដំបង">បាត់ដំបង</option>
					<option value="ពោធិ៍សាត់">ពោធិ៍សាត់</option>
					<option value="ព្រៃវែង">ព្រៃវែង</option>
					<option value="ព្រះវិហារ">ព្រះវិហារ</option>
					<option value="ព្រះសីហនុ">ព្រះសីហនុ</option>
					<option value="ភ្នំពេញ">ភ្នំពេញ</option>
					<option value="មណ្ឌលគិរី">មណ្ឌលគិរី</option>
					<option value="រតនគិរី">រតនគិរី</option>
					<option value="សៀមរាប">សៀមរាប</option>
					<option value="ស្ទឹងត្រែង">ស្ទឹងត្រែង</option>
					<option value="ស្វាយរៀង">ស្វាយរៀង</option>
					<option value="ឧត្ដរមានជ័យ">ឧត្ដរមានជ័យ</option>
					</select>
					
					</td>
					</tr>
					<tr>
					<td >ធ្វើនៅថ្ងៃទី</td>
					<td >
					<select name="mdate" required>
					<option value="01">01</option>
					<option value="02">02</option>
					<option value="03">03</option>
					<option value="04">04</option>
					<option value="05">05</option>
					<option value="06">06</option>
					<option value="07">07</option>
					<option value="08">08</option>
					<option value="09">09</option>
					<option value="10">10</option>
					<option value="11">11</option>
					<option value="12">12</option>
					<option value="13">13</option>
					<option value="14">14</option>
					<option value="15">15</option>
					<option value="16">16</option>
					<option value="17">17</option>
					<option value="18">18</option>
					<option value="19">19</option>
					<option value="20">20</option>
					<option value="21">21</option>
					<option value="22">22</option>
					<option value="23">23</option>
					<option value="24">24</option>
					<option value="25">25</option>
					<option value="26">26</option>
					<option value="27">27</option>
					<option value="28">28</option>
					<option value="29">29</option>
					<option value="30">30</option>
					<option value="31">31</option>
					</select>
					</td>
					<td >ខែ</td>
					<td >
					<select name="mmonth" required>
					<option value="មករា">មករា</option>
					<option value="កុម្ភៈ">កុម្ភៈ</option>
					<option value="មិនា">មិនា</option>
					<option value="មេសា">មេសា</option>
					<option value="ឧសភា">ឧសភា</option>
					<option value="មិថុនា">មិថុនា</option>
					<option value="កក្កដា">កក្កដា</option>
					<option value="សីហា">សីហា</option>
					<option value="កញ្ញា">កញ្ញា</option>
					<option value="តុលា">តុលា</option>
					<option value="វិច្ឆិកា">វិច្ឆិកា</option>
					<option value="ឆ្នូ">ឆ្នូ</option>
					</select>	
					</td>
					<td>ឆ្នាំ</td>
					<td >
					<select name="myear" required>
					<option value="2020">2020</option>
					<option value="2021">2021</option>
					<option value="2022">2022</option>
					<option value="2023">2023</option>
					<option value="2024">2024</option>
					<option value="2025">2025</option>
					</select>
					</td>
					</tr>
					<tr>
					<td>ហត្ថលេខា</td>
					<td colspan="5"><input type="text" name="signcode" ></td>
					</tr>
					<tr>
					<td  colspan="6"></td>
					</tr>
					<tr>
					<td  colspan="6">
					<input type="submit" value="បញ្ចូលពត៌មាន">
					</td>
					</tr>
				</table>
			</form>
		</div>
	</body>
</html>