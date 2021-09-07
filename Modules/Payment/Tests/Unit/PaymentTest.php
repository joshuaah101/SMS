<?php

namespace Modules\Payment\Tests\Unit;

use Modules\Payment\Repository\PaymentRepository;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PaymentTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $tester = new PaymentRepository();
       dd($tester->number_to_words(5000,'NGN'));
    }
}
