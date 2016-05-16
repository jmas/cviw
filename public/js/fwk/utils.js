/**
 * @namespace utils
 * @author Alexander Maslakov <jmas.ukraine@gmail.com>
 * @license MIT
 */
define(function () {
  'use strict';

  return {
    /**
     * @memberOf utils
     * @param obj
     * @param form
     * @param namespace
     * @returns {FormData}
     */
    objectToFormData: function (obj, form, namespace) {
      var fd = form || new FormData();
      var formKey;
      for (var property in obj) {
        if (obj.hasOwnProperty(property)) {
          if (namespace) {
            formKey = namespace + '[' + property + ']';
          } else {
            formKey = property;
          }
          // if the property is an object, but not a File,
          // use recursivity.
          if (typeof obj[property] === 'object' && !(obj[property] instanceof File)) {
            objectToFormData(obj[property], fd, property);
          } else {
            // if it's a string or a File object
            fd.append(formKey, obj[property]);
          }
        }
      }
      return fd;
    },

    /**
     * @memberOf utils
     * @param str
     * @param params
     */
    replaceParams: function (str, params) {
      var keys = Object.keys(params);
      return str.replace(new RegExp('\:('+keys.join('|')+')', 'ig'), function (all, key) {
        return (typeof params[key] !== 'unfefined' ? params[key]: ':' + key);
      })
    }
  };
});
