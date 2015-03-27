<?php
//Display Stored Array

	$sth = $dbh->prepare("SELECT * FROM omeka_condition_req Where item_id = :pageid && id = :id");
	$sth->execute(array(':pageid'=>$pageid, ':id'=>$record['id']));
	$result_r = $sth->fetch(PDO::FETCH_NUM);
	
	$sth = $dbh->prepare("SELECT * FROM omeka_condition_dmg Where item_id = :pageid && req_id = :req_id");
	$sth->execute(array(':pageid'=>$pageid, ':req_id'=>$record['id']));
	$result_d = $sth->fetch(PDO::FETCH_NUM);
	
	$sth = $dbh->prepare("SELECT * FROM omeka_condition_dmgtxt Where item_id = :pageid && req_id = :req_id");
	$sth->execute(array(':pageid'=>$pageid, ':req_id'=>$record['id']));
	$result_dt = $sth->fetch(PDO::FETCH_NUM);
	
	$sth = $dbh->prepare("SELECT * FROM omeka_condition_loc Where item_id = :pageid && req_id = :req_id");
	$sth->execute(array(':pageid'=>$pageid, ':req_id'=>$record['id']));
	$result_l = $sth->fetch(PDO::FETCH_NUM);
?>
