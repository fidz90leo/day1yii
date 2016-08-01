<style type="text/css">
.bold {
		font-weight: bold;
		padding: center;
	}
	td{ text-align: center; width: 150px;}
</style>

<?php
$name = "Malaysia States";
echo "<tr><td text-align='center'>".$name."</td></tr>";

$states = array("state name","Selangor", "Johor", "Kedah","Kelantan", "Melaka", "Negeri Sembilan", "Pahang", "Perak", "Perlis", "Pulau Pinang", "Sabah", "Sarawak", "Terengganu");
$ibunegeri = array("ibunegeri","Shah Alam", "Johor Bahru", "Alor Setar","Kota Bahru", "Bandar Melaka", "Seremban", "Kuantan", "Ipoh", "Kangar", "Georgetown", "Kota Kinabalu", "Kuching", "Kuala Terengganu");
$shortname = array("short name","SGR", "JHR", "KDH","KTN", "MLK", "NSN", "PHG", "PRK", "PLS", "PNG", "SBH", "SWK", "TRG");
$num = 0;
   do{
       echo "<table border='1' cellspacing='0' cellpadding='0' table align='center' >";
       if ($states[$num]=='Johor' && $ibunegeri[$num] =='Johor Bahru' && $shortname[$num]=='JHR'){
       echo "<tr><td class='bold'>". $states[$num]. "</b></td><td class='bold'>". $ibunegeri[$num]. "</td><td class='bold'>". $shortname[$num]. "</td></tr>";
       }
       else
       { echo "<tr><td width=100px>". $states[$num]. "</td><td width=100px>". $ibunegeri[$num]. "</td><td width=100px>". $shortname[$num]. "</td></tr>";}
       
       $num++;
   }while($num <= 10);
   		echo "</table>";
 ?>
<hr/>
<strong></strong>
