<!DOCTYPE html>
<html>
<head>
  <title>product_management</title>
<link rel="icon" type="image/jpg" href="/img_3.jpg">
<style type="">


#d_1
{
  position: absolute;
    width: 33%;
 
    background-color: #cfecec;
    margin-left: 22%;
 
}
  
marquee
{
  background-color: #ffe5b4;
  color: #0041c2;
  text-align: center;
  font-weight: bold;
  width: 100%;
  height: .1%;
  padding: .3%;
  font-size: 200%;
  text-shadow: 5px 5px 5px #d462ff;
}


  ul
  {
    list-style-type: none;
    margin: 0;
    padding: 0;
  }
  a
  {
    display: block;
    font-size: 110%;
    text-decoration: none;
    font-weight: bold;

  }
  li
  {
    display: block;
    cursor: pointer;
    margin-top: 2px;
    text-align: center;
    width: 100%;
    height: 100%%;
    color: black;
    background-color: #2b547e;
    
    font-weight: bold;
  }
  li a:hover
  {
        background-color: #F0FFF0;
        display: block;
        width: 100%;
        height: 100%;
  }
    a:link
    {
      color: #FFFFFF;
    }
    a:visited
    {
      color: white;
    }
    a:active
    {
      color: #8B0000;
    }


fieldset.img
{
   width: 75%;
  
   border: 0px solid #6666CC;
   position: relative;
}
fieldset.desc
{
    width: 75%;
  text-align: center;
  font-size: 100%;
  color: #DC143C;
  text-decoration: none;
  height: 60%;
  border: 0px;
}
fieldset.img img
{
  width: 100%;
  height: 80%;
}
fieldset.img:hover
{
  border: 1px solid #B22222;
}
a
{
  text-decoration: none;
}

td
{
  width: 20%
}


</style>


<!-- CSS_ADSBLOCK_START -->
<link rel="stylesheet" href="https://adblockers.opera-mini.net/css_block/domainless-unknown.css" type="text/css" />
<link rel="stylesheet" href="https://adblockers.opera-mini.net/css_block/page_0_2l4ga8u5ns757g5qa7pm6fvzlj23395xqjdpulyob8b4918on3.css" type="text/css" />
<link rel="stylesheet" href="https://adblockers.opera-mini.net/css_block/domainless.css" type="text/css" />
<!-- CSS_ADSBLOCK_END -->
</head>
<body style="background-color: #f0f0ffff">


<marquee behaviour= "alternate">Mobile Phone Stock Management</marquee>

<hr style= "width: 100%">
<fieldset style= "width: 20%; border: 0px solid grey; position: absolute; margin-left: 1%; background-color: #ece5b6">  <! main division 1 start>
        <ul>                                                                                                            <!menu of main division>

        <li><a href="product_management.php">Home</a></li>        
        <li><a href="#i_1">Order preparing</a></li>
        <li><a href="#t_5">Product adding</a></li>
        <li><a href="#i_2">Warranty Service</a></li>
        <li><a href="#t_4">Stocking Checking</a></li>
        <li>

          <form>

          <input type="submit" name="log_out" value="logout" style="cursor: pointer;" onclick="unset_session()">

          </form>
        </li>    
       </ul>

 


    <p style="color: #8A2BA2; text-align: center; font-size: 98%; font-weight: bold">Catalogue</p><hr style="color: #8A2BA2">
    <fieldset class= "img">
     <a href="">
      <img src="img_1.jpg">
      <fieldset class= "desc">Phone
      </fieldset>
     </a>
    </fieldset>

    <fieldset class= "img">
     <a href="">
      <img src="img_2.jpg">
      <fieldset class= "desc">Samsung
      </fieldset>
     </a>
    </fieldset>
    <fieldset class= "img">
     <a href="">
      <img src="img_3.jpg">
      <fieldset class= "desc">Sony
      </fieldset>
     </a>
    </fieldset>
     
    <fieldset class= "img">
      <a href="">
      <img src="img_4.jpg">
      <fieldset class= "desc">LG
      </fieldset>
      </a>
    </fieldset>
  
 </fieldset>
  

 <fieldset style= "width: 40%; background-color:  #A0A0A0 ; position: absolute; margin-left: 25%">                          <! main division 2 start>
    <fieldset style= "border:0px;  width: 98%;  background-color: #5e7d7e; margin-left: -2%">                                    <! Div for order form>
       <form action="product_management.php" method="POST">
         <input type="text" name="number_1" style= "width: 50%; font-weight: bold; color: black" placeholder= "Search order"> 
       </form>
    </fieldset>

<?php 


define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');
$mysql_connection= mysql_connect("localhost", "root", "");

$create_product_management_db= "CREATE DATABASE product_management";
$create_product_management_db_query= mysql_query($create_product_management_db);

define('DB_NAME', 'product_management');

$mysql_db_connection= mysql_connect("localhost", "root", "", "product_management");





if(!$mysql_connection)
{
  die("Error : ". mysql_error());
}
$mysql_selection= mysql_select_db(DB_NAME, $mysql_db_connection);
if(!$mysql_selection)
{
  die("Error : ". mysql_error());
}


$create_order_table= "CREATE TABLE order_info (order_number INT (30) NOT NULL PRIMARY KEY AUTO_INCREMENT, customer_name VARCHAR (40), e_mail VARCHAR (40), contact_no VARCHAR (30), brand_nam VARCHAR (40), model_nam VARCHAR (40), IMEI_no VARCHAR (40), issue_date VARCHAR (30))";
$create_order_table_query= mysql_query($create_order_table);

$create_warranty_table= "CREATE TABLE warranty_info (warranty_no INT (30) NOT NULL PRIMARY KEY AUTO_INCREMENT, order_no INT (30), customer_name VARCHAR (30), e_mail VARCHAR (30), contact_no VARCHAR (30), brand_nam VARCHAR (40), model_nam VARCHAR (40), IMEI_no VARCHAR (30), issue_date VARCHAR (30), sale_date VARCHAR (30), current_status VARCHAR (30))";
$create_warranty_table_query= mysql_query($create_warranty_table);

$create_brand_table= "CREATE TABLE brand_name (name VARCHAR (40))";
$create_brand_table_query= mysql_query($create_brand_table);

$create_count_table= "CREATE TABLE count_1 (brand VARCHAR (30), remaining_item INT (10))";
$create_count_table_query= mysql_query($create_count_table);

$select_rows_count_1= "SELECT * FROM count_1";
$select_rows_count_1_query= mysql_query($select_rows_count_1);

$count_rows= mysql_num_rows($select_rows_count_1_query);

if($count_rows==0)
 {
    $number= 1;
    $insert_remaining_item= "INSERT INTO count_1 (remaining_item) VALUES ('$number')";
    $insert_remaining_item_query= mysql_query($insert_remaining_item);
 }




        

