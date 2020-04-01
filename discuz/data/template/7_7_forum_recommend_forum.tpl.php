<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>
<!--推荐版块--><?php loadcache('forums'); 
  $rmdnum=6;
  $recommend_fids=array();?><div class="mwt-panel">
  <div class="mwt-head">推荐版块</div>
  <div class="mwt-body" style="padding-bottom:7px;">
<div class="subforum">
    <?php if(is_array($_G['cache']['forums'])) foreach($_G['cache']['forums'] as $fid => $forum) { ?>  <?php if($forum['type']!='group' && $rmdnum>0) { ?>
        <?php if(empty($recommend_fids) || in_array($fid,$recommend_fids)) { ?>
          <a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $fid;?>"><?php echo $forum['name'];?></a>
      <?php --$rmdnum;?>        <?php } ?>
      <?php } ?>
    <?php } ?>
</div>
  </div>
</div>
