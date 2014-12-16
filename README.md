# Magento - Disable Newsletter Notifications extension

## Overview

When a user subscribes or unsubscribes to your newsletter, he recieves an email to confirm his action. This behavior may not be wanted.

This extension allows you to block these confirmation emails.

## Compatibility

Tested on Magento CE 1.6 - 1.9

## Notes

* Free and open source
* Fully configurable
* Bundled with English and French translations

## Installation

No Magento files will be modified but class __Mage\_Newsletter\_Model\_Subscriber__ will be extended and some of its methods overridden.

### Manually

* Download the latest version of this module [here](https://github.com/aurmil/magento-disable-newsletter-notifications/archive/master.zip)
* Unzip it
* Move the "app" folder into the root directory of your Magento application, it will be merged with the existing "app" folder

### With modman

* ```$ modman clone git@github.com:aurmil/magento-disable-newsletter-notifications.git```

### With composer

* Adapt the following "composer.json" file into yours:

```
{
	"require": {
		"aurmil/magento-disable-newsletter-notifications": "dev-master"
	},
    "repositories": [
        {
            "type": "composer",
            "url": "http://packages.firegento.com"
        },
        {
            "type": "vcs",
            "url": "git://github.com/aurmil/magento-disable-newsletter-notifications"
        }
    ],
	"extra": {
		"magento-root-dir": "./"
	}
}
```

* Install or update your composer project dependencies

## Usage

In __System > Configuration > Customers > Newsletter > Subscription Options__, this extension adds two new options: __Send Confirmation and Success Email__ and __Send Unsubscription Email__

![](http://1.bp.blogspot.com/-r_hayagFuE4/UHfIsIxlamI/AAAAAAAALMM/IsazmKjz868/s1600/newsletter.PNG)

* Select "Yes" to stay with the Magento basic behavior
* Select "No" (default value) to activate the extension

## Changelog

### 1.0

* initial release
