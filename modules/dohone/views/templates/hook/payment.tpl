{*
* 2007-2018 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author    PrestaShop SA <contact@prestashop.com>
*  @copyright 2007-2018 PrestaShop SA
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

<div class="row">
	<div class="col-xs-12 col-md-12">
		<p class="payment_module" id="Dohone_payment_button">
			{if $cart->getOrderTotal() < 2}
				<a href="">
					<img src="{$domain|cat:$payment_button|escape:'html':'UTF-8'}" alt="{l s='Pay with my payment module' mod='Dohone'}" />
					{l s='Minimum amount required in order to pay with my payment module:' mod='Dohone'} {convertPrice price=2}
				</a>
			{else}


		<form method="post" action="https://www.my-dohone.com/dohone/pay">

			<input type="hidden" name="cmd" value="start">              <!--
Cette Valeur est à ne pas changer et elle est Obligatoire -->

			<input type="hidden" name="rN" value="testeur">              <!-- le
nom de votre client qui effectue le paiement -->

			<input type="hidden" name="rT" value="6xxxxxxxx">
			<!-- Numéro Téléphone du client qui effectue le paiement (Obligatoire) -->

			<input type="hidden" name="rE" value="xxx@yahoo.fr">
			<!-- Adresse email du client qui effectue le paiement -->


			<input type="hidden" name="rH" value="XXXXXXXXX">
			<!-- Votre Code-marchand que vous avez reçu par mail (Obligatoire) -->


			<input type="hidden" name="rI" value="XXXX">                <!-- Le
numéro de votre commande. Si votre système ne gère pas de numéro de commande, vous pouvez enlevez ce champs.
c'est facultatif. -->

			<input type="hidden" name="rMt" value="10400">              <!--
Montant TOTAL des achats (Obligatoire). C’est le montant qui devra être payé par votre client. Par défaut la
dévise de ce montant est l'euro, Sauf si vous précisez une autre devise sous le paramètre 'rDvs' ci-après. -->

			<input type="hidden" name="rDvs" value="XAF">              <!-- La
devise correspondante au montant que vous avez donné. Ce paramètre est facultatif. Dans le cas où vous ne
précisez pas ce paramètre, la devise est EUR. Vous avez le choix entre 3 devises uniquement : EUR, XAF, USD -->


			<input type="hidden" name="rOnly" value="X, Y, Z">
			<!-- Ceci est optionnel. Si vous souhaitez que votre API n’affiche que certains opérateurs, vous pouvez
          préciser ces opérateurs ici. 1=MTN, 2=Orange, 3=Express Union, 5=Visa via UBA, 10=Dohone, 14= Visa via Wari,
          15=Wari card,16=VISA/MASTERCARD, . -->

			<input type="hidden" name="rLocale" value="fr">
			<!-- le choix de la langue. fr ou en -->

			<input type="hidden" name="source" value="my Shop Name">
			<!-- Le nom commercial de votre site (Obligatoire) -->

			<input type="hidden" name="endPage" value="http://www.votre-site.com/success.php">
			<!-- Adresse de redirection en cas de SUCCESS de paiement (Obligatoire) -->

			<input type="hidden" name="notifyPage" value="http://www.votre-site.com">
			<!-- Adresse de notification automatique de votre site en cas de succès de paiement -->
			<input type="hidden" name="cancelPage" value="http://www.votre-site.com">
			<!-- Adresse de redirection en cas de Annulation de paiement par le client -->


			<input type="hidden" name="logo" value="http://www.votre-site.com/votre-logo.png ">
			<!--une adresse url menant au logo de votre site si vous voulez voir apparaitre ce logo pendant le
            paiement (Facultatif) -->


			<input type="hidden" name="motif" value="paiement d’un article">
			<!-- le motif est facultatif. Si il est précisé, il sera inscrit dans votre historique DOHONE version
            excel. Ceci peut être important pour votre comptabilité. -->


			<input  class="btn btn-primary" type="submit" value="Valider">

		</form>

		<iframe src="https://www.my-dohone.com/dohone/pay" width="200" height="200">
			<p>iframes are not supported.</p>
		</iframe>
		{/if}
		</p>
	</div>
</div>
