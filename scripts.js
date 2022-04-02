/* Place your JavaScript in this file */
const T = [];

function calculer(){
	x = parseInt(document.getElementById("numero").value);
    T.push(x);
	document.getElementById("liste").innerHTML = "la liste des entiers : " + T;
    let s=0;
    let min=T[0];
    let max=T[0];
    for(let i=0; i<T.length; i++)
    {
    	s+=T[i];
        if(T[i]<min)
        	min = T[i]
        else if (T[i] > max)
        	max=T[i]
    }
    document.getElementById("somme").innerHTML = "la somme des entiers est : " + s;
    document.getElementById("min").innerHTML = "min = " + min;
    document.getElementById("max").innerHTML = "max = " + max;
}
