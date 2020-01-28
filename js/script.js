jQuery(function($) {

  // dropdown menu
  $('ul.dropdown-menu').each(function(){
    $(this).prev().attr({
      id: $(this).attr('aria-labelledby'),
      role: 'button',
      'data-toggle': 'dropdown',
      'aria-haspopup': 'true',
      'aria-expanded': 'false'
    });
  });

  $('ul.dropdown-menu ul.dropdown-menu').each(function(){
    $(this).removeClass('dropdown-menu')
    $(this).addClass('nav-link-group')
  });

  // submenumenu
  $('.moduletable-submenu .dropdown-menu').each(function(){
    $(this).removeClass('dropdown-menu')
    $(this).addClass('nav-link-group')
  });

  $('.moduletable-submenu .dropdown-item').each(function(){
    $(this).removeClass('dropdown-item')
    $(this).addClass('nav-link');
  });

  // footermenu
  $('.main-footer .dropdown-menu').each(function(){
    $(this).removeClass('dropdown-menu')
    $(this).addClass('nav-link-group')
  });

});
