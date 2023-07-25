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
     * @var ssortOrder
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
     * @var stransactionDirection
     */
    public $transactionDirection;
    /**
     * @access public
     * @var stransactionName
     */
    public $transactionName;
    /**
     * @access public
     * @var stransactionStatus
     */
    public $transactionStatus;
    /**
     * @access public
     * @var string
     */
    public $walletId;
}
