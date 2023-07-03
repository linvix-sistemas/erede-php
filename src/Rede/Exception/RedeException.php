<?php

namespace Rede\Exception;

use Rede\Transaction;
use RuntimeException;
use Throwable;

class RedeException extends RuntimeException
{

    private Transaction $transaction;

    public function __construct(string $message = "", int $code = 0, Transaction $transaction, ?Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);

        $this->transaction = $transaction;
    }

    public function getTransaction(): Transaction
    {
        return $this->transaction;
    }

}
