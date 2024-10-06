(document.querySelector('.cc-form')).style.display = "block";
(document.querySelector('.init-demo-form')).style.display = "none";


// CellPoint.renderField(CellPoint.fields.Name, config, document.getElementById('card-name'));
// CellPoint.renderField(CellPoint.fields.Number, config, document.getElementById('card-number'));
// CellPoint.renderField(CellPoint.fields.CVV, config, document.getElementById('card-cvv'));
// CellPoint.renderField(CellPoint.fields.ExpirationDate, config, document.getElementById('card-expiration-date'));
// CellPoint.renderField(CellPoint.fields.Submit, config, document.getElementById('card-submit-btn'));

CellPoint.renderField(CellPoint.fields.Name, config, document.getElementById('card-name'));
CellPoint.renderField(CellPoint.fields.Number, config, document.getElementById('card-number'));
CellPoint.renderField(CellPoint.fields.CVV, config, document.getElementById('card-cvv'));
CellPoint.renderField(CellPoint.fields.ExpirationDate, config, document.getElementById('card-expiration-date'));
CellPoint.renderField(CellPoint.fields.Submit, config,document.getElementById('card-submit-btn'));
	

// CellPoint.subscribe((msg) => {
//   alert('Payment was a success')

//   (document.querySelector('.cc-done')).style.display = "block";
//   (document.querySelector('.cc-form')).style.display = "none";
// }, CellPoint.messages.AUTHORIZE_SUCCESS);


CellPoint.subscribe((msg) => {
	alert('Please check the entered data is correct!');
}, CellPoint.messages.VALIDATION_ERROR);

CellPoint.subscribe((msg) => {
	alert('Payment was a success!');
}, CellPoint.messages.AUTHORIZE_SUCCESS);