const config = {
	authToken: "{!!$token!!}", 
	txRef: {!!$init_pay['transaction']['id']!!},
	// framePath: "<http://localhost:9000/",> // optional parameter, mainly used for testing, ignore

	// requirement payment meta client_account $init_pay['client_config']['account']
	meta: {
	  clientId: {!!$init_pay['client_config']['id']!!},
	  account: {!!$init_pay['client_config']['account']!!},
	  language: 'en', // two letter language code in lower case
	  value: 3500,
	  country: "SG",
	  currency: "USD",
	  // platform: "Web SDK",
	  // version: "0.0.1",
	},
  
	// The amount + amount meta returned when initializing the payment
	amount: {
	  value: {!!$init_pay['transaction']['amount']['value']!!},
	  country: "{!!$init_pay['transaction']['amount']['country']!!}", // two letter country code in upper case
	  currency: "{!!$init_pay['transaction']['amount']['currency']!!}", // 3 letter currency code capitalized
	},

	cardsMeta: {!!$cardsMeta!!},

	styles: {
	  input: {
		  
		  color: "charcoal"
	  },
	  "::placeholder": {
		//style for all input elements on focus event
		color: "gray",
		fontSize: "1em",
		fontweight: "100",
		fontFamily: "Arial",
	  },
	}

  }
