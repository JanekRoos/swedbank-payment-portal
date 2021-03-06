<?php

namespace SwedbankPaymentPortal\CC\HCCCommunicationEntity\HCCQueryResponse;

use JMS\Serializer\Annotation as Annotation;
use SwedbankPaymentPortal\CC\Type\ThreeDAuthorizationStatus;

/**
 * The container for the XML request. Also contains the version attribute, which we recommend you set to 2.
 *
 * @Annotation\AccessType("public_method")
 */
class QueryTxnResult
{
    /**
     * Card info data.
     *
     * @var Card
     *
     * @Annotation\Type("SwedbankPaymentPortal\CC\HCCCommunicationEntity\HCCQueryResponse\Card")
     * @Annotation\XmlElement(cdata=false)
     * @Annotation\SerializedName("Card")
     */
    private $card;

    /**
     * The container for the card transaction details.
     *
     * @var MAC
     *
     * @Annotation\SerializedName("MAC")
     * @Annotation\Type("SwedbankPaymentPortal\CC\HCCCommunicationEntity\HCCQueryResponse\MAC")
     */
    private $mac;

    /**
     * 3D secure data.
     *
     * @var ThreeDSecure
     *
     * @Annotation\Type("SwedbankPaymentPortal\CC\HCCCommunicationEntity\HCCQueryResponse\ThreeDSecure")
     * @Annotation\XmlElement(cdata=false)
     * @Annotation\SerializedName("ThreeDSecure")
     */
    private $threeDSecure;

    /**
     * The acquirer to whom the transaction will be routed.
     *
     * @var string
     *
     * @Annotation\SerializedName("acquirer")
     * @Annotation\Type("string")
     * @Annotation\XmlElement(cdata=false)
     */
    private $acquirer;

    /**
     * The authorization code returned from the acquirer.
     *
     * @var string
     *
     * @Annotation\Type("string")
     * @Annotation\XmlElement(cdata=false)
     * @Annotation\SerializedName("authcode")
     */
    private $authCode;

    /**
     * A 16 digit unique identifier for the transaction.
     * This reference will be used when submitting QUERY transactions to the Payment Gateway.
     *
     * @var string
     *
     * @Annotation\SerializedName("datacash_reference")
     * @Annotation\Type("string")
     * @Annotation\XmlElement(cdata=false)
     */
    private $dataCashReference;

    /**
     * The environment in which the transaction was processed. (E-Commerce / Website / Mobile etc.).
     *
     * @var string
     *
     * @Annotation\Type("string")
     * @Annotation\XmlElement(cdata=false)
     */
    private $environment;

    /**
     * The date on which the transaction was marked for settlement.
     *
     * @var \DateTime
     *
     * @Annotation\Type("DateTime<'Y-m-d H:i:s'>")
     * @Annotation\XmlElement(cdata=false)
     * @Annotation\SerializedName("fulfill_date")
     */
    private $fulfillDate;

    /**
     * UNIX timestamp on which the transaction was marked for settlement.
     *
     * @var int
     *
     * @Annotation\Type("integer")
     * @Annotation\SerializedName("fulfill_timestamp")
     */
    private $fulfillTimestamp;

    /**
     * The unique reference for each transaction which is echoed from the Purchase Request.
     *
     * @var string
     *
     * @Annotation\SerializedName("merchant_reference")
     * @Annotation\Type("string")
     * @Annotation\XmlElement(cdata=false)
     */
    private $merchantReference;

    /**
     * A descriptor relating to the state of the transaction.
     *
     * @var string
     *
     * @Annotation\Type("string")
     * @Annotation\XmlElement(cdata=false)
     */
    private $reason;

    /**
     * The code indicating the settlement status of the transaction.
     *
     * @var string
     *
     * @Annotation\Type("string")
     * @Annotation\XmlElement(cdata=false)
     */
    private $sent;

    /**
     * Any other return code should be treated as a declined / failed payment.
     *
     * This is the ultimate field that should be used to determine the status of the transaction.
     *
     * @var ThreeDAuthorizationStatus
     *
     * @Annotation\Type("SwedbankPaymentPortal\CC\Type\ThreeDAuthorizationStatus")
     */
    private $status;

    /**
     * The date on which the transaction was processed.
     *
     * @var \DateTime
     *
     * @Annotation\Type("DateTime<'Y-m-d H:i:s'>")
     * @Annotation\XmlElement(cdata=false)
     * @Annotation\SerializedName("transaction_date")
     */
    private $transactionDate;

    /**
     * A UNIX timestamp indicating when the transaction was processed.
     *
     * @var int
     *
     * @Annotation\Type("integer")
     * @Annotation\SerializedName("transaction_timestamp")
     */
    private $transactionTimestamp;

