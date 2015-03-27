<?php //view form, using readonly rather than disabled.
require_once "Display_Join.php";
$disp = "
<pre>
<div id='viewform' style='width:550px;'>
<fieldset>
<legend><strong>".date("m/d/y", $record['time'])."</strong></legend>";
$disp .= "<br><strong>General Medium of Sculpture:</strong><br><br>";
if($result_r[3]==1 || $result_r[3]==3 || $result_r[3]==5 || $result_r[3]==7)
{
$disp .= "<input disabled type='checkbox' checked='checked'>Stone";} else {
$disp .= "<input disabled type='checkbox' >Stone";
}if($result_r[3]==2 || $result_r[3]==3 || $result_r[3]==6 || $result_r[3]==7) 
{
$disp .= "<input disabled type='checkbox' checked='checked'>Metal";} else {
$disp .= "<input disabled type='checkbox' >Metal";
}
if($result_r[3]==4 || $result_r[3]==5 || $result_r[3]==6 || $result_r[3]==7)
{
$disp .= "<input disabled type='checkbox' checked='checked'>Other";} else {
$disp .= "<input disabled type='checkbox' >Other";
}

$disp .= "<br><br><strong>Specific Medium of Sculpture:</strong><br><br>";
$disp .= "<br><textarea disabled style='resize:none;'wrap='hard' >".$result_r[4]."</textarea>";

$disp .= "<br><br><strong>General Medium of Base:</strong><br><br>";
if($result_r[5]==1 || $result_r[5]==3 || $result_r[5]==5 || $result_r[5]==7)
{
$disp .= "<input disabled type='checkbox'  checked='checked'>Stone";} else {
$disp .= "<input disabled type='checkbox'  >Stone";
}if($result_r[5]==2 || $result_r[5]==3 || $result_r[5]==6 || $result_r[5]==7) 
{
$disp .= "<input disabled type='checkbox' checked='checked'>Metal";} else {
$disp .= "<input disabled type='checkbox' >Metal";
}
if($result_r[5]==4 || $result_r[5]==5 || $result_r[5]==6 || $result_r[5]==7)
{
$disp .= "<input disabled type='checkbox' checked='checked'>Other";} else {
$disp .= "<input disabled type='checkbox' >Other";
}

$disp .= "<br><br><strong>Specific Medium of Base: </strong><br><br>";
$disp .= "<textarea disabled style='resize:none;'wrap='hard' >".$result_r[6]."</textarea>";

$disp .= "</fieldset>";
$disp .= "<table style='font-size:8pt;border: 1px solid #C0C0C0;'><tr><td>Damage Type</td><td>Sculpture</td><td>Base</td><td>Notes</td></tr>";
//Damages Section
$disp .="<tr><td>Structural Instability</td>";
if($result_d[3]==1 || $result_d[3]==3){
$disp .="<td><input disabled type='checkbox' checked='checked'></td>";
}else{
$disp .="<td><input disabled type='checkbox' ></td>";
}
if($result_d[3]==2 || $result_d[3]==3){
$disp .="<td><input disabled type='checkbox' checked='checked'></td>";
}else{
$disp .="<td><input disabled type='checkbox' ></td>";
}
$disp .="<td><textarea disabled style='resize:none;'wrap='hard'>".$result_dt[3]."</textarea></td></tr>";

$disp .="<tr><td>Exposed Internal Support</td>";
if($result_d[4]==1 || $result_d[4]==3){
$disp .= "<td><input disabled type='checkbox' checked='checked'></td>";
}else{
$disp .="<td><input disabled type='checkbox' ></td>";
}
if($result_d[4]==2 || $result_d[4]==3){
$disp .="<td><input disabled type='checkbox' checked='checked'></td>";
}else{
$disp .="<td><input disabled type='checkbox' ></td>";
}
$disp .="<td><textarea disabled style='resize:none;'wrap='hard'>".$result_dt[4]."</textarea></td></tr>";

$disp .="<tr><td>Broken or Missing Parts</td>";
if($result_d[5]==1 || $result_d[5]==3){
$disp .="<td><input disabled type='checkbox' checked='checked'></td>";
}else{
$disp .="<td><input disabled type='checkbox' ></td>";
}
if($result_d[5]==2 || $result_d[5]==3){
$disp .="<td><input disabled type='checkbox' checked='checked'></td>";
}else{
$disp .="<td><input disabled type='checkbox' ></td>";
}
$disp .="<td><textarea disabled style='resize:none;'wrap='hard'>".$result_dt[5]."</textarea></td></tr>";

