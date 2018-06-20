var search_ = document.getElementById("table_content") ,
insert_ = document.getElementById("insert_content") ,
delete_ = document.getElementById("delete_content") ,
mod_name = document.getElementById("modify_name_content") ,
mod_prise = document.getElementById("modify_prise_content");

function reset()
{	
	search_.style.display = "inline-block";
	insert_.style.display = "none" ;
	delete_.style.display = "none";
	mod_name.style.display = "none";
	mod_prise.style.display = "none";
}
function insert_meal()
{	
	search_.style.display = "none";
	insert_.style.display = "inline-block" ;
	delete_.style.display = "none";
	mod_name.style.display = "none";
	mod_prise.style.display = "none";
}
function delete_meal()
{	
	search_.style.display = "none";
	insert_.style.display = "none" ;
	delete_.style.display = "inline-block";
	mod_name.style.display = "none";
	mod_prise.style.display = "none";
}
function modify_name()
{	
	search_.style.display = "none";
	insert_.style.display = "none" ;
	delete_.style.display = "none";
	mod_name.style.display = "inline-block";
	mod_prise.style.display = "none";
}
function modify_prise()
{	
	search_.style.display = "none";
	insert_.style.display = "none" ;
	delete_.style.display = "none";
	mod_name.style.display = "none";
	mod_prise.style.display = "inline-block";
}