document.addEventListener('DOMContentLoaded', function () {
  if (!Notification) {
    alert('Desktop notifications not available in your browser. Try Chromium.'); 
    return;
  }
  if (Notification.permission !== "granted")
    Notification.requestPermission();
});

function minhaNotificacao(){
  if (Notification.permission !== "granted")
    {
    Notification.requestPermission();
	}
  else
      {
      var notification = new Notification('Ações Stonks', {
      icon: 'https://image.winudf.com/v2/image1/dWsuY28ubW9kdWxhLnN0b25rc19pY29uXzE1NjE3MjY3NTRfMDAw/icon.png?w=170&fakeurl=1',
      body: "Ola, a sua ação chegou no valor marcado",
    });
	  notification.onclick = function(){
	     window.open('site.html');
	                                   };
	  } 

                           }