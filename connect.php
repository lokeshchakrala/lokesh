<?php 
 $connection = mysqli_connect("localhost","root","");
 $db = mysqli_select_db($connection,'svcollege');
 
 if(isset($_POST['insert']))
 {
	 $gender =$_POST['g1'];
	 $gender1 =$_POST['g2'];
	 $gender2 =$_POST['g3'];
	 $gender3 =$_POST['g4'];
	 $gender4 =$_POST['g5'];
	 $gender5 =$_POST['g6'];
 	 $gender6= $_POST['g7'];
	 $gender7 =$_POST['g8'];
	 $gender8 =$_POST['g9'];
	 $gender9 =$_POST['g10'];
	 $gender10 =$_POST['g11'];
	 $gender11 =$_POST['g12'];
	 $gender12 =$_POST['g13'];
	 $gender13 =$_POST['g14'];
	 $gender14 =$_POST['g15'];
	 $gender15 =$_POST['g16'];
	 $gender16 =$_POST['g17'];
	 $gender17 =$_POST['g18'];
	 $gender18 =$_POST['g19'];
	 $gender19 =$_POST['g20'];
	 $gender20 =$_POST['g21'];
	 $gender21 =$_POST['g22'];
	 $gender22 =$_POST['g23'];
	 $gender23 =$_POST['g24'];
	 $gender24 =$_POST['g25'];
	 $gender25 =$_POST['g26'];
	 $gender26 =$_POST['g27'];
	 $gender27 =$_POST['g28'];
	 $gender28 =$_POST['g29'];
	 $gender29 =$_POST['g30'];
	 $gender30 =$_POST['g31'];
	 $gender31 =$_POST['g32'];
	 $gender32 =$_POST['g33'];
	 $gender33 =$_POST['g34'];
	 $gender34 =$_POST['g35'];
	 $gender35 =$_POST['g36'];
	 $gender36 =$_POST['g37'];
	 $gender37 =$_POST['g38'];
	 $gender38 =$_POST['g39'];
	 $gender39 =$_POST['g40'];
	 $gender40 =$_POST['g41'];
	 $gender41 =$_POST['g42'];
	 $gender42 =$_POST['g43'];
	 $gender43 =$_POST['g44'];
	 $gender44 =$_POST['g45'];
	 $gender45 =$_POST['g46'];
	 $gender46 =$_POST['g47'];
	 $gender47 =$_POST['g48'];
	 $gender48 =$_POST['g49'];
	 $gender49 =$_POST['g50'];
	 $gender50 =$_POST['g51'];
	 $gender51 =$_POST['g52'];
	 $gender52 =$_POST['g53'];
	 
	 $query = "INSERT INTO stu_data(19KH1A0501, 19KH1A0502, 19KH1A0503, 19KH1A0504, 19KH1A0505, 19KH1A0506, 19KH1A0507, 19KH1A0508, 19KH1A0509, 19KH1A0510, 19KH1A0511, 19KH1A0512, 19KH1A0513, 19KH1A0514, 19KH1A0515, 19KH1A0516, 19KH1A0517, 19KH1A0518, 19KH1A0519, 19KH1A0520, 19KH1A0521, 19KH1A0522, 19KH1A0523, 19KH1A0524, 19KH1A0525, 19KH1A0526, 19KH1A0527, 19KH1A0528, 19KH1A0529, 19KH1A0530, 19KH1A0531, 19KH1A0532, 19KH1A0533, 19KH1A0534, 19KH1A0535, 19KH1A0536, 19KH1A0537, 19KH1A0538, 19KH1A0539, 19KH1A0540, 19KH1A0541, 19KH1A0542, 19KH1A0543, 19KH1A0544, 19KH1A0545, 19KH1A0546, 19KH1A0547, 19KH1A0548, 19KH1A0549, 19KH1A0550, 19KH1A0551, 19KH1A0552, 19KH1A0553) VALUES ('$gender','$gender1','$gender2','$gender3','$gender4','$gender5','$gender6','$gender7','$gender8','$gender9','$gender10','$gender11','$gender12','$gender13','$gender14','$gender15','$gender16','$gender17','$gender18','$gender19','$gender20','$gender21','$gender22','$gender23','$gender24','$gender25','$gender26','$gender27','$gender28','$gender29','$gender30','$gender31','$gender32','$gender33','$gender34','$gender35','$gender36','$gender37','$gender38','$gender39','$gender40','$gender41','$gender42','$gender43','$gender44','$gender45','$gender46','$gender47','$gender48','$gender49','$gender50','$gender51','$gender52')";
	 $query_run =mysqli_query($connection,$query);

	 
	 
	 if(isset($query_run))
	 {		 
		 echo '
		 <script>
		 alert("Your Data Has Been Successfully Saved");
		 </script>
		 ';
	 }
	 
	 else
	 {
		 echo 'Data not saved';
	 }
 }
 
 ?>