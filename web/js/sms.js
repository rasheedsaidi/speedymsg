var noToBudgetArray = [
   {unit_price: 2.4, min: 1, max: 999},
   {unit_price: 2.3, min: 1000, max: 9999},
   {unit_price: 2.2, min: 10000, max: 99999},
   {unit_price: 2.1, min: 100000, max: 999999},
   {unit_price: 2.0, min: 1000000, max: 999999999}
];
	
var reallyIsNaN = function(x) {
   return x !== x;
};

$(document).ready(function() {
	
	$('#no_of_messages, #messages_budget')
    .button().addClass('ui-textfield');

	$('#no_of_messages').bind('keyup', function(e) {
		e.preventDefault();
		var target = e.target;
		var noSMS = $(target).val();
		var unit_price = getUnitPrice(noSMS);
		if(unit_price !== null) {
			var price = parseInt(noSMS) * parseFloat(unit_price);
			var amt = (reallyIsNaN(Math.floor(price)))? 0: price.toFixed(2);
			var s = (amt > 1)? '\'s': '';			
			var result = $('<textarea />').html('&#8358;' + amt).text();			
			$("#messages_budget").attr('type', 'text').val(result);
		}
	});

});

var getUnitPrice = function(noSMS) {
	var unit_price = null;
	noToBudgetArray.map(function(item) {
		if(noSMS >= item.min && noSMS <= item.max)
			unit_price = item.unit_price;
	});
	return unit_price;
}

var $forms = $('.quote-form');

$forms.on('submit', function(e) {
	var $form = $(e.target);
    var data = $form.serialize();
	$form.find('#name-error, #email-error, #comment-error').html('');
    $.ajax({
        url: $form.attr('action'),
        type: 'POST',
        data: data,
        success: function (data) {
            // Implement successful
            if(data.error) {
				var msg = data.messages;
				for(a in msg) {
					switch(a) {
						case 'name':
							$form.find('#name-error').html(msg[a]);
							break;
						case 'email':
							$form.find('#email-error').html(msg[a]);
							break;
						case 'comment':
							$form.find('#comment-error').html(msg[a]);
							break;
						default:
							break;
					}
				}
			} else {
				$form.find('#success-quote-message').html(data.message);
				$form.find('#quote-name, #email, #comment, #phone').val('');
			}
        },
        error: function(jqXHR, errMsg) {
            console.log(errMsg);
        }
     });
     return false; // prevent default submit
});

$forms.on('afterValidateAttribute', function(event, attribute, messages) {
	console.log(messages);
	$('quote-error-message').html(messages);
});



(function (window, document) {
var menu = document.getElementById('menu'),
    WINDOW_CHANGE_EVENT = ('onorientationchange' in window) ? 'orientationchange':'resize';

function toggleHorizontal() {
    [].forEach.call(
        document.getElementById('menu').querySelectorAll('.custom-can-transform'),
        function(el){
            el.classList.toggle('pure-menu-horizontal');
        }
    );
};

function toggleMenu() {
    // set timeout so that the panel has a chance to roll up
    // before the menu switches states
    if (menu.classList.contains('open')) {
        setTimeout(toggleHorizontal, 500);
    }
    else {
        toggleHorizontal();
    }
    menu.classList.toggle('open');
    document.getElementById('toggle').classList.toggle('x');
};

function closeMenu() {
    if (menu.classList.contains('open')) {
        toggleMenu();
    }
}

if(document.getElementById('toggle')) {
	document.getElementById('toggle').addEventListener('click', function (e) {
	    toggleMenu();
	    e.preventDefault();
	});
}

if(window)
	window.addEventListener(WINDOW_CHANGE_EVENT, closeMenu);
})(this, this.document);