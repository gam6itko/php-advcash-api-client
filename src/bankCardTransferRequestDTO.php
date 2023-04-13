<?php

namespace Gam6itko\AdvCash;

/**
 * bankCardTransferRequestDTO
 */
class bankCardTransferRequestDTO
{
    /**
     * @access public
     * @var double
     */
    public $amount;
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
    public $cardHolderCountryCode;
    /**
     * @access public
     * @var string
     */
    public $cardHolderIp;
    /**
     * @access public
     * @var string
     */
    public $cardNumber;
    /**
     * @access public
     * @var string
     */
    public $destCurrency;
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
    /**
     * @access public
     * @var boolean
     */
    public $savePaymentTemplate;
    /**
     * @access public
     * @var string
     */
    public $srcWalletId;
}