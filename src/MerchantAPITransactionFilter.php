<?php

namespace Gam6itko\AdvCash;

/**
 * MerchantAPITransactionFilter
 */
class MerchantAPITransactionFilter
{
    /**
     * @access public
     * @var integer
     */
    public $count;
    /**
     * @access public
     * @var integer
     */
    public $from;
    /**
     * @access public
     * @var tnssortOrder
     */
    public $sortOrder;
    /**
     * @access public
     * @var dateTime
     */
    public $startTimeFrom;
    /**
     * @access public
     * @var dateTime
     */
    public $startTimeTo;
    /**
     * @access public
     * @var tnstransactionDirection
     */
    public $transactionDirection;
    /**
     * @access public
     * @var tnstransactionName
     */
    public $transactionName;
    /**
     * @access public
     * @var tnstransactionStatus
     */
    public $transactionStatus;
    /**
     * @access public
     * @var string
     */
    public $walletId;
}