<?php

namespace Whois\AdapterPhpWhois;

use JsonException;

@include('whois.main.php');

class AdapterPhpWhois
{
    private \Whois $service;

    public function __construct()
    {
        $this->service = new \Whois();
    }

    /**
     * @throws \Throwable
     */
    public function getInformations(string $domain)
    {
        
        try {
            $result = $this->service->Lookup(query: $domain, is_utf: false);
        } catch (\Throwable $th) {
            throw new JsonException($th->getMessage());
        }

        return $result;
    }
}
