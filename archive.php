<?php $this->need('header.php'); ?>

  <div id="iMain">
<div class="container list">
<div class="sep10"></div>
	<?php while($this->next()): ?>
        <a href="<?php $this->permalink() ?>" style="text-decoration:none;color:#fff" class="home-cover">
 <article class="post">
		 <h2 class="title"><?php $this->title() ?></h2>
				
				<div class="post-meta">

<?php if(time()-$this->created>=86400*30) $this->date('F j, Y'); else echo timeSince($this->created) ?>
		
      </div>   
<div class="title-img" <?php if (isset($this->fields->bg)): ?>style="background-image:url(<?php $this->fields->bg(); ?>)"<?php endif; ?>></div>
        </article>
</a>

<div class="sep20"></div>
<div class="sep20"></div>
	<?php endwhile; ?>
   <nav class="pagenav">
<?php $this->pageLink('下一页 →','prev'); ?>
				<?php $this->pageLink('← 上一页','next'); ?>
</nav>
<?php $this->need('sidebar.php'); ?>
</div>

</div>
	<?php $this->need('footer.php'); ?>