if($_POST['number_1'])
 {
  $f_k= $_POST['number_1'];
  
  $f_3= "SELECT order_number FROM order_info WHERE order_number= '$f_k'";
  $f_4= "SELECT customer_name FROM order_info WHERE order_number= '$f_k'";
  $f_5= "SELECT e_mail FROM order_info WHERE order_number= '$f_k'";
  $f_6= "SELECT contact_no FROM order_info WHERE order_number= '$f_k'";
  $f_7= "SELECT brand_nam FROM order_info WHERE order_number= '$f_k'";
  $f_8= "SELECT model_nam FROM order_info WHERE order_number= '$f_k'";
  $f_9= "SELECT IMEI_no FROM order_info WHERE order_number= '$f_k'";
  $f_10= "SELECT issue_date FROM order_info WHERE order_number= '$f_k'";

 $f_12= mysql_query($f_3);
 $f_13= mysql_query($f_4);
 $f_14= mysql_query($f_5);
 $f_15= mysql_query($f_6);
 $f_16= mysql_query($f_7);
 $f_17= mysql_query($f_8);
 $f_18= mysql_query($f_9);
 $f_19= mysql_query($f_10);
?>
 <fieldset style= "border: 0px; width: 95%; background-color: #D8BFD8; margin-left: -1%" id= "u_2">

<ul style="margin:0px; padding:0px; ">

  <li style= "style=text-align:left; width: 40%; float: left; position: relative; text-align: left; border: 0px; margin-left: 1%">Order Number: </li>
 <?php 


 while ($f_20= mysql_fetch_array($f_12)) 
 {
  ?>
    <li style= "text-decoration: none; display:inline; width: 55%; float:left; position: relative; text-align:left; border: 0px; margin-left: 1%"><?php echo "" . $f_20['order_number'] . ""; ?></li>
 <?php 
 }

    echo "</table>";

?>
</ul>

<ul>
<li style= "style=text-align:left; width: 40%; float: left; position: relative; text-align: left; border: 0px; margin-left: 1%">Customer Name: </li>
<?php 
 while ($f_21= mysql_fetch_array($f_13)) 
 {
  ?>
    <li style= "text-decoration: none; display:inline; width: 55%; float:left; position: relative; text-align:left; border: 0px; margin-left: 1%"><?php echo "" . $f_21['customer_name'] . ""; ?></li>
 <?php 
 }
echo "</table>";
?>
</ul>

<ul>
<li style= "style=text-align:left; width: 40%; float: left; position: relative; text-align: left; border: 0px; margin-left: 1%">E-mail: </li>
<?php 
 while ($f_22= mysql_fetch_array($f_14)) 
 {
  ?>
    <li style= "text-decoration: none; display:inline; width: 55%; float:left; position: relative; text-align:left; border: 0px; margin-left: 1%"><?php echo "" . $f_22['e_mail'] . ""; ?></li>
 <?php 
 }
echo "</table>";
?>
</ul>


<ul>
  <li style= "style=text-align:left; width: 40%; float: left; position: relative; text-align: left; border: 0px; margin-left: 1%">Contact no: </li>
<?php 
while ($f_a= mysql_fetch_array($f_15)) 
{
 ?>
 <li style= "text-decoration: none; display:inline; width: 55%; float:left; position: relative; text-align:left; border: 0px; margin-left: 1%"><?php echo "" . $f_a['contact_no'] . ""; ?></li>
 <?php 
}
echo "</table>";
?> 
</ul>

<ul>
 <li style= "style=text-align:left; width: 40%; float: left; position: relative; text-align: left; border: 0px; margin-left: 1%">Brand Name</li>
<?php 
while ($f_b= mysql_fetch_array($f_16)) 
{
 ?>
 <li style= "text-decoration: none; display:inline; width: 55%; float:left; position: relative; text-align:left; border: 0px; margin-left: 1%"><?php echo "" . $f_b['brand_nam'] . ""; ?></li>
 <?php 
}
echo "</table>";
?> 
</ul>

<ul>
  <li style= "style=text-align:left; width: 40%; float: left; position: relative; text-align: left; border: 0px; margin-left: 1%">Model Name</li>
<?php 
while ($f_c= mysql_fetch_array($f_17)) 
{
 ?>
  <li style= "text-decoration: none; display:inline; width: 55%; float:left; position: relative; text-align:left; border: 0px; margin-left: 1%"><?php echo "" . $f_c['model_nam'] . ""; ?></li>
 <?php 
}
echo "</table>";
?> 
</ul>

<ul>
  <li style= "style=text-align:left; width: 40%; float: left; position: relative; text-align: left; border: 0px; margin-left: 1%">IMEI No</li>
<?php 
while ($f_d= mysql_fetch_array($f_18)) 
{
 ?>
 <li style= "text-decoration: none; display:inline; width: 55%; float:left; position: relative; text-align:left; border: 0px; margin-left: 1%"><?php echo "" . $f_d['IMEI_no'] . ""; ?></li>
 <?php 
}
echo "</table>";
?>
</ul> 

<ul>
  <li style= "style=text-align:left; width: 40%; float: left; position: relative; text-align: left; border: 0px; margin-left: 1%">Issue Date</li>
<?php 
while ($f_e= mysql_fetch_array($f_19)) 
{
 ?>
 <li style= "text-decoration: none; display:inline; width: 55%; float:left; position: relative; text-align:left; border: 0px; margin-left: 1%"><?php echo "" . $f_e['issue_date'] . ""; ?></li>
 <?php 
}
echo "</table>";
?>
</ul>

<script type="text/javascript">
  function print_div(s_i)
  {
    var printContents= document.getElementById(s_i).innerHTML;
    var originalContents= document.body.innerHTML;
    document.body.innerHTML= printContents;
    window.print();
    document.body.innerHTML= originalContents;
  }

</script>
<br>
</fieldset>


<fieldset style= "border:0px; width: 95%;">
<input type="submit" style="font-weight: bold; cursor: pointer" onclick="print_div('u_2')" value="Print form">
</fieldset>
<?php 
}
?>



<fieldset style= "width: 98%; border: 0px; background-color: #5e7d7e; margin-left: -2%">
<form action="product_management.php" method="POST">
<input type="search" name="warranty_num" style="width: 50%; font-weight: bold; color: black" placeholder= "Search warranty"> <br> <br>
</form>
</fieldset>


