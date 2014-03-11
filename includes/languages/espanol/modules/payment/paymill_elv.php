<?php
define("MODULE_PAYMENT_PAYMILL_ELV_TEXT_PUBLIC_TITLE", "Domiciliaci&oacute;n bancaria");
define("MODULE_PAYMENT_PAYMILL_ELV_STATUS_TITLE", "Activar");
define("MODULE_PAYMENT_PAYMILL_ELV_DESCRIPTION", "Registro de PAYMILL");
define("MODULE_PAYMENT_PAYMILL_ELV_TRANSACTION_ORDER_STATUS_ID_TITLE", "Estado de la Transacci&oacute;n");
define("MODULE_PAYMENT_PAYMILL_ELV_TRANSACTION_ORDER_STATUS_ID_DESC", "Incluya informaci&oacute;n de la transacci&oacute;n en este nivel de estado del pedido");
define("MODULE_PAYMENT_PAYMILL_ELV_FASTCHECKOUT_TITLE", "Activar la compra r&aacute;pida");
define("MODULE_PAYMENT_PAYMILL_ELV_FASTCHECKOUT_DESC", "Si est&aacute; activado, los datos de tus clientes ser&aacute;n almacenados por PAYMILL y estar&aacute;n disponibles de nuevo para futuras compras. El cliente simplemente tendr&aacute; que introducir sus datos una vez. Esta soluci&oacute;n cumple con la normativa del PCI.");
define("MODULE_PAYMENT_PAYMILL_ELV_WEBHOOKS_TITLE", "Habilitar Webhooks");
define("MODULE_PAYMENT_PAYMILL_ELV_WEBHOOKS_DESC", "Sincronizar autom&aacute;ticamente mis reembolsos con mi tienda desde la Cabina PAYMILL");
define("MODULE_PAYMENT_PAYMILL_ELV_WEBHOOKS_LINK_CREATE", "Crear Webhooks");
define("MODULE_PAYMENT_PAYMILL_ELV_WEBHOOKS_LINK_REMOVE", "Eliminar Webhooks");
define("MODULE_PAYMENT_PAYMILL_CC_WEBHOOKS_LINK", "Crear Webhooks");
define("MODULE_PAYMENT_PAYMILL_ELV_SORT_ORDER_TITLE", "Secuencia");
define("MODULE_PAYMENT_PAYMILL_ELV_SORT_ORDER_DESC", "Posici&oacute;n durante el proceso de compra.");
define("MODULE_PAYMENT_PAYMILL_ELV_PRIVATEKEY_TITLE", "Clave privada");
define("MODULE_PAYMENT_PAYMILL_ELV_PRIVATEKEY_DESC", "Puedes encontrar tu clave privada en el Cockpit de PAYMILL");
define("MODULE_PAYMENT_PAYMILL_ELV_PUBLICKEY_TITLE", "Clave p&uacute;blica");
define("MODULE_PAYMENT_PAYMILL_ELV_PUBLICKEY_DESC", "Puede encontrar su clave p&uacute;blica en el Cockpit de PAYMILL");
define("MODULE_PAYMENT_PAYMILL_ELV_LOGGING_TITLE", "Activar el registro");
define("MODULE_PAYMENT_PAYMILL_ELV_LOGGING_DESC", "Si est&aacute; activado, la informaci&oacute;n en relaci&oacute;n con el progreso del proceso del pedido se escribir&aacute; en el registro.");
define("MODULE_PAYMENT_PAYMILL_ELV_ORDER_STATUS_ID_TITLE", "Estado de la Transacci&oacute;n");
define("MODULE_PAYMENT_PAYMILL_ELV_ORDER_STATUS_ID_DESC", "Incluya informaci&oacute;n de la transacci&oacute;n en este nivel de estado del pedido");
define("MODULE_PAYMENT_PAYMILL_ELV_ZONE_TITLE", "Zonas Permitidas");
define("MODULE_PAYMENT_PAYMILL_ELV_ZONE_DESC", "Por favor, introduzca individualmente las zonas a las que se deber&iacute;a permitir el uso de este m&oacute;dulo (p.ej. EEUU, Reino Unido (deje en blanco para autorizar a todas las zonas))");
define("MODULE_PAYMENT_PAYMILL_ELV_ALLOWED_TITLE", "Pa&iacute;ses aceptados");
define("MODULE_PAYMENT_PAYMILL_ELV_ALLOWED_DESC", "Si no se ha seleccionado nada, se aceptan todos los pa&iacute;ses.");
define("MODULE_PAYMENT_PAYMILL_ELV_TRANS_ORDER_STATUS_ID_TITLE", "Estado de la Transacci&oacute;n");
define("MODULE_PAYMENT_PAYMILL_ELV_TRANS_ORDER_STATUS_ID_DESC", "Incluya informaci&oacute;n de la transacci&oacute;n en este nivel de estado del pedido");
define("MODULE_PAYMENT_PAYMILL_ELV_TEXT_ACCOUNT", "N&uacute;mero de cuenta");
define("MODULE_PAYMENT_PAYMILL_ELV_TEXT_BANKCODE", "C&oacute;digo bancario");
define("MODULE_PAYMENT_PAYMILL_ELV_TEXT_ACCOUNT_HOLDER", "Titular de la cuenta");
define("MODULE_PAYMENT_PAYMILL_ELV_TEXT_ACCOUNT_HOLDER_INVALID", "Por favor, introduce el nombre del titular de la cuenta para la domiciliaci&oacute;n bancaria.");
define("MODULE_PAYMENT_PAYMILL_ELV_TEXT_ACCOUNT_INVALID", "Por favor, introduce un n&uacute;mero v&aacute;lido de la cuenta para la domiciliaci&oacute;n bancaria.");
define("MODULE_PAYMENT_PAYMILL_ELV_TEXT_BANKCODE_INVALID", "Por favor, introduce un c&oacute;digo bancario v&aacute;lido de domiciliaci&oacute;n bancaria.");
define("MODULE_PAYMENT_PAYMILL_ELV_SEPA_TITLE", "Mostrar solicitud SEPA");
define("MODULE_PAYMENT_PAYMILL_ELV_SEPA_DESC", "Actualmente s&oacute;lo disponible para datos bancarios de Alemania");
define("MODULE_PAYMENT_PAYMILL_ELV_TEXT_BIC", "BIC");
define("MODULE_PAYMENT_PAYMILL_ELV_TEXT_IBAN", "IBAN");
define("MODULE_PAYMENT_PAYMILL_ELV_TEXT_IBAN_INVALID", "Por favor, introduzca un IBAN v&aacute;lido");
define("MODULE_PAYMENT_PAYMILL_ELV_TEXT_BIC_INVALID", "Por favor, introduzca un BIC v&aacute;lido.");
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
define("PAYMILL_0", "Ha ocurrido un error mientras proces&aacute;bamos tu pago.");
define("MODULE_PAYMENT_PAYMILL_ELV_TEXT_TITLE", "PAYMILL Domiciliaci&oacute;n bancaria");
define("TEXT_INFO_API_VERSION", "API Version");
define("MODULE_PAYMENT_PAYMILL_ELV_STATUS_DESC", "");
?>