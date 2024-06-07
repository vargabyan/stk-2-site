new Swiper('[data-often-ordering-in-bulk-swiper]', {
    spaceBetween: 20,
    speed: 1000,
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


new Swiper('[data-review-swiper]', {
    spaceBetween: 20,
    speed: 1000,
    navigation: {
        nextEl: '[data-review-swiper-button-next]',
        prevEl: '[data-review-swiper-button-prev]',
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


const swiperDelivery = new Swiper('[data-delivery-methods-swiper', {
    direction: 'vertical',
    speed: 500,
    slidesPerView: 1,
    mousewheel: true,
});
swiperDelivery.on('slideChange', (e) => {
    const item = document.querySelectorAll('[data-delivery-methods-item-text]')[e.activeIndex];
    const allItem = document.querySelectorAll('.active[data-delivery-methods-item-text]');

    allItem.forEach( item => {
        item.classList.remove('active');
    })
    item.classList.add('active')
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
        const menu = appBar.querySelector('[data-menu-wrapper-bg]');

        btn.classList.add('active');
        menu.classList.add('active');
        document.querySelector('body').style['overflow'] = 'hidden';
    }
})

document.addEventListener('mouseover', e => {
    const menuWrapperBg = document.querySelector('.active[data-menu-wrapper-bg]');

    if (menuWrapperBg === e.target) {
        const appBar = menuWrapperBg.closest('[data-appBar-wrapper]');
        const btn = appBar.querySelector('[data-menu-wrapper-bg]');

        btn.classList.remove('active');
        menuWrapperBg.classList.remove('active');
        document.querySelector('body').style['overflow'] = '';
    }
})


document.addEventListener('DOMContentLoaded', e => {
    let mousePosition = null;
    document.onmousemove = ( {target}) => {mousePosition = target};

    document.addEventListener('mouseout', e => {
        const activeBtnOpenMenu = e.target.closest('.active[data-btn-open-menu]');
        const activeMenu = e.target.closest('[data-menu-wrapper]');

        if (activeBtnOpenMenu || activeMenu) {
            const btnOpenMenu = document.querySelector('.active[data-btn-open-menu]');
            const menu = document.querySelector('.active[data-menu-wrapper-bg]');

            setTimeout(() => {
                if (btnOpenMenu && menu) {
                    if (!mousePosition.closest('[data-appbar-menu-container]') && !mousePosition.closest('.active[data-btn-open-menu]')) {

                        btnOpenMenu.classList.remove('active');
                        menu.classList.remove('active');
                        document.querySelector('body').style['overflow'] = '';
                    }
                }
            }, 600)
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

document.addEventListener('DOMContentLoaded', () => {
    const wrapper = document.querySelector('[data-review-swiper]');

    if (wrapper) {
        const allComment = wrapper.querySelectorAll('[data-review-comment-wrapper]')

        allComment.forEach( item => {
            if (item.offsetHeight < 140 && window.innerWidth >= 570) {
                item.querySelector('[data-review-btn]').remove();
            }
            if (item.offsetHeight < 134 && window.innerWidth < 570) {
                item.querySelector('[data-review-btn]').remove();
            }
        })
    }
})

document.addEventListener('click', e => {
    const btn = e.target.closest('[data-review-btn]');

    if (btn) {
        const wrapper = btn.closest('[data-review-swiper]');
        const comment = btn.closest('.hidden[data-review-comment-wrapper]');
        const allComment = wrapper.querySelectorAll('[data-review-comment-wrapper]')

        allComment.forEach( item => {
            if (!item.classList.contains('hidden')) {
                item.classList.add('hidden');
                item.querySelector('[data-review-btn]').classList.add('active');
            }
        })
        comment.classList.remove('hidden');
        btn.classList.remove('active');
    }
})


document.addEventListener('mouseover', e => {
    const btn = e.target.closest('[data-delivery-methods-item-text]');

    if (btn) {
        const allItem = document.querySelectorAll('[data-delivery-methods-item-text]');

        allItem.forEach((item, index) => {
            if (btn === item) {
                swiperDelivery.slideToLoop(index);
            }
        })
    }
})


document.addEventListener('click', e => {
    const btn = e.target.closest('[data-questions-btn-open]');

    if (btn) {
        const wrapper = btn.closest('[data-questions]');
        const allAnswer = wrapper.querySelectorAll('.open[data-questions-answer]');
        const allBtn = wrapper.querySelectorAll('.open[data-questions-btn-open]');
        const questionItem = btn.closest('[data-questions-item]');
        const answer = questionItem.querySelector('[data-questions-answer]');

        allAnswer.forEach( item => {
            if (item !== answer) {
                item.classList.remove('open');
            }
        })
        allBtn.forEach( item => {
            if (item !== btn) {
                item.classList.remove('open');
            }
        })
        answer.classList.toggle('open');
        btn.classList.toggle('open');

    }
})


document.addEventListener('click', e => {
    const btn = e.target.closest('[data-seo-btn]');

    if (btn) {
        const wrapper = btn.closest('[data-seo-content]');
        const content = wrapper.querySelector('[data-seo-content-text]');

        content.classList.toggle('close');
        btn.classList.toggle('rotate');
        btn.textContent === 'Читать подробнее' ? btn.textContent = 'Скрыть' : btn.textContent = 'Читать подробнее';

    }
})


document.addEventListener('click', e => {
    const btn = e.target.closest('[data-product-characteristic-nav-btn]');

    if (btn) {
        const wrapper = btn.closest('[data-product-characteristic-content]');
        const allBtn = wrapper.querySelectorAll('[data-product-characteristic-nav-btn]');
        const allItem = wrapper.querySelectorAll('[data-product-characteristic-item]');

        allBtn.forEach( (item, index) => {
            if (btn === item) {
                btn.classList.add('active')
                allItem[index].classList.add('active')

            } else {
                item.classList.remove('active')
                allItem[index].classList.remove('active')
            }
        })
    }
})


document.addEventListener('click', e => {
    const btn = e.target.closest('[data-product-characteristic-btn-more-details]');

    if (btn) {
        const wrapper = btn.closest('[data-product-characteristic-item]');
        const allItem = wrapper.querySelectorAll('[data-product-characteristic-text-wrapper]');

        allItem.forEach( (item, index) => {
            if (index > 1) {
                item.classList.toggle('active')
            }
        })
        btn.textContent === 'Подробнее' ? btn.textContent = 'Скрыть' : btn.textContent = 'Подробнее';
    }
})

document.addEventListener('DOMContentLoaded', () => {
    const allItem = document.querySelectorAll('[data-product-characteristic-text-wrapper]');

    if (allItem.length && allItem.length > 2) {
        const btn = document.querySelector('[data-product-characteristic-btn-more-details]');

        btn.classList.add('active')
    } else if (allItem.length && allItem.length <= 2) {
        const btn = document.querySelector('[data-product-characteristic-btn-more-details]');

        btn.classList.remove('active')
    }
})


const cardProductAction = () => {
    const hasComponent = document.querySelector('[data-card-product]');
    const windowWidth = window.innerWidth;

    if (hasComponent) {
        const transferPlace = hasComponent.querySelector('[data-card-product-content]');
        const elemImg = hasComponent.querySelector('[data-card-product-img]');

        if (windowWidth <= 920) {
            transferPlace.insertBefore(elemImg, null)

        } else {
            hasComponent.insertBefore(elemImg, null)
        }
    }
}
document.addEventListener('DOMContentLoaded', () => {
    cardProductAction()
});
window.addEventListener('resize', () => {
    cardProductAction()
});


document.addEventListener('click', e => {
    const btn = e.target.closest('[data-popup-btn-close]');

    if (btn) {
        const wrapper = btn.closest('.active[data-popup-wrapper]');
        const container = wrapper.querySelector('.active[data-popup-container]');
        const successContainer = wrapper.querySelector('.active[data-success-container]');

        wrapper.classList.remove('active');
        if (container) container.classList.remove('active');
        if (successContainer) successContainer.classList.remove('active');
        document.querySelector('body').style['overflow'] = '';
    }
})

document.addEventListener('click', e => {
    const btn = e.target.closest('[data-popup-btn-submit]');

    if (btn) {
        e.preventDefault();
        const wrapper = btn.closest('.active[data-popup-wrapper]');
        const container = wrapper.querySelector('.active[data-popup-container]');
        const successContainer = wrapper.querySelector('[data-success-container]');

        container.classList.remove('active');
        successContainer.classList.add('active');
    }
})

document.addEventListener('click', e => {
    const btn = e.target.closest('[data-order-popup]');

    if (btn) {
        const popupID = btn.getAttribute('data-order-popup');
        const wrapper = document.querySelector(`[data-popup-wrapper="${popupID}"]`);
        const container = wrapper.querySelector('[data-popup-container]');

        wrapper.classList.add('active');
        container.classList.add('active');
        document.querySelector('body').style['overflow'] = 'hidden';
    }
})


document.addEventListener('click', e => {
    const btn = e.target.closest('[data-filter-sort-value]');

    if (btn) {
        const wrapper = btn.closest('[data-filter-sort]');
        const section = wrapper.querySelector('[data-filter-section]');

        btn.classList.toggle('rotate');
        section.classList.toggle('active');
        if (window.innerWidth < 570) {
            document.querySelector('body').style['overflow'] = 'hidden';
        }
    }
})

document.addEventListener('click', e => {
    const btn = e.target.closest('[data-filter-sort-section-mobile-btn-close]');
    const wrapper = e.target === document.querySelector('.active[data-filter-section]');

    if (btn || wrapper) {
        const wrapper = document.querySelector('[data-filter-sort]');
        const sortValue = wrapper.querySelector('[data-filter-sort-value]');
        const section = wrapper.querySelector('[data-filter-section]');

        sortValue.classList.toggle('rotate');
        section.classList.toggle('active');
        if (window.innerWidth < 570) {
            document.querySelector('body').style['overflow'] = '';
        }
    }
})

document.addEventListener('click', e => {
    const btn = e.target.closest('[data-filter-section] input');

    if (btn) {
        const wrapper = btn.closest('[data-filter-sort]');
        const sortValue = wrapper.querySelector('[data-filter-sort-value]');
        const section = wrapper.querySelector('[data-filter-section]');

        sortValue.textContent = btn.value;
        sortValue.classList.toggle('rotate');
        section.classList.toggle('active');
        if (window.innerWidth < 570) {
            document.querySelector('body').style['overflow'] = '';
        }
    }
})


document.addEventListener('click', e => {
    const btn = e.target.closest('[data-menu-mobile-btn-close]');

    if (btn) {
        const mobileMenuWrapper = document.querySelector('[data-menu-mobile-wrapper]');
        const mobileCoreMenu = mobileMenuWrapper.querySelector('[data-core-menu-mobile-wrapper]');
        const mobileMenu = mobileMenuWrapper.querySelector('[data-menu-mobile-menu-wrapper]');
        const mobileMenuBtnWrapper = mobileMenuWrapper.querySelector('.active[data-menu-mobile_btn-wrapper]');
        const mobileSubmenu = mobileMenuWrapper.querySelector('.active[data-menu-mobile-submenu-wrapper]');
        const mobileMenuBtnBack = mobileMenuWrapper.querySelector('.active[data-menu-mobile-btn-back]');
        const mobileMenuLogo = mobileMenuWrapper.querySelector('[data-menu-mobile-logo]');


        mobileMenuWrapper.classList.remove('active');
        mobileMenu.classList.remove('active');
        mobileCoreMenu.classList.add('active');
        mobileMenuLogo.classList.add('active');
        if (mobileMenuBtnWrapper) mobileMenuBtnWrapper.classList.remove('active');
        if (mobileMenuBtnBack) mobileMenuBtnBack.classList.remove('active');
        if (mobileSubmenu) mobileSubmenu.classList.remove('active');
        document.querySelector('body').style['overflow'] = '';
    }
})

document.addEventListener('click', e => {
    const btn = e.target.closest('[data-mobil-core-head-select-cities]');

    if (btn) {
        const mobileMenuWrapper = document.querySelector('[data-menu-mobile-wrapper]');

        mobileMenuWrapper.classList.add('active');
        document.querySelector('body').style['overflow'] = 'hidden';
    }
})

document.addEventListener('click', e => {
    const btn = e.target.closest('[data-mobile-btn-open-menu]');

    if (btn) {
        const mobileMenuWrapper = btn.closest('.active[data-menu-mobile-wrapper]');
        const mobileCoreMenu = mobileMenuWrapper.querySelector('[data-core-menu-mobile-wrapper]');
        const mobileMenu = mobileMenuWrapper.querySelector('[data-menu-mobile-menu-wrapper]');
        const mobileMenuBtnBack = mobileMenuWrapper.querySelector('[data-menu-mobile-btn-back]');
        const mobileMenuLogo = mobileMenuWrapper.querySelector('.active[data-menu-mobile-logo]');

        mobileCoreMenu.classList.remove('active');
        mobileMenuLogo.classList.remove('active');
        mobileMenu.classList.add('active');
        mobileMenuBtnBack.classList.add('active');
    }
})

document.addEventListener('click', e => {
    const btn = e.target.closest('[data-mobile-menu-btn-link-id]');

    if (btn) {
        const mobileMenuWrapper = document.querySelector('[data-menu-mobile-wrapper]');
        const mobileMenu = mobileMenuWrapper.querySelector('[data-menu-mobile-menu-wrapper]');
        const mobileSubmenu = mobileMenuWrapper.querySelector('[data-menu-mobile-submenu-wrapper]');
        const mobileMenuBtnWrapper = mobileMenuWrapper.querySelector('[data-menu-mobile_btn-wrapper]');

        mobileMenu.classList.remove('active');
        mobileSubmenu.classList.add('active');
        mobileMenuBtnWrapper.classList.add('active');
    }
})

document.addEventListener('click', e => {
    const btn = e.target.closest('[data-mobile-menu-btn-link-id]');

    if (btn) {
        const currentID = btn.getAttribute('data-mobile-menu-btn-link-id');
        const appBarWrapper = btn.closest('.active[data-menu-mobile-wrapper]');
        const subMenu = appBarWrapper.querySelector(`[data-menu-mobile-submenu-links-id="${currentID}"]`)
        const allSubMenu = appBarWrapper.querySelectorAll('.active[data-menu-mobile-submenu-links-id]')
        const allBtn = appBarWrapper.querySelectorAll('.active[data-mobile-menu-btn-link-id]');

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

document.addEventListener('click', e => {
    const btn = e.target.closest('[data-menu-mobile-btn-back]');

    if (btn) {
        const mobileMenuWrapper = document.querySelector('[data-menu-mobile-wrapper]');
        const mobileCoreMenu = mobileMenuWrapper.querySelector('[data-core-menu-mobile-wrapper]');
        const mobileMenu = mobileMenuWrapper.querySelector('[data-menu-mobile-menu-wrapper]');
        const mobileSubmenu = mobileMenuWrapper.querySelector('[data-menu-mobile-submenu-wrapper]');
        const mobileMenuLogo = mobileMenuWrapper.querySelector('[data-menu-mobile-logo]');

        if (mobileMenu.classList.contains('active')) {
            mobileCoreMenu.classList.add('active');
            mobileMenu.classList.remove('active');
            btn.classList.remove('active');
            mobileMenuLogo.classList.add('active');
        }
        if (mobileSubmenu.classList.contains('active')) {
            mobileMenu.classList.add('active');
            mobileSubmenu.classList.remove('active');
        }
    }
})

document.addEventListener('click', e => {
    const mobileSearchInput = e.target.closest('[data-mobile-search-label]');

    if (mobileSearchInput) {
        const mobileSearchWrapper = document.querySelector('[data-core-head-search-form]');

        mobileSearchWrapper.classList.add('mobile');
    }
})


document.addEventListener('click', e => {
    const btn = e.target.closest('[data-core-head-select-cities-value]');

    if (btn) {
        const wrapper = btn.closest('[data-core-head-select-cities-wrapper]');
        const section = wrapper.querySelector('[data-core-head-select-cities-form-wrapper]');

        btn.classList.toggle('rotate');
        section.classList.toggle('active');
    }
})

document.addEventListener('click', e => {
    const btn = e.target.closest('[data-mobile-select-cities-value]');

    if (btn) {
        const wrapper = document.querySelector('[data-core-head-select-cities-wrapper]');

        wrapper.classList.add('mobile');
        document.querySelector('body').style['overflow'] = 'hidden';
    }
})

document.addEventListener('click', e => {
    const btn = e.target.closest('[data-select-another-city]');

    if (btn) {
        const wrapper = document.querySelector('[data-core-head-select-cities-wrapper]');
        const section = wrapper.querySelector('[data-core-head-select-cities-form-wrapper]');
        const modal = btn.closest('.active[data-popup-wrapper]');

        modal.classList.remove('active');
        btn.classList.add('rotate');
        section.classList.add('active');
        if (window.innerWidth < 992) {
            wrapper.classList.remove('mobile');
            document.querySelector('body').style['overflow'] = 'hidden';
        }
    }
})

document.addEventListener('click', e => {
    const btn = e.target.closest('[data-menu-popup-mobile-btn-back]');

    if (btn) {
        const wrapper = btn.closest('.mobile');
        const mobileMenuWrapper = document.querySelector('[data-menu-mobile-wrapper]');

        wrapper.classList.remove('mobile');
        mobileMenuWrapper.classList.add('active');
    }
})

document.addEventListener('click', e => {
    const btn = e.target.closest('[data-menu-popup-mobile-btn-close]');

    if (btn) {
        const wrapper = btn.closest('.mobile');
        const mobileMenuWrapper = document.querySelector('[data-menu-mobile-wrapper]');

        wrapper.classList.remove('mobile');
        mobileMenuWrapper.classList.remove('active');
    }
})

document.addEventListener('click', e => {
    const btn = e.target.closest('[data-core-head-select-cities-btn-close]');
    const wrapper = e.target === document.querySelector('.active[data-core-head-select-cities-form-wrapper]');

    if (btn || wrapper) {
        const wrapper = document.querySelector('[data-core-head-select-cities-wrapper]');
        const sortValue = wrapper.querySelector('[data-core-head-select-cities-value]');
        const section = wrapper.querySelector('[data-core-head-select-cities-form-wrapper]');

        sortValue.classList.toggle('rotate');
        section.classList.toggle('active');
        if (window.innerWidth < 992) {
            wrapper.classList.remove('mobile');
            document.querySelector('body').style['overflow'] = '';
        }
    }
})

document.addEventListener('click', e => {
    const btn = e.target.closest('[data-core-head_select-cities-form] input');

    if (btn) {
        const wrapper = btn.closest('[data-core-head-select-cities-wrapper]');
        const sectValue = wrapper.querySelector('[data-core-head-select-cities-value]');
        const section = wrapper.querySelector('[data-core-head-select-cities-form-wrapper]');
        const sectionMobile = document.querySelector('[data-mobile-select-cities-value]');

        sectValue.textContent = btn.value;
        sectionMobile.textContent = btn.value;
        sectValue.classList.toggle('rotate');
        section.classList.toggle('active');
        if (window.innerWidth < 992) {
            wrapper.classList.remove('mobile');
            document.querySelector('body').style['overflow'] = '';
        }
    }
})


document.addEventListener('click', e => {
    const searchInput = e.target.closest('[data-core-head-search-input]');
    const searchInputValue = document.querySelector('[data-core-head-search-input]').value;
    const searchItemsWrapper = e.target.closest('.active[data-core-head-search-items-wrapper]');

    if (searchInputValue === '' && (!searchInput || !searchItemsWrapper)) {
        const searchWrapper = document.querySelector('[data-core-head-search-form]');
        const searchItemsWrapper_ = searchWrapper.querySelector('[data-core-head-search-items-wrapper]');

        searchItemsWrapper_.classList.remove('active');
    }
})

const searchInputAction = (e)  => {
    const searchInput = e.target.closest('[data-core-head-search-input]');

    if (searchInput) {
        const searchWrapper = searchInput.closest('[data-core-head-search-form]');
        const searchItemsWrapper = searchWrapper.querySelector('[data-core-head-search-items-wrapper]');

        searchItemsWrapper.classList.add('active');
    }
}
document.addEventListener('input', e => searchInputAction(e));
document.addEventListener('click', e => searchInputAction(e));

document.addEventListener('input', e => {
    const searchInput = e.target.closest('[data-core-head-search-input]');

    if (searchInput) {
        const searchWrapper = searchInput.closest('[data-core-head-search-form]');
        const searchItems = searchWrapper.querySelectorAll('[data-core-head-search-item]');

        searchItems.forEach( item => {
            if (item.textContent.toLocaleUpperCase().search(searchInput.value.toLocaleUpperCase()) > -1) {
                item.classList.add('active')
            } else {
                item.classList.remove('active')
            }
        })
    }
})





if ($('[data-jvm-map]').length > 0) {
    $(function () {
        let map,

            markers = [
                {latLng: [66.09154570932817, 76.69073261132812], name: 'Новый Уренгой'},
                {latLng: [66.09154570932817, 76.69073261132812], name: 'Новый Уренгой'},
                {latLng: [55.01780552226469, 82.92033793359363], name: 'Новосибирск'},
                {latLng: [49.725601014404965, 84.27272948413083], name: 'Алтай'},
                {latLng: [61.245884615763735, 73.39989776171866], name: 'Сургут'},
                {latLng: [51.64568026463799, 39.20518839843741], name: 'Воронеж'},
                {latLng: [51.64568026463799, 39.20518839843741], name: 'Воронеж'},
            ]

        map = new jvm.Map({
            backgroundColor: 'transparent',
            zoomOnScroll: false,
            zoomButtons: false,
            container: $('[data-jvm-map]'),
            map: 'ru_merc',
            regionsSelectable: false,
            markersSelectable: false,
            markers: markers,
            markerStyle: {
                initial: {
                    fill: '#9B9B9B',
                    stroke: '#9B9B9B',
                },
                selected: {
                    fill: '#454545',
                    stroke: '#454545'
                }
            },

            regionStyle: {
                initial: {
                    fill: 'white',
                    stroke: 'black',
                    "stroke-width": 0.6,
                },
            },
        });


        $(function() {
            if (window.innerWidth > 520) {
                markers.forEach(item => {
                    $('[data-our-geography_cities]').append(`<li data-sity-id="${item.latLng}">${item.name}</li>`);
                })
            }

            let count = 0
            let id = null;

            setInterval(() => {
                map.clearSelectedMarkers();
                map.setSelectedMarkers([count]);

                if (window.innerWidth < 520) {
                    $('[data-mobile-our-geography-citi]').text(markers[count].name)
                } else {
                    if (id) $(`[data-sity-id="${id}"]`).removeClass('active');
                    $(`[data-sity-id="${markers[count].latLng}"]`).addClass('active');
                    id = markers[count].latLng;
                }

                count++
                if (count === markers.length) {
                    count = 0
                }
            }, 2000)
        })
    });
}