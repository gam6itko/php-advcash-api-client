<?php

namespace Gam6itko\AdvCash;

/**
 * withdrawToEcurrencyRequest
 */
class withdrawToEcurrencyRequest extends moneyRequest
{
    /**
     * @access public
     * @var tnsecurrency
     */
    public $ecurrency;
    /**
     * @access public
     * @var string
     */
    public $receiver;
    /**
     * @access public
     * @var string
     */
    public $destinationTag;
    /**
     * @access public
     * @var double
     */
    public $cryptoCurrencyAmount;
    /**
     * @access public
     * @var string
     */
    public $orderId;
    /**
     * @access public
     * @var string
     */
    public $depositMethod;
}