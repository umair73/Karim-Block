<?php


class Magik_Civicsettings_Model_Config_Menu
{

    public function toOptionArray()
    {
        return array(
            array(
	            'value'=>'classic-menu',
	            'label' => Mage::helper('civicsettings')->__('Classic Menu')),
            array(
	            'value'=>'mega-menu',
	            'label' => Mage::helper('civicsettings')->__('Mega Menu')),                       

        );
    }

}
