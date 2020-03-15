<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('guide');
0
|| checktplrefresh('./template/24style/touch/forum/guide.htm', './template/24style/touch/forum/guide_list_row.htm', 1583949425, '7', './data/template/7_7_touch_forum_guide.tpl.php', './template/24style', 'touch/forum/guide')
;?>
<!--
[Zheng Ban URL]
https://addon.dismall.com/?@wubian
--><?php include template('common/header'); ?><!-- header start -->
<?php if($_G['setting']['domain']['app']['mobile']) { $nav = $_G['scheme'].'://'.$_G['setting']['domain']['app']['mobile'];?><?php } else { $nav = "forum.php";?><?php } ?>
<!-- header end -->
<!-- main threadlist start -->
<div class="topnav">
<a href="<?php echo $nav;?>" class="blue"><?php echo $_G['setting']['sitename'];?></a>
</div>
<div class="threadlist"><?php if(is_array($data)) foreach($data as $key => $list) { if($list['threadcount']) { ?>
<ul class="hotlist"><?php if(is_array($list['threadlist'])) foreach($list['threadlist'] as $key => $thread) { ?><li>
<a href="forum.php?mod=viewthread&amp;tid=<?php echo $thread['tid'];?>&amp;fromguid=hot&amp;<?php if($_GET['archiveid']) { ?>archiveid=<?php echo $_GET['archiveid'];?>&amp;<?php } ?>extra=<?php echo $extra;?>">
<?php if(!$thread['forumstick'] && $thread['closed'] > 1 && ($thread['isgroup'] == 1 || $thread['fid'] != $_G['fid'])) { $thread[tid]=$thread[closed];?><?php } ?>
<?php echo $thread['typehtml'];?> <?php echo $thread['sorthtml'];?>
<span><?php echo $thread['subject'];?></span>
<?php if($thread['digest'] > 0) { ?>
<span class="icon icon_jing">&#31934;&#21326;</span>
<?php } elseif($thread['attachment'] == 2 && $_G['setting']['mobile']['mobilesimpletype'] == 0) { ?>
<span class="icon icon_tu">&#22270;&#29255;</span>
<?php } ?>
<span class="by"><?php echo $thread['author'];?></span>
<span class="num wubianfont iconcomment"><?php if($thread['isgroup'] != 1) { ?><?php echo $thread['replies'];?><?php } else { ?><?php echo $groupnames[$thread['tid']]['replies'];?><?php } ?></span>
</a>
</li>
<?php } ?>
</ul>
<?php } else { ?>
<p class="b_p b_m hm grey">暂时还没有帖子</p>
<?php } } ?>
</div>
<!-- main threadlist end -->

<?php echo $multipage;?>

<div class="pullrefresh" style="display:none;"></div>

<div class="footernav4">
<ul>
<li class="a"><a href="forum.php" class="wubianfont iconhomepage_fill"><span>首页</span></a></li>
    <li><a href="forum.php?forumlist=1&amp;mobile=2" class="wubianfont iconmanage"><span>&#31038;&#21306;</span></a></li>
    <li><a href="search.php?mod=forum&amp;mobile=2" class="wubianfont iconsearch"><span>搜索</span></a></li>
    <li><a href="<?php if($_G['uid']) { ?>home.php?mod=space&uid=<?php echo $_G['uid'];?>&do=profile&mycenter=1<?php } else { ?>member.php?mod=logging&action=login<?php } ?>" class="wubianfont iconpeople"><span><?php if($_G['uid']) { ?>我的<?php } else { ?>登录<?php } ?></span><?php if($_G['member']['newpm']) { ?><i class="wubianfont icondian"></i><?php } ?></a></li>
</ul>
</div>

<!--
[Zheng Ban]
https://addon.dismall.com/?@wubian
--><?php include template('common/footer'); ?>