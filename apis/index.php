<?php
	require 'vendor/autoload.php';
    $app = new \Slim\App;
    
    $app->get('/', function($req, $res){
            $res->write("I will the king of pirate!!!!");
            return $res;
        });
    $app->get('/sanji', function($req, $res){
        $res->write("I looking for allblues");
		return $res;
		});

	$app->get('/books/getbooks', function($req, $res){
		$result = array(
			array( "id" => "1", "title" => "Java Programming","author" => "Delter"),
			array("id" => "2", "title" => "Network Security","author" => "Chanankorn"),
	    );
	    $nres = $res->withJson($result);
	    return $nres;
	});

	$app->get('/books/getbook/{id}', function($req, $res){
	    $bookid = $req->getAttribute('id');
	    $result = array( "bookid" => $bookid);
	    $nres = $res->withJson($result);
	    return $nres;
	});

	$app->post('/books/search/', function($req, $res){
    	$keyword = $res->getParam('keyword');
    	$result = array("keyword" => $keyword);
    	$nres = $res->withJson($result);
    	return $nres;
	});

    $app->run();
