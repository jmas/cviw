/**
 * @namespace index
 * @author Alexander Maslakov <jmas.ukraine@gmail.com>
 * @license MIT
 */
require(['./gallery', './misc', './api'], function(Gallery, misc, api) {
  var REPORT_IMAGE_VIEW_WAIT = 10000;

  /**
   * @memberOf index
   * @param {String} gallerySelector
   * @returns {Gallery}
   */
  function createGallery (gallerySelector) {
    var lastViewImageId = null;
    var reportImageViewTimer = null;
    var galleryId = 1;
    var galleryContainerEl = document.querySelector(gallerySelector);
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
        // chanfe url
        misc.updateUrl(viewImage, viewImage.text, '/view/' + imageId);
        misc.updateDisqus(imageId, viewImage.text, '/view/' + imageId);
        lastViewImageId = imageId;
        // report about image view
        clearTimeout(reportImageViewTimer);
        if (! viewImage.viewed) {
          reportImageViewTimer = setTimeout(function () {
            api.reportImageView(imageId).then(function () {
              var image = gallery.getImageById(imageId);
              if (image) { 
                image.viewed = true;
                gallery.updateImage(image);
              }
            });
          }, REPORT_IMAGE_VIEW_WAIT);
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
          api.toggleImageFavorite(imageId, !image.favorite).then(function () {
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
    api.loadGalleryImages(galleryId).then(function (images) {
      var viewIndex = 0;
      gallery.update({
        images: images
      });
      if (containerImageId) {
        viewIndex = gallery.getImageIndexById(containerImageId);
      }
      if (viewIndex) {
        gallery.update({
          viewIndex: viewIndex
        });
      }
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

  // run
  return createGallery('.js-gallery-container');
});
