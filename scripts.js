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

// document.addEventListener('mouseover', e => {
//     const sliderWrapper = e.target.closest('[data-delivery-methods-swiper]');
//
//     if (sliderWrapper) {
//
//         document.addEventListener('scroll', () => {
//             const sliderItem = sliderWrapper.querySelector('.swiper-slide-active')
//             const imageID = sliderItem.querySelector('[data-delivery-methods-img]').getAttribute('data-id')
//
//
//             console.log(imageID)
//
//         })
//     }
// })

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







$(function () {
    let map,

        markers = [
            { latLng: [67.15, 74.40], name: 'Ямало-Ненецкий автономный округ' },
            { latLng: [61.032, 73, 69.214, 85], name: 'Ханты-Мансийский автономный округ' },
            { latLng: [58.42, 61.20], name: 'Свердловская область' },
            { latLng: [59.14, 56.08], name: 'Пермский край' },
            { latLng: [57.50, 69.00], name: 'Тюменская область' },
            { latLng: [64.17, 54.28], name: 'Республика коми' },
            { latLng: [54.28, 56.16], name: 'Республика Башкортостан' },
            { latLng: [68.50, 54.50], name: 'Ненецкий автономный округ' },
            { latLng: [55.37, 39, 37.44, 20], name: 'Московская область' },
            { latLng: [56.13, 73.16], name: 'Омская область' },
            { latLng: [58.45, 82.08], name: 'Томская область' },
            { latLng: [66.24, 129.10], name: 'Республика Якутия' },
            { latLng: [53.33, 127.50], name: 'Амурская область' },
            { latLng: [53.48, 109.20], name: 'Бурятия' },
            { latLng: [54, 118], name: 'Забайкальский край' },
            { latLng: [63.30, 43.00], name: 'Архангельская область' },
            { latLng: [63.49, 33.00], name: 'Карелия' },
            { latLng: [47.14, 47.14], name: 'Астраханская область' },
            { latLng: [51.64268987149337, 39.195575361328046], name: 'Воронеж' },

        ],
        cityAreaData = []



    map = new jvm.Map({
        backgroundColor: 'transparent',
        zoomOnScroll: false,
        zoomButtons: false,
        container: $('[data-jvm-map]'),
        map: 'ru_merc',
        regionsSelectable: false,
        markersSelectable: false,
        tu: false,
        markers: markers[0],
        markerStyle: {
            initial: {
                fill: '#f0c419',
                stroke: '#505050',
                "stroke-width": 6,
                "stroke-opacity": 1,
                r: 1
            },
            selectedHover: {}
        },

        regionStyle: {

            initial: {
                fill: 'white',
                stroke: 'black',
                "stroke-width": 0.6,
                "stroke-opacity": 11,
            },
        },
        series: {
            markers: [{
                attribute: 'r',
                scale: [5, 15],
                values: cityAreaData
            }]
        },


    });

    function addPlantsMarkers() {
        let t = 0

        setInterval(() => {
            t++
            map.addMarkers(markers[t]);

            if (t === markers.length) {
                t = 0
            }
        }, 2000)
    }
    addPlantsMarkers();


    // $( window ).resize(() => {
    //     const windowWidth = $( window ).width()
    //     const element = $( '.our-geography_cities-wrapper' )[0].width()
    //     const widthEl = $( '[data-jvm-map]' )[0].width
    //     console.log(element)
    //
    //     map.updateSize();
    // });

});