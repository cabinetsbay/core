<?php
use Magento\Catalog\Model\Category as C;
/**
 * 2024-03-10
 * Top-level categories:
 * 		«Ready to Assemble Cabinets»
 * 		«Pre-Assembled Cabinets»
 * 		«Cabinet Organizers & Hardware»
 * @used-by app/design/frontend/Cabinetsbay/cabinetsbay_default/Magento_Catalog/templates/category/header.phtml
 */
function cb_category_is_top(C $c):bool {return 2 === df_category_level($c);}