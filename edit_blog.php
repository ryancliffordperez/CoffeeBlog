<?php 

session_start();

if(isset($_REQUEST['edit_blog'])){

	$blogs = simplexml_load_file('files/blogs.xml');

	foreach($blogs->blog as $blog){

		if($blog->id == $_POST['blog_id']){
			$blog->title = $_POST['blog_title'];
			$blog->author = $_POST['blog_author'];
			$blog->date = $_POST['blog_date'];
			$blog->content = $_POST['blog_content'];
			break;
		} //end of if

	}//end of foreach

	file_put_contents('files/blogs.xml', $blogs->asXML());
	$_SESSION['message'] = "Blog Successfully Updated";
	header("location: index.php");

}//end of if isset
else {

	$_SESSION['message'] = "select blog to edit first";
	header("location: index.php");
}



?>