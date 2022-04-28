<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Full XML and PHP Lesson</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">

</head>
<body>
<div class="container">
    <h1 class="page-header text-center"> Coffee Blog Management</h1>
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
        <a href="#addnew" class="btn btn-primary" data-toggle="modal"><span class="glyphicon glyphicon-plus"></span> New Blog</a>
        <a href="coffee-blog/index.php#blog" class="btn btn-light" target="_blank"> View Website</a>   


            <table class="table table-sm table-striped table-condensed" style="margin-top:20px;">
                <thead class="table-dark">
                    <th scope="col">Blog ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Author</th>
                    <th scope="col">Date Published</th>
                    <th scope="col">Content</th>
                    <th scope="col">Action</th>
                </thead>
                <tbody>
                        <tr>
                            <td>1001</td>
                            <td>Blog Title</td>
                            <td>Ryan</td>
                            <td>April 28, 2022</td>
                            <td>read more...</td>
                            <td>
                                <a href="#edit_" data-toggle="modal" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-edit"></span></a>
                                <a href="#delete_" data-toggle="modal" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></a>
                            </td>

                        </tr>
                        

                </tbody>
                <tfoot>
                    <th scope="col">Blog ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Author</th>
                    <th scope="col">Date Published</th>
                    <th scope="col">Content</th>
                    <th scope="col">Action</th>                        
                </tfoot>
            </table>
        

    </div>
    </div>
</div>


<script src="bootstrap/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>


</body>
</html>