<?php

namespace Gam6itko\AdvCash;

/**
 * AdvcashCardMaxAllowedBalanceExceededException
 */
class AdvcashCardMaxAllowedBalanceExceededException
{
    /**
     * @access public
     * @var double
     */
    public $maxAllowedBalance;
    /**
     * @access public
     * @var double
     */
    public $currentBalance;
    /**
     * @access public
     * @var double
     */
    public $allowedAmount;
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
