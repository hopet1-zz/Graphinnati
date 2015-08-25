<body style="background-image: url('images/background.jpg');">	
	<?php
		session_start();
		if(!isset($_SESSION['name'])){
			header("location: login.php");
		}
	?>
	<link href="css/styles.css" rel="stylesheet">
    <!-- Include Twitter Bootstrap and jQuery: -->
	<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
    
    <!-- Include the plugin's CSS and JS: -->
	<script type="text/javascript" src="js/bootstrap-multiselect.js"></script>
	<link rel="stylesheet" href="css/bootstrap-multiselect.css" type="text/css"/>


    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">
    <link href="css/simple-sidebar.css" rel="stylesheet">
    <link href="css/bootstrap-select.min.css" rel="stylesheet">
    <link href="css/bootstrap-select.css" rel="stylesheet">
    
    <!--Title Font-->
    <link href='http://fonts.googleapis.com/css?family=Nunito' rel='stylesheet' type='text/css'>
    
    <!--Buttons CSS-->
    <link href="css/buttons.css" rel="stylesheet">
	<div class="container" style="border-style:groove; padding: 40px; border-radius: 20px; background: white;">
		<div class="row">
			<ul class="nav nav-tabs">
				<li><a href="index.php">Home</a></li>
  				<li class="active"><a href="data_page.html">Create Graph</a></li>
              <li><a href="contact.php">Contact</a></li>
              <?php
			  		if(!isset($_SESSION['name'])){
						echo "<li class='pull-right'><a href='login.php'>Log In</a></li>";
					}else{
						echo "<li class='pull-right'><a href='logout.php'>Log Out</a></li>";
					}
  				?>
  					<?php
						if(isset($_SESSION['name'])){
							$name = $_SESSION['name'];
							echo "<li class='pull-right'><a>$name</a></li>";
						}
  					?>
			</ul>

       </div>
       <!--Header-->
       <h1 class="text-center" style="font-family:Nunito; color: #0f7cc1;">G r a p h i n n a t i </h1>
       <hr>
       <h1 class="text-center login-title">View Data The Way You Like It</h1>
       <br>


       <!--Location-->
       <!-- 1 - 5 -->
       <h2 style="color:#3d8cc5">Neighborhood(s)</h2>
       <div class="checkBoxSection"><!--Check Box Section is in simple-sidebar.css-->
       		<label style="width: 15%;"><input type="checkbox" id="avondale" name="Avondale" value="1" form-group col-lg-4 text-center/><br>Avondale</label>
           <label style="width: 15%;"><input type="checkbox" id="bondHill" name="Bond Hill" value="2" form-group col-lg-4 text-center/><br>Bond Hill</label>
           <label style="width: 15%;"><input type="checkbox" id="california" name="California" value="3" form-group col-lg-4 text-center/><br>California</label>
			<label style="width: 15%;"><input type="checkbox" id="campWashington" name="Camp Washington" value="4" form-group col-lg-4 text-center/><br>Camp Washington</label>
           <label style="width: 15%;"><input type="checkbox" id="carthage" name="Carthage" value="5" form-group col-lg-4 text-center/><br>Carthage</label>
           <a onclick="selectRow1()" class="btn btn-primary btn-large" style="margin-bottom: 10px;">Select Row</a>
           <a onclick="deselectRow1()" class="btn btn-primary btn-large" style="margin-bottom: 10px;">Deselect Row</a>
       </div>

		<br>
		<!-- 6 - 10 -->
       <div class="checkBoxSection">
           <label style="width: 15%;"><input type="checkbox" id="clifton" name="Clifton" value="6" form-group col-lg-4 text-center/><br>Clifton</label>
           <label style="width: 15%;"><input type="checkbox" id="collegeHill" name="College Hill" value="7" form-group col-lg-4 text-center/><br>College Hill</label>
           <label style="width: 15%;"><input type="checkbox" id="columbiaTusculum" name="Columbia Tusculum" value="8" form-group col-lg-4 text-center/><br>Columbia Tusculum</label>
			<label style="width: 15%;"><input type="checkbox" id="corryVille" name="Corryville" value="9" form-group col-lg-4 text-center/><br>Corryville</label>
           <label style="width: 15%;"><input type="checkbox" id="cuf" name="CUF" value="10" form-group col-lg-4 text-center/><br>CUF</label>
           <a onclick="selectRow2()" class="btn btn-primary btn-large" style="margin-bottom: 10px;">Select Row</a>
           <a onclick="deselectRow2()" class="btn btn-primary btn-large" style="margin-bottom: 10px;">Deselect Row</a>
       </div>
       
       <br>
       <!-- 11 - 15 -->
       <div class="checkBoxSection">
       		<label style="width: 15%;"><input type="checkbox" id="downtown" name="Downtown" value="11" form-group col-lg-4 text-center/><br>Downtown</label>
           <label style="width: 15%;"><input type="checkbox" id="eastEnd" name="East End" value="12" form-group col-lg-4 text-center/><br>East End</label>
           <label style="width: 15%;"><input type="checkbox" id="eastPriceHill" name="East Price Hill" value="13" form-group col-lg-4 text-center/><br>East Price Hill</label>
           <label style="width: 15%;"><input type="checkbox" id="eastWalnutHills" name="East Walnut Hills" value="14" form-group col-lg-4 text-center/><br>East Walnut Hills</label>
           <label style="width: 15%;"><input type="checkbox" id="eastWestwood" name="East Westwood" value="15" form-group col-lg-4 text-center/><br>East Westwood</label>
           <a onclick="selectRow3()" class="btn btn-primary btn-large" style="margin-bottom: 10px;">Select Row</a>
           <a onclick="deselectRow3()" class="btn btn-primary btn-large" style="margin-bottom: 10px;">Deselect Row</a>
       </div>
       
       <br>
       <!-- 16 - 20 -->
       <div class="checkBoxSection">
       		<label style="width: 15%;"><input type="checkbox" id="englishWoods" name="English Woods" value="16" form-group col-lg-4 text-center/><br>English Woods</label>
           <label style="width: 15%;"><input type="checkbox" id="evanston" name="Evanston" value="17" form-group col-lg-4 text-center/><br>Evanston</label>
           <label style="width: 15%;"><input type="checkbox" id="hartwell" name="Hartwell" value="18" form-group col-lg-4 text-center/><br>Hartwell</label>
           <label style="width: 15%;"><input type="checkbox" id="hydePark" name="Hyde Park" value="19" form-group col-lg-4 text-center/><br>Hyde Park</label>
           <label style="width: 15%;"><input type="checkbox" id="kennedyHeights" name="Kennedy Heights" value="20" form-group col-lg-4 text-center/><br>Kennedy Heights</label>
           <a onclick="selectRow4()" class="btn btn-primary btn-large" style="margin-bottom: 10px;">Select Row</a>
           <a onclick="deselectRow4()" class="btn btn-primary btn-large" style="margin-bottom: 10px;">Deselect Row</a>
        </div>
        
        <br>
        <!-- 21 - 25-->
        <div class="checkBoxSection">
			<label style="width: 15%;"><input type="checkbox" id="linwood" name="Linwood" value="21" form-group col-lg-4 text-center/><br>Linwood</label>  
            <label style="width: 15%;"><input type="checkbox" id="lowerPriceHill" name="Lower Price Hill" value="22" form-group col-lg-4 text-center/><br>Lower Price Hill</label>
            <label style="width: 15%;"><input type="checkbox" id="madisonville" name="Madisonville" value="23" form-group col-lg-4 text-center/><br>Madisonville</label>   
            <label style="width: 15%;"><input type="checkbox" id="millvale" name="Millvale" value="24" form-group col-lg-4 text-center/><br>Millvale</label>  
            <label style="width: 15%;"><input type="checkbox" id="mountAdams" name="Mount Adams" value="25" form-group col-lg-4 text-center/><br>Mount Adams</label>
            <a onclick="selectRow5()" class="btn btn-primary btn-large" style="margin-bottom: 10px;">Select Row</a>
            <a onclick="deselectRow5()" class="btn btn-primary btn-large" style="margin-bottom: 10px;">Deselect Row</a>
         </div>    
           
         <br>
         <!-- 26 - 30 -->
         <div class="checkBoxSection">
         		<label style="width: 15%;"><input type="checkbox" id="mountAiry" name="Mount Airy" value="26" form-group col-lg-4 text-center/><br>Mount Airy</label>  
               <label style="width: 15%;"><input type="checkbox" id="mountAuburn" name="Mount Auburn" value="27" form-group col-lg-4 text-center/><br>Mount Auburn</label>  
               <label style="width: 15%;"><input type="checkbox" id="mountLookout" name="Mount Lookout" value="28" form-group col-lg-4 text-center/><br>Mount Lookout</label>  
               <label style="width: 15%;"><input type="checkbox" id="mountWashington" name="Mount Washington" value="29" form-group col-lg-4 text-center/><br>Mount Washington</label> 
               <label style="width: 15%;"><input type="checkbox" id="northAvondale" name="North Avondale" value="30" form-group col-lg-4 text-center/><br>North Avondale</label>   
         	 <a onclick="selectRow6()" class="btn btn-primary btn-large" style="margin-bottom: 10px;">Select Row</a>
            <a onclick="deselectRow6()" class="btn btn-primary btn-large" style="margin-bottom: 10px;">Deselect Row</a>
         </div>
         
         <br>
         <!-- 31 - 35 -->
         <div class="checkBoxSection">
         		<label style="width: 15%;"><input type="checkbox" id="northFairmount" name="North Fairmount" value="31" form-group col-lg-4 text-center/><br>North Fairmount</label>  
               <label style="width: 15%;"><input type="checkbox" id="northside" name="Northside" value="32" form-group col-lg-4 text-center/><br>Northside</label>  
               <label style="width: 15%;"><input type="checkbox" id="oakley" name="Oakley" value="33" form-group col-lg-4 text-center/><br>Oakley</label> 
               <label style="width: 15%;"><input type="checkbox" id="overTheRhine" name="Over-the-Rhine" value="34" form-group col-lg-4 text-center/><br>Over-the-Rhine</label>  
               <label style="width: 15%;"><input type="checkbox" id="paddockHills" name="Paddock Hills" value="35" form-group col-lg-4 text-center/><br>Paddock Hills</label>   
            <a onclick="selectRow7()" class="btn btn-primary btn-large" style="margin-bottom: 10px;">Select Row</a>
            <a onclick="deselectRow7()" class="btn btn-primary btn-large" style="margin-bottom: 10px;">Deselect Row</a>
         </div>
         
         <br>
         <!-- 36 - 40 -->
         <div class="checkBoxSection">
         		<label style="width: 15%;"><input type="checkbox" id="pendleton" name="Pendleton" value="36" form-group col-lg-4 text-center/><br>Pendleton</label>
               <label style="width: 15%;"><input type="checkbox" id="pleasantRidge" name="Pleasant Ridge" value="37" form-group col-lg-4 text-center/><br>Pleasant Ridge</label>
               <label style="width: 15%;"><input type="checkbox" id="queensgate" name="Queensgate" value="38" form-group col-lg-4 text-center/><br>Queensgate</label>
               <label style="width: 15%;"><input type="checkbox" id="riverside" name="Riverside" value="39" form-group col-lg-4 text-center/><br>Riverside</label>
               <label style="width: 15%;"><input type="checkbox" id="roselawn" name="Roselawn" value="40" form-group col-lg-4 text-center/><br>Roselawn</label>
            <a onclick="selectRow8()" class="btn btn-primary btn-large" style="margin-bottom: 10px;">Select Row</a>
            <a onclick="deselectRow8()" class="btn btn-primary btn-large" style="margin-bottom: 10px;">Deselect Row</a> 
         </div>
         
         <br>
         <!-- 41 - 45 -->
         <div class="checkBoxSection">
         <label style="width: 15%;"><input type="checkbox" id="sedamsville" name="Sedamsville" value="41" form-group col-lg-4 text-center/><br>Sedamsville</label>
         <label style="width: 15%;"><input type="checkbox" id="southCumminsville" name="South Cumminsville" value="42" form-group col-lg-4 text-center/><br>South Cumminsville</label>
         <label style="width: 15%;"><input type="checkbox" id="southFairmount" name="South Fairmount" value="43" form-group col-lg-4 text-center/><br>South Fairmount</label>
         <label style="width: 15%;"><input type="checkbox" id="springGroveVillage" name="Spring Grove Village" value="44" form-group col-lg-4 text-center/><br>Spring Grove Village</label>
         <label style="width: 15%;"><input type="checkbox" id="villagesAtRollHill" name="Villages at Roll Hill" value="45" form-group col-lg-4 text-center/><br>Villages at Roll Hill</label>
         	 <a onclick="selectRow9()" class="btn btn-primary btn-large" style="margin-bottom: 10px;">Select Row</a>
            <a onclick="deselectRow9()" class="btn btn-primary btn-large" style="margin-bottom: 10px;">Deselect Row</a>
         </div>
         
         <br>
         <!-- 46 - 50 -->
         <div class="checkBoxSection">
         <label style="width: 15%;"><input type="checkbox" id="walnutHills" name="Walnut Hills" value="46" form-group col-lg-4 text-center/><br>Walnut Hills</label>
         <label style="width: 15%;"><input type="checkbox" id="westEnd" name="West End" value="47" form-group col-lg-4 text-center/><br>West End</label>
         <label style="width: 15%;"><input type="checkbox" id="westPriceHill" name="West Price Hill" value="48" form-group col-lg-4 text-center/><br>West Price Hill</label>
         <label style="width: 15%;"><input type="checkbox" id="westwood" name="Westwood" value="49" form-group col-lg-4 text-center/><br>Westwood</label>
         <label style="width: 15%;"><input type="checkbox" id="wintonHills" name="Winton Hills" value="50" form-group col-lg-4 text-center/><br>Winton Hills</label>
         		<a onclick="selectRow10()" class="btn btn-primary btn-large" style="margin-bottom: 10px;">Select Row</a>
            	<a onclick="deselectRow10()" class="btn btn-primary btn-large" style="margin-bottom: 10px;">Deselect Row</a>
         </div>
         
         <br>
         <div>
         	<a onclick="selectAll()" class="btn btn-primary btn-large">Select All</a>
           <a onclick="deselectAll()" class="btn btn-primary btn-large" style="margin-left: 20px;">Deselect All</a>
         </div>


       
       <!--Graph By-->
       <h2 style="color:#3d8cc5">Graph By</h2>
       <div class="form-group col-lg-4">
       		<div class="row">
       			<select name="dataBeingGraphed" id="dataBeingGraphed" class="form-control">
           	 <option value="1" id="Total Population">Total Population</option>
           	 <option value="2" id="Male Population">Male Population</option>
             	 <option value="3" id="Female Population">Female Population</option>
               <option value="4" id="Caucasian">Race: Caucasian</option>
               <option value="5" id="African American">Race: African-American</option>
               <option value="6" id="Indian">Race: Indian</option>
               <option value="7" id="Asian">Race: Asian</option>
               <option value="8" id="Pacific">Race: Pacific</option>
               <option value="9" id="Other">Race: Other</option>
               <option value="10" id="Education">Education: Less Than 9th Grade</option>
               <option value="11" id="Education">Education: 9th to 12th Grade (No Diploma)</option>
               <option value="12" id="Education">Education: Highschool Graduate</option>
               <option value="13" id="Education">Education: Some College (No Degree)</option>
               <option value="14" id="Education">Education: Associate Degree</option>
               <option value="15" id="Education">Education: Bachelor's Degree</option>
               <option value="16" id="Education">Education: College Graduate</option>
          		</select>
       		</div>
       </div>
       
       <br><br><br>
       
       <!--Graph Type-->
       <h2 style="color:#3d8cc5">Graph Type</h2>
       <div class="form-group col-lg-4">
       		<div class="row">
       			<select name="dataType" id="dataType" class="form-control">
           	 <option value="1" id="Bar Graph">Bar Graph</option>
           	 <option value="2" id="Pie Chart">Pie Chart</option>
          		</select>
       		</div>
       </div>
       <br><br><br>

       
        <!--<center><a href="data_presentation.html" class="btn btn-primary btn-large" style="margin: 25px;">Create Graph</a></center>-->
        <center><a onclick="createGraph()" class="btn btn-primary btn-large" style="margin: 25px;">Create Graph</a></center>
        
        <?php
			$databaseName = 'localhost:/tmp/mysql.sock';
			$databaseUserName = 'root';
			$databasePassword = '';
			$link = mysql_connect($databaseName, $databaseUserName, $databasePassword);
			if (!$link) {
    			//die('Not connected : ' . mysql_error());
				echo "Connection could not be established.";
			}
			
			//Create array of neighborhood values.
			$sql = 'SELECT * FROM Stats';
			mysql_select_db('Graphinnati');
			$result = mysql_query($sql, $link);
			if(!$result){
				echo "No result could be established.";
			}
			
			//Get arrays.
			$population = $maleGender = $femaleGender = $RaceWhite = $RaceBlack = $RaceIndian = $RaceAsian = $RacePacific = $RaceOther = $EducationA =$EducationB = $EducationC = $EducationD = $EducationE = $EducationF = $EducationG = array();
			while($row = mysql_fetch_array( $result )){
				array_push($population, $row['Population']);
				array_push($maleGender, $row['MalePopulation']);
				array_push($femaleGender, $row['FemalePopulation']);
				array_push($RaceWhite, $row['RaceWhite']);
				array_push($RaceBlack, $row['RaceBlack']);
				array_push($RaceIndian, $row['RaceIndian']);
				array_push($RaceAsian, $row['RaceAsian']);
				array_push($RacePacific, $row['RacePacific']);
				array_push($RaceOther, $row['RaceOther']);
				array_push($EducationA, $row['EducationA']);
				array_push($EducationB, $row['EducationB']);
				array_push($EducationC, $row['EducationC']);
				array_push($EducationD, $row['EducationD']);
				array_push($EducationE, $row['EducationE']);
				array_push($EducationF, $row['EducationF']);
				array_push($EducationG, $row['EducationG']);
			}
		 ?>
        
        
