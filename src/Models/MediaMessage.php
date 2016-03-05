<?php
namespace Twinsen\YowsupQueue\Models;
class MediaMessage extends SimpleMessage
{

    /**
     * @var
     */
    protected $imageData;

    /**
     * @return mixed
     */
    public function getImageData()
    {
        return $this->imageData;
    }

    /**
     * @param mixed $imageData
     */
    public function setImageData($imageData)
    {
        $this->imageData = $imageData;
    }


    /** @return string */
    public function toJson()
    {
        return json_encode(array(
            'type'=>"image",
            'body'=>$this->getBody(),
            'image' => $this->getImageData(),
            'address'=>$this->getAddress()
        ));
    }
}