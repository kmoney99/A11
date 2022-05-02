<div class="container"> 
<link rel="stylesheet" type="text/css" href="http://bootswatch.com/cerulean/bootstrap.min.css">
        <h1>Forum Post</h1>
        
<?php foreach($forums as $forum) : ?>

        <div class="well">
                <h3><?php echo $post['question']; ?></h3>
                <small>Created on <?php echo $post['created_at']; ?> by <?php echo $post['name']; ?></small>
                <p><?php echo $post['discussion']; ?></p>
        </div>

<?php endforeach; ?>

</div>

