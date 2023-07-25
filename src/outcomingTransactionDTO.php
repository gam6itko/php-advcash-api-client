<?php

namespace Gam6itko\AdvCash;

/**
 * outcomingTransactionDTO
 */
class outcomingTransactionDTO extends abstractBaseDTO
{
    /**
     * @access public
     * @var string
     */
    public $accountName;
    /**
     * @access public
     * @var integer
     */
    public $activityLevel;
    /**
     * @access public
     * @var double
     */
    public $amount;
    /**
     * @access public
     * @var double
     */
    public $amountInUSD;
    /**
     * @access public
     * @var string
     */
    public $comment;
    /**
     * @access public
     * @var double
     */
    public $cryptoCurrencyAmount;
    /**
     * @access public
     * @var coinName
     */
    public $cryptoCurrencyCoinName;
    /**
     * @access public
     * @var currency
     */
    public $currency;
    /**
     * @access public
     * @var transactionDirection
     */
    public $direction;
    /**
     * @access public
     * @var double
     */
    public $fullCommission;
    /**
     * @access public
     * @var string
     */
    public $orderId;
    /**
     * @access public
     * @var string
     */
    public $parentTransactionId;
    /**
     * @access public
     * @var string
     */
    public $receiverEmail;
    /**
     * @access public
     * @var boolean
     */
    public $sci;
    /**
     * @access public
     * @var string
     */
    public $senderEmail;
    /**
     * @access public
     * @var dateTime
     */
    public $startTime;
    /**
     * @access public
     * @var transactionStatus
     */
    public $status;
    /**
     * @access public
     * @var transactionName
     */
    public $transactionName;
    /**
     * @access public
     * @var dateTime
     */
    public $updatedTime;
    /**
     * @access public
     * @var verificationStatus
     */
    public $verificationStatus;
    /**
     * @access public
     * @var string
     */
    public $walletDestId;
    /**
     * @access public
     * @var string
     */
    public $walletSrcId;
}
