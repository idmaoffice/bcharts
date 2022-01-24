/* скрипт для прокрутки странички к якорю  */
const menuLinks = document.querySelectorAll('.nav[data-goto]');
if (menuLinks.length > 0) {
    menuLinks.forEach(menuLink => {
        menuLink.addEventListener("click", onMenuLinkClick);
    });

    function onMenuLinkClick(e) {
        const menuLink = e.target;
        if (menuLink.dataset.goto && document.querySelector(menuLink.dataset.goto)) {
            const gotoBlock = document.querySelector(menuLink.dataset.goto);
            const gotoBlockValue = gotoBlock.getBoundingClientRect().top;


            // if (iconMenu.classList.contains('_active')) {
            //     document.body.classList.remove('_lock');
            //     iconMenu.classList.remove('_active');
            //     blockMenu.classList.remove('_active');
            // };


            window.scrollTo({
                top: gotoBlockValue,
                behavior: "smooth"
            });
            e.preventDefault();
        }
    }

}
