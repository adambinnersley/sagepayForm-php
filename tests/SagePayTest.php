<?php

namespace SagePay\Tests;

use PHPUnit\Framework\TestCase;
use SagePay\SagePay;

class SagePayTest extends TestCase{
    protected $sagePay;
    
    public function setUp(){
        $this->sagePay = new SagePay();
    }
    
    protected function tearDown(){
        $this->sagePay = null;
    }
    
    /**
     * @covers SagePay\SagePay::setVendorTxCode
     * @covers SagePay\SagePay::getVendorTxCode
     */
    public function testVendorTxCode(){
        $this->markTestIncomplete();
    }
    
    /**
     * @covers SagePay\SagePay::setVendorName
     * @covers SagePay\SagePay::getVendorName
     */
    public function testVendorName(){
        $this->markTestIncomplete();
    }
    
    /**
     * @covers SagePay\SagePay::setEncryptionPassword
     */
    public function testSetEncryptionPassword(){
        $this->markTestIncomplete();
    }
    
    /**
     * @covers SagePay\SagePay::setAmount
     * @covers SagePay\SagePay::getAmount
     */
    public function testAmount(){
        $this->markTestIncomplete();
    }
    
    /**
     * @covers SagePay\SagePay::setCurrency
     * @covers SagePay\SagePay::getCurrency
     */
    public function testCurrency(){
        $this->markTestIncomplete();
    }
    
    /**
     * @covers SagePay\SagePay::setSuccessURL
     * @covers SagePay\SagePay::getSuccessURL
     */
    public function testSuccessURL(){
        $this->markTestIncomplete();
    }
    
    /**
     * @covers SagePay\SagePay::setFailureURL
     * @covers SagePay\SagePay::getFailureURL
     */
    public function testFailureURL(){
        $this->markTestIncomplete();
    }
    
    /**
     * @covers SagePay\SagePay::setDescription
     * @covers SagePay\SagePay::getDescription
     */
    public function testDescription(){
        $this->markTestIncomplete();
    }
    
    /**
     * @covers SagePay\SagePay::setCustomerName
     * @covers SagePay\SagePay::getCustomerName
     */
    public function testCustomerName(){
        $this->markTestIncomplete();
    }
    
    /**
     * @covers SagePay\SagePay::setCustomerEMail
     * @covers SagePay\SagePay::getCustomerEMail
     */
    public function testCustomerEMail(){
        $this->markTestIncomplete();
    }
    
    /**
     * @covers SagePay\SagePay::setVendorEMail
     * @covers SagePay\SagePay::getVendorEMail
     */
    public function testVendorEMail(){
        $this->markTestIncomplete();
    }
    
    /**
     * @covers SagePay\SagePay::setSendEMail
     * @covers SagePay\SagePay::getSendEMail
     */
    public function testSendEMail(){
        $this->markTestIncomplete();
    }
    
    /**
     * @covers SagePay\SagePay::setEMailMessage
     * @covers SagePay\SagePay::getEMailMessage
     */
    public function testEMailMessage(){
        $this->markTestIncomplete();
    }
    
    /**
     * @covers SagePay\SagePay::setBillingFirstnames
     * @covers SagePay\SagePay::getBillingFirstnames
     */
    public function testBillingFirstnames(){
        $this->markTestIncomplete();
    }
    
    /**
     * @covers SagePay\SagePay::setBillingSurname
     * @covers SagePay\SagePay::getBillingSurname
     */
    public function testBillingSurname(){
        $this->markTestIncomplete();
    }
    
    /**
     * @covers SagePay\SagePay::setBillingAddress1
     * @covers SagePay\SagePay::getBillingAddress1
     */
    public function testBillingAddress1(){
        $this->markTestIncomplete();
    }
    
    /**
     * @covers SagePay\SagePay::setBillingAddress2
     * @covers SagePay\SagePay::getBillingAddress2
     */
    public function testBillingAddress2(){
        $this->markTestIncomplete();
    }
    
    /**
     * @covers SagePay\SagePay::setBillingCity
     * @covers SagePay\SagePay::getBillingCity
     */
    public function testBillingCity(){
        $this->markTestIncomplete();
    }
    
    /**
     * @covers SagePay\SagePay::setBillingPostCode
     * @covers SagePay\SagePay::getBillingPostCode
     */
    public function testBillingPostCode(){
        $this->markTestIncomplete();
    }
    
    /**
     * @covers SagePay\SagePay::setBillingState
     * @covers SagePay\SagePay::getBillingState
     */
    public function testBillingState(){
        $this->markTestIncomplete();
    }
    
    /**
     * @covers SagePay\SagePay::setBillingCountry
     * @covers SagePay\SagePay::getBillingCountry
     */
    public function testBillingCountry(){
        $this->markTestIncomplete();
    }
    
    /**
     * @covers SagePay\SagePay::setBillingPhone
     * @covers SagePay\SagePay::getBillingPhone
     */
    public function testBillingPhone(){
        $this->markTestIncomplete();
    }
    
    /**
     * @covers SagePay\SagePay::setDeliverySurname
     * @covers SagePay\SagePay::getDeliverySurname
     */
    public function testDeliverySurname(){
        $this->markTestIncomplete();
    }
    
    /**
     * @covers SagePay\SagePay::setDeliveryFirstnames
     * @covers SagePay\SagePay::getDeliveryFirstnames
     */
    public function testDeliveryFirstnames(){
        $this->markTestIncomplete();
    }
    
    /**
     * @covers SagePay\SagePay::setDeliveryAddress1
     * @covers SagePay\SagePay::getDeliveryAddress1
     */
    public function testDeliveryAddress1(){
        $this->markTestIncomplete();
    }
    
