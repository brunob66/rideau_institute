<!-- PREVENT ACCESS -->

<?php 
	if(!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME'])) : 
		die('You can not access this page directly!'); 
	endif; 
?>

<!-- PASSWORD REQUIRED -->

<?php 
	if(!empty($post->post_password)) :
 		if($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) :
		endif;
	endif; 
?>

<!-- LIST COMMENTS -->

<?php if($comments) : ?>

<h5>Comments: </h5>


<ul>
  <?php foreach($comments as $comment) : ?>

  <?php if ($comment->comment_approved == '1') : ?>
  <p class="mt-3 mb-0 p-0"><?php comment_text(); ?></p>
  <p class="small mb-3">- <?php comment_type(); ?> by <?php comment_author_link(); ?> on <?php comment_date(); ?> at <?php comment_time(); ?></p>
  <?php endif; ?>

  <?php endforeach; ?>

</ul>

<?php else : ?>

<div class="col-md-9 py-4">No comments yet</div>

<?php endif; ?>


<!-- COMMENT FORM -->

<?php if(comments_open()) : ?>

  <h5>Leave a comment:</h5>
  <p>

  <?php if(get_option('comment_registration') && !$user_ID) : ?>

    <p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">logged in</a> to post a comment.</p>
    
  <?php else : ?>

    <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
      
      <?php if($user_ID) : ?>

       <p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. 
       <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Log out &raquo;</a></p>

      <?php else : ?>

        <div class="form-group col-md-9">
            <label for="author">Name <?php if($req) echo "*"; ?></label>
            <input type="text" name="author" id="author" class="form-control" value="<?php echo $comment_author; ?>" size="22" tabindex="1" />
        </div>
     
        <div class="form-group col-md-9">
          <label for="email" for="email">E-mail (will not be published) <?php if($req) echo "*"; ?></label>
          <input type="text" name="email" id="email" class="form-control" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" />
        </div>

        <div class="form-group col-md-9">
          <label for="url">Website</label>
          <input type="text" name="url" id="url" class="form-control" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
        </div>

      <?php endif; ?>

      <div class="form-group col-md-12">
      <label for="comment">Comment</label><br>
      <textarea name="comment" id="comment" cols="100%" rows="10" tabindex="4"></textarea>
      </div>

      <div class="col-md-9">
        <input name="submit" type="submit" id="submit" tabindex="5" class="btn btn-primary" value="Submit Comment" />
        <input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" /></p>
        <?php do_action('comment_form', $post->ID); ?>
      </div>


    </form>

  <?php endif; ?>

<?php else : ?>

  <p>The comments are closed.</p>

<?php endif; ?>