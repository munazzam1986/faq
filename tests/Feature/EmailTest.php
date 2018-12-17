<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Mail\OrderShipped;
use Illuminate\Support\Facades\Mail;

class EmailTest extends TestCase
{
    public function testEmail()
    {
        Mail::fake();
        Mail::assertSent(email::class, 0);

    }
}