<script type="text/javascript">

    var population = <?php echo json_encode($population); ?>;
	var maleGender = <?php echo json_encode($maleGender); ?>;
	var femaleGender = <?php echo json_encode($femaleGender); ?>;
	var raceWhite = <?php echo json_encode($RaceWhite); ?>;
	var raceBlack = <?php echo json_encode($RaceBlack); ?>;
	var raceIndian = <?php echo json_encode($RaceIndian); ?>;
	var raceAsian = <?php echo json_encode($RaceAsian); ?>;
	var racePacific = <?php echo json_encode($RacePacific); ?>;
	var raceOther = <?php echo json_encode($RaceOther); ?>;
	var eA = <?php echo json_encode($EducationA); ?>;
	var eB = <?php echo json_encode($EducationB); ?>;
	var eC = <?php echo json_encode($EducationC); ?>;
	var eD = <?php echo json_encode($EducationD); ?>;
	var eE = <?php echo json_encode($EducationE); ?>;
	var eF = <?php echo json_encode($EducationF); ?>;
	var eG = <?php echo json_encode($EducationG); ?>;
	var choices = [population, maleGender, femaleGender, raceWhite, raceBlack, raceIndian, raceAsian, racePacific, raceOther, eA, eB, eC, eD, eE, eF, eG];
	var titles = ["Population", "Male Population", "Female Population", "Caucasion", "African-American", "Indian or Native", "Asian", "Pacific", "Other", "Less Than 9th Grade", "9th to 12th Grade", "High School Graduate", "Some College", "Associate's Degree", "Bachelor's Degree", "College Graduate"];
	
	function selectRow1(){
		document.getElementById("avondale").checked = true;
		document.getElementById("bondHill").checked = true;
		document.getElementById("california").checked = true;
		document.getElementById("campWashington").checked = true;
		document.getElementById("carthage").checked = true;
	}
	
	function deselectRow1(){
		document.getElementById("avondale").checked = false;
		document.getElementById("bondHill").checked = false;
		document.getElementById("california").checked = false;
		document.getElementById("campWashington").checked = false;
		document.getElementById("carthage").checked = false;
	}
	
	function selectRow2(){
		document.getElementById("clifton").checked = true;
		document.getElementById("collegeHill").checked = true;
		document.getElementById("columbiaTusculum").checked = true;
		document.getElementById("corryVille").checked = true;
		document.getElementById("cuf").checked = true;
	}
	
	function deselectRow2(){
		document.getElementById("clifton").checked = false;
		document.getElementById("collegeHill").checked = false;
		document.getElementById("columbiaTusculum").checked = false;
		document.getElementById("corryVille").checked = false;
		document.getElementById("cuf").checked = false;
	}
	
	function selectRow3(){
		document.getElementById("downtown").checked = true;
		document.getElementById("eastEnd").checked = true;
		document.getElementById("eastPriceHill").checked = true;
		document.getElementById("eastWalnutHills").checked = true;
		document.getElementById("eastWestwood").checked = true;
	}
	
	function deselectRow3(){
		document.getElementById("downtown").checked = false;
		document.getElementById("eastEnd").checked = false;
		document.getElementById("eastPriceHill").checked = false;
		document.getElementById("eastWalnutHills").checked = false;
		document.getElementById("eastWestwood").checked = false;
	}
	
	function selectRow4(){
		document.getElementById("englishWoods").checked = true;
		document.getElementById("evanston").checked = true;
		document.getElementById("hartwell").checked = true;
		document.getElementById("hydePark").checked = true;
		document.getElementById("kennedyHeights").checked = true;
	}
	
	function deselectRow4(){
		document.getElementById("englishWoods").checked = false;
		document.getElementById("evanston").checked = false;
		document.getElementById("hartwell").checked = false;
		document.getElementById("hydePark").checked = false;
		document.getElementById("kennedyHeights").checked = false;
	}
	
	function selectRow5(){
		document.getElementById("linwood").checked = true;
		document.getElementById("lowerPriceHill").checked = true;
		document.getElementById("madisonville").checked = true;
		document.getElementById("millvale").checked = true;
		document.getElementById("mountAdams").checked = true;
	}
	
	function deselectRow5(){
		document.getElementById("linwood").checked = false;
		document.getElementById("lowerPriceHill").checked = false;
		document.getElementById("madisonville").checked = false;
		document.getElementById("millvale").checked = false;
		document.getElementById("mountAdams").checked = false;
	}
	
	function selectRow6(){
		document.getElementById("mountAiry").checked = true;
		document.getElementById("mountAuburn").checked = true;
		document.getElementById("mountLookout").checked = true;
		document.getElementById("mountWashington").checked = true;
		document.getElementById("northAvondale").checked = true;
	}
	
	function deselectRow6(){
		document.getElementById("mountAiry").checked = false;
		document.getElementById("mountAuburn").checked = false;
		document.getElementById("mountLookout").checked = false;
		document.getElementById("mountWashington").checked = false;
		document.getElementById("northAvondale").checked = false;
	}
	
	function selectRow7(){
		document.getElementById("northFairmount").checked = true;
		document.getElementById("northside").checked = true;
		document.getElementById("oakley").checked = true;
		document.getElementById("overTheRhine").checked = true;
		document.getElementById("paddockHills").checked = true;
	}
	
	function deselectRow7(){
		document.getElementById("northFairmount").checked = false;
		document.getElementById("northside").checked = false;
		document.getElementById("oakley").checked = false;
		document.getElementById("overTheRhine").checked = false;
		document.getElementById("paddockHills").checked = false;
	}
	
	function selectRow8(){
		document.getElementById("pendleton").checked = true;
		document.getElementById("pleasantRidge").checked = true;
		document.getElementById("queensgate").checked = true;
		document.getElementById("riverside").checked = true;
		document.getElementById("roselawn").checked = true;
	}
	
	function deselectRow8(){
		document.getElementById("pendleton").checked = false;
		document.getElementById("pleasantRidge").checked = false;
		document.getElementById("queensgate").checked = false;
		document.getElementById("riverside").checked = false;
		document.getElementById("roselawn").checked = false;
	}
	
	function selectRow9(){
		document.getElementById("sedamsville").checked = true;
		document.getElementById("southCumminsville").checked = true;
		document.getElementById("southFairmount").checked = true;
		document.getElementById("springGroveVillage").checked = true;
		document.getElementById("villagesAtRollHill").checked = true;
	}
	
	function deselectRow9(){
		document.getElementById("sedamsville").checked = false;
		document.getElementById("southCumminsville").checked = false;
		document.getElementById("southFairmount").checked = false;
		document.getElementById("springGroveVillage").checked = false;
		document.getElementById("villagesAtRollHill").checked = false;
	}
	
	function selectRow10(){
		document.getElementById("walnutHills").checked = true;
		document.getElementById("westEnd").checked = true;
		document.getElementById("westPriceHill").checked = true;
		document.getElementById("westwood").checked = true;
		document.getElementById("wintonHills").checked = true;
	}
	
	function deselectRow10(){
		document.getElementById("walnutHills").checked = false;
		document.getElementById("westEnd").checked = false;
		document.getElementById("westPriceHill").checked = false;
		document.getElementById("westwood").checked = false;
		document.getElementById("wintonHills").checked = false;
	}
	
	function selectAll(){
		selectRow1();
		selectRow2();
		selectRow3();
		selectRow4();
		selectRow5();
		selectRow6();
		selectRow7();
		selectRow8();
		selectRow9();
		selectRow10();
	}
	
	function deselectAll(){
		deselectRow1();
		deselectRow2();
		deselectRow3();
		deselectRow4();
		deselectRow5();
		deselectRow6();
		deselectRow7();
		deselectRow8();
		deselectRow9();
		deselectRow10();
	}

