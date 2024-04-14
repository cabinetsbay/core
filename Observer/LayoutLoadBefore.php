<?php
namespace CabinetsBay\Core\Observer;
use Magento\Framework\Event\Observer as O;
use Magento\Framework\Event\ObserverInterface;
# 2024-04-15 "Add the current category level as a CSS class to `<body>`": https://github.com/cabinetsbay/core/issues/5
final class LayoutLoadBefore implements ObserverInterface {
	/**
	 * 2024-04-15
	 * @override
	 * @see ObserverInterface::execute()
	 * @used-by \Magento\Framework\Event\Invoker\InvokerDefault::_callObserverMethod()
	 */
	function execute(O $o):void {}
}