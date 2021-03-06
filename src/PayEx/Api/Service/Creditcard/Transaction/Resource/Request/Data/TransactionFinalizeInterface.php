<?php

namespace PayEx\Api\Service\Creditcard\Transaction\Resource\Request\Data;

use PayEx\Api\Service\Payment\Transaction\Resource\Request\Data\TransferInterface;

/**
 * Transaction Finalize Interface
 *
 * @api
 */
interface TransactionFinalizeInterface extends TransferInterface
{
    const ACTIVITY = 'activity';

    /**
     * @return string
     */
    public function getActivity();

    /**
     * @param string $activity
     * @return $this
     */
    public function setActivity($activity);
}