<?php
if($_POST['warranty_num'])
 {
  $m_n= $_POST['warranty_num'];
  
  $p_3= "SELECT warranty_no FROM warranty_info WHERE warranty_no= '$m_n'";
  $p_4= "SELECT customer_name FROM warranty_info WHERE warranty_no= '$m_n'";
  $p_5= "SELECT e_mail FROM warranty_info WHERE warranty_no= '$m_n'";
  $p_6= "SELECT contact_no FROM warranty_info WHERE warranty_no= '$m_n'";
  $p_7= "SELECT brand_nam FROM warranty_info WHERE warranty_no= '$m_n'";
  $p_8= "SELECT model_nam FROM warranty_info WHERE warranty_no= '$m_n'";
  $p_9= "SELECT IMEI_no FROM warranty_info WHERE warranty_no= '$m_n'";
  $p_10= "SELECT Issue_date FROM warranty_info WHERE warranty_no= '$m_n'";
  $p_11= "SELECT sale_date FROM warranty_info WHERE warranty_no= '$m_n'";
  $p_11_1= "SELECT current_status FROM warranty_info WHERE warranty_no= '$m_n'";

 $p_12= mysql_query($p_3);
 $p_13= mysql_query($p_4);
 $p_14= mysql_query($p_5);
 $p_15= mysql_query($p_6);
 $p_16= mysql_query($p_7);
 $p_17= mysql_query($p_8);
 $p_18= mysql_query($p_9);
 $p_19= mysql_query($p_10);
 $p_19_1= mysql_query($p_11);
 $p_19_2= mysql_query($p_11_1);

?>
<fieldset style= "border: 0px; width: 97%; background-color: #C0C0C0; margin-left: -1%" id= "p_1">
<ul style="margin:0px; padding: 0px">

  <li style= "style=text-align:left; width: 40%; float: left; position: relative; text-align: left; border: 0px; margin-left: 1%; background-color: #9370D8">Warranty Number: </li>
 <?php 


 while ($p_20= mysql_fetch_array($p_12)) 
 {
  ?>
    <li style= "text-decoration: none; display:inline; width: 55%; float:left; position: relative; text-align:left; border: 0px; margin-left: 1%; background-color: #9370D8"><?php echo "" . $p_20['warranty_no'] . ""; ?></li>
 <?php 
 }

    echo "</table>";

?>
</ul>

<ul>
 <li style= "style=text-align:left; width: 40%; float: left; position: relative; text-align: left; border: 0px; margin-left: 1%; background-color: #9370D8">Customer Name: <li>
<?php 
 while ($p_21= mysql_fetch_array($p_13)) 
 {
  ?>
   <li style= "text-decoration: none; display:inline; width: 55%; float:left; position: relative; text-align:left; border: 0px; margin-left: 1%; background-color: #9370D8"><?php echo "" . $p_21['customer_name'] . ""; ?></li>
 <?php 
 }
echo "</table>";
?>
</ul>

<ul>
<li style= "style=text-align:left; width: 40%; float: left; position: relative; text-align: left; border: 0px; margin-left: 1%; background-color: #9370D8">E-mail: </li>
<?php 
 while ($p_22= mysql_fetch_array($p_14)) 
 {
  ?>
    <li style= "text-decoration: none; display:inline; width: 55%; float:left; position: relative; text-align:left; border: 0px; margin-left: 1%; background-color: #9370D8"><?php echo "" . $p_22['e_mail'] . ""; ?></li>
 <?php 
 }
echo "</table>";
?>
</ul>


<ul>
  <li style= "style=text-align:left; width: 40%; float: left; position: relative; text-align: left; border: 0px; margin-left: 1%; background-color: #9370D8">Contact no: </li>
<?php 
while ($p_a= mysql_fetch_array($p_15)) 
{
 ?>
 <li style= "text-decoration: none; display:inline; width: 55%; float:left; position: relative; text-align:left; border: 0px; margin-left: 1%; background-color: #9370D8"><?php echo "" . $p_a['contact_no'] . ""; ?></li>
 <?php 
}
echo "</table>";
?> 
</ul>

<ul>
  <li style= "style=text-align:left; width: 40%; float: left; position: relative; text-align: left; border: 0px; margin-left: 1%; background-color: #9370D8">Brand Name</li>
<?php 
while ($p_b= mysql_fetch_array($p_16)) 
{
 ?>
 <li style= "text-decoration: none; display:inline; width: 55%; float:left; position: relative; text-align:left; border: 0px; margin-left: 1%; background-color: #9370D8"><?php echo "" . $p_b['brand_nam'] . ""; ?></li>
 <?php 
}
echo "</table>";
?> 
</ul>

<ul>
  <li style= "style=text-align:left; width: 40%; float: left; position: relative; text-align: left; border: 0px; margin-left: 1%; background-color: #9370D8">Model Name</li>
<?php 
while ($p_c= mysql_fetch_array($p_17)) 
{
 ?>
 <li style= "text-decoration: none; display:inline; width: 55%; float:left; position: relative; text-align:left; border: 0px; margin-left: 1%; background-color: #9370D8"><?php echo "" . $p_c['model_nam'] . ""; ?></li>
 <?php 
}
echo "</table>";
?> 
</ul>

<ul>
  <li style= "style=text-align:left; width: 40%; float: left; position: relative; text-align: left; border: 0px; margin-left: 1%; background-color: #9370D8">IMEI No</li>
<?php 
while ($p_d= mysql_fetch_array($p_18)) 
{
 ?>
 <li style= "text-decoration: none; display:inline; width: 55%; float:left; position: relative; text-align:left; border: 0px; margin-left: 1%; background-color: #9370D8"><?php echo "" . $p_d['IMEI_no'] . ""; ?></li>
 <?php 
}
echo "</table>";
?> 
</ul>

<ul>
  <li style= "style=text-align:left; width: 40%; float: left; position: relative; text-align: left; border: 0px; margin-left: 1%; background-color: #9370D8">Warranty Issue Date</li>
<?php 
while ($p_e= mysql_fetch_array($p_19)) 
{
 ?>
 <li style= "text-decoration: none; display:inline; width: 55%; float:left; position: relative; text-align:left; border: 0px; margin-left: 1%; background-color: #9370D8"><?php echo "" . $p_e['Issue_date'] . ""; ?></li>
 <?php 
}
echo "</table>";
?>
</ul>


<ul>
  <li style= "style=text-align:left; width: 40%; float: left; position: relative; text-align: left; border: 0px; margin-left: 1%; background-color: #9370D8">Sale date</li>
<?php 
while ($p_f= mysql_fetch_array($p_19_1)) 
{
 ?>
 <li style= "text-decoration: none; display:inline; width: 55%; float:left; position: relative; text-align:left; border: 0px; margin-left: 1%; background-color: #9370D8"><?php echo "" . $p_f['sale_date'] . ""; ?></li>
 <?php 
}
echo "</table>";
?>
</ul>

<ul>
  <li style= "style=text-align:left; width: 40%; float: left; position: relative; text-align: left; border: 0px; margin-left: 1%; background-color: #9370D8">Current status</li>
<?php 
while ($p_s= mysql_fetch_array($p_19_2)) 
{
 ?>
 <li style= "text-decoration: none; display:inline; width: 55%; float:left; position: relative; text-align:left; border: 0px; margin-left: 1%; background-color: #9370D8"><?php echo "" . $p_s['current_status'] . ""; ?></li>
 <?php 
}
echo "</table>";
?>
</ul>


<script type="text/javascript">
  function print_div(s_i)
  {
    var printContents= document.getElementById(s_i).innerHTML;
    var originalContents= document.body.innerHTML;
    document.body.innerHTML= printContents;
    window.print();
    document.body.innerHTML= originalContents;
  }

</script>
</fieldset>



<fieldset style= "border:0px;  width: 98%">

<input type="submit" style="font-weight: bold; cursor: pointer" onclick="print_div('p_1')" value="Print form">
</fieldset>

<?php 
}
?>     

