function loadRSS(url, datasource) {
    fetch('https://api.rss2json.com/v1/api.json?rss_url='+encodeURIComponent(url))
    .then(function(response) {
      if (response.ok) {
        return response.json();
      }
      throw new Error('Could not fetch rss');
    })
    .then(function(data) {
      editor.addDataSource(datasource, {
        load: data.items,
        save: function(stash) {
          // called just before saving the page data in SimplyEdit
          // stash contains the current content of the list
        },
        get: function() {
          // returns the data you would like to save in the data.json
          return url;
        },
        applyOnce: true // workaround to prevent the datalist from 
        // being applied multiple times when dragging etc.
      });
    });
  }
  
  loadRSS('https://www.nasa.gov/rss/dyn/breaking_news.rss', 'newsList');