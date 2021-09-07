<?php


namespace Modules\Payment\Repository;


use Modules\Core\Repository\CoreAbstract;
use NumberToWords\NumberToWords;

class PaymentRepository extends CoreAbstract implements PaymentInterface
{

    public function number_to_words(int $amount, string $currency = null)
    {

        // create the number to words "manager" class
        $numberToWords = new NumberToWords();

// build a new currency transformer using the RFC 3066 language identifier
        $currencyTransformer = $numberToWords->getCurrencyTransformer('en');
        return $currencyTransformer->toWords($amount * 100, $currency);
    }

}
