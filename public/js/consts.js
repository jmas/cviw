/**
 * @author Alexander Maslakov <jmas.ukraine@gmail.com>
 * @license MIT
 */
define(function () {
  'use strict';

  /**
   * @namespace consts
   */
  return {
    /**
     * Wait in seconds before send report image view request.
     * @memberOf consts
     */
    REPORT_IMAGE_VIEW_WAIT: 3000,

    /**
     * URI of gallery images.
     * @memberOf consts
     */
    URI_GALLERY_IMAGES: '/gallery/:galleryId/images',

    /**
     * URI of gallery report image view.
     * @memberOf consts
     */
    URI_GALLERY_REPORT_VIEW: '/gallery/:galleryId/image/:imageId/view',

    /**
     * URI of gallery update image favorite state.
     * @memberOf consts
     */
    URI_GALLERY_FAVORITE: '/gallery/:galleryId/image/:imageId/favorite'
  };
});
