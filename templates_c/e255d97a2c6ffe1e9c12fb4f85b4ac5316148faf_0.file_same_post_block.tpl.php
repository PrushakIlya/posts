<?php
/* Smarty version 5.7.0, created on 2026-01-30 08:06:06
  from 'file:/var/www/web/templates/./blocks/same_post_block.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.7.0',
  'unifunc' => 'content_697c666ec3b746_77232200',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e255d97a2c6ffe1e9c12fb4f85b4ac5316148faf' => 
    array (
      0 => '/var/www/web/templates/./blocks/same_post_block.tpl',
      1 => 1769760364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./post_block.tpl' => 1,
  ),
))) {
function content_697c666ec3b746_77232200 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/web/templates/blocks';
?><div class="posts">
    <h2 class="text-white">The Same Post</h2>
    <div class="d-flex">
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('same_posts'), 'value');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('value')->value) {
$foreach0DoElse = false;
?>
            <?php $_smarty_tpl->renderSubTemplate("file:./post_block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('img_path'=>$_smarty_tpl->getValue('value')['img_path'],'name'=>$_smarty_tpl->getValue('value')['name'],'description'=>$_smarty_tpl->getValue('value')['description'],'publication_date'=>$_smarty_tpl->getValue('value')['publication_date'],'count_views'=>$_smarty_tpl->getValue('value')['count_views'],'id'=>$_smarty_tpl->getValue('value')['id']), (int) 0, $_smarty_current_dir);
?>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    </div>
</div><?php }
}
