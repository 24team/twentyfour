<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('forum');
0
|| checktplrefresh('./template/24style/touch/search/forum.htm', './template/24style/touch/search/pubsearch.htm', 1582471928, '7', './data/template/7_7_touch_search_forum.tpl.php', './template/24style', 'touch/search/forum')
|| checktplrefresh('./template/24style/touch/search/forum.htm', './template/24style/touch/search/thread_list.htm', 1582471928, '7', './data/template/7_7_touch_search_forum.tpl.php', './template/24style', 'touch/search/forum')
;?>
<!--
    [Zheng Ban URL]
    https://addon.dismall.com/?@wubian
--><?php include template('common/header'); ?><!-- header start -->
<?php if($_G['setting']['domain']['app']['mobile']) { $nav = $_G['scheme'].'://'.$_G['setting']['domain']['app']['mobile'];?><?php } else { $nav = "forum.php";?><?php } ?>
<!-- header end -->
<form id="searchform" class="searchform" method="post" autocomplete="off" action="search.php?mod=forum&amp;mobile=2">
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" /><!--
[Zheng Ban URL]
https://addon.dismall.com/?@wubian
-->
<?php if(!empty($srchtype)) { ?><input type="hidden" name="srchtype" value="<?php echo $srchtype;?>" /><?php } ?>
<div class="search">
<table width="100%" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td>
<input value="<?php echo $keyword;?>" autocomplete="off" class="input" name="srchtxt" id="scform_srchtxt" value="" placeholder="搜索帖子">
</td>
<td width="66" align="right">
<div><input type="hidden" name="searchsubmit" value="yes"><input type="submit" value="搜索" class="button2" id="scform_submit"></div>
</td>
</tr>
</tbody>
</table>
</div>
<!--
[ Zheng Ban URL]
https://addon.dismall.com/?@wubian
--><?php $policymsgs = $p = '';?><?php if(is_array($_G['setting']['creditspolicy']['search'])) foreach($_G['setting']['creditspolicy']['search'] as $id => $policy) { ?><?php
$policymsg = <<<EOF

EOF;
 if($_G['setting']['extcredits'][$id]['img']) { 
$policymsg .= <<<EOF
{$_G['setting']['extcredits'][$id]['img']} 
EOF;
 } 
$policymsg .= <<<EOF
{$_G['setting']['extcredits'][$id]['title']} {$policy} {$_G['setting']['extcredits'][$id]['unit']}
EOF;
?><?php $policymsgs .= $p.$policymsg;$p = ', ';?><?php } if($policymsgs) { ?><p>每进行一次搜索将扣除 <?php echo $policymsgs;?></p><?php } ?>
</form>

<?php if(!empty($searchid) && submitcheck('searchsubmit', 1)) { ?><!--
[Zheng Ban URL]
https://addon.dismall.com/?@wubian
-->
<div class="threadlist">
<h2 class="b_p grey"><?php if($keyword) { ?>结果: <em>找到 “<span class="emfont"><?php echo $keyword;?></span>” 相关内容 <?php echo $index['num'];?> 个</em> <?php if($modfid) { ?><a href="forum.php?mod=modcp&amp;action=thread&amp;fid=<?php echo $modfid;?>&amp;keywords=<?php echo $modkeyword;?>&amp;submit=true&amp;do=search&amp;page=<?php echo $page;?>" target="_blank">进入管理面板</a><?php } } else { ?>结果: <em>找到相关主题 <?php echo $index['num'];?> 个</em><?php } ?></h2>
<?php if(empty($threadlist)) { ?>
<ul><li><a>对不起，没有找到匹配结果。</a></li></ul>
<?php } else { ?>
<ul><?php if(is_array($threadlist)) foreach($threadlist as $thread) { ?><li>
<a href="forum.php?mod=viewthread&amp;tid=<?php echo $thread['realtid'];?>&amp;highlight=<?php echo $index['keywords'];?>" <?php echo $thread['highlight'];?>><?php echo $thread['subject'];?></a>
</li>
<?php } ?>
</ul>
<?php } ?>
<?php echo $multipage;?>
</div>
<!--
[ Zheng Ban URL]
https://addon.dismall.com/?@wubian
--><?php } if($_G['setting']['mobile']['mobilehotthread']) { ?>
<div class="footernav4">
<ul>
<li><a href="forum.php" class="wubianfont iconhomepage"><span>首页</span></a></li>
    <li><a href="forum.php?forumlist=1&amp;mobile=2" class="wubianfont iconmanage"><span>&#31038;&#21306;</span></a></li>
    <li class="a"><a href="search.php?mod=forum&amp;mobile=2" class="wubianfont iconsearchfill"><span>搜索</span></a></li>
    <li><a href="<?php if($_G['uid']) { ?>home.php?mod=space&uid=<?php echo $_G['uid'];?>&do=profile&mycenter=1<?php } else { ?>member.php?mod=logging&action=login<?php } ?>" class="wubianfont iconpeople"><span><?php if($_G['uid']) { ?>我的<?php } else { ?>登录<?php } ?></span><?php if($_G['member']['newpm']) { ?><i class="wubianfont icondian"></i><?php } ?></a></li>
</ul>
</div>
<?php } else { ?>
<div class="footernav3">
<ul>
    <li><a href="forum.php?forumlist=1&amp;mobile=2" class="wubianfont iconhomepage"><span>首页</span></a></li>
    <li class="a"><a href="search.php?mod=forum&amp;mobile=2" class="wubianfont iconsearchfill"><span>搜索</span></a></li>
    <li><a href="<?php if($_G['uid']) { ?>home.php?mod=space&uid=<?php echo $_G['uid'];?>&do=profile&mycenter=1<?php } else { ?>member.php?mod=logging&action=login<?php } ?>" class="wubianfont iconpeople"><span><?php if($_G['uid']) { ?>我的<?php } else { ?>登录<?php } ?></span><?php if($_G['member']['newpm']) { ?><i class="wubianfont icondian"></i><?php } ?></a></li>
</ul>
</div>
<?php } $nofooter = true;?><?php include template('common/footer'); ?>