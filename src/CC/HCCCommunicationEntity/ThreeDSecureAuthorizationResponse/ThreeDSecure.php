<?php

namespace SwedbankPaymentPortal\CC\HCCCommunicationEntity\ThreeDSecureAuthorizationResponse;

use JMS\Serializer\Annotation as Annotation;
use SwedbankPaymentPortal\CC\Type\CardholderRegisterStatus;

/**
 * The container for 3d secure data.
 *
 * @Annotation\AccessType("public_method")
 */
class ThreeDSecure
{
    /**
     * The result of the address and card security code verification.
     *
     * @var string
     *
     * @Annotation\Type("string")
     * @Annotation\XmlElement(cdata=false)
     */
    private $aav;

    /**
     * Indicates whether the cardholder was registered for 3-D Secure and the PARes / VERes status.
     *
     * @var CardholderRegisterStatus
     *
     * @Annotation\Type("SwedbankPaymentPortal\CC\Type\CardholderRegisterStatus")
     * @Annotation\SerializedName("cardholder_registered")
     */
    private $cardholderRegistered;

    /**
     * The value used by the Payment Gateway to calculate the 3-D Secure security code. Returned for reference only.
     *
     * @var string
     *
     * @Annotation\Type("string")
     * @Annotation\XmlElement(cdata=false)
     * @Annotation\SerializedName("cavvAlgorithm")
     */
    private $cavvAlgorithm;

    /**
     * The Electronic Commerce Indicator (ECI).
     *
     * @var string
     *
     * @Annotation\Type("string")
     * @Annotation\XmlElement(cdata=false)
     */
    private $eci;

    /**
     * 3-D Secure transaction ID.
     *
     * @var string
     *
     * @Annotation\Type("string")
     * @Annotation\XmlElement(cdata=false)
     * @Annotation\SerializedName("xid")
     */
    private $xid;

    /**
     * ThreeDSecure constructor.
     *
     * @param string                   $aav
     * @param CardholderRegisterStatus $cardholderRegistered
     * @param string                   $cavvAlgorithm
     * @param string                   $eci
     * @param string                   $xid
     */
    public function __construct($aav, CardholderRegisterStatus $cardholderRegistered, $cavvAlgorithm, $eci, $xid)
    {
        $this->aav = $aav;
        $this->cardholderRegistered = $cardholderRegistered;
        $this->cavvAlgorithm = $cavvAlgorithm;
        $this->eci = $eci;
        $this->xid = $xid;
    }

    /**
     * Aav getter.
     *
     * @return string
     */
    public function getAav()
    {
        return $this->aav;
    }

    /**
     * Aav setter.
     *
     * @param string $aav
     */
    public function setAav($aav)
    {
        $this->aav = $aav;
    }

    /**
     * CardholderRegistered getter.
     *
     * @return CardholderRegisterStatus
     */
    public function getCardholderRegistered()
    {
        return $this->cardholderRegistered;
    }

    /**
     * CardholderRegistered setter.
     *
     * @param CardholderRegisterStatus $cardholderRegistered
     */
    public function setCardholderRegistered($cardholderRegistered)
    {
        $this->cardholderRegistered = $cardholderRegistered;
    }

    /**
     * CavvAlgorithm getter.
     *
     * @return string
     */
    public function getCavvAlgorithm()
    {
        return $this->cavvAlgorithm;
    }

    /**
     * CavvAlgorithm setter.
     *
     * @param string $cavvAlgorithm
     */
    public function setCavvAlgorithm($cavvAlgorithm)
    {
        $this->cavvAlgorithm = $cavvAlgorithm;
    }

    /**
     * Eci getter.
     *
     * @return string
     */
    public function getEci()
    {
        return $this->eci;
    }

    /**
     * Eci setter.
     *
     * @param string $eci
     */
    public function setEci($eci)
    {
        $this->eci = $eci;
    }

    /**
     * Xid getter.
     *
     * @return string
     */
    public function getXid()
    {
        return $this->xid;
    }

    /**
     * Xid setter.
     *
     * @param string $xid
     */
    public function setXid($xid)
    {
        $this->xid = $xid;
    }
}
