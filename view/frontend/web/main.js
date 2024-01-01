// 2024-01-01
// 1) "«jQuery is not defined» on my workstation": https://github.com/cabinetsbay/site/issues/53
// 2) "Refactor design/head/includes scripts to a Magento module": https://github.com/cabinetsbay/core/issues/1
define(['jquery', 'domReady!'], function($) {
	document.getElementById('showimg3411').onmouseover = function() {
		document.getElementById('img3411').style.display = 'block';
		document.getElementById('img4036').style.display = 'none';
		document.getElementById('showimg3411').classList.add('act');
		document.getElementById('showimg4036').classList.remove('act');
	};
	document.getElementById('showimg4036').onmouseover = function() {
		document.getElementById('img4036').style.display = 'block';
		document.getElementById('img3411').style.display = 'none';
		document.getElementById('showimg4036').classList.add('act');
		document.getElementById('showimg3411').classList.remove('act');
	};
	if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
		$('.products.wrapper.list').removeClass('products-list').addClass('products-grid');
	}
});