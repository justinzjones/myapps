

document.addEventListener('alpine:init', () => {
  Alpine.data('status_x', () => ({

   
      emailDisplay: true,
      locationDisplay: false,
      buttonsDisplay: false,
      cardDisplay: true,
      paypalDisplay: true,
      gpayDisplay: true,
      shipDisplay: false,
      state: 'all',
      cardSelected: false,
      paypalSelected: false,
      addCardSelected: true,
      split: false,
      split_feature: true,
      radio: true,
      button: false,
      cardNumberField:' ', 

      split() {
        this.split = !this.split;
        console.log("does the user want to split? " + this.split)
      },

      cardNumberFieldSelected() {
        this.cardNumberField = "clicked";
        // alert('lost focus');
        // alert("clicked!!!");

      },

      card_selected() {
        if (this.state === 'card') { //if the state is already card it means the user clicked 'change'. Sp we set everything back to what it was.
          this.cardDisplay = true,
          this.paypalDisplay = true,
          this.gpayDisplay = true,
          this.state = 'all',
          this.cardSelected = false,
          this.addCardSelected = false,
          this.split = false,
          console.log("does the user want to split? " + this.split);
          
        } 
        else if (this.state === 'all') {
          this.cardDisplay = true,
          this.paypalDisplay = false,
          this.gpayDisplay = false,
          this.state = 'card',
          this.cardSelected = true,
          this.addCardSelected = false,
          this.split = false,
          // console.log(this.split)
          console.log("does the user want to split me? " + this.split);
        }
      },

      validateName() {
        const nameField = document.getElementById('name-on-card');
        const name = nameField.value;

        if (!name) {
            this.errorMessage = 'Name is required.';
            this.showError = true;
        } else {
            this.errorMessage = '';
            this.showError = false;
        }
    },




      paypal_selected() {
        if (this.state === 'paypal') { //if the state is already PayPal it means the user clicked 'change'. Sp we set everything back to what it was.
          this.cardDisplay = true,
          this.paypalDisplay = true,
          this.gpayDisplay = true,
          this.state = 'all',
          this.cardSelected = false,
          this.paypalSelected = false,
          this.addCardSelected = false,
          console.log(this.state)
          
        } 
        else if (this.state === 'all') {
          this.cardDisplay = false,
          this.paypalDisplay = true,
          this.gpayDisplay = false,
          this.paypalSelected = true,
          this.state = 'paypal',
          console.log(this.state)
        }
      },

      // @click="show = ! show"
      addCard_selected() {
        this.addCardSelected = !this.addCardSelected;
        console.log(this.addCardSelected)
      },

      
      selected() {
        console.log("pooh bear")
      },
      

      back() {
        this.emailDisplay = false,
        this.locationDisplay = false,
        this.buttonsDisplay = true,
        this.cardDisplay = false,
        this.shipDisplay = false,
        this.state = 'buttonsDisplay',
        console.log(this.state)
      },
      
      change() {
        
        if (this.state === 'card') {
          this.cardDisplay = true,
          this.paypalDisplay = true,
          this.gpayDisplay = true,
          console.log(this.state)
        } 
        
        else if (this.state === 'location') {
          this.emailDisplay = false,
          this.locationDisplay = false,
          this.buttonsDisplay = true,
          this.cardDisplay = false,
          this.shipDisplay = false,
          this.state = 'buttonsDisplay',
          console.log(this.state)
        }

      },

      

      
  }))
  

})