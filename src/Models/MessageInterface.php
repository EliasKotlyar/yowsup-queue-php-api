<?php
namespace Twinsen\YowsupQueue\Models;
interface MessageInterface
{
    /** @return string  */
    public function toJson();
}