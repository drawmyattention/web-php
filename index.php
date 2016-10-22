<?php

require __DIR__.'/autoloader.php';

/*
   The date of prepend.inc represents the age of ALL
   included files. Please touch it if you modify any
   other include file (and the modification affects
   the display of the index page). The cost of stat'ing
   them all is prohibitive. 
*/

// These are the only dynamic parts of the frontpage
$modifiableFiles = array(
    'index.php',
    'include/prepend.inc',
    'include/pregen-confs.inc',
    'include/pregen-news.inc',
    'include/version.inc',
    'include/js/common.js',
    'lib/Template/View.php',
);


$timestamp = max(array_map(function ($file) {
    return (new \File\LastModified($file))->modifiedAt();
}, $modifiableFiles));

//$header = new \Header\LastModifiedChecker($timestamp);

//$header->setLastModifiedHeader();

$_SERVER['BASE_PAGE'] = 'index.php';



$template = new Template\View('homepage');
$template->render();

