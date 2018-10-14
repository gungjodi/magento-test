How to install the module:
1. Copy "Test" folder and its content to "<YOUR MAGENTO APP>/app/code"
2. run command : 
    - php bin/magento module:enable Test_Manufacturers
    - php bin/magento setup:upgrade
    - php bin/magento setup:di:compile
    - php bin/magento cache:clean
    - php bin/magento cache:flush


PS:
You might need to manually deploy static content if there is blank page showing on the storefront/admin
command : php bin/magento setup:static-content:deploy -f