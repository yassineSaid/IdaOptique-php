$(document).ready(function(){load_unseen_notification()

// updating the view with notifications using ajax



load_unseen_notification();}
);
function load_unseen_notification(view = '')
{

 $.ajax({

  url:"updateNotification.php",
  method:"POST",
  data:{view:view},
  dataType:"json",
  success:function(data)

  {

   $('#list-notifications').html(data.notification);
   $('.noti-dot').html(data.nombre);
   /*if(data.unseen_notification > 0)
   {
    $('.count').html(data.unseen_notification);
   }*/

  }

 });

}
var myVar = setInterval(load_unseen_notification, 1000);