<?php

namespace Gam6itko\AdvCash;

/**
 * cryptoCurrencyWithdrawalInvoiceDTO
 */
class cryptoCurrencyWithdrawalInvoiceDTO
{
    /**
     * @access public
     * @var tnscoinName
     */
    public $coinName;
    /**
     * @access public
     * @var integer
     */
    public $created;
    /**
     * @access public
     * @var double
     */
    public $cryptoCurrencyAmount;
    /**
     * @access public
     * @var tnssciAllowedPaymentSystems
     */
    public $depositMethod;
    /**
     * @access public
     * @var integer
     */
    public $expiresOn;
    /**
     * @access public
     * @var double
     */
    public $fiatAmount;
    /**
     * @access public
     * @var tnscurrency
     */
    public $fiatCurrency;
    /**
     * @access public
     * @var string
     */
    public $id;
    /**
     * @access public
     * @var string
     */
    public $orderId;
    /**
     * @access public
     * @var string
     */
    public $receiver;
    /**
     * @access public
     * @var tnscryptoCurrencyWithdrawalInvoiceStatus
     */
    public $status;
    /**
     * @access public
     * @var string
     */
    public $transactionId;
}