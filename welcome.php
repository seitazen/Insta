<?php
/**
 * 自定义首页
 *
 * @package custom
 */
 ?>
<!--
http://blueshit.org/guzi.txt See, I do have not given up yet.
-->

<!DOCTYPE HTML>
<html lang="zh-CN">
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>hi, Seita!</title>
<script src="//upcdn.b0.upaiyun.com/libs/jquery/jquery-1.9.0.min.js"></script>
    <link rel="stylesheet" href="<?php $this->options->themeUrl('home.css?v=1.0');?>">
</head>
<body>
<script language="javascript">
function contact(){
$('#contact').slideToggle();
}
</script>
<div id="main">
<div class="leftbar">
<a href="/" class="me"><div class="avatar"><img src="http://seita.u.qiniudn.com/img/beauty.jpg">
</div></a>
<a  href="/blog"><button class="button">Blog</button></a>
<a  href="javascript:void(0)" onclick="contact()"><button class="dark button">Contact</button></a>
<div id="contact">
<a  href="http://www.v2ex.com/member/Seita?r=Seita"><button class="green button">V2EX</button></a>
<a  href="https://twitter.com/seitazen"><button class="blue button">Twitter</button></a>
<a  href="http://www.zhihu.com/people/seitazen"><button class="navy button">Zhihu</button></a>
<a  href="mailto:zen@seita.me"><button class="email button">Mail</button></a>
</div>
</div>

<div class="qna">

<h1>hi, Seita!</h1>
<p>
Here is where Seita blongs, where Seita's heart blongs, with the matter of love.
</p>
<p>Seita is a front-end developer most of all, but still trying a little interest in back-end, where he does never look really deep inside.</p>
<p>He is kind of childish, as his love's word.</p>
<p>Seita loves programming, design, soccer, music, films, blah blah blah...</p>
<p>All in all, he loves her best.</p>
<p>To know him, to get in touch with him, who really can't wait to make this happen!</p>
<!--
<ul>

                  <li>
                    <img width="30" height="30" src="http://ww1.sinaimg.cn/large/622cc51agw1eesby0jlmyj20k00jpjtn.jpg">
                    <div class="bubble">
                      <a class="user-name" href="#">谷子</a>
                      <p class="message">
                          你是谁啊？
                      </p>
                      <p class="time">
                        <strong>去年 </strong>5月31号 22:52
                      </p>
                    </div>
                  </li>
                  <li class="current-user">
                    <img width="30" height="30" src="http://seita.u.qiniudn.com/img/beauty.jpg">
                    <div class="bubble">
                      <a class="user-name" href="#">塞塔</a>
                      <p class="message">
                         哦，我是塞塔，喜欢编程和设计，喜欢足球喜欢音乐。<br>好吧，那个，其实我想说的是 ... 喜欢你
                      </p>
                      <p class="time">
                        <strong>去年 </strong>5月31号 22:53
                      </p>
                    </div>
                  </li>
                  <li>
                    <img width="30" height="30" src="http://ww1.sinaimg.cn/large/622cc51agw1eesby0jlmyj20k00jpjtn.jpg">
                    <div class="bubble">
                      <a class="user-name" href="#">谷子</a>
                      <p class="message">
                          好累呀，这样子会。
                      </p>
                      <p class="time">
                        <strong>去年 </strong>5月31号 23:24
                      </p>
                    </div>
                  </li>
                  <li class="current-user">
                    <img width="30" height="30" src="http://seita.u.qiniudn.com/img/beauty.jpg">
                    <div class="bubble">
                      <a class="user-name" href="#">塞塔</a>
                      <p class="message">
                          Good for You.
                      </p>
                      <p class="time">
                        <strong>去年 </strong>5月31号 23:25
                      </p>
                    </div>
                  </li>
                </ul>
-->

</div>
</div>

<div style="display:none;"><script src="http://s23.cnzz.com/stat.php?id=5821639&web_id=5821639" language="JavaScript"></script></div>

</body>
</html>
   
    