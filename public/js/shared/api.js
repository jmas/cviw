/**
 * @namespace api
 * @author Alexander Maslakov <jmas.ukraine@gmail.com>
 * @license MIT
 */
define(['fwk/http', 'fwk/utils', 'consts'], function (http, utils, consts) {
  'use strict';

  return {
    /**
     * Load all gallery-specific images.
     * @memberOf api
     * @param {String|Number} galleryId
     * @returns {Promise}
     */
    loadGalleryImages: function (galleryId) {
      return http.requestGet(utils.replaceParams(consts.URI_GALLERY_IMAGES, {
        galleryId: galleryId
      })).then(function (response) { return response.json(); });
    },

    /**
     * @memberOf api
     * @param {String|Number} imageId
     * @returns {Promise}
     */
    reportImageView: function (galleryId, imageId) {
      return http.requestPost(utils.replaceParams(consts.URI_GALLERY_REPORT_VIEW, {
        galleryId: galleryId,
        imageId: imageId
      })).then(function (response) { return response.json(); });
    },

    /**
     * @memberOf api
     * @param {String|Number} imageId
     * @param {Boolean} state
     * @returns {Promise}
     */
    toggleImageFavorite: function (galleryId, imageId, state) {
      return http.requestPost(utils.replaceParams(consts.URI_GALLERY_FAVORITE, {
        galleryId: galleryId,
        imageId: imageId,
        state: state
      })).then(function (response) { return response.json(); });
    }
  };
});
