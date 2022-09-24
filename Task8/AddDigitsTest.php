<?php

declare(strict_types=1);

namespace Tests\Task8;

use PHPUnit\Framework\TestCase;

use function App\Task8\addDigits;

class AddDigitsTest extends TestCase
{
    /**
     * @test
     * @dataProvider digitsProvider
     */
    public function digitsOperation(int $number, int $result): void
    {
        $this->assertEquals($result, addDigits($number));
    }

    /**
     * @return int[][]
     */
    public function digitsProvider(): array
    {
        return [
            'positive number' => [8473, 4],
            'negative number' => [-5679, 9]
        ];
    }
}
