<?php
\Core\View::render('parts/header.php', ['title' => 'Create posts']);
?>
<div class="container">
    <div class="row">
        <div class="col-sm-12 d-flex flex-md-column align-content-center align-self-center">
            <h1 class="display-4">Create Post Form</h1>
            <form method="POST" action="/posts/show">
                <div class="form-group">
                    <label for="postTitle">Title</label>
                    <input type="text" class="form-control" name="title" id="postTitle" placeholder="Post title">
                </div>
                <div class="form-group">
                    <label for="postContent">Content</label>
                    <textarea name="content" id="postContent" class="form-control" cols="30" rows="10"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Create Post</button>
            </form>
        </div>
    </div>
</div>
<?php
\Core\View::render('parts/footer.php');

