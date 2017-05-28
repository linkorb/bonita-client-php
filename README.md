Bonita BPM  client for PHP
==========================

This library implements a simple client library for [Bonita BPM](http://bonitasoft.com).

Bonita exposes a [well documented REST API](http://documentation.bonitasoft.com/?page=_rest-api)

## Authentication

Bonita requires REST clients to use an authenticated session.
So this implementation will call `/loginservice` on instantiation.
The request contains a username + password, and the response contains
a cookie, which will be used in following requests by the client.

The cookie alone will allow you to make GET requests only.

In an effort to [prevent CSRF attacks](http://documentation.bonitasoft.com/?page=csrf-security),
you'll need to pass a custom HTTP header that can be extracted from a cookie.

This client takes care of the session initialization and CSRF-protection headers.

## Usage / Example

Please refer to `example/example.php` for a usage example.

Copy the `.env.dist` file to `.env` and edit it to setup your configuration.
