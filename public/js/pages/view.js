/**
 * @author Alexander Maslakov <jmas.ukraine@gmail.com>
 * @license MIT
 */
require([
  'shared/Gallery',
  'shared/utils',
  'shared/api',
  'consts'
], function (Gallery, utils, api, consts) {
  'use strict';

  /**
   * @private
   * @param {String} gallerySelector
   * @returns {Gallery}
   */
  function createGallery(gallerySelector) {
    var lastViewImageId = null;
    var reportImageViewTimer = null;
    var galleryContainerEl = document.querySelector(gallerySelector);
    var containerGalleryId = galleryContainerEl.getAttribute('data-gallery-id');
    var containerImageId = galleryContainerEl.getAttribute('data-image-id');

    // create gallery instance
    var gallery = new Gallery({
      el: galleryContainerEl
    });

    /**
     * @override
     */
    gallery.onUpdate = function () {
      var viewImage = this.getViewImage();
      if (viewImage && lastViewImageId !== viewImage.id) {
        var imageId = viewImage.id;
        var url = '/gallery/' + containerGalleryId + '/image/' + imageId;
        // chanfe url
        utils.updateUrl(viewImage, viewImage.text, url);
        utils.updateDisqus(imageId, viewImage.text, url);
        lastViewImageId = imageId;
        // report about image view
        clearTimeout(reportImageViewTimer);
        if (!viewImage.viewed) {
          reportImageViewTimer = setTimeout(function () {
            api.reportImageView(containerGalleryId, imageId).then(function () {
              var image = gallery.getImageById(imageId);
              if (image) {
                image.viewed = true;
                gallery.updateImage(image);
              }
            });
          }, consts.REPORT_IMAGE_VIEW_WAIT);
        }
      }
      // handle favorite button click
      var favoriteButtonEl = galleryContainerEl.querySelector('.js-gallery-favorite-button');
      if (favoriteButtonEl) {
        favoriteButtonEl.addEventListener('click', function (event) {
          event.preventDefault();
          var target = event.target;
          var imageId = target.getAttribute('data-image-id');
          var image = gallery.getImageById(imageId);
          api.toggleImageFavorite(containerGalleryId, imageId, !image.favorite).then(function () {
            var image = gallery.getImageById(imageId);
            if (image) {
              image.favorite = !image.favorite;
              gallery.updateImage(image);
              if (image.favorite) {
                target.classList.add('active');
              } else {
                target.classList.remove('active');
              }
            }
          });
        });
      }
    };

    // load images
    api.loadGalleryImages(containerGalleryId)
      .then(function (images) {
        var viewIndex = 0;
        gallery.update({
          images: images
        }, true);
        if (containerImageId) {
          viewIndex = gallery.getImageIndexById(containerImageId);
        }
        if (viewIndex) {
          gallery.update({
            viewIndex: viewIndex
          });
        }
      })
      .catch(function () {
        window.replace('/');
      });

    // handle keyboard events
    window.addEventListener('keydown', function (event) {
      switch (event.keyCode) {
        case 37: // left
          // case 38: // up
          event.preventDefault();
          gallery.changeImageViewToPrev();
          break;
        case 39: // right
          // case 40: // down
          event.preventDefault();
          gallery.changeImageViewToNext();
          break;
      }
    }, true);

    return gallery;
  }

  // init
  createGallery('.js-gallery-container');
});