$disp .="<tr><td>Bent Crushed</td>";
if($result_d[6]==1 || $result_d[6]==3){
$disp .="<td><input disabled type='checkbox' checked='checked'></td>";
}else{
$disp .="<td><input disabled type='checkbox' ></td>";
}
if($result_d[6]==2 || $result_d[6]==3){
$disp .="<td><input disabled type='checkbox' checked='checked'></td>";
}else{
$disp .="<td><input disabled type='checkbox' ></td>";
}
$disp .="<td><textarea disabled style='resize:none;'wrap='hard'>".$result_dt[6]."</textarea></td></tr>";

$disp .="<tr><td>Spalling<br>(Lifted/Chipped Surface)</td>";
if($result_d[7]==1 || $result_d[7]==3){
$disp .="<td><input disabled type='checkbox' checked='checked'></td>";
}else{
$disp .="<td><input disabled type='checkbox' ></td>";
}
if($result_d[7]==2 || $result_d[7]==3){
$disp .="<td><input disabled type='checkbox' checked='checked'></td>";
}else{
$disp .="<td><input disabled type='checkbox' ></td>";
}
$disp .="<td><textarea disabled style='resize:none;'wrap='hard'>".$result_dt[7]."</textarea></td></tr>";

$disp .="<tr><td>Cracks/Splits/Holes</td>";
if($result_d[8]==1 || $result_d[8]==3){
$disp .="<td><input disabled type='checkbox' checked='checked'></td>";
}else{
$disp .="<td><input disabled type='checkbox' ></td>";
}
if($result_d[8]==2 || $result_d[8]==3){
$disp .="<td><input disabled type='checkbox' checked='checked'></td>";
}else{
$disp .="<td><input disabled type='checkbox' ></td>";
}
$disp .="<td><textarea disabled style='resize:none;'wrap='hard'>".$result_dt[8]."</textarea></td></tr>";

$disp .="<td>Etched/Pitted/Eroded<br>Surface</td>";
if($result_d[9]==1 || $result_d[9]==3){
$disp .="<td><input disabled type='checkbox' checked='checked'></td>";
}else{
$disp .="<td><input disabled type='checkbox' ></td>";
}	
if($result_d[9]==2 || $result_d[9]==3){
$disp .="<td><input disabled type='checkbox' checked='checked'></td>";
}else{
$disp .="<td><input disabled type='checkbox' ></td>";
}
$disp .="<td><textarea disabled style='resize:none;'wrap='hard'>".$result_dt[9]."</textarea></td></tr>";	

$disp .="<tr><td>Corrosion/Tarnish/Rust</td>";
if($result_d[10]==1 || $result_d[10]==3){
$disp .="<td><input disabled type='checkbox' checked='checked'></td>";
}else {
$disp .="<td><input disabled type='checkbox' ></td>";	
}
if($result_d[10]==2 || $result_d[10]==3){
$disp .="<td><input disabled type='checkbox' checked='checked'></td>";
}else {
$disp .="<td><input disabled type='checkbox' ></td>";	
}
$disp .="<td><textarea disabled style='resize:none;'wrap='hard'>".$result_dt[10]."</textarea></td></tr>";

$disp .="<tr><td>Chalky/Powdery Surface</td>";
if($result_d[11]==1 || $result_d[11]==3){
$disp .="<td><input disabled type='checkbox' checked='checked'></td>";
}else {
$disp .="<td><input disabled type='checkbox' ></td>";
}
if($result_d[11]==2 || $result_d[11]==3){
$disp .="<td><input disabled type='checkbox' checked='checked'></td>";
}else {
$disp .="<td><input disabled type='checkbox' ></td>";
}
$disp .="<td><textarea disabled style='resize:none;'wrap='hard'>".$result_dt[11]."</textarea></td></tr>";

$disp .="<tr><td>Metallic Staining or<br>Discoloration</td>";
if($result_d[12]==1 || $result_d[12]==3){
$disp .="<td><input disabled type='checkbox' checked='checked'></td>";
}else {
$disp .="<td><input disabled type='checkbox' ></td>";
}
if($result_d[12]==2 || $result_d[12]==3){
$disp .="<td><input disabled type='checkbox' checked='checked'></td>";
}else {
$disp .="<td><input disabled type='checkbox' ></td>";
}
$disp .="<td><textarea disabled style='resize:none;'wrap='hard'>".$result_dt[12]."</textarea></td></tr>";

$disp .="<tr><td>Organic Growth<br>(mold/moss/lichen/plant)</td>";
if($result_d[13]==1 || $result_d[13]==3){
$disp .="<td><input disabled type='checkbox' checked='checked'></td>";
}else {
$disp .="<td><input disabled type='checkbox' ></td>";
}
if($result_d[13]==2 || $result_d[13]==3){
$disp .="<td><input disabled type='checkbox' checked='checked'></td>";
}else {
$disp .="<td><input disabled type='checkbox' ></td>";
}
$disp .="<td><textarea disabled style='resize:none;'wrap='hard'>".$result_dt[13]."</textarea></td></tr>";


