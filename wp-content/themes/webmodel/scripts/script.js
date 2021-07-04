document.addEventListener('click', e => {
    const menu = document.querySelector('.Nav-ContentMobile')
    openMobileMenu(e, menu)
    closeMobileMenu(e, menu)
})

function openMobileMenu(e, menu) {
    let openBtn = e.target.closest('.Nav-Btn')
    if (!openBtn) {
        return
    }
    menu.classList.add('Nav-ContentMobile--active')
}

function closeMobileMenu(e, menu) {
    let closeMenu = e.target.closest('.Close')
    if (!closeMenu) {
        return
    }
    menu.classList.remove('Nav-ContentMobile--active')
}
