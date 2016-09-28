
public function index()
{
return View::make('HomeController.index');
}

public function contacto()
{
$mensaje =nell;
return View::make('HomeController.contacto',array ('mensaje => $mensaje'));
}