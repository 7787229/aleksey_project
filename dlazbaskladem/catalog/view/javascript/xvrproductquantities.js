// Действия при нажатии кнопки ПЛЮС
var xvrPlus = function (oldValueXVR, newValueXVR, stepValueXVR, minValueXVR, maxValueXVR, quantityInStock, textAlertMinimum, textAlertMaximumOrder, textAlertQuantityInStock, textAlertQuantityInOrder, textAlertOrderNotAvailable, textCheckForNumber, xvrPmVminusStatus) {
	if(isNaN(oldValueXVR) == false) {
		if (xvrPmVminusStatus == 1) {
			if (oldValueXVR == 0 && quantityInStock < minValueXVR)
			{
				xvrModalAlert(textAlertOrderNotAvailable + '<br><br>' + textAlertQuantityInOrder + oldValueXVR/1000 + '<br><br>' + textAlertQuantityInStock + quantityInStock/1000);
				return oldValueXVR;
			} else {
				newValueXVR = minValueXVR;
				for (var i = minValueXVR + stepValueXVR; i <= oldValueXVR; i = i + stepValueXVR)
				{
					newValueXVR = newValueXVR + stepValueXVR;
				}
				if (oldValueXVR >= newValueXVR)
				{
					newValueXVR = newValueXVR + stepValueXVR;
				}
				if (newValueXVR > quantityInStock && newValueXVR <= maxValueXVR)
				{
					newValueXVR = minValueXVR;
					for (var i = minValueXVR + stepValueXVR; i <= quantityInStock; i = i + stepValueXVR)
					{
						newValueXVR = newValueXVR + stepValueXVR;
					};
					xvrModalAlert('Dostupné množství pro objednání: ' + newValueXVR/1000 + '<br><br>' + 'Zbývá na skladě: ' + quantityInStock/1000);
				}
				if (newValueXVR > maxValueXVR && maxValueXVR <= quantityInStock)
				{
					newValueXVR = maxValueXVR;
					xvrModalAlert(textAlertMaximumOrder + maxValueXVR/1000);
				}
				if (newValueXVR > maxValueXVR && maxValueXVR > quantityInStock)
				{
					newValueXVR = minValueXVR;
					for (var i = minValueXVR + stepValueXVR; i <= quantityInStock; i = i + stepValueXVR)
					{
						newValueXVR = newValueXVR + stepValueXVR;
					};
					xvrModalAlert(textAlertQuantityInOrder + newValueXVR/1000 + '<br><br>' + textAlertQuantityInStock + quantityInStock/1000);
				}
				return newValueXVR;
			}
		}
		if (xvrPmVminusStatus == 0) {
			newValueXVR = minValueXVR;
			for (var i = minValueXVR + stepValueXVR; i <= oldValueXVR; i = i + stepValueXVR)
			{
				newValueXVR = newValueXVR + stepValueXVR;
			}
			if (oldValueXVR >= newValueXVR)
			{
				newValueXVR = newValueXVR + stepValueXVR;
			}
			if (newValueXVR > maxValueXVR && maxValueXVR <= quantityInStock)
			{
				newValueXVR = maxValueXVR;
				xvrModalAlert(textAlertMaximumOrder + maxValueXVR/1000);
			}
			if (newValueXVR > maxValueXVR && maxValueXVR > quantityInStock)
			{
				newValueXVR = maxValueXVR;
				xvrModalAlert(textAlertMaximumOrder + maxValueXVR/1000);
			}
			return newValueXVR;
		}
	} else {
		xvrModalAlert(textCheckForNumber);
		return newValueXVR;
	}
}
// Действия при нажатии кнопки МИНУС
var xvrMinus = function (oldValueXVR, newValueXVR, stepValueXVR, minValueXVR, maxValueXVR, quantityInStock, textAlertMinimum, textAlertMaximumOrder, textAlertQuantityInStock, textAlertQuantityInOrder, textAlertOrderNotAvailable, textCheckForNumber, xvrPmVminusStatus) {
	if(isNaN(oldValueXVR) == false) {
		newValueXVR = minValueXVR;
		if (oldValueXVR <= maxValueXVR && oldValueXVR <= quantityInStock) {
			for (var i = minValueXVR + stepValueXVR; i <= oldValueXVR; i = i + stepValueXVR)
			{
				newValueXVR = newValueXVR + stepValueXVR;
			}
			if ((oldValueXVR - newValueXVR) > 0)
			{
				newValueXVR = newValueXVR + stepValueXVR;
			}
		}
		if (xvrPmVminusStatus == 1)
		{
			if (oldValueXVR <= maxValueXVR && oldValueXVR > quantityInStock) {
				for (var i = minValueXVR + stepValueXVR; i <= quantityInStock; i = i + stepValueXVR)
				{
					newValueXVR = newValueXVR + stepValueXVR;
				}
				if ((oldValueXVR - newValueXVR) > 0)
				{
					xvrModalAlert(textAlertQuantityInOrder + newValueXVR/1000 + '<br><br>' + textAlertQuantityInStock + quantityInStock/1000);
					return newValueXVR;
				}
			}
		}
		if (xvrPmVminusStatus == 0)
		{
			if (oldValueXVR <= maxValueXVR && oldValueXVR > quantityInStock) {
				for (var i = minValueXVR + stepValueXVR; i <= oldValueXVR; i = i + stepValueXVR)
				{
					newValueXVR = newValueXVR + stepValueXVR;
				}
				if ((oldValueXVR - newValueXVR) > 0)
				{
					newValueXVR = newValueXVR + stepValueXVR;
				}
			}
		}
		if (oldValueXVR > maxValueXVR && maxValueXVR <= quantityInStock) {
			newValueXVR = maxValueXVR + stepValueXVR;
			xvrModalAlert(textAlertMaximumOrder + maxValueXVR/1000);
		}
		if (xvrPmVminusStatus == 0)
		{
			if (oldValueXVR > maxValueXVR && maxValueXVR > quantityInStock) {
				newValueXVR = maxValueXVR + stepValueXVR;
				xvrModalAlert(textAlertMaximumOrder + maxValueXVR/1000);
			}
		}
		if (xvrPmVminusStatus == 1)
		{
			if (oldValueXVR > maxValueXVR && maxValueXVR > quantityInStock) {
				for (var i = minValueXVR + stepValueXVR; i <= quantityInStock; i = i + stepValueXVR)
				{
					newValueXVR = newValueXVR + stepValueXVR;
				}
				if ((oldValueXVR - newValueXVR) > 0)
				{
					xvrModalAlert(textAlertQuantityInOrder + newValueXVR/1000 + '<br><br>' + textAlertQuantityInStock + quantityInStock/1000);
					return newValueXVR;
				}
			}
		}
		if (newValueXVR >= minValueXVR + stepValueXVR)
		{
			newValueXVR = newValueXVR - stepValueXVR;
			return newValueXVR;
		} else {
			xvrModalAlert("Minimalni mnozstvi pro objednani je: "+ minValueXVR/1000+'<br>Po přidání požadovaného množství (m2) kliknete na tlačítko aktualizovat.');
			if (oldValueXVR == 0 && quantityInStock < minValueXVR) {return oldValueXVR;} else {return minValueXVR;}
		}
	} else {
		xvrModalAlert(textCheckForNumber);
		return newValueXVR;
	}
}



