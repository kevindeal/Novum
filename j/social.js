// $(document).ready(function(){

//     //intiatiate the footer
//     siteFooter();

//     $(window).resize(function() {
//         siteFooter();
//     });


//     function siteFooter() {
//         var siteContent = $('#site-content');
//         var siteContentHeight = siteContent.height();
//         var siteContentWidth = siteContent.width();
//         var siteFooter = $('#site-footer');
// 		var siteFooterHeight = siteFooter.height();
// 		var siteFooterWidth = siteFooter.width();

// 		console.log('Content Height = ' + siteContentHeight + 'px');
// 		console.log('Content Width = ' + siteContentWidth + 'px');
// 		console.log('Footer Height = ' + siteFooterHeight + 'px');
// 		console.log('Footer Width = ' + siteFooterWidth + 'px');

// 		siteContent.css({
//             "margin-bottom" : siteFooterHeight + 50
//         });
//     };
// });
$(document).ready(function() {
    $('.nv-c-navSocial-btn').click(function() {
        $(this).html($(this).html() == 'x' ? '+' : 'x');
        $('#social').slideToggle(400);
        return false;
    });
});