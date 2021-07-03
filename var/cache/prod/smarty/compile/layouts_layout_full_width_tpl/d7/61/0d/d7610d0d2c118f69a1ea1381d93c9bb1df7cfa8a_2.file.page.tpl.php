<?php
/* Smarty version 3.1.33, created on 2021-06-17 21:27:58
  from 'C:\xampp\htdocs\digital1769\themes\classic\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60cba23e964f95_45768613',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd7610d0d2c118f69a1ea1381d93c9bb1df7cfa8a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\digital1769\\themes\\classic\\templates\\page.tpl',
      1 => 1605521391,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60cba23e964f95_45768613 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_155479336060cba23e94f334_74606319', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_49152519760cba23e9512f1_75262130 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_10770760160cba23e950708_89720475 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_49152519760cba23e9512f1_75262130', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_43442944160cba23e9614c2_38847244 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_31573985660cba23e962047_05981712 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_61682471260cba23e960b84_07250160 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_43442944160cba23e9614c2_38847244', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_31573985660cba23e962047_05981712', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_51062666260cba23e963aa2_53978223 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_188004338060cba23e963281_90428559 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_51062666260cba23e963aa2_53978223', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_155479336060cba23e94f334_74606319 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_155479336060cba23e94f334_74606319',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_10770760160cba23e950708_89720475',
  ),
  'page_title' => 
  array (
    0 => 'Block_49152519760cba23e9512f1_75262130',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_61682471260cba23e960b84_07250160',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_43442944160cba23e9614c2_38847244',
  ),
  'page_content' => 
  array (
    0 => 'Block_31573985660cba23e962047_05981712',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_188004338060cba23e963281_90428559',
  ),
  'page_footer' => 
  array (
    0 => 'Block_51062666260cba23e963aa2_53978223',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10770760160cba23e950708_89720475', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_61682471260cba23e960b84_07250160', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_188004338060cba23e963281_90428559', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
