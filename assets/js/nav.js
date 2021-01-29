console.log('testing script');

$(document).ready(function () {
    $('#nav-icon').click(function () {
        $(this).toggleClass('open');

        var navLayout = document.getElementById('nav-layout');
        if (navLayout.classList.contains('nav-open')) {
            navLayout.classList.remove('nav-open');
            navLayout.classList.add('nav-close');
            document.getElementById('header').classList.add('header-shadow');
        } else if (navLayout.classList.contains('nav-close')) {
            navLayout.classList.remove('nav-close');
            navLayout.classList.add('nav-open');
            document.getElementById('header').classList.remove('header-shadow');
        }
    });

    Array.from(document.getElementById('nav-menu').childNodes).forEach(
        function (navItem) {
            navItem.addEventListener('click', function () {
                $('#nav-icon').click();
                $('html, body').animate({
                    scrollTop: $('#' + navItem.href.split('#')[1]).offset().top - 100,
                });
            });
        }
    );
});
