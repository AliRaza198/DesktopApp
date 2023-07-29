<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>| Stefan Schramm | root studio |</title>
<link href="../css.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="div" id="centercontainer">
  <div class="div" id="headcontainer">
    <p align="right"><span class="language"><a href="#" class="active">deutsch</a></span> <span class="language">&#8226;</span> <span class="language"><a href="#">englisch</a></span>
      <img src="../layout/root_header.jpg" alt="" width="640" /></p>
    <div class="div" id="navi">	
<ul>
			<li><a href="../index.htm">Home</a></li>
			<li><a href="../en/diskografie_en.htm">Projects</a></li>
			<li><a href="../en/biografie_en.htm">Biography</a></li>
			<li><a href="../en/kontakt_en.htm"><strong>Contact</strong></a></li>
	  </ul>
		  
    </div>
  </div>
  <div class="div" id="subnavi">
  
  <div class="div" id="subnavi">
  <ul>
  	  <li>Stefan Schramm </li>
  	  <li>Johann-Biersack-Str. 27a</li>
	  <li>D-82340 Feldafing </li>
	  <li>&nbsp;</li>
	  <li>Tel. +49 (0)8157 92 57 29</li>
  </ul>
  
  
    </div>
  
  </div>
  <div class="div" id="content">
  	  	<p class="headlinenolist">Contact </p>
	    <p>
	<p align="center">&nbsp;</p>
	<p align="center">&nbsp;</p>
	<p align="center">&nbsp;</p>
	<p align="center">&nbsp;</p>
	<p align="center">&nbsp;</p>
	<div align="center"><span class="content">
	    <?php 

if(isset($_POST['submit'])) { 

$to = "info@root-studio.com"; 

$subject = "Form posted from root studio contact"; 

$product_field = $_POST['product']; 

$comments_field = $_POST['comments']; 

$email_field = $_POST['email']; 


$body = "
Comment: $comments_field
Email: $email_field";


echo "Thank you for your message."; 

mail($to, $subject, $body);

} else { 

echo "Error: Transfer failed (unknown error). Please mail your comments to info@root-studio.com";
} 

?>
		  </span></div>
		</p>
	    
	<p>&nbsp;</p><p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
  </div>
      
  <div class="div" id="footercontainer">
    <div align="right"><span class="footer">root studio &#8226; Stefan Schramm &#8226; Johann-Biersack-Str. 27a &#8226; 82340 Feldafing &#8226; Germany</span></div>
  </div>
</div>
</body>
</html>