    /**
     * QueryTxnResult constructor.
     *
     * @param Card                      $card
     * @param MAC                       $mac
     * @param ThreeDSecure              $threeDSecure
     * @param string                    $acquirer
     * @param string                    $authCode
     * @param string                    $dataCashReference
     * @param string                    $environment
     * @param \DateTime                 $fulfillDate
     * @param int                       $fulfillTimestamp
     * @param string                    $merchantReference
     * @param string                    $reason
     * @param string                    $sent
     * @param ThreeDAuthorizationStatus $status
     * @param \DateTime                 $transactionDate
     * @param int                       $transactionTimestamp
     */
    public function __construct(
        Card $card,
        MAC $mac,
        ThreeDSecure $threeDSecure,
        $acquirer,
        $authCode,
        $dataCashReference,
        $environment,
        \DateTime $fulfillDate,
        $fulfillTimestamp,
        $merchantReference,
        $reason,
        $sent,
        ThreeDAuthorizationStatus $status,
        \DateTime $transactionDate,
        $transactionTimestamp
    ) {
        $this->card = $card;
        $this->mac = $mac;
        $this->threeDSecure = $threeDSecure;
        $this->acquirer = $acquirer;
        $this->authCode = $authCode;
        $this->dataCashReference = $dataCashReference;
        $this->environment = $environment;
        $this->fulfillDate = $fulfillDate;
        $this->fulfillTimestamp = $fulfillTimestamp;
        $this->merchantReference = $merchantReference;
        $this->reason = $reason;
        $this->sent = $sent;
        $this->status = $status;
        $this->transactionDate = $transactionDate;
        $this->transactionTimestamp = $transactionTimestamp;
    }

    /**
     * Card getter.
     *
     * @return Card
     */
    public function getCard()
    {
        return $this->card;
    }

    /**
     * Card setter.
     *
     * @param Card $card
     */
    public function setCard($card)
    {
        $this->card = $card;
    }

    /**
     * Mac getter.
     *
     * @return MAC
     */
    public function getMac()
    {
        return $this->mac;
    }

    /**
     * Mac setter.
     *
     * @param MAC $mac
     */
    public function setMac($mac)
    {
        $this->mac = $mac;
    }

    /**
     * ThreeDSecure getter.
     *
     * @return ThreeDSecure
     */
    public function getThreeDSecure()
    {
        return $this->threeDSecure;
    }

    /**
     * ThreeDSecure setter.
     *
     * @param ThreeDSecure $threeDSecure
     */
    public function setThreeDSecure($threeDSecure)
    {
        $this->threeDSecure = $threeDSecure;
    }

    /**
     * Acquirer getter.
     *
     * @return string
     */
    public function getAcquirer()
    {
        return $this->acquirer;
    }

    /**
     * Acquirer setter.
     *
     * @param string $acquirer
     */
    public function setAcquirer($acquirer)
    {
        $this->acquirer = $acquirer;
    }

    /**
     * AuthCode getter.
     *
     * @return string
     */
    public function getAuthCode()
    {
        return $this->authCode;
    }

    /**
     * AuthCode setter.
     *
     * @param string $authCode
     */
    public function setAuthCode($authCode)
    {
        $this->authCode = $authCode;
    }

    /**
     * DataCashReference getter.
     *
     * @return string
     */
    public function getDataCashReference()
    {
        return $this->dataCashReference;
    }

    /**
     * DataCashReference setter.
     *
     * @param string $dataCashReference
     */
    public function setDataCashReference($dataCashReference)
    {
        $this->dataCashReference = $dataCashReference;
    }

    /**
     * Environment getter.
     *
     * @return string
     */
    public function getEnvironment()
    {
        return $this->environment;
    }

    /**
     * Environment setter.
     *
     * @param string $environment
     */
    public function setEnvironment($environment)
    {
        $this->environment = $environment;
    }

    /**
     * FulfillDate getter.
     *
     * @return \DateTime
     */
    public function getFulfillDate()
    {
        return $this->fulfillDate;
    }

    /**
     * FulfillDate setter.
     *
     * @param \DateTime $fulfillDate
     */
    public function setFulfillDate($fulfillDate)
    {
        $this->fulfillDate = $fulfillDate;
    }

    /**
     * FulfillTimestamp getter.
     *
     * @return int
     */
    public function getFulfillTimestamp()
    {
        return $this->fulfillTimestamp;
    }

    /**
     * FulfillTimestamp setter.
     *
     * @param int $fulfillTimestamp
     */
    public function setFulfillTimestamp($fulfillTimestamp)
    {
        $this->fulfillTimestamp = $fulfillTimestamp;
    }

    /**
     * MerchantReference getter.
     *
     * @return string
     */
    public function getMerchantReference()
    {
        return $this->merchantReference;
    }

    /**
     * MerchantReference setter.
     *
     * @param string $merchantReference
     */
    public function setMerchantReference($merchantReference)
    {
        $this->merchantReference = $merchantReference;
    }

    /**
     * Reason getter.
     *
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Reason setter.
     *
     * @param string $reason
     */
    public function setReason($reason)
    {
        $this->reason = $reason;
    }

    /**
     * Sent getter.
     *
     * @return string
     */
    public function getSent()
    {
        return $this->sent;
    }

    /**
     * Sent setter.
     *
     * @param string $sent
     */
    public function setSent($sent)
    {
        $this->sent = $sent;
    }

    /**
     * Status getter.
     *
     * @return ThreeDAuthorizationStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Status setter.
     *
     * @param ThreeDAuthorizationStatus $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * TransactionDate getter.
     *
     * @return \DateTime
     */
    public function getTransactionDate()
    {
        return $this->transactionDate;
    }

    /**
     * TransactionDate setter.
     *
     * @param \DateTime $transactionDate
     */
    public function setTransactionDate($transactionDate)
    {
        $this->transactionDate = $transactionDate;
    }

    /**
     * TransactionTimestamp getter.
     *
     * @return int
     */
    public function getTransactionTimestamp()
    {
        return $this->transactionTimestamp;
    }

    /**
     * TransactionTimestamp setter.
     *
     * @param int $transactionTimestamp
     */
    public function setTransactionTimestamp($transactionTimestamp)
    {
        $this->transactionTimestamp = $transactionTimestamp;
    }
}
