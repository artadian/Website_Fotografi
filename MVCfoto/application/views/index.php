<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="camera.png" />
<title>UP PHOTOGRAPHY</title>
<link href="<?php echo base_url();?>/a/css/desain.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript">
function clearText(field){

    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;

}
</script>
</head>
<link href="<?php echo base_url();?>/a/css/styles.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
<script src="<?php echo base_url();?>/a/js/jquery.wgslider.js" type="text/javascript"></script>
<body>
<div id="templatemo_container">
	<div id="templatemo_banner">
    	<div id="logo"></div>
        <!--  Free CSS Templates @ www.TemplateMo.com  -->
        <div id="search_section">
            <form action="#" method="get">
                <input type="text" value="Enter keyword here..." name="q" size="10" id="searchfield" title="searchfield" onfocus="clearText(this)" onblur="clearText(this)" />
              <input type="submit" name="Search" value="Search" alt="Search" id="searchbutton" title="Search" />
            </form>
        </div> 

    </div> <!-- end of banner -->
    
    <div id="templatemo_menu">
        <ul>
           <li><?php echo anchor('foto_controller/index','Home');?></li>
            <li><?php echo anchor('foto_controller/tampilberita','HOT NEWS');?></li>
            <li><?php echo anchor('foto_controller/tampilportofolio','Portofolio');?></li>
            <li><?php echo anchor('foto_controller/tampilharga','Price List');?></li>    
          		        
            <li><?php echo anchor('foto_controller/tampilcontact','Contact Us');?></li>	
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<table align="right"><tr><td>
			<?php echo anchor('foto_controller/loginadmin',' Login');?>
				
			</td></tr></table>
        </ul>   
	</div> <!-- end of menu -->

	<div id="templatemo_content_wrapper">
    	<div id="templatemo_content">
    
    	 <!-- end of a column -->
        
        <div class="column_w920">
		<div id="container">
	 <!-- Slideshow -->
        <div class="viewer">
                 <div class="paging">
                    <a href="#" rel="1">1</a>
                    <a href="#" rel="2">2</a>
                    <a href="#" rel="3">3</a>
                    <a href="#" rel="4">4</a>
                </div>
            <div class="slideimages">
                 <a href="#"><img src="<?php echo base_url();?>/images/slide-img-1.jpg" alt="" /></a>
                <a href="#"><img src="<?php echo base_url();?>/images/slide-img-2.jpg" alt="" /></a>
                <a href="#"><img src="<?php echo base_url();?>/images/slide-img-3.jpg" alt="" /></a>
                <a href="#"><img src="<?php echo base_url();?>/images/slide-img-4.jpg" alt="" /></a>
            </div>
        </div>
		<!-- END Slideshow -->
	</div>
		 </div>
		 
        <div class="column_w540	 fl vl_divider">
        	
            <img src="images/templatemo_image_01.jpg" alt="image" />
            
            <div class="header_01">Welcome to our photo site!</div>
            
            <p>This Is up Photography Website.</p>
            
	
		  <p>Kami Menyediakan Layanan jasa foto, mulai dari foto personal hingga foto wedding,, dengan harga tejangkaubekerja dengan profesional, kepuasan customer adalah prioritas kami..<br />
		So Capture your special moment with us</p>
        
        	<div class="cleaner"></div>        
        </div> <!-- end of a column -->
        
       <div class="column_w210 fl vl_divider" id="column_w920">
        
        	<div class="header_01">
            	Our Product
            </div>
            
	        <ul class="category_list">
           		<li><a href="#">Prewedding</a></li><br/>
                <li><a href="#">Personal</a></li><br/>
                <li><a href="#">Couple</a></li><br/>
                <li><a href="#">Baby</a></li><br/>
                <li><a href="#">Pas photo</a></li><br/>
                <li><a href="#">Year Book</a></li><br/>
                <li><a href="#">Liputan</a></li><br/>
    		</ul>
            
        
        	<div class="cleaner"></div>
        </div> <!-- end of a column -->
        
        <div class="margin_bottom_20 h_divider"></div>        
        <div class="margin_bottom_20"></div>
        
        
      
    
    	<div class="cleaner"></div>
	</div> <!-- end of wrapper 02 -->        
    </div> <!-- end of wrapper 01 -->
    
    <div id="templatemo_footer">
    
    <ul class="footer_list">
            <li><?php echo anchor('foto_controller/index','Home');?></li>
           <li><?php echo anchor('foto_controller/tampilberita','HOT NEWS');?></li>
            <li><?php echo anchor('foto_controller/tampilportofolio','Portofolio');?></li>
            <li><?php echo anchor('foto_controller/tampilharga','Price List');?></li>    
            <li><?php echo anchor('foto_controller/tampilbooking','Book Now');?></li>		        
            <li><?php echo anchor('foto_controller/tampil_contactus','Contact Us');?></li>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<table align="right"><tr><td>
			<?php echo anchor('foto_controller/loginadmin',' Login');?>
				
			</td></tr></table>
        </ul> 
        
        <div class="margin_bottom_10"></div>
        
        Copyright � 2013<a href="#">Arta Dian Wicaksana</a> | Designed by <a href="http://www.templatemo.com" target="_parent">Free CSS Templates</a>
        
        <div class="margin_bottom_10"></div>
        
       
   	</div> <!-- end of footer -->
</div> <!-- end of container -->
<!--  Free CSS Template is provided by www.TemplateMo.com  -->
</body>
</html>