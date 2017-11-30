$(document).ready(function(){
    $('.carousel').carousel();

    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();

    $('.slider').slider();

    $('select').material_select();

    $('.button-collapse').sideNav({
        menuWidth: '300', // Default is 300
        edge: 'right', // Choose the horizontal origin
        closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
        draggable: false // Choose whether you can drag to open on touch screens
      }
    );
    $('.collapsible').collapsible();
});


//var options = [
//  {selector: '.full-cta', offset: 0, callback: function(el) {
//    Materialize.fadeInImage($(el));
//  } },
//  {selector: '.full-cta-2', offset: 0, callback: function(el) {
//    Materialize.fadeInImage($(el));
//    //$(".ta").velocity({ backgroundColor: "#333", color: "#ef5350" }, {duration: 500});
//  } },
//  {selector: '.full-cta-3', offset: 0, callback: function(el) {
//    Materialize.fadeInImage($(el));
//  } },
//  {selector: '.full-cta-4', offset: 0, callback: function(el) {
//    Materialize.fadeInImage($(el));
//  } },
//  {selector: '.details', offset: 0, callback: function(el) {
//    Materialize.fadeInImage($(el));
//  } },
//  {selector: '.why', offset: 0, callback: function(el) {
//    Materialize.fadeInImage($(el));
//  } },
//  {selector: '.juicer-feed', offset: 0, callback: function(el) {
//    Materialize.fadeInImage($(el));
//  } },
//];
//Materialize.scrollFire(options);