<fieldset style= "border: 0px; width: 98%; ; margin-left: -3%" id= "i_1">
<fieldset style= "width: 97%; color: white; background-color: #342D7A; font-weight: bold">
<label style="font-weight: bold; font-size: 20px">Customer Information</label><hr>

<form action="product_management.php" method="POST">
<table>

 <tr><td> Name</td><td><input type="text" id="input_1" name="name" value="" required= "required" placeholder= "name"></td></tr>
 <tr><td>      </td><td></td></tr>
 <tr><td>      </td><td></td></tr>
 <tr><td> e-mail</td><td><input type="text" id="input_1" name="e_mail" value="" required= "required" placeholder= "e-mail"></td></tr>
 <tr><td>      </td><td></td></tr>
 <tr><td>      </td><td></td></tr>
 <tr><td> Contact no</td><td><input type="text" id="input_1" name="contact_no" value="" required= "required" placeholder= "contact no"></td></tr>
 <tr><td>      </td><td></td></tr>
 <tr><td>      </td><td></td></tr>
 <tr><td> IMEI no </td><td><input type="text" id="input_2" name="imei_no" value="" required= "required" placeholder= "IMEI no"></td></tr>
 <tr><td>      </td><td></td></tr>
 <tr><td>      </td><td></td></tr>
 
  <tr><td>Issue Date   </td><td><input type="text" id="input_2" name="issue_date" value="" required= "required" placeholder= "date">
 <tr><td>      </td><td></td></tr>
 <tr><td>      </td><td></td></tr>

 <tr><td> <input type="submit" style="background-color: #fdeef4;cursor: pointer; font-weight: bold; width: 4cm" name="submit_1" value="Submit Information"></td><td><input type="reset" style="background-color: #fdeef4;cursor: pointer; font-weight: bold; width: 4cm" name="submit_info" value="Cancel"></td></tr>

</table>
</form>
</fieldset>



<?php
define('DB_NAME', 'product_management');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');

$x= mysql_connect("localhost","root","","product_management");
if(!$x)
{
  die("Error : ". mysql_error());
}
$y= mysql_select_db(DB_NAME, $x);               
if(!$y)
{
  die("Error : ". mysql_error());
}

if(isset($_POST['name']) && isset($_POST['e_mail']) && isset($_POST['contact_no']) && isset($_POST['imei_no']) && isset($_POST['issue_date']))

{
  $t_1= $_POST['name'];
  $t_2= $_POST['e_mail'];
  $t_3= $_POST['contact_no'];
  $t_4= $_POST['imei_no'];
  $t_5= $_POST['issue_date'];

  $t_m= "INSERT INTO order_info(customer_name, e_mail, contact_no, IMEI_no, issue_date) VALUES ('$t_1', '$t_2', '$t_3', '$t_4', '$t_5')";
  $t_n= mysql_query($t_m);
  

}

?>







<?php 
$t_n= "SELECT name FROM brand_name";
$t_o= mysql_query($t_n);

?>

<form action="product_management.php" method="POST">
<fieldset style= "width: 97%;color: white; background-color: #15317E; font-weight: bold; ">
<label style="font-size: 20px; font-weight: bold">Product Information</label><hr>
<select name="select_1" style="font-weight: bold">
<?php 
while ($t_12= mysql_fetch_array($t_o))
{
  ?>
    <option value="<?php echo "". $t_12['name'] . "";?>"><?php echo "". $t_12['name'] . "";?></option>
    <?php 
}
?>
<input type="hidden" name="in_1" value="<?php echo "" . $t_4 . "";   ?>">
<br><br><input type="submit" style="background-color: #fdeef4;cursor: pointer; width: 5cm; font-weight: bold" name="submit_1" value="Confirm">
</fieldset>
</form>


<?php 
if($_POST['submit_1']) 
{
    $t_ll= $_POST['in_1'];
   
  $t_11= $_POST['select_1'];
  $l_y= "UPDATE count_1 SET brand= '$t_11' WHERE remaining_item= '1'";
  $t_rr= mysql_query($l_y);
    $r_y= $t_ll;
   
    
}

?>



<?php 
$rew= "SELECT brand FROM count_1 WHERE remaining_item= '1'";
$cvm= mysql_query($rew);

$e_c= "SELECT model_name FROM $t_11";
$t_p= mysql_query($e_c);


?>

<form action="product_management.php" method="POST">
<fieldset style= "width: 97%; color: white; background-color: #15317E; font-weight: bold">
<legend></legend>
<select name="selection_2" style="font-weight: bold">
<?php 
while ($t_ip= mysql_fetch_array($t_p)) 
{
?>
<option value="<?php echo "" . $t_ip['model_name'] . "";?>"><?php echo "" . $t_ip['model_name'] . "";?></option>
<?php 
}
echo "</select>";
?>
<br><br><input type="hidden" name="number_item" value="1" placeholder= "Item number">
<input type="hidden" name="in_u" value="<?php echo "" . $r_y . ""; ?>">
<input type="hidden" name="in_m" value="<?php echo "" . $r_y . ""; ?>">
<input type="submit" style="background-color: #fdeef4;cursor: pointer; font-weight: bold" name="submit_2" value="Confirm"> <br> <br>
</form>
</fieldset>
<?php 
if($_POST['submit_2'])
{
  $cvbp= $_POST['selection_2'];
  $y_pp= $_POST['number_item'];
    $f_1= $_POST['in_u'];
   
  $r_1= "SELECT brand FROM count_1 WHERE remaining_item= '1'";
  $r_2= mysql_query($r_1);
  
  while ($rmm= mysql_fetch_array($r_2)) 
  {
     $r_s= $rmm['brand'];
  }
  
    $r_3= "SELECT remaining_item FROM $r_s WHERE model_name= '$cvbp'";
    $r_4= mysql_query($r_3);
    while ($c_1= mysql_fetch_array($r_4)) 
    {
      $er_1= $c_1['remaining_item'];
    }
    if($er_1>$y_pp)
    {
    $r_5= $er_1- $y_pp;
    $r_6= "UPDATE $r_s SET remaining_item= '$r_5' WHERE model_name= '$cvbp'";
    $r_7= mysql_query($r_6);
    }
    else
    {
      echo "Out of Stock";

    }
    
    $r_8= "SELECT sold_item FROM $r_s WHERE model_name= '$cvbp'";
    $r_9= mysql_query($r_8);
    while ($mm_1= mysql_fetch_array($r_9)) 
    {
      $x_c= $mm_1['sold_item'];
    }
   
    $r_10= $x_c+ $y_pp;
    
    $r_12= "UPDATE $r_s SET sold_item= '$r_10' WHERE model_name= '$cvbp'";
    $r_13= mysql_query($r_12);

    $r_14= "UPDATE order_info SET brand_nam= '$r_s' WHERE IMEI_no= '$f_1'";
    $r_15= mysql_query($r_14);

    $r_16= "UPDATE order_info SET model_nam= '$cvbp' WHERE IMEI_no= '$f_1'";
    $r_17= mysql_query($r_16);
    
 }
