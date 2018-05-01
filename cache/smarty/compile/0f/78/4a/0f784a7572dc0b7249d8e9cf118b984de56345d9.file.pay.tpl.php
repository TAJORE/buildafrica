<?php /* Smarty version Smarty-3.1.19, created on 2018-05-01 02:58:31
         compiled from "C:\wamp64\www\buildafrica\modules\Dohone\views\templates\hook\pay.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2204455985ae7c9c781c9f4-87772112%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f784a7572dc0b7249d8e9cf118b984de56345d9' => 
    array (
      0 => 'C:\\wamp64\\www\\buildafrica\\modules\\Dohone\\views\\templates\\hook\\pay.tpl',
      1 => 1525135611,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2204455985ae7c9c781c9f4-87772112',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cart' => 0,
    'domain' => 0,
    'payment_button' => 0,
    'cookie' => 0,
    'reference' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ae7c9c7a87022_94743411',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae7c9c7a87022_94743411')) {function content_5ae7c9c7a87022_94743411($_smarty_tpl) {?><div class="container-fluid">
    <div class="col-xs-12 col-md-12">
        <p class="payment_module" id="Dohone_payment_button">
            <?php if ($_smarty_tpl->tpl_vars['cart']->value->getOrderTotal()<2) {?>
            <a href="">
                <img src="<?php echo htmlspecialchars(($_smarty_tpl->tpl_vars['domain']->value).($_smarty_tpl->tpl_vars['payment_button']->value), ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo smartyTranslate(array('s'=>'Pay with my payment module','mod'=>'Dohone'),$_smarty_tpl);?>
" />
                <?php echo smartyTranslate(array('s'=>'Minimum amount required in order to pay with my payment module:','mod'=>'Dohone'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>2),$_smarty_tpl);?>

            </a>
            <?php } else { ?>
        <form method="post" action="https://www.my-dohone.com/dohone/pay">

            <input type="hidden" name="cmd" value="start">              <!--
Cette Valeur est à ne pas changer et elle est Obligatoire -->

            <input type="hidden" name="rN" value="<?php echo $_smarty_tpl->tpl_vars['cookie']->value->customer_firstname;?>
">              <!-- le
nom de votre client qui effectue le paiement -->

            <input type="hidden" name="rT" value="693843155">
            <!-- Numéro Téléphone du client qui effectue le paiement (Obligatoire) -->

            <input type="hidden" name="rE" value="nanfackeric@gmail.com">
            <!-- Adresse email du client qui effectue le paiement -->


            <input type="hidden" name="rH" value="">
            <!-- Votre Code-marchand que vous avez reçu par mail (Obligatoire) -->


            <input type="hidden" name="rI" value="<?php echo $_smarty_tpl->tpl_vars['reference']->value;?>
">                <!-- Le
numéro de votre commande. Si votre système ne gère pas de numéro de commande, vous pouvez enlevez ce champs.
c'est facultatif. -->

            <input type="hidden" name="rMt" value="<?php echo $_smarty_tpl->tpl_vars['cart']->value->getOrderTotal();?>
">              <!--
Montant TOTAL des achats (Obligatoire). C’est le montant qui devra être payé par votre client. Par défaut la
dévise de ce montant est l'euro, Sauf si vous précisez une autre devise sous le paramètre 'rDvs' ci-après. -->

            <input type="hidden" name="rDvs" value="XAF">              <!-- La
devise correspondante au montant que vous avez donné. Ce paramètre est facultatif. Dans le cas où vous ne
précisez pas ce paramètre, la devise est EUR. Vous avez le choix entre 3 devises uniquement : EUR, XAF, USD -->


            <input type="hidden" name="rOnly" value="1, 2, 3,5,16,10">
            <!-- Ceci est optionnel. Si vous souhaitez que votre API n’affiche que certains opérateurs, vous pouvez
          préciser ces opérateurs ici. 1=MTN, 2=Orange, 3=Express Union, 5=Visa via UBA, 10=Dohone, 14= Visa via Wari,
          15=Wari card,16=VISA/MASTERCARD, . -->

            <input type="hidden" name="rLocale" value="fr">
            <!-- le choix de la langue. fr ou en -->

            <input type="hidden" name="source" value="EcoBuildAfrica">
            <!-- Le nom commercial de votre site (Obligatoire) -->

            <input type="hidden" name="endPage" value="">
            <!-- Adresse de redirection en cas de SUCCESS de paiement (Obligatoire) -->

            <input type="hidden" name="notifyPage" value="http://www.votre-site.com">
            <!-- Adresse de notification automatique de votre site en cas de succès de paiement -->
            <input type="hidden" name="cancelPage" value="http://localhost/buildafrica/prestashop/commande">
            <!-- Adresse de redirection en cas de Annulatihttp://www.votre-site.comon de paiement par le client -->


            <input type="hidden" name="logo" value="/logo.png ">
            <!--une adresse url menant au logo de votre site si vous voulez voir apparaitre ce logo pendant le
            paiement (Facultatif) -->


            <input type="hidden" name="motif" value="paiement d’un article">
            <!-- le motif est facultatif. Si il est précisé, il sera inscrit dans votre historique DOHONE version
            excel. Ceci peut être important pour votre comptabilité. -->


            <input type="submit" value="Pay with my module"  class="btn btn-primary"   >

        </form>


        <?php }?>
        </p>
    </div>
</div>
<?php }} ?>
