/**
 * @author Alexander Maslakov <jmas.ukraine@gmail.com>
 * @license MIT
 */
define(['fwk/Cmp', 'shared/utils'], function (Cmp, utils) {
  'use strict';

  /**
   * Gallery component class.
   * @class Gallery
   * @extends Cmp
   * @param {Object} config A key-value object of component configuration.
   * @param {Element} config.el Element that contain this component
   * @param {Object} config.data [optional] Object with key-value data
   * @param {Array} config.image Array of objects each of that contain info about image
   * @param {Number} config.viewIndex Index of current view image of config.image array
   */
  function Gallery(config) {
    Cmp.call(this, Object.assign({
      data: {
        images: [],
        viewIndex: 0
      }
    }, config));

    /**
     * @memberOf Gallery
     * @private
     * @type {Element}
     */
    this.navEl = this.el.querySelector('.js-gallery-nav');

    /**
     * @memberOf Gallery
     * @private
     * @type {Element}
     */
    this.viewEl = this.el.querySelector('.js-gallery-view');

    /**
     * @memberOf Gallery
     * @private
     * @type {Element}
     */
    this.viewHeaderEl = this.el.querySelector('.js-gallery-view-header');

    /**
     * @memberOf Gallery
     * @private
     * @type {Element}
     */
    this.imageNavPrevEl = this.el.querySelector('.js-gallery-nav-prev');

    /**
     * @memberOf Gallery
     * @private
     * @type {Element}
     */
    this.imageNavNextEl = this.el.querySelector('.js-gallery-nav-next');

    // events
    this.navEl.addEventListener('click', this.handleNavClick.bind(this), true);
    this.imageNavPrevEl.addEventListener('click', this.handleNavPrevClick.bind(this), true);
    this.imageNavNextEl.addEventListener('click', this.handleNavNextClick.bind(this), true);
    this.viewHeaderEl.addEventListener('click', this.handleHeaderClick.bind(this), true);
  }

  Gallery.prototype = Cmp.prototype;
  Gallery.prototype.constructor = Gallery;

  /**
   * Handler for navigarion click.
   * @memberOf Gallery
   * @private
   * @param {Object} event
   */
  Gallery.prototype.handleNavClick = function (event) {
    var target = event.target;
    var viewIndex = target.getAttribute('data-view-index');
    if (viewIndex) {
      this.update({
        viewIndex: parseInt(viewIndex, 10)
      });
    }
  };

  /**
   * Handler for the previous button click.
   * @memberOf Gallery
   * @private
   * @param {Object} event
   */
  Gallery.prototype.handleNavPrevClick = function (event) {
    event.preventDefault();
    this.changeImageViewToPrev();
  };

  /**
   * Handler for the next button click.
   * @memberOf Gallery
   * @private
   * @param {Object} event
   */
  Gallery.prototype.handleNavNextClick = function (event) {
    event.preventDefault();
    this.changeImageViewToNext();
  };

  /**
   * Handler for the header link click.
   * @memberOf Gallery
   * @param event
   */
  Gallery.prototype.handleHeaderClick = function (event) {
    event.preventDefault();
    var url = event.target.getAttribute('href');
    if (url) {
      try {
        window.open(url);
      } catch (exception) {
        alert('Open URL is blocked by browser.');
      }
    }
  };

  /**
   * Change current view image to next.
   * @private
   * @memberOf Gallery
   */
  Gallery.prototype.changeImageViewToNext = function () {
    var viewIndex = this.get('viewIndex') || 0;
    var imagesLength = this.get('images').length;
    this.update({
      viewIndex: viewIndex < imagesLength - 1 ? viewIndex + 1 : 0
    });
  };

  /**
   * Change current view image to previous.
   * @private
   * @memberOf Gallery
   */
  Gallery.prototype.changeImageViewToPrev = function () {
    var viewIndex = this.get('viewIndex') || 0;
    var imagesLength = this.get('images').length;
    this.update({
      viewIndex: viewIndex !== 0 ? viewIndex - 1 : imagesLength - 1
    });
  };

  /**
   * Update image object. Image will be find by imageToUpdate.id.
   * @memberOf Gallery
   * @param {Object} imageToUpdate
   */
  Gallery.prototype.updateImage = function (imageToUpdate) {
    this.update({
      images: this.data.images.map(function (image) {
        if (image.id === imageToUpdate.id) {
          return imageToUpdate;
        }
        return image;
      })
    });
  };

  /**
   * Get image that currently is viewing.
   * @memberOf Gallery
   * @returns {Object|null}
   */
  Gallery.prototype.getViewImage = function () {
    return this.data.images[this.data.viewIndex] || null;
  };

  /**
   * Get gallery image by it ID.
   * @memberOf Gallery
   * @param {String|Number} id
   * @returns {Object|null}
   */
  Gallery.prototype.getImageById = function (id) {
    id = String(id);
    for (var i = 0, ln = this.data.images.length; i < ln; i++) {
      if (String(this.data.images[i].id) === id) {
        return this.data.images[i];
      }
    }
    return null;
  };

  /**
   * Get image index by it ID.
   * @param {String|Number} id
   * @returns {*}
   */
  Gallery.prototype.getImageIndexById = function (id) {
    id = String(id);
    for (var i = 0, ln = this.data.images.length; i < ln; i++) {
      if (String(this.data.images[i].id) === id) {
        return i;
      }
    }
    return null;
  };

  /**
   * Render gallery header.
   * @memberOf Gallery
   */
  Gallery.prototype.renderHeader = function () {
    var viewImage = this.getViewImage();
    if (viewImage) {
      this.viewHeaderEl.innerHTML = '<div class="gallery-view-caption">' + utils.linkify(viewImage.description) + '</div>'
        + '<div class="gallery-view-date">' + viewImage.create_date + '</div>'
        + '<button class="js-gallery-favorite-button gallery-favorite-button '
        + (viewImage.favorite ? ' active ' : '') + '" data-image-id="' + viewImage.id + '">★</button>';
    } else {
      this.viewHeaderEl.innerHTML = '';
    }
  };

  /**
   * Render gallery navigation.
   * @memberOf Gallery
   */
  Gallery.prototype.renderNav = function () {
    var navHtml = '<ul>';
    for (var i = 0, ln = this.data.images.length; i < ln; i++) {
      navHtml += '<li class="' + (i === this.data.viewIndex ? ' active ' : '')
        + (this.data.images[i].favorite ? ' favorite ' : '')
        + (this.data.images[i].viewed ? ' viewed ' : '')
        + '" data-view-index="' + i + '">' + this.data.images[i].create_date + '</li>';
    }
    navHtml += '</ul>';
    this.navEl.innerHTML = navHtml;
  };

  /**
   * Render gallery image view part.
   * @memberOf Gallery
   */
  Gallery.prototype.renderImageView = function () {
    var lastViewIndex = parseInt(this.viewEl.getAttribute('data-view-index'), 10);
    if (lastViewIndex !== this.data.viewIndex) {
      var viewImage = this.getViewImage();
      if (viewImage) {
        this.viewEl.innerHTML = '<div class="gallery-view-image"><img src="' + viewImage.image_url + '" /></div>';
      } else {
        this.viewEl.innerHTML = '';
      }
      var imageEl = this.viewEl.querySelector('img');
      if (imageEl) {
        var viewEl = this.viewEl;
        imageEl.style.display = 'none';
        viewEl.classList.add('loading');
        var image = new Image;
        image.onload = function () {
          imageEl.style.width = this.width + 'px';
          imageEl.style.display = '';
          viewEl.classList.remove('loading');
          image = null;
        };
        image.src = viewImage.image_url;
        this.viewEl.setAttribute('data-view-index', this.data.viewIndex);
      }
    }
  };

  /**
   * Render gallery content.
   * @memberOf Gallery
   * @override
   */
  Gallery.prototype.render = function () {
    this.renderHeader();
    this.renderImageView();
    this.renderNav();
  };

  return Gallery;
});
