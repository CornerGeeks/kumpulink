(function(){var div=document.createElement("div");
var url='http://192.168.43.133/kumpulink/submit.php'
div.setAttribute("style","position:fixed;top:10px;right:10px;z-index:100;width:200px;border:1px solid #000;font:8pt Arial;padding:10px;border-radius:10px;box-shadow:0px 0px 10px rgba(0,0,0,0.5);background:#666");
div.innerHTML+='<form method="get" action="'+url+'"><b style="color:#FFF">Add Link</b><br/><input type="text" name="title" placeholder="title" style="border:1px solid #000;width:100%"/><textarea name="description" placeholder="description" rows="5" style="border:1px solid #000;width:100%"></textarea><input name="tags" type="text" placeholder="Add tags, seperated by commas" style="border:1px solid #000;width:100%"/><input type="hidden" name="uri"/><button type="submit" style="width:100%">Add link</button></form>';
var inp_title=div.getElementsByTagName("input")[0],inp_description=div.getElementsByTagName("textarea")[0],inp_tags=div.getElementsByTagName("input")[1],inp_uri=div.getElementsByTagName("input")[2];
inp_uri.value=document.location.href;inp_title.value=document.title;
inp_description.value=(function get_description(){
	var metas=document.getElementsByTagName("meta");
	for(var i=0;i<metas.length;i++){
		if(metas[i].getAttribute("name")=="description" || metas[i].getAttribute("name")=="og:description" ) return metas[i].getAttribute("content");
	}
	return document.body.innerText.substr(0,200).replace(/[\r\n]/g," ");
})();
document.body.appendChild(div)})()

/*

javascript:(function(){var e=document.createElement("div");var t="http://192.168.43.133/kumpulink/test.php";e.setAttribute("style","position:fixed;top:10px;right:10px;z-index:100;width:200px;border:1px solid #000;font:8pt Arial;padding:10px;border-radius:10px;box-shadow:0px 0px 10px rgba(0,0,0,0.5);background:#666");e.innerHTML+='<form method="get" action="'+t+'"><b style="color:#FFF">Add Link</b><br/><input type="text" name="title" placeholder="title" style="border:1px solid #000;width:100%"/><textarea name="description" placeholder="description" rows="5" style="border:1px solid #000;width:100%"></textarea><input name="tags" type="text" placeholder="Add tags, seperated by commas" style="border:1px solid #000;width:100%"/><input type="hidden" name="uri"/><button type="submit" style="width:100%">Add link</button></form>';var n=e.getElementsByTagName("input")[0],r=e.getElementsByTagName("textarea")[0],i=e.getElementsByTagName("input")[1],s=e.getElementsByTagName("input")[2];s.value=document.location.href;n.value=document.title;r.value=function(){var t=document.getElementsByTagName("meta");for(var n=0;n<t.length;n++){if(t[n].getAttribute("name")=="description"||t[n].getAttribute("name")=="og:description")return t[n].getAttribute("content")}return document.body.innerText.substr(0,200).replace(/[\r\n]/g," ")}();document.body.appendChild(e)})()

*/
