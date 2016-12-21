<?php

class Resolver
{
    public function __construct($videoId, $format)
    {
        $streams = [];
    }

    public function getUrl()
    {
        $selected = $this
                ->streams
                ->withFormat($format)
                ->first;

        if (isset($selected))
        {
            return $selected->url;
        }
    }
}