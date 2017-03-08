<html xmlns = "http://www.w3.org/1999/xhtml"> 
<title>feedback List</title>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Park Review</title>
	<link rel="shortcut icon" href="assets/sj_favicon.ico">
	<link rel="stylesheet" href="css/themes/default/jquery.mobile-1.4.5.min.css">
	<link rel="stylesheet" href="assets/css/jqm-demos.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
	<script src="assets/js/index.js"></script>
	<script src="js/jquery.js"></script>
	<script src="js/jquery.mobile-1.4.5.min.js"></script>
    <script src="js/jquery2.js"></script>
	<script src="js/jquery-ui.js"></script>
</head>
<body>
	
	<div class="btn-group container center-block" role="group" aria-label="returnToForm">
    	<a href="http://jturman.altervista.org/SJ_ParkAssessment/SJ_ParkAssessment/library/index1.html" type="button" class="btn btn-success">Return to Form</a>
    </div>
    <div class="container center-block">
     <p>The average score of <?php echo $_POST['nameOfFacilityText']; ?> is
     <?php 
     $averageScore = ((($_POST['turfChoice'])+($_POST['sportsFieldsChoice'])+($_POST['artificialTurfChoice'])+
($_POST['bleachersChoice'])+($_POST['treesChoice'])+($_POST['treeBasinsChoice'])+($_POST['skinnedAreasChoice'])+
($_POST['groundcoverFlowersChoice'])+($_POST['sidewalksChoice'])+($_POST['pathwaysChoice'])+($_POST['parkingLotsChoice'])+
($_POST['courtSurfacesChoice'])+($_POST['tennisCourtsChoice'])+($_POST['basketballCourtsChoice'])+
($_POST['reservablePicnicTablesChoice'])+($_POST['reservableBbqPitsChoice'])+($_POST['nonReservablePicnicTablesChoice'])+
($_POST['nonReservableBbqPitsChoice'])+($_POST['gameTablesChoice'])+($_POST['drinkingFountainsChoice'])+
($_POST['benchesChoice'])+($_POST['totPlaygroundsSurfaceChoice'])+($_POST['totPlaygroundsChoice'])+
($_POST['youthPlaygroundsSurfaceChoice'])+($_POST['youthPlaygroundsChoice'])+($_POST['restroomBuildingsChoice'])+
($_POST['parCourseStationsChoice'])+($_POST['trailsChoice']))/29);
     echo $averageScore;
     ?>.</p>
     </div>
	 <?php
		if($_POST['turfChoice'] > 0){
			$turfavg = $_POST['turfchoice'];
		}
		
		if($_POST['sportsFieldsChoice'] > 0){
			$sportsfieldsavg = $_POST['sportsFieldsChoice'];
		}
		if($_POST['artificialTurfChoice'] > 0){
			$artificialturfavg = $_POST['artificialTurfChoice'];
		}
		if($_POST['bleachersChoice'] > 0){
			$bleachersavg = $_POST['bleachersChoice'];
		}
		if($_POST['treesChoice'] > 0){
			$treesavg = $_POST['treesChoice'];
		}
		if($_POST['treeBasinsChoice'] > 0){
			$treebasinsavg = $_POST['treeBasinsChoice'];
		}
		if($_POST['skinnedAreasChoice'] > 0){
			$skinnedareasavg = $_POST['skinnedAreasChoice'];
		}
	 ?>