?>
</fieldset>
<form action="product_management.php" method="POST">
<fieldset style= "width: 95%; background-color: #15317E; font-weight: bold; margin-top: -2%; margin-left: -.5%">
  <input type="hidden" name="ll_1" value="<?php echo "" . $f_1 . ""; ?>">
   <input type="submit" style="background-color: #fdeef4;font-weight: bold; cursor:pointer; width: 97%; margin-left: 3%" name="p_1" value="Show Current Order Form">
</fieldset>
</form>

   


<?php 
if($_POST['p_1'])
 {
  $f_k= $_POST['ll_1'];
  
  $f_3= "SELECT order_number FROM order_info WHERE IMEI_no= '$f_k'";
  $f_4= "SELECT customer_name FROM order_info WHERE IMEI_no= '$f_k'";
  $f_5= "SELECT e_mail FROM order_info WHERE IMEI_no= '$f_k'";
  $f_6= "SELECT contact_no FROM order_info WHERE IMEI_no= '$f_k'";
  $f_7= "SELECT brand_nam FROM order_info WHERE IMEI_no= '$f_k'";
  $f_8= "SELECT model_nam FROM order_info WHERE IMEI_no= '$f_k'";
  $f_9= "SELECT IMEI_no FROM order_info WHERE IMEI_no= '$f_k'";
  $f_10= "SELECT issue_date FROM order_info WHERE IMEI_no= '$f_k'";

 $f_12= mysql_query($f_3);
 $f_13= mysql_query($f_4);
 $f_14= mysql_query($f_5);
 $f_15= mysql_query($f_6);
 $f_16= mysql_query($f_7);
 $f_17= mysql_query($f_8);
 $f_18= mysql_query($f_9);
 $f_19= mysql_query($f_10);
?>
<fieldset id= "d_2" style= "width: 95%; background-color: #E6E6FA; font-weight: bold">


<ul>
  <li style= "text-align:left; width: 40%; float: left; position: relative; text-align: left; border: 0px; margin-left: 1%; background-color: #663399">Order Number: </li>
 <?php 


 while ($f_20= mysql_fetch_array($f_12)) 
 {
  ?>
    <li style= "text-decoration: none; display:inline; width: 55%; float:left; position: relative; text-align:left; border: 0px; margin-left: 1%; background-color: #663399"><?php echo "" . $f_20['order_number'] . ""; ?></li>
 <?php 
 }



?>
</ul>

<ul>

<li style= "text-align:left; width: 40%; float: left; position: relative; text-align: left; border: 0px; margin-left: 1%; background-color: #663399">Customer Name: </li>
<?php 
 while ($f_21= mysql_fetch_array($f_13)) 
 {
  ?>
    <li style= "text-decoration: none; display:inline; width: 55%; float:left; position: relative; text-align:left; border: 0px; margin-left: 1%; background-color: #663399"><?php echo "" . $f_21['customer_name'] . ""; ?></li>
 <?php 
 }

?>
</ul>

<ul>
<li style= "text-align:left; width: 40%; float: left; position: relative; text-align: left; border: 0px; margin-left: 1%; background-color: #663399">E-mail: </li>
<?php 
 while ($f_22= mysql_fetch_array($f_14)) 
 {
  ?>
    <li style= "text-decoration: none; display:inline; width: 55%; float:left; position: relative; text-align:left; border: 0px; margin-left: 1%;background-color: #663399"><?php echo "" . $f_22['e_mail'] . ""; ?></li>
 <?php 
 }

?>
</ul>

<ul>
  <li style= "text-align:left; width: 40%; float: left; position: relative; text-align: left; border: 0px; margin-left: 1%; background-color: #663399">Contact no: </li>
<?php 
while ($f_a= mysql_fetch_array($f_15)) 
{
 ?>
 <li style= "text-decoration: none; display:inline; width: 55%; float:left; position: relative; text-align:left; border: 0px; margin-left: 1%; background-color: #663399"><?php echo "" . $f_a['contact_no'] . ""; ?></li>
 <?php 
}

?> 
</ul>

<ul>
  <li style= "text-align:left; width: 40%; float: left; position: relative; text-align: left; border: 0px; margin-left: 1%; background-color: #663399">Brand Name</li>
<?php 
while ($f_b= mysql_fetch_array($f_16)) 
{
 ?>
 <li style= "text-decoration: none; display:inline; width: 55%; float:left; position: relative; text-align:left; border: 0px; margin-left: 1%; background-color: #663399"><?php echo "" . $f_b['brand_nam'] . ""; ?></li>
 <?php 
}

?> 
</ul>

<ul>
  <li style= "text-align:left; width: 40%; float: left; position: relative; text-align: left; border: 0px; margin-left: 1%; background-color: #663399">Model Name</li>
<?php 
while ($f_c= mysql_fetch_array($f_17)) 
{
 ?>
 <li style= "text-decoration: none; display:inline; width: 55%; float:left; position: relative; text-align:left; border: 0px; margin-left: 1%; background-color: #663399"><?php echo "" . $f_c['model_nam'] . ""; ?></li>
 <?php 
}

?> 
</ul>

<ul>
 <li style= "text-align:left; width: 40%; float: left; position: relative; text-align: left; border: 0px; margin-left: 1%; background-color: #663399">IMEI No</li>
<?php 
while ($f_d= mysql_fetch_array($f_18)) 
{
 ?>
 <li style= "text-decoration: none; display:inline; width: 55%; float:left; position: relative; text-align:left; border: 0px; margin-left: 1%; background-color: #663399"><?php echo "" . $f_d['IMEI_no'] . ""; ?></li>
 <?php 
}

?> 
</ul>


<ul>
  <li style= "text-align:left; width: 40%; float: left; position: relative; text-align: left; border: 0px; margin-left: 1%; background-color: #663399">Issue Date</li>
<?php 
while ($f_e= mysql_fetch_array($f_19)) 
{
 ?>
 <li style= "text-decoration: none; display:inline; width: 55%; float:left; position: relative; text-align:left; border: 0px; margin-left: 1%; background-color: #663399"><?php echo "" . $f_e['issue_date'] . ""; ?></li>
 <?php 
}

?>
</ul>

<script type="text/javascript">
  function print_div(s_i)
  {
    var printContents= document.getElementById(s_i).innerHTML;
    var originalContents= document.body.innerHTML;
    document.body.innerHTML= printContents;
    window.print();
    document.body.innerHTML= originalContents;
  }

</script>


</fieldset>
<fieldset style= "width: 95%; background-color: #666699; font-weight: bold;">
<input type="submit" style="font-weight: bold; cursor: pointer" onclick="print_div('d_2')" value="Print form">
</fieldset>
<?php
}
?>


