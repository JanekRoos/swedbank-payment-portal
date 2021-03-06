<?php

namespace SwedbankPaymentPortal\PayPal\CommunicationEntity\GetExpressCheckoutDetailsResponse;

use JMS\Serializer\Annotation;
use SwedbankPaymentPortal\PayPal\CommunicationEntity\ShippingAddress;
use SwedbankPaymentPortal\PayPal\Type\AcknowledgmentStatus;
use SwedbankPaymentPortal\PayPal\Type\AddressStatus;
use SwedbankPaymentPortal\PayPal\Type\PayerStatus;
use SwedbankPaymentPortal\PayPal\Type\PayPalBool;

/**
 * The container for the paypal info.
 *
 * @Annotation\AccessType("public_method")
 */
class PayPalTxn
{
    /**
     * Details of the shipping address.
     *
     * @var BillingAddress
     *
     * @Annotation\XmlElement(cdata=false)
     * @Annotation\Type(
     *     "SwedbankPaymentPortal\PayPal\CommunicationEntity\GetExpressCheckoutDetailsResponse\BillingAddress"
     * )
     * @Annotation\SerializedName("BillingAddress")
     */
    private $billingAddress;

    /**
     * Details of the shipping address.
     *
     * @var ShippingAddress
     *
     * @Annotation\XmlElement(cdata=false)
     * @Annotation\Type(
     *     "SwedbankPaymentPortal\PayPal\CommunicationEntity\ShippingAddress"
     * )
     * @Annotation\SerializedName("ShippingAddress")
     */
    private $shippingAddress;

    /**
     * Acknowledgement status.
     *
     * @var AcknowledgmentStatus
     *
     * @Annotation\Type("SwedbankPaymentPortal\PayPal\Type\AcknowledgmentStatus")
     * @Annotation\SerializedName("ack")
     */
    private $acknowledgment;

    /**
     * Address Normalization Status.
     *
     * @var string
     *
     * @Annotation\Type("string")
     * @Annotation\XmlElement(cdata=false)
     * @Annotation\SerializedName("addressnormalizationstatus")
     */
    private $addressNormalizationStatus;

    /**
     * Phone number.
     *
     * @var AddressStatus
     *
     * @Annotation\Type("SwedbankPaymentPortal\PayPal\Type\AddressStatus")
     * @Annotation\SerializedName("addressstatus")
     */
    private $addressStatus;

    /**
     * The final amount charged, including any shipping and taxes from your PayPal Merchant Profile.
     *
     * @var float
     *
     * @Annotation\XmlElement(cdata=false)
     * @Annotation\Type("float")
     * @Annotation\SerializedName("amt")
     */
    private $amount;

    /**
     * Indicates whether the customer’s shipping address on file with PayPal must be a confirmed address.
     *
     * @var PayPalBool
     *
     * @Annotation\Type("SwedbankPaymentPortal\PayPal\Type\PayPalBool")
     * @Annotation\SerializedName("billing_agreement_accepted")
     */
    private $billingAgreementAccepted;

    /**
     * PayPal build version.
     *
     * @var string
     *
     * @Annotation\Type("string")
     * @Annotation\XmlElement(cdata=false)
     */
    private $build;

    /**
     * Payer’s business name.
     *
     * @var string
     *
     * @Annotation\Type("string")
     * @Annotation\XmlElement(cdata=false)
     * @Annotation\SerializedName("business")
     */
    private $business;

    /**
     * Checkout status.
     *
     * @var string
     *
     * @Annotation\XmlElement(cdata=false)
     * @Annotation\Type("string")
     * @Annotation\SerializedName("checkoutstatus")
     */
    private $checkoutStatus;

    /**
     * PayPal transaction reference.
     *
     * @var string
     *
     * @Annotation\Type("string")
     * @Annotation\XmlElement(cdata=false)
     * @Annotation\SerializedName("correlationid")
     */
    private $correlationId;

    /**
     * The Country associated to the shipping address.
     *
     * @var string
     *
     * @Annotation\XmlElement(cdata=false)
     * @Annotation\Type("string")
     * @Annotation\SerializedName("countrycode")
     */
    private $countryCode;

    /**
     * The currency used in this payment.
     *
     * @var string
     *
     * @Annotation\XmlElement(cdata=false)
     * @Annotation\Type("string")
     * @Annotation\SerializedName("currencycode")
     */
    private $currencyCode;

    /**
     * A free-form field for your own use.
     *
     * Such as a tracking number or other value you want PayPal,
     * to return on get_express_checkout_details and do_express_checkout_payment.
     *
     * @var string
     *
     * @Annotation\XmlElement(cdata=false)
     * @Annotation\Type("string")
     */
    private $custom;

