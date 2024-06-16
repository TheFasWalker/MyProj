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

document.addEventListener('DOMContentLoaded', function () {
    console.log('connected')
    headerMenu()
 })