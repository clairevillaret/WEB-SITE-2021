function showDiscussion(cat_id){
		 var x = document.getElementById("cat_discussions_" + cat_id);
		 if (x.style.display === "none"){
		 	x.style.display = "block";
		 }else{
		 	x. style.display = "none";
		 }
	}

function startDiscussion(discuss_id){
		 var x = document.getElementById("new_discussion_" + discuss_id);
		 var y = document.getElementById("cancel_button_" + discuss_id);
		 var z = document.getElementById("post_button_" + discuss_id);
	
		 if (x.style.display === "none" && z.style.display === "none"){
		 	x.style.display = "block";
		 	z.style.display = "block";
		 	y.innerHTML = "Cancel";
		 	z.innerHTML = "Post";
		 
		 }else{
		 	x.style.display = "none";
		 	y.innerHTML = "Start Discussion";
		 	z.style.display = "none";
		 }
	}

function popup(popup_id){
	var x = document.getElementById("popup_id_" + popup_id);

	if (x.style.display === "none"){
		x.style.display = "block";
	}else{
		x.style.display = "none";
	}

	window.onclick = function(event){
		if (event.target == x){
			x.style.display = "none";
		}
	}
}
