<?php

namespace Bonita;

use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Cookie\CookieJar;

class Client
{
    protected $guzzle;
    protected $username;
    protected $password;
    protected $baseUrl;
    protected $cookieJar;

    public function __construct($baseUrl, $username, $password)
    {
        $this->baseUrl = $baseUrl;
        $this->username = $username;
        $this->password = $password;

        $part = parse_url($this->baseUrl);

        $this->cookieJar = CookieJar::fromArray([], $part['host']);

        $this->guzzle = new GuzzleClient();


        $response = $this->guzzle->post(
            $this->baseUrl . '/loginservice?redirect=false',
            [
                'form_params' => [
                    'username' => $this->username,
                    'password' => $this->password
                ],
                'cookies' => $this->cookieJar
            ]
        );

        //print_r($this->cookieJar);




    }

    public function get($url)
    {
      $response = $this->guzzle->get(
          $this->baseUrl . $url,
          [
              'cookies' => $this->cookieJar
          ]
      );

      return $response->getBody();
    }

    public function getOrganizationGroups()
    {
        return $this->get('/API/identity/group?p=0&c=100');
    }
}
