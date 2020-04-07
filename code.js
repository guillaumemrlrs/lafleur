var requete = null;
	function creerRequete()
	{
		try
		{
			requete = new XMLHttpRequest();
		} 
		catch (essaimicrosoft)
		{
			try
			{
				requete = new ActiveXObject("Msxm12.XMLHTTP");
			} 
			catch (autremicrosoft)
			{
				try
				{
					requete = new ActiveXObject("Microsoft.XMLHTTP");
				} 
				catch (echec)
				{
					requete = null;
				}
			}
		}
		if (requete == null)
		alert ("impossible de créer l'objet requête");
	}
	
function getProduit() 
{
     creerRequete();
     var categ = document.getElementById("categorie").value
     var url = "getProduit-ajax.php?categ="+categ;
     requete.open("GET", url, true);
     requete.onreadystatechange = actualiserPage;
     requete.send(null);
  }
  function actualiserPage()
  {	
     var i,n,champs;
     if (requete.readyState == 4) {
         effacerRes();
         var div = document.createElement("DIV");
         var champs = JSON.parse(requete.responseText);
         n = champs.length;
         i = 0;
         while (i < n){
 designation = champs[i].designation;
         prix = champs[i].prix;
         var divpdt = document.createElement("DIV");
 var nouveauNoeud = document.createTextNode(designation+" "+prix);
 divpdt.appendChild(nouveauNoeud);
  i++;
         div.appendChild(divpdt);
     }
     pdt = document.getElementById("produit");
     pdt.appendChild(div);
 }	
 }
 
function effacerRes() {
    div = document.getElementById("produit");
	div.removeChild(div.firstChild);
}