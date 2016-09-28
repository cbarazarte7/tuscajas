<!DOCTYPE html>
<html>
	@include('welcome')
<body>
<script>
	swal({   
		title: 'tu codigo ha sido aceptado dale click en OK para escoger un Kit', 
		text: "<center><a href='http://tuscajasparatrasteos.com/' class='btn btn-success btn-lg'>OK</a></center>",

		type: 'success', 
		showConfirmButton: false
		}
		// ,
  //     function(){
  //       window.location.href = '../welcome';
  //     }
      );

</script>

</body>
</html>