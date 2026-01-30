<?php
/* Smarty version 5.7.0, created on 2026-01-30 08:07:32
  from 'file:/var/www/web/templates/./blocks/post_block.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.7.0',
  'unifunc' => 'content_697c66c4518ac9_49748723',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51a150beaabf138d137c7e3379b31ed86e8ce962' => 
    array (
      0 => '/var/www/web/templates/./blocks/post_block.tpl',
      1 => 1769760450,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_697c66c4518ac9_49748723 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/web/templates/blocks';
?><div class="card">
    <img src='/images/<?php echo $_smarty_tpl->getValue('img_path');?>
' alt="">
    <div>
        <p class="py-10"><?php echo $_smarty_tpl->getValue('name');?>
</p>
        <p class="description"><?php echo $_smarty_tpl->getValue('description');?>
</p>
        <p class="pt-10">Count Views: <?php echo $_smarty_tpl->getValue('count_views');?>
</p>
        <p class="py-10"><?php echo $_smarty_tpl->getValue('publication_date');?>
</p>
    </div>
    <a href="/posts/<?php echo $_smarty_tpl->getValue('id');?>
" class="link underline">Continue Reading</a>
</div><?php }
}
