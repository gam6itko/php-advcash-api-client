<?php

namespace Gam6itko\AdvCash;

/**
 * advcashCardTransferRequestDTO
 */
class advcashCardTransferRequestDTO
{
    /**
     * @access public
     * @var double
     */
    public $amount;
    /**
     * @access public
     * @var tnscardType
     */
    public $cardType;
    /**
     * @access public
     * @var tnscurrency
     */
    public $currency;
    /**
     * @access public
     * @var string
     */
    public $email;
    /**
     * @access public
     * @var boolean
     */
    public $savePaymentTemplate;
    /**
     * @access public
     * @var string
     */
    public $srcWalletId;
}