// Выводим окно сообщения о возможном количестве товара для заказа
var xvrModalAlert = function (data) {
	$('#modal-cart').remove();

	html  = '<div id="modal-cart" class="modal fade" data-backdrop="static">';
	html += 	'<div class="modal-dialog">';
	html +=			'<div class="modal-content">';
	html +=				'<div class="modal-header" id="ModalAlert_1_header">';
//html +=					'<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>';
	html +=				'</div>';
	html +=				'<div class="modal-body" id="ModalAlert_1_body">';
	html +=					data;
	html +=				'</div>';
	html +=				'<div class="modal-footer" id="ModalAlert_1_footer">';
	html +=					'<button type="button" class="btn btn-primary" data-dismiss="modal" aria-hidden="true">Ок</button>';
	html +=				'</div>';
	html +=			'</div>';
	html +=		'</div>';
	html +=	'</div>';


	$('html body').append(html);
	$('#modal-cart').modal('show');
}



// Проверяем на корректность количество, введенное вручную в поле input карточки товара
var xvrCheckForCorrectInput = function () {
	var oldValueXVR = Math.round(parseFloat($('#product input[id=\'input-quantity\']').val().replace(',','.'))*1000);
	var newValueXVR = Math.round(parseFloat($('#product input[name=\'minimum\']').val())*1000);
	var stepValueXVR = Math.round(parseFloat($('#product input[name=\'order_step\']').val())*1000);
	var minValueXVR = Math.round(parseFloat($('#product input[name=\'minimum\']').val())*1000);
	var maxValueXVR = Math.round(parseFloat($('#product input[name=\'maximum_order\']').val())*1000);
	var quantityInStock = Math.round(parseFloat($('#product input[name=\'quantity_in_stock\']').val())*1000);
	var textAlertMinimum = $('#product input[name=\'text_alert_minimum\']').val();
	var textAlertMaximumOrder = $('#product input[name=\'text_alert_maximum_order\']').val();
	var textAlertQuantityInStock = $('#product input[name=\'text_alert_quantity_in_stock\']').val();
	var textAlertQuantityInOrder = $('#product input[name=\'text_alert_quantity_in_order\']').val();
	var textAlertOrderNotAvailable = $('#product input[name=\'text_alert_order_not_available\']').val();
	var textAlertOrderStep = $('#product input[name=\'text_alert_order_step\']').val();
	var textAlertOror = $('#product input[name=\'text_alert_oror\']').val();
	var textCheckForNumber = $('#product input[name=\'text_check_for_number\']').val();
	var xvrPmVminusStatus = $('#product input[name=\'xvr_pm_vminus_status\']').val();
	if (stepValueXVR == 0) {stepValueXVR = 1*1000;} else {};
	if (maxValueXVR == 0) {maxValueXVR = Infinity;} else {};
	if (quantityInStock == 0 && xvrPmVminusStatus == 1) {oldValueXVR = 0;} else {};

	if(oldValueXVR!="" && isNaN(oldValueXVR) == false && oldValueXVR!=0) {

		if (oldValueXVR < minValueXVR) {
			if (quantityInStock >= minValueXVR) {
				xvrModalAlert(textAlertMinimum + minValueXVR/1000);
				$('#product input[id=\'input-quantity\']').val(minValueXVR/1000).change();
				$('#product input[id=\'input-quantity-validate\']').val(minValueXVR/1000).change();
				return 1;
			} else {
				$('#product input[id=\'input-quantity\']').val(0).change();
				$('#product input[id=\'input-quantity-validate\']').val(0).change();
				xvrModalAlert(textAlertOrderNotAvailable);
				return 1;
			};
		};

		if (minValueXVR <= oldValueXVR && oldValueXVR <= maxValueXVR) {
			if (xvrPmVminusStatus == 1)
			{
				if (oldValueXVR > quantityInStock && quantityInStock >= minValueXVR) {
					for (var i = minValueXVR + stepValueXVR; i <= quantityInStock; i = i + stepValueXVR)
					{
						newValueXVR = newValueXVR + stepValueXVR;
					};
					$('#product input[id=\'input-quantity\']').val(newValueXVR/1000).change();
					$('#product input[id=\'input-quantity-validate\']').val(newValueXVR/1000).change();
					xvrModalAlert(textAlertQuantityInOrder + newValueXVR/1000 + '<br><br>' + textAlertQuantityInStock + quantityInStock/1000);
					return 1;
				};
			};
			if (xvrPmVminusStatus == 0)
			{
				if (quantityInStock < oldValueXVR) {
					for (var i = minValueXVR + stepValueXVR; i <= oldValueXVR; i = i + stepValueXVR)
					{
						newValueXVR = newValueXVR + stepValueXVR;
					};
					$('#product input[id=\'input-quantity\']').val(newValueXVR/1000).change();
					$('#product input[id=\'input-quantity-validate\']').val(newValueXVR/1000).change();
					if (stepValueXVR > 1 && newValueXVR != oldValueXVR) {
						xvrModalAlert(textAlertOrderStep + newValueXVR/1000 + textAlertOror + (newValueXVR/1000+stepValueXVR/1000));
						return 1;
					};
				};
			};
			if (quantityInStock >= oldValueXVR) {
				for (var i = minValueXVR + stepValueXVR; i <= oldValueXVR; i = i + stepValueXVR)
				{
					newValueXVR = newValueXVR + stepValueXVR;
				};
				$('#product input[id=\'input-quantity\']').val(newValueXVR/1000).change();
				$('#product input[id=\'input-quantity-validate\']').val(newValueXVR/1000).change();
				if (stepValueXVR > 1 && newValueXVR != oldValueXVR) {
					xvrModalAlert(textAlertOrderStep + newValueXVR/1000 + textAlertOror + (newValueXVR/1000+stepValueXVR/1000));
					return 1;
				};
				if (xvrPmVminusStatus == 1)
				{
					if (quantityInStock < minValueXVR) {
						$('#product input[id=\'input-quantity\']').val(0).change();
						$('#product input[id=\'input-quantity-validate\']').val(0).change();
						xvrModalAlert(textAlertOrderNotAvailable);
						return 1;
					};
				};
			};
		};

		if (oldValueXVR > maxValueXVR) {
			if (maxValueXVR <= quantityInStock) {
				for (var i = minValueXVR + stepValueXVR; i <= maxValueXVR; i = i + stepValueXVR)
				{
					newValueXVR = newValueXVR + stepValueXVR;
				};
				$('#product input[id=\'input-quantity\']').val(newValueXVR/1000).change();
				$('#product input[id=\'input-quantity-validate\']').val(newValueXVR/1000).change();
				xvrModalAlert(textAlertMaximumOrder + newValueXVR/1000);
				return 1;
			};
			if (xvrPmVminusStatus == 0)
			{
				if (maxValueXVR > quantityInStock) {
					for (var i = minValueXVR + stepValueXVR; i <= maxValueXVR; i = i + stepValueXVR)
					{
						newValueXVR = newValueXVR + stepValueXVR;
					};
					$('#product input[id=\'input-quantity\']').val(newValueXVR/1000).change();
					$('#product input[id=\'input-quantity-validate\']').val(newValueXVR/1000).change();
					xvrModalAlert(textAlertMaximumOrder + newValueXVR/1000);
					return 1;
				};
			};
			if (xvrPmVminusStatus == 1)
			{
				if (maxValueXVR > quantityInStock && quantityInStock >= minValueXVR) {
					for (var i = minValueXVR + stepValueXVR; i <= quantityInStock; i = i + stepValueXVR)
					{
						newValueXVR = newValueXVR + stepValueXVR;
					};
					$('#product input[id=\'input-quantity\']').val(newValueXVR/1000).change();
					$('#product input[id=\'input-quantity-validate\']').val(newValueXVR/1000).change();
					xvrModalAlert(textAlertQuantityInOrder + newValueXVR/1000 + '<br><br>' + textAlertQuantityInStock + quantityInStock/1000);
					return 1;
				};
				if (quantityInStock < minValueXVR) {
					$('#product input[id=\'input-quantity\']').val(0).change();
					$('#product input[id=\'input-quantity-validate\']').val(0).change();
					xvrModalAlert(textAlertOrderNotAvailable);
					return 1;
				};
			};
		};

	} else {
		$('#product input[id=\'input-quantity\']').val(newValueXVR/1000).change();
		$('#product input[id=\'input-quantity-validate\']').val(newValueXVR/1000).change();
		xvrModalAlert(textCheckForNumber);
		return 1;
	};
}