<?php
$user = $_POST['user'];
$pwd = $_POST['pwd'];
$Record_ID = $_POST['Record_ID'];
$parkID = $_POST['park_ID'];
$date = date('Y/m/d');
$nameOfFacilityText = $_POST['nameOfFacilityText'];
$supervisorText = $_POST['supervisorText'];
$raterText = $_POST['raterText'];
$turf = $_POST['turfChoice'];
$turfText = $_POST['turfText'];
$sportsFields = $_POST['sportsFieldsChoice'];
$sportsFieldsText = $_POST['sportsFieldsText'];
$artificialTurf = $_POST['artificialTurfChoice'];
$artificialTurfText = $_POST['artificialTurfText'];
$bleachers = $_POST['bleachersChoice'];
$bleachersText = $_POST['bleachersText'];
$trees = $_POST['treesChoice'];
$treesText = $_POST['treesText'];
$treeBasins = $_POST['treeBasinsChoice'];
$treeBasinsText = $_POST['treeBasinsText'];
$shrubs = $_POST['shrubsChoice'];
$shrubsText = $_POST['shrubsText'];
$skinnedAreas = $_POST['skinnedAreasChoice'];
$skinnedAreasText = $_POST['skinnedAreasText'];
$groundcoverFlowers = $_POST['groundcoverFlowersChoice'];
$groundcoverFlowersText = $_POST['groundcoverFlowersText'];
$sidewalks = $_POST['sidewalksChoice'];
$sidewalksText = $_POST['sidewalksText'];
$pathways = $_POST['pathwaysChoice'];
$pathwaysText = $_POST['pathwaysText'];
$parkingLots = $_POST['parkingLotsChoice'];
$parkingLotsText = $_POST['parkingLotsText'];
$courtSurfaces = $_POST['courtSurfacesChoice'];
$courtSurfacesText = $_POST['courtSurfacesText'];
$tennisCourts = $_POST['tennisCourtsChoice'];
$tennisCourtsText = $_POST['tennisCourtsText'];
$basketballCourts = $_POST['basketballCourtsChoice'];
$basketballCourtsText = $_POST['basketballCourtsText'];
$reservablePicnicTables = $_POST['reservablePicnicTablesChoice'];
$reservablePicnicTablesText = $_POST['reservablePicnicTablesText'];
$reservableBbqPits = $_POST['reservableBbqPitsChoice'];
$reservableBbqPitsText = $_POST['reservableBbqPitsText'];
$nonReservablePicnicTables = $_POST['nonReservablePicnicTablesChoice'];
$nonReservablePicnicTablesText = $_POST['nonReservablePicnicTablesText'];
$nonReservableBbqPits = $_POST['nonReservableBbqPitsChoice'];
$nonReservableBbqPitsText = $_POST['nonReservableBbqPitsText'];
$gameTables = $_POST['gameTablesChoice'];
$gameTablesText = $_POST['gameTablesText'];
$drinkingFountains = $_POST['drinkingFountainsChoice'];
$drinkingFountainsText = $_POST['drinkingFountainsText'];
$benches = $_POST['benchesChoice'];
$benchesText = $_POST['benchesText'];
$totPlaygroundsSurface = $_POST['totPlaygroundsSurfaceChoice'];
$totPlaygrounds = $_POST['totPlaygroundsChoice'];
$totPlaygroundsText = $_POST['totPlaygroundsText'];
$youthPlaygroundsSurface = $_POST['youthPlaygroundsSurfaceChoice'];
$youthPlaygrounds = $_POST['youthPlaygroundsChoice'];
$youthPlaygroundsText = $_POST['youthPlaygroundsText'];
$restroomBuildings = $_POST['restroomBuildingsChoice'];
$restroomBuildingsText = $_POST['restroomBuildingsText'];
$parCourseStations = $_POST['parCourseStationsChoice'];
$parCourseStationsText = $_POST['parCourseStations'];
$trails = $_POST['trailsChoice'];
$trailsText = $_POST['trailsText'];
//connect to the database
$connectionstring = mysql_connect('localhost', 'jturman', 'sodvofutpa75' ) 
	or die('Could not connect: ' . mysql_error());
//select the database
mysql_select_db('my_jturman')
	or die('Could not select database: ' . mysql_error());
