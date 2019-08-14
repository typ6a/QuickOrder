# Magento 2 BuyNow 

This module add "BuyNow" button on product view page and list page to process directly checkout.

Please donate if you enjoy my extension.

[![](https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif)](https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=TKAKY4KP65Z4A)

# Installation Instruction

* Copy the content of the repo to the <b>app/code/ALevel/QuickOrder/</b> folder
* Run command:
<b>php bin/magento setup:upgrade</b>
* Run Command:
<b>php bin/magento setup:static-content:deploy</b>
* Now Flush Cache: <b>php bin/magento cache:flush</b>

# Contribution

Want to contribute to this extension? The quickest way is to <a href="https://help.github.com/articles/about-pull-requests/">open a pull request</a> on GitHub.

# Support

If you encounter any problems or bugs, please <a href="https://github.com/magealevel/magento2-quickorder/issues">open an issue</a> on GitHub.

<b>PRODUCT VIEW PAGE</b>

<img src="https://raw.githubusercontent.com/magealevel/all-module-screenshots/master/BuyNow/listpage.png" alt="View Page" border="0">

<b>PRODUCT LIST PAGE</b>

<img src="https://raw.githubusercontent.com/magealevel/all-module-screenshots/master/BuyNow/viewpage.png" alt="list page" border="0" />

<b>Store->Configuration->Magealevel->Quick Order->Settings</b>

<img src="https://raw.githubusercontent.com/magealevel/all-module-screenshots/master/BuyNow/admin-settings.png" alt="config settings" border="0" />

# How To Find Addtocart Form Id

Go to product view page and right click on addtocart button and click on inspect element. Then scroll up and find addtocart form id.

<img src="https://raw.githubusercontent.com/magealevel/all-module-screenshots/master/BuyNow/formid.png" alt="Form ID" border="0" />
