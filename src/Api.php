<?php
namespace Twinsen\YowsupQueue;
use Twinsen\YowsupQueue\Models\SimpleMessage;
use Pheanstalk\Pheanstalk;



class Api
{
    protected $connection = null;
    protected $sendQueueName = "whatsapp-send";
    protected $receiveQueueName = "whatsapp-receive";
    public function __construct($host,$port){
        $this->connection = new Pheanstalk($host,$port);
    }

    public function sendSimpleMessage(SimpleMessage $message){
        $this->connection
            ->useTube($this->sendQueueName)
            ->put($message->toJson());
    }
}