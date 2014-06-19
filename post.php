<?php $this->need('header.php'); ?>
<div id="iMain" class="post-page"> 
<div class="container">
<div class="sep10"></div>
    <article class="post">
<?php if (isset($this->fields->bg)): ?><img width="100%" id="post-img" src="<?php $this->fields->bg(); ?>"><?php endif;?>
<div class="sep20"></div>
<div class="post-head">

        <h2 class="title" style="font-size:32px"><?php $this->title() ?></h2>
<div class="sep10"></div>
   <div class="post-meta" style="color:#9d9e9f">
<span>塞塔</span> · 
<?php echo timeSince($this->created) ?>
<span>发表在 <?php $this->category(); ?></span>  
</div>
</div>
        <div class="post-content">
            <?php $this->content(); ?>
        </div>

       <span class="tag"><?php $this->date('F j, Y'); ?></span>
<span class="fr">
<a class="tag" href="javascript:void((function(s,d,e){try{}catch(e){}var f='http://v.t.sina.com.cn/share/share.php?',u=d.location.href,p=['url=',e(u),'&title=【',e(d.title),'】<?php $this->excerpt(100, '...'); ?>','&appkey=2924220432'].join('');function a(){if(!window.open([f,p].join(''),'mb',['toolbar=0,status=0,resizable=1,width=620,height=450,left=',(s.width-620)/2,',top=',(s.height-450)/2].join('')))u.href=[f,p].join('');};if(/Firefox/.test(navigator.userAgent)){setTimeout(a,0)}else{a()}})(screen,document,encodeURIComponent));">微博</a>
<a  class="tag" href="javascript:void(0);" onclick="window.open('http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?url='+encodeURIComponent(document.location.href));return false;">空间</a>
</span>
    </article>
<!--<div class="support">

</div>-->
<div class="sep20"></div>
<div class="pagenav">
<?php thePrev($this); ?> <?php theNext($this); ?>
</div>
<div id="comments">
    <div id="disqus_thread"></div>
    <script type="text/javascript">
        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
        var disqus_shortname = 'seitazen'; // required: replace example with your forum shortname

        /* * * DON'T EDIT BELOW THIS LINE * * */
        (function() {
            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
    <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
</div>
<?php $this->need('sidebar.php'); ?>
</div>
</div>



<?php $this->need('footer.php'); ?>
