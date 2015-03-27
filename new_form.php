<?php //$form variablis is appended to $content variable. No direct display
require_once 'Admin_Page_New_ID.php';


$form = "
<!--<head>
<link rel='stylesheet' type='text/css' href='new.css'>
<style>
</style>
</head>-->
<!--<body>-->
<pre>
<div id='conditionform'>
<!--<h2>Condition Report</h2>-->
<form method='post' enctype='multipart/form-data' action='#'>
<fieldset>
<legend><b>Required Fields</b></legend>
<strong>DATE:</strong>  <input id='date_put' name='time' placeholder='MM/DD/YY'/>
 
<strong>General Medium of Sculpture:</strong>
 
<input type='checkbox' name='GMS[]' value='1'>Stone<input type='checkbox' name='GMS[]' value='2'>Metal<input type='checkbox' name='GMS[]' value='4'>Other
 
 
<strong>Specific Medium of Sculpture:</strong>
<textarea style='resize:none;'wrap='hard' name='SMS'></textarea>
 
 
<strong>General Medium of Base:</strong> 

<input type='checkbox' name='GMB[]' value='1'>Stone<input type='checkbox' name='GMB[]' value='2'>Metal<input type='checkbox' name='GMB[]' value='4'>Other


<strong>Specific Medium of Base: </strong>
<textarea style='resize:none;'wrap='hard' name='SMB'></textarea>
</fieldset>
<fieldset>
<!--<legend>Condition</legend>-->
<table style='font-size:8pt'><tr>
<td>Damage Type</td><td>Sculpture</td><td>Base</td><td>Notes</td>
</tr>
<tr>
<td>Structural Instability<input type='hidden' value='0' name='stab[]'></td>
<td><input type='checkbox' value='1' name='stab[]'></td>
<td><input type='checkbox' value='2' name='stab[]'></td>
<td><textarea style='resize:none;'name='stab_dt'></textarea></td>
</tr>
<tr>
<td>Exposed Internal Support<input type='hidden' value='0' name='ins[]'></td>
<td><input type='checkbox' value='1' name='ins[]'></td>
<td><input type='checkbox' value='2' name='ins[]'></td>
<td><textarea style='resize:none;'name='ins_dt'></textarea></td>
</tr>
<tr>
<td>Broken or Missing Parts<input type='hidden' value='0' name='broke[]'></td>
<td><input type='checkbox' value='1' name='broke[]'></td>
<td><input type='checkbox' value='2' name='broke[]'></td>
<td><textarea style='resize:none;'name='broke_dt'></textarea></td>
</tr>
<tr>
<td>Bent Crushed<input type='hidden' value='0' name='bent[]'></td>
<td><input type='checkbox' value='1' name='bent[]'></td>
<td><input type='checkbox' value='2' name='bent[]'></td>
<td><textarea style='resize:none;'name='bent_dt'></textarea></td>
</tr>
<tr>
<td>Spalling<br>(Lifted/Chipped Surface)<input type='hidden' value='0' name='spall[]'></td>
<td><input type='checkbox' value='1' name='spall[]'></td>
<td><input type='checkbox' value='2' name='spall[]'></td>
<td><textarea style='resize:none;'name='spall_dt'></textarea></td>
</tr>
<tr>
<td>Cracks/Splits/Holes<input type='hidden' value='0' name='crack[]'></td>
<td><input type='checkbox' value='1' name='crack[]'></td>
<td><input type='checkbox' value='2' name='crack[]'></td>
<td><textarea style='resize:none;'name='crack_dt'></textarea></td>
</tr>
<tr>
<td>Etched/Pitted/Eroded<br>Surface<input type='hidden' value='0' name='etch[]'></td>
<td><input type='checkbox' value='1' name='etch[]'></td>
<td><input type='checkbox' value='2' name='etch[]'></td>
<td><textarea style='resize:none;'name='etch_dt'></textarea></td>
</tr>
<tr>
<td>Corrosion/Tarnish/Rust<input type='hidden' value='0' name='corod[]'></td>
<td><input type='checkbox' value='1' name='corod[]'></td>
<td><input type='checkbox' value='2' name='corod[]'></td>
<td><textarea style='resize:none;'name='corod_dt'></textarea></td>
</tr>
<tr>
<td>Chalky/Powdery Surface<input type='hidden' value='0' name='chalk[]'></td>
<td><input type='checkbox' value='1' name='chalk[]'></td>
<td><input type='checkbox' value='2' name='chalk[]'></td>
<td><textarea style='resize:none;'name='chalk_dt'></textarea></td>
</tr>
<tr>
<td>Metallic Staining or<br>Discoloration<input type='hidden' value='0' name='stain[]'></td>
<td><input type='checkbox' value='1' name='stain[]'></td>
<td><input type='checkbox' value='2' name='stain[]'></td>
<td><textarea style='resize:none;'name='stain_dt'></textarea></td>
</tr>
<tr>
<td>Organic Growth<br>(mold/moss/lichen/plant)<input type='hidden' value='0' name='grow[]'></td>
<td><input type='checkbox' value='1' name='grow[]'></td>
<td><input type='checkbox' value='2' name='grow[]'></td>
<td><textarea style='resize:none;'name='grow_dt'></textarea></td>
</tr>
<tr>
<td>Encrustations<input type='hidden' value='0' name='crust[]'></td>
<td><input type='checkbox' value='1' name='crust[]'></td>
<td><input type='checkbox' value='2' name='crust[]'></td>
<td><textarea style='resize:none;'name='crust_dt'></textarea></td>
</tr>
<tr>
<td>Bird Guano<input type='hidden' value='0' name='guano[]'></td>
<td><input type='checkbox' value='1' name='guano[]'></td>
<td><input type='checkbox' value='2' name='guano[]'></td>
<td><textarea style='resize:none;'name='guano_dt'></textarea></td>
</tr>
<tr>
<td>Soil/Dirt/Pollution<br>Deposits<input type='hidden' value='0' name='dirt[]'></td>
<td><input type='checkbox' value='1' name='dirt[]'></td>
<td><input type='checkbox' value='2' name='dirt[]'></td>
<td><textarea style='resize:none;'name='dirt_dt'></textarea></td>
<tr>
<td>Water in Recessed Areas<input type='hidden' value='0' name='water[]'></td>
<td><input type='checkbox' value='1' name='water[]'></td>
<td><input type='checkbox' value='2' name='water[]'></td>
<td><textarea style='resize:none;'name='water_dt'></textarea></td>
</tr>
<tr>
<td>Scratches<input type='hidden' value='0' name='scrat[]'></td>
<td><input type='checkbox' value='1' name='scrat[]'></td>
<td><input type='checkbox' value='2' name='scrat[]'></td>
<td><textarea style='resize:none;'name='scrat_dt'></textarea></td>
</tr>
<tr>
<td>Graffiti<input type='hidden' value='0' name='graff[]'></td>
<td><input type='checkbox' value='1' name='graff[]'></td>
<td><input type='checkbox' value='2' name='graff[]'></td>
<td><textarea style='resize:none;'name='graff_dt'></textarea></td>
</tr>
<tr>
<td>Other<input type='hidden' value='0' name='other[]'></td>
<td><input type='checkbox' value='1' name='other[]'></td>
<td><input type='checkbox' value='2' name='other[]'></td>
<td><textarea style='resize:none;'name='other_dt'></textarea></td>
</tr>
<tr>
<td colspan=2>
<strong>Evidence Of:</strong>
<input type='hidden' name='fix[]' value='0'>
<input type='checkbox' name='fix[]' value='1'>Major Restoration
<input type='checkbox' name='fix[]' value='2'>Minor Repair
<input type='checkbox' name='fix[]' value='4'>Other
<textarea style='resize:none;'name='repair' ></textarea>

