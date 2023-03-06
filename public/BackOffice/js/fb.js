  window.fbAsyncInit = function() {
    FB.init({
      appId            : '192528646733391',
      autoLogAppEvents : true,
      xfbml            : true,
      version          : 'v16.0'
    });
  };

  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v16.0&appId={{ 192528646733391 }}&autoLogAppEvents=1";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
  
  function shareOnFacebook(title, description, image_url) {
  
  
  FB.ui({
    method: 'share_open_graph',
    action_type: 'og.shares',
    action_properties: JSON.stringify({
      object: {
        'og:url': 'https://127.0.0.1:8000/event',
        'og:title': 'event',
        'og:description': 'Description of my event',
        'og:image': image_url
      }
    })
  }, function(response) {
    if (response && !response.error_message) {
      console.log('Post was published.');
    } else {
      console.log('Post was not published.');
    }
  });
}