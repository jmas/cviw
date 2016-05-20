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
     * @param inputText
     * @returns {String}
     */
    linkify: function (inputText) {
      var replacedText, replacePattern1, replacePattern2, replacePattern3;

      // URLs starting with http://, https://, or ftp://
      replacePattern1 = /(\b(https?|ftp):\/\/[-A-Z0-9+&@#\/%?=~_|!:,.;]*[-A-Z0-9+&@#\/%=~_|])/gim;
      replacedText = inputText.replace(replacePattern1, '<a href="$1" target="_blank">$1</a>');

      // URLs starting with "www." (without // before it, or it'd re-link the ones done above).
      replacePattern2 = /(^|[^\/])(www\.[\S]+(\b|$))/gim;
      replacedText = replacedText.replace(replacePattern2, '$1<a href="http://$2" target="_blank">$2</a>');

      // Change email addresses to mailto:: links.
      replacePattern3 = /(([a-zA-Z0-9\-\_\.])+@[a-zA-Z\_]+?(\.[a-zA-Z]{2,6})+)/gim;
      replacedText = replacedText.replace(replacePattern3, '<a href="mailto:$1">$1</a>');

      return replacedText;
    },

    /**
     * Update discuss component with new page.
     * @memberOf utils
     * @param {String} identifier
     * @param {String} url
     * @param {String} title
     */
    updateDisqus: function (identifier, url, title) {
      var that = this;
      if (typeof DISQUS === 'undefined') {
        setTimeout(function(){
          that.updateDisqus(identifier, url, title);
        }, 3000);
        return;
      }
      try {
        window.requestAnimationFrame(function () {
          DISQUS.reset({
            reload: true,
            config: function () {
              this.page.identifier = identifier;
              this.page.url = url;
              this.page.title = title;
            }
          });
        });
      } catch(e){ }
    },

    /**
     * Update browser history URL.
     * @memberOf utils
     * @param {Object} data
     * @param {String} title
     * @param {String} url
     */
    updateUrl: function (data, title, url) {
      try {
        window.history.pushState(data, title, url);
      } catch (e) {
        window.location.replace('#' + url);
      }
    }
  };
});
