<?php

namespace Tiptap\Tests\HTMLOutput\Nodes;

use Tiptap\Editor;
use Tiptap\Tests\HTMLOutput\TestCase;

class BulletListTest extends TestCase
{
    /** @test */
    public function bullet_list_node_gets_rendered_correctly()
    {
        $json = [
            'type' => 'doc',
            'content' => [
                [
                    'type' => 'bullet_list',
                    'content' => [
                        [
                            'type' => 'list_item',
                            'content' => [
                                [
                                    'type' => 'text',
                                    'text' => 'first list item',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ];

        $html = '<ul><li>first list item</li></ul>';

        $this->assertEquals($html, (new Editor)->setContent($json)->getHTML());
    }
}