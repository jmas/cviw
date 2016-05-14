/**
 * @namespace misc
 * @author Alexander Maslakov <jmas.ukraine@gmail.com>
 * @license MIT
 */
define({
  /**
   * Update discuss component with new page.
   * @memberOf misc
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
    try{
      DISQUS.reset({
        reload: true,
        config: function () {
          this.page.identifier = identifier;
          this.page.url = url;
          this.page.title = title;
        }
      });
    } catch(e){ }
  },

  /**
   * Update browser history URL.
   * @memberOf misc
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
});
