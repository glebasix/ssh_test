<?php

declare(strict_types=1);

namespace Tests\Task9;

use PHPUnit\Framework\TestCase;

use function App\Task9\convertString;

class ConvertStringTest extends TestCase
{
    /**
     * @test
     * @dataProvider stringProvider
     */
    public function stringOperation(string $input, string $result): void
    {
        $this->assertEquals($result, convertString($input));
    }

    /**
     * @return string[][]
     */
    public function stringProvider(): array
    {
        return [
            'convert example string' => [
                'The quick-brown_fox jumps over the_lazy-dog',
                'TheQuickBrownFoxJumpsOverTheLazyDog'
            ]
        ];
    }
}