    /**
     * @covers SagePay\SagePay::setDeliveryAddress2
     * @covers SagePay\SagePay::getDeliveryAddress2
     */
    public function testDeliveryAddress2(){
        $this->markTestIncomplete();
    }
    
    /**
     * @covers SagePay\SagePay::setDeliveryCity
     * @covers SagePay\SagePay::getDeliveryCity
     */
    public function testDeliveryCity(){
        $this->markTestIncomplete();
    }
    
    /**
     * @covers SagePay\SagePay::setDeliveryPostCode
     * @covers SagePay\SagePay::getDeliveryPostCode
     */
    public function testDeliveryPostCode(){
        $this->markTestIncomplete();
    }
    
    /**
     * @covers SagePay\SagePay::setDeliveryCountry
     * @covers SagePay\SagePay::getDeliveryCountry
     */
    public function testDeliveryCountry(){
        $this->markTestIncomplete();
    }
    
    /**
     * @covers SagePay\SagePay::setDeliveryState
     * @covers SagePay\SagePay::getDeliveryState
     */
    public function testDeliveryState(){
        $this->markTestIncomplete();
    }
    
    /**
     * @covers SagePay\SagePay::setDeliveryPhone
     * @covers SagePay\SagePay::getDeliveryPhone
     */
    public function testDeliveryPhone(){
        $this->markTestIncomplete();
    }
    
    /**
     * @covers SagePay\SagePay::setBasket
     * @covers SagePay\SagePay::getBasket
     */
    public function testBasket(){
        $this->markTestIncomplete();
    }
    
    /**
     * @covers SagePay\SagePay::setAllowGiftAid
     * @covers SagePay\SagePay::getAllowGiftAid
     */
    public function testAllowGiftAid(){
        $this->markTestIncomplete();
    }
    
    /**
     * @covers SagePay\SagePay::setApplyAVSCV2
     * @covers SagePay\SagePay::getApplyAVSCV2
     */
    public function testApplyAVSCV2(){
        $this->markTestIncomplete();
    }
    
    /**
     * @covers SagePay\SagePay::setApply3DSecure
     * @covers SagePay\SagePay::getApply3DSecure
     */
    public function testApply3DSecure(){
        $this->markTestIncomplete();
    }
    
    /**
     * @covers SagePay\SagePay::setBillingAgreement
     * @covers SagePay\SagePay::getBillingAgreement
     */
    public function testBillingAgreement(){
        $this->markTestIncomplete();
    }
    
    /**
     * @covers SagePay\SagePay::setBasketXML
     * @covers SagePay\SagePay::getBasketXML
     */
    public function testBasketXML(){
        $this->markTestIncomplete();
    }
    
    /**
     * @covers SagePay\SagePay::setCustomerXML
     * @covers SagePay\SagePay::getCustomerXML
     */
    public function testCustomerXML(){
        $this->markTestIncomplete();
    }
    
    /**
     * @covers SagePay\SagePay::setSurchargeXML
     * @covers SagePay\SagePay::getSurchargeXML
     */
    public function testSurchargeXML(){
        $this->markTestIncomplete();
    }
    
    /**
     * @covers SagePay\SagePay::setVendorData
     * @covers SagePay\SagePay::getVendorData
     */
    public function testVendorData(){
        $this->markTestIncomplete();
    }
    
    /**
     * @covers SagePay\SagePay::setReferrerID
     * @covers SagePay\SagePay::getReferrerID
     */
    public function testReferrerID(){
        $this->markTestIncomplete();
    }
    
    /**
     * @covers SagePay\SagePay::setLanguage
     * @covers SagePay\SagePay::getLanguage
     */
    public function testLanguage(){
        $this->markTestIncomplete();
    }
    
    /**
     * @covers SagePay\SagePay::setWebsite
     * @covers SagePay\SagePay::getWebsite
     */
    public function testWebsite(){
        $this->markTestIncomplete();
    }
    
    /**
     * @covers SagePay\SagePay::setDeliverySameAsBilling
     * @covers SagePay\SagePay::setDeliverySurname
     * @covers SagePay\SagePay::setDeliveryFirstnames
     * @covers SagePay\SagePay::setDeliveryAddress1
     * @covers SagePay\SagePay::setDeliveryAddress2
     * @covers SagePay\SagePay::setDeliveryCity
     * @covers SagePay\SagePay::setDeliveryPostCode
     * @covers SagePay\SagePay::setDeliveryCountry
     * @covers SagePay\SagePay::setDeliveryState
     * @covers SagePay\SagePay::setDeliveryPhone
     * @covers SagePay\SagePay::getBillingSurname
     * @covers SagePay\SagePay::getBillingFirstnames
     * @covers SagePay\SagePay::getBillingAddress1
     * @covers SagePay\SagePay::getBillingAddress2
     * @covers SagePay\SagePay::getBillingCity
     * @covers SagePay\SagePay::getBillingPostCode
     * @covers SagePay\SagePay::getBillingCountry
     * @covers SagePay\SagePay::getBillingState
     * @covers SagePay\SagePay::getBillingPhone
     */
    public function testDeliverySameAsBilling(){
        $this->markTestIncomplete();
    }
    
    /**
     * @covers SagePay\SagePay::decode
     * @covers SagePay\SagePay::decodeAndDecrypt
     */
    public function testDecode(){
        $this->markTestIncomplete();
    }
    
    /**
     * @covers SagePay\SagePay::getCrypt
     * @covers SagePay\SagePay::encryptAndEncode
     * @covers SagePay\SagePay::pkcs5_pad
     */
    public function testGetCrypt(){
        $this->markTestIncomplete();
    }
}
