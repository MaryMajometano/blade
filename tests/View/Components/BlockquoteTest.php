<?php

namespace Flattens\Tests\View\Components;

use Flattens\Tests\TestCase;
use Flattens\View\Components\Blockquote;
use Flattens\View\Components\Paragraph;

class BlockquoteTest extends TestCase
{
    /** @test */
    public function it_renders_the_template()
    {
        $component = new Blockquote([new Paragraph('Lorem ipsum')]);

        $component->withAttributes(['class' => 'quote']);

        $this->assertEquals(
            '<blockquote class="quote"><p class="quote-data">Lorem ipsum</p></blockquote>',
            str_replace(PHP_EOL, '', (string) $component->render())
        );
    }
}
