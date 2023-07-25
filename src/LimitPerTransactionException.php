<?php

namespace Gam6itko\AdvCash;

/**
 * LimitPerTransactionException
 */
class LimitPerTransactionException
{
    /**
     * @access public
     * @var double
     */
    public $minAmount;
    /**
     * @access public
     * @var double
     */
    public $maxAmount;
    /**
     * @access public
     * @var scoinName
     */
    public $coinName;
    /**
     * @access public
     * @var sdepositPaymentMethodType
     */
    public $depositPaymentMethodType;
    /**
     * @access public
     * @var currency
     */
    public $currency;
    /**
     * @access public
     * @var sexceptionType
     */
    public $type;
}
