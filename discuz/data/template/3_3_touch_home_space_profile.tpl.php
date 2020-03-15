<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('space_profile');?>
<!--
[Zheng Ban URL]
https://addon.dismall.com/?@wubian
-->
<?php if($_GET['mycenter'] && !$_G['uid']) { dheader('Location:member.php?mod=logging&action=login');exit;?><?php } include template('common/header'); if(!$_GET['mycenter']) { ?>

<!-- header start -->
<header class="header">
    <div class="nav">
<a href="javascript:;" onclick="history.go(-1);" class="z wubianfont iconback fznav grey"></a>
<span><?php if($_G['uid'] == $space['uid']) { ?>我的资料<?php } else { ?><?php echo $space['username'];?>的资料<?php } ?></span>
<a href="forum.php" class="y wubianfont iconhomepage fznav grey"></a>
    </div>
</header>
<!-- header end -->
<!-- userinfo start -->
<div class="userinfo">
<div class="user_avatar">
<div class="avatar_m"><span><img src="<?php echo avatar($space[uid], big, true);?>" /></span></div>
<h2 class="name"><?php echo $space['username'];?></h2>
</div>
<div class="user_box">
<ul>
<li><span><?php echo $space['credits'];?></span>积分</li><?php if(is_array($_G['setting']['extcredits'])) foreach($_G['setting']['extcredits'] as $key => $value) { if($value['title']) { ?>
<li><span><?php echo $space["extcredits$key"];?> <?php echo $value['unit'];?></span><?php echo $value['title'];?></li>
<?php } } ?>
</ul>
</div>
</div>
<!-- userinfo end -->
<?php if($space['uid'] == $_G['uid']) { ?>
<div class="btn_exit">
<a href="member.php?mod=logging&amp;action=logout&amp;formhash=<?php echo FORMHASH;?>" class="wb_lore">退出登录</a>
</div>
<?php } } else { ?>

<!-- header start -->
<?php if($_G['setting']['domain']['app']['mobile']) { $nav = $_G['scheme'].'://'.$_G['setting']['domain']['app']['mobile'];?><?php } else { $nav = "forum.php";?><?php } ?>
<!-- header end -->
<!-- userinfo start -->
<div class="userinfo">
<div class="user_avatar">
<div class="avatar_m"><span><img src="<?php echo avatar($_G[uid], big, true);?>" /></span></div>
<h2 class="name"><?php echo $_G['username'];?></h2>
</div>
<div class="myinfo_list cl">
<ul>
<li><a href="home.php?mod=space&amp;uid=<?php echo $_G['uid'];?>&amp;do=favorite&amp;view=me&amp;type=thread">我的收藏</a></li>
<li><a href="home.php?mod=space&amp;uid=<?php echo $_G['uid'];?>&amp;do=thread&amp;view=me">我的主题</a></li>
<li><a href="home.php?mod=space&amp;do=pm">我的消息<?php if($_G['member']['newpm']) { ?><i class="wubianfont icondian rq"></i><?php } ?></a></li>
<li><a href="home.php?mod=space&amp;uid=<?php echo $_G['uid'];?>&amp;do=profile">我的资料</a></li>
</ul>
</div>
</div>
<!-- userinfo end -->
<?php if($_G['setting']['mobile']['mobilehotthread']) { ?>
<div class="footernav4">
<ul>
<li><a href="forum.php" class="wubianfont iconhomepage"><span>首页</span></a></li>
    <li><a href="forum.php?forumlist=1&amp;mobile=2" class="wubianfont iconmanage"><span>&#31038;&#21306;</span></a></li>
    <li><a href="search.php?mod=forum&amp;mobile=2" class="wubianfont iconsearch"><span>搜索</span></a></li>
    <li class="a"><a href="<?php if($_G['uid']) { ?>home.php?mod=space&uid=<?php echo $_G['uid'];?>&do=profile&mycenter=1<?php } else { ?>member.php?mod=logging&action=login<?php } ?>" class="wubianfont iconpeoplefill"><span><?php if($_G['uid']) { ?>我的<?php } else { ?>登录<?php } ?></span><?php if($_G['member']['newpm']) { ?><i class="wubianfont icondian"></i><?php } ?></a></li>
</ul>
</div>
<?php } else { ?>
<div class="footernav3">
<ul>
    <li><a href="forum.php?forumlist=1&amp;mobile=2" class="wubianfont iconhomepage"><span>首页</span></a></li>
    <li><a href="search.php?mod=forum&amp;mobile=2" class="wubianfont iconsearch"><span>搜索</span></a></li>
    <li class="a"><a href="<?php if($_G['uid']) { ?>home.php?mod=space&uid=<?php echo $_G['uid'];?>&do=profile&mycenter=1<?php } else { ?>member.php?mod=logging&action=login<?php } ?>" class="wubianfont iconpeoplefill"><span><?php if($_G['uid']) { ?>我的<?php } else { ?>登录<?php } ?></span><?php if($_G['member']['newpm']) { ?><i class="wubianfont icondian"></i><?php } ?></a></li>
</ul>
</div>
<?php } } $nofooter = true;?><?php include template('common/footer'); ?>