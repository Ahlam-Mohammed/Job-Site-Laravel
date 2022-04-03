$(document).ready( function()
{
    $('#search-key').on('keyup', function()
    {
        var word = $(this).val().toLowerCase();
        $('.search-job').filter( function()
        {
            $(this).toggle($(this).text().toLowerCase().indexOf(word)  > -1);
        })
    })
});


const numb = document.querySelector(".number");
let counter = 0;
setInterval(() => {
    if(counter == 100 )
    {
        clearInterval();
    }
    else
    {
        counter+=1;
        numb.textContent = counter + "%";
    }
}, 80);


let   scrollpos     = window.scrollY;
const header        = document.querySelector(".top-header");
const banner        = document.querySelector(".banner");
const header_height = banner.offsetHeight + header.offsetHeight;

window.addEventListener('scroll', function()
{
    scrollpos = window.scrollY;

    if (scrollpos >= header_height)
    {
        $('nav.top-header').removeClass('bg').addClass('bg--light');
        $('li.nav-item a').removeClass("text-light").addClass('text-black');
        $('.navbar-brand').removeClass('text-white').addClass('text-primary');
        $('.dropdown-toggle').removeClass('text-white').addClass('text-black');
        $('.navbar-toggler span').removeClass('text-light').addClass('text-black');

    }
    else
    {
        $('nav.top-header').removeClass('bg--light').addClass('bg');
        $('li.nav-item a').removeClass("text-black").addClass('text-light');
        $('.navbar-brand').removeClass('text-primary').addClass('text-white');
        $('.dropdown-toggle').removeClass('text-black').addClass('text-white');
        $('.navbar-toggler span').removeClass('text-black').addClass('text-light');

    }
})
