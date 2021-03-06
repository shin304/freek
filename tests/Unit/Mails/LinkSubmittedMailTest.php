<?php

namespace Tests\Unit\Mails;

use App\Mail\LinkSubmittedMail;
use App\Models\Link;
use Tests\TestCase;

class LinkSubmittedMailTest extends TestCase
{
    /** @test */
    public function the_link_approved_mail_can_be_rendered()
    {
        $link = Link::factory()->create();

        $this->assertIsString((new LinkSubmittedMail($link))->render());
    }
}
