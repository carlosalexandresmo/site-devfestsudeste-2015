document.addEventListener('DOMContentLoaded', function(){

  var navHeight = $('.fixed-content').height() + 40;
  var headerHeight = $('.track-header').first().height();
  $('.stick-header').stick_in_parent({sticky_class: 'sticky', offset_top: navHeight});
  $('.stick-label').stick_in_parent({offset_top: navHeight + headerHeight});

  new WOW({offset: '100ms' }).init();

  //apply animated class in section titles
  if (document.body.scrollTop < 500) {
    var sectionTitle = document.querySelectorAll('.section-title');
    Array.prototype.forEach.call(sectionTitle, function(el){
      el.setAttribute('data-wow-delay', '200ms');
      el.classList.add('wow');
      el.classList.add('fadeIn');
    });
  };

  //menu hamburger
  var linkHamburger = document.querySelector('.menu-hamburger');
  var secondaryMenu = document.querySelector('.secondary-main-menu');
  var closeMenu = document.querySelector('.close-menu');
  var linksMenu = document.querySelectorAll('.secondary-main-menu a');

  //open menu
  linkHamburger.addEventListener('click', function(){
    secondaryMenu.classList.add('actived');
  });

  //close menu
  closeMenu.addEventListener('click', function(){
    secondaryMenu.classList.remove('actived');
  });


  Array.prototype.forEach.call(linksMenu, function(link){
    link.addEventListener('click', function(){
      secondaryMenu.classList.remove('actived');
    });
  });

  //handle tabs
  var tabLink = document.querySelectorAll('.tab-programming');
  var tabElements = document.querySelectorAll('.table-programming');

  Array.prototype.forEach.call(tabLink, function(el){
    el.addEventListener('click', function(){

      var target = this.getAttribute('data-href');

      //set all tabs hidden
      Array.prototype.forEach.call(tabElements, function(tabEl){
        tabEl.classList.add('hidden');
      });

      //remove hidden class of the selected tab
      document.querySelector('.'+target).classList.remove('hidden');
    });

  });

  //handler if the site loads
  var top = (window.pageYOffset || document.scrollTop)  - (document.clientTop || 0);
  var fixedContent = document.querySelector('.fixed-content');

  if (document.body.scrollTop > 20) {
    fixedContent.classList.add('actived');
  };

});

//Fixed menu
function onScrollHandler() {
  var top = (window.pageYOffset || document.scrollTop)  - (document.clientTop || 0);
  var fixedContent = document.querySelector('.fixed-content');

  if (top > 20) {
    fixedContent.classList.add('actived');
  }else{
    fixedContent.classList.remove('actived');
  }
}

window.onscroll = _.throttle(onScrollHandler, 300);

window.onload = function(){
  new WOW().init();
}
