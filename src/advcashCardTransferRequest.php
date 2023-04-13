<?php

namespace Gam6itko\AdvCash;

/**
 * advcashCardTransferRequest
 */
class advcashCardTransferRequest extends moneyRequest
{
    /**
     * @access public
     * @var tnscardType
     */
    public $cardType;
    /**
     * @access public
     * @var string
     */
    public $email;
}