<?php
class HusseyCoding_CookiesForComments_Block_CookiesForComments extends Mage_Core_Block_Template
{
    public function getImageUrl()
    {
        return Mage::helper('cookiesforcomments')->getImageUrl();
    }
}