<?php /* Smarty version 3.1.23, created on 2017-05-08 10:15:34
         compiled from "views/template/index.html" */ ?>
<?php
/*%%SmartyHeaderCode:94990518159101b16162da2_96445936%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '072b328e4a67a9f7f9f93ee69dee3fa255cc0c95' => 
    array (
      0 => 'views/template/index.html',
      1 => 1494227380,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '94990518159101b16162da2_96445936',
  'has_nocache_code' => false,
  'version' => '3.1.23',
  'unifunc' => 'content_59101b1617cac4_64720628',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59101b1617cac4_64720628')) {
function content_59101b1617cac4_64720628 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '94990518159101b16162da2_96445936';
?>
<!doctype html>
<html lang="en">
<?php echo $_smarty_tpl->getSubTemplate ('header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<body>
	<?php echo $_smarty_tpl->getSubTemplate ('navigation.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


	<div class="content">
		<div id="err_cont">
			<a href="javascript:;">OK</a>
		</div>

		<div class="content-panel">
			<?php echo $_smarty_tpl->getSubTemplate ('content.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

		</div>
	</div>
	<div class="waiting">
		<div class="wait-left">
			<div class="loading"></div>
			<div class="load-font">
				<div class="wait-font">
					Scanning
				</div>
				<div class="jumppoint">
					<span id="p1">.</span><span id="p2">.</span><span id="p3">.</span>
				</div>
			</div>
		</div>
		<div class="div-line"></div>
		<div class="wait-right">
			<div class="timecounter">
				<span id="h"></span>:<span id="m"></span>:<span id="s"></span>:<span id="ms"></span>
			</div>
		</div>
	</div>
	<?php echo $_smarty_tpl->getSubTemplate ('footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</body>
</html><?php }
}
?>