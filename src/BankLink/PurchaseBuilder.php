<?php

namespace SwedbankPaymentPortal\BankLink;

use SwedbankPaymentPortal\SharedEntity\Authentication;
use SwedbankPaymentPortal\BankLink\CommunicationEntity\PurchaseRequest\PurchaseRequest;
use SwedbankPaymentPortal\BankLink\CommunicationEntity\PurchaseRequest\Transaction;
use SwedbankPaymentPortal\BankLink\CommunicationEntity\PurchaseRequest\Transaction\APMTxn;
use SwedbankPaymentPortal\BankLink\CommunicationEntity\PurchaseRequest\Transaction\APMTxn\AlternativePayment;
use SwedbankPaymentPortal\BankLink\CommunicationEntity\PurchaseRequest\Transaction\APMTxn\AlternativePayment\MethodDetails;
use SwedbankPaymentPortal\BankLink\CommunicationEntity\PurchaseRequest\Transaction\APMTxn\AlternativePayment\TransactionDetails;
use SwedbankPaymentPortal\BankLink\CommunicationEntity\PurchaseRequest\Transaction\APMTxn\AlternativePayment\TransactionDetails\BillingDetails;
use SwedbankPaymentPortal\BankLink\CommunicationEntity\PurchaseRequest\Transaction\APMTxn\AlternativePayment\TransactionDetails\PersonalDetails;
use SwedbankPaymentPortal\BankLink\CommunicationEntity\PurchaseRequest\Transaction\HPSTxn;
use SwedbankPaymentPortal\SharedEntity\Transaction\TxnDetails;
use SwedbankPaymentPortal\BankLink\CommunicationEntity\Type\PaymentMethod;
use SwedbankPaymentPortal\BankLink\CommunicationEntity\Type\ServiceType;

/**
 * Builds a purchase object.
 */
class PurchaseBuilder
{

    /**
     * Description information which will be presented in Customer bank’s account statement.
     * @var string
     */
    private $description;

    /**
     *  Amount details amount.
     *
     * @var int
     */
    private $amountValue;

    /**
     * Amount details exponent.
     *
     * @var int
     */
    private $amountExponent;

    /**
     * Amount details currency code.
     *
     * @var int
     */
    private $amountCurrencyCode;

    /**
     * Consumer email address.
     *
     * @var string
     */
    private $consumerEmail;

    /**
     * The URL that the merchant’s consumer will be redirected to after a successful transaction.
     *
     * @var string
     */
    private $successUrl;

    /**
     * The URL that the merchant’s consumer will be redirected to after a failed transaction.
     *
     * @var string
     */
    private $failureUrl;

    /**
     * Language.
     *
     * @var string
     */
    private $language;

    /**
     * Service type.
     *
     * @var ServiceType
     */
    private $serviceType;

    /**
     * Payment method.
     *
     * @var PaymentMethod
     */
    private $paymentMethod;

    /**
     * The Page Set ID which corresponds to the Hosted Page configuration on the Gateway (optional).
     *
     * @var int
     */
    private $pageSetId = 1;

    /**
     * Merchants can use a value such as an order number or an invoice number
     * as the merchant reference. To allow cardholders to repeat a transaction
     * that was declined and keep the same order number or invoice number, the
     * merchantreference must be modified by appending extra characters for
     * each subsequent attempt.
     *
     * @var string
     */
    private $merchantReference;

    /**
     * Client id to authenticate with (not required if service is used).
     *
     * @var int
     */
    private $clientId = '*******';

    /**
     * Password to authenticate with (not required if service is used).
     *
     * @var string
     */
    private $password = '*******';

    /**
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * AmountValue setter.
     *
     * @param mixed $amountValue
     *
     * @return PurchaseBuilder
     */
    public function setAmountValue($amountValue)
    {
        $this->amountValue = $amountValue;

        return $this;
    }

    /**
     * AmountExponent setter.
     *
     * @param mixed $amountExponent
     *
     * @return PurchaseBuilder
     */
    public function setAmountExponent($amountExponent)
    {
        $this->amountExponent = $amountExponent;

        return $this;
    }

