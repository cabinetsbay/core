<?php
use Magento\Catalog\Model\Category as C;
/**
 * 2024-03-10
 * 1.1) Level 0: «Root Catalog».
 * 1.2) Level 1: «Default Category».
 * 1.3) Level 2:
 * 		«Ready to Assemble Cabinets»
 * 		«Pre-Assembled Cabinets»
 * 		«Cabinet Organizers & Hardware»
 * @used-by app/design/frontend/Cabinetsbay/cabinetsbay_default/Magento_Catalog/templates/category/header.phtml
 */
function cb_category_is_l2(C $c):bool {return 2 === df_category_level($c);}

/**
 * 2024-03-10
 * 1.1) Level 0: «Root Catalog».
 * 1.2) Level 1: «Default Category».
 * 1.3) Level 2:
 * 		«Ready to Assemble Cabinets»
 * 		«Pre-Assembled Cabinets»
 * 		«Cabinet Organizers & Hardware»
 * 1.4) Level 3: «Steam White Shaker».
 * @used-by \Sharapov\Cabinetsbay\Block\Category\View::l3()
 */
function cb_category_is_l3(C $c):bool {return 3 === df_category_level($c);}