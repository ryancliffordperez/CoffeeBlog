<?php 

session_start();
$id = $_REQUEST['id'];

$blogs = simplexml_load_file("files/blogs.xml");

//create an iterator
$index = 0;
$i = 0;

foreach($blogs->blog as $blog){

//remove if the ID matches
	if($blog->id = $id){
		$index = $i;
		break;
	}
	$i++;
}


unset($blogs->blog[$index]);
file_put_contents('files/blogs.xml',$blogs->asXML());

$_SESSION['message'] = 'Blog Successfully Deleted';
header("location:index.php");


?>