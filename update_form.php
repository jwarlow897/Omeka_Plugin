<?php //display and edit table
require_once "Display_Join.php";
require_once "Admin_Page_Update_ID.php";

if(isset($_POST['confirm'])) $disp = "&nbsp Changes Submitted. Click Close.";
else{
$disp = "
<!--<head>
<link rel='stylesheet' type='text/css' href='new.css'>
<style>
</style>
</head>-->
<!--<body>-->
<pre>
<div id='conditionform'>
<form method='post' enctype='multipart/form-data' action='#'>
<fieldset>
<legend>DATE:  ".date("m/d/y", $record['time'])."</legend>";

$disp .= "<br><strong>General Medium of Sculpture:</strong><br><br>";
if($result_r[3]==1 || $result_r[3]==3 || $result_r[3]==5 || $result_r[3]==7)
{
$disp .= "<input type='checkbox' name='GMS[]' value='1' checked='checked'>Stone";} else {
$disp .= "<input type='checkbox' name='GMS[]' value='1' >Stone";
}if($result_r[3]==2 || $result_r[3]==3 || $result_r[3]==6 || $result_r[3]==7) 
{
$disp .= "<input type='checkbox' name='GMS[]' value='2' checked='checked'>Metal";} else {
$disp .= "<input type='checkbox' name='GMS[]' value='2' >Metal";
}
if($result_r[3]==4 || $result_r[3]==5 || $result_r[3]==6 || $result_r[3]==7)
{
$disp .= "<input type='checkbox' name='GMS[]' value='4' checked='checked'>Other";} else {
$disp .= "<input type='checkbox' name='GMS[]' value='4' >Other";
}

$disp .= "<br><br><strong>Specific Medium of Sculpture:</strong><br><br>";
$disp .= "<br><textarea style='resize:none;'wrap='hard' name='SMS' >".$result_r[4]."</textarea>";

$disp .= "<br><br><strong>General Medium of Base:</strong><br><br>";
if($result_r[5]==1 || $result_r[5]==3 || $result_r[5]==5 || $result_r[5]==7)
{
$disp .= "<input type='checkbox' name='GMB[]' value='1' checked='checked'>Stone";} else {
$disp .= "<input type='checkbox' name='GMB[]' value='1' >Stone";
}if($result_r[5]==2 || $result_r[5]==3 || $result_r[5]==6 || $result_r[5]==7) 
{
$disp .= "<input type='checkbox' name='GMB[]' value='2' checked='checked'>Metal";} else {
$disp .= "<input type='checkbox' name='GMB[]' value='2' >Metal";
}
if($result_r[5]==4 || $result_r[5]==5 || $result_r[5]==6 || $result_r[5]==7)
{
$disp .= "<input type='checkbox' name='GMB[]' value='4' checked='checked'>Other";} else {
$disp .= "<input type='checkbox' name='GMB[]' value='4' >Other";
}

$disp .= "<br><br><strong>Specific Medium of Base: </strong><br><br>";
$disp .= "<textarea style='resize:none;width:200px'wrap='hard' name='SMB'>".$result_r[6]."</textarea>";

$disp .= "</fieldset><fieldset>
<table style='font-size:8pt;'><tr>
<td>Damage Type</td><td>Sculpture</td><td>Base</td><td>Notes</td>
</tr>";

//Damages Section
$disp .="<tr><td>Structural Instability<input type='hidden' value='0' name='stab[]'></td>";
if($result_d[3]==1 || $result_d[3]==3){
$disp .="<td><input type='checkbox' value='1' name='stab[]' checked='checked'></td>";
}else{
$disp .="<td><input type='checkbox' value='1' name='stab[]'></td>";
}
if($result_d[3]==2 || $result_d[3]==3){
$disp .="<td><input type='checkbox' value='2' name='stab[]' checked='checked'></td>";
}else{
$disp .="<td><input type='checkbox' value='2' name='stab[]'></td>";
}
$disp .="<td><textarea style='resize:none;'name='stab_dt'>".$result_dt[3]."</textarea></td></tr>";

$disp .="<tr><td>Exposed Internal Support<input type='hidden' value='0' name='ins[]'></td>";
if($result_d[4]==1 || $result_d[4]==3){
$disp .= "<td><input type='checkbox' value='1' name='ins[]' checked='checked'></td>";
}else{
$disp .="<td><input type='checkbox' value='1' name='ins[]'></td>";
}
if($result_d[4]==2 || $result_d[4]==3){
$disp .="<td><input type='checkbox' value='2' name='ins[]' checked='checked'></td>";
}else{
$disp .="<td><input type='checkbox' value='2' name='ins[]'></td>";
}
$disp .="<td><textarea style='resize:none;'name='ins_dt'>".$result_dt[4]."</textarea></td></tr>";

$disp .="<tr><td>Broken or Missing Parts<input type='hidden' value='0' name='broke[]'></td>";
if($result_d[5]==1 || $result_d[5]==3){
$disp .="<td><input type='checkbox' value='1' name='broke[]' checked='checked'></td>";
}else{
$disp .="<td><input type='checkbox' value='1' name='broke[]'></td>";
}
if($result_d[5]==2 || $result_d[5]==3){
$disp .="<td><input type='checkbox' value='2' name='broke[]' checked='checked'></td>";
}else{
$disp .="<td><input type='checkbox' value='2' name='broke[]'></td>";
}
$disp .="<td><textarea style='resize:none;'name='broke_dt'>".$result_dt[5]."</textarea></td></tr>";

$disp .="<tr><td>Bent Crushed<input type='hidden' value='0' name='bent[]'></td>";
if($result_d[6]==1 || $result_d[6]==3){
$disp .="<td><input type='checkbox' value='1' name='bent[]' checked='checked'></td>";
}else{
$disp .="<td><input type='checkbox' value='1' name='bent[]'></td>";
}
if($result_d[6]==2 || $result_d[6]==3){
$disp .="<td><input type='checkbox' value='2' name='bent[]' checked='checked'></td>";
}else{
$disp .="<td><input type='checkbox' value='2' name='bent[]'></td>";
}
$disp .="<td><textarea style='resize:none;'name='bent_dt'>".$result_dt[6]."</textarea></td></tr>";

$disp .="<tr><td>Spalling<br>(Lifted/Chipped Surface)<input type='hidden' value='0' name='spall[]'></td>";
if($result_d[7]==1 || $result_d[7]==3){
$disp .="<td><input type='checkbox' value='1' name='spall[]' checked='checked'></td>";
}else{
$disp .="<td><input type='checkbox' value='1' name='spall[]'></td>";
}
if($result_d[7]==2 || $result_d[7]==3){
$disp .="<td><input type='checkbox' value='2' name='spall[]' checked='checked'></td>";
}else{
$disp .="<td><input type='checkbox' value='2' name='spall[]'></td>";
}
$disp .="<td><textarea style='resize:none;'name='spall_dt'>".$result_dt[7]."</textarea></td></tr>";

$disp .="<tr><td>Cracks/Splits/Holes<input type='hidden' value='0' name='crack[]'></td>";
if($result_d[8]==1 || $result_d[8]==3){
$disp .="<td><input type='checkbox' value='1' name='crack[]' checked='checked'></td>";
}else{
$disp .="<td><input type='checkbox' value='1' name='crack[]'></td>";
}
if($result_d[8]==2 || $result_d[8]==3){
$disp .="<td><input type='checkbox' value='2' name='crack[]' checked='checked'></td>";
}else{
$disp .="<td><input type='checkbox' value='2' name='crack[]'></td>";
}
$disp .="<td><textarea style='resize:none;'name='crack_dt'>".$result_dt[8]."</textarea></td></tr>";

$disp .="<td>Etched/Pitted/Eroded<br>Surface<input type='hidden' value='0' name='etch[]'></td>";
if($result_d[9]==1 || $result_d[9]==3){
$disp .="<td><input type='checkbox' value='1' name='etch[]' checked='checked'></td>";
}else{
$disp .="<td><input type='checkbox' value='1' name='etch[]'></td>";
}	
if($result_d[9]==2 || $result_d[9]==3){
$disp .="<td><input type='checkbox' value='2' name='etch[]' checked='checked'></td>";
}else{
$disp .="<td><input type='checkbox' value='2' name='etch[]'></td>";
}
$disp .="<td><textarea style='resize:none;'name='etch_dt'>".$result_dt[9]."</textarea></td></tr>";	

$disp .="<tr><td>Corrosion/Tarnish/Rust<input type='hidden' value='0' name='corod[]'></td>";
if($result_d[10]==1 || $result_d[10]==3){
$disp .="<td><input type='checkbox' value='1' name='corod[]' checked='checked'></td>";
}else {
$disp .="<td><input type='checkbox' value='1' name='corod[]'></td>";	
}
if($result_d[10]==2 || $result_d[10]==3){
$disp .="<td><input type='checkbox' value='2' name='corod[]' checked='checked'></td>";
}else {
$disp .="<td><input type='checkbox' value='2' name='corod[]'></td>";	
}
$disp .="<td><textarea style='resize:none;'name='corod_dt'>".$result_dt[10]."</textarea></td></tr>";

$disp .="<tr><td>Chalky/Powdery Surface<input type='hidden' value='0' name='chalk[]'></td>";
if($result_d[11]==1 || $result_d[11]==3){
$disp .="<td><input type='checkbox' value='1' name='chalk[]' checked='checked'></td>";
}else {
$disp .="<td><input type='checkbox' value='1' name='chalk[]'></td>";
}
if($result_d[11]==2 || $result_d[11]==3){
$disp .="<td><input type='checkbox' value='2' name='chalk[]' checked='checked'></td>";
}else {
$disp .="<td><input type='checkbox' value='2' name='chalk[]'></td>";
}
$disp .="<td><textarea style='resize:none;'name='chalk_dt'>".$result_dt[11]."</textarea></td></tr>";

$disp .="<tr><td>Metallic Staining or<br>Discoloration<input type='hidden' value='0' name='stain[]'></td>";
if($result_d[12]==1 || $result_d[12]==3){
$disp .="<td><input type='checkbox' value='1' name='stain[]' checked='checked'></td>";
}else {
$disp .="<td><input type='checkbox' value='1' name='stain[]'></td>";
}
if($result_d[12]==2 || $result_d[12]==3){
$disp .="<td><input type='checkbox' value='2' name='stain[]' checked='checked'></td>";
}else {
$disp .="<td><input type='checkbox' value='2' name='stain[]'></td>";
}
$disp .="<td><textarea style='resize:none;'name='stain_dt'>".$result_dt[12]."</textarea></td></tr>";

$disp .="<tr><td>Organic Growth<br>(mold/moss/lichen/plant)<input type='hidden' value='0' name='grow[]'></td>";
if($result_d[13]==1 || $result_d[13]==3){
$disp .="<td><input type='checkbox' value='1' name='grow[]' checked='checked'></td>";
}else {
$disp .="<td><input type='checkbox' value='1' name='grow[]'></td>";
}
if($result_d[13]==2 || $result_d[13]==3){
$disp .="<td><input type='checkbox' value='2' name='grow[]' checked='checked'></td>";
}else {
$disp .="<td><input type='checkbox' value='2' name='grow[]'></td>";
}
$disp .="<td><textarea style='resize:none;'name='grow_dt'>".$result_dt[13]."</textarea></td></tr>";


$disp .="<tr><td>Encrustations<input type='hidden' value='0' name='crust[]'></td>";
if($result_d[14]==1 || $result_d[14]==3){
$disp .="<td><input type='checkbox' value='1' name='crust[]' checked='checked'></td>";
}else {
$disp .="<td><input type='checkbox' value='1' name='crust[]'></td>";
}
if($result_d[14]==2 || $result_d[14]==3){
$disp .="<td><input type='checkbox' value='2' name='crust[]' checked='checked'></td>";
}else {
$disp .="<td><input type='checkbox' value='2' name='crust[]'></td>";
}
$disp .="<td><textarea style='resize:none;'name='crust_dt'>".$result_dt[14]."</textarea></td></tr>";

$disp .="<tr><td>Bird Guano<input type='hidden' value='0' name='guano[]'></td>";
if($result_d[15]==1 || $result_d[15]==3){
$disp .="<td><input type='checkbox' value='1' name='guano[]' checked='checked'></td>";
}else {
$disp .="<td><input type='checkbox' value='1' name='guano[]'></td>";
}
if($result_d[15]==2 || $result_d[15]==3){
$disp .="<td><input type='checkbox' value='2' name='guano[]' checked='checked'></td>";
}else {
$disp .="<td><input type='checkbox' value='2' name='guano[]'></td>";
}
$disp .="<td><textarea style='resize:none;'name='guano_dt'>".$result_dt[15]."</textarea></td></tr>";

$disp .="<tr><td>Soil/Dirt/Pollution<br>Deposits<input type='hidden' value='0' name='dirt[]'></td>";
if($result_d[16]==1 || $result_d[16]==3){
$disp .="<td><input type='checkbox' value='1' name='dirt[]' checked='checked'></td>";
}else {
$disp .="<td><input type='checkbox' value='1' name='dirt[]' ></td>";
}
if($result_d[16]==2 || $result_d[16]==3){
$disp .="<td><input type='checkbox' value='2' name='dirt[]' checked='checked'></td>";
}else {
$disp .="<td><input type='checkbox' value='2' name='dirt[]'></td>";
}
$disp .="<td><textarea style='resize:none;'name='dirt_dt'>".$result_dt[16]."</textarea></td></tr>";

$disp .="<tr><td>Water in Recessed Areas<input type='hidden' value='0' name='water[]'></td>";
if($result_d[17]==1 || $result_d[17]==3){
$disp .="<td><input type='checkbox' value='1' name='water[]' checked='checked'></td>";
}else {
$disp .="<td><input type='checkbox' value='1' name='water[]'></td>";
}
if($result_d[17]==2 || $result_d[17]==3){
$disp .="<td><input type='checkbox' value='2' name='water[]' checked='checked'></td>";
}else {
$disp .="<td><input type='checkbox' value='2' name='water[]'></td>";
}
$disp .="<td><textarea style='resize:none;'name='water_dt'>".$result_dt[17]."</textarea></td></tr>";

$disp .="<tr><td>Scratches<input type='hidden' value='0' name='scrat[]'></td>";
if($result_d[18]==1 || $result_d[18]==3){
$disp .="<td><input type='checkbox' value='1' name='scrat[]' checked='checked'></td>";
}else {
$disp .="<td><input type='checkbox' value='1' name='scrat[]'></td>";
}
if($result_d[18]==2 || $result_d[18]==3){
$disp .="<td><input type='checkbox' value='2' name='scrat[]' checked='checked'></td>";
}else {
$disp .="<td><input type='checkbox' value='2' name='scrat[]'></td>";
}
$disp .="<td><textarea style='resize:none;'name='scrat_dt'>".$result_dt[18]."</textarea></td></tr>";

$disp .="<tr><td>Graffiti<input type='hidden' value='0' name='graff[]'></td>";
if($result_d[19]==1 || $result_d[19]==3){
$disp .="<td><input type='checkbox' value='1' name='graff[]' checked='checked'></td>";
}else {
$disp .="<td><input type='checkbox' value='1' name='graff[]'></td>";
}
if($result_d[19]==2 || $result_d[19]==3){
$disp .="<td><input type='checkbox' value='2' name='graff[]' checked='checked'></td>";
}else {
$disp .="<td><input type='checkbox' value='2' name='graff[]'></td>";
}
$disp .="<td><textarea style='resize:none;'name='graff_dt'>".$result_dt[19]."</textarea></td></tr>";

$disp .="<tr><td>Other<input type='hidden' value='0' name='other[]'></td>";
if($result_d[20]==1 || $result_d[20]==3){
$disp .="<td><input type='checkbox' value='1' name='other[]' checked='checked'></td>";
}else {
$disp .="<td><input type='checkbox' value='1' name='other[]'></td>";
}
if($result_d[20]==2 || $result_d[20]==3){
$disp .="<td><input type='checkbox' value='2' name='other[]' checked='checked'></td>";
}else {
$disp .="<td><input type='checkbox' value='2' name='other[]'></td>";
}
$disp .="<td><textarea style='resize:none;'name='other_dt'>".$result_dt[20]."</textarea></td></tr>";

$disp .="<tr><td colspan=2>
<strong>Evidence Of:</strong><input type='hidden' name='fix[]' value='0'><br>";

if($result_d[21]==1 || $result_d[21]==3 || $result_d[21]==5 || $result_d[21]==7)
{
$disp .="<input type='checkbox' name='fix[]' value='1' checked='checked'>Major Restoration<br>";
}else{
$disp .="<input type='checkbox' name='fix[]' value='1'>Major Restoration<br>";
}
if($result_d[21]==2 || $result_d[21]==3 || $result_d[21]==6 || $result_d[21]==7) 
{
$disp .="<input type='checkbox' name='fix[]' value='2' checked='checked'>Minor Repair<br>";
}else{
$disp .="<input type='checkbox' name='fix[]' value='2'>Minor Repair<br>";
}
if($result_d[21]==4 || $result_d[21]==5 || $result_d[21]==6 || $result_d[21]==7)
{
$disp .="<input type='checkbox' name='fix[]' value='4' checked='checked'>Other<br>";
}else{
$disp .="<input type='checkbox' name='fix[]' value='4'>Other<br>";
}
$disp .="<textarea style='resize:none;'name='repair' >".$result_dt[21]."</textarea>";

$disp .="<br><strong>Condition Assessment:</strong><input type='hidden' name='cond[]' value='0'><br>";
if($result_d[22]==1 || $result_d[22]==3 || $result_d[22]==5 || $result_d[22]==7)
{
$disp .="<input type='checkbox' name='cond[]' value='1' checked='checked'>Well Maintained<br>";
}else{
$disp .="<input type='checkbox' name='cond[]' value='1'>Well Maintained<br>";
}
if($result_d[22]==2 || $result_d[22]==3 || $result_d[22]==6 || $result_d[22]==7) 
{
$disp .="<input type='checkbox' name='cond[]' value='2' checked='checked'>Needs Treatment<br>";
}else{
$disp .="<input type='checkbox' name='cond[]' value='2'>Needs Treatment<br>";
}
if($result_d[22]==4 || $result_d[22]==5 || $result_d[22]==6 || $result_d[22]==7)
{
$disp .="<input type='checkbox' name='cond[]' value='4' checked='checked'>Needs Urgent Treatment<br>";
}else{
$disp .="<input type='checkbox' name='cond[]' value='4'>Needs Urgent Treatment<br>";
}

$disp .="</td></fieldset><fieldset><td colspan=2><strong>Locale</strong><br>General Vicinity:<input type='hidden' name='vicin[]' value='0'><br>";

if($result_l[3]==1 || $result_l[3]==3 || $result_l[3]==5 || $result_l[3]==7)
{
$disp .="<input type='checkbox' name='vicin[]' value='1' checked='checked'>Suburban";
}else{
$disp .="<input type='checkbox' name='vicin[]' value='1'>Suburban";
}
if($result_l[3]==2 || $result_l[3]==3 || $result_l[3]==6 || $result_l[3]==7) 
{
$disp .="<input type='checkbox' name='vicin[]' value='2' checked='checked'>Rural";
}else{
$disp .="<input type='checkbox' name='vicin[]' value='2'>Rural";
}
if($result_l[3]==4 || $result_l[3]==5 || $result_l[3]==6 || $result_l[3]==7)
{
$disp .="<input type='checkbox' name='vicin[]' value='4' checked='checked'>Urban/Metro";
}else{
$disp .="<input type='checkbox' name='vicin[]' value='4'>Urban/Metro";
}$disp .="<br>";
if($result_l[4]==1) {
$disp.="Protected from Elements: <input type='hidden' value='0' name='element'><input type='checkbox' value='1' name='element' checked='checked'><br>";
}else{
$disp.="Protected from Elements: <input type='hidden' value='0' name='element'><input type='checkbox' value='1' name='element'><br>";
}
if($result_l[5]==1) {
$disp.="Protected from Public:   <input type='hidden' value='0' name='public'><input type='checkbox' value='1' name='public' checked='checked'><br>";
}else{
$disp.="Protected from Public:   <input type='hidden' value='0' name='public'><input type='checkbox' value='1' name='public'>";
}
if($result_l[6]==1) {
$disp.="Tree Cover: 	  <input type='hidden' value='0' name='tree'><input type='checkbox' value='1' name='tree' checked='checked'>";
}else{
$disp.="Tree Cover: 	  <input type='hidden' value='0' name='tree'><input type='checkbox' value='1' name='tree'>";
}
$disp.="<br>";
if($result_l[7]==1) {
$disp.="Street/Roadside:  <input type='hidden' value='0' name='street'><input type='checkbox' value='1' name='street' checked='checked'>";
}else{
$disp.="Street/Roadside:  <input type='hidden' value='0' name='street'><input type='checkbox' value='1' name='street'>";
}
$disp.="<br>";
if($result_l[8]==1) {
$disp.="Industrial:	  <input type='hidden' value='0' name='indust'><input type='checkbox' value='1' name='indust' checked='checked'>";
}else{
$disp.="Industrial:	  <input type='hidden' value='0' name='indust'><input type='checkbox' value='1' name='indust'>";
}
$disp.="<br>";
if($result_l[9]==1) {
$disp.="Airport: 	  <input type='hidden' value='0' name='airport'><input type='checkbox' value='1' name='airport' checked='checked'>";
}else{
$disp.="Airport: 	  <input type='hidden' value='0' name='airport'><input type='checkbox' value='1' name='airport'>";
}
$disp.="<br>";
if($result_l[10]==1) {
$disp.="Train/Subway: 	  <input type='hidden' value='0' name='train'><input type='checkbox' value='1' name='train' checked='checked'>";
}else{
$disp.="Train/Subway: 	  <input type='hidden' value='0' name='train'><input type='checkbox' value='1' name='train'>";
}
$disp.="<br>";
if($result_l[11]==1) {
$disp.="Other: 		  <input type='hidden' value='0' name='loc'><input type='checkbox' value='1' name='loc' checked='checked'>";
}else{
$disp.="Other: 		  <input type='hidden' value='0' name='loc'><input type='checkbox' value='1' name='loc'>";
}$disp.="<br>";
$disp .="<textarea style='resize:none;'name='loctxt'>".$result_dt[22]."</textarea></td></tr></table>";
$disp .="<input type='submit' value='Confirm Changes' name='confirm'>";
$disp .= "</form></div>";
}
//Display Appended variable content.
//echo $disp;
?>
