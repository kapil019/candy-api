<?php

namespace GetCandy\Api\Core\Payments\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class TransactionFetchedEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $contents;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($contents)
    {
        $this->contents = $contents;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('payments');
    }
}
