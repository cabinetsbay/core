// 2024-01-01
// 1) "«jQuery is not defined» on my workstation": https://github.com/cabinetsbay/site/issues/53
// 2) "Refactor design/head/includes scripts to a Magento module": https://github.com/cabinetsbay/core/issues/1
// 2024-06-17
// "The «EXPLORE CABINETS» dropdown menu should switch its image according to the menu item hovered":
// https://github.com/cabinetsbay/core/issues/9
define(['jquery', 'domReady!'], $ => {
	const $img3411 = $('#img3411');
	const $img4036 = $('#img4036');
	const $showimg3411 = $('#showimg3411');
	const $showimg4036 = $('#showimg4036');
	$showimg3411.on('mouseover', () => {
		$img3411.show();
		$img4036.hide();
		$showimg3411.addClass('act');
		$showimg4036.removeClass('act');
	});
	$showimg4036.on('mouseover', () => {
		$img3411.hide();
		$img4036.show();
		$showimg3411.removeClass('act');
		$showimg4036.addClass('act');
	});
	if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
		$('.products.wrapper.list').removeClass('products-list').addClass('products-grid');
	}
});