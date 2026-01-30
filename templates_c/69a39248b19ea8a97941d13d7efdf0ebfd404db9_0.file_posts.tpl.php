<?php
/* Smarty version 5.7.0, created on 2026-01-30 07:51:54
  from 'file:posts.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.7.0',
  'unifunc' => 'content_697c631aa79ce4_44540062',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '69a39248b19ea8a97941d13d7efdf0ebfd404db9' => 
    array (
      0 => 'posts.tpl',
      1 => 1769759513,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./blocks/post_block.tpl' => 1,
    'file:./blocks/pagination.tpl' => 1,
  ),
))) {
function content_697c631aa79ce4_44540062 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/web/templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1898362135697c631aa69ce8_51496263', 'body');
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "base.tpl", $_smarty_current_dir);
}
/* {block 'body'} */
class Block_1898362135697c631aa69ce8_51496263 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/web/templates';
?>

    <a href="/" class="link underline"><- To Main Page</a>
    <div class="text-white d-flex">
        <div class="pr-5 d-flex align-items-center">
            <a href="/posts_categories/<?php echo $_smarty_tpl->getValue('category_id');?>
?page=<?php echo $_smarty_tpl->getValue('page');?>
&filter=view_up" class="link <?php if ($_smarty_tpl->getValue('filter') === 'view_up') {?>text-primary<?php }?>">Count View</a>
            <p>⭡</p>
        </div>
        <div class="pr-5 d-flex align-items-center">
            <a href="/posts_categories/<?php echo $_smarty_tpl->getValue('category_id');?>
?page=<?php echo $_smarty_tpl->getValue('page');?>
&filter=view_down" class="link <?php if ($_smarty_tpl->getValue('filter') === 'view_down') {?>text-primary<?php }?>">Count View</a>
            <p>⭣</p>
        </div>
        <div class="pr-5 d-flex align-items-center">
            <a href="/posts_categories/<?php echo $_smarty_tpl->getValue('category_id');?>
?page=<?php echo $_smarty_tpl->getValue('page');?>
&filter=publication_up" class="link <?php if ($_smarty_tpl->getValue('filter') === 'publication_up') {?>text-primary<?php }?>">Publication Date </a>
            <p>⭣</p>
        </div>
        <div class="pr-5 d-flex align-items-center">
            <a href="/posts_categories/<?php echo $_smarty_tpl->getValue('category_id');?>
?page=<?php echo $_smarty_tpl->getValue('page');?>
&filter=publication_down" class="link <?php if ($_smarty_tpl->getValue('filter') === 'publication_down') {?>text-primary<?php }?>">Publication Date </a>
            <p>⭡</p>
        </div>
    </div>
    <div>
        <div>
            <div class="cards">
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('posts'), 'value');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('value')->value) {
$foreach0DoElse = false;
?>
                    <?php $_smarty_tpl->renderSubTemplate("file:./blocks/post_block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('img_path'=>$_smarty_tpl->getValue('value')['img_path'],'name'=>$_smarty_tpl->getValue('value')['name'],'description'=>$_smarty_tpl->getValue('value')['description'],'publication_date'=>$_smarty_tpl->getValue('value')['publication_date'],'count_views'=>$_smarty_tpl->getValue('value')['count_views'],'id'=>$_smarty_tpl->getValue('value')['id']), (int) 0, $_smarty_current_dir);
?>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </div>
        </div>

        <?php $_smarty_tpl->renderSubTemplate("file:./blocks/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('count'=>$_smarty_tpl->getValue('count'),'category_id'=>$_smarty_tpl->getValue('category_id'),'current_page'=>$_smarty_tpl->getValue('page')), (int) 0, $_smarty_current_dir);
?>
    </div>
<?php
}
}
/* {/block 'body'} */
}