<fieldset style= "width: 98%; border: 0px;  margin-left: -3%" id= "i_2">
<fieldset style= "width: 97%; color: white; background-color: #2B547E; font-weight: bold;">
<label style="font-weight: bold; font-size: 20px">Warranty Information</label><hr>


<form action="product_management.php" method="POST">
<table>
 <tr><td>Insert order number : </td><td><input type="text"  name="order_n"  required= "required" placeholder= "Order number"></td></tr>
 <tr><td>      </td><td></td></tr>
 <tr><td>      </td><td></td></tr>
 <tr><td>Customer name : </td><td><input type="text" name="w_customer_name"  required= "required" placeholder= "Customer name"></td></tr>
 <tr><td>      </td><td></td></tr>
 <tr><td>      </td><td></td></tr>
  <tr><td>Contact no : </td><td><input type="text"  name="w_contact_no"  required= "required" placeholder= "Contact number"></td></tr>
 <tr><td>      </td><td></td></tr>
 <tr><td>      </td><td></td></tr>
  <tr><td>E- mail : </td><td><input type="text" name="w_e_mail"  required= "required" placeholder= "E-mail"></td></tr>
 <tr><td>      </td><td></td></tr>
 <tr><td>      </td><td></td></tr>
 <tr><td>IMEI number : </td><td><input type="text" name="phone_imei"  required= "required" placeholder= "IMEI number"></td></tr>
 <tr><td>      </td><td></td></tr>
 <tr><td>      </td><td></td></tr>
 <tr><td>Warranty issue date : </td><td><input type="text" name="warranty_issue"  required= "required" placeholder= "Warranty Issue Date"></td></tr>
 <tr><td>      </td><td></td></tr>
 <tr><td>      </td><td></td></tr>
 <tr><td> <input type="submit" required= "required" style="background-color: #fdeef4;cursor: pointer; font-weight: bold; width: 4cm" name="submit_warranty" value="Submit Information"></td><td><input type="reset" style="background-color: #fdeef4;cursor: pointer; font-weight: bold; width: 4cm" name="submit_warranty_1" value="Cancel"></td></tr>
 </table>

</form>



<?php




if($_POST['submit_warranty'])
{
   $k_1= $_POST['order_n'];
  
   $k_2= $_POST['phone_imei'];

   $k_3= $_POST['warranty_issue'];

   $k_3_1= $_POST['w_customer_name'];
   $k_3_2= $_POST['w_contact_no'];
   $k_3_3= $_POST['w_e_mail'];

   $k_4= "SELECT IMEI_no FROM order_info WHERE order_number= '$k_1'";
   $k_5= mysql_query($k_4);
   while ($k_6= mysql_fetch_array($k_5)) 
   {
        $k_7= $k_6['IMEI_no'];
   }

   if($k_7== $k_2)
   {
       $k_8= $k_2;
    
   }
   else
   {
       echo "IMEI number does not match.";
   }
   
   $k_21= "SELECT brand_nam FROM order_info WHERE order_number= '$k_1'";
   $k_22= mysql_query($k_21);
   while ($k_23= mysql_fetch_array($k_22)) 
   {
        $k_24= $k_23['brand_nam'];
   }
   $k_25= "SELECT model_nam FROM order_info WHERE order_number= '$k_1'";
   $k_26= mysql_query($k_25);
   while ($k_27= mysql_fetch_array($k_26)) 
   {
        $k_28= $k_27['model_nam'];
   }
    $k_29= "SELECT issue_date FROM order_info WHERE order_number= '$k_1'";
   $k_30= mysql_query($k_29);
   while ($k_31= mysql_fetch_array($k_30)) 
   {
        $k_32= $k_31['issue_date'];
   }
  
$k_33= "INSERT INTO warranty_info(customer_name, order_no,   e_mail, contact_no, brand_nam, model_nam, IMEI_no, issue_date, sale_date) VALUES('$k_3_1', '$k_1', ' $k_3_3', '$k_3_2', '$k_24', '$k_28', '$k_8', '$k_3', '$k_32')";
$k_34= mysql_query($k_33);
}
?>
</fieldset>


<fieldset style= "width: 97%; background-color: #2B547E;  font-weight: bold">
<form action="product_management.php" method="POST">
<tr><td>      </td><td><input type="hidden" name="io" value="<?php  echo "" . $k_1 . "";?>"></td></tr>
 <tr><td>      </td><td></td></tr>
 <tr><td> <input type="submit" style="background-color: #fdeef4;cursor: pointer; font-weight: bold; width: 4cm" name="submit_3" value="Show Information"></td></tr>
</form>
</fieldset>


