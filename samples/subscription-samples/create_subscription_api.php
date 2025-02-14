<?php

require dirname(__DIR__) . '/config.php';

$request = new \Iyzipay\Request\Subscription\SubscriptionCreateRequest();
$request->setLocale("tr");
$request->setConversationId("123456789");
$request->setPricingPlanReferenceCode("c1d489b6-9adc-42fa-88ae-47ea2e5dbe1e");
$request->setSubscriptionInitialStatus("PENDING");
$paymentCard = new \Iyzipay\Model\PaymentCard();
$paymentCard->setCardHolderName("John Doe");
$paymentCard->setCardNumber("4603450000000000");
$paymentCard->setExpireMonth("12");
$paymentCard->setExpireYear("2030");
$paymentCard->setCvc("123");
$request->setPaymentCard($paymentCard);
$customer = new \Iyzipay\Model\Customer();
$customer->setName("John");
$customer->setSurname("Doe");
$customer->setGsmNumber("+905555555555");
$customer->setEmail("johndoe@iyzico.com");
$customer->setIdentityNumber("11111111111");
$customer->setShippingAddressContactName("John Doe");
$customer->setShippingAddressCity("Istanbul");
$customer->setShippingAddressCountry("Turkey");
$customer->setShippingAddressAddress("Uskudar Burhaniye Mahallesi iyzico A.S");
$customer->setShippingAddressZipCode("34660");
$customer->setBillingAddressContactName("John Doe");
$customer->setBillingAddressCity("Istanbul");
$customer->setBillingAddressCountry("Turkey");
$customer->setBillingAddressAddress("Uskudar Burhaniye Mahallesi iyzico A.S");
$customer->setBillingAddressZipCode("34660");
$request->setCustomer($customer);
$result = \Iyzipay\Model\Subscription\SubscriptionCreate::create($request,Config::options());
print_r($result);