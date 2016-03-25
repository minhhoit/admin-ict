<style>
.ba_box {
	width: 30%;
	margin-right: 15px;
	min-height: 160px;
}
.ba_box h3 {
	padding: 8px;
	font-size: 13px;
	cursor: default !important;
	margin: 0;
}
.ba_box.disable {
	background: none;
	position: relative;
	width: 30.6%;
	border: 1px solid #dedede;
	-webkit-box-shadow: 0 1px 1px -1px rgba(0,0,0,.1);
	box-shadow: 0 1px 1px -1px rgba(0,0,0,.1);
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
	border: 5px dashed #d5d2ca;
	text-align: center;
}
.ba_box.disable h3 {
	position: absolute;
	top: 50%;
	margin-top: -25px;
	left: 50%;
	font-size: 30px;
	margin-left: -100px;
}
</style>

<!-- General settings page starts -->
<div>
  <img src="<?php  echo  $wp_vtict_plugin['url']; ?>assets/images/vtict-logo.png" alt="<?php echo $wp_vtict_plugin['name']; ?>" title="<?php echo $wp_vtict_plugin['name']; ?>" width="500" height="160" class="alignleft" style="margin-right:20px;   border: 1px solid rgb(181, 181, 181);"/>
  <p>Thanks for downloading <strong> <?php echo $wp_vtict_plugin['name']; ?> </strong>(ver. <?php echo $wp_vtict_plugin['version']; ?>) by <a href="http://vungtauict.com/" style="font-size:13px">Minh Ho</a>. This is a simple and clear admin design that makes your WordPress administration section more clear and relaxed. Hope you enjoy using it!. There are a bunch of cool features that will surely help you get your admin panel looking and working it's best.</p>
  <h4 class="" style="margin:0;">Donate <?php echo $wp_vtict_plugin['name'];?></h4>
  <h4 class="" style="margin:0;">Have feedback on <?php echo $wp_vtict_plugin['name'];?>?</h4>
</div>
<div style="width:100%; margin-top:30px; clear:both;">
  <h3>Add-ons:</h3>
  <form method="post"  action="" name="ba_settings_form">
    <?php foreach ($vtict_options as $value)
	{
	if($value['settings_type']=='common') {?>
    <div class="ba_box alignleft dime postbox">
      <h3 class="hndle ui-sortable-handle"><span><?php echo $value['name']; ?></span></h3>
      <div class="inside">
        <p class="description"><?php echo $value['desc']; ?></p>
        <p>
          <?php if(($value['input_type']=='button') && (get_settings($value['id'])=='1')){?>
          <input type="submit" name="<?php echo $value['id']; ?>_disable" id="ID_<?php echo $value['id']; ?>" value="Disable"	 class="button-primary disable"/>
          <?php } else if(($value['input_type']=='button') && (get_settings($value['id'])=='')){?>
          <input type="submit" name="<?php echo $value['id']; ?>_enable" id="ID_<?php echo $value['id']; ?>" value="Enable"	class="button-primary enable" />
          <?php } ?>
          <?php if($value['learn_more']) { ?>
          <a href="<?php echo $value['learn_more'];?>" target="_blank" class="button-secondary">Learn More</a>
          <?php }?>
        </p>
      </div>
    </div>
    <?php } } ?>
  </form>
  <div class="ba_box alignleft disable dime postbox">
    <h3>Coming soon</h3>
  </div>
</div>
<!-- General settings page Ends -->

<div style="clear:both"></div>
<div class="" style="margin:40px auto 0px; text-align:center;">
	<a href="http://vungtauict.com/" target="_blank" style="margin:5px auto;">
	<img src="<?php  echo  $wp_vtict_plugin['url']; ?>assets/images/lin_logo.png" alt="A vungtauict.com Magic" title="A vungtauict.com Magic" width="200" height="29" class=""/></a>
  <div style="clear:both"></div>
</div>
