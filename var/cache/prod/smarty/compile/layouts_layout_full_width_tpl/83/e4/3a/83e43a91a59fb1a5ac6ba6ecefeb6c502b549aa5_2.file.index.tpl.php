<?php
/* Smarty version 3.1.33, created on 2021-06-17 21:27:58
  from 'C:\xampp\htdocs\digital1769\themes\classic\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60cba23e726002_54077299',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '83e43a91a59fb1a5ac6ba6ecefeb6c502b549aa5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\digital1769\\themes\\classic\\templates\\index.tpl',
      1 => 1605521391,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60cba23e726002_54077299 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_189568733160cba23e722093_41851529', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_45129910360cba23e722a70_41899363 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_203695594260cba23e724075_93677898 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_74917944760cba23e723830_82902620 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_203695594260cba23e724075_93677898', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_189568733160cba23e722093_41851529 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_189568733160cba23e722093_41851529',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_45129910360cba23e722a70_41899363',
  ),
  'page_content' => 
  array (
    0 => 'Block_74917944760cba23e723830_82902620',
  ),
  'hook_home' => 
  array (
    0 => 'Block_203695594260cba23e724075_93677898',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_45129910360cba23e722a70_41899363', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_74917944760cba23e723830_82902620', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
