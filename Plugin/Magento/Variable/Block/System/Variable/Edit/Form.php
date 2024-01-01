<?php
namespace CabinetsBay\Core\Plugin\Magento\Variable\Block\System\Variable\Edit;
use Magento\Framework\Data\Form as F;
use Magento\Framework\Data\Form\Element\Fieldset as Fs;
use Magento\Framework\Data\Form\Element\Text;
use Magento\Variable\Block\System\Variable\Edit\Form as Sb;
# 2024-01-01
final class Form {
	/**
	 * 2024-01-01 "Disable the validation of custom variables codes": https://github.com/cabinetsbay/core/issues/2
	 * 1) @see \Magento\Backend\Block\Widget\Form::setForm()
	 * 2) @see \Magento\Variable\Block\System\Variable\Edit\Form::_prepareForm():
	 * 		$this->setForm($form);
	 * https://github.com/magento/magento2/blob/2.4.4/app/code/Magento/Variable/Block/System/Variable/Edit/Form.php#L99
	 */
	function beforeSetForm(Sb $sb, F $f):void {
		if (($fs = $f->getElement('base')) /** @var Fs $fs */
			&& ($c = $fs->getElements()->searchById('code'))) {/** @var Text $c */
			/**
			 * 2024-01-01
			 * @see \Magento\Variable\Block\System\Variable\Edit\Form::_prepareForm():
			 * 		$fieldset->addField('code', 'text',  [
			 * 			'name' => 'code',
			 * 			'label' => __('Variable Code'),
			 * 			'title' => __('Variable Code'),
			 * 			'required' => true,
			 * 			'class' => 'validate-xml-identifier'
			 * 		]);
			 * https://github.com/magento/magento2/blob/2.4.4/app/code/Magento/Variable/Block/System/Variable/Edit/Form.php#L40-L50
			 */
			$c['class'] = trim(str_replace('validate-xml-identifier', '', $c['class']));
		}
	}
}