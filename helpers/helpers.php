<?php 

function title($file){
    $value = str_replace('.php', '', $file);
    return ucfirst($value);
}


function view($file, array|object $data = NULL) {
    return require 'views/'.$file.'.php';
}

/**
 * a page for making any request of pages
 *
 * @param string|integer $uri
 * @return void
 */
function URL(string|int $page) {

        return 'index.php?page='.$page;
}

function base_URL(string $page) {
    
    if ($page === '/') {

        return 'http://'.$_SERVER['HTTP_HOST'].'/'.ROOTDIR.$page;

    } elseif(str_contains($page, '#')) {

        return 'http://'.$_SERVER['HTTP_HOST'].'/'.ROOTDIR.'/'.$page;
        
    } else {

        return 'http://'.$_SERVER['HTTP_HOST'].'/'.ROOTDIR.'/'.'index.php?page='.$page;    
    }
}

/**
 * function for loading css|js|etc files
 *
 * @param string $file_location
 * @return void
 */
function assets(string $location) {

    if (file_exists('assets/'.$location)) {

        return 'assets/'.$location;

    } else {

        return $location;
    } 
}

/**
 * node_modules files
 *
 * @param string $file_location
 * @return void
 */
function modules(string $location) {

    if (file_exists('node_modules/'.$location)) {

        return 'node_modules/'.$location;

    } else {

        return $location;
    } 
}





?>