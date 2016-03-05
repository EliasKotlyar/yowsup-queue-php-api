<?php
namespace Twinsen\YowsupQueue;
use Twinsen\YowsupQueue\Models\MessageInterface;
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

    public function sendMessage(MessageInterface $message){
        $messageTxt = $message->toJson();
        $messageTxt = utf8_decode($messageTxt);
        echo $messageTxt;
        $this->connection
            ->useTube($this->sendQueueName)
            ->put($messageTxt);
    }
}