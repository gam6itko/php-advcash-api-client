<?php

namespace Gam6itko\AdvCash;

/**
 * paymentOrderResult
 */
class paymentOrderResult extends paymentOrderRequest
{
    /**
     * @access public
     * @var string
     */
    public $buyerEmail;
    /**
     * @access public
     * @var coinName
     */
    public $coinName;
    /**
     * @access public
     * @var string
     */
    public $cryptoCurrencyAddress;
    /**
     * @access public
     * @var double
     */
    public $cryptoCurrencyAmount;
    /**
     * @access public
     * @var dateTime
     */
    public $cryptoCurrencyInvoiceCreated;
    /**
     * @access public
     * @var cryptoCurrencyDepositPaymentStatus
     */
    public $cryptoCurrencyInvoiceStatus;
    /**
     * @access public
     * @var dateTime
     */
    public $cryptoCurrencyPaymentCompleted;
    /**
     * @access public
     * @var dateTime
     */
    public $cryptoCurrencyPaymentReceived;
    /**
     * @access public
     * @var dateTime
     */
    public $cryptoCurrencyPaymentRefundRequested;
    /**
     * @access public
     * @var dateTime
     */
    public $cryptoCurrencyPaymentRefunded;
    /**
     * @access public
     * @var string
     */
    public $cryptoCurrencyTransactionId;
    /**
     * @access public
     * @var dateTime
     */
    public $paymentCreated;
    /**
     * @access public
     * @var sciAllowedPaymentSystems
     */
    public $paymentMethod;
    /**
     * @access public
     * @var paymentRequestStatus
     */
    public $paymentStatus;
    /**
     * @access public
     * @var double
     */
    public $receivedCryptoCurrencyAmount;
    /**
     * @access public
     * @var string
     */
    public $refundAddress;
    /**
     * @access public
     * @var string
     */
    public $srcWalletId;
    /**
     * @access public
     * @var double
     */
    public $transactionAmount;
    /**
     * @access public
     * @var dateTime
     */
    public $transactionCanceled;
    /**
     * @access public
     * @var dateTime
     */
    public $transactionCompleted;
    /**
     * @access public
     * @var dateTime
     */
    public $transactionCreated;
    /**
     * @access public
     * @var currency
     */
    public $transactionCurrency;
    /**
     * @access public
     * @var string
     */
    public $transactionId;
    /**
     * @access public
     * @var transactionStatus
     */
    public $transactionStatus;
}
