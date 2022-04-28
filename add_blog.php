<?php

session_start();

//check if the button is clicked
if(isset($_REQUEST['publish'])){

	//open xml file
	$blogs = simplexml_load_file('files/blogs.xml');

	//prepare all the tags and data
	$blog = $blogs->addChild('blog');

	$blog->addChild('id', $_REQUEST['blog_id']);
	$blog->addChild('title', $_REQUEST['blog_title']);
	$blog->addChild('author', $_REQUEST['blog_author']);
	$blog->addChild('date', $_REQUEST['blog_date']);
	$blog->addChild('content', $_REQUEST['blog_content']);

	//save the data
	$dom = new DomDocument();
	$dom->preserveWhiteSpace = false;
	$dom->formatOutput = true;
	$dom->loadXML($blogs->asXML());
	$dom->save('files/blogs.xml');

	//send a message to index
	$_SESSION['message'] = "Blog Successfully Posted";
	header("location: index.php");

} else {

	$_SESSION['message'] = "Fill up the form properly";
	header("location:index.php");
}


?>