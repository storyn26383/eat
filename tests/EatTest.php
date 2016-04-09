<?php

use App\User;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class EatTest extends TestCase
{
    use DatabaseTransactions;

    public function testEat()
    {
        $user = factory(User::class)->create();

        $user->eats()->create([
            'datetime' => Carbon::now(),
            'store'    => 'foo',
            'food'     => 'bar',
            'price'    => 100,
            'rate'     => 5,
            'note'     => 'biz',
        ]);
    }
}
