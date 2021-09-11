<?php


namespace Modules\Payment\Repository;


interface PaymentInterface extends \Modules\Core\Repository\CoreInterface
{
    public function number_to_words(int $amount, string $currency = null): string;
}
