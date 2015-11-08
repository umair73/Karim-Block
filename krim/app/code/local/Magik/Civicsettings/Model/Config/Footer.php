<?php


class Magik_Civicsettings_Model_Config_Footer
{

    public function toOptionArray()
    {
        return array(
            array(
	            'value'=>'simple',
	            'label' => Mage::helper('civicsettings')->__('simple')),
            array(
	            'value'=>'informative',
	            'label' => Mage::helper('civicsettings')->__('informative')),
        );
    }

}
