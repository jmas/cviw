/**
 * @author Alexander Maslakov <jmas.ukraine@gmail.com>
 * @license MIT
 */
define(function () {
  'use strict';

  /**
   * Cmp component class.
   * @class Cmp
   * @param {Object} config A key-value object of component configuration.
   * @param {Element} config.el Element that contain this component
   * @param {Object} config.data [optional] Object with key-value data
   */
  function Cmp(config) {
    config = config || {};

    /**
     * @memberOf Cmp
     * @public
     * @type {Element}
     */
    this.el = config.el;

    /**
     * @memberOf Cmp
     * @private
     * @type {Object}
     */
    this.data = config.data || {};
  }

  /**
   * Patch data with object. Data will be partically updated (only keys that
   * present in patch data object. If second parameter is true - data will be
   * fully replaced.
   * Afeter update() render() is called.
   * @method
   * @memberOf Cmp
   * @param {Object} data
   * @param {Boolean} silent [optional] Prevent call render() and onUpdate()
   * @param {Boolean} force [optional] Force replace all data with new data-object
   */
  Cmp.prototype.update = function (data, silent, force) {
    data = data || {};
    if (force) {
      this.data = data;
    } else {
      for (var key in data) {
        this.data[key] = data[key];
      }
    }
    if (! silent) {
      this.render();
      this.onUpdate();
    }
  };

  /**
   * @method
   * @memberOf Cmp
   * @param {String} key
   * @returns {*}
   */
  Cmp.prototype.get = function (key) {
    return (typeof this.data[key] !== 'undefined' ? this.data[key] : null);
  };

  /**
   * This method shoudl contain all DOM operations with
   * component children.
   * @memberOf Cmp
   * @abstract
   */
  Cmp.prototype.render = function () {
  };

  /**
   * This method is called each time after update.
   * @memberOf Cmp
   * @abstract
   */
  Cmp.prototype.onUpdate = function () {
  };

  return Cmp;
});
