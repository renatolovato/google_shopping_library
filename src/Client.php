<?php

namespace GoogleContentApi;

use http\Params;

class Client
{
    protected $type;

    protected $project_id;

    protected $private_key_id;

    protected $private_key;

    protected $client_email;

    protected $client_id;

    protected $auth_uri;

    protected $token_uri;

    protected $auth_provider_x509_cert_url;

    protected $client_x509_cert_url;

    protected $universe_domain;

    public function __construct(array $params = [])
    {
        $this->type = $params['type'] ?? null;
        $this->project_id = $params['project_id'] ?? null;
        $this->private_key_id = $params['private_key_id'] ?? null;
        $this->private_key = $params['private_key'] ?? null;
        $this->client_email = $params['client_email'] ?? null;
        $this->client_id = $params['client_id'] ?? null;
        $this->auth_uri = $params['auth_uri'] ?? null;
        $this->token_uri = $params['token_uri'] ?? null;
        $this->auth_provider_x509_cert_url = $params['auth_provider_x509_cert_url'] ?? null;
        $this->client_x509_cert_url = $params['client_x509_cert_url'] ?? null;
        $this->universe_domain = $params['universe_domain'] ?? null;
    }

    public function authenticate()
    {

    }

    public function authorization()
    {

    }
}