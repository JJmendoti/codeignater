    
function validate() {

	let document = document.getElementById('document').value;

	if (document === "") {
		alert("Para continuar Debe llenar el campo Document");
		return false;
	} else if (isNaN(document)) {
		alert("Para continuar El campo  Document debe ser numerico");
	}
    
}

	// function Confirm_Ship() {

	//     let date = document.getElementById("date").value;
	//     let documentpatient = document.getElementById("documentpatient").value;

	//     if (date === "") {
	//         alert("Para continuar Debe llenar el campo  DATE");
	//         return false;
	//     } else if (document_patient  === "") {

	//         alert("Para continuar Debe llenar el campo  DOCUMENT");
	//         return false;
	//     } else if (isNaN(document_patient )) {

	//         alert("Para continuar El campo Document debe ser numerico");
	//         return false;
	//     }

	// }


	// function AlertDelet() {

	//     let action = confirm("¡IMPORNTANTE! ¿Estás seguro de eliminar el Registro?");

	//     if (action == true) {

	//         alert("El Registro se ha Eliminado Satisfactoriamente");
	//         return true;
	//     } else {

	//         alert("Has cancelado la acción de Eliminar!");
	//         return false;
	//     }
	// }
