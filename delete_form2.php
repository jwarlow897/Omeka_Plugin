<?php //Delete Form
if(isset($_GET['delete'])) {
$reqid = htmlentities($_GET['delete']);
$item_id = $pageid;

//dmg
$dbh->beginTransaction();
//$reqid = htmlentities($record['id']);
$sql = "
Delete From omeka_condition_dmg 
WHERE item_id=:item_id && req_id=:reqid
";
$stmnt =  $dbh->prepare($sql);
$stmnt->execute(array(
':item_id'=>$item_id,
':reqid'=>$reqid));
$dbh->commit();

//dmg_txt
$dbh->beginTransaction();
//$reqid = htmlentities($record['id']);
$sql = "
Delete From omeka_condition_dmgtxt
WHERE item_id=:item_id && req_id=:reqid
";
$stmnt =  $dbh->prepare($sql);
$stmnt->execute(array(
':item_id'=>$item_id,
':reqid'=>$reqid));
$dbh->commit();

//loc
$dbh->beginTransaction();
//$reqid = htmlentities($record['id']);
$sql = "
Delete From omeka_condition_loc
WHERE item_id=:item_id && req_id=:reqid
";
$stmnt =  $dbh->prepare($sql);
$stmnt->execute(array(
':item_id'=>$item_id,
':reqid'=>$reqid));
$dbh->commit();


//req THIS MUST BE DELETED LAST TO AVOID FK CONSTRAINT FAILURE
$dbh->beginTransaction();
$sql = "
Delete From omeka_condition_req 
WHERE item_id=:item_id && id=:reqid
";
$stmnt =  $dbh->prepare($sql);
$stmnt->execute(array(
':item_id'=>$item_id,
':reqid'=>$reqid));
$dbh->commit();

}
//This section should re-count the query for the page
$sth = $dbh->prepare("SELECT req.time, req.id FROM omeka_condition_req as req WHERE req.item_id = :pageid Order By req.time Desc");
$sth->execute(array(':pageid'=>$pageid));
$rowassoc = $sth->fetchAll(PDO::FETCH_ASSOC);
?>
