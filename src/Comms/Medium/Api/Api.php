<?php namespace Comms\Medium\Api;

use Comms\Medium\Api\Endpoint\Picture;
use GuzzleHttp\RequestOptions;
use Pckg\Api\Api as PckgApi;

/**
 * Class Api
 *
 * @package Pckg\Center\Api
 */
class Api extends PckgApi
{

    /**
     * Api constructor.
     *
     * @param $endpoint
     * @param $apiKey
     */
    public function __construct($endpoint, $apiKey)
    {
        $this->endpoint = $endpoint;
        $this->apiKey = $apiKey;

        $this->requestOptions = [
            RequestOptions::HEADERS => [
                'X-Medium-Api-Key' => $this->apiKey,
            ],
            RequestOptions::TIMEOUT => 15,
        ];
    }

    /**
     * @return Picture
     */
    public function picture()
    {
        return new Picture($this);
    }

}