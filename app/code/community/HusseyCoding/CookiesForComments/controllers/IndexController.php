<?php
include_once('Mage/Contacts/controllers/IndexController.php');

class HusseyCoding_CookiesForComments_IndexController extends Mage_Contacts_IndexController
{
    public function postAction()
    {
        $session = Mage::getSingleton('customer/session');
        if ($string = $session->getCookiesForComments()):
            if (Mage::getModel('core/cookie')->get($string)):
                parent::postAction();
            endif;
        endif;
        
        return;
    }
}