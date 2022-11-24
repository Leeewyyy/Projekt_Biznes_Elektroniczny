<?php
/* Smarty version 4.2.1, created on 2022-11-24 16:19:42
  from 'module:blockwishlistviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_637f8b8e64aa89_89204704',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a1229469a269d7c4131830285bfb2a20a0216b61' => 
    array (
      0 => 'module:blockwishlistviewstemplat',
      1 => 1669300964,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:blockwishlist/views/templates/components/modals/share.tpl' => 1,
    'module:blockwishlist/views/templates/components/modals/rename.tpl' => 1,
  ),
),false)) {
function content_637f8b8e64aa89_89204704 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_292012063637f8b8e639c58_73162565', 'page_header_container');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2009977570637f8b8e63b461_41395213', 'page_content_container');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1226073064637f8b8e6445f0_52861104', 'page_footer_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'customer/page.tpl');
}
/* {block 'page_header_container'} */
class Block_292012063637f8b8e639c58_73162565 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_header_container' => 
  array (
    0 => 'Block_292012063637f8b8e639c58_73162565',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_container'} */
class Block_2009977570637f8b8e63b461_41395213 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_2009977570637f8b8e63b461_41395213',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div
    class="wishlist-container"
    data-url="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['url']->value, ENT_QUOTES, 'UTF-8');?>
"
    data-title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['wishlistsTitlePage']->value, ENT_QUOTES, 'UTF-8');?>
"
    data-empty-text="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No wishlist found.','d'=>'Modules.Blockwishlist.Shop'),$_smarty_tpl ) );?>
"
    data-rename-text="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Rename','d'=>'Modules.Blockwishlist.Shop'),$_smarty_tpl ) );?>
"
    data-share-text="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Share','d'=>'Modules.Blockwishlist.Shop'),$_smarty_tpl ) );?>
"
    data-add-text="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['newWishlistCTA']->value, ENT_QUOTES, 'UTF-8');?>
"
  ></div>

  <?php $_smarty_tpl->_subTemplateRender("module:blockwishlist/views/templates/components/modals/share.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('url'=>$_smarty_tpl->tpl_vars['shareUrl']->value), 0, false);
?>
  <?php $_smarty_tpl->_subTemplateRender("module:blockwishlist/views/templates/components/modals/rename.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('url'=>$_smarty_tpl->tpl_vars['renameUrl']->value), 0, false);
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer_container'} */
class Block_1226073064637f8b8e6445f0_52861104 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_footer_container' => 
  array (
    0 => 'Block_1226073064637f8b8e6445f0_52861104',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="wishlist-footer-links">
    <a href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true),'html' )), ENT_QUOTES, 'UTF-8');?>
" class="text-primary"><i class="material-icons">chevron_left</i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Return to your account','d'=>'Modules.Blockwishlist.Shop'),$_smarty_tpl ) );?>
</a>
    <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
" class="text-primary"><i class="material-icons">home</i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Home','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</a>
  </div>
<?php
}
}
/* {/block 'page_footer_container'} */
}
