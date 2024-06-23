import './bootstrap';

const headerMenu = () => {
    const menuButton = document.querySelector('.js-header-menu')
    const lkMenu = document.querySelector('.js-header-lk-menu div')
    const lkMenuHeight = lkMenu.offsetHeight
    if (menuButton) {
        menuButton.addEventListener('click', () => {
            if (menuButton.parentNode.classList.contains('active')) {
                document.querySelector('.js-header-lk-menu').setAttribute('style',`min-height:0px`)
            } else {
                document.querySelector('.js-header-lk-menu').setAttribute('style',`min-height:${lkMenuHeight}px`)
            }
            menuButton.parentNode.classList.toggle('active')
            // document.querySelector('.js-header-lk-menu').setAttribute('style',`min-height:${lkMenuHeight}px`)
        })
    }
}
function showMoreLocationInfo() {
    const showMoreButtons = document.querySelectorAll('.js-location-show-more')
    showMoreButtons.forEach((locationButton) => {
        locationButton.addEventListener('click', function () {

            locationButton.parentNode.parentNode.parentNode.querySelector('.js-show-mire-info').classList.toggle('hidden')
        })
    })
}

document.addEventListener('DOMContentLoaded', function () {
    console.log('connected')
    headerMenu()
    showMoreLocationInfo()
 })