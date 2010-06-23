
<?php
//require SIMBIO_BASE_DIR.'simbio_GUI/paging/simbio_paging.inc.php';

echo __('<h1><u><strong>Library News:</strong></u></h1>');
echo "<br>";


$page_title="Library News";

$koneksi=mysql_connect("localhost","root","");
mysql_select_db("senayan14");


$tampil="select * from news order by news_id DESC";
$hasil=mysql_query($tampil);
while($data=mysql_fetch_row($hasil))

{
echo "<table>
		  <tr>
			  <td>$new</td>
			  <td><strong>$data[2]</strong> [ $data[4] ]<br>$data[1] <a href='index.php?p=detailnews&news_id=$data[0]'>detail..</a> </td>
		  </tr>
	  </table>";
echo "______________________________";
	  
/*
echo "<a href='index.php?p=detailnews&news_id=$data[0]'>$data[2]</a>"; 
echo " [ $data[4] ]";
echo "<br>";
echo "$data[1]";


echo "<br>";
echo "<br>";

*/
 }



     
?>
