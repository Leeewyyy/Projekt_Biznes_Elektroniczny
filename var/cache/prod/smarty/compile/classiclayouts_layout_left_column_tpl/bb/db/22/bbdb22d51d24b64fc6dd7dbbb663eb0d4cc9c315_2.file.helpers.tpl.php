<?php
/* Smarty version 4.2.1, created on 2022-11-24 16:17:59
  from 'C:\wamp64\www\themes\classic\templates\_partials\helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_637f8b278babe7_76881390',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bbdb22d51d24b64fc6dd7dbbb663eb0d4cc9c315' => 
    array (
      0 => 'C:\\wamp64\\www\\themes\\classic\\templates\\_partials\\helpers.tpl',
      1 => 1669300968,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_637f8b278babe7_76881390 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'C:\\wamp64\\www\\var\\cache\\prod\\smarty\\compile\\classiclayouts_layout_left_column_tpl\\bb\\db\\22\\bbdb22d51d24b64fc6dd7dbbb663eb0d4cc9c315_2.file.helpers.tpl.php',
    'uid' => 'bbdb22d51d24b64fc6dd7dbbb663eb0d4cc9c315',
    'call_name' => 'smarty_template_function_renderLogo_284823848637f8b278b2f24_24142334',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_284823848637f8b278b2f24_24142334 */
if (!function_exists('smarty_template_function_renderLogo_284823848637f8b278b2f24_24142334')) {
function smarty_template_function_renderLogo_284823848637f8b278b2f24_24142334(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_284823848637f8b278b2f24_24142334 */
}
