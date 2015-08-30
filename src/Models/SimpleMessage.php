<?php
namespace Twinsen\YowsupQueue\Models;
class SimpleMessage implements MessageInterface
{
    /** @var  string */
    protected $body;
    /** @var  string */
    protected $address;

    /**
     * @return mixed
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @param mixed $body
     */
    public function setBody($body)
    {
        $this->body = $body;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /** @return string */
    public function toJson()
    {
        return json_encode(array(
            'type'=>"simple",
            'body'=>$this->getBody(),
            'address'=>$this->getAddress()
        ));
    }
}