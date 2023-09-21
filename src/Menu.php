<?php
namespace jhuliocastro\wordpress;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class Menu
{
    protected string $url;

    public function __construct(string $urlSite)
    {
        $this->url = $urlSite;
    }

    /**
     * @description list of every registered menu
     */
    public function getMenus():array|string{
        try{
            $client = new Client();
            $response = $client->get("{$this->url}/wp-json/menus/v1/menus");
            return json_decode($response->getBody(), true);
        }catch (GuzzleException $e){
            return "error api: {$e->getMessage()}";
        }
    }

    /**
     * @description data for a specific menu
     */
    public function getMenusForSlug(string $slug):array|string{
        try{
            $client = new Client();
            $response = $client->get("{$this->url}/wp-json/menus/v1/menus/{$slug}");
            return json_decode($response->getBody(), true);
        }catch (GuzzleException $e){
            return "error api: {$e->getMessage()}";
        }
    }

    /**
     * @description list of every registered menu location in your theme
     */
    public function getMenusLocations():array|string{
        try{
            $client = new Client();
            $response = $client->get("{$this->url}/wp-json/menus/v1/locations");
            return json_decode($response->getBody(), true);
        }catch (GuzzleException $e){
            return "error api: {$e->getMessage()}";
        }
    }

    /**
     * @description list of every registered menu location in your theme
     */
    public function getMenusLocationForSlug(string $slug):array|string{
        try{
            $client = new Client();
            $response = $client->get("{$this->url}/wp-json/menus/v1/locations/{$slug}");
            return json_decode($response->getBody(), true);
        }catch (GuzzleException $e){
            return "error api: {$e->getMessage()}";
        }
    }
}
