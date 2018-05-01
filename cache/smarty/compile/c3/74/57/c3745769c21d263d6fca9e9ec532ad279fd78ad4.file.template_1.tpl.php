<?php /* Smarty version Smarty-3.1.19, created on 2018-05-01 02:56:50
         compiled from "C:\wamp64\www\buildafrica\modules\Dohone\views\templates\admin\template_1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1216566795ae7c96244cd87-49830945%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c3745769c21d263d6fca9e9ec532ad279fd78ad4' => 
    array (
      0 => 'C:\\wamp64\\www\\buildafrica\\modules\\Dohone\\views\\templates\\admin\\template_1.tpl',
      1 => 1525135610,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1216566795ae7c96244cd87-49830945',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ae7c962bc3134_06005123',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae7c962bc3134_06005123')) {function content_5ae7c962bc3134_06005123($_smarty_tpl) {?>

<div class="panel">
	<div class="row Dohone-header">
		<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_dir']->value, ENT_QUOTES, 'UTF-8', true);?>
views/img/template_1_logo.png" class="col-xs-6 col-md-4 text-center" id="payment-logo" />
		<div class="col-xs-6 col-md-4 text-center">
			<h4><?php echo smartyTranslate(array('s'=>'Online payment processing','mod'=>'Dohone'),$_smarty_tpl);?>
</h4>
			<h4><?php echo smartyTranslate(array('s'=>'Fast - Secure - Reliable','mod'=>'Dohone'),$_smarty_tpl);?>
</h4>
		</div>
		<div class="col-xs-12 col-md-4 text-center">
			<a href="#" onclick="javascript:return false;" class="btn btn-primary" id="create-account-btn"><?php echo smartyTranslate(array('s'=>'Create an account now!','mod'=>'Dohone'),$_smarty_tpl);?>
</a><br />
			<?php echo smartyTranslate(array('s'=>'Already have an account?','mod'=>'Dohone'),$_smarty_tpl);?>
<a href="#" onclick="javascript:return false;"> <?php echo smartyTranslate(array('s'=>'Log in','mod'=>'Dohone'),$_smarty_tpl);?>
</a>
		</div>
	</div>

	<hr />
	
	<div class="Dohone-content">
		<div class="row">
			<div class="col-md-6">
				<h5><?php echo smartyTranslate(array('s'=>'My payment module offers the following benefits','mod'=>'Dohone'),$_smarty_tpl);?>
</h5>
				<dl>
					<dt>&middot; <?php echo smartyTranslate(array('s'=>'Increase customer payment options','mod'=>'Dohone'),$_smarty_tpl);?>
</dt>
					<dd><?php echo smartyTranslate(array('s'=>'Visa®, Mastercard®, Diners Club®, American Express®, Discover®, Network and CJB®, plus debit, gift cards and more.','mod'=>'Dohone'),$_smarty_tpl);?>
</dd>
					
					<dt>&middot; <?php echo smartyTranslate(array('s'=>'Help to improve cash flow','mod'=>'Dohone'),$_smarty_tpl);?>
</dt>
					<dd><?php echo smartyTranslate(array('s'=>'Receive funds quickly from the bank of your choice.','mod'=>'Dohone'),$_smarty_tpl);?>
</dd>
					
					<dt>&middot; <?php echo smartyTranslate(array('s'=>'Enhanced security','mod'=>'Dohone'),$_smarty_tpl);?>
</dt>
					<dd><?php echo smartyTranslate(array('s'=>'Multiple firewalls, encryption protocols and fraud protection.','mod'=>'Dohone'),$_smarty_tpl);?>
</dd>
					
					<dt>&middot; <?php echo smartyTranslate(array('s'=>'One-source solution','mod'=>'Dohone'),$_smarty_tpl);?>
</dt>
					<dd><?php echo smartyTranslate(array('s'=>'Conveniance of one invoice, one set of reports and one 24/7 customer service contact.','mod'=>'Dohone'),$_smarty_tpl);?>
</dd>
				</dl>
			</div>
			
			<div class="col-md-6">
				<h5><?php echo smartyTranslate(array('s'=>'FREE My Payment Module Glocal Gateway (Value of 400$)','mod'=>'Dohone'),$_smarty_tpl);?>
</h5>
				<ul>
					<li><?php echo smartyTranslate(array('s'=>'Simple, secure and reliable solution to process online payments','mod'=>'Dohone'),$_smarty_tpl);?>
</li>
					<li><?php echo smartyTranslate(array('s'=>'Virtual terminal','mod'=>'Dohone'),$_smarty_tpl);?>
</li>
					<li><?php echo smartyTranslate(array('s'=>'Reccuring billing','mod'=>'Dohone'),$_smarty_tpl);?>
</li>
					<li><?php echo smartyTranslate(array('s'=>'24/7/365 customer support','mod'=>'Dohone'),$_smarty_tpl);?>
</li>
					<li><?php echo smartyTranslate(array('s'=>'Ability to perform full or patial refunds','mod'=>'Dohone'),$_smarty_tpl);?>
</li>
				</ul>
				<br />
				<em class="text-muted small">
					* <?php echo smartyTranslate(array('s'=>'New merchant account required and subject to credit card approval.','mod'=>'Dohone'),$_smarty_tpl);?>

					<?php echo smartyTranslate(array('s'=>'The free My Payment Module Global Gateway will be accessed through log in information provided via email within 48 hours.','mod'=>'Dohone'),$_smarty_tpl);?>

					<?php echo smartyTranslate(array('s'=>'Monthly fees for My Payment Module Global Gateway will apply.','mod'=>'Dohone'),$_smarty_tpl);?>

				</em>
			</div>
		</div>

		<hr />
		
		<div class="row">
			<div class="col-md-12">
				<h4><?php echo smartyTranslate(array('s'=>'Accept payments in the United States using all major credit cards','mod'=>'Dohone'),$_smarty_tpl);?>
</h4>
				
				<div class="row">
					<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_dir']->value, ENT_QUOTES, 'UTF-8', true);?>
views/img/template_1_cards.png" class="col-md-6" id="payment-logo" />
					<div class="col-md-6">
						<h6 class="text-branded"><?php echo smartyTranslate(array('s'=>'For transactions in US Dollars (USD) only','mod'=>'Dohone'),$_smarty_tpl);?>
</h6>
						<p class="text-branded"><?php echo smartyTranslate(array('s'=>'Call 888-888-1234 if you have any questions or need more information!','mod'=>'Dohone'),$_smarty_tpl);?>
</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php }} ?>
