<?php
// Text
$_['text_title']          = 'Klarna Faktura';
$_['text_fee']            = 'Klarna Faktura - Betala inom 14 dagar <span id="klarna_invoice_toc_link"></span> (+%s)<script text="javascript\">$.getScript(\'http://cdn.klarna.com/public/kitt/toc/v1.0/js/klarna.terms.min.js\', function(){ var terms = new Klarna.Terms.Invoice({ el: \'klarna_invoice_toc_link\', eid: \'%s\', country: \'%s\', charge: %s});})</script>';
$_['text_no_fee']         = 'Klarna Faktura - Betala inom 14 dagar <span id="klarna_invoice_toc_link"></span><script text="javascript">$.getScript(\'http://cdn.klarna.com/public/kitt/toc/v1.0/js/klarna.terms.min.js\', function(){ var terms = new Klarna.Terms.Invoice({ el: \'klarna_invoice_toc_link\', eid: \'%s\', country: \'%s\'});})</script>';
$_['text_additional']     = 'Klarna Faktura kräver ytterligare information innan de kan proccess din beställning.';
$_['text_wait']           = 'Vänta!';
$_['text_male']           = 'man';
$_['text_female']         = 'kvinna';
$_['text_year']           = 'år';
$_['text_month']          = 'månad';
$_['text_day']            = 'dag';
$_['text_comment']        = 'Klarnas Faktura-ID:%s\n%s/%s:%.4f';

// Entry
$_['entry_gender']         = 'Kön:';
$_['entry_pno']            = 'Personnummer:<br/><span Class="help">Ange ditt personnummer här</span>';
$_['entry_dob']            = 'Födelsedatum:';
$_['entry_phone_no']       = 'Telefonnummer:<br/><span Class="help">Ange ditt telefonnummer</span>';
$_['entry_street']         = 'Gata:<br/><span Class="help">Observera att leveransen kan endast ske till den folkbokförda adressen vid betalning med Klarna</span>';
$_['entry_house_no']       = 'Hus No:<br/><span Class="help">Ange din husnummer </span>';
$_['entry_house_ext']      = 'Hus Ext:<br/><span Class="help">Välkommen med ditt hus extra info här. T.ex. A, B, C, Röd, Blå. Ect</span>';
$_['entry_company']        = 'Organisationsnummer:<br/><span class="help">Ange din Företag\'s registreringsnummer</span>';

// Error
$_['error_deu_terms']     = 'Du måste godkänna Klarna \'s integritetspolicy(Datenschutz)';
$_['error_address_match'] = 'Fakturerings-och leveransadressermåste matcha om du vill använda Klarna faktura';
$_['error_network']       = 'Ett fel uppstod vid anslutning till Klarna. Försök igen senare.';
?>
