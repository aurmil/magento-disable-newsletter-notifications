# Magento - Disable Newsletter Notifications extension

## Overview
When a user subscribes or unsubscribes to your newsletter, he recieves an email to confirm his action. This behavior may not be wanted.

This extension allows you to block these confirmation emails.

## Compatibility
Tested on Magento CE 1.6.2.0 and 1.7.0.2

## Notes
* Free and open source
* Fully configurable
* Bundled with English and French translations

## Installation
Just download the "app" folder and paste it into the root directory of your Magento application. It will be merged with the existing "app" folder.

No Magento files will be modified but class "Mage_Newsletter_Model_Subscriber" will be extended.

## Usage
In __System > Configuration > Newsletter__, this extension adds two new options: __Send Confirmation and Success Email__ and __Send Unsubscription Email__

![](http://1.bp.blogspot.com/-r_hayagFuE4/UHfIsIxlamI/AAAAAAAALMM/IsazmKjz868/s1600/newsletter.PNG)
* Select "Yes" to stay with the Magento basic behavior
* Select "No" to activate the extension

## Changelog
### 1.0
* initial release
