<?php
/**
 * Showing up the text editor in front end
 *
 * @package Front_Editor
 * @author Froyo Story
 * @license MIT
 */
class Front_Editor
{
	
	/**
	 * Display the form
	 *
	 * @param $content : string - default content for the editor
	 * @param $editor_id : string - id of the editor
	 * @return void
	 */
	public static function showEditor($content = '', $editor_id = 'texteditor') {
		wp_editor($content, $editor_id);
	}
}