<?php 
if($_POST['submit_3'])
 {
  $m_n= $_POST['io'];
  $p_3= "SELECT warranty_no FROM warranty_info WHERE order_no= '$m_n'";
  $p_4= "SELECT customer_name FROM warranty_info WHERE order_no= '$m_n'";
  $p_5= "SELECT e_mail FROM warranty_info WHERE order_no= '$m_n'";
  $p_6= "SELECT contact_no FROM warranty_info WHERE order_no= '$m_n'";
  $p_7= "SELECT brand_nam FROM warranty_info WHERE order_no= '$m_n'";
  $p_8= "SELECT model_nam FROM warranty_info WHERE order_no= '$m_n'";
  $p_9= "SELECT IMEI_no FROM warranty_info WHERE order_no= '$m_n'";
  $p_10= "SELECT Issue_date FROM warranty_info WHERE order_no= '$m_n'";
  $p_11= "SELECT sale_date FROM warranty_info WHERE order_no= '$m_n'";
  $p_11_1= "SELECT current_status FROM warranty_info WHERE order_no= '$m_n'";

 $p_12= mysql_query($p_3);
 $p_13= mysql_query($p_4);
 $p_14= mysql_query($p_5);
 $p_15= mysql_query($p_6);
 $p_16= mysql_query($p_7);
 $p_17= mysql_query($p_8);
 $p_18= mysql_query($p_9);
 $p_19= mysql_query($p_10);
 $p_19_1= mysql_query($p_11);
 $p_19_2= mysql_query($p_11_1);

?>
<fieldset style= "width: 97%; background-color: lavender; font-weight: bold" id= "g_1">
<table>
  <tr><td style="text-align:left; width:5cm">Warranty Number: </td>
 <?php 


 while ($p_20= mysql_fetch_array($p_12)) 
 {
  ?>
    <td style="text-align:left; width:6cm"><?php echo "" . $p_20['warranty_no'] . ""; ?></td></tr>
 <?php 
 }

    echo "</table>";

?>
<table>

<tr><td style="text-align:left; width:5cm">Customer Name: </td>
<?php 
 while ($p_21= mysql_fetch_array($p_13)) 
 {
  ?>
    <td style="text-align:left; width:6cm"><?php echo "" . $p_21['customer_name'] . ""; ?></td></tr>
 <?php 
 }
echo "</table>";
?>

<table>
<tr><td style="text-align:left; width:5cm">E-mail: </td>
<?php 
 while ($p_22= mysql_fetch_array($p_14)) 
 {
  ?>
    <td style="text-align:left; width:6cm"><?php echo "" . $p_22['e_mail'] . ""; ?></td></tr>
 <?php 
 }
echo "</table>";
?>



<table>
  <tr><td style="text-align:left; width:5cm">Contact no: </td>
<?php 
while ($p_a= mysql_fetch_array($p_15)) 
{
 ?>
 <td style="text-align:left; width:6cm"><?php echo "" . $p_a['contact_no'] . ""; ?></td></tr>
 <?php 
}
echo "</table>";
?> 

<table>
  <tr><td style="text-align:left; width:5cm">Brand Name</td>
<?php 
while ($p_b= mysql_fetch_array($p_16)) 
{
 ?>
 <td style="text-align:left; width:6cm"><?php echo "" . $p_b['brand_nam'] . ""; ?></td></tr>
 <?php 
}
echo "</table>";
?> 

<table>
  <tr><td style="text-align:left; width:5cm">Model Name</td>
<?php 
while ($p_c= mysql_fetch_array($p_17)) 
{
 ?>
 <td style="text-align:left; width:6cm"><?php echo "" . $p_c['model_nam'] . ""; ?></td></tr>
 <?php 
}
echo "</table>";
?> 

<table>
  <tr><td style="text-align:left; width:5cm">IMEI No</td>
<?php 
while ($p_d= mysql_fetch_array($p_18)) 
{
 ?>
 <td style="text-align:left; width:6cm"><?php echo "" . $p_d['IMEI_no'] . ""; ?></td></tr>
 <?php 
}
echo "</table>";
?> 

<table>
  <tr><td style="text-align:left; width:5cm">Warranty Issue Date</td>
<?php 
while ($p_e= mysql_fetch_array($p_19)) 
{
 ?>
 <td style="text-align:left; width:6cm"><?php echo "" . $p_e['Issue_date'] . ""; ?></td></tr>
 <?php 
}
echo "</table>";
?>

<table>
  <tr><td style="text-align:left; width:5cm">Sale date</td>
<?php 
while ($p_f= mysql_fetch_array($p_19_1)) 
{
 ?>
 <td style="text-align:left; width:6cm"><?php echo "" . $p_f['sale_date'] . ""; ?></td></tr>
 <?php 
}
echo "</table>";
?>


<table>
  <tr><td style="text-align:left; width:5cm">Current status</td>
<?php 
while ($p_s= mysql_fetch_array($p_19_2)) 
{
 ?>
 <td style="text-align:left; width:6cm"><?php echo "" . $p_s['current_status'] . ""; ?></td></tr>
 <?php 
}
echo "</table>";

?>
<script type="text/javascript">
  function print_div(s_i)
  {
    var printContents= document.getElementById(s_i).innerHTML;
    var originalContents= document.body.innerHTML;
    document.body.innerHTML= printContents;
    window.print();
    document.body.innerHTML= originalContents;
  }

</script>

</fieldset>


<fieldset style= "width: 97%; border: 0px">
<input type="submit" style="font-weight: bold; cursor: pointer;" onclick="print_div('g_1')" value="Print form">
</fieldset>
<?php
} 
?>
</fieldset>

<fieldset style= "width: 97%; border: 0px; margin-left: 2%" id= "e_8">
<fieldset style= "width: 97%; color: white; background-color: #4863A0; font-weight: bold; margin-left: -4%">
<label style="font-weight: bold; font-size: 20px">Warranty status</label><hr>


<form action="product_management.php" method="POST">
<table>

 <tr><td style="width: 52%">Insert warranty number : </td><td style="width: 40%"><input type="text"  name="warr_num"  required= "required" placeholder= "Warranty number" style="47%"></td></tr>
 <tr><td style="width: 52%">      </td><td style="width: 40%"></td></tr>
 <tr><td style="width: 52%">      </td><td style="width: 40%"></td></tr>
  <tr><td style="width: 52%">  Status    </td><td style="width: 40%"></td></tr>
 <tr><td style="width: 52%">Pending</td><td style="width: 40%"><input type="radio"  name="current_status"  value="pending" ></td></tr>
 <tr><td style="width: 52%">      </td><td></td style="width: 40%"></tr>
  <tr><td style="width: 52%">Sent to service</td><td style="width: 40%"> <input type="radio"  name="current_status"  value="sent" ></td></tr>
 <tr><td style="width: 52%">      </td><td style="width: 40%"></td ></tr>
  <tr><td style="width: 52%">Recived</td><td style="width: 40%"><input type="radio"  name="current_status"  value="received" ></td></tr>
 <tr><td style="width: 52%">      </td><td style="width: 40%"></td></tr>
 <tr><td style="width: 52%">      </td><td style="width: 40%"></td></tr>
 <tr><td style="width: 52%"> <input  type="submit" style="background-color: #fdeef4;cursor: pointer; font-weight: bold" name="submit_4" value="Submit Information"></td><td style="width: 40%"><input type="reset" style="background-color: #fdeef4;cursor: pointer; font-weight: bold; width: 4cm" name="submit_info" value="Cancel"></td></tr>
</table>

</form>




<?php 

if($_POST['submit_4'])
{
  $m_1= $_POST['warr_num'];
  $m_2= $_POST['current_status'];
  $m_3= "UPDATE warranty_info SET current_status= '$m_2' WHERE warranty_no= '$m_1'";
  $m_4= mysql_query($m_3);
}


?>

</fieldset>
</fieldset>







</fieldset>
</fieldset>



<fieldset style= "width: 27%; margin-left: 69%; background-color: #ffe5b4; position: absolute" id= "y">

<fieldset style= "border: 0px; 90%" id= "t_4">

<?php
$p= mysql_connect("localhost", "root", "", "product_management");
$i= mysql_select_db(DB_NAME, $p);


$x_1= "SELECT name FROM brand_name";
$x_2= mysql_query($x_1);

?>
<form action="product_management.php" method="POST">
<fieldset style= "background-color: #646d7e; width: 90%">
<label style="font-size: 20px; font-weight: bold">Select a Brand</label><hr>
<select name="selection_1" style="background-color: #f0f8ff;cursor:pointer;color:black; font-weight: bold; width: 300px">

