<?php namespace Comms\Medium\Api\Endpoint;

use Pckg\Api\Endpoint;

class Picture extends Endpoint
{

    /**
     * @var string
     */
    protected $path = 'pictures';

    /**
     * @param $identifier
     *
     * @return $this
     */
    public function search($keyword)
    {
        return $this->api->getApi('pictures/search?search=' . $keyword)->getApiResponse('pictures');
    }

}