var isElvSubmitted = false;
$(document).ready(function () {
	
    if (typeof $.fn.prop !== 'function') {
        $.fn.prop = function(name, value) {
            if (typeof value === 'undefined') {
                return this.attr(name);
            } else {
                return this.attr(name, value);
            }
        };
    }

    $('#account-name-field').html('<input type="text" value="' + paymill_elv_holder + '" id="paymill-bank-owner" class="form-row-paymill" />');
    $('#account-number-field').html('<input type="text" value="' + paymill_elv_account + '" id="paymill-account-number" class="form-row-paymill" />');
    $('#bank-code-field').html('<input type="text" value="' + paymill_elv_code + '" id="paymill-bank-code" class="form-row-paymill" />');

    $('form[name="checkout_confirmation"]').submit(function (e) {
		if (!isElvSubmitted) {
			if (!paymill_elv_fastcheckout) {
				if (false === paymill.validateAccountNumber($('#paymill-account-number').val())) {
					alert(elv_account_number_invalid);
					return false;
				}

				if (false === paymill.validateBankCode($('#paymill-bank-code').val())) {
					alert(elv_bank_code_invalid);
					return false;
				}

				if ($('#paymill-bank-owner').val() === "") {
					alert(elv_bank_owner_invalid);
					return false; 
				}

				paymill.createToken({
					number:        $('#paymill-account-number').val(),
					bank:          $('#paymill-bank-code').val(),
					accountholder: $('#paymill-bank-owner').val()
				}, PaymillElvResponseHandler);
								
			} else {
				$('form[name="checkout_confirmation"]').html('<input type="hidden" name="paymill_token" value="dummyToken" />').submit();
			}
			
			return false;
		}
    });
	
	$('#paymill-bank-owner').focus(function() {
        paymill_elv_fastcheckout = false;
    });
    
    $('#paymill-account-number').focus(function() {
        paymill_elv_fastcheckout = false;
    });
    
    $('#paymill-bank-code').focus(function() {
        paymill_elv_fastcheckout = false;
    });
	

    function PaymillElvResponseHandler(error, result) 
    { 
		isElvSubmitted = true;
        if (error) {
			isElvSubmitted = false;
			alert("An API error occured!");
			return false;
        } else {
            $('form[name="checkout_confirmation"]').html('<input type="hidden" name="paymill_token" value="' + result.token + '" />').submit();
        }
    }
});
