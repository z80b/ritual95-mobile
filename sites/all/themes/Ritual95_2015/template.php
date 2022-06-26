<?php
function Ritual95new_preprocess_node(&$vars, $hook) {
    $vars['node_blocks'] = theme('blocks', 'node_blocks');
}

function Ritual95new_taxonomy_term_page($tids, $result) {
    //die('<pre>'.print_r($result, true).'</pre>');
    // Only display the description if we have a single term, to avoid clutter and confusion.
    $output = '<div class="group-page clear-block">';

    if (count($tids) == 1) {
        $term = taxonomy_get_term($tids[0]);
        $description = $term->description;

        if (!empty($term->name)) {
            $output .= '<h1 class="page-title">';
            $output .= $term->name;
            $output .= '</h1>';
        }

        $output .= '<div class="content clear-block">';

        // Check that a description is set.
        if (!empty($description)) {
            $output .= '<h1>!!!!</h1>';
            $output .= '<div class="taxonomy-term-description">';
            $output .= filter_xss_admin($description);
            $output .= '</div>';
        }

        $output .= taxonomy_render_nodes($result);
        $output .= '</div>';
    }



    return $output . '</div>';
}

function phptemplate_get_menu($name = 'primary-links', $depth = 1, $mode = 'ul', $separator = false) {
    $output = '';
    $plid = db_result(db_query(
        "SELECT `plid` FROM {menu_links} WHERE `menu_name`='%s' AND `link_path`='%s' AND NOT `hidden` AND `depth`=%d ORDER BY `weight`",
        $name, drupal_get_normal_path($_GET['q']), $depth
    ));
    if (!$plid) $plid = 0;
    $rs = db_query(
        "SELECT * FROM {menu_links} WHERE `menu_name`='%s' AND `plid`=%d AND `depth`=%d AND NOT `hidden` ORDER BY `weight`",
        $name, $plid, $depth
    );
    while ($link = db_fetch_object($rs)) {
        if(strlen($link->link_title)>32)
            $class='double';
        else
            $class='single';

        $options = array (
            'attributes' => array (
                'title' => $link->link_title,
                'class' => $class,
            ),
            //'absolute' => true,
        );
        if($separator)
            $output .= '<li><span class="gold separator"></span></li>';

        if($mode=='table')
            $output .= '<td>'. l($link->link_title, $link->link_path, $options) .'</td>';
        else
            $output .= '<li>'. l($link->link_title, $link->link_path, $options) .'</li>';
    }
    if ($output) {
        if($mode=='table')
            return '<table><tr>' . $output . '</tr></table>';
        else
            return '<ul>' . $output . '</ul>';
    } else return '';
}
/**
 * Sets the body-tag class attribute.
 *
 * Adds 'sidebar-left', 'sidebar-right' or 'sidebars' classes as needed.
 */
function phptemplate_body_class($left, $right) {
  if ($left != '' && $right != '') {
    $class = 'sidebars';
  }
  else {
    if ($left != '') {
      $class = 'sidebar-left';
    }
    if ($right != '') {
      $class = 'sidebar-right';
    }
  }

  if (isset($class)) {
    print ' class="'. $class .'"';
  }
}

/**
 * Return a themed breadcrumb trail.
 *
 * @param $breadcrumb
 *   An array containing the breadcrumb links.
 * @return a string containing the breadcrumb output.
 */
function phptemplate_breadcrumb($breadcrumb) {
  if (!empty($breadcrumb)) {
    return '<div class="breadcrumb">'. implode(' › ', $breadcrumb) .'</div>';
  }
}

/**
 * Override or insert PHPTemplate variables into the templates.
 */
function phptemplate_preprocess_page(&$vars) {
  // // $vars['head'] = '<title>!!!!</title>';
  // print('<pre>');
  // var_dump(current($vars['node']->taxonomy)->description);
  // print('</pre>');
  // die();
  $node = $vars['node'];
  $term = $vars['term'];
  $mainTitle = "ООО Ритуал-95";
  if ($vars['title'] == $node->title) {
    $title = $node->title;
  } else {
    $title = $vars['title'];
  }
  $logo = "/sites/default/files/blogbuzz_logo.png";
  $image = $node->product_image_url ? $node->product_image_alt : $logo;
  $teaser = $node->teaser
    ? strip_tags(preg_replace('/\s{2,}/', '', $node->teaser))
    : ($node->body
      ? strip_tags(preg_replace('/\s{2,}/', '', $node->body))
      : 'В каталоге продукции вы можете выбрать памятник, наши специалисты ответят на все возникшие вопросы, связанные с оформлением фотографии и эпитафии, а также  помогут с организацией доставки и установки .');
  $vars['meta'] .= "<meta http-equiv=\"Cache-Control\" content=\"max-age=360000, must-revalidate\"\n/>";
  $vars['meta'] .= "<meta name=\"robots\" content=\"index, follow\"/>\n";
  $vars['meta'] .= "<meta property=\"title\" content=\"$title | $mainTitle\"/>\n";
  $vars['meta'] .= "<meta property=\"description\" content=\"$teaser\"/>\n";
  $vars['meta'] .= "<meta name=\"keywords\" content=\"заказать памятник на могилу, заказать памятник на могилу в Сергиевом-Посаде, изготовление памятников в Сегиевом-Посаде, памятники из гранита, памятники из гранитопласта, памятники из полимергранита, памятники из мрамора, памятники и надгробия недорого, ограды на могилу, вазы на могилу, цветники на могилу, установка памятников, венки на могилу\"/>\n";
  $vars['meta'] .= "<meta name=\"mrc__share_title\" content=\"$title | $mainTitle\">\n";
  $vars['meta'] .= "<link rel=\"image_src\" href=\"$image\"/>\n";
	
	$og_url = implode('', array(
		'https://',
		$_SERVER['HTTP_HOST'],
		$_SERVER['REQUEST_URI'],
	));

	$vars['meta'] .= "<meta property=\"og:url\" content=\"$og_url\"/>\n";

  $vars['meta'] .= "<meta property=\"og:locale\" content=\"ru_RU\"/>\n";
  $vars['meta'] .= "<meta property=\"og:type\" content=\"website\"/>\n";
  $vars['meta'] .= "<meta property=\"og:site_name\" content=\"$mainTitle\"/>\n";
  $vars['meta'] .= "<meta property=\"og:image\" content=\"//ritual95.ru$image\"/>\n";
  $vars['meta'] .= "<meta property=\"og:image:width\" content=\"170\"/\n>";
  $vars['meta'] .= "<meta property=\"og:image:height\" content=\"200\"/\n>";
  $vars['meta'] .= "<meta property=\"og:title\" content=\"$title | $mainTitle\"/>\n";
  $vars['meta'] .= "<meta property=\"og:description\" content=\"$teaser\"/>\n";
  $vars['meta'] .= "<link rel=\"image_src\" href=\"$image\"\n/>";



//die('<pre>'.print_r($head, true).'</pre>');
  $theme_path = drupal_get_path('theme', 'Ritual95new');

  drupal_add_js("$theme_path/theme.js");

  $vars['phones_select'] = draw_phone_select();
  $vars['tabs2'] = menu_secondary_local_tasks();
  $vars['theme_imgs_path'] = path_to_theme() .'/imgs';
  // Hook into color.module
  if (module_exists('color')) {
  _color_page_alter($vars);
  }
}

