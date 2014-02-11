MAG-FeaturedProductSlider
=========================

Introduction 
-------------------------------------------------------------
MAG-FeaturedProductSlider Featured Product Extension for Magento

MAG-FeaturedProductSlider is a featured product extension. Admin can set featured attribute in general setting of a product(that is created when the module is installed) and the extension shows the Featured Product on frontend.We are still doing some modification in this extension and will upload latest release soon with new version.

Note that while this extension is now considered stable, it is strongly recommended that it be tested on a development/staging site before deploying on a production site.


Features
-------------------------------------------------------------

 1) Admin can set featured attribute of product.
 2) Admin can enable or disable the featured Product slider.
 3) Admin can configure Slider property from configuration.
 
Requirements
-------------------------------------------------------------
 
  Magento Community Edition 1.8+
  
Manual Installation
-------------------------------------------------------------

   1)Download Magento extension
   2)Move into target directories   
   3)You will need to login to your admin account, clear Magento's cache, log out, and log back in again.   
   4)In top menu you can see notification message.
   5)You can send notification to registered customer and view notification which is sent to users.
   
Handling Requests  
-------------------------------------------------------------

public function indexAction() 
    {
        // View all customers
    }
public function editAction()
    {
           // Edit notification messages
    }
 public function newAction()
    {
        // Create new notification while sending notification to customer.
    }
   
Support
-------------------------------------------------------------

If you have an issue, please send me an email "ajaym.synsoft@gmail.com" then if you still need help, open a bug report in GitHub's issue tracker.

Contributions
-------------------------------------------------------------

This extension is developed by synsoft global and his involment is for further code development and design.

