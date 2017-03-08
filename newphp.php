<html xmlns = "http://www.w3.org/1999/xhtml"> 
<title>feedback List</title>
<body>
<?php
$user = $_POST['user'];
$pwd = $_POST['pwd'];
$user = $_POST['user'];
$pwd = $_POST['pwd'];
$Record_ID = $_POST['Record_ID'];
$parkID = $_POST['parkID'];
$date = $_POST['date'];
$nameOfFacilityText = $_POST['nameOfFacilityText'];
$supervisorText = $_POST['supervisorText'];
$raterText = $_POST['raterText'];
$turf = $_POST['turf'];
$turfText = $_POST['turfText'];
$sportsFields = $_POST['sportsFields'];
$sportsFieldsText = $_POST['sportsFieldsText'];
$artificialTurf = $_POST['artificialTurf'];
$artificialTurfText = $_POST['artificialTurfText'];
$bleachers = $_POST['bleachers'];
$bleachersText = $_POST['bleachersText'];
$trees = $_POST['trees'];
$treesText = $_POST['treesText'];
$treeBasins = $_POST['treeBasins'];
$treeBasinsText = $_POST['treeBasinsText'];
$shrubs = $_POST['shrubs'];
$shrubsText = $_POST['shrubsText'];
$skinnedAreas = $_POST['skinnedAreas'];
$skinnedAreasText = $_POST['skinnedAreasText'];
$groundcoverFlowers = $_POST['groundcoverFlowers'];
$groundcoverFlowersText = $_POST['groundcoverFlowersText'];
$sidewalks = $_POST['sidewalks'];
$sidewalksText = $_POST['sidewalksText'];
$pathways = $_POST['pathways'];
$pathwaysText = $_POST['pathwaysText'];
$parkingLots = $_POST['parkingLots'];
$parkingLotsText = $_POST['parkingLotsText'];
$courtSurfaces = $_POST['courtSurfaces'];
$courtSurfacesText = $_POST['courtSurfacesText'];
$tennisCourts = $_POST['tennisCourts'];
$tennisCourtsText = $_POST['tennisCourtsText'];
$basketballCourts = $_POST['basketballCourts'];
$basketballCourtsText = $_POST['basketballCourtsText'];
$reservablePicnicTables = $_POST['reservablePicnicTables'];
$reservablePicnicTablesText = $_POST['reservablePicnicTablesText'];
$reservableBbqPits = $_POST['reservableBbqPits'];
$reservableBbqPitsText = $_POST['reservableBbqPitsText'];
$nonReservablePicnicTables = $_POST['nonReservablePicnicTables'];
$nonReservablePicnicTablesText = $_POST['nonReservablePicnicTablesText'];
$nonReservableBbqPits = $_POST['nonReservableBbqPits'];
$nonReservableBbqPitsText = $_POST['nonReservableBbqPitsText'];
$gameTables = $_POST['gameTables'];
$gameTablesText = $_POST['gameTablesText'];
$drinkingFountains = $_POST['drinkingFountains'];
$drinkingFountainsText = $_POST['drinkingFountainsText'];
$benches = $_POST['benches'];
$benchesText = $_POST['benchesText'];
$totPlaygroundsSurface = $_POST['totPlaygroundsSurface'];
$totPlaygrounds = $_POST['totPlaygrounds'];
$totPlaygroundsText = $_POST['totPlaygroundsText'];
$youthPlaygroundsSurface = $_POST['youthPlaygroundsSurface'];
$youthPlaygrounds = $_POST['youthPlaygrounds'];
$youthPlaygroundsText = $_POST['youthPlaygroundsText'];
$restroomBuildings = $_POST['restroomBuildings'];
$restroomBuildingsText = $_POST['restroomBuildingsText'];
$parCourseStations = $_POST['parCourseStations'];
$parCourseStationsText = $_POST['parCourseStations'];
$trails = $_POST['trails'];
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
          sportsFields = '". ($sportsField) ."',
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