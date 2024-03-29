<div id="page-wrapper"><div id="page">

  <div id="header" class="without-secondary-menu">
	<div class="section clearfix">

          <h1>
			<a href="/" title="Home" rel="home" id="logo">
			  <img src="<?php print $logo; ?>" alt="Home" />
			</a>
		</h1>
    
		<?php print render($page['header']); ?>    
		<?php print render($page['search_area']); ?>   
		<?php //echo getcwd(); //print $t.'__'  ?>   
	

	</div>
  </div> <!-- /.section, /#header -->
  
 
      <div id="main-menu" class="navigation">
	  
	   <?php if (isset($main_nav)): echo $main_nav; endif; ?>
	   
	  
      </div> <!-- /#main-menu -->
	   
		<div id="sub_menu" class="sub" >
		<?php if (isset($sub_menu))	echo render($sub_menu); ?>
		</div>
	  

	<?php if ($is_front):?> <!--если главная страница -->
     <!--<div id="featured"><div class="section clearfix">
        <div class="region region-featured"> 
    <div id="block-views-slider-block" class="block block-views">

    
  <div class="content">
		<div id="slider" class="view view-slider view-id-slider view-display-id-block view-dom-id-4baba895b1e3fa3f855ad67234b7841e">
	  <div id="slider-header">
		<h6 id="slide-title"></h6>
		<div id="slide-content">
		  <p id="slide-body"></p>
		  <a id="slide-link" href="#"></a>
		</div>
		
		<div id="slider-nav">
		  <div id="slider-pager"></div>
		  <div id="arrows">        
			<span class="arrow" id="link-next">next</span>
			<span class="arrow" id="link-prev">prev</span>
		  </div>
		</div>    
	  </div>

      <div class="view-content">
        <div class="views-row views-row-1 views-row-odd views-row-first">
      
			  <div class="views-field views-field-field-image">        <div class="field-content"><img typeof="foaf:Image" src="http://www.autism-insar.org/content/sites/default/files/slider/marquee04.jpg" width="1020" height="458" alt="" /></div>  </div>  
			  <div class="views-field views-field-title">        <span class="field-content">Next Generation</span>  </div>  
			  <div class="views-field views-field-body">        <div class="field-content"><p><span>Foster opportunities for leadership and career development for the next generation of ASD research.</span></p>
				</div>  </div>  
			  <div class="views-field views-field-field-link">        <div class="field-content"></div>  </div>  
		  </div>
		  <div class="views-row views-row-2 views-row-even">
			  
			  <div class="views-field views-field-field-image">        <div class="field-content"><img typeof="foaf:Image" src="http://www.autism-insar.org/content/sites/default/files/slider/marquee03.jpg" width="1020" height="458" alt="" /></div>  </div>  
			  <div class="views-field views-field-title">        <span class="field-content">Global Reach</span>  </div>  
			  <div class="views-field views-field-body">        <div class="field-content"><p><span>Expand the scope of activities to encompass global perspectives on ASD. </span></p>
			</div>  </div>  
			  <div class="views-field views-field-field-link">        <div class="field-content"></div>  </div> 
		  </div>
		  <div class="views-row views-row-3 views-row-odd">
			  
		  <div class="views-field views-field-field-image">        <div class="field-content"><img typeof="foaf:Image" src="http://www.autism-insar.org/content/sites/default/files/slider/marquee02.jpg" width="1020" height="458" alt="" /></div>  </div>  
		  <div class="views-field views-field-title">        <span class="field-content">Setting the Bar</span>  </div>  
		  <div class="views-field views-field-body">        <div class="field-content"><p><span>Promote and enhance the highest quality research.</span></p>
		</div>  </div>  
		  <div class="views-field views-field-field-link">        <div class="field-content"></div>  </div>  
		  </div>
		  
		  <div class="views-row views-row-4 views-row-even">
			  
			  <div class="views-field views-field-field-image">        <div class="field-content"><a href="http://www.autism-insar.org/sponsorship"><img typeof="foaf:Image" src="http://www.autism-insar.org/content/sites/default/files/slider/marquee01.jpg" width="1020" height="458" alt="" /></a></div>  </div>  
			  <div class="views-field views-field-title">        <span class="field-content">Expanding the Scope</span>  </div>  
			  <div class="views-field views-field-body">        <div class="field-content"><p><span>Cultivate cross-cutting breadth of research from basic science to service delivery that encompasses the range of ages and diversity of ASD.</span></p>
			</div>  </div>  
			  <div class="views-field views-field-field-link">        <div class="field-content"><a href="sponsorship ">Read more</a></div>  </div>  
		  </div>
		  <div class="views-row views-row-5 views-row-odd views-row-last">
			  
			  <div class="views-field views-field-field-image">        <div class="field-content"><a href="http://www.autism-insar.org/imfar-annual-meeting/imfar-2013"><img typeof="foaf:Image" src="http://www.autism-insar.org/content/sites/default/files/slider/spain.jpg" width="1020" height="459" alt="" /></a></div>  </div>  
			  <div class="views-field views-field-title">        <span class="field-content">IMFAR 2013</span>  </div>  
			  <div class="views-field views-field-body">        <div class="field-content"></div>  </div>  
			  <div class="views-field views-field-field-link">        <div class="field-content"><a href="imfar-annual-meeting/imfar-2013 ">Read more</a></div>  </div>  
		  </div>
			</div> 
			
			
  
</div>


  </div>
  
  
</div>
</div>
</div>
</div>-->

<?php endif;?>

  <div id="main-wrapper" class="clearfix"> 
 <?php print render($page['content']); ?>
 </div>

 <div id="footer-wrapper"><div class="section">
		
		<div id="footer-top" class="clearfix">
				  
		   
			<div class="bottom_menu">
				 <h2>Quick links </h2>
				<?php if (isset($bot_menu)) echo render($bot_menu); ?>
			</div>
			<div class="bottom_menu">
				<?php if (isset($bot_menu1)) echo render($bot_menu1); ?>
			</div>
			<div class="bottom_menu">
				<?php if (isset($bot_menu2)) echo render($bot_menu2); ?>
			</div>
			
			 <div class="bottom_menu_right">
			<h2>Public Relations</h2>
				<?php if (isset($bot_menu_public)) echo render($bot_menu_public); ?>
			</div>
			
			<div class="bottom_menu_right">
			<h2>Connect</h2>
				<?php if (isset($bot_menu_connect)) echo render($bot_menu_connect); ?>
			</div>
			 

		 </div>
				
			  </div> <!-- /#footer-top -->
			  
	  <div id="footer" class="clearfix">
	   <?php print render($page['footer']); ?>
	   </div>
		
  </div>
 </div> <!-- /.section, /#footer-wrapper -->

</div> <!-- /#page, /#page-wrapper -->