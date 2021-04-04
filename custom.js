$(document).ready(function(){
  function showWindow(){
    $('#main').show();
  //stop scroll
$('html body').css('overflow','hidden');

//auto hide
// setTimeout(hideWindow,5000);
  }
  //showWindow()
  function hideWindow(){
    $('#main').hide();
  //on scroll
$('html body').css('overflow','scroll');
  }
  //hiddenwindow
  //now call function automatically after some time.
  //auto open after 1s
  setTimeout(showWindow,1000);

  // close after onclick
  $('#close-btn').click(function(){
    hideWindow();
  });
});
//<script>
// function changeText(){
//   document.getElementById("").innerHTML=document.getElementById("").innerHTML;
// };
// style-> display:none;
// onclick=changeText()
