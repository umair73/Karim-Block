<?php


class Magik_Civicsettings_Model_Config_Width
{

    public function toOptionArray()
    {
        return array(
            array(
	            'value' => 'flexible',
	            'label' => Mage::helper('civicsettings')->__('flexible')),
            array(
	            'value' => 'fixed',
	            'label' => Mage::helper('civicsettings')->__('fixed')),
        );
    }

}
