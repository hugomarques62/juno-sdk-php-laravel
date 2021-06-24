<?php

namespace Jetimob\Juno\Lib\Http\Payment;

use Jetimob\Juno\Lib\Http\Request;
use Jetimob\Juno\Lib\Http\Method;

use Jetimob\Juno\Lib\Model\Payment;


class PaymentRefundsRequest extends Request
{

    protected string $id;

    /**
     * ChargeCancelRequest constructor.
     * @param string $id
     */
    public function __construct(string $id)
    {
        parent::__construct();
        $this->id = $id;
    }

    


    protected function method(): string
    {
        return Method::POST;
    }

    protected function urn(): string
    {
        return 'payments/{id}/refunds';
    }
}
