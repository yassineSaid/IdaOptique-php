$(document).ready(function(){load_unseen_notification();});
function load_unseen_notification(view = '')
{
 $.ajax({
  url:"fetchNotification.php",
  method:"POST",
  data:{view:view},
  dataType:"json",
  success:function(data)
  {
   $('#list-notifications').html(data.notification);
   $('.noti-dot').html(data.nombre);
  }
 });
}
var myVar = setInterval(load_unseen_notification, 5000);
function updateNotification(view = '')
{
	$.ajax({
  url:"updateNotification.php",
  method:"POST",
  data:{view:view},
  dataType:"json",
  success:function(data)
  {
   $('.noti-dot').html("");
  }
 });
}
$('.right-bar-toggle').click(function()
{
	setTimeout(function(){updateNotification();}, 3000);
});