<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('discuz');?>
<!--
[Zheng Ban URL]
https://addon.dismall.com/?@wubian
-->
<?php if($_G['setting']['mobile']['mobilehotthread'] && $_GET['forumlist'] != 1) { dheader('Location:forum.php?mod=guide&view=hot');exit;?><?php } include template('common/header'); ?><script type="text/javascript">
function getvisitclienthref() {
var visitclienthref = '';
if(ios) {
visitclienthref = 'https://itunes.apple.com/cn/app/zhang-shang-lun-tan/id489399408?mt=8';
} else if(andriod) {
visitclienthref = 'http://www.discuz.net/mobile.php?platform=android';
}
return visitclienthref;
}
</script>

<?php if($_GET['visitclient']) { ?>

<header class="header">
    <div class="nav">
<span>温馨提示</span>
    </div>
</header>
<div class="cl">
<div class="clew_con">
<h2 class="tit">掌上论坛手机客户端</h2>
<p>随时随地上论坛<input class="redirect button" id="visitclientid" type="button" value="点击下载" href="" /></p>
<h2 class="tit">iPhone,Andriod等智能手机</h2>
<p>直接登录手机版，阅读体验更佳<input class="redirect button" type="button" value="访问手机版" href="<?php echo $_GET['visitclient'];?>" /></p>
</div>
</div>
<script type="text/javascript">
var visitclienthref = getvisitclienthref();
if(visitclienthref) {
$('#visitclientid').attr('href', visitclienthref);
} else {
window.location.href = '<?php echo $_GET['visitclient'];?>';
}
</script>

<?php } else { ?>

<!-- header start -->
<?php if($showvisitclient) { ?>

<div class="visitclienttip vm" style="display:block;">
<a href="javascript:;" id="visitclientid" class="btn_download">立即下载</a>	
<p>
下载新版掌上论坛客户端，尊享多项看帖特权!
</p>
</div>
<script type="text/javascript">
var visitclienthref = getvisitclienthref();
if(visitclienthref) {
$('#visitclientid').attr('href', visitclienthref);
$('.visitclienttip').css('display', 'block');
}
</script>

<?php } if($_G['setting']['domain']['app']['mobile']) { $nav = $_G['scheme'].'://'.$_G['setting']['domain']['app']['mobile'];?><?php } else { $nav = "forum.php";?><?php } ?>
<div class="wb_forumbg">
<div class="wb_forumbg_logo"><a href="<?php echo $nav;?>"><?php echo $_G['setting']['sitename'];?></a></div>
<div class="wb_forumbg_sehot"><ul><li class="z"><a href="search.php?mod=forum&amp;mobile=2"><em class="wubianfont iconsearch"></em>搜索帖子</a></li></ul></div>
</div>
<!-- header end -->
<?php if(!empty($_G['setting']['pluginhooks']['index_top_mobile'])) echo $_G['setting']['pluginhooks']['index_top_mobile'];?>
<!-- main forumlist start -->
<div class="cl"><?php if(is_array($catlist)) foreach($catlist as $key => $cat) { ?><div class="cl">
<div class="subforumshow bm_h cl" href="#sub_forum_<?php echo $cat['fid'];?>"><a href="javascript:;"><?php echo $cat['name'];?></a></div>
<div id="sub_forum_<?php echo $cat['fid'];?>" class="sub_forum cl">
<ul><?php if(is_array($cat['forums'])) foreach($cat['forums'] as $forumid) { $forum=$forumlist[$forumid];?><li>
<!-- <div class="forumicon"> -->
<?php if($forum['icon']) { ?>
<!-- <?php echo $forum['icon'];?> -->
<?php } else { ?>
<!-- <a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $forum['fid'];?>"><img src="<?php echo $_G['style']['styleimgdir'];?>/wubian/forum-icon.jpg" alt="<?php echo $forum['name'];?>" /></a> -->
<?php } if($forum['todayposts'] > 0) { ?>
<span class="num"><?php echo $forum['todayposts'];?></span>
<?php } ?>
<!-- </div> -->
<div class="forumname"><a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $forum['fid'];?>"><?php echo $forum['name'];?></a></div>
</li>
<?php } ?>
</ul>
</div>
</div>
<?php } ?>
</div>
<!-- main forumlist end -->
<?php if(!empty($_G['setting']['pluginhooks']['index_middle_mobile'])) echo $_G['setting']['pluginhooks']['index_middle_mobile'];?>
<script type="text/javascript">
(function() {
<?php if(!$_G['setting']['mobile']['mobileforumview']) { ?>
$('.sub_forum').css('display', 'block');
<?php } else { ?>
$('.sub_forum').css('display', 'none');
<?php } ?>
$('.subforumshow').on('click', function() {
var obj = $(this);
var subobj = $(obj.attr('href'));
if(subobj.css('display') == 'none') {
subobj.css('display', 'block');
} else {
subobj.css('display', 'none');
}
});
 })();
</script>

<?php } if($_G['setting']['mobile']['mobilehotthread']) { ?>
<div class="footernav4">
<ul>
<li><a href="forum.php" class="wubianfont iconhomepage"><span>首页</span></a></li>
    <li class="a"><a href="forum.php?forumlist=1&amp;mobile=2" class="wubianfont iconmanage_fill"><span>&#31038;&#21306;</span></a></li>
    <li><a href="search.php?mod=forum&amp;mobile=2" class="wubianfont iconsearch"><span>搜索</span></a></li>
    <li><a href="<?php if($_G['uid']) { ?>home.php?mod=space&uid=<?php echo $_G['uid'];?>&do=profile&mycenter=1<?php } else { ?>member.php?mod=logging&action=login<?php } ?>" class="wubianfont iconpeople"><span><?php if($_G['uid']) { ?>我的<?php } else { ?>登录<?php } ?></span><?php if($_G['member']['newpm']) { ?><i class="wubianfont icondian"></i><?php } ?></a></li>
</ul>
</div>
<?php } else { ?>
<div class="footernav3">
<ul>
    <li class="a"><a href="forum.php?forumlist=1&amp;mobile=2" class="wubianfont iconhomepage_fill"><span>首页</span></a></li>
    <li><a href="search.php?mod=forum&amp;mobile=2" class="wubianfont iconsearch"><span>搜索</span></a></li>
    <li><a href="<?php if($_G['uid']) { ?>home.php?mod=space&uid=<?php echo $_G['uid'];?>&do=profile&mycenter=1<?php } else { ?>member.php?mod=logging&action=login<?php } ?>" class="wubianfont iconpeople"><span><?php if($_G['uid']) { ?>我的<?php } else { ?>登录<?php } ?></span><?php if($_G['member']['newpm']) { ?><i class="wubianfont icondian"></i><?php } ?></a></li>
</ul>
</div>
<?php } ?>
<!--
[ Zheng Ban URL]
https://addon.dismall.com/?@wubian
--><?php include template('common/footer'); ?>