    /**
     * Description of the payment.
     *
     * @var string
     *
     * @Annotation\XmlElement(cdata=false)
     * @Annotation\Type("string")
     * @Annotation\SerializedName("desc")
     */
    private $description;

    /**
     * Email address of the buyer. Used to pre-fill the PayPal membership sign-up portion of the PayPal login page.
     *
     * @var string
     *
     * @Annotation\XmlElement(cdata=false)
     * @Annotation\Type("string")
     */
    private $email;

    /**
     * Error code.
     *
     * @var string
     *
     * @Annotation\XmlElement(cdata=false)
     * @Annotation\Type("string")
     * @Annotation\SerializedName("errorcode")
     */
    private $errorCode;

    /**
     * First name.
     *
     * @var string
     *
     * @Annotation\XmlElement(cdata=false)
     * @Annotation\Type("string")
     * @Annotation\SerializedName("firstname")
     */
    private $firstName;

    /**
     * Handling amount.
     *
     * @var float
     *
     * @Annotation\XmlElement(cdata=false)
     * @Annotation\Type("float")
     * @Annotation\SerializedName("handlingamt")
     */
    private $handlingAmt;

    /**
     * Insurance amount.
     *
     * @var float
     *
     * @Annotation\XmlElement(cdata=false)
     * @Annotation\Type("float")
     * @Annotation\SerializedName("insuranceamt")
     */
    private $insuranceAmt;

    /**
     * Was insurance option offered.
     *
     * @var string
     *
     * @Annotation\XmlElement(cdata=false)
     * @Annotation\Type("string")
     * @Annotation\SerializedName("insuranceoptionoffered")
     */
    private $insuranceOptionOffered;

    /**
     * Merchant unique invoice or tracking number. Returned in the do_express_ checkout_payment response.
     *
     * @var string
     *
     * @Annotation\XmlElement(cdata=false)
     * @Annotation\Type("string")
     * @Annotation\SerializedName("invnum")
     */
    private $invNum;

    /**
     * Item amount.
     *
     * @var float
     *
     * @Annotation\XmlElement(cdata=false)
     * @Annotation\Type("float")
     * @Annotation\SerializedName("itemamt")
     */
    private $itemAmt;

    /**
     * Last name of the buyer.
     *
     * @var string
     *
     * @Annotation\XmlElement(cdata=false)
     * @Annotation\Type("string")
     * @Annotation\SerializedName("lastname")
     */
    private $lastName;

    /**
     * Paypal payer id.
     *
     * @var string
     *
     * @Annotation\XmlElement(cdata=false)
     * @Annotation\Type("string")
     * @Annotation\SerializedName("payerid")
     */
    private $payerId;

    /**
     * Paypal payer id.
     *
     * @var PayerStatus
     *
     * @Annotation\Type("SwedbankPaymentPortal\PayPal\Type\PayerStatus")
     * @Annotation\SerializedName("payerstatus")
     */
    private $payerStatus;

    /**
     * Seller PayPal Account Id.
     *
     * @var string
     *
     * @Annotation\Type("string")
     * @Annotation\SerializedName("sellerpaypalaccountid")
     */
    private $sellerPayPalAccountId;

    /**
     * Shipment discount amount.
     *
     * @var float
     *
     * @Annotation\XmlElement(cdata=false)
     * @Annotation\Type("float")
     * @Annotation\SerializedName("shipdiscamt")
     */
    private $shipmentDiscountAmount;

    /**
     * Shipping cost amount.
     *
     * @var float
     *
     * @Annotation\XmlElement(cdata=false)
     * @Annotation\Type("float")
     * @Annotation\SerializedName("shippingamt")
     */
    private $shippingAmount;

    /**
     * Country to ship to name.
     *
     * @var string
     *
     * @Annotation\XmlElement(cdata=false)
     * @Annotation\Type("string")
     * @Annotation\SerializedName("shiptocountryname")
     */
    private $shipToCountryName;

    /**
     * Tax amount.
     *
     * @var float
     *
     * @Annotation\XmlElement(cdata=false)
     * @Annotation\Type("float")
     * @Annotation\SerializedName("taxamt")
     */
    private $taxAmount;

    /**
     * Date and time that the requested API operation was performed.
     *
     * @var \DateTime
     *
     * @Annotation\Type("DateTime<'Y-m-d\TH:i:s\Z'>")
     * @Annotation\XmlElement(cdata=false)
     */
    private $timestamp;
    
