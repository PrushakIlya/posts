<?php
/* Smarty version 5.7.0, created on 2026-01-30 05:40:01
  from 'file:/var/www/web/templates/./blocks/pagination.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.7.0',
  'unifunc' => 'content_697c44311b33a1_09376436',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1fc14cde94e6b0d44bb2e3611e34a8c7d47adbc8' => 
    array (
      0 => '/var/www/web/templates/./blocks/pagination.tpl',
      1 => 1769745907,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_697c44311b33a1_09376436 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/web/templates/blocks';
?><div class="pagination d-flex justify-content-center">
    <div class="d-flex">
        <?php
$_smarty_tpl->assign('page', null);$_smarty_tpl->tpl_vars['page']->step = 1;$_smarty_tpl->tpl_vars['page']->total = (int) ceil(($_smarty_tpl->tpl_vars['page']->step > 0 ? $_smarty_tpl->getValue('count')+1 - (1) : 1-($_smarty_tpl->getValue('count'))+1)/abs($_smarty_tpl->tpl_vars['page']->step));
if ($_smarty_tpl->tpl_vars['page']->total > 0) {
for ($_smarty_tpl->tpl_vars['page']->value = 1, $_smarty_tpl->tpl_vars['page']->iteration = 1;$_smarty_tpl->tpl_vars['page']->iteration <= $_smarty_tpl->tpl_vars['page']->total;$_smarty_tpl->tpl_vars['page']->value += $_smarty_tpl->tpl_vars['page']->step, $_smarty_tpl->tpl_vars['page']->iteration++) {
$_smarty_tpl->tpl_vars['page']->first = $_smarty_tpl->tpl_vars['page']->iteration === 1;$_smarty_tpl->tpl_vars['page']->last = $_smarty_tpl->tpl_vars['page']->iteration === $_smarty_tpl->tpl_vars['page']->total;?>
            <a href="/posts_categories/<?php echo $_smarty_tpl->getValue('category_id');?>
?page=<?php echo $_smarty_tpl->getValue('page');?>
" class="link page <?php if ($_smarty_tpl->getValue('page') === $_smarty_tpl->getValue('current_page')) {?> text-primary <?php }?>"><?php echo $_smarty_tpl->getValue('page');?>
</a>
        <?php }
}
?>
    </div>
</div><?php }
}
