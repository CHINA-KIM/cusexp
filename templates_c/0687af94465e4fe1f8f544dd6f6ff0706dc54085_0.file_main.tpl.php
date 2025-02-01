<?php
/* Smarty version 5.4.3, created on 2025-01-31 06:46:02
  from 'file:main.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_679c71aa27add5_52991368',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0687af94465e4fe1f8f544dd6f6ff0706dc54085' => 
    array (
      0 => 'main.tpl',
      1 => 1738303149,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index.tpl' => 1,
    'file:service.tpl' => 1,
    'file:about.tpl' => 1,
    'file:contact.tpl' => 1,
  ),
))) {
function content_679c71aa27add5_52991368 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\cusexp\\static\\templates';
$_smarty_tpl->renderSubTemplate('file:index.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate('file:service.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate('file:about.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate('file:contact.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
