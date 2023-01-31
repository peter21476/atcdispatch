document.addEventListener('DOMContentLoaded', function () {
  const getAtcSolBoxes = document.querySelectorAll('.atc-sol-switch')

  //Create Event Listener on icons in Our Approach section
  getAtcSolBoxes.forEach(function (item) {
    item.addEventListener('click', function (e) {
      let getStatus =
        e.target.parentElement.parentElement.nextElementSibling.style.display

      if (getStatus === '' || getStatus === 'none') {
        let getAllBoxes = document.querySelectorAll('.atc-sol-text')
        getAllBoxes.forEach(function (box) {
          box.style.display = 'none'
        })
        let getAllSwitches = document.querySelectorAll('.atc-sol-switch i')
        getAllSwitches.forEach(function (switcher) {
          switcher.classList.remove('fa-regular', 'fa-square-minus')
          switcher.classList.add('fa-regular', 'fa-solid', 'fa-square-plus')
        })
        e.target.parentElement.parentElement.nextElementSibling.style.display =
          'block'
      } else {
        e.target.parentElement.parentElement.nextElementSibling.style.display =
          'none'
      }

      let getIconStatus = e.target.classList
      if (getIconStatus.contains('fa-square-plus')) {
        e.target.classList.remove('fa-solid', 'fa-square-plus')
        e.target.classList.add('fa-regular', 'fa-square-minus')
      } else {
        e.target.classList.add('fa-solid', 'fa-square-plus')
        e.target.classList.remove('fa-regular', 'fa-square-minus')
      }
    })
  })

  document
    .getElementById('atc-mobile-switch')
    .addEventListener('click', function () {
      let mobileMenuClassStatus =
        document.getElementById('atc-mobile-menu').classList
      if (mobileMenuClassStatus.contains('atc-show-menu')) {
        document
          .getElementById('atc-mobile-menu')
          .classList.remove('atc-show-menu')
      } else {
        document
          .getElementById('atc-mobile-menu')
          .classList.add('atc-show-menu')
      }
    })

  document
    .querySelector('.atc-mobile-close')
    .addEventListener('click', function () {
      document
        .querySelector('#atc-mobile-menu')
        .classList.remove('atc-show-menu')
    })

  const mobileMenuItems = document.querySelectorAll(
    '.atc-mobile-menu-wrapper li'
  )
  mobileMenuItems.forEach((item) => {
    item.addEventListener('click', () => {
      document
        .querySelector('#atc-mobile-menu')
        .classList.remove('atc-show-menu')
    })
  })
})
