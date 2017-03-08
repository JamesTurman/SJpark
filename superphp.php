<?php
		$servername = "localhost";
		$username = "username";
		$password = "password";
		$dbname = "myDB";
		
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn -> connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 

		 $sql1 = "INSERT INTO Park_Review (Record_ID,ParkID,date,nameOfFacilityText,supervisorText,raterText,turf,turfText,sportsFields,sportsFieldsText,
		 artificialTurf,artificialTurfText,bleachers,bleachersText,trees,treesText,treeBasins,treeBasinsText,shrubs,
		shrubsText,skinnedAreas,skinnedAreasText,groundcoverFlowers,groundcoverFlowersText,sidewalks,sidewalksText,pathways,
		pathwaysText,parkingLots,parkingLotsText,courtSurfaces,courtSurfacesText,tennisCourts,tennisCourtsText,basketballCourts,
		basketballCourtsText,reservablePicnicTables,reservablePicnicTablesText,reservableBbqPits,reservableBbqPitsText,nonReservablePicnicTables,
		nonReservablePicnicTablesText,nonReservableBbqPits,nonReservableBbqPitsText,gameTables,gameTablesText,drinkingFountains,drinkingFountainsText,
		benches,benchesText,totPlaygroundsSurface,totPlaygrounds,totPlaygroundsText,youthPlaygroundsSurface,youthPlaygrounds,youthPlaygroundsText,restroomBuildings,
		restroomBuildingsText,parCourseStations,parCourseStationsText,trails,trailsText)
		VALUES ('". $_POST['Record_ID'] ."','". $_POST['ParkID'] ."','".$_POST['date'] ."','".$_POST['nameOfFacilityText'] ."','".$_POST['supervisorText'] ."','". $_POST['raterText'] ."',
		 '". $_POST['turfText'] ."','". $_POST['sportsFields'] ."', '". $_POST['sportsFieldsText'] ."','". $_POST['artificialTurf'] ."','". $_POST['artificialTurfText'] ."',
		 '". $_POST['bleachers'] ."','". $_POST['bleachersText'] ."','". $_POST['trees'] ."','". $_POST['treesText'] ."','". $_POST['treeBasins'] ."',
		 '". $_POST['treeBasinsText'] ."','". $_POST['shrubs'] ."','". $_POST['shrubsText'] ."','". $_POST['skinnedAreas'] ."','". $_POST['skinnedAreasText'] ."',
		 '". $_POST['groundcoverFlowers'] ."','". $_POST['groundcoverFlowersText'] ."','". $_POST['sidewalks'] ."','". $_POST['sidewalksText'] ."','". $_POST['pathways'] ."',
		 '". $_POST['pathwaysText'] ."','". $_POST['parkingLots'] ."','". $_POST['parkingLotsText'] ."','". $_POST['courtSurfaces'] ."','". $_POST['courtSurfacesText'] ."',
		 '". $_POST['tennisCourts'] ."','". $_POST['tennisCourtsText'] ."','". $_POST['basketballCourts'] ."','". $_POST['basketballCourtsText'] ."','". $_POST['reservablePicnicTables'] ."',
		 '". $_POST['reservablePicnicTablesText'] ."','". $_POST['reservableBbqPits'] ."','". $_POST['reservableBbqPitsText'] ."','". $_POST['nonReservablePicnicTables'] ."',
		 '". $_POST['nonReservablePicnicTablesText'] ."','". $_POST['nonReservableBbqPits'] ."','". $_POST['nonReservableBbqPitsText'] ."','". $_POST['gameTables'] ."',
		 '". $_POST['gameTablesText'] ."','". $_POST['drinkingFountains'] ."','". $_POST['drinkingFountainsText'] ."','". $_POST['benches'] ."','". $_POST['benchesText'] ."',
		 '". $_POST['totPlaygroundsSurface'] ."','". $_POST['totPlaygrounds'] ."','". $_POST['totPlaygroundsText'] ."','". $_POST['youthPlaygroundsSurface'] ."','". $_POST['youthPlaygrounds'] ."',
		 '". $_POST['youthPlaygroundsText'] ."','". $_POST['restroomBuildings'] ."','". $_POST['restroomBuildingsText'] ."','". $_POST['parCourseStations'] ."','". $_POST['parCourseStationsText'] ."',
		 '". $_POST['trails'] ."','". $_POST['trailsText'] ."',)";

		mysqli_query($conn,$sql1) or die(print_r(mysqli_error()));

		echo "<script language=javascript>window.location = 'thanks.html';</script>";

		mysqli_close($conn);
	?>