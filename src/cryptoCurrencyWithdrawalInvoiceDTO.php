<?php

namespace Gam6itko\AdvCash;

/**
 * cryptoCurrencyWithdrawalInvoiceDTO
 */
class cryptoCurrencyWithdrawalInvoiceDTO
{
    /**
     * @access public
     * @var scoinName
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
     * @var ssciAllowedPaymentSystems
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
     * @var currency
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
     * @var scryptoCurrencyWithdrawalInvoiceStatus
     */
    public $status;
    /**
     * @access public
     * @var string
     */
    public $transactionId;
}
