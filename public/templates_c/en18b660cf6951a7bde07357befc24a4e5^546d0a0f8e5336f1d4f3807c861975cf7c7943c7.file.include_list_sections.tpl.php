<?php /* Smarty version Smarty-3.1-DEV, created on 2013-06-21 15:04:20
         compiled from "D:\wamp\www\mlpnwrp_tw\public\templates\admin\include_list_sections.tpl" */ ?>
<?php /*%%SmartyHeaderCode:710151c46b74de15d9-04013685%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '546d0a0f8e5336f1d4f3807c861975cf7c7943c7' => 
    array (
      0 => 'D:\\wamp\\www\\mlpnwrp_tw\\public\\templates\\admin\\include_list_sections.tpl',
      1 => 1336688532,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '710151c46b74de15d9-04013685',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
    'icons' => 0,
    'info' => 0,
    'page' => 0,
    'class' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_51c46b74e4a202_29104015',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51c46b74e4a202_29104015')) {function content_51c46b74e4a202_29104015($_smarty_tpl) {?><?php if (!is_callable('smarty_block_remarksbox')) include 'lib/smarty_tiki\\block.remarksbox.php';
if (!is_callable('smarty_block_self_link')) include 'lib/smarty_tiki\\block.self_link.php';
?><!-- TPL: D:\wamp\www\mlpnwrp_tw\public\templates\admin\include_list_sections.tpl -->



<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"tip",'title'=>"Tip")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	Enable/disable Tiki features in <a class="rbox-link" href="tiki-admin.php?page=features">Admin&nbsp;<?php echo $_smarty_tpl->tpl_vars['prefs']->value['site_crumb_seper'];?>
&nbsp;Features</a>, but configure them elsewhere
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<div class="clearfix cbox-data" style="padding-left: 10px;">
	<?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['icons']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value){
$_smarty_tpl->tpl_vars['info']->_loop = true;
 $_smarty_tpl->tpl_vars['page']->value = $_smarty_tpl->tpl_vars['info']->key;
?>
		<?php if ($_smarty_tpl->tpl_vars['info']->value['position']){?>
			<?php if ($_smarty_tpl->tpl_vars['info']->value['disabled']){?>
				<?php $_smarty_tpl->tpl_vars['class'] = new Smarty_variable("admbox off advanced", null, 0);?>
			<?php }else{ ?>
				<?php $_smarty_tpl->tpl_vars['class'] = new Smarty_variable("admbox basic", null, 0);?>
			<?php }?>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('page'=>$_smarty_tpl->tpl_vars['page']->value,'_class'=>$_smarty_tpl->tpl_vars['class']->value,'_style'=>"background-image: url('img/icons/sprite/admin.fullpanel.png'); background-position: ".((string)$_smarty_tpl->tpl_vars['info']->value['position']),'_title'=>$_smarty_tpl->tpl_vars['info']->value['title'])); $_block_repeat=true; echo smarty_block_self_link(array('page'=>$_smarty_tpl->tpl_vars['page']->value,'_class'=>$_smarty_tpl->tpl_vars['class']->value,'_style'=>"background-image: url('img/icons/sprite/admin.fullpanel.png'); background-position: ".((string)$_smarty_tpl->tpl_vars['info']->value['position']),'_title'=>$_smarty_tpl->tpl_vars['info']->value['title']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<img src="img/trans.png" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['info']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['info']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
<?php if ($_smarty_tpl->tpl_vars['info']->value['disabled']){?> (Disabled)<?php }?>" />
				<span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['info']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</span>
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('page'=>$_smarty_tpl->tpl_vars['page']->value,'_class'=>$_smarty_tpl->tpl_vars['class']->value,'_style'=>"background-image: url('img/icons/sprite/admin.fullpanel.png'); background-position: ".((string)$_smarty_tpl->tpl_vars['info']->value['position']),'_title'=>$_smarty_tpl->tpl_vars['info']->value['title']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php }?>
	<?php } ?>
</div>
<!-- /TPL: D:\wamp\www\mlpnwrp_tw\public\templates\admin\include_list_sections.tpl --><?php }} ?>