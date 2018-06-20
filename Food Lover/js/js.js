var orderIndex = -1;
var orders = [];
var order_ids = [];
var total = 0 ;


function addToOrder_id(  id   )
{
	//orders[++orderIndex] = order_id;
	orders.push( id );
	order_ids.push( id );
}

function addToOrder(  name   )
{
	orders.push( name );
}

function addToOrder_prise(  price   )
{
	//orders[++orderIndex] = order_id;
	orders.push( price );
	total += price ;
	document.getElementById("order").innerHTML += "<tr>" + "<td> " + orders[++orderIndex] + "</td>" + "<td> " + orders[++orderIndex] + "</td>" + "<td> " + orders[++orderIndex] + " $ </td>"+ "</tr>";
}

function send_orders(){
	document.getElementById("user_orders").value = order_ids;
	document.getElementById("total_price").value = total;
}
function total_price(){
	document.getElementById("total_price").value = total;
	alert(document.getElementById("total_price").value);
}

/******************************************************************************************************************/
function changeTitle( x, y){
	document.getElementById( x ).innerHTML = document.getElementById( y ).innerHTML;
}

var homepage = document.getElementById("homepage") ,
breakfast = document.getElementById("health-breakFast") ,
entree = document.getElementById("health-entree") ,
salads = document.getElementById("health-salads") ,
rice = document.getElementById("health-rice") ,
pasta = document.getElementById("health-pasta"),
pizza = document.getElementById("health-pizza"),
desserts = document.getElementById("health-desserts"),
drinks = document.getElementById("health-drinks");

function showBreakFast()
{
	changeTitle("ourproducts" , "breakfast");
	
	homepage.style.display = "none";
	breakfast.style.display = "block" ;
	entree.style.display = "none";
	salads.style.display = "none";
	rice.style.display = "none";
	pasta.style.display = "none";
	pizza.style.display = "none";
	desserts.style.display = "none";
	drinks.style.display = "none";
}
function showEntree()
{
	changeTitle("ourproducts" , "entree");
	
	homepage.style.display = "none";
	breakfast.style.display = "none" ;
	entree.style.display = "block";
	salads.style.display = "none";
	rice.style.display = "none";
	pasta.style.display = "none";
	pizza.style.display = "none";
	desserts.style.display = "none";
	drinks.style.display = "none";
}
function showSalads()
{
	changeTitle("ourproducts" , "salads");
	
	homepage.style.display = "none";
	breakfast.style.display = "none" ;
	entree.style.display = "none";
	salads.style.display = "block";
	rice.style.display = "none";
	pasta.style.display = "none";
	pizza.style.display = "none";
	desserts.style.display = "none";
	drinks.style.display = "none";
}
function showRice()
{
	changeTitle("ourproducts" , "rice");
	
	homepage.style.display = "none";
	breakfast.style.display = "none" ;
	entree.style.display = "none";
	salads.style.display = "none";
	rice.style.display = "block";
	pasta.style.display = "none";
	pizza.style.display = "none";
	desserts.style.display = "none";
	drinks.style.display = "none";
}
function showPasta()
{
	changeTitle("ourproducts" , "pasta");
	
	homepage.style.display = "none";
	breakfast.style.display = "none" ;
	entree.style.display = "none";
	salads.style.display = "none";
	rice.style.display = "none";
	pasta.style.display = "block";
	pizza.style.display = "none";
	desserts.style.display = "none";
	drinks.style.display = "none";
}
function showPizza()
{
	changeTitle("ourproducts" , "pizza");
	
	homepage.style.display = "none";
	breakfast.style.display = "none" ;
	entree.style.display = "none";
	salads.style.display = "none";
	rice.style.display = "none";
	pasta.style.display = "none";
	pizza.style.display = "block";
	desserts.style.display = "none";
	drinks.style.display = "none";
}
function showDesserts()
{
	changeTitle("ourproducts" , "desserts");
	
	homepage.style.display = "none";
	breakfast.style.display = "none" ;
	entree.style.display = "none";
	salads.style.display = "none";
	rice.style.display = "none";
	pasta.style.display = "none";
	pizza.style.display = "none";
	desserts.style.display = "block";
	drinks.style.display = "none";
}
function showDrinks()
{
	changeTitle("ourproducts" , "drinks");
	
	homepage.style.display = "none";
	breakfast.style.display = "none" ;
	entree.style.display = "none";
	salads.style.display = "none";
	rice.style.display = "none";
	pasta.style.display = "none";
	pizza.style.display = "none";
	desserts.style.display = "none";
	drinks.style.display = "block";
}

/*************************************************************************************************/

function save_page(){
	document.getElementById("c1").style.display = "none";
	document.getElementById("c2").style.display = "none";
	document.getElementById("c3").style.display = "block";
	document.getElementById("continue").style.display = "none";
	document.getElementById("order").innerHTML += "<tr>" + "<td> " + "Total" + "</td>" + "<td> " + "=" + "</td>" + "<td> " + total + " $ </td>"+ "</tr>";

}
function back_posts(){
	document.getElementById("c1").style.display = "block";
	document.getElementById("c2").style.display = "block";
	document.getElementById("c3").style.display = "none";
	document.getElementById("continue").style.display = "block";
}

