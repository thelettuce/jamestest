<?php


namespace Konstructive\Oneaddress\Observer\Customer;

class AddressSaveAfter implements \Magento\Framework\Event\ObserverInterface
{

    /**
     * Execute observer
     *
     * @param \Magento\Framework\Event\Observer $observer
     * @return void
     */
    public function execute(
        \Magento\Framework\Event\Observer $observer
    ) {

		$customerAddress = $observer->getCustomerAddress();
        $customer = $customerAddress->getCustomer();
		$customerAddress->setIsDefaultBilling(true);
		$customerAddress->setIsDefaultShipping(true);

		//var_dump($customerAddress->getData());
//echo "<br>CUSTOMER<br>";
	//	var_dump($customer->getData());

		//die('Observer Is called!');
    }
}
