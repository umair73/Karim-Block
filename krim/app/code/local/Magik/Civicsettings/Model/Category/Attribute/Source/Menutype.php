<?php
class Magik_Civicsettings_Model_Category_Attribute_Source_Menutype
	extends Mage_Eav_Model_Entity_Attribute_Source_Abstract
{	
	protected $_options;
    
	public function getAllOptions()
	{
        return array(
            array('value' => 'noimage', 'label' => Mage::helper('civicsettings')->__('No Image')),
            array('value' => 'leftposition', 'label' => Mage::helper('civicsettings')->__('Left Position')),
            array('value' => 'rightposition', 'label' => Mage::helper('civicsettings')->__('Right Position'))
        );
    }
}