    /**
     * Token.
     *
     * @var string
     *
     * @Annotation\Type("string")
     * @Annotation\XmlElement(cdata=false)
     */
    private $token;

    /**
     * PayPal version.
     *
     * @var string
     *
     * @Annotation\Type("string")
     * @Annotation\XmlElement(cdata=false)
     */
    private $version;

    /**
     * PayPalTxn constructor.
     *
     * @param BillingAddress       $billingAddress
     * @param ShippingAddress      $shippingAddress
     * @param AcknowledgmentStatus $acknowledgment
     * @param AddressStatus        $addressStatus
     * @param string               $addressNormalizationStatus
     * @param float                $amount
     * @param PayPalBool           $billingAgreementAccepted
     * @param string               $build
     * @param string               $business
     * @param string               $checkoutStatus
     * @param string               $correlationId
     * @param string               $countryCode
     * @param string               $currencyCode
     * @param string               $custom
     * @param string               $description
     * @param string               $email
     * @param string               $errorCode
     * @param string               $firstName
     * @param float                $handlingAmt
     * @param float                $insuranceAmt
     * @param string               $insuranceOptionOffered
     * @param string               $invNum
     * @param float                $itemAmt
     * @param string               $lastName
     * @param string               $payerId
     * @param PayerStatus          $payerStatus
     * @param string               $sellerPayPalAccountId
     * @param float                $shipmentDiscountAmount
     * @param float                $shippingAmount
     * @param string               $shipToCountryName
     * @param float                $taxAmount
     * @param \DateTime            $timestamp
     * @param string               $token
     * @param string               $version
     */
    public function __construct(
        BillingAddress $billingAddress,
        ShippingAddress $shippingAddress,
        AcknowledgmentStatus $acknowledgment,
        AddressStatus $addressStatus,
        $addressNormalizationStatus,
        $amount,
        PayPalBool $billingAgreementAccepted,
        $build,
        $business,
        $checkoutStatus,
        $correlationId,
        $countryCode,
        $currencyCode,
        $custom,
        $description,
        $email,
        $errorCode,
        $firstName,
        $handlingAmt,
        $insuranceAmt,
        $insuranceOptionOffered,
        $invNum,
        $itemAmt,
        $lastName,
        $payerId,
        PayerStatus $payerStatus,
        $sellerPayPalAccountId,
        $shipmentDiscountAmount,
        $shippingAmount,
        $shipToCountryName,
        $taxAmount,
        \DateTime $timestamp,
        $token,
        $version
    ) {
        $this->billingAddress = $billingAddress;
        $this->shippingAddress = $shippingAddress;
        $this->acknowledgment = $acknowledgment;
        $this->addressStatus = $addressStatus;
        $this->addressNormalizationStatus = $addressNormalizationStatus;
        $this->amount = $amount;
        $this->billingAgreementAccepted = $billingAgreementAccepted;
        $this->build = $build;
        $this->business = $business;
        $this->checkoutStatus = $checkoutStatus;
        $this->correlationId = $correlationId;
        $this->countryCode = $countryCode;
        $this->currencyCode = $currencyCode;
        $this->custom = $custom;
        $this->description = $description;
        $this->email = $email;
        $this->errorCode = $errorCode;
        $this->firstName = $firstName;
        $this->handlingAmt = $handlingAmt;
        $this->insuranceAmt = $insuranceAmt;
        $this->insuranceOptionOffered = $insuranceOptionOffered;
        $this->invNum = $invNum;
        $this->itemAmt = $itemAmt;
        $this->lastName = $lastName;
        $this->payerId = $payerId;
        $this->payerStatus = $payerStatus;
        $this->sellerPayPalAccountId = $sellerPayPalAccountId;
        $this->shipmentDiscountAmount = $shipmentDiscountAmount;
        $this->shippingAmount = $shippingAmount;
        $this->shipToCountryName = $shipToCountryName;
        $this->taxAmount = $taxAmount;
        $this->timestamp = $timestamp;
        $this->token = $token;
        $this->version = $version;
    }

    /**
     * InsuranceOptionOffered getter.
     *
     * @return string
     */
    public function getInsuranceOptionOffered()
    {
        return $this->insuranceOptionOffered;
    }

    /**
     * InsuranceOptionOffered setter.
     *
     * @param string $insuranceOptionOffered
     */
    public function setInsuranceOptionOffered($insuranceOptionOffered)
    {
        $this->insuranceOptionOffered = $insuranceOptionOffered;
    }

    /**
     * AddressNormalizationStatus getter.
     *
     * @return string
     */
    public function getAddressNormalizationStatus()
    {
        return $this->addressNormalizationStatus;
    }

