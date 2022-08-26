(function() {
    "use strict";
  
    /**
     * Easy selector helper function
     */
    const select = (el, all = false) => {
      el = el.trim()
      if (all) {
        return [...document.querySelectorAll(el)]
      } else {
        return document.querySelector(el)
      }
    }
  
    // /**
    //  * Easy event listener function
    //  */
    // const on = (type, el, listener, all = false) => {
    //   let selectEl = select(el, all)
    //   if (selectEl) {
    //     if (all) {
    //       selectEl.forEach(e => e.addEventListener(type, listener))
    //     } else {
    //       selectEl.addEventListener(type, listener)
    //     }
    //   }
    // }
  
    /**
     * Easy on scroll event listener 
     */
    const onscroll = (el, listener) => {
      el.addEventListener('scroll', listener)
    }
  
  
    // /**
    //  * Scrolls to an element with header offset
    //  */
    // const scrollto = (el) => {
    //   let header = select('#header')
    //   let offset = header.offsetHeight
  
    //   let elementPos = select(el).offsetTop
    //   window.scrollTo({
    //     top: elementPos - offset,
    //     behavior: 'smooth'
    //   })
    // }
  
    /**
     * Toggle .header-scrolled class to #header when page is scrolled
     */
    let selectHeader = select('#header')
    let selectTopbar = select('#topbar')
    if (selectHeader) {
      const headerScrolled = () => {
        if (window.scrollY > 100) {
          selectHeader.classList.add('header-scrolled')
          if (selectTopbar) {
            selectTopbar.classList.add('topbar-scrolled')
          }
        } else {
          selectHeader.classList.remove('header-scrolled')
          if (selectTopbar) {
            selectTopbar.classList.remove('topbar-scrolled')
          }
        }
      }
      window.addEventListener('load', headerScrolled)
      onscroll(document, headerScrolled)
    }

  
    // /**
    //  * Scroll with ofset on page load with hash links in the url
    //  */
    // window.addEventListener('load', () => {
    //   if (window.location.hash) {
    //     if (select(window.location.hash)) {
    //       scrollto(window.location.hash)
    //     }
    //   }
    // });

    $(document).ready(function () {
        $(".customer-logos").slick({
          slidesToShow: 6,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 1500,
          arrows: false,
          dots: false,
          pauseOnHover: false,
          responsive: [
            {
              breakpoint: 768,
              settings: {
                slidesToShow: 4
              }
            },
            {
              breakpoint: 520,
              settings: {
                slidesToShow: 3
              }
            }
          ]
        });
      });
      

  })()

  