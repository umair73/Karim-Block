<?php


class Magik_Civicsettings_Model_Config_Position
{

    public function toOptionArray()
    {
        return array(
            array(
	            'value'=>'top-left',
	            'label' => Mage::helper('civicsettings')->__('Top Left')),
            array(
	            'value'=>'top-right',
	            'label' => Mage::helper('civicsettings')->__('Top Right')),                       

        );
    }

}
