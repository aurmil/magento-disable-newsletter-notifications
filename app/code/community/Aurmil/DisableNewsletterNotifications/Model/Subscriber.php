<?php
/**
 * @author Aurélien Millet
 * @link https://github.com/aurmil/magento-disable-newsletter-notifications
 * @license https://github.com/aurmil/magento-disable-newsletter-notifications/blob/master/LICENSE.md
 */

class Aurmil_DisableNewsletterNotifications_Model_Subscriber
extends Mage_Newsletter_Model_Subscriber
{
    public function sendConfirmationSuccessEmail()
    {
        if (Mage::getStoreConfigFlag('newsletter/subscription/success_email_send')) {
            return parent::sendConfirmationSuccessEmail();
        }

        return $this;
    }

    public function sendUnsubscriptionEmail()
    {
        if (Mage::getStoreConfigFlag('newsletter/subscription/un_email_send')) {
            return parent::sendUnsubscriptionEmail();
        }

        return $this;
    }
}
