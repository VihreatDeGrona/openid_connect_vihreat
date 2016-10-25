<?php

/**
 * @file
 * Vihreät OpenID Connect client.
 */

class OpenIDConnectVihreatClient extends OpenIDConnectClientBase {
    /**
     * {@inheritdoc}
     */
    public function getEndpoints() {
        return array(
            'authorization' => 'https://sso.vihreat.fi/auth/realms/greens/protocol/openid-connect/auth',
            'token' => 'https://sso.vihreat.fi/auth/realms/greens/protocol/openid-connect/token',
            'userinfo' => 'https://sso.vihreat.fi/auth/realms/greens/protocol/openid-connect/userinfo',
        );
    }

}
