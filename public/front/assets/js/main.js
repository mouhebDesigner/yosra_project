(function($){"use strict";$(".preloader").delay(1600).fadeOut("slow");$(window).on('scroll',function(){var scroll=$(window).scrollTop();if(scroll>=10){$(".header-menu-area").addClass("sticky");}else{$(".header-menu-area").removeClass("sticky");}});$('select').niceSelect();$('.popup-youtube').magnificPopup({disableOn:700,type:'iframe',mainClass:'mfp-fade',removalDelay:160,preloader:false,fixedContentPos:false});$('.hamburger').on('click',function(event){$(this).toggleClass('h-active');$('.main-nav').toggleClass('slidenav');});$('.header-home .main-nav ul li  a').on('click',function(event){$('.hamburger').removeClass('h-active');$('.main-nav').removeClass('slidenav');});$(".main-nav .fl").on('click',function(event){var $fl=$(this);$(this).parent().siblings().find('.sub-menu').slideUp();$(this).parent().siblings().find('.fl').addClass('flaticon-plus').text("+");if($fl.hasClass('flaticon-plus')){$fl.removeClass('flaticon-plus').addClass('flaticon-minus').text("-");}else{$fl.removeClass('flaticon-minus').addClass('flaticon-plus').text("+");}
$fl.next(".sub-menu").slideToggle();});$('.testimonial-image').slick({slidesToShow:4,slidesToScroll:1,centerPadding:0,asNavFor:'.testimonial-content-wrap',dots:false,arrows:false,centerMode:true,focusOnSelect:false,responsive:[{breakpoint:767,settings:{slidesToShow:3,slidesToScroll:1}},{breakpoint:769,settings:{slidesToShow:4,slidesToScroll:1}},{breakpoint:1000,settings:{slidesToShow:4,slidesToScroll:1}}]});$('.testimonial-content-wrap').slick({slidesToShow:1,slidesToScroll:1,dots:false,arrows:true,prevArrow:"<i class='ts ts-1 bx bxs-left-arrow-alt'></i>",nextArrow:"<i class='ts ts-2 bx bxs-right-arrow-alt' ></i>",asNavFor:'.testimonial-image'});$('.testimonial-img-slide-wrap').slick({slidesToShow:1,slidesToScroll:1,asNavFor:'.testimonial-content-slide-wrap',dots:false,fade:true,arrows:false,speed:1000});$('.testimonial-content-slide-wrap').slick({slidesToShow:1,slidesToScroll:1,dots:false,speed:1000,arrows:true,prevArrow:"<i class='tst tst-1 bx bxs-left-arrow-alt'></i>",nextArrow:"<i class='tst tst-2 bx bxs-right-arrow-alt' ></i>",asNavFor:'.testimonial-img-slide-wrap'});$('.about-wrap-design-2').owlCarousel({items:4,loop:true,smartSpeed:1500,autoplay:false,dots:false,margin:24,nav:true,navText:["<i class='ts ts-1 bx bxs-left-arrow-alt'></i>","<i class='ts ts-2 bx bxs-right-arrow-alt' ></i>"],responsive:{0:{items:1,autoplay:true},480:{items:1,autoplay:true},768:{items:2},992:{items:2},1200:{items:3},1400:{items:4}}});var faqDropdown=document.querySelectorAll('.faq-click')
var formCard=document.querySelectorAll('.faq-form')
faqDropdown.forEach((element)=>{element.addEventListener('click',()=>{formCard.forEach((ele)=>{ele.classList.toggle('fq-active')})})})
$(".toggle-password").on('click',function(){$(this).toggleClass("bi bi-eye bi bi-eye-slash");var input=$($(this).attr("toggle"));if(input.attr("type")==="password"){input.attr("type","text");}else{input.attr("type","password");}});var toggleIcon=document.querySelectorAll('.menu-toggle-btn ul')
var closeIcon=document.querySelectorAll('.cross-icon')
var searchWrap=document.querySelectorAll('.menu-toggle-btn-full-shape')
toggleIcon.forEach((element)=>{element.addEventListener('click',()=>{document.querySelectorAll('.menu-toggle-btn-full-shape').forEach((el)=>{el.classList.add('show-sidebar')})})})
closeIcon.forEach((element)=>{element.addEventListener('click',()=>{document.querySelectorAll('.menu-toggle-btn-full-shape').forEach((el)=>{el.classList.remove('show-sidebar')})})})
window.onclick=function(event){searchWrap.forEach((el)=>{if(event.target===el){el.classList.remove('show-sidebar')}})}
$(window).on('scroll',function(){if($(this).scrollTop()>100){$('#scroll-top').fadeIn();}else{$('#scroll-top').fadeOut();}});$('#scroll-top').on('click',function(){$("html, body").animate({scrollTop:0},600);return false;});jQuery(window).on('load',function(){new WOW().init();window.wow=new WOW({boxClass:'wow',animateClass:'animated',offset:0,mobile:true,live:true,offset:100})
window.wow.init();});}(jQuery));