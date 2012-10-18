<?php

class Aurmil_DisableNewsletterNotifications_Model_Subscriber
extends Mage_Newsletter_Model_Subscriber
{
    public function sendConfirmationRequestEmail()
    {
        if (Mage::getStoreConfigFlag('newsletter/subscription/success_email_send'))
        {
            return parent::sendConfirmationRequestEmail();
        }

        return $this;
    }

    public function sendConfirmationSuccessEmail()
    {
        if (Mage::getStoreConfigFlag('newsletter/subscription/success_email_send'))
        {
            return parent::sendConfirmationSuccessEmail();
        }

        return $this;
    }

    public function sendUnsubscriptionEmail()
    {
        if (Mage::getStoreConfigFlag('newsletter/subscription/un_email_send'))
        {
            return parent::sendUnsubscriptionEmail();
        }

        return $this;
    }
}
