<?php 
	include_once('tiles/header.php');
	include_once('lib/dbconnect.php');
	
	if($_POST) {
		$query = sprintf("insert into posts (userid, topicid, message) values (%d, %d, '%s')",
				$_SESSION['userid'],
				intval($_POST['topicid']),
				mysql_real_escape_string($_POST['message']));
		// Perform Query
		$result = mysql_query($query);
		if (!$result) {
			$message  = 'Invalid query: ' . mysql_error() . "\n";
			$message .= 'Whole query: ' . $query;
			die($message);
		}
	}
?>	

<ol class="breadcrumb">
  <li><a href="index"><span class="glyphicon glyphicon-home"></span></a></li>
  <li><a href="forums">Forums</a></li>
</ol>
<?php
	$sql = "select t.topicid, t.name, count(*) total from topic t\n"
		    . "left join posts p on t.topicid = p.topicid\n";
	if($_REQUEST['id']) {
		$sql .=	"where t.topicid = ".$_REQUEST['id']."\n";
	}
	$sql .= "group by name LIMIT 0, 30";
	
	$result = mysql_query($sql);

while ($row = mysql_fetch_assoc($result)) { ?>
<div class="panel panel-primary">
	<!-- Default panel contents -->
	<div class="panel-heading">
		<a class="txtWht" href="forums?id=<?= $row['topicid'] ?>"><?= $row['name'] ?></a>
		<span class="badge pull-right"><?= $row['total'] ?></span>
		
	</div>
	<ul class="list-group">
	<?php
		$posts_sql = "select p.postid, p.message, p.time, p.topicid, p.userid , l.username\n"
		    . "from (topic t join posts p\n"
		    . "on t.topicid = p.topicid)\n"
		    . "inner join login l on p.userid = l.userid\n"
			. "where t.topicid = ".$row['topicid']."\n"
		    . "order by name LIMIT 0, 30 ";
		$posts = mysql_query($posts_sql);
		while ($post = mysql_fetch_assoc($posts)) { ?>
			<!-- List group -->
			<li data-target="#" class="list-group-item clickable">
				<p><?= $post['message'] ?></p>
				<span>Posted by <a href="#"><?= $post['username'] ?></a> <?= date("M j, Y, g:i a", strtotime($post['time'])) ?></span>
			</li>
	<?php } ?>
	<li data-target="#" class="list-group-item">
		
		<button type="button" class="btn btn-default btnNewPost" data-topicid="<?= $row['topicid'] ?>">
		  <span class="glyphicon glyphicon-plus"></span> New Post
		</button>
	</li>
	</ul>
</div>
<?php } ?>

<div id="myModal" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
    <form method="post">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">New Post</h4>
      </div>
      <div class="modal-body">
      	<input type="hidden" id="inputTopicid" name="topicid" />
        <textarea class="form-control" name="message" rows="5" placeholder="Message Content"></textarea>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
      </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<?php include_once('tiles/footer.php'); ?>