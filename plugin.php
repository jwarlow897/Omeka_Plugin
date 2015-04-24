<?php //plugin main file

add_plugin_hook('public_items_show', 'hookviewforms');
add_filter('admin_items_form_tabs', 'filterAdminItemsFormTabs');

function filterAdminItemsFormTabs($tabs, $item)
{
require_once 'login.php';
	
	$dbh = new PDO('mysql:host=localhost;dbname=omeka', $db_username, $db_password);
	$dbh->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	$pageid = metadata('item', 'id');
	$sth = $dbh->prepare("SELECT req.time, req.id FROM omeka_condition_req as req WHERE req.item_id = :pageid Order By req.time Desc");
	$sth->execute(array(':pageid'=>$pageid));
	$rowassoc = $sth->fetchAll(PDO::FETCH_ASSOC);
	

  $content = "<head><link rel='stylesheet' type='text/css' href='omeka_css.css'></head><body>";
   $content.= "<div>";
   $content.= "<a href=".absolute_url('items/edit/'.$pageid.'?&new#condition-metadata').">New</a>";
   if (isset($_GET['new']))
   {
   	$content.= "<a href=".absolute_url('items/edit/'.$pageid.'#condition-metadata').">Close</a>";
   	require_once "new_form.php";
   	$content .= $form;
   } 
   if (!$rowassoc)
   {
   	$content .=  "<br>No condition Reports exist for this page. Click 'new' to create one.";
   	
   }
   	 else 
   	 { require_once "delete_form2.php";
   	 	
   	 	foreach($rowassoc as $count => $record){ 
   	 		$content .= "<div id='dates'>";
				$content .= "<a href=".absolute_url('items/edit/'.$pageid.'?'.$record['id'].'#condition-metadata').">";
				$content .= date('m/d/y',$record['time']);
				$content .= "</a>&nbsp&nbsp<a href=".absolute_url('items/edit/'.$pageid.'?'.'delete='.$record['id'].'#condition-metadata').">Delete</a>";
				if (isset($_GET[$record['id']]))
				{
				$content.= "&nbsp&nbsp<a href=".absolute_url('items/edit/'.$pageid.'#condition-metadata').">Close</a>";
				require_once "update_form.php";	
				$content.= $disp;
    			 }
   	 	}
   	 }
   $content.= "</div>";
   //Display content here
       $tabs['Condition'] = $content;	
			return $tabs;
}

function hookviewforms($item) 
{
	require_once 'login.php';
	$dbh = new PDO('mysql:host=localhost;dbname=omeka', $db_username, $db_password);
	$dbh->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	$pageid = metadata('item', 'id');
	$sth = $dbh->prepare("SELECT req.time, req.id FROM omeka_condition_req as req WHERE req.item_id = :pageid Order By req.time Desc");
	$sth->execute(array(':pageid'=>$pageid));
	$rowassoc = $sth->fetchAll(PDO::FETCH_ASSOC);
	
	//$content = $pageid;
	$content = "<head><link rel='stylesheet' type='text/css' href='omeka_css.css'></head><body>";
   $content.= "<div><h1>Condition Reports</h1>";
   if (!$rowassoc)
   {
   	$content .=  "<br>No condition Reports exist for this page. Click 'new' to create one.";
   	
   }
   	 else 
   	 {
   	 	foreach($rowassoc as $count => $record)
   	 	{ 
   	 		$content .= "<div id='dates'>";
				$content .= "<a href=".absolute_url('items/show/'.$pageid.'?&'.$record['id']).">";
				$content .= date('m/d/y',$record['time']);
				$content .= "</a>&nbsp";
				if (isset($_GET[$record['id']]))
				{
				$content.= "<a href=".absolute_url('items/show/'.$pageid).">Close</a>";
				require_once "view_form.php";	
				$content.= $disp;
    			}
   	 	}
   	 }
   $content.= "</div>";
   echo $content;
}

?>
