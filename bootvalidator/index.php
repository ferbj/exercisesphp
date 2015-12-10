<html>
<head>
        <!--bootstrap css-->
        <link href="bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <!--bootstrap validator-->
        <link href="bootstrap-3.3.4-dist/css/bootstrapValidator.min.css" rel="stylesheet" type="text/css"/>
        <!-- jquery y bootstrap -->
        <script src="bootstrap-3.3.4-dist/js/jquery.min.js" type="text/javascript"></script>
        <script src="bootstrap-3.3.4-dist/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="bootstrap-3.3.4-dist/js/bootstrapValidator.min.js" type="text/javascript"></script>
<script type="text/javascript">
 $(document).ready(function () {
                var validator = $("#frmreg").bootstrapValidator({
                    message: 'Este valor no es valido',
	 feedbackIcons: {
		 valid: 'glyphicon glyphicon-ok',
		 invalid: 'glyphicon glyphicon-remove',
		 validating: 'glyphicon glyphicon-refresh'
	 },
                    fields: {
                    	nombre: {
                            message: "Usuario requerido",
                            validators: {
                                notEmpty: {
                                    message: "Por favor ingrese el usuario"
                                },
                                stringLength: {
                                    min: 5,
                                    max: 30,
                                    message: "Ingrese entre 5 y 30 caracteres"
                                }
                            }
                        },
                        email: {
                            message: "E-mail requerido",
                            validators: {
                                notEmpty: {
                                    message: "Por favor ingrese el correo"
                                },
                                stringLength: {
                                    min: 6,
                                    max: 35,
                                    message: "Ingrese entre 6 y 35 caracteres"
                                },
                                emailAddress: {
                                    message: "Correo incorrecto"
                                }
                            }
                        },
                        sexo: {
                            message: "Sexo requerido",
                            validators: {
                                notEmpty: {
                                    message: "Por favor seleccione una opcion"
                                }
                                
                            }
                        },
                        
                        tipo: {
                            validators: {
                                greaterThan: {
                                    value:1,
                                    message: "Seleccione un tipo"
                                }
                            }
                        },
                        descripcion:{
                            validators:{
                                notEmpty:{
                                message:"Por favor ingrese una descripcion"
                            },
                           stringLength:{
                                max:2000,
                                message:"Ingrese maximo de 2000 caracteres" 
                           } 
                        }
                    }
                }
            }

                );
            }
            );

</script>
</head>
<body>
		<div  class="container">
            <div class="panel panel-default">
                <div class="panel-heading">Registro</div>
                <div class="panel-body">
					<form id="frmreg" method="post" name="frmreg" class="form-horizontal" action="procesa.php" enctype="multipart/form-data">
					  <div class="form-group">
                        <label class="col-md-2" for="text">Nombres:</label>
                        <div class="col-md-4">
                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                        </div>
                        </div>
                        <div class="form-group">
						<label class="col-md-2" for="text">Email: </label>
						<div class="col-md-4">
						<input type="text" class="form-control" id="email" name="email" required>
						</div>
						</div>
						
                        <div class="form-group">
                        <label class="col-md-2" for="radio">Sexo:</label>
                        <div class="col-md-1">
                        <input type="radio" class="radio" id="sexo" name="sexo[]" value="Masculino" required>Masculino
                        </div>
                        <div class="col-md-1">
                        <input type="radio" class="radio" id="sexo" name="sexo[]" value="Femenino" required>Femenino
                        </div>   
                        </div>
						
						<div class="form-group">
						<label class="col-md-2" for="emails">
						Tipo Formulario:</label>
						<div class="col-md-4">
						<select id="tipo" name="tipo" class="form-control">
							<option value="" selected>Seleccione una opcion</option>
                            <option value="1">Reclamo</option>
							<option value="2">Abuso</option>
							<option value="3">Spam</option>
                            <option value="4">Felicitaciones</option>
                            <option value="5">Saber Mas</option>
						</select>
						</div>
						</div>

                        <div class="form-group">
                        <label class="col-md-2" for "text">
                        Descripcion:</label>
                        <div class="col-md-4">
                        <textarea cols="40" rows="10" id="descripcion" name="descripcion" required>
                        </textarea>
                        </div>
                        </div>
                        <div class="form-group">
                        <label class="col-md-2" for "text">
                        Archivo:</label>
                        <div class="col-md-4">
                        <input type="file"  id="archivo" name="archivo" accept="image/*;text/*">
                        
                        </div>
                        </div>
						 <input type="submit" class="btn btn-success" value="Enviar">
					</form>
				</div>
			</div>
		</div>
</body>
</html>