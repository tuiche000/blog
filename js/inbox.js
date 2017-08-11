var checkAll = document.getElementById('checkAll');
var checkInput = checkAll.getElementsByTagName('input')[0];
var table = document.getElementById('table_chat');
var check = table.getElementsByTagName('input');

checkAll.onclick = function(){
  if(checkInput.checked === true){
    for(let i=0; i<check.length; i++){
      check[i].checked = true;
    }
  }else {
    for(let i=0; i<check.length; i++){
      check[i].checked = false;
    }
  }

};

var chat_delete = document.getElementById('chat_delete');
function ajax()
{
  var strTxt = null;
  var txt = "";
  var get = [];
  for(let i=0;i<check.length;i++){
    if(check[i].checked === true){
      get.push(check[i].value);
    }
  }
  for(let i in get){
    txt += get[i] + ",";
  }
  strTxt = txt.substring(0,(txt.length-1));


  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function()
  {
    if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
      alert("删除ok" + xmlhttp.responseText);
      window.location.reload();
    }
  }
  console.log(strTxt);
  xmlhttp.open("POST","../app/chat_delete.php",true);
  xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
  xmlhttp.send("strTxt="+strTxt);
}
chat_delete.onclick = function(){
  ajax();
}