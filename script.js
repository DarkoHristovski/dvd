jQuery(document).on('click', '#myDIV a', function() {
    jQuery('#myDIV').hide();
    jQuery('#sidebar-toggle').find('i').toggleClass('fa-times fa-bars');
});

jQuery(document).on('click', '#sidebar-toggle', function() {
    jQuery(this).find('i').toggleClass('fa-bars fa-times');
});

jQuery(document).on('click', '#sidebar-toggle', function() {
    jQuery('#myDIV').toggle(display);
});