$disp .="<tr><td>Encrustations</td>";
if($result_d[14]==1 || $result_d[14]==3){
$disp .="<td><input disabled type='checkbox' checked='checked'></td>";
}else {
$disp .="<td><input disabled type='checkbox' ></td>";
}
if($result_d[14]==2 || $result_d[14]==3){
$disp .="<td><input disabled type='checkbox' checked='checked'></td>";
}else {
$disp .="<td><input disabled type='checkbox' ></td>";
}
$disp .="<td><textarea disabled style='resize:none;'wrap='hard'>".$result_dt[14]."</textarea></td></tr>";

$disp .="<tr><td>Bird Guano</td>";
if($result_d[15]==1 || $result_d[15]==3){
$disp .="<td><input disabled type='checkbox' checked='checked'></td>";
}else {
$disp .="<td><input disabled type='checkbox' ></td>";
}
if($result_d[15]==2 || $result_d[15]==3){
$disp .="<td><input disabled type='checkbox' checked='checked'></td>";
}else {
$disp .="<td><input disabled type='checkbox' ></td>";
}
$disp .="<td><textarea disabled style='resize:none;'wrap='hard'>".$result_dt[15]."</textarea></td></tr>";

$disp .="<tr><td>Soil/Dirt/Pollution<br>Deposits</td>";
if($result_d[16]==1 || $result_d[16]==3){
$disp .="<td><input disabled type='checkbox' checked='checked'></td>";
}else {
$disp .="<td><input disabled type='checkbox' ></td>";
}
if($result_d[16]==2 || $result_d[16]==3){
$disp .="<td><input disabled type='checkbox' checked='checked'></td>";
}else {
$disp .="<td><input disabled type='checkbox' ></td>";
}
$disp .="<td><textarea disabled style='resize:none;'wrap='hard'>".$result_dt[16]."</textarea></td></tr>";

$disp .="<tr><td>Water in Recessed Areas</td>";
if($result_d[17]==1 || $result_d[17]==3){
$disp .="<td><input disabled type='checkbox' checked='checked'></td>";
}else {
$disp .="<td><input disabled type='checkbox' ></td>";
}
if($result_d[17]==2 || $result_d[17]==3){
$disp .="<td><input disabled type='checkbox' checked='checked'></td>";
}else {
$disp .="<td><input disabled type='checkbox' ></td>";
}
$disp .="<td><textarea disabled style='resize:none;'wrap='hard'>".$result_dt[17]."</textarea></td></tr>";

$disp .="<tr><td>Scratches</td>";
if($result_d[18]==1 || $result_d[18]==3){
$disp .="<td><input disabled type='checkbox' checked='checked'></td>";
}else {
$disp .="<td><input disabled type='checkbox' ></td>";
}
if($result_d[18]==2 || $result_d[18]==3){
$disp .="<td><input disabled type='checkbox' checked='checked'></td>";
}else {
$disp .="<td><input disabled type='checkbox' ></td>";
}
$disp .="<td><textarea disabled style='resize:none;'wrap='hard'>".$result_dt[18]."</textarea></td></tr>";

$disp .="<tr><td>Graffiti</td>";
if($result_d[19]==1 || $result_d[19]==3){
$disp .="<td><input disabled type='checkbox' checked='checked'></td>";
}else {
$disp .="<td><input disabled type='checkbox' ></td>";
}
if($result_d[19]==2 || $result_d[19]==3){
$disp .="<td><input disabled type='checkbox' checked='checked'></td>";
}else {
$disp .="<td><input disabled type='checkbox' ></td>";
}
$disp .="<td><textarea disabled style='resize:none;'wrap='hard'>".$result_dt[19]."</textarea></td></tr>";

$disp .="<tr><td>Other</td>";
if($result_d[20]==1 || $result_d[20]==3){
$disp .="<td><input disabled type='checkbox' checked='checked'></td>";
}else {
$disp .="<td><input disabled type='checkbox' ></td>";
}
if($result_d[20]==2 || $result_d[20]==3){
$disp .="<td><input disabled type='checkbox' checked='checked'></td>";
}else {
$disp .="<td><input disabled type='checkbox' ></td>";
}
$disp .="<td><textarea disabled style='resize:none;'wrap='hard'>".$result_dt[20]."</textarea></td></tr>";
//$disp .="</fieldset>";
$disp .="<tr><td colspan=2>
<strong>Evidence Of:</strong><br>";

