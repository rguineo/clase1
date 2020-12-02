function mostrar_mensaje() {
	
	var nombre = $('#nombre').val()
	var apellido = $('#apellido').val()

	alert("Hola "+nombre+" "+apellido+", es un gusto tenerte por aqui")
	console.log("Hola "+nombre+" "+apellido+", es un gusto tenerte por aqui")
}

function sumar(){

	var n1 = $('#num1').val()
	var n2 = $('#num2').val()

 	if(n1 == 0){
 		alert('Ingrese el primer numero')
 	} else if(n2 == 0){
		alert('Ingrese el segundo numero')
 	} else {
	 	var resultado = parseInt(n1) + parseInt(n2)
		alert("resultado de la suma: "+resultado)		
 	}
}

function restar(){

	var n1 = $('#num1').val()
	var n2 = $('#num2').val()

 	if(n1 == 0){
 		alert('Ingrese el primer numero')
 	} else if(n2 == 0){
		alert('Ingrese el segundo numero')
 	} else {
	 	var resultado = parseInt(n1) - parseInt(n2)
		alert("resultado de la resta: "+resultado)		
 	}
}

function multiplicar(){

	var n1 = $('#num1').val()
	var n2 = $('#num2').val()

 	if(n1 == 0){
 		alert('Ingrese el primer numero')
 	} else if(n2 == 0){
		alert('Ingrese el segundo numero')
 	} else {
	 	var resultado = parseInt(n1) * parseInt(n2)
		alert("resultado de la multiplicacion: "+resultado)		
 	}
}

function dividir(){

	var n1 = $('#num1').val()
	var n2 = $('#num2').val()

 	if(n1 == 0){
 		alert('Ingrese el primer numero')
 	} else if(n2 == 0){
		alert('Ingrese el segundo numero')
 	} else {
 		if(n2 != 0){
 			var resultado = parseInt(n1) / parseInt(n2)
			alert("resultado de la division: "+resultado)			
 		} else {
 			alert("Error, division por 0")
 		}

 	}
}