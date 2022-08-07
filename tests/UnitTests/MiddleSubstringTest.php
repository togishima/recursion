<?php

namespace Tests\UnitTests;

use PHPUnit\Framework\TestCase;
use Recursion\Lesson82;

class MiddleSubstringTest extends TestCase
{
    private array $testCases = [];

    public function setUo(): void
    {
    }

    public function casesProvider(): array
    {
        return [
            0 => ['A', 'A'],
            1 => ['AB', 'A'],
            2 => ['ABC', 'B'],
            3 => ['ABCD', 'BC'],
            4 => ['ABCDE', 'BC'],
            5 => ['ABCDEF', 'CDE'],
            6 => ['ABCDEFG', 'CDE'],
            7 => ['ABCDEFGH', 'CDEF'],
            8 => ['ABCDEFGHI', 'CDEF'],
            9 => ['ABCDEFGHIJ', 'DEFGH'],
            10 => ['ABCDEFGHIJK', 'DEFGH'],
            11 => ['fundamental', 'damen'],
        ];
    }

    /**
     * @test
     */
    public function 文字数が2以下の場合は最初の文字を返す()
    {
        // 1文字の場合
        $result = Lesson82::middleSubstring('A');
        $this->assertTrue($result === 'A');
        // 2文字の場合
        $result = Lesson82::middleSubstring('AB');
        $this->assertTrue($result === 'A');
    }

    /**
     * @test
     * @dataProvider casesProvider
     */
    public function 文字列の真ん中を返す(string $subject, string $expected): void
    {
        $actual = Lesson82::middleSubstring($subject);
        $this->assertSame($expected, $actual);
    }
}