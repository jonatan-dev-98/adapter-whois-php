<?php

namespace Whois\AdapterPhpWhois;

use Exception;
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
    public function getDomainInformations(string $domain)
    {
        try {
            
            $result = $this->service->Lookup(query: $domain, is_utf: false);
            return $result;

        } catch (\Throwable $th) {
            return throw new Exception($th->getMessage());
        }
    }
}
