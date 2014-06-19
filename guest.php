<?php
/**
 * 自定义关于模板
 *
 * @package custom
 */
 $this->need('header.php'); ?>
<style>
.guest{background-color:#F6F6EF;}
</style>
<div id="iMain">
<div class="container">

<?php $this->content(); ?>
    <article class="post">
        
        <div class="post-content">
           
        </div>
    </article>
 </div>
</div><!-- end #main-->

<?php $this->need('footer.php'); ?>

   
    