<?php namespace Comms\Medium\Api\Endpoint;

use GuzzleHttp\RequestOptions;
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
        return $this->api->getApi('pictures/search?search=' . $keyword, [
            RequestOptions::TIMEOUT => 15,
        ])->getApiResponse('pictures');
    }

}