<?php 
while($x_3=  mysql_fetch_array($x_2))
{
?>
<option  value="<?php echo "" . $x_3['name'] . "";?>"><?php echo "" . $x_3['name'] . "";?></option>
<?php 
}
echo "</select>";
?>
<br><br><input type="submit" style="background-color: #E8E8E8; cursor:pointer; width: 200px; font-weight: bold" name="submit_5" value="Confirm">
</fieldset>
</form>




<?php
if($_POST['submit_5'])
{
$l_1= $_POST['selection_1'];
$l_2= "UPDATE count_1 SET brand= '$l_1' WHERE remaining_item= '1'";
$l_3= mysql_query($l_2);
$l_4= "SELECT brand FROM count_1 WHERE remaining_item= '1'";
$l_5= mysql_query($l_4);
while ($l_6= mysql_fetch_array($l_5)) 
{
  $l_7= $l_6['brand'];
}

$l_8= "SELECT model_name FROM $l_7";
$l_9= mysql_query($l_8);
}
?>

<form action="product_management.php" method="POST">
<fieldset style= "background-color: #646d7e; width: 90%">
<label style="font-weight: bold; font-size: 20px">Select a Model</label><hr>
<select name="selection_2" style="background-color: #f0f8ff;cursor:pointer; color:black; font-weight: bold; width: 300px">
<?php 
while ($l_10= mysql_fetch_array($l_9)) 
{
?>
<option value="<?php echo "" . $l_10['model_name'] . "";?>"><?php echo "" . $l_10['model_name'] . "";?></option>
<?php 
}
echo "</select>";
?>

<br><p >Add in Stock : </p><input type="text" style="background-color: #FDF5E6"  name="add_item" placeholder= "Add item">
<input type="submit" style="background-color: #9999FF; cursor:pointer; " name="submit_6" value="ok"><br><br><br>

<input type="submit" style="background-color: #9999FF; cursor:pointer; font-weight: bold" name="submit_7" value="Total Sold Item">
<input type="submit" style="background-color: #9999FF; cursor:pointer; font-weight: bold" name="submit_8" value="Current Stock"><br><br>

</form>

<?php 
if(isset($_POST["submit_6"]))
{
  $l_5= $_POST['selection_2'];
  $l_6= $_POST['add_item'];
  $l_7= "SELECT brand FROM count_1";
  $l_8= mysql_query($l_7);
  if($l_9= mysql_fetch_array($l_8))
  {
    $l_10= $l_9['brand'];
  }
    $l_11= "SELECT remaining_item FROM $l_10 WHERE model_name= '$l_5'";
    $l_12= mysql_query($l_11);
    while ($l_13= mysql_fetch_array($l_12)) 

    {
      $l_14= $l_13['remaining_item'];
    }
    $l_15= $l_14+ $l_6;
    $l_16= "UPDATE $l_10 SET remaining_item= '$l_15' WHERE model_name= '$l_5'";
    $l_17= mysql_query($l_16);
}

if(($_POST["submit_8"]))
{
  $l_18= $_POST['selection_2'];
  $l_19= "SELECT brand FROM count_1";
  $l_20= mysql_query($l_19);
  while ($l_21= mysql_fetch_array($l_20)) 

  {
    $l22= $l_21['brand'];
  }
  $l23= "SELECT remaining_item FROM $l22 WHERE model_name= '$l_18'";
  $l24= mysql_query($l23);
  while ($l25= mysql_fetch_array($l24)) 
  {
    $l26= $l25['remaining_item'];

  }
    echo "Current Stock is : ". $l26 . "";
}


if(($_POST['submit_7']))
{
  $l27= $_POST['selection_2'];
  $l28= "SELECT brand FROM count_1";
  $l29= mysql_query($l28);
  while ($l30= mysql_fetch_array($l29)) 
  {
    $l31= $l30['brand'];
  }
  $l32= "SELECT sold_item FROM $l31 WHERE model_name= '$l27'";
  $l33= mysql_query($l32);
  while ($l34= mysql_fetch_array($l33)) 

  {
       $l35= $l34['sold_item'];
  }
  echo "Total Sold item is : " . $l35. "";
}

?>

</fieldset>









<form action="product_management.php" method="POST">
<fieldset style= "background-color: #9999FF; width: 90%; font-weight: bold" id= "t_5">
<label style="text-align:center; color: #; font-weight: bold">Add new Brand</label><hr>

 <input type="text" style="width:300px; background-color: #FDF5E6" name="table_name"  required= "required" placeholder= "Brand name"> <br><br>
<input type="submit" style="background-color: #E8E8E8; cursor:pointer; width: 150px; font-weight: bold" name="submit_9" value="Confirm"><input type="reset" style="background-color: #E8E8E8; cursor:pointer; width: 150px; font-weight: bold" name="submit" value="Cancel"><br><br>

</form>
</fieldset>

<?php 
define('DB_USER', 'root');
define('DB_HOST', 'localhost');
define('DB_PASSWORD', '');
define('DB_NAME', 'product_management');

$p= mysql_connect("localhost", "root", "", "product_management");
$i= mysql_select_db(DB_NAME, $p);

if(isset($_POST['submit_9']))
{
$l= $_POST['table_name'];
$y_x= "INSERT INTO brand_name(name) VALUES ('$l')";
$u= mysql_query($y_x);
$t_t= "CREATE TABLE $l(model_name VARCHAR(40), remaining_item INT(40), sold_item INT(40))";
$uuu= mysql_query($t_t);
}
$t= "SELECT name FROM brand_name";
$r= mysql_query($t);

?>

<form action="product_management.php" method="POST" style="color: #993366; font-size: 17px">
<fieldset style= "width: 90%; background-color: #9999FF; color: #000000; font-weight: bold" >
<label>Brand list</label><br>
<hr>
<?php
while($t_1= mysql_fetch_array($r)) 
{
  $t_r= $t_1['name'];
  ?>
  <input type="radio" name="radi" value="<?php echo "" . $t_r . "";  ?>"><?php echo "" . $t_r . "";  ?><br>
  <?php 
}
?>
<br><br>
Add new Model
<hr>
<br><input type="text" name="add_model" style="width:300px; background-color: #FDF5E6" placeholder= "Model name"> <br><br><input type="submit"  style="background-color: #E8E8E8; cursor:pointer; width: 150px; font-weight: bold" name="submit_10" value="Confirm"><input type="reset"  style="background-color: #E8E8E8; cursor:pointer; width: 150px; font-weight: bold" name="sub_11" value="Cancel">
</fieldset>
</form>
<?php 
if($_POST['submit_10'])
{
$t_m= $_POST['radi'];

$t_n= $_POST['add_model'];
$t_2= "INSERT INTO $t_m(model_name) VALUES ('$t_n')";
$t_l= mysql_query($t_2);

}

?>
</fieldset>
</fieldset>
</fieldset>


</body>
</html>