</script>

<script type="text/javascript">
	//Hide graph box before choices are selected.
	window.onload = function () {
		
		$('#chartContainer').hide();
	}
	//Function creates graph based on user input.
	function createBarGraph() {
		var jArray = choices[parseInt($('#dataBeingGraphed').val() - 1)];
		var graphName = titles[parseInt($('#dataBeingGraphed').val() - 1)];
		
		var vals = [];
		var xIndexes = [];
		var yIndexes = [];
		x = 0;
		
		$(document).ready(function(){
			$('input:checkbox').each(function() {
    			if (this.checked) {
					v = parseInt(this.value) - 1;
					y = parseInt(jArray[v]);
					x += 10;
					xIndexes.push(x);
					yIndexes.push(y);
   	     		vals.push(this.name);
				}
			});

		});
		var stuff = [];
		var pieGraphDataPoints = [];
		var pieTotal = 0;
		
		for (var i = 0; i < vals.length; i++) {
			stuff[i] = { /*x: xIndexes[i],*/ y: yIndexes[i], label: vals[i]};
		}
		
		//If no boxes are checked, alert user as well as hide div.
		if(stuff.length == 0){
			alert ("Please check one or more of the neighborhoods in Cincinnati.");
			$('#chartContainer').hide();
		}
		else{
			$('#chartContainer').show();
		}
		

	//Bar Graph
    var chart = new CanvasJS.Chart("chartContainer",
    {
      title:{
        text: "Data by Neighborhood"    
      },

      animationEnabled: true,
      axisY: {
        title: graphName,
		 labelFontSize: 10
      },
      axisX :{
        labelFontSize: 14
      },
      legend: {
        verticalAlign: "bottom"
      },
      data: [

      {        
        type: "bar",  
        //showInLegend: true, 
        legendText: "Population Total",
        dataPoints: stuff
      },
      ],
      legend: {
        cursor:"pointer",
        itemclick : function(e){
          if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
            e.dataSeries.visible = false;
          }
          else{
            e.dataSeries.visible = true;
          }
        }
      }
    });
	chart.render();
	}
	
	function createPieChart(){
		//Determine which graph should be displayed for bar graph.
		var jArray = choices[parseInt($('#dataBeingGraphed').val() - 1)];
		var graphName = titles[parseInt($('#dataBeingGraphed').val() - 1)];
		
		var vals = [];
		var xIndexes = [];
		var yIndexes = [];
		x = 0;
		
		$(document).ready(function(){
			$('input:checkbox').each(function() {
    			if (this.checked) {
					v = parseInt(this.value) - 1;
					y = parseInt(jArray[v]);
					x += 10;
					xIndexes.push(x);
					yIndexes.push(y);
   	     		vals.push(this.name);
				}
			});

		});
		var stuff = [];
		var pieGraphDataPoints = [];
		var pieTotal = 0;
		
		for (var i = 0; i < vals.length; i++) {
			stuff[i] = { /*x: xIndexes[i],*/ y: yIndexes[i], label: vals[i]};
			pieTotal += yIndexes[i];
		}
		
		var value = 0;
		for (var i = 0; i < vals.length; i++) {
			stuff[i] = { /*x: xIndexes[i],*/ y: yIndexes[i], label: vals[i]};
			value = (yIndexes[i] / pieTotal) * 100;
			pieGraphDataPoints[i] = {y: value.toFixed(2), legendText: vals[i], label: vals[i] };
		}
		
		//If no boxes are checked, alert user as well as hide div.
		if(stuff.length == 0){
			alert ("Please check one or more of the neighborhoods in Cincinnati.");
			$('#chartContainer').hide();
		}
		else{
			$('#chartContainer').show();
		}

	//Pie Graph
	var pieChart = new CanvasJS.Chart("chartContainer",{
		title:{
			text: "Data by Neighborhood"
		},
                animationEnabled: true,
		legend:{
			verticalAlign: "center",
			horizontalAlign: "left",
			fontSize: 20,
			fontFamily: "Helvetica"        
		},
		theme: "theme2",
		data: [
		{        
			type: "pie",       
			indexLabelFontFamily: "Garamond",       
			indexLabelFontSize: 20,
			indexLabel: "{label} {y}%",
			startAngle:-20,      
			showInLegend: true,
			toolTipContent:"{legendText} {y}%",
			dataPoints: /*[*/
				pieGraphDataPoints
				/*
				{  y: 83.24, legendText:"Google", label: "Google" },
				{  y: 8.16, legendText:"Yahoo!", label: "Yahoo!" },
				{  y: 4.67, legendText:"Bing", label: "Bing" },
				{  y: 1.67, legendText:"Baidu" , label: "Baidu"},       
				{  y: 0.98, legendText:"Others" , label: "Others"}
				*/
			/*]*/
		}
		]
	});
	pieChart.render();
	}
	
	function createGraph(){
		if($('#dataType').val() == 1)
			createBarGraph();
		else
			createPieChart();
	}
</script>

<script type="text/javascript" src="js/canvasjs.min.js"></script></head>
  <center><div id="chartContainer" style="height: 100%;">
  </div></center>
       
       <!--Footer container-->
       	<div class="container" style="border-style:groove; border-radius: 10px; background-color: #EBEBEB; padding: 10px;">
       		<img src="images/logo.png" width="10%" style="border-radius:10px; float: right;"/>
       </div>
       

	</div>
        	<script>$('.selectpicker').selectpicker();</script>
    </div>
</div>
</body>