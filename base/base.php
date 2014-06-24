<?php
/**
 * A list of helpers related for the theme
 *
 * @package Base
 * @author Froyo Story
 * @license MIT
 */
class Base {

	/**
	 * Get link for a page by using its title
	 *
	 * @param $title : string - Title of the page that you want to display the link
	 * @return string - return a link
	 */
	public static function pageLinkByTitle($title) {
		$page = get_page_by_title($name);
  	return get_page_link($page->ID);
	}

}