/**
 * Add a "Comments" heading above comments except on forum pages.
 */
function garland_preprocess_comment_wrapper(&$vars) {
  if ($vars['content'] && $vars['node']->type != 'forum') {
    $vars['content'] = '<h2 class="comments">'. t('Comments') .'</h2>'.  $vars['content'];
  }
}

/**
 * Returns the rendered local tasks. The default implementation renders
 * them as tabs. Overridden to split the secondary tasks.
 *
 * @ingroup themeable
 */
function phptemplate_menu_local_tasks() {
  return menu_primary_local_tasks();
}

/**
 * Returns the themed submitted-by string for the comment.
 */
function phptemplate_comment_submitted($comment) {
  return t('!datetime — !username',
    array(
      '!username' => theme('username', $comment),
      '!datetime' => format_date($comment->timestamp)
    ));
}

/**
 * Returns the themed submitted-by string for the node.
 */
function phptemplate_node_submitted($node) {
  return t('!datetime — !username',
    array(
      '!username' => theme('username', $node),
      '!datetime' => format_date($node->created),
    ));
}

/**
 * Generates IE CSS links for LTR and RTL languages.
 */
function phptemplate_get_ie_styles() {
  global $language;

  $iecss = '<link type="text/css" rel="stylesheet" media="all" href="'. base_path() . path_to_theme() .'/fix-ie.css" />';
  if ($language->direction == LANGUAGE_RTL) {
    $iecss .= '<style type="text/css" media="all">@import "'. base_path() . path_to_theme() .'/fix-ie-rtl.css";</style>';
  }

  return $iecss;
}



function draw_phone_select() {
    $output = '<div class="phones-block"><label for="phones-select">'.t('МЫ РЯДОМ').':</label><select id="phones-select" class="phones">';
    $rs = db_query("SELECT `nid` FROM {node} WHERE `type`='phone' ORDER BY `title`");
    while ($nid = db_result($rs)) {
        $node = node_load($nid);
        $output .= '<option value="'. $nid .'"'. (($node->sticky)?' selected="selected"':'') .'>'. $node->title . '</option>';
    }
    return $output . '</select></div>';
}

function draw_phone_dialog() {
    $output = '<div class="b-popup" style="display: none"><div class="b-popup-content"><button class="close">✖</button><h1>Телефоны для связи</h1>';
    $rs = db_query("SELECT `nid` FROM {node} WHERE `type`='phone' ORDER BY `title`");
    while ($nid = db_result($rs)) {
        $node = node_load($nid);
        $output .= '<div class="phones-dialog-block">'. $node->teaser .'</div>';
    }
    return $output . '<div class="b-popup-controls"><label for="show_phones" class="show_phones_switch"><input id="show_phones" type="checkbox" checked="checked" /><span>Показывать телефоны при входе на сайт</span></label></div></div></div>';
}



function randomize_on_main() {
    $output = '';
    $rs = db_query("SELECT `nid` FROM {node} WHERE `type`='product' ORDER BY RAND() LIMIT 4");
    while ($nid = db_result($rs)) {
        $node = node_load($nid);
        $output .= '
			<div class="element">
				<div class="element_wrapper">
					<a href="'.$node->path.'" class="element_title">'.$node->title.'</a>
					<a href="'.$node->path.'" class="element_photo">'.$node->product_thumb.'<span class="sale"></span></a>
          <div class="element_price">
            <span style="color:red">цену можно уточнить у менеджера</span>
          </div>
					<a href="'.$node->path.'" class="element_detaillink">Смотреть подробнее</a>
				</div>
			</div>
        ';
        /*
					<div class="element_price">Цена: ';
					if ($node->product_minprice && $node->product_minprice > 0)
            $output .= 'от '.intval($node->product_minprice).' Руб.';
					$output .= '</div>        
        */
    }
    return $output;
}