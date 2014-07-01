// JavaScript Document
$(function(){

//auto activate nav
$("#home a:contains('Home')").parent().addClass("active");
$("#about a:contains('About Us')").parent().addClass("active");
$("#dive_sites a:contains('Dive Sites')").parent().addClass("active");
$("#gallery a:contains('Gallery')").parent().addClass("active");
$("#contact a:contains('Contact')").parent().addClass("active");

//navbar collapse toggle
$('#toggler').collapse();

//dropdown toggle
$('.dropdown-toggle').dropdown();

});

//auto dropdown
$('ul.nav li.dropdown').hover(function() {
	$('.dropdown-menu',this).fadeIn();
},function() {
	$('.dropdown-menu',this).fadeOut('fast');
//Mail subscription

});