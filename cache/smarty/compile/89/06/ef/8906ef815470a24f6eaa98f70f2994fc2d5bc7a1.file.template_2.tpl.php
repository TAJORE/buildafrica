<?php /* Smarty version Smarty-3.1.19, created on 2018-05-01 02:56:51
         compiled from "C:\wamp64\www\buildafrica\modules\Dohone\views\templates\admin\template_2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5659023045ae7c9631b8384-41338523%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8906ef815470a24f6eaa98f70f2994fc2d5bc7a1' => 
    array (
      0 => 'C:\\wamp64\\www\\buildafrica\\modules\\Dohone\\views\\templates\\admin\\template_2.tpl',
      1 => 1525135610,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5659023045ae7c9631b8384-41338523',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ae7c9631edf99_20772348',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae7c9631edf99_20772348')) {function content_5ae7c9631edf99_20772348($_smarty_tpl) {?>

<div class="panel">
	<div class="row Dohone-header">
		<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_dir']->value, ENT_QUOTES, 'UTF-8', true);?>
views/img/template_2_logo.png" class="col-xs-6 col-md-3 text-center" id="payment-logo" />
		<div class="col-xs-6 col-md-6 text-center text-muted">
			<?php echo smartyTranslate(array('s'=>'My Payment Module and PrestaShop have partnered to provide the easiest way for you to accurately calculate and file sales tax.','mod'=>'Dohone'),$_smarty_tpl);?>

		</div>
		<div class="col-xs-12 col-md-3 text-center">
			<a href="#" onclick="javascript:return false;" class="btn btn-primary" id="create-account-btn"><?php echo smartyTranslate(array('s'=>'Create an account','mod'=>'Dohone'),$_smarty_tpl);?>
</a><br />
			<?php echo smartyTranslate(array('s'=>'Already have one?','mod'=>'Dohone'),$_smarty_tpl);?>
<a href="#" onclick="javascript:return false;"> <?php echo smartyTranslate(array('s'=>'Log in','mod'=>'Dohone'),$_smarty_tpl);?>
</a>
		</div>
	</div>

	<hr />
	
	<div class="Dohone-content">
		<div class="row">
			<div class="col-md-5">
				<h5><?php echo smartyTranslate(array('s'=>'Benefits of using my payment module','mod'=>'Dohone'),$_smarty_tpl);?>
</h5>
				<ul class="ul-spaced">
					<li>
						<strong><?php echo smartyTranslate(array('s'=>'It is fast and easy','mod'=>'Dohone'),$_smarty_tpl);?>
:</strong>
						<?php echo smartyTranslate(array('s'=>'It is pre-integrated with PrestaShop, so you can configure it with a few clicks.','mod'=>'Dohone'),$_smarty_tpl);?>

					</li>
					
					<li>
						<strong><?php echo smartyTranslate(array('s'=>'It is global','mod'=>'Dohone'),$_smarty_tpl);?>
:</strong>
						<?php echo smartyTranslate(array('s'=>'Accept payments in XX currencies from XXX markets around the world.','mod'=>'Dohone'),$_smarty_tpl);?>

					</li>
					
					<li>
						<strong><?php echo smartyTranslate(array('s'=>'It is trusted','mod'=>'Dohone'),$_smarty_tpl);?>
:</strong>
						<?php echo smartyTranslate(array('s'=>'Industry-leading fraud an buyer protections keep you and your customers safe.','mod'=>'Dohone'),$_smarty_tpl);?>

					</li>
					
					<li>
						<strong><?php echo smartyTranslate(array('s'=>'It is cost-effective','mod'=>'Dohone'),$_smarty_tpl);?>
:</strong>
						<?php echo smartyTranslate(array('s'=>'There are no setup fees or long-term contracts. You only pay a low transaction fee.','mod'=>'Dohone'),$_smarty_tpl);?>

					</li>
				</ul>
			</div>
			
			<div class="col-md-2">
				<h5><?php echo smartyTranslate(array('s'=>'Pricing','mod'=>'Dohone'),$_smarty_tpl);?>
</h5>
				<dl class="list-unstyled">
					<dt><?php echo smartyTranslate(array('s'=>'Payment Standard','mod'=>'Dohone'),$_smarty_tpl);?>
</dt>
					<dd><?php echo smartyTranslate(array('s'=>'No monthly fee','mod'=>'Dohone'),$_smarty_tpl);?>
</dd>
					<dt><?php echo smartyTranslate(array('s'=>'Payment Express','mod'=>'Dohone'),$_smarty_tpl);?>
</dt>
					<dd><?php echo smartyTranslate(array('s'=>'No monthly fee','mod'=>'Dohone'),$_smarty_tpl);?>
</dd>
					<dt><?php echo smartyTranslate(array('s'=>'Payment Pro','mod'=>'Dohone'),$_smarty_tpl);?>
</dt>
					<dd><?php echo smartyTranslate(array('s'=>'$5 per month','mod'=>'Dohone'),$_smarty_tpl);?>
</dd>
				</dl>
				<a href="#" onclick="javascript:return false;">(Detailed pricing here)</a>
			</div>
			
			<div class="col-md-5">
				<h5><?php echo smartyTranslate(array('s'=>'How does it work?','mod'=>'Dohone'),$_smarty_tpl);?>
</h5>
				<iframe src="//player.vimeo.com/video/75405291" width="335" height="188" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
			</div>
		</div>

		<hr />
		
		<div class="row">
			<div class="col-md-12">
				<p class="text-muted"><?php echo smartyTranslate(array('s'=>'My Payment Module accepts more than 80 localized payment methods around the world','mod'=>'Dohone'),$_smarty_tpl);?>
</p>
				
				<div class="row">
					<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_dir']->value, ENT_QUOTES, 'UTF-8', true);?>
views/img/template_2_cards.png" class="col-md-3" id="payment-logo" />
					<div class="col-md-9 text-center">
						<h6><?php echo smartyTranslate(array('s'=>'For more information, call 888-888-1234','mod'=>'Dohone'),$_smarty_tpl);?>
 <?php echo smartyTranslate(array('s'=>'or','mod'=>'Dohone'),$_smarty_tpl);?>
 <a href="mailto:contact@prestashop.com">contact@prestashop.com</a></h6>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="panel">
	<p class="text-muted">
		<i class="icon icon-info-circle"></i> <?php echo smartyTranslate(array('s'=>'In order to create a secure account with My Payment Module, please complete the fields in the settings panel below:','mod'=>'Dohone'),$_smarty_tpl);?>

		<?php echo smartyTranslate(array('s'=>'By clicking the "Save" button you are creating secure connection details to your store.','mod'=>'Dohone'),$_smarty_tpl);?>

		<?php echo smartyTranslate(array('s'=>'My Payment Module signup only begins when you client on "Activate your account" in the registration panel below.','mod'=>'Dohone'),$_smarty_tpl);?>

		<?php echo smartyTranslate(array('s'=>'If you already have an account you can create a new shop within your account.','mod'=>'Dohone'),$_smarty_tpl);?>

	</p>
	<p>
		<a href="#" onclick="javascript:return false;"><i class="icon icon-file"></i> Link to the documentation</a>
	</p>
</div><?php }} ?>
