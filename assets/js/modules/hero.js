import SlickSlider from './slick';
export default {
    init: function() {


      const $sliders = document.querySelectorAll('.hero .slick-slider'); 
      
      if($sliders.length === 0 ){

        return false;
      }

      const slick_slider = new SlickSlider();
      const variables = {arrows: true};
      $.each($sliders, (index, slider ) => {
          slick_slider.init(slider, variables )
      });

    },
}
