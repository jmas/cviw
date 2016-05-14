/**
 * @author Alexander Maslakov <jmas.ukraine@gmail.com>
 * @license MIT
 */
define(function () {
  /**
   * Base component class.
   * Config can contain following options:
   * * el Element that contain this component
   * * data Object with key-value data
   * @class Base
   * @param {Object} config - A key-value object of component configuration.
   */
  function Base(config) {
    config = config || {};

    /**
     * @memberOf Base
     * @public
     * @type {Element}
     */
    this.el = config.el;

    /**
     * @memberOf Base
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
   * @memberOf Base
   * @param {Object} data
   * @param {Boolean} force
   */
  Base.prototype.update = function (data, force) {
    data = data || {};
    if (force) {
      this.data = data;
    } else {
      for (var key in data) {
        this.data[key] = data[key];
      }
    }
    this.render();
    this.onUpdate();
  };

  /**
   * @method
   * @memberOf Base
   * @param {String} key
   * @returns {*}
   */
  Base.prototype.get = function (key) {
    return (typeof this.data[key] !== 'undefined' ? this.data[key] : null);
  };

  /**
   * This method shoudl contain all DOM operations with
   * component children.
   * @memberOf Base
   * @abstract
   */
  Base.prototype.render = function () {
  };

  /**
   * This method is called each time after update.
   * @memberOf Base
   * @abstract
   */
  Base.prototype.onUpdate = function () {
  };

  return Base;
});