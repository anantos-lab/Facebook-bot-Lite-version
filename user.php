<div class="panel-margin panel panel-default">
<div class="panel-body">
<div class="media">
  <div class="media-left">
    <a href="#">
      <img class="image media-object" src="https://graph.facebook.com/<?php echo user("id"); ?>/picture?type=normal" alt="Avatar">
    </a>
  </div>
  <div class="media-body">
    <h2 class="media-heading"> <?php echo user("name"); ?></h2>
    <h3 class="text"><?php echo user("id"); ?></h3>
    <?php if (user("verified")==1)
                {
                  echo '<span class="label label-success">Mobile Varified</span>';
                }
                else
                {
                echo '<span class="label label-default">Not Varified</span>';
                }?>
  </div>
</div>
</div>
</div>
  <div class="panel-margin">
  <div class="panel panel-default">
<div class="panel-heading">
  <h3 class="panel-title">Bot Configaration</h3>
</div>
<div class="panel-body">
   <a class="btn btn-warning" href="bot.php" role="button">Like Bot</a> <a class="btn btn-danger" href="comment.php" role="button">Comment Bot</a>
</div>
</div>
</div>

<ul class="panel-margin list-group">
<li class="text text-muted list-group-item list-group-item-default"><span class="glyphicon glyphicon-check text-success"></span> Like Feed Post Every Min.  </li>
<li class="text text-muted list-group-item list-group-item-default"><span class="glyphicon glyphicon-check text-success"></span> Like Feed Post/s Commnent. </li>
<li class="text text-muted list-group-item list-group-item-default"><span class="glyphicon glyphicon-check text-success"></span> Commnent Every Feed Post.  </li>
</ul>