//create insert SQL string
$Insert ="INSERT INTO Park_Review SET
          Record_ID      = '". ($Record_ID) ."',
          ParkID   		 = '". ($ParkID) ."',
          date			 = '". ($date) ."',
          nameOfFacilityText = '". ($nameOfFacilityText) ."',
          supervisorText = '". ($supervisorText) ."',
          raterText = '". ($raterText) ."',
          turf = '". ($turf) ."',
          turfText = '". ($turfText) ."',
          sportsFields = '". ($sportsFields) ."',
          sportsFieldsText = '". ($sportsFieldsText) ."',
          artificialTurf = '". ($artificialTurf) ."',
          artificialTurfText = '". ($artificialTurfText) ."',
          bleachers = '". ($bleachers) ."',
          bleachersText = '". ($bleachersText) ."',
          trees = '". ($trees) ."',
          treesText = '". ($treesText) ."',
          treeBasins = '". ($treeBasins) ."',
          treeBasinsText = '". ($treeBasinsText) ."',
          shrubs = '". ($shrubs) ."',
          shrubsText = '". ($shrubsText) ."',
          skinnedAreas = '". ($skinnedAreas) ."',
          skinnedAreasText = '". ($skinnedAreasText) ."',
          groundcoverFlowers = '". ($groundcoverFlowers) ."',
          groundcoverFlowersText = '". ($groundcoverFlowersText) ."',
          sidewalks = '". ($sidewalks) ."',
          sidewalksText = '". ($sidewalksText) ."',
          pathways = '". ($pathways) ."',
          pathwaysText = '". ($pathwaysText) ."',
          parkingLots = '". ($parkingLots) ."',
          parkingLotsText = '". ($parkingLotsText) ."',
          courtSurfaces = '". ($courtSurfaces) ."',
          courtSurfacesText = '". ($courtSurfacesText) ."',
          tennisCourts = '". ($tennisCourts) ."',
          tennisCourtsText = '". ($tennisCourtsText) ."',
          basketballCourts = '". ($basketballCourts) ."',
          basketballCourtsText = '". ($basketballCourtsText) ."',
          reservablePicnicTables = '". ($reservablePicnicTables) ."',
          reservablePicnicTablesText = '". ($reservablePicnicTablesText) ."',
          reservableBbqPits  = '". ($reservableBbqPits) ."',
          reservableBbqPitsText = '". ($reservableBbqPitsText) ."',
          nonReservablePicnicTables = '". ($nonReservablePicnicTables) ."',
          nonReservablePicnicTablesText = '". ($nonReservablePicnicTablesText) ."',
          nonReservableBbqPits = '". ($nonReservableBbqPits) ."',
          nonReservableBbqPitsText = '". ($nonReservableBbqPitsText) ."',
          gameTables = '". ($gameTables) ."',
          gameTablesText = '". ($gameTablesText) ."',
          drinkingFountains = '". ($drinkingFountains) ."',
          drinkingFountainsText = '". ($drinkingFountainsText) ."',
          benches = '". ($benches) ."',
          benchesText = '". ($benchesText) ."',
          totPlaygroundsSurface = '". ($totPlaygroundsSurface) ."',
          totPlaygrounds = '". ($totPlaygrounds) ."',
          totPlaygroundsText = '". ($totPlaygroundsText) ."',
          youthPlaygroundsSurface = '". ($youthPlaygroundsSurface) ."',
          youthPlaygrounds = '". ($youthPlaygrounds) ."',
          youthPlaygroundsText = '". ($youthPlaygroundsText) ."',
          restroomBuildings = '". ($restroomBuildings) ."',
          restroomBuildingsText = '". ($restroomBuildingsText) ."',
          parCourseStations = '". ($parCourseStations) ."',
          parCourseStationsText = '". ($parCourseStationsText) ."',
          trails = '". ($trails) ."',
          trailsText = '". ($trailsText) ."'";
//insert into database
$results = mysql_query($Insert)
	or die('Could not insert into database: '. mysql_error());
//disconnect from database
mysql_close($connectionstring)
	or die('Could not close database: ' . mysql_error());
?>
</body>
</html>