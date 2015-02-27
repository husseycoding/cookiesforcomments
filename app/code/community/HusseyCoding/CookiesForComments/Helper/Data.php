<?php
class HusseyCoding_CookiesForComments_Helper_Data extends Mage_Core_Helper_Abstract
{
    public function getImageUrl()
    {
        if ($string = $this->_getRandomString()):
            if ($image = Mage::getDesign()->getSkinUrl('images/cookiesforcomments.php')):
                return $image . '?k=' . $string;
            endif;
        endif;
        
        return false;
    }
    
    private function _getRandomString()
    {
        $session = Mage::getSingleton('customer/session');
        if (!$session->getCookiesForComments()):
            $this->_setRandomString($session);
        endif;
        
        return $session->getCookiesForComments();
    }
    
    private function _setRandomString($session)
    {
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
	$size = strlen($chars);
        $string = '';
        for ($i = 0; $i < 20; $i++):
            $string .= $chars[rand(0, $size - 1)];
        endfor;
        
        $session->setCookiesForComments($string);
    }
}
