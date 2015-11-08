<?php
class Magik_Civicsettings_Block_System_Config_Form_Fieldset_Theme_Info extends Mage_Adminhtml_Block_System_Config_Form_Fieldset
{
    public function render(Varien_Data_Form_Element_Abstract $element)
    {
        $html='<p>Magik Civic Responsive Magento Theme Version 1.0.0 <br /> Auther: magikcommerce.com <br /> Copyright@2014magikcommerce.com</p>';

	return $html;
    }
}