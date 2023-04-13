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
     * @var tnscoinName
     */
    public $coinName;
    /**
     * @access public
     * @var tnsdepositPaymentMethodType
     */
    public $depositPaymentMethodType;
    /**
     * @access public
     * @var tnscurrency
     */
    public $currency;
    /**
     * @access public
     * @var tnsexceptionType
     */
    public $type;
}