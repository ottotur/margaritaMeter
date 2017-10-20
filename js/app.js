$(document).foundation();
function init(){
  FB.getLoginStatus(function(response) {

  if (response.status === 'connected') {
  	document.getElementById("formi").style.opacity = 1;
    FB.api('/me', function(response) {
    document.getElementById("name").value = response.name;
    document.getElementById("fb-id").value = response.id;
});
  }
});
}

 window.fbAsyncInit = function() {
      FB.init({
        appId      : '502679143442562',
        xfbml      : true,
        version    : 'v2.10'
      });
console.log("data-auto-logout-link");
      init();
    };
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/fi_FI/sdk.js#xfbml=1&version=v2.10&appId=502679143442562";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

$("#idForm").submit(function(e) {
	console.log( $("#idForm").serialize());

    var url = "save.php"; // the script where you handle the form input.

    $.ajax({
           type: "POST",
           url: url,
           data: $("#idForm").serialize(), // serializes the form's elements.
          success: function (data) {
                console.log('Submission was successful.');
                console.log(data);
            },
            error: function (data) {
                console.log('An error occurred.');
                console.log(data);
            },

         });

    e.preventDefault(); // avoid to execute the actual submit of the form.
});
