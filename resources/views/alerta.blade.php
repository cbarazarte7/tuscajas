<!DOCTYPE html>
<html>
	@include('template.frontend.partials.head')
<body>
<script>
	swal({   
			title: "Gracias por registrarte! Revisa tu correo",   
			text: "<center><a href='./dashboard/proveedor/cotizar' class='btn btn-success btn-lg'>OK</a></center>",
			type: 'success',   
			html: true,
			showConfirmButton: false
		});
</script>

</body>
</html>