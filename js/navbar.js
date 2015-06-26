console.log("printme!");

jQuery(document).ready(function($) {
	$("#academiaA").hide();
	$("#OSociais").hide();
	$("#seccoesD").hide();
	$("#ApoioEstudanteA").hide();

	//console.log("pronto!");

	jQuery("#academia").click(function($) { 
	    // assumes element with id='button'
	    console.log("disparado academia!");
	    jQuery("#academiaA").toggle("slow", function() {});
	    jQuery("#OSociais").hide();
	    jQuery("#seccoesD").hide();

	});

	jQuery("#ApoioEstudante").click(function($) { 
	    // assumes element with id='button'
	    console.log("disparado apoio ao estudante!");
	    jQuery("#ApoioEstudanteA").toggle("slow", function() {});
	    jQuery("#OSociais").hide();
	    jQuery("#seccoesD").hide();
	    jQuery("#academiaA").hide();

	});

	jQuery("#sociais").click(function($) { 
	    // assumes element with id='button'
	    console.log("disparado orgãos sociais!");
	    jQuery("#OSociais").toggle("slow", function() {});
	    jQuery("#academiaA").hide();
	    jQuery("#seccoesD").hide();
	    jQuery("#ApoioEstudanteA").hide();
	});
	 jQuery("#cultura").click(function($) { 
	    // assumes element with id='button'
	    console.log("disparado seccoes culturais!");
	    jQuery("#seccoesD").toggle("slow", function() {});
	    jQuery("#academiaA").hide();
	    jQuery("#OSociais").hide();
	    jQuery("#ApoioEstudanteA").hide();
	});

});