<strong>Condition Assessment:</strong>
<input type='hidden' name='cond[]' value='0'>
<input type='checkbox' name='cond[]' value='1'>Well Maintained
<input type='checkbox' name='cond[]' value='2'>Needs Treatment
<input type='checkbox' name='cond[]' value='4'>Needs Urgent Treatment
</td></fieldset><fieldset>
<td colspan=2>
<strong>Locale</strong>
General Vicinity:	 <input type='hidden' name='vicin[]' value='0'>
<input type='checkbox' name='vicin[]' value='1'>Suburban<input type='checkbox' name='vicin[]' value='2'>Rural<input type='checkbox' name='vicin[]' value='4'>Urban/Metro


Protected from Elements: <input type='hidden' value='0' name='element'><input type='checkbox' value='1' name='element'>
Protected from Public:   <input type='hidden' value='0' name='public'><input type='checkbox' value='1' name='public'>
<!--Environment Header would go here...theoretically-->
Tree Cover: 	  <input type='hidden' value='0' name='tree'><input type='checkbox' value='1' name='tree'>
Street/Roadside:  <input type='hidden' value='0' name='street'><input type='checkbox' value='1' name='street'>
Industrial:	  <input type='hidden' value='0' name='indust'><input type='checkbox' value='1' name='indust'>
Airport: 	  <input type='hidden' value='0' name='airport'><input type='checkbox' value='1' name='airport'>
Train/Subway: 	  <input type='hidden' value='0' name='train'><input type='checkbox' value='1' name='train'>
Other: 		  <input type='hidden' value='0' name='loc'><input type='checkbox' value='1' name='loc'>
<textarea style='resize:none;'name='loctxt'></textarea>
</td>
</tr></fieldset>
</table>
</div>
<input type='submit' Value='Submit' name='submit'><input type='submit' Value='Cancel' name='cancel'>
</form>";

//echo $form; This must be turned off in Omeka environment, or it crowds out the tabs.
?>
