$(document).ready(function () {

	
	// activar wow plugin
	new WOW().init();

	//*******************************************************************************************************
    //   MODAL | TOOLTIPS | POPOVERS
    //*******************************************************************************************************


    // btn abrir modal
    $('#btn-college-modal').click(function () {
        $("#participar").addClass("college-modal-mostrar");
    });

    // btn cerrar modal
    $('#btn-close-college-modal').click(function () {
        $("#participar").removeClass("college-modal-mostrar");
    });



    // btn abrir modal jugar
    $('#btn-college-modal-jugar').click(function () {
        $("#participar").addClass("college-modal-jugar-mostrar");
    });

    // btn cerrar modal jugar
    $('#btn-close-college-modal-jugar').click(function () {
        $("#participar").removeClass("college-modal-jugar-mostrar");
    });



    // btn abrir modal instagram
    $('#btn-college-modal-instagram').click(function () {
        $("#participar").addClass("college-modal-instagram-mostrar");
    });

    // btn cerrar modal instagram
    $('#btn-close-college-modal-instagram').click(function () {
        $("#participar").removeClass("college-modal-instagram-mostrar");
    });



});