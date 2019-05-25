<div class="card w-50">
  <div class="card-body">
    <h5 class="card-title">Share something</h5>
    <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
        <div class="form-group">
            <label for="title">Share Title</label>
            <input type="text" name="title" class="form-control"/>
        </div>
        <div class="form-group">
            <label for="body">Share Body</label>
            <textarea name="body" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="link">Share Link</label>
            <input type="text" name="link" class="form-control"/>
        </div>
        <input class="btn btn-primary" type="submit" value="Add share" name="submit">
        <a href=" <?php echo ROOT_PATH; ?>shares" class="btn btn-danger">Cancel</a>
    </form>
  </div>
</div>
