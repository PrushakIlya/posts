<?php
/* Smarty version 5.7.0, created on 2026-01-30 07:49:23
  from 'file:post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.7.0',
  'unifunc' => 'content_697c6283d71417_33348300',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bce87523f0272ba006a79f81c0fed411c21a8873' => 
    array (
      0 => 'post.tpl',
      1 => 1769759361,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./blocks/same_post_block.tpl' => 1,
  ),
))) {
function content_697c6283d71417_33348300 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/web/templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1230254367697c6283d68582_50781447', 'body');
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "base.tpl", $_smarty_current_dir);
}
/* {block 'body'} */
class Block_1230254367697c6283d68582_50781447 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/web/templates';
?>

    <a href="/" class="link underline"><- To Main Page</a>
    <div class="text-white">
        <img src='/images/<?php echo $_smarty_tpl->getValue('post')['img_path'];?>
' alt="">
        <h1><?php echo $_smarty_tpl->getValue('post')['name'];?>
</h1>
        <p><?php echo $_smarty_tpl->getValue('post')['text'];?>
</p>
        <p>Count Views: <?php echo $_smarty_tpl->getValue('post')['count_views'];?>
</p>
        <p><?php echo $_smarty_tpl->getValue('post')['publication_date'];?>
</p>
    </div>

    <?php $_smarty_tpl->renderSubTemplate("file:./blocks/same_post_block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('samePosts'=>$_smarty_tpl->getValue('same_posts')), (int) 0, $_smarty_current_dir);
}
}
/* {/block 'body'} */
}
