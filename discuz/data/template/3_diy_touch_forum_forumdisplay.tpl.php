<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('forumdisplay');?><?php include template('common/header'); ?><!-- header start -->
<header class="header">
    <div class="nav">
   	 	<a href="forum.php?forumlist=1" class="z wubianfont iconback fznav grey"></a>
<span class="category">
<?php if($subexists && $_G['page'] == 1) { ?>
<span class="display name vm" href="#subname_list">
<h2 class="tit"><?php echo strip_tags($_G['forum']['name']) ? strip_tags($_G['forum']['name']) : $_G['forum']['name'];?></h2>
<img src="<?php echo STATICURL;?>image/mobile/images/icon_arrow_down.png">
</span>
<div id="subname_list" class="subname_list" display="true" style="display:none;">
<ul><?php if(is_array($sublist)) foreach($sublist as $sub) { ?><li>
<a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $sub['fid'];?>"><?php echo $sub['name'];?></a>
</li>
<?php } ?>
</ul>
</div>
<?php } else { ?>
<span class="name"><?php echo strip_tags($_G['forum']['name']) ? strip_tags($_G['forum']['name']) : $_G['forum']['name'];?></span>
<?php } ?>
</span>
<div class="icon_edit y"><a href="forum.php?mod=post&amp;action=newthread&amp;fid=<?php echo $_G['fid'];?>" title="发帖"><span class="wubianfont iconwrite fznav grey"></span></a></div>
    </div>
</header>
<!-- header end -->

<?php if(!empty($_G['setting']['pluginhooks']['forumdisplay_top_mobile'])) echo $_G['setting']['pluginhooks']['forumdisplay_top_mobile'];?>
<!-- main threadlist start -->
<?php if(!$subforumonly) { ?>
<div class="threadlist">
<ul>
<?php if($_G['forum_threadcount']) { if(is_array($_G['forum_threadlist'])) foreach($_G['forum_threadlist'] as $key => $thread) { if(!$_G['setting']['mobile']['mobiledisplayorder3'] && $thread['displayorder'] > 0) { continue;?><?php } if($thread['displayorder'] > 0 && !$displayorder_thread) { $displayorder_thread = 1;?>    <?php } if($thread['moved']) { $thread[tid]=$thread[closed];?><?php } ?>
<li>
<?php if(!empty($_G['setting']['pluginhooks']['forumdisplay_thread_mobile'][$key])) echo $_G['setting']['pluginhooks']['forumdisplay_thread_mobile'][$key];?>
        <a href="forum.php?mod=viewthread&amp;tid=<?php echo $thread['tid'];?>&amp;extra=<?php echo $extra;?>">
<span <?php echo $thread['highlight'];?>><?php echo $thread['subject'];?></span>
<?php if(in_array($thread['displayorder'], array(1, 2, 3, 4))) { ?>
<span class="icon icon_ding">&#32622;&#39030;</span>
<?php } elseif($thread['digest'] > 0) { ?>
<span class="icon icon_jing">&#31934;&#21326;</span>
<?php } elseif($thread['attachment'] == 2 && $_G['setting']['mobile']['mobilesimpletype'] == 0) { ?>
<span class="icon icon_tu">&#22270;&#29255;</span>
<?php } ?>
<span class="by"><?php echo $thread['author'];?></span>
<span class="num wubianfont iconcomment"><?php echo $thread['replies'];?></span>
</a>
</li>
<?php } ?>
    <?php } else { ?>
<li class="b_p mtw mbw hm grey">本版块或指定的范围内尚无主题</li>
<?php } ?>
</ul>
</div>
<?php echo $multipage;?>
<?php } ?>
<!-- main threadlist end -->
<?php if(!empty($_G['setting']['pluginhooks']['forumdisplay_bottom_mobile'])) echo $_G['setting']['pluginhooks']['forumdisplay_bottom_mobile'];?>
<div class="pullrefresh" style="display:none;"></div><?php include template('common/footer'); ?>