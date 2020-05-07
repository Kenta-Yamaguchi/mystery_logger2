<?php $this->setLayoutVar('title', $user['name']) ?>

<img src="/user_images/<?php echo $user['image_name']; ?>" alt="プロフィール画像">

<h2><?php echo $this->escape($user['name']); ?></h2>

<a href="<?php echo $base_url; ?>/users/<?php echo $user['id']; ?>/followings"><?php echo $followings; ?>フォロー</a>
<a href="<?php echo $base_url; ?>/users/<?php echo $user['id']; ?>/followers"><?php echo $followers; ?>フォロワー</a>

<?php if (!is_null($following)) : ?>
  <?php if ($following) : ?>
    <form action="<?php echo $base_url; ?>/unfollow" method="post">
      <input type="hidden" name="_token" value="<?php echo $this->escape($_token); ?>">
      <input type="hidden" name="following_name" value="<?php echo $this->escape($user['name']) ?>">
      <input type="submit" value="フォロー解除する">
    </form>
  <?php else : ?>
    <form action="<?php echo $base_url; ?>/follow" method="post">
      <input type="hidden" name="_token" value="<?php echo $this->escape($_token); ?>">
      <input type="hidden" name="following_name" value="<?php echo $this->escape($user['name']) ?>">
      <input type="submit" value="フォローする">
    </form>
  <?php endif; ?>
<?php endif; ?>

<?php if (!is_null($editable)) : ?>
  <?php if ($editable) : ?>
    <p>
      <a href="<?php echo $base_url; ?>/users/edit">編集</a>
    </p>
  <?php endif; ?>
<?php endif; ?>

<div class="done-wanna-tab">
  <ul class="done-wanna-menu">
    <li><a href="#" class="done-wanna-active" data-id="done">行った</a></li>
    <li><a href="#" data-id="wanna">行きたい</a></li>
  </ul>

  <section class="done-wanna-contents done-wanna-active" id="done">
    <?php /* done公演
    <a href="<?php echo $base_url; ?>/users/<?php echo $user['id']; ?>/wanna">行きたい</a>
    <?php foreach ($dones as $performance) : ?>
      <?php echo $this->render('performances/performance', array('performance' => $performance)); ?>
    <?php endforeach; ?>
    */ ?>
  </section>
  
  <section class="done-wanna-contents" id="wanna">
    <?php /* wanna公演
    <a href="<?php echo $base_url; ?>/users/<?php echo $user['id']; ?>/done">行った</a>
    <?php foreach ($wannas as $performance) : ?>
      <?php echo $this->render('performances/performance', array('performance' => $performance)); ?>
    <?php endforeach; ?>
    */ ?>
  </section>
</div>


