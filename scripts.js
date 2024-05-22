new Swiper('[data-often-ordering-in-bulk-swiper]', {
    spaceBetween: 20,
    navigation: {
        nextEl: '[data-often-ordering-in-bulk-swiper-button-next]',
        prevEl: '[data-often-ordering-in-bulk-swiper-button-prev]',
    },
    breakpoints: {
        320: {
            slidesPerView: 1.12,
            spaceBetween: 12,
        },
        768: {
            slidesPerView: 2,
        },
        1200: {
            slidesPerView: 3,
        }
    }
});


new Swiper('[review-swiper]', {
    spaceBetween: 20,
    navigation: {
        nextEl: '[review-swiper-button-next]',
        prevEl: '[review-swiper-button-prev]',
    },
    breakpoints: {
        320: {
            slidesPerView: 1.12,
            spaceBetween: 12,
        },
        768: {
            slidesPerView: 2,
        },
        1200: {
            slidesPerView: 3,
        }
    }
});


document.addEventListener('click', e => {
    const btn = e.target.closest('[data-footer-catalog-btn]');

    if (btn) {
        const wrapper = btn.closest('[data-footer-catalog-wrapper]');

        wrapper.classList.toggle('active');
    }
})


const headerFasten = () => {
    const scrollY = window.scrollY;
    const innerWidth = window.innerWidth;

    if (scrollY > 150) {
        const header = document.querySelector('[data-header]');
        const appBar = header.querySelector('[data-appBar-wrapper]');

        header.classList.add('fasten');
        appBar.classList.add('fasten');

        if (innerWidth > 992) {
            document.querySelector('body').style['marginTop'] = '108px';
        }

    } else {
        const header = document.querySelector('[data-header]');
        const appBar = header.querySelector('[data-appBar-wrapper]');

        header.classList.remove('fasten');
        appBar.classList.remove('fasten');

        if (innerWidth > 992) {
            document.querySelector('body').style['marginTop'] = '';
        }
    }
}
document.addEventListener('resize', () => {
    headerFasten();
})
document.addEventListener('scroll', () => {
    headerFasten();
})
document.addEventListener('DOMContentLoaded', () => {
    headerFasten();
})


document.addEventListener('mouseover', e => {
    const btn = e.target.closest('[data-btn-open-menu]');

    if (btn) {
        const appBar = btn.closest('[data-appBar-wrapper]');
        const menu = appBar.querySelector('[data-menu-wrapper]');

        btn.classList.add('active');
        menu.classList.add('active');
    }
})


document.addEventListener('DOMContentLoaded', e => {
    let mousePosition = null;
    document.onmousemove = ( {target}) => {mousePosition = target};

    document.addEventListener('mouseout', e => {
        const activeBtnOpenMenu = e.target.closest('.active[data-btn-open-menu]');
        const activeMenu = e.target.closest('.active[data-menu-wrapper]');

        if (activeBtnOpenMenu || activeMenu) {
            const btnOpenMenu = document.querySelector('.active[data-btn-open-menu]');
            const menu = document.querySelector('.active[data-menu-wrapper]');

            setTimeout(() => {
                if (!mousePosition.closest('.active[data-menu-wrapper]') && !mousePosition.closest('.active[data-btn-open-menu]')) {

                    btnOpenMenu.classList.remove('active');
                    menu.classList.remove('active');
                }
            }, 500)
        }
    })
})


document.addEventListener('mouseover', e => {
    const btn = e.target.closest('[data-appbar-menu-link-id]');

    if (btn) {
        const currentID = btn.getAttribute('data-appbar-menu-link-id');
        const appBarWrapper = btn.closest('[data-menu-wrapper]');
        const subMenu = appBarWrapper.querySelector(`[data-appbar-submenu-likks-id="${currentID}"]`)
        const allSubMenu = appBarWrapper.querySelectorAll('.active[data-appbar-submenu-likks-id]')
        const allBtn = appBarWrapper.querySelectorAll('.active[data-appbar-menu-link-id]');

        allSubMenu.forEach( item => {
            item.classList.remove('active');
        })
        allBtn.forEach( item => {
            item.classList.remove('active');
        })
        btn.classList.add('active');
        subMenu.classList.add('active');
    }
})