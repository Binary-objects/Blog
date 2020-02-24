<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

/**
 * Class NewCustomerHasRegisterEvent
 *
 * @package App\Events
 */
class NewCustomerHasRegisterEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $customer;

    /**
     * NewCustomerHasRegisterEvent constructor.
     *
     * @param $customer
     */
    public function __construct($customer)
    {
       $this->customer = $customer;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
