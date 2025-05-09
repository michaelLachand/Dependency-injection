<?php

namespace App\Remote\Button;

use Symfony\Component\DependencyInjection\Attribute\AsTaggedItem;

#[AsTaggedItem('channel-down')]
final class ChannelDownButton implements ButtonInterface
{
    public function press(): void
    {
        dump('Change the channel down');
    }
}
