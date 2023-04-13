<?php

namespace Gam6itko\AdvCash;

/**
 * bankCardTransferRequest
 */
class bankCardTransferRequest extends moneyRequest
{
    /**
     * @access public
     * @var string
     */
    public $cardHolder;
    /**
     * @access public
     * @var string
     */
    public $cardHolderAddress;
    /**
     * @access public
     * @var string
     */
    public $cardHolderCity;
    /**
     * @access public
     * @var string
     */
    public $cardHolderCountry;
    /**
     * @access public
     * @var string
     */
    public $cardHolderDOB;
    /**
     * @access public
     * @var string
     */
    public $cardHolderIp;
    /**
     * @access public
     * @var string
     */
    public $cardHolderMobilePhoneNumber;
    /**
     * @access public
     * @var string
     */
    public $cardNumber;
    /**
     * @access public
     * @var string
     */
    public $expiryMonth;
    /**
     * @access public
     * @var string
     */
    public $expiryYear;
}