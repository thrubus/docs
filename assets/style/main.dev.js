var src = '../assets/style/js/waves-ripple.min.js';
document.write(`<script type="text/javascript" src="${src}" ></script>`);

var $elRadio='\n<svg viewBox="0 0 20 20">\n  <circle cx="10" cy="10" r="9"></circle>\n  <path d="M10,7 C8.34314575,7 7,8.34314575 7,10 C7,11.6568542 8.34314575,13 10,13 C11.6568542,13 13,11.6568542 13,10 C13,8.34314575 11.6568542,7 10,7 Z" class="inner"></path>\n  <path d="M10,1 L10,1 L10,1 C14.9705627,1 19,5.02943725 19,10 L19,10 L19,10 C19,14.9705627 14.9705627,19 10,19 L10,19 L10,19 C5.02943725,19 1,14.9705627 1,10 L1,10 L1,10 C1,5.02943725 5.02943725,1 10,1 L10,1 Z" class="outer"></path>\n</svg>';
var $elCheckBox='\n<svg width="18px" height="18px" viewBox="0 0 18 18">\n  <path d="M1,9 L1,3.5 C1,2 2,1 3.5,1 L14.5,1 C16,1 17,2 17,3.5 L17,14.5 C17,16 16,17 14.5,17 L3.5,17 C2,17 1,16 1,14.5 L1,9 Z"></path>\n  <polyline points="1 9 7 14 15 4"></polyline>\n</svg>';
var $elCheckToogle='\n<span>\n<svg width="10px" height="10px" viewBox="0 0 10 10">\n<path d="M5,1 L5,1 C2.790861,1 1,2.790861 1,5 L1,5 C1,7.209139 2.790861,9 5,9 L5,9 C7.209139,9 9,7.209139 9,5 L9,5 C9,2.790861 7.209139,1 5,1 L5,9 L5,1 Z"></path>\n</svg>\n</span>';
$(".svg-radio").append($elRadio),
$(".svg-checkbox").append($elCheckBox),
$(".svg-check-switch").append($elCheckToogle);