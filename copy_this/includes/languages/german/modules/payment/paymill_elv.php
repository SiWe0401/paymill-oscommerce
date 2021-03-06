<?php
define("MODULE_PAYMENT_PAYMILL_ELV_TEXT_PUBLIC_TITLE", "ELV");
define("MODULE_PAYMENT_PAYMILL_ELV_STATUS_TITLE", "Aktivieren");
define("MODULE_PAYMENT_PAYMILL_ELV_DESCRIPTION", "PAYMILL Log");
define("MODULE_PAYMENT_PAYMILL_ELV_TRANSACTION_ORDER_STATUS_ID_TITLE", "API Ergebnisse");
define("MODULE_PAYMENT_PAYMILL_ELV_TRANSACTION_ORDER_STATUS_ID_DESC", "API Ergebnisse in diesem Bestellstatus f&uuml;r Bestellungen speichern.");
define("MODULE_PAYMENT_PAYMILL_ELV_FASTCHECKOUT_TITLE", "Fast Checkout erlauben");
define("MODULE_PAYMENT_PAYMILL_ELV_FASTCHECKOUT_DESC", "Sofern Aktiviert, werden die Daten Ihrer Kunden f&uuml;r k&uuml;nftige K&auml;ufe von PAYMILL gespeichert und erneut zur Verf&uuml;gung gestellt. Der Kunde muss seine Daten nur 1 mal eintragen. Diese L&ouml;sung ist PCI Konform.");
define("MODULE_PAYMENT_PAYMILL_ELV_WEBHOOKS_TITLE", "Webhooks aktivieren");
define("MODULE_PAYMENT_PAYMILL_ELV_WEBHOOKS_DESC", "Gutschriften aus dem Paymill Cockpit automatisch mit meinem Shop synchronisieren");
define("MODULE_PAYMENT_PAYMILL_ELV_WEBHOOKS_LINK_CREATE", "Webhooks anlegen");
define("MODULE_PAYMENT_PAYMILL_ELV_WEBHOOKS_LINK_REMOVE", "Webhooks entfernen");
define("MODULE_PAYMENT_PAYMILL_CC_WEBHOOKS_LINK", "Webhooks anlegen");
define("MODULE_PAYMENT_PAYMILL_ELV_SORT_ORDER_TITLE", "Reihenfolge");
define("MODULE_PAYMENT_PAYMILL_ELV_SORT_ORDER_DESC", "Anzeigeposition im Checkout");
define("MODULE_PAYMENT_PAYMILL_ELV_PRIVATEKEY_TITLE", "Private Key");
define("MODULE_PAYMENT_PAYMILL_ELV_PRIVATEKEY_DESC", "Ihren Private Key k&ouml;nnen Sie dem PAYMILL Cockpit entnehmen.");
define("MODULE_PAYMENT_PAYMILL_ELV_PUBLICKEY_TITLE", "Public Key");
define("MODULE_PAYMENT_PAYMILL_ELV_PUBLICKEY_DESC", "Ihren Public Key k&ouml;nnen Sie dem PAYMILL Cockpit entnehmen.");
define("MODULE_PAYMENT_PAYMILL_ELV_LOGGING_TITLE", "Logging aktivieren");
define("MODULE_PAYMENT_PAYMILL_ELV_LOGGING_DESC", "Sofern Aktiviert, werden Informationen &uuml;ber den Ablauf der Bestellungensabwicklung ins Log geschrieben.");
define("MODULE_PAYMENT_PAYMILL_ELV_ORDER_STATUS_ID_TITLE", "API Ergebnisse");
define("MODULE_PAYMENT_PAYMILL_ELV_ORDER_STATUS_ID_DESC", "API Ergebnisse in diesem Bestellstatus f&uuml;r Bestellungen speichern.");
define("MODULE_PAYMENT_PAYMILL_ELV_ZONE_TITLE", "Erlaubte Steuerzonen");
define("MODULE_PAYMENT_PAYMILL_ELV_ZONE_DESC", "Bitte geben Sie die Zonen einzeln an und trennen Sie diese durch Kommas (z.B. US, UK (Lassen Sie das Feld leer um alle Zonen zu erlauben.))");
define("MODULE_PAYMENT_PAYMILL_ELV_ALLOWED_TITLE", "Erlaubte L&auml;nder");
define("MODULE_PAYMENT_PAYMILL_ELV_ALLOWED_DESC", "Wenn keine Auswahl getroffen wurde, werden alle L&auml;nder erlaubt.");
define("MODULE_PAYMENT_PAYMILL_ELV_TRANS_ORDER_STATUS_ID_TITLE", "API Ergebnisse");
define("MODULE_PAYMENT_PAYMILL_ELV_TRANS_ORDER_STATUS_ID_DESC", "API Ergebnisse in diesem Bestellstatus f&uuml;r Bestellungen speichern.");
define("MODULE_PAYMENT_PAYMILL_ELV_TEXT_ACCOUNT", "Kontonummer");
define("MODULE_PAYMENT_PAYMILL_ELV_TEXT_BANKCODE", "Bankleitzahl");
define("MODULE_PAYMENT_PAYMILL_ELV_TEXT_ACCOUNT_HOLDER", "Kontoinhaber");
define("MODULE_PAYMENT_PAYMILL_ELV_TEXT_ACCOUNT_HOLDER_INVALID", "Bitte geben Sie den Namen des Kontoinhabers an");
define("MODULE_PAYMENT_PAYMILL_ELV_TEXT_ACCOUNT_INVALID", "Bitte geben Sie eine g&uuml;ltige Kontonummer ein");
define("MODULE_PAYMENT_PAYMILL_ELV_TEXT_BANKCODE_INVALID", "Bitte geben Sie eine g&uuml;ltige Bankleitzahl an");
define("MODULE_PAYMENT_PAYMILL_ELV_SEPA_TITLE", "SEPA Formular anzeigen");
define("MODULE_PAYMENT_PAYMILL_ELV_SEPA_DESC", "Momentan werden nur deutsche Bankdaten unterst&uuml;tzt");
define("MODULE_PAYMENT_PAYMILL_ELV_TEXT_BIC", "BIC");
define("MODULE_PAYMENT_PAYMILL_ELV_TEXT_IBAN", "IBAN");
define("MODULE_PAYMENT_PAYMILL_ELV_TEXT_IBAN_INVALID", "Bitte geben Sie eine g&uuml;ltige IBAN an.");
define("MODULE_PAYMENT_PAYMILL_ELV_TEXT_BIC_INVALID", "Bitte geben Sie eine g&uuml;ltige BIC an.");
define("PAYMILL_10001", "General undefined response.");
define("PAYMILL_10002", "Still waiting on something.");
define("PAYMILL_20000", "General success response.");
define("PAYMILL_40000", "General problem with data.");
define("PAYMILL_40001", "General problem with payment data.");
define("PAYMILL_40100", "Problem with credit card data.");
define("PAYMILL_40101", "Problem with cvv.");
define("PAYMILL_40102", "Card expired or not yet valid.");
define("PAYMILL_40103", "Limit exceeded.");
define("PAYMILL_40104", "Card invalid.");
define("PAYMILL_40105", "Expiry date not valid.");
define("PAYMILL_40106", "Credit card brand required.");
define("PAYMILL_40200", "Problem with bank account data.");
define("PAYMILL_40201", "Bank account data combination mismatch.");
define("PAYMILL_40202", "User authentication failed.");
define("PAYMILL_40300", "Problem with 3d secure data.");
define("PAYMILL_40301", "Currency / amount mismatch");
define("PAYMILL_40400", "Problem with input data.");
define("PAYMILL_40401", "Amount too low or zero.");
define("PAYMILL_40402", "Usage field too long.");
define("PAYMILL_40403", "Currency not allowed.");
define("PAYMILL_50000", "General problem with backend.");
define("PAYMILL_50001", "Country blacklisted.");
define("PAYMILL_50100", "Technical error with credit card.");
define("PAYMILL_50101", "Error limit exceeded.");
define("PAYMILL_50102", "Card declined by authorization system.");
define("PAYMILL_50103", "Manipulation or stolen card.");
define("PAYMILL_50104", "Card restricted");
define("PAYMILL_50105", "Invalid card configuration data.");
define("PAYMILL_50200", "Technical error with bank account.");
define("PAYMILL_50201", "Card blacklisted.");
define("PAYMILL_50300", "Technical error with 3D secure.");
define("PAYMILL_50400", "Decline because of risk issues.");
define("PAYMILL_50500", "General timeout.");
define("PAYMILL_50501", "Timeout on side of the acquirer.");
define("PAYMILL_50502", "Risk management transaction timeout");
define("PAYMILL_50600", "Duplicate transaction.");
define("PAYMILL_INTERNAL_SERVER_ERROR", "The communication with the psp failed.");
define("PAYMILL_INVALID_PUBLIC_KEY", "The public key is invalid.");
define("PAYMILL_INVALID_PAYMENT_DATA", "Paymentmethod, card type currency or country not authorized");
define("PAYMILL_UNKNOWN_ERROR", "Unknown Error");
define("PAYMILL_FIELD_INVALID_AMOUNT_INT", "Missing amount for 3-D Secure");
define("PAYMILL_FIELD_INVALID_AMOUNT", "Missing amount for 3-D Secure");
define("PAYMILL_FIELD_INVALID_CURRENCY", "Invalid currency for 3-D Secure");
define("PAYMILL_FIELD_INVALID_ACCOUNT_NUMBER", "Invalid Account Number");
define("PAYMILL_FIELD_INVALID_ACCOUNT_HOLDER", "Invalid Account Holder");
define("PAYMILL_FIELD_INVALID_BANK_CODE", "Invalid bank code");
define("PAYMILL_FIELD_INVALID_IBAN", "Invalid IBAN");
define("PAYMILL_FIELD_INVALID_BIC", "Invalid BIC");
define("PAYMILL_FIELD_INVALID_COUNTRY", "Invalid country for sepa transactions");
define("PAYMILL_FIELD_INVALID_BANK_DATA", "Invalid bank data");
define("PAYMILL_0", "W&auml;hrend Ihrer Zahlung ist ein Fehler aufgetreten.");
define("MODULE_PAYMENT_PAYMILL_ELV_TEXT_TITLE", "PAYMILL ELV");
define("TEXT_INFO_API_VERSION", "API Version");
define("MODULE_PAYMENT_PAYMILL_ELV_STATUS_DESC", "");
define("SEPA_DRAWN_TEXT", "Die Lastschrift wird zu dem folgenden Termin eingezogen: ");
define("MODULE_PAYMENT_PAYMILL_ELV_PRENOTIFICATION_DAYS_TITLE", "Tage bis zum Einzug");
define("MODULE_PAYMENT_PAYMILL_ELV_PRENOTIFICATION_DAYS_DESC", "");
define('PAYMILL_REFUND_BUTTON_TEXT', 'Bestellung erstatten');
define('PAYMILL_REFUND_SUCCESS', 'Bestellung erfolgreich erstattet.');
define('PAYMILL_REFUND_ERROR', 'Bestellung nicht erfolgreich erstattet.');
?>