<?php /* Smarty version Smarty-3.0.7, created on 2013-04-27 14:57:20
         compiled from "tpl/headercommon.tpl" */ ?>
<?php /*%%SmartyHeaderCode:613016069517bcb30a83ee4-49407193%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c2380e4c5e99189540b837d39ba55eacf0fd8f40' => 
    array (
      0 => 'tpl/headercommon.tpl',
      1 => 1367016143,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '613016069517bcb30a83ee4-49407193',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_smarty_tpl->getVariable('currentPage')->value==$_smarty_tpl->getVariable('PAGES')->value['PUBLIC_PROFILE']){?>
    <meta property="og:title" content="irememberya.com - <?php echo $_smarty_tpl->getVariable('user')->value['firstname'];?>
 <?php echo $_smarty_tpl->getVariable('user')->value['lastname'];?>
"/>
    <meta property="og:url" content="http://<?php echo $_SERVER['SERVER_NAME'];?>
<?php echo $_SERVER['REQUEST_URI'];?>
"/>
    <meta property="og:image" content="<?php echo $_smarty_tpl->getVariable('user')->value['pictureUrl'];?>
"/>
    <meta property="og:description" content="What are my Top 3 Skills and professional strengths? Tell me at http://irememberya.com/<?php echo $_smarty_tpl->getVariable('user')->value['username'];?>
"/>

    <link rel="image_src" type="image/png" href="<?php echo $_smarty_tpl->getVariable('user')->value['pictureUrl'];?>
" />    
    <meta name="description" content="What are my Top 3 Skills and professional strengths? Tell me at http://irememberya.com/<?php echo $_smarty_tpl->getVariable('user')->value['username'];?>
" />
<?php }else{ ?>
    <meta property="og:title" content="Top 3 Skills"/>
    <meta property="og:url" content="http://irememberya.com"/>
    <meta property="og:image" content="http://irememberya.com/tpl/img/t3s100_100.png"/>
    <meta property="og:description" content="irememberya.com - the Quick Recommendations Service.
    Ask your connections to write the Top 3 Skills and professional strengths that best describe you."/>

    <meta name="description" content="irememberya.com - the Quick Recommendations Service.
    Ask your connections to write the Top 3 Skills and professional strengths that best describe you." />
    <link rel="image_src" type="image/png" href="http://irememberya.com/tpl/img/t3s100_100.png" />
<?php }?>

<meta property="og:type" content="website"/>
<meta property="og:site_name" content="Top 3 Skills"/>
<meta property="fb:admins" content="693665996,524092012"/>
<meta name="keywords" content="top 3 skills, top, skills, strengths, recommendations, jobs, job finder, professional, linkedin, quick, hr, raises, wages, boss, career" />