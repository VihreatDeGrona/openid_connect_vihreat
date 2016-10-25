# OpenID Connect Vihreät

This integrates with the OpenID Connect module to allow sign in with VihreätSSO.

## Configuration

1. Register an OAuth application on Keycloak:
   Note the new application's client ID and secret.
2. Go to admin/config/services/openid-connect and enable the Vihreät client. Add
   the client ID and secret obtained from Keycloak.
3. Enable the OpenID Connect login block at admin/structure/block. This will
   provide a block containing a "Log in with Vihreät" button.

## References

* OpenID Connect module
  https://www.drupal.org/project/openid_connect
