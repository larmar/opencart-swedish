<?php
// Text
$_['text_title']           = 'Klarna konto';
$_['text_pay_month']       = 'Klarna konto - Betala från %s/månad <span id="klarna_account_toc_link"></span><script text="javascript">$.getScript(\'http://cdn.klarna.com/public/kitt/toc/v1.0/js/klarna.terms.min.js\', function(){ var terms = new Klarna.Terms.Account({ el: \'klarna_account_toc_link\', eid: \'%s\',   country: \'%s\'});})</script>';
$_['text_information']     = 'Klarna Kontoinformation';
$_['text_additional']      = 'Klarna konto kräver ytterligare information innan de kan proccess din beställning.';
$_['text_wait']            = 'Vänta!';
$_['text_male']            = 'man';
$_['text_female']          = 'kvinna';
$_['text_year']            = 'år';
$_['text_month']           = 'månad';
$_['text_day']             = 'dag';
$_['text_payment_option']  = 'betalningsalternativ';
$_['text_single_payment']  = 'gemensamt betalnings';
$_['text_monthly_payment'] = '% s - % s per månad';
$_['text_comment']         = 'Klarnas Faktura -ID : %s\n%s/%s:%.4f';

// Entry
$_['entry_gender']         = 'Kön:';
$_['entry_pno']            = 'Personnummer:<br/><span Class="help">Ange ditt personnummer här</span>';
$_['entry_dob']            = 'Födelsedatum:';
$_['entry_phone_no']       = 'Telefonnummer:<br/><span Class="help">Ange ditt telefonnummer</span>';
$_['entry_street']         = 'Gata:<br/><span Class="help">Observera att leveransen kan endast ske till folkbokförings adressen vid betalning med Klarna</span>';
$_['entry_house_no']       = 'House No:<br/><span Class="help">Ange din husnummer</span>';
$_['entry_house_ext']      = 'Hus Ext: <br/><span Class="help">Välkommen med ditt hus extra info. T.ex. A, B, C, Röd, Blå. Ect</span>';
$_['entry_company']        = 'Organisationsnummer:<br/><span class="help">Ange din Företag\'s registreringsnummer</span>';
$_['error_deu_terms']      = 'Du måste godkänna Klarna\'s integritetspolicy(Datenschutz)';
$_['error_address_match']  = 'Fakturerings-och leveransadressermåste matcha om du vill använda Klarnas Betalningar';
$_['error_network']        = 'Ett fel uppstod vid anslutning till Klarna. Försök igen senare.';
?>
