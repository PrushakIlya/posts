<?php
/* Smarty version 5.7.0, created on 2026-01-30 08:10:08
  from 'file:index.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.7.0',
  'unifunc' => 'content_697c6760587ec4_88631835',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '45748149931acc7e50e4d5c11259b24ca05f6f91' => 
    array (
      0 => 'index.tpl',
      1 => 1769760607,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./blocks/post_block.tpl' => 1,
  ),
))) {
function content_697c6760587ec4_88631835 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/web/templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_49780545697c6760576452_71916929', 'body');
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "base.tpl", $_smarty_current_dir);
}
/* {block 'body'} */
class Block_49780545697c6760576452_71916929 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/web/templates';
?>

    <div class="main">
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('postsCategory'), 'posts', false, 'category');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('category')->value => $_smarty_tpl->getVariable('posts')->value) {
$foreach0DoElse = false;
?>
            <?php $_smarty_tpl->assign('category', $_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getValue('category'),"_"), false, NULL);?>
            <div>
                <div class="header d-flex justify-content-between align-items-center">
                    <h2 class="category"><?php echo $_smarty_tpl->getValue('category')[0];?>
</h2>
                    <a href="/posts_categories/<?php echo $_smarty_tpl->getValue('category')[1];?>
" class="link">All posts</a>
                </div>
                <div class="cards">
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('posts'), 'value');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('value')->value) {
$foreach1DoElse = false;
?>
                        <?php $_smarty_tpl->renderSubTemplate("file:./blocks/post_block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('img_path'=>$_smarty_tpl->getValue('value')['img_path'],'name'=>$_smarty_tpl->getValue('value')['post_name'],'description'=>$_smarty_tpl->getValue('value')['description'],'publication_date'=>$_smarty_tpl->getValue('value')['publication_date'],'count_views'=>$_smarty_tpl->getValue('value')['count_views'],'id'=>$_smarty_tpl->getValue('value')['id']), (int) 0, $_smarty_current_dir);
?>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </div>
            </div>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    </div>
<?php
}
}
/* {/block 'body'} */
}
