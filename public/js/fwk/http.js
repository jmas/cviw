/**
 * @namespace http
 * @author Alexander Maslakov <jmas.ukraine@gmail.com>
 * @license MIT
 */
define(['fwk/utils'], function (utils) {
  'use strict';

  var requestHeaders = {
    'Accept': 'application/json',
    'Content-Type': 'application/json',
    'X-Requested-With': 'XMLHttpRequest'
  };

  return {
    /**
     * Do HTTP GET Request.
     * @memberOf http
     */
    requestGet: function (uri) {
      return fetch(
        uri,
        {
          method: 'get',
          credentials: 'same-origin',
          headers: requestHeaders
        }
      );
    },

    /**
     * Do HTTP PUT Request.
     * @memberOf http
     */
    requestPut: function (uri, data) {
      return fetch(
        uri,
        {
          method: 'get',
          credentials: 'same-origin',
          headers: requestHeaders,
          body: utils.objectToFormData(data)
        }
      );
    },

    /**
     * Do HTTP POST Request.
     * @memberOf http
     */
    requestPost: function (uri, data) {
      return fetch(
        uri,
        {
          method: 'post',
          credentials: 'same-origin',
          headers: requestHeaders,
          body: utils.objectToFormData(data)
        }
      );
    },

    /**
     * Do HTTP DELETE Request.
     * @memberOf http
     */
    requestDelete: function (uri) {
      return fetch(
        uri,
        {
          method: 'delete',
          credentials: 'same-origin',
          headers: requestHeaders
        }
      );
    }
  };
});