// Проверяем на корректность количество, введенное вручную в поле input РАЗНОГО
var xvrCheckForCorrectInputOther = function (product_id, oldValueXVR, newValueXVR, stepValueXVR, minValueXVR, maxValueXVR, quantityInStock, textAlertMinimum, textAlertMaximumOrder, textAlertQuantityInStock, textAlertQuantityInOrder, textAlertOrderNotAvailable, textAlertOrderStep, textAlertOror, textCheckForNumber, xvrPmVminusStatus) {
	oldValueXVR = Math.round((parseFloat((oldValueXVR).replace(',','.'))*1000).toFixed(0));
	newValueXVR = Math.round((parseFloat(newValueXVR)*1000).toFixed(0));
	stepValueXVR = Math.round((parseFloat(stepValueXVR)*1000).toFixed(0));
	minValueXVR = Math.round((parseFloat(minValueXVR)*1000).toFixed(0));
	maxValueXVR = Math.round((parseFloat(maxValueXVR)*1000).toFixed(0));
	quantityInStock = Math.round((parseFloat(quantityInStock)*1000).toFixed(0));
	if (stepValueXVR == 0) {stepValueXVR = 1*1000;} else {};
	if (maxValueXVR == 0) {maxValueXVR = Infinity;} else {};
	if (quantityInStock == 0 && xvrPmVminusStatus == 1) {oldValueXVR = 0;} else {};

	if(oldValueXVR!="" && isNaN(oldValueXVR) == false && oldValueXVR!=0) {
		if (oldValueXVR < minValueXVR) {
			if (quantityInStock >= minValueXVR) {
				xvrModalAlert(textAlertMinimum + (minValueXVR/1000));
				return;
			} else {
				xvrModalAlert(textAlertOrderNotAvailable);
				return;
			};
		};

		if (minValueXVR <= oldValueXVR && oldValueXVR <= maxValueXVR) {
			if (xvrPmVminusStatus == 1)
			{
				if (oldValueXVR > quantityInStock && quantityInStock >= minValueXVR) {
					for (var i = minValueXVR + stepValueXVR; i <= quantityInStock; i = i + stepValueXVR)
					{
						newValueXVR = newValueXVR + stepValueXVR;
					};
					xvrModalAlert(textAlertQuantityInOrder + (newValueXVR/1000) + '<br><br>' + textAlertQuantityInStock + (quantityInStock/1000));
					return;
				};
			};
			if (xvrPmVminusStatus == 0)
			{
				if (quantityInStock < oldValueXVR) {
					for (var i = minValueXVR + stepValueXVR; i <= oldValueXVR; i = i + stepValueXVR)
					{
						newValueXVR = newValueXVR + stepValueXVR;
					};
					if (stepValueXVR > 1 && newValueXVR != oldValueXVR) {
						xvrModalAlert(textAlertOrderStep + (newValueXVR/1000) + textAlertOror + (newValueXVR/1000+stepValueXVR/1000));
						return;
					};
				};
			};
			if (quantityInStock >= oldValueXVR) {
				for (var i = minValueXVR + stepValueXVR; i <= oldValueXVR; i = i + stepValueXVR)
				{
					newValueXVR = newValueXVR + stepValueXVR;
				};
				if (stepValueXVR > 1 && newValueXVR != oldValueXVR) {
					xvrModalAlert(textAlertOrderStep + (newValueXVR/1000) + textAlertOror + (newValueXVR/1000+stepValueXVR/1000));
					return;
				};
			};
			if (xvrPmVminusStatus == 1)
			{
				if (quantityInStock < minValueXVR) {
					xvrModalAlert(textAlertOrderNotAvailable);
					return;
				};
			};
		};

		if (oldValueXVR > maxValueXVR) {
			if (maxValueXVR <= quantityInStock) {
				for (var i = minValueXVR + stepValueXVR; i <= maxValueXVR; i = i + stepValueXVR)
				{
					newValueXVR = newValueXVR + stepValueXVR;
				};
				xvrModalAlert(textAlertMaximumOrder + (newValueXVR/1000));
				return;
			};
			if (maxValueXVR > quantityInStock && quantityInStock >= minValueXVR) {
				for (var i = minValueXVR + stepValueXVR; i <= quantityInStock; i = i + stepValueXVR)
				{
					newValueXVR = newValueXVR + stepValueXVR;
				};
				xvrModalAlert(textAlertQuantityInOrder + (newValueXVR/1000) + '<br><br>' + textAlertQuantityInStock + (quantityInStock/1000));
				return;
			};
			if (quantityInStock < minValueXVR) {
				xvrModalAlert(textAlertOrderNotAvailable);
				return;
			};
		};
	} else {
		xvrModalAlert(textCheckForNumber);
		return;
	};

	cart.add(product_id, oldValueXVR/1000);

}



// Проверяем, не вводит ли клиент с клавиатуры буквы и другие символы в поле input карточки товара
var xvrCheckForCorrectInput2 = function () {
	var oldValueXVR = $('#product input[id=\'input-quantity\']').val().replace(',','.');
	var oldValueXVRvalidate = $('#product input[id=\'input-quantity-validate\']').val();
	var minValueXVR = $('#product input[name=\'minimum\']').val();

	if(isNaN(oldValueXVR) == false) {
		$('#product input[id=\'input-quantity\']').val(oldValueXVR).change();
		$('#product input[id=\'input-quantity-validate\']').val(oldValueXVR).change();
		return;
	} else {
		$('#product input[id=\'input-quantity\']').val(oldValueXVRvalidate).change();
		return;
	};
}