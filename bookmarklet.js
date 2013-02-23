(function(){var div=document.createElement("div");
div.setAttribute("style","position:fixed;top:10px;right:10px;z-index:100;width:200px;border:1px solid #000;font:8pt Arial;padding:10px;border-radius:10px;box-shadow:0px 0px 10px rgba(0,0,0,0.5);background:#666");
div.innerHTML+='<form method="get" action="http://192.168.2.134/kumpulink/test.php"><b style="color:#FFF">Add Link</b><br/><input type="text" name="title" placeholder="title" style="border:1px solid #000;width:100%"/><textarea name="description" placeholder="description" rows="5" style="border:1px solid #000;width:100%"></textarea><input name="tags" type="text" placeholder="Add tags, seperated by commas" style="border:1px solid #000;width:100%"/><button type="submit" style="width:100%">Add link</button></form>';
var inp_title=div.getElementsByTagName("input")[0],inp_description=div.getElementsByTagName("textarea")[0],inp_tags=div.getElementsByTagName("input")[1];
inp_title.value=document.title;
inp_description.value=(function get_description(){
	var metas=document.getElementsByTagName("meta");
	for(var i=0;i<metas.length;i++){
		if(metas[i].getAttribute("name")=="description" || metas[i].getAttribute("name")=="og:description" ) return metas[i].getAttribute("content");
	}
	return document.body.innerText.substr(0,200).replace(/[\r\n]/g," ");
})();
document.body.appendChild(div)})()
