<?php
/* Smarty version 5.7.0, created on 2026-01-30 05:40:01
  from 'file:base.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.7.0',
  'unifunc' => 'content_697c443119a628_98289762',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '34ed622d33d9d5ec37e18fe2f2cf16fcdc2ef6ca' => 
    array (
      0 => 'base.tpl',
      1 => 1769741932,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
))) {
function content_697c443119a628_98289762 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/web/templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/dist/main.css" type="text/css" />
    <title>Document</title>
</head>
<body class="d-flex flex-column">
    <?php $_smarty_tpl->renderSubTemplate("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

    <div class="container">
        <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_558030163697c44311998f6_83927267', 'body');
?>

    </div>

    <?php $_smarty_tpl->renderSubTemplate("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
</body>
</html><?php }
/* {block 'body'} */
class Block_558030163697c44311998f6_83927267 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/web/templates';
}
}
/* {/block 'body'} */
}
