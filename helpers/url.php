<?php // arquivo helpers serve para da apoio para linkar arquivos e imagens ou se materiais para ser ultilizados

$BASE_URL = "http://" . $_SERVER['SERVER_NAME'] . dirname($_SERVER['REQUEST_URI']. '?') . '/';

// // será no caso como se fosse uma  constante no sistema e um concat( . )
// $BASE_URL = "http://" .

// //  aqui no caso ira fornecer o LOCALHOST e um concat( . )
// $_SERVER['SERVER_NAME'] .

// // o dirname vai chamar o server request e concat( . ) formando a BASEURL
//  dirname($_SERVER['REQUEST_URI']. '?') . '/';