if($result_d[21]==1 || $result_d[21]==3 || $result_d[21]==5 || $result_d[21]==7)
{
$disp .="<input disabled type='checkbox' checked='checked'>Major Restoration<br>";
}else{
$disp .="<input disabled type='checkbox' >Major Restoration<br>";
}
if($result_d[21]==2 || $result_d[21]==3 || $result_d[21]==6 || $result_d[21]==7) 
{
$disp .="<input disabled type='checkbox' checked='checked'>Minor Repair<br>";
}else{
$disp .="<input disabled type='checkbox' >Minor Repair<br>";
}
if($result_d[21]==4 || $result_d[21]==5 || $result_d[21]==6 || $result_d[21]==7)
{
$disp .="<input disabled type='checkbox' checked='checked'>Other<br>";
}else{
$disp .="<input disabled type='checkbox' >Other<br>";
}
$disp .="<textarea disabled style='resize:none;'wrap='hard' >".$result_dt[21]."</textarea>";

$disp .="<br><strong>Condition Assessment:</strong><br>";
if($result_d[22]==1 || $result_d[22]==3 || $result_d[22]==5 || $result_d[22]==7)
{
$disp .="<input disabled type='checkbox' checked='checked'>Well Maintained<br>";
}else{
$disp .="<input disabled type='checkbox' >Well Maintained<br>";
}
if($result_d[22]==2 || $result_d[22]==3 || $result_d[22]==6 || $result_d[22]==7) 
{
$disp .="<input disabled type='checkbox' checked='checked'>Needs Treatment<br>";
}else{
$disp .="<input disabled type='checkbox' >Needs Treatment<br>";
}
if($result_d[22]==4 || $result_d[22]==5 || $result_d[22]==6 || $result_d[22]==7)
{
$disp .="<input disabled type='checkbox' checked='checked'>Needs Urgent Treatment<br>";
}else{
$disp .="<input disabled type='checkbox' >Needs Urgent Treatment<br>";
}

$disp .="</td><td colspan=2><strong>Locale</strong><br>General Vicinity:<br>";

if($result_l[3]==1 || $result_l[3]==3 || $result_l[3]==5 || $result_l[3]==7)
{
$disp .="<input disabled type='checkbox' checked='checked'>Suburban";
}else{
$disp .="<input disabled type='checkbox' >Suburban";
}
if($result_l[3]==2 || $result_l[3]==3 || $result_l[3]==6 || $result_l[3]==7) 
{
$disp .="<input disabled type='checkbox' checked='checked'>Rural";
}else{
$disp .="<input disabled type='checkbox' >Rural";
}
if($result_l[3]==4 || $result_l[3]==5 || $result_l[3]==6 || $result_l[3]==7)
{
$disp .="<input disabled type='checkbox' checked='checked'>Urban/Metro";
}else{
$disp .="<input disabled type='checkbox' >Urban/Metro";
}$disp .="<br>";
if($result_l[4]==1) {
$disp.="Protected from Elements: <input disabled type='checkbox' value='1' name='element' checked='checked'><br>";
}else{
$disp.="Protected from Elements: <input disabled type='checkbox' value='1' name='element'><br>";
}
if($result_l[5]==1) {
$disp.="Protected from Public:   <input disabled type='checkbox' value='1' name='public' checked='checked'><br>";
}else{
$disp.="Protected from Public:   <input disabled type='checkbox' value='1' name='public'><br>";
}
if($result_l[6]==1) {
$disp.="Tree Cover: 		 <input disabled type='checkbox' value='1' name='tree' checked='checked'><br>";
}else{
$disp.="Tree Cover: 	 	 <input disabled type='checkbox' value='1' name='tree'><br>";
}
$disp.="<br>";
if($result_l[7]==1) {
$disp.="Street/Roadside:  <input disabled type='checkbox' value='1' name='street' checked='checked'>";
}else{
$disp.="Street/Roadside:  <input disabled type='checkbox' value='1' name='street'>";
}
$disp.="<br>";
if($result_l[8]==1) {
$disp.="Industrial:	  <input disabled type='checkbox' value='1' name='indust' checked='checked'>";
}else{
$disp.="Industrial:	  <input disabled type='checkbox' value='1' name='indust'>";
}
$disp.="<br>";
if($result_l[9]==1) {
$disp.="Airport: 	  <input disabled type='checkbox' value='1' name='airport' checked='checked'>";
}else{
$disp.="Airport: 	  <input disabled type='checkbox' value='1' name='airport'>";
}
$disp.="<br>";
if($result_l[10]==1) {
$disp.="Train/Subway: 	  <input disabled type='checkbox' value='1' name='train' checked='checked'>";
}else{
$disp.="Train/Subway: 	  <input disabled type='checkbox' value='1' name='train'>";
}
$disp.="<br>";
if($result_l[11]==1) {
$disp.="Other: 		  <input disabled type='checkbox' value='1' name='loc' checked='checked'>";
}else{
$disp.="Other: 		  <input disabled type='checkbox' value='1' name='loc'>";
}$disp.="<br>";
$disp .="<textarea disabled style='resize:none;'wrap='hard'>".$result_dt[22]."</textarea></td>";
$disp .="</tr>";
$disp .= "</table></div>";

//echo $disp;
?>
