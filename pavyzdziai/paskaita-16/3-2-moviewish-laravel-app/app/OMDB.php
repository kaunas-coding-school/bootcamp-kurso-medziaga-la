<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class OMDB extends Model
{
    protected $url = 'https://api.themoviedb.org/3/';
    protected $searchURL = ['GET', 'search/movie'];

    public function url()
    {
        return $this->url;
    }

    public function searchMethod()
    {
        return $this->searchURL[0];
    }

    public function searchURL()
    {
        return $this->searchURL[1];
    }

    public function getSearch($keyword=NULL)
    {
        // Prisijungimo API raktas
        $apikey = 'ac9b326d059663d8bb7b4451420ab387';
        // Pilnas adresas
        $fullUrl = $this->searchURL().'?'.'api_key='.$apikey.'&query='.$keyword;

        // Susikuriu Guzzle Client client objekta
        $client = new Client(['base_uri' => $this->url()]);

        // Siunciu uzklausa i OMDB serveri
        try {
            $response = $client->request($this->searchMethod(), $fullUrl);
        } catch (RequestException $e) {
            $e->getRequest();
            if ($e->hasResponse()) {
                $response = $e->getResponse();
            }
        }

        // $code = $response->getStatusCode();
        //
        // if ($code == 200) {
        //     $results = $response->getBody();
        // };

        return $response;
    }

    public function getResults($response)
    {
        $body = $response->getBody();
        $results = json_decode($body);
        return $results;
    }
}
