<div >
    <?php if(isset($_SESSION['is_logged_in'])) : ?>
    <a href="<?php echo ROOT_PATH;?>shares/add" class="btn btn-success btn-share">Share something!</a>
    <?php endif; ?>
    <?php foreach ($viewmodel as $item) :?>
        <div class="card bg-light">
            <h3 class="card-header"><?php echo $item['title']?></h3>
            <p class="card-body"><?php echo $item['body']?></p>
            <a href="<?php echo $item['link']?>" class="btn btn-info" target="_blank">See more...</a>
            <p class="card-text text-right"><small class="text-muted"><?php echo $item['create_date']?></small></p>
        </div>
    <?php endforeach; ?>
</div>