'use strict'

$(function(){

    var width = 720;
    var animationSpeed = 1000;
    var pause = 1000;
    var currentSlide = 1;

    var $slider = $('#insideslider_mod');
    var $sliderContainer = $slider.find('.field-main-slider_1');
    var $slides = $sliderContainer.find('.img-slider');

    var interval;

    function startSlider() {
        interval = setInterval(function(){
            $sliderContainer.animate({'margin-left': '-=' +width}, animationSpeed, function(){
                currentSlide++;
                if(currentSlide === $slides.length) {
                    currentSlide = 1;
                    $sliderContainer.css('margin-left': 0);
                }
            });
        }, pause);
    }

    function stopSlider(){
        clearInterval(interval);
    }

    $slider.on('mouseenter', stopSlider).on('mouseleave', startSlider);

    startSlider();
});

