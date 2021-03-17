<?php

namespace OAuth\OAuth2\Service;

use OAuth\OAuth2\Service\Exception\InvalidServiceConfigurationException;
use OAuth\OAuth2\Token\StdOAuth2Token;
use OAuth\Common\Http\Exception\TokenResponseException;
use OAuth\Common\Http\Uri\Uri;
use OAuth\Common\Consumer\CredentialsInterface;
use OAuth\Common\Http\Client\ClientInterface;
use OAuth\Common\Storage\TokenStorageInterface;
use OAuth\Common\Http\Uri\UriInterface;

class Keycloak extends Generic
{
    /**
     * Defined scopes are listed here:
     * @link https://www.keycloak.org/docs/latest/server_admin/#_client_scopes
     */
    const SCOPE_OPENID = 'openid';

    protected function getAuthorizationMethod()
    {
        return static::AUTHORIZATION_METHOD_HEADER_BEARER;
    }
}

