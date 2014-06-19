<!--
http://seita.me/guzi.txt See, I do have not given up yet.
-->

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php $this->archiveTitle(array(
           'category'  =>  _t('%s'),
            'search'    =>  _t('%s'),
            'tag'       =>  _t('%s'),
            'author'    =>  _t('%s')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>

    <link rel="stylesheet" href="<?php $this->options->themeUrl('style.css?v=love');?>">
<?php $this->header('keywords=&generator=&template=&pingback=&xmlrpc=&wlw='); ?>

</head>
<body>
<!--[if lt IE 9]>
    <div class="error chromeframe">您的浏览器版本<strong>很旧很旧</strong>，为了正常地访问网站，请升级您的浏览器 <a target="_blank" href="http://browsehappy.com">立即升级</a></div>
<![endif]-->

<div id="iTop">
<div class="container">
                <a id="logo" href="<?php $this->options->siteUrl(); ?>">
          
                   <h1> <?php $this->options->title() ?><?php if($this->is('archive')):?>
<sup class="extro">
<?php $this->archiveTitle(array(
           'category'  =>  _t('%s'),
            'search'    =>  _t('%s'),
            'tag'       =>  _t('%s'),
            'author'    =>  _t('%s')
        ), '', ''); ?>
</sup>
<?php endif;?></h1>

                </a>
<a href="/i" id="guest"><span class="fr guest">Portfolio</span></a>

</div>
     </div><!--Top-->   	   
    
    
