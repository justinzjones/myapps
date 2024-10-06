// function slideout() {
//   return {
//     open: false,
//     usedKeyboard: false,
//     init() {
//       this.$watch('open', value => {
//         value && this.$refs.closeButton.focus()
//         this.toggleOverlay()
//       })
//       this.toggleOverlay()
//     },
//     toggleOverlay() {
//       document.body.classList[this.open ? 'add' : 'remove']('h-screen', 'overflow-hidden')
//     }
//   }
// }
// function data()
// {
//     return {
//         country_dropdown: true
//     }
// }

// function statusx() {
//   return {
//     emailDisplay: 'true',
//     locationDisplay: 'false',
//     buttonsDisplay: 'false',
//     cardDisplay: 'false',
//     shipDisplay: 'false',
//     state: 'email',

//     proceed() {
//       if (this.state == 'email') {
//         this.emailDisplay = 'false',
//         this.locationDisplay = 'true',
//         this.buttonsDisplay = 'false',
//         this.cardDisplay = 'false',
//         this.shipDisplay = 'false',
//         this.state = 'location'
//       }
//       if (this.state == 'location') {
//         this.emailDisplay = 'false',
//         this.locationDisplay = 'false',
//         this.buttonsDisplay = 'true',
//         this.cardDisplay = 'false',
//         this.shipDisplay = 'false',
//         this.state = 'buttonsDisplay'
//       }
//     }
//   }
// }


document.addEventListener('alpine:init', () => {
  Alpine.data('status_x', () => ({
   
      emailDisplay: true,
      locationDisplay: false,
      buttonsDisplay: false,
      cardDisplay: false,
      shipDisplay: false,
      state: 'email',

      init() {
      console.log(this.state)
      },

      card_selected() {
        this.emailDisplay = false,
        this.locationDisplay = false,
        this.buttonsDisplay = false,
        this.cardDisplay = true,
        this.shipDisplay = false,
        this.state = 'card',
        console.log(this.state)
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
      
      proceed() {
        
        
        if (this.state === 'email') {
          this.emailDisplay = false,
          this.locationDisplay = true,
          this.buttonsDisplay = false,
          this.cardDisplay = false,
          this.shipDisplay = false,
          this.state = 'location',
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

      }

      
  }))
  

})