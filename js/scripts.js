function textMotion(element, text) {
    element.fadeOut(1000)
    setTimeout(function () {
        element.text(text).fadeIn(1000)
    }, 1000)
}

let loaded = false;
let checkWheel = true;

setTimeout(function () {
    if(loaded) {
        textMotion($('.preloaderText'), 'Сайт почти готов...')
    }
}, 3000)

$(function () {
    
    loaded = true;
    textMotion($('.preloaderText'), 'Всё готово!')
    
    setTimeout(function () {
        $('body').removeClass('overflow-hidden')
        $('.preloader').animate({opacity: '0'}, 1000, function () {
            $(this).remove()
        });
    }, 2500)
    
    $('body').on('wheel', function(e) {
        //console.log(e);
        if(!checkWheel) return true;

        let activeTab = Number($("li.active").attr('data-tab'))
        let activeNextTab = activeTab + 1;
        let activePrevTab = activeTab - 1;
        if(e.originalEvent.deltaY < 0) {
            let section = $('section[data-tab="' + activeTab + '"]');
            if(!section.length || activeTab <= 1) return true;

            $('li.active').removeClass('active');
            $('li[data-tab="' + activePrevTab + '"]').addClass('active');
            console.log(section);
            section.animate({top:"100%"}, 1000);

            setTimeout(() => section.css({"opacity":"0"}), 1500);
        } else {
            let section = $('section[data-tab="' + activeNextTab + '"]');
            if(!section.length) return true;

            $('li.active').removeClass('active');
            $('li[data-tab="' + activeNextTab + '"]').addClass('active');
            console.log(section);
            section.css({"opacity":"1", "background":"#FFFFFF"});
            setTimeout(() => section.animate({top:"0%"}, 500), 500);
        }
        checkWheel = false;
        setTimeout(() => checkWheel = true, 2000)
    });

    $('li.nav-item').click(function(element) {
        let activeTab = Number($("li.active").attr('data-tab'))
        let activeNextTab = Number(element.delegateTarget.attributes ['data-tab'].value);

        let right = activeNextTab > activeTab;

        for(let i = activeTab; right ? i < activeNextTab : i > activeNextTab; right ? i++ : i--) {

        }
    });
});