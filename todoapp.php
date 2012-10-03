<?php

/*
Plugin Name: Wordpress Todo
Plugin URI: http://russchenmedia.nl
Description: This is a wordpress plugin that gives you the possibility to create a ToDo list.
Version: 0.1
Author: Martijn Russchen
Author URI: http://russchenmedia.nl
*/


define('TODO_FILE', __FILE__);
define('TODO_PATH', plugin_dir_path(__FILE__));

require TODO_PATH.'includes/Todo.php';

new Todo();



?>
