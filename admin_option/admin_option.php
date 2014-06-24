<?php
/**
 * Handle the collection of methods that relate to functionality of admin.
 * 
 * @package Froyo_Load
 * @author Froyo Story
 * @license MIT
 */
class Admin_Option
{
	/**
	 * Remove admin bar for specific roles
	 *
	 * @param $roles : string - wordpress roles (Contributor | Writer | Author | Admin)
	 * @return void
	 */
	public static function removeAdminBar($roles = 'Contributor') {
		$user = wp_get_current_user();

	  if (in_array('Contributor', $user->roles)) {
	    show_admin_bar(false);
	  }
	}

	/**
	 * Wrapper for register_sidebar() functions.
	 *
	 * @param $options : array - List of arguments. The arguments are same as in the wordpress codex.
	 * @return void
	 */
	public static function registerSidebar($options = array()) {
		// iterating list of arrays
		$sidebar = function($n) use ($options, &$sidebar) {
			if($n == 0) return true;
			
			$array_index = $n - 1;
			register_sidebar($options[$array_index]);	
			
			return $sidebar($n - 1); 
		};

		add_action( 'widgets_init', $sidebar(count($options)));
	}

	/**
	 * A wrapper for register_post_type
	 *
	 * @param $options : array - List of arguments. The arguments are same as in the wordpress codex.
	 * @return void
	 */
	public static function registerPostType($options = array()) {
		// iterating list of arrays
		$post_type = function($n) use ($options, &$post_type) {
			if($n == 0) return true;
			
			$array_index = $n - 1;
			register_post_type(strtolower($options[$array_index]['label']), $options[$array_index]);	
			
			return $post_type($n - 1); 
		};

		// To get permalinks to work when activate the theme
		$rewrite = function() {
			flush_rewrite_rules();
		};

		add_action('init', $post_type(count($options)));
		add_action('after_switch_theme', $rewrite());
	}
}