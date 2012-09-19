<?php

/**
 * Standard routes. Change to what you really need.
 */
dispatch('/', 'index');

dispatch('/home', 'index'); // example

dispatch('/:doc', 'open_doc');
dispatch_post('/new', 'post_function'); 

/**
 * This should be the last route definition
 */
dispatch('/**', 'index_catchall'); 

/**
 * Function is called before every route is sent to his handler.
 */
function before_route($route) {
   
}

/**
 * Function is called before output is sent to browser.
 */
function after_route($output) {
  return $output;
}

