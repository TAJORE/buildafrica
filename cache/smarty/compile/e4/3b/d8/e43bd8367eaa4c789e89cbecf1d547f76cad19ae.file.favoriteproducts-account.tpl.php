<?php /* Smarty version Smarty-3.1.19, created on 2018-04-25 00:09:40
         compiled from "C:\wamp64\www\buildafrica\themes\default-bootstrap\modules\favoriteproducts\views\templates\front\favoriteproducts-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16055221015adfc7449f21c4-64643718%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e43bd8367eaa4c789e89cbecf1d547f76cad19ae' => 
    array (
      0 => 'C:\\wamp64\\www\\buildafrica\\themes\\default-bootstrap\\modules\\favoriteproducts\\views\\templates\\front\\favoriteproducts-account.tpl',
      1 => 1517239232,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16055221015adfc7449f21c4-64643718',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'navigationPipe' => 0,
    'favoriteProducts' => 0,
    'favoriteProduct' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5adfc744a3fea9_05405790',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5adfc744a3fea9_05405790')) {function content_5adfc744a3fea9_05405790($_smarty_tpl) {?>
<?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?>
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
">
		<?php echo smartyTranslate(array('s'=>'My account','mod'=>'favoriteproducts'),$_smarty_tpl);?>

	</a>
	<span class="navigation-pipe"><?php echo $_smarty_tpl->tpl_vars['navigationPipe']->value;?>
</span>
	<span class="navigation_page"><?php echo smartyTranslate(array('s'=>'My favorite products','mod'=>'favoriteproducts'),$_smarty_tpl);?>
</span>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<div id="favoriteproducts_block_account">
	<h1 class="page-heading"><?php echo smartyTranslate(array('s'=>'My favorite products','mod'=>'favoriteproducts'),$_smarty_tpl);?>
</h1>
	<?php if ($_smarty_tpl->tpl_vars['favoriteProducts']->value) {?>
    	<ul class="row">
			<?php  $_smarty_tpl->tpl_vars['favoriteProduct'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['favoriteProduct']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['favoriteProducts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['favoriteProduct']->key => $_smarty_tpl->tpl_vars['favoriteProduct']->value) {
$_smarty_tpl->tpl_vars['favoriteProduct']->_loop = true;
?>
			<li class="col-xs-12">
            	<div class="favoriteproduct clearfix inner-content">
                    <a 
                    class="product_img_link"
                    href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['favoriteProduct']->value['id_product'],null,null,null,null,$_smarty_tpl->tpl_vars['favoriteProduct']->value['id_shop']), ENT_QUOTES, 'UTF-8', true);?>
">
                        <img 
                        src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['favoriteProduct']->value['link_rewrite'],$_smarty_tpl->tpl_vars['favoriteProduct']->value['image'],'medium_default'), ENT_QUOTES, 'UTF-8', true);?>
" 
                        alt=""/>
                    </a>
                    <p class="s_title_block">
                    	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['favoriteProduct']->value['id_product'],null,null,null,null,$_smarty_tpl->tpl_vars['favoriteProduct']->value['id_shop']), ENT_QUOTES, 'UTF-8', true);?>
">
                    		<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['favoriteProduct']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

                    	</a>
                    </p>
                    <div class="product_desc"><?php echo htmlspecialchars(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['favoriteProduct']->value['description_short']), ENT_QUOTES, 'UTF-8', true);?>
</div>
                    <div class="remove">
                    	<a href="#" rel="ajax_id_favoriteproduct_<?php echo $_smarty_tpl->tpl_vars['favoriteProduct']->value['id_product'];?>
">
                    		<i class="icon-remove"></i>
                    	</a>
                    </div>
                </div>
			</li>
			<?php } ?>
        </ul>
	<?php } else { ?>
		<p class="alert alert-warning"><?php echo smartyTranslate(array('s'=>'No favorite products have been determined just yet. ','mod'=>'favoriteproducts'),$_smarty_tpl);?>
</p>
	<?php }?>

	<ul class="footer_links clearfix">
		<li>
			<a 
			class="btn btn-default button button-small" 
			href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
">
				<span>
					<i class="icon-chevron-left"></i><?php echo smartyTranslate(array('s'=>'Back to your account','mod'=>'favoriteproducts'),$_smarty_tpl);?>

				</span>
			</a>
		</li>
	</ul>
</div>
<?php }} ?>