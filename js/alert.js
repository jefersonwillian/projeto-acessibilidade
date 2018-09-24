function VagaCandidatar() {
	swal({
		title: "Parábens", 
		text: "Sua candidatura foi realizada com sucesso",
		icon: "success",
		buttons: "Ok",
		showCancelButton: false,
		closeOnConfirm: false,
	})
	.then((willDelete) => {
		if (willDelete) {
			window.open('index.php', '_self');
		} else {
			window.open('index.php', '_self');
		}
	});
}

function Contato() {
	swal({
		title: "Mensagem enviada com sucesso!", 
		text: "Iremos entrar em contato o mais rápido possível. Muito Obrigado!",
		icon: "success",
		buttons: "Ok",
		showCancelButton: false,
		closeOnConfirm: false,
	})
	.then((AwillDelete) => {
		if (AwillDelete) {
			window.open('index.php', '_self');
		} else {
			window.open('index.php', '_self');
		}
	});
}

function finalizar() {
	swal({
		title: "Cadastro realizado com sucesso", 
		icon: "success",
		buttons: "Ok",
		showCancelButton: false,
		closeOnConfirm: false,
	})
	.then((AwillDelete) => {
		if (AwillDelete) {
			window.open('index.php', '_self');
		} else {
			window.open('index.php', '_self');
		}
	});
}


