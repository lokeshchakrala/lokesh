<html>
<body>
<style>
table tr,th,td{
border: transparent;
border-collapse: collapse;
}
tr:nth-child(even){
background-color:#D6EEEE;
}
body{
background-color:gray;}
h1{
color:purple;
}
h3{
color:Midnightblue;}
</style>
<body>
<form action="connect.php" method="POST">
<center><img src="svcklogo.png"  alt= svcklogo></img></center>
<center><h1 > SV COLLEGE OF ENGINEERING</h1>
<h3> ATTENDENCE FOR CSE-A (R19)</h3></center>
<center>
<table>
<tr>
<th> ROLL NO</TH>
<th> ATTENEDED CLASSES</th>
<th>PERCENTAGE</TH>
<tr>
<tr>
<td> 19KH1A0501</td>
<td><input type="radio" name="present" id="t1" value="501"></td> :Present
<td><input type="radio" name="present" id="t1" value="501"></td>:Absent
</tr>
</table>
<center><input type="submit" value="submit" name="insert"></center>