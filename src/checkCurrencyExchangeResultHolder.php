<?php

namespace Gam6itko\AdvCash;

/**
 * checkCurrencyExchangeResultHolder
 */
class checkCurrencyExchangeResultHolder extends checkCurrencyExchangeRequest
{
    /**
     * @access public
     * @var double
     */
    public $amountExchanged;
    /**
     * @access public
     * @var double
     */
    public $cryptoCurrencyAmountWithFee;
    /**
     * @access public
     * @var double
     */
    public $cryptoCurrencyWithdrawalFee;
    /**
     * @access public
     * @var double
     */
    public $rate;
}