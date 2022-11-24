<?php
/* Smarty version 4.2.1, created on 2022-11-24 16:11:13
  from 'C:\wamp64\www\admin959zyirsstq62mddx3e\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_637f89918f3951_72959845',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '02552e85e9abf463bec42a8c23adc70b42fbd4f9' => 
    array (
      0 => 'C:\\wamp64\\www\\admin959zyirsstq62mddx3e\\themes\\default\\template\\content.tpl',
      1 => 1669300961,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_637f89918f3951_72959845 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
