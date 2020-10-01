const menuIcon = document.getElementById('menu-icon');
const slideoutMenu = document.getElementById('slideout-menu');
const searchIcon = document.getElementById('search-icon');
const searchBox = document.getElementById('searchbox');

searchIcon.addEventListener('')

$(function() {
   
    $(".form-control").on('focus', function(){

        $(this).parents(".form-group").addClass('focused');

    });

    $(".form-control").on('blur', function(){

        $(this).parents(".form-group").removeClass('focused');

    });

});