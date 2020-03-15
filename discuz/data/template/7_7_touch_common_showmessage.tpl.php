<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('showmessage');?>
<!--
[Zheng Ban URL]
https://addon.dismall.com/?@wubian
-->
<?php if($param['login']) { if($_G['inajax']) { dheader('Location:member.php?mod=logging&action=login&inajax=1&infloat=1');exit;?><?php } else { dheader('Location:member.php?mod=logging&action=login');exit;?><?php } } include template('common/header'); if($_G['inajax']) { ?>

<div class="tip">
<dt id="messagetext">
<p><?php echo $show_message;?></p>
        <?php if($_G['forcemobilemessage']) { ?>
        	<p >
            	<a href="<?php echo $_G['setting']['mobile']['pageurl'];?>" class="mtn">继续访问</a><br />
                <a href="javascript:history.back();">返回上一页</a>
            </p>
        <?php } if($url_forward && !$_GET['loc']) { ?>
<!--<p><a class="grey" href="<?php echo $url_forward;?>">点击此链接进行跳转</a></p>-->
<script type="text/javascript">
setTimeout(function() {
window.location.href = '<?php echo $url_forward;?>';
}, '2000');
</script>
<?php } elseif($allowreturn) { ?>
<p><input type="button" class="button" onclick="popup.close();" value="关闭"></p>
<?php } ?>
</dt>
</div>

<?php } else { ?>

<!-- header start -->
<?php if($_G['setting']['domain']['app']['mobile']) { $nav = $_G['scheme'].'://'.$_G['setting']['domain']['app']['mobile'];?><?php } else { $nav = "forum.php";?><?php } ?>
<!-- header end -->
<!-- main jump start -->
<div class="jump_c">
<p><?php echo $show_message;?></p>
    <?php if($_G['forcemobilemessage']) { ?>
<p>
            <a href="<?php echo $_G['setting']['mobile']['pageurl'];?>" class="mtn">继续访问</a><br />
            <a href="javascript:history.back();">返回上一页</a>
        </p>
    <?php } if($url_forward) { ?>
<p><a class="grey" href="<?php echo $url_forward;?>">点击此链接进行跳转</a></p>
<?php } elseif($allowreturn) { ?>
<p><a class="grey" href="javascript:history.back();">[ 点击这里返回上一页 ]</a></p>
<?php } ?>
</div>
<!-- main jump end -->

<?php if($_G['setting']['mobile']['mobilehotthread']) { ?>
<div class="footernav4">
<ul>
<li><a href="forum.php" class="wubianfont iconhomepage"><span>首页</span></a></li>
    <li><a href="forum.php?forumlist=1&amp;mobile=2" class="wubianfont iconmanage"><span>&#31038;&#21306;</span></a></li>
    <li><a href="search.php?mod=forum&amp;mobile=2" class="wubianfont iconsearch"><span>搜索</span></a></li>
    <li><a href="<?php if($_G['uid']) { ?>home.php?mod=space&uid=<?php echo $_G['uid'];?>&do=profile&mycenter=1<?php } else { ?>member.php?mod=logging&action=login<?php } ?>" class="wubianfont iconpeople"><span><?php if($_G['uid']) { ?>我的<?php } else { ?>登录<?php } ?></span></a></li>
</ul>
</div>
<?php } else { ?>
<div class="footernav3">
<ul>
    <li><a href="forum.php?forumlist=1&amp;mobile=2" class="wubianfont iconhomepage"><span>首页</span></a></li>
    <li><a href="search.php?mod=forum&amp;mobile=2" class="wubianfont iconsearch"><span>搜索</span></a></li>
    <li><a href="<?php if($_G['uid']) { ?>home.php?mod=space&uid=<?php echo $_G['uid'];?>&do=profile&mycenter=1<?php } else { ?>member.php?mod=logging&action=login<?php } ?>" class="wubianfont iconpeople"><span><?php if($_G['uid']) { ?>我的<?php } else { ?>登录<?php } ?></span></a></li>
</ul>
</div>
<?php } } $nofooter = true;?><?php include template('common/footer'); ?>