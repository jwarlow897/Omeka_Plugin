<?php
//echo "The Display queries are here!&nbsp";
require_once 'VALIDATE_Field.php';
$dbh->beginTransaction(); //Required Fields Follow AUTH NOT INCLUDED (YET)
if (isset($_POST["GMS"]) &&
	 isset($_POST["SMS"]) &&
	 isset($_POST["GMB"]) &&
	 isset($_POST["SMB"])){	
	 //Clean for XSS and assign to variables
		//$time = $record['time'];	 	
		$reqid = $record['id'];
	 	$genScul = htmlentities(array_sum($_POST["GMS"]));
		$specScul= htmlentities($_POST["SMS"]);
		$genBase = htmlentities(array_sum($_POST["GMB"]));
		$specBase= htmlentities($_POST["SMB"]);
		$item_id = $pageid;
		//Non Required Post Fields omeka_condition_dmg		
		$stab = htmlentities(array_sum($_POST["stab"]));
		$ins = htmlentities(array_sum($_POST["ins"]));
		$broke = htmlentities(array_sum($_POST["broke"]));
		$bent = htmlentities(array_sum($_POST["bent"]));
		$spall = htmlentities(array_sum($_POST["spall"]));
		$crack = htmlentities(array_sum($_POST["crack"]));
		$etch = htmlentities(array_sum($_POST["etch"]));
		$corode = htmlentities(array_sum($_POST["corod"]));
		$chalk = htmlentities(array_sum($_POST["chalk"]));
		$stain = htmlentities(array_sum($_POST["stain"]));
		$growth = htmlentities(array_sum($_POST["grow"]));
		$crust = htmlentities(array_sum($_POST["crust"]));
		$guano = htmlentities(array_sum($_POST["guano"]));
		$dirt = htmlentities(array_sum($_POST["dirt"]));
		$water = htmlentities(array_sum($_POST["water"]));
		$scrat = htmlentities(array_sum($_POST["scrat"]));
		$graff = htmlentities(array_sum($_POST["graff"]));
		$other = htmlentities(array_sum($_POST["other"]));
		$fix = htmlentities(array_sum($_POST["fix"]));
		$cond = htmlentities(array_sum($_POST["cond"]));
		//Non required Post fields omeka_condition_dmgtxt
		$stab_dt = htmlentities($_POST["stab_dt"]);
		$ins_dt = htmlentities($_POST["ins_dt"]);
		$broke_dt = htmlentities($_POST["broke_dt"]);
		$bent_dt = htmlentities($_POST["bent_dt"]);
		$spall_dt = htmlentities($_POST["spall_dt"]);
		$crack_dt = htmlentities($_POST["crack_dt"]);
		$etch_dt = htmlentities($_POST["etch_dt"]);
		$corode_dt = htmlentities($_POST["corod_dt"]);
		$chalk_dt = htmlentities($_POST["chalk_dt"]);
		$stain_dt = htmlentities($_POST["stain_dt"]);
		$growth_dt = htmlentities($_POST["grow_dt"]);
		$crust_dt = htmlentities($_POST["crust_dt"]);
		$guano_dt = htmlentities($_POST["guano_dt"]);
		$dirt_dt = htmlentities($_POST["dirt_dt"]);
		$water_dt = htmlentities($_POST["water_dt"]);
		$scrat_dt = htmlentities($_POST["scrat_dt"]);
		$graff_dt = htmlentities($_POST["graff_dt"]);
		$other_dt = htmlentities($_POST["other_dt"]);
		$repair = htmlentities($_POST["repair"]);
		// text associated with location area
		$loctxt = htmlentities($_POST["loctxt"]);
		//Non required post fields for location
		$gener = htmlentities(array_sum($_POST["vicin"]));
		$elmnt = htmlentities($_POST["element"]);
		$public = htmlentities($_POST["public"]);
		$tree = htmlentities($_POST["tree"]);
		$street = htmlentities($_POST["street"]);
		$indust = htmlentities($_POST["indust"]);
		$airport = htmlentities($_POST["airport"]);
		$train = htmlentities($_POST["train"]);
		$other_l = htmlentities($_POST["loc"]);
	//Validation Checkup
	//if(validateDate($_POST["time"], 'm/d/y')) {$fail = "";}	else {$fail= "Invalid Date";}
	
	//3checkboxes
	$fail = check3($genScul);
	$fail .= check3($genBase);
	//DMG checks, two box
	$fail .= check2($stab);
	$fail .= check2($ins);
	$fail .= check2($broke);
	$fail .= check2($bent);
	$fail .= check2($spall);
	$fail .= check2($crack);
	$fail .= check2($etch);
	$fail .= check2($corode);
	$fail .= check2($chalk);
	$fail .= check2($stain);
	$fail .= check2($growth);
	$fail .= check2($crust);
	$fail .= check2($guano);
	$fail .= check2($dirt);
	$fail .= check2($water);
	$fail .= check2($scrat);
	$fail .= check2($graff);
	$fail .= check2($other);
	//DMg checks 3 box
	$fail .= check3($fix);
	$fail .= check3($cond);
	//Loc checks 3 box
	$fail .= check3($gener);
	//Loc checks 1box
	$fail .= check1($elmnt);
	$fail .= check1($public);
	$fail .= check1($tree);
	$fail .= check1($street);
	$fail .= check1($indust);
	$fail .= check1($airport);
	$fail .= check1($train);
	$fail .= check1($other_l);

	//Now, begin insert into REQ table
		
		$sql = "Update omeka_condition_req Set S_Chk=:SGen,S_txt=:SSpec,B_Chk=:BGen,B_Txt=:BSpec
		WHERE item_id=:item_id && id=:reqid";
		$stmnt =  $dbh->prepare($sql);
		$stmnt->execute(array(
		':item_id'=>$item_id,
		//':time'=>$time, 
		':reqid'=>$reqid,
		':SGen'=>$genScul,
		':SSpec'=>$specScul,
		':BGen' =>$genBase,
		':BSpec' =>$specBase));
		if($fail || isset($_POST['cancel'])) $dbh->rollback(); //isset($_POST['cancel']) ||
		else $dbh->commit();
		//Insert into DMG table
	$dbh->beginTransaction();
	
		$sql = "UPDATE omeka_condition_dmg SET stable=:stable,inside=:inside,broken=:broke,bent=:bent,spall=:spall,crack=:crack,
		etch=:etch,corode=:corode,chalk=:chalk,stain=:stain,growth=:growth,crust=:crust,guano=:guano,dirt=:dirt,water=:water,
		scrat=:scrat,graff=:graff,other=:other,fix=:fix,cond=:cond
		WHERE item_id=:item_id && req_id=:reqid";
		$stmnt =  $dbh->prepare($sql);
		$stmnt->execute(array(
		':item_id'=>$item_id,
		//':time'=>$time,
		':reqid'=>$reqid,
		':stable'=>$stab,
		':inside'=>$ins,
		':broke'=>$broke,
		':bent'=>$bent,
		':spall'=>$spall,
		':crack'=>$crack,
		':etch'=>$etch,
		':corode'=>$corode,
		':chalk'=>$chalk,
		':stain'=>$stain,
		':growth'=>$growth,
		':crust'=>$crust,
		':guano'=>$guano,
		':dirt'=>$dirt,
		':water'=>$water,
		':scrat'=>$scrat,
		':graff'=>$graff,
		':other'=>$other,
		':fix'=>$fix,
		':cond'=>$cond));
		if($fail || isset($_POST['cancel'])) $dbh->rollback(); //isset($_POST['cancel']) ||
		else $dbh->commit();
	$dbh->beginTransaction();
		
		$sql = "Update omeka_condition_dmgtxt SET stable=:stable,inside=:inside,broken=:broke,bent=:bent,spall=:spall,crack=:crack,
		etch=:etch,corode=:corode,chalk=:chalk,stain=:stain,growth=:growth,crust=:crust,guano=:guano,dirt=:dirt,water=:water,
		scrat=:scrat,graff=:graff,other=:other,repair=:repair,loctxt=:loctxt
		WHERE item_id=:item_id && req_id=:reqid";
		$stmnt =  $dbh->prepare($sql);
		$stmnt->execute(array(
		':item_id'=>$item_id,
		//':time'=>$time,
		':reqid'=>$reqid,
		':stable'=>$stab_dt,
		':inside'=>$ins_dt,
		':broke'=>$broke_dt,
		':bent'=>$bent_dt,
		':spall'=>$spall_dt,
		':crack'=>$crack_dt,
		':etch'=>$etch_dt,
		':corode'=>$corode_dt,
		':chalk'=>$chalk_dt,
		':stain'=>$stain_dt,
		':growth'=>$growth_dt,
		':crust'=>$crust_dt,
		':guano'=>$guano_dt,
		':dirt'=>$dirt_dt,
		':water'=>$water_dt,
		':scrat'=>$scrat_dt,
		':graff'=>$graff_dt,
		':other'=>$other_dt,
		':repair'=>$repair,
		':loctxt'=>$loctxt));
		if($fail || isset($_POST['cancel'])) $dbh->rollback(); //isset($_POST['cancel']) 
		else $dbh->commit();
	$dbh->beginTransaction();
		
		$sql = "Update omeka_condition_loc SET gener=:gener,elmnt=:elmnt,public=:public,tree=:tree,
		street=:street,indust=:indust,airport=:airport,train=:train,other=:other
		WHERE item_id=:item_id && req_id=:reqid";
		$stmnt =  $dbh->prepare($sql);
		$stmnt->execute(array(
		':item_id'=>$item_id,
		//':time'=>$time,
		':reqid'=>$reqid,
		':gener'=>$gener,
		':elmnt'=>$elmnt,
		':public'=>$public,
		':tree'=>$tree,
		':street'=>$street,
		':indust'=>$indust,
		':airport'=>$airport,
		':train'=>$train,
		':other'=>$other_l));
		if($fail || isset($_POST['cancel'])) $dbh->rollback(); //isset($_POST['cancel']) ||
		else $dbh->commit();
	} 

?>
