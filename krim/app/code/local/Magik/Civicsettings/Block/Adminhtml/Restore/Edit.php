<?php


class Magik_Civicsettings_Block_Adminhtml_Restore_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
    public function __construct()
    {
        parent::__construct();

        $this->_blockGroup = 'civicsettings';
        $this->_controller = 'adminhtml_restore';
        $this->_updateButton('save', 'label', Mage::helper('civicsettings')->__('Restore Defaults'));
        $this->_removeButton('delete');
        $this->_removeButton('back');
    }

    public function getHeaderText()
    {
        return Mage::helper('civicsettings')->__('Restore Defaults');
    }
}
