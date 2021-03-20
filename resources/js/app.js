import $ from 'jquery';
import { delay } from 'lodash';
window.jQuery = $;
window.$ = $;




// require('./bootstrap');
document.addEventListener('DOMContentLoaded', function () {
    checkAdvantagesVisible();
    checkCtaVisible();
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems);
});

$(document).on( 'scroll', function(){
  checkAdvantagesVisible();
  checkCtaVisible();
});

function checkAdvantagesVisible(){
  var y = $(document).scrollTop();
  console.log(viewportToPixels('120vh'));
  if (y > viewportToPixels('60vh')) {

    $('.advantages-content').each(function(index) {
      const elem = $(this);
      setTimeout(function() {
        elem.addClass( "advantages-active" );
      },200*(1+index));
    });
  }
}

function checkCtaVisible(){
  var y = $(document).scrollTop();
  if (y > viewportToPixels('120vh')) {

    $('.transition').each(function(index) {
      const elem = $(this);
      setTimeout(function() {
        elem.addClass( "active" );
      },200*(1+index));
    });
  }
}

function viewportToPixels(value) {
  var parts = value.match(/([0-9\.]+)(vh|vw)/)
  var q = Number(parts[1])
  var side = window[['innerHeight', 'innerWidth'][['vh', 'vw'].indexOf(parts[2])]]
  return side * (q/100)
}