    /**
     * AddressNormalizationStatus setter.
     *
     * @param string $addressNormalizationStatus
     */
    public function setAddressNormalizationStatus($addressNormalizationStatus)
    {
        $this->addressNormalizationStatus = $addressNormalizationStatus;
    }

    /**
     * BillingAddress getter.
     *
     * @return BillingAddress
     */
    public function getBillingAddress()
    {
        return $this->billingAddress;
    }

    /**
     * BillingAddress setter.
     *
     * @param BillingAddress $billingAddress
     */
    public function setBillingAddress($billingAddress)
    {
        $this->billingAddress = $billingAddress;
    }

    /**
     * ShippingAddress getter.
     *
     * @return ShippingAddress
     */
    public function getShippingAddress()
    {
        return $this->shippingAddress;
    }

    /**
     * ShippingAddress setter.
     *
     * @param ShippingAddress $shippingAddress
     */
    public function setShippingAddress($shippingAddress)
    {
        $this->shippingAddress = $shippingAddress;
    }

    /**
     * Acknowledgment getter.
     *
     * @return AcknowledgmentStatus
     */
    public function getAcknowledgment()
    {
        return $this->acknowledgment;
    }

    /**
     * Acknowledgment setter.
     *
     * @param AcknowledgmentStatus $acknowledgment
     */
    public function setAcknowledgment($acknowledgment)
    {
        $this->acknowledgment = $acknowledgment;
    }

    /**
     * AddressStatus getter.
     *
     * @return AddressStatus
     */
    public function getAddressStatus()
    {
        return $this->addressStatus;
    }

    /**
     * AddressStatus setter.
     *
     * @param AddressStatus $addressStatus
     */
    public function setAddressStatus($addressStatus)
    {
        $this->addressStatus = $addressStatus;
    }

    /**
     * Amount getter.
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Amount setter.
     *
     * @param float $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * BillingAgreementAccepted getter.
     *
     * @return PayPalBool
     */
    public function getBillingAgreementAccepted()
    {
        return $this->billingAgreementAccepted;
    }

    /**
     * BillingAgreementAccepted setter.
     *
     * @param PayPalBool $billingAgreementAccepted
     */
    public function setBillingAgreementAccepted($billingAgreementAccepted)
    {
        $this->billingAgreementAccepted = $billingAgreementAccepted;
    }

    /**
     * Build getter.
     *
     * @return string
     */
    public function getBuild()
    {
        return $this->build;
    }

    /**
     * Build setter.
     *
     * @param string $build
     */
    public function setBuild($build)
    {
        $this->build = $build;
    }

    /**
     * Business getter.
     *
     * @return string
     */
    public function getBusiness()
    {
        return $this->business;
    }

    /**
     * Business setter.
     *
     * @param string $business
     */
    public function setBusiness($business)
    {
        $this->business = $business;
    }

    /**
     * CheckoutStatus getter.
     *
     * @return string
     */
    public function getCheckoutStatus()
    {
        return $this->checkoutStatus;
    }

    /**
     * CheckoutStatus setter.
     *
     * @param string $checkoutStatus
     */
    public function setCheckoutStatus($checkoutStatus)
    {
        $this->checkoutStatus = $checkoutStatus;
    }

    /**
     * CorrelationId getter.
     *
     * @return string
     */
    public function getCorrelationId()
    {
        return $this->correlationId;
    }

    /**
     * CorrelationId setter.
     *
     * @param string $correlationId
     */
    public function setCorrelationId($correlationId)
    {
        $this->correlationId = $correlationId;
    }

    /**
     * CountryCode getter.
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * CountryCode setter.
     *
     * @param string $countryCode
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
    }

    /**
     * CurrencyCode getter.
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * CurrencyCode setter.
     *
     * @param string $currencyCode
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;
    }

    /**
     * Custom getter.
     *
     * @return string
     */
    public function getCustom()
    {
        return $this->custom;
    }

    /**
     * Custom setter.
     *
     * @param string $custom
     */
    public function setCustom($custom)
    {
        $this->custom = $custom;
    }

    /**
     * Description getter.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Description setter.
     *
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Email getter.
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Email setter.
     *
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * ErrorCode getter.
     *
     * @return string
     */
    public function getErrorCode()
    {
        return $this->errorCode;
    }

    /**
     * ErrorCode setter.
     *
     * @param string $errorCode
     */
    public function setErrorCode($errorCode)
    {
        $this->errorCode = $errorCode;
    }

    /**
     * FirstName getter.
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * FirstName setter.
     *
     * @param string $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * HandlingAmt getter.
     *
     * @return float
     */
    public function getHandlingAmt()
    {
        return $this->handlingAmt;
    }

    /**
     * HandlingAmt setter.
     *
     * @param float $handlingAmt
     */
    public function setHandlingAmt($handlingAmt)
    {
        $this->handlingAmt = $handlingAmt;
    }

    /**
     * InsuranceAmt getter.
     *
     * @return float
     */
    public function getInsuranceAmt()
    {
        return $this->insuranceAmt;
    }

    /**
     * InsuranceAmt setter.
     *
     * @param float $insuranceAmt
     */
    public function setInsuranceAmt($insuranceAmt)
    {
        $this->insuranceAmt = $insuranceAmt;
    }

    /**
     * InvNum getter.
     *
     * @return string
     */
    public function getInvNum()
    {
        return $this->invNum;
    }

    /**
     * InvNum setter.
     *
     * @param string $invNum
     */
    public function setInvNum($invNum)
    {
        $this->invNum = $invNum;
    }

    /**
     * ItemAmt getter.
     *
     * @return float
     */
    public function getItemAmt()
    {
        return $this->itemAmt;
    }

    /**
     * ItemAmt setter.
     *
     * @param float $itemAmt
     */
    public function setItemAmt($itemAmt)
    {
        $this->itemAmt = $itemAmt;
    }

    /**
     * LastName getter.
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * LastName setter.
     *
     * @param string $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * PayerId getter.
     *
     * @return string
     */
    public function getPayerId()
    {
        return $this->payerId;
    }

    /**
     * PayerId setter.
     *
     * @param string $payerId
     */
    public function setPayerId($payerId)
    {
        $this->payerId = $payerId;
    }

    /**
     * PayerStatus getter.
     *
     * @return PayerStatus
     */
    public function getPayerStatus()
    {
        return $this->payerStatus;
    }

    /**
     * PayerStatus setter.
     *
     * @param PayerStatus $payerStatus
     */
    public function setPayerStatus($payerStatus)
    {
        $this->payerStatus = $payerStatus;
    }

    /**
     * SellerPayPalAccountId getter.
     *
     * @return string
     */
    public function getSellerPayPalAccountId()
    {
        return $this->sellerPayPalAccountId;
    }

    /**
     * SellerPayPalAccountId setter.
     *
     * @param string $sellerPayPalAccountId
     */
    public function setSellerPayPalAccountId($sellerPayPalAccountId)
    {
        $this->sellerPayPalAccountId = $sellerPayPalAccountId;
    }

    /**
     * ShipmentDiscountAmount getter.
     *
     * @return float
     */
    public function getShipmentDiscountAmount()
    {
        return $this->shipmentDiscountAmount;
    }

    /**
     * ShipmentDiscountAmount setter.
     *
     * @param float $shipmentDiscountAmount
     */
    public function setShipmentDiscountAmount($shipmentDiscountAmount)
    {
        $this->shipmentDiscountAmount = $shipmentDiscountAmount;
    }

    /**
     * ShippingAmount getter.
     *
     * @return float
     */
    public function getShippingAmount()
    {
        return $this->shippingAmount;
    }

    /**
     * ShippingAmount setter.
     *
     * @param float $shippingAmount
     */
    public function setShippingAmount($shippingAmount)
    {
        $this->shippingAmount = $shippingAmount;
    }

    /**
     * ShipToCountryName getter.
     *
     * @return string
     */
    public function getShipToCountryName()
    {
        return $this->shipToCountryName;
    }

    /**
     * ShipToCountryName setter.
     *
     * @param string $shipToCountryName
     */
    public function setShipToCountryName($shipToCountryName)
    {
        $this->shipToCountryName = $shipToCountryName;
    }

    /**
     * TaxAmount getter.
     *
     * @return float
     */
    public function getTaxAmount()
    {
        return $this->taxAmount;
    }

    /**
     * TaxAmount setter.
     *
     * @param float $taxAmount
     */
    public function setTaxAmount($taxAmount)
    {
        $this->taxAmount = $taxAmount;
    }

    /**
     * Timestamp getter.
     *
     * @return \DateTime
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * Timestamp setter.
     *
     * @param \DateTime $timestamp
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;
    }

    /**
     * Token getter.
     *
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Token setter.
     *
     * @param string $token
     */
    public function setToken($token)
    {
        $this->token = $token;
    }

    /**
     * Version getter.
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Version setter.
     *
     * @param string $version
     */
    public function setVersion($version)
    {
        $this->version = $version;
    }
}