    /**
     * AmountCurrencyCode setter.
     *
     * @param mixed $amountCurrencyCode
     *
     * @return PurchaseBuilder
     */
    public function setAmountCurrencyCode($amountCurrencyCode)
    {
        $this->amountCurrencyCode = $amountCurrencyCode;

        return $this;
    }

    /**
     * ConsumerEmail setter.
     *
     * @param mixed $consumerEmail
     *
     * @return PurchaseBuilder
     */
    public function setConsumerEmail($consumerEmail)
    {
        $this->consumerEmail = $consumerEmail;

        return $this;
    }

    /**
     * SuccessUrl setter.
     *
     * @param mixed $successUrl
     *
     * @return PurchaseBuilder
     */
    public function setSuccessUrl($successUrl)
    {
        $this->successUrl = $successUrl;

        return $this;
    }

    /**
     * FailueUrl setter.
     *
     * @param mixed $failureUrl
     *
     * @return PurchaseBuilder
     */
    public function setFailureUrl($failureUrl)
    {
        $this->failureUrl = $failureUrl;

        return $this;
    }

    /**
     * Language setter.
     *
     * @param mixed $language
     *
     * @return PurchaseBuilder
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * ServiceType setter.
     *
     * @param ServiceType $serviceType
     *
     * @return PurchaseBuilder
     */
    public function setServiceType(ServiceType $serviceType)
    {
        $this->serviceType = $serviceType;

        return $this;
    }

    /**
     * PaymentMethod setter.
     *
     * @param PaymentMethod $paymentMethod
     *
     * @return PurchaseBuilder
     */
    public function setPaymentMethod(PaymentMethod $paymentMethod)
    {
        $this->paymentMethod = $paymentMethod;

        return $this;
    }

    /**
     * PageSetId setter.
     *
     * @param mixed $pageSetId
     *
     * @return PurchaseBuilder
     */
    public function setPageSetId($pageSetId)
    {
        $this->pageSetId = $pageSetId;

        return $this;
    }

    /**
     * MerchantReference setter.
     *
     * @param string $merchantReference
     *
     * @return PurchaseBuilder
     */
    public function setMerchantReference($merchantReference)
    {
        $this->merchantReference = $merchantReference;

        return $this;
    }

    /**
     * ClientId setter.
     *
     * @param int $clientId
     *
     * @return PurchaseBuilder
     */
    public function setClientId($clientId)
    {
        $this->clientId = $clientId;

        return $this;
    }

    /**
     * Password setter.
     *
     * @param string $password
     *
     * @return PurchaseBuilder
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Returns built purchase request.
     *
     * @return PurchaseRequest
     *
     * @throws \InvalidArgumentException
     */
    public function getPurchaseRequest()
    {
        $amountDetails = new BillingDetails\AmountDetails(
            $this->get('amountValue'),
            $this->get('amountExponent'),
            $this->get('amountCurrencyCode')
        );
        $billingDetails = new BillingDetails($amountDetails);
        $personalDetails = new PersonalDetails($this->get('consumerEmail'));

        $transactionDetails = new TransactionDetails(
            $this->get('description'),
            $this->get('successUrl'),
            $this->get('failureUrl'),
            $this->get('language'),
            $personalDetails,
            $billingDetails
        );
        $methodDetails = new MethodDetails($this->get('serviceType'));
        $alternativePayment = new AlternativePayment($transactionDetails, $methodDetails);

        $apmTransaction = new APMTxn($this->get('paymentMethod'), $alternativePayment);
        $hpsTransaction = new HPSTxn($this->get('pageSetId'));
        $txnDetails = new TxnDetails($this->get('merchantReference'));

        $transaction = new Transaction($txnDetails, $hpsTransaction, $apmTransaction);
        $authentication = new Authentication($this->get('clientId'), $this->get('password'));

        return new PurchaseRequest($transaction, $authentication);
    }

    /**
     * Check if property is set.
     *
     * @param string $propertyName
     *
     * @throw \InvalidArgumentException
     */
    private function get($propertyName)
    {
        if ($this->{$propertyName} !== null) {
            return $this->{$propertyName};
        }

        throw new \InvalidArgumentException("Property named '{$propertyName}' isn't set. Please set it.");
    }
}
