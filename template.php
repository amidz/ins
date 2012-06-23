<?php
/**
 * Return a themed breadcrumb trail.
 *
 * @param $breadcrumb
 *   An array containing the breadcrumb links.
 * @return
 *   A string containing the breadcrumb output.
 */
/*
function theme_links(&$vars)
{
	$output = 'bla';
	return $output;
}
*/

function ins_preprocess_page(&$vars) {
  if (isset($vars['main_menu'])) {
    $vars['main_nav'] = theme('links__system_main_menu', array(
      'links' => $vars['main_menu'],
      'attributes' => array(
        'class' => array('links', 'clearfix'),
      ),
      'heading' => array(
        'text' => t('Main menu'),
        'level' => 'h2',
        'class' => array('element-invisible'),
      )
    ));
	
	
  }
  else {
    $vars['main_nav'] = FALSE;
  }
  
	//if ($vars['title'] =='About INSAR') {
	//if ($vars['is_admin']) {
	$title = drupal_get_title();
	switch ($title)
	{
		case 'About INSAR':
		case 'Committee ':
		case 'Autism Research':
		case 'Cultural Diveristy ':
			$menu = menu_tree('menu-about'); // переназначить!!!!! menu-about
		break;
		case 'Research Opportunities':
		case 'Membership Research':
		case 'In The News':
		case 'Training Programs':
			$menu = menu_tree('menu-research-opport');
			//$menu = menu_tree('menu-research-opportunities');
			
		break;
		case 'IMFAR 2013':
		case 'IMFAR 2012 ':
		case 'IMFAR 2012':
		case 'Slifka/Ritvo Awards':
		case 'IMFAR Meeting':
		case 'Special Interests':
		case 'Meeting Archives':
		
			$menu = menu_tree('menu-infar-annual'); // переназначить!!!!! //menu-infar-annual
		break;
		//default:
			//$menu = menu_tree('menu-about-sub');
	}
	/*
	if ($title =='About INSAR')
		$menu = menu_tree('menu-menu-item');
	//if ($title =='IMFAR 2013')
	else
		$menu = menu_tree('menu-about-sub');
	*/	
		$vars['sub_menu'] = $menu;
	
	$vars['t'] = $title;
	
	
	
  //}
  
  
  //////////////////////////////
  /*
  if (isset($vars['menu-bottom1-menu'])) {
    $vars['menu-bottom1-menu'] = theme('links__system_main_menu', array(
      'links' => $vars['main_menu'],
      'attributes' => array(
        'class' => array('links', 'clearfix'),
      ),
      'heading' => array(
        'text' => t('Main menu'),
        'level' => 'h2',
        'class' => array('element-invisible'),
      )
    ));
	
	
	}
*/
	//$vars['v'] = 'vvvv';
	
	$bmenu = menu_tree('menu-bottom1-menu');
	$vars['bot_menu'] = $bmenu;
	$bmenu1 = menu_tree('menu-bottom2-menu');
	$vars['bot_menu1'] = $bmenu1;
	$bmenu2 = menu_tree('menu-bottom3-menu');
	$vars['bot_menu2'] = $bmenu2;
	$bmenu_connect = menu_tree('menu-bottom-connect-menu');
	$vars['bot_menu_connect'] = $bmenu_connect;
	$bmenu_public = menu_tree('menu-bottom-public-menu');
	$vars['bot_menu_public'] = $bmenu_public;
	
  //////////////////////////////
 
}

 
function ins_breadcrumb($variables){
  $breadcrumb = $variables['breadcrumb'];
  if (!empty($breadcrumb)) {
    $breadcrumb[] = drupal_get_title();
    return '<div class="breadcrumb">' . implode(' <span class="breadcrumb-separator">/</span> ', $breadcrumb) . '</div>';
  }
}

/**
 * Override or insert variables into the html template.
 */
function ins_process_html(&$vars) {
  // Hook into color.module
  if (module_exists('color')) {
    _color_html_alter($vars);
  }
}

/**
 * Override or insert variables into the page template.
 */
function ins_process_page(&$variables) {
  // Hook into color.module.
  if (module_exists('color')) {
    _color_page_alter($variables);
  }
 
}

function ins_form_alter(&$form, &$form_state, $form_id) {
  if ($form_id == 'search_block_form') {
  
    unset($form['search_block_form']['#title']);
	
    $form['search_block_form']['#title_display'] = 'invisible';
	$form_default = t('Search');
    $form['search_block_form']['#default_value'] = $form_default;
    $form['actions']['submit'] = array('#type' => 'image_button', '#src' => base_path() . path_to_theme() . '/images/search_icon.png');

 	$form['search_block_form']['#attributes'] = array('onblur' => "if (this.value == '') {this.value = '{$form_default}';}", 'onfocus' => "if (this.value == '{$form_default}') {this.value = '';}" );
  }
  
}

/**
 * Add javascript files for jquery slideshow.
 */
if (theme_get_setting('slideshow_js','ins')):

	drupal_add_js(drupal_get_path('theme', 'ins') . '/js/jquery.cycle.all.min.js');
	
	//Initialize slideshow using theme settings
	$effect=theme_get_setting('slideshow_effect','ins');
	$effect_time=theme_get_setting('slideshow_effect_time','ins')*1000;
	
	//Defined the initial height (300) of slideshow and then the slideshow inherits the height of each slider item dynamically
	drupal_add_js('jQuery(document).ready(function($) {  
	
	$("#slideshow").cycle({
		fx:    "'.$effect.'",
		speed:  "slow",
		timeout: "'.$effect_time.'",
		pager:  "#slider-navigation",
		pagerAnchorBuilder: function(idx, slide) {
			return "#slider-navigation li:eq(" + (idx) + ") a";
		},
		height: 300,
		after: onAfter
	});
	
	function onAfter(curr, next, opts, fwd){
		var $ht = $(this).height();
		$(this).parent().animate({height: $ht});
	}
	
	});',
	array('type' => 'inline', 'scope' => 'header', 'weight' => 5)
	);

endif;

?>