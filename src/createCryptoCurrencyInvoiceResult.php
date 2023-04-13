<?php

namespace Gam6itko\AdvCash;

/**
 * createCryptoCurrencyInvoiceResult
 */
class createCryptoCurrencyInvoiceResult extends createCryptoCurrencyInvoiceRequest
{
    /**
     * @access public
     * @var string
     */
    public $address;
    /**
     * @access public
     * @var string
     */
    public $addressOldFormat;
    /**
     * @access public
     * @var double
     */
    public $cryptoCurrencyAmount;
    /**
     * @access public
     * @var string
     */
    public $destinationTag;
}