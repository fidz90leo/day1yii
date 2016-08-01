<?php
while($row = mysql_fetch_array($oPlayerInfo))
{
    echo "<strong>"; // <---- Added here
    echo "".$row['FirstName']." ".$row['LastName']."<br>";
    echo "Position: ".$row['Position']."<br>";
    echo "Height: ".$row['Height']."<br>";
    echo "Weight: ".$row['Weight']."<br>";
    echo "Birthdate: ".$row['DOB']."<br>";
    echo "CNGHL Team: ".$row['CNGHLRights']."<br>";
    echo "NHL Team: ".$row['Team']."<br>";
    echo "Draft Year: ".$row['CNDraftYR']."<br>";
    echo "Draft Position: ".$row['CNDraftPOS']."<br>";
    echo "Drafted By: ".$row['CNDraftTEAM']."<br>";
    echo "</strong>"; // <-----Closing here
    echo "<img src=\"http://www.cnghl.biz/cnghldb/images/".$iPlayerID.".jpg\">";
}
?>