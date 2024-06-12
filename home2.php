<?php
session_start();
if(!isset($_SESSION["idus"]) || $_SESSION["idus"]==null){
	print "<script>alert(\"Acceso invalido!\");window.location='login.php';</script>";
}

?>
<html>


	<head>
	
	<?php include "php/navbar2.php"; ?>
     <title>RELEVAMIENTO INFORMATICO</title>
    <link rel="Shortcut Icon" href="favicon.ico" type="image/x-icon" />
    <!-- bootstrap Lib -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- datatable lib -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="DataTables-1.10.21/js/jquery.dataTables.min.js"></script>
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    

</head>
<body>
<div class="container">
    <br>
    <br>
     <h1>RELEVAMIENTO INFORMATICO (REGISTRADOS/ENVIADOS)</h1>
               <label>LUGAR / ESTABLECMIENTO:</label>
                    <input type="text" name="lugar" id="lugar" class="form-control" value = "<?php echo $_SESSION['lugar']; ?>" disabled="disabled"/><br>
                <div align="right">
                <button type="button" id="add_button" data-toggle="modal" data-target="#userModal" class="btn btn-success"><span class="glyphicon glyphicon-hand-right"></span>  Registrar Relevamiento</button>
                </div>
                <br>
               <table id="course_table" class="table table-striped">  
                    <thead bgcolor="#8acb81">
                        <tr class="table-primary">
                         
                        <th width="10%">ID</th>    
                        <th width="40%">CARGO</th>
                            <th width="15%">PROCESADOR</th>
                           <th width="20%">MEMORIA</th>  
                           <th width="15%">DISCO</th>
                           <th width="20%">S O</th>
                           <th width="10%">OFIMATICA</th>
                           <th width="20%">EXPLORADOR</th>
                           <th width="30%">COMPATIBLE</th>
                           <th scope="col" width="5%">Editar</th>
                           
                        </tr>
                    </thead>
                </table>

                
</div>          
</body>
</html>

<div id="userModal" class="modal fade">
    <div class="modal-dialog">
        <form method="post" id="course_form" enctype="multipart/form-data">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">X</button>
                    <h4 class="modal-title">Adicionar Relevamiento</h4>
                </div>
                <div class="modal-body">
                <div class="form-group">
                <label>LUGAR DE TRABAJO:</label>
                    <input type="text" name="lugar" id="lugar" class="form-control" value = "<?php echo $_SESSION['lugar']; ?>"/>
                
                
                    <div class="form-group">
                        <label for="detalle">CARGO (Personal que esta asignado el hardware):</label>
                        <textarea class="form-control" name="cargo" id="cargo" rows="2" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">TIPO EQUIPO:</label>
                        <select class="form-control" name="tipo" id="tipo">
                        <option>>>SELECCIONE TIPO EQUIPO<<</option>
                        <option>PC ESCRITORIO</option>
                        <option>PC PORTATIL</option>
                        <option>TABLET</option>
                        </select>
                    </div>

                    <label for="detalle">MARCA (Marca de la CPU):</label>
                        <textarea class="form-control" name="marca" id="marca" rows="1" required></textarea>
                    </div>
                        
                    <label for="detalle">TIPO PROCESADOR:</label>
                        <textarea class="form-control" name="procesador" id="procesador" rows="1" required></textarea>
                    
                    
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">MEMORIA:</label>
                        <select class="form-control" name="memoria" id="memoria">
                        <option>>>SELECCIONE MEMORIA<<</option>
                        <option>RAM 512 MB</option>
                        <option>RAM 1 GB</option>
                        <option>RAM 2 GB</option>
                        <option>RAM 4 GB</option>
                        <option>RAM 8 GB</option>
                        <option>RAM 16 GB</option>
                        <option>RAM 32 GB</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">DISCO DURO:</label>
                        <select class="form-control" name="disco" id="disco">
                        <option>>>SELECCIONE DISCO<<</option>
                        <option>256 GB</option>
                        <option>512 GB</option>
                        <option>1 TB</option>
                        <option>2 TB</option>
                        </select>
                    </div>
                
                    
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">COMPATIBILIDAD (determinar si es compatible con software Libre):</label>
                        <select class="form-control" name="compatibilidad" id="compatibilidad">
                        <option>>>SELECCIONE OPCION<<</option>
                        <option>SI</option>
                        <option>NO</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlSelect1">SISTEMA OPERATIVO (Utilizado):</label>
                        <select class="form-control" name="sistemaop" id="sistemaop">
                        <option>>>SELECCIONE SISTEMA OPERATIVO<<</option>
                        <option>WINDOWS XP</option>
                        <option>WINDOWS 7</option>
                        <option>WINDOWS 8</option>
                        <option>WINDOWS 10</option>
                        <option>WINDOWS 11</option>
                        <option>LINUX</option>
                        <option>ANDRIOD</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlSelect1">OFIMATICA (Paquete Utilizado):</label>
                        <select class="form-control" name="ofimatica" id="ofimatica">
                        <option>>>SELECCIONE PAQUETE<<</option>
                        <option>MICROSOFT OFFICE</option>
                        <option>OPEN OFFICE</option>
                        <option>OTROS</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="detalle">CORREO USUARIO (Mancionar si existe):</label>
                        <textarea class="form-control" name="correo" id="correo" rows="1"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlSelect1">EXPLORADOR (Mas utilizado):</label>
                        <select class="form-control" name="explorador" id="explorador">
                        <option>>>SELECCIONE SISTEMA OPERATIVO<<</option>
                        <option>Microsoft Edge</option>
                        <option>Google Chrome</option>
                        <option>Mozilla Firefox</option>
                        <option>Safari</option>
                        <option>Brave</option>
                        <option>LINUX</option>
                        <option>ANDRIOD</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="detalle">OTROS (aplicaciones necesarias para el operador del equipo):</label>
                        <textarea class="form-control" name="otros" id="otros" rows="3" required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlSelect1">SOFTWARE LIBRE:SI(El equipo opera con software Libre)- NO(El equipo tiene al menos una aplicacion que no es sotfware libre)</label>
                        <select class="form-control" name="software" id="software">
                        <option>>>SELECCIONE OPCION<<</option>
                        <option>SI</option>
                        <option>NO</option>
                        </select>
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="id" id="id"/>
                    <input type="hidden" name="operation" id="operation"/>
                    <input type="submit" name="action" id="action" class="btn btn-primary" value="Add" />
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                </div>
                </div>
            </div>
        </form>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $('#add_button').click(function(){
            $('#course_form')[0].reset();
            $('.modal-title').text("Adicionar Registro");
            $('#action').val("Registrar");
            $('#operation').val("Add")
        });

     var dataTable = $('#course_table').DataTable({
        "paging":true,
        "processing":true,
        "serverSide":true,
        "order": [],
        "info":true,
        "ajax":{
            url:"fetch2.php",
            type:"POST"
        },
        "columnDefs":[
           {
            "target":[0,3,4],
            "orderable":false,
           },
        ],
     });

     $(document).on('submit', '#course_form', function(event){
        event.preventDefault();
        var id = $('#id').val();
        var lugar = $('#lugar').val();
        var cargo = $('#cargo').val();
        var tipo = $('#tipo').val();
        var marca = $('#marca').val();
        var procesador = $('#procesador').val();
        var memoria = $('#memoria').val();
        var disco = $('#disco').val();
        var compatibilidad = $('#compatibilidad').val();
        var sistemaop = $('#sistemaop').val();
        var ofimatica = $('#ofimatica').val();
        var correo = $('#correo').val();
        var explorador = $('#explorador').val();
        var otros = $('#otros').val();
        var software = $('#software').val();
        
        
        if(lugar != '' && cargo != '' && procesador != '')
        {
            $.ajax({
                url:"insert2.php",
                method:'POST',
                data:new FormData(this),
                contentType:false,
                processData:false,
                success:function(data)
                {
                    $('#course_form')[0].reset();
                    $('#userModal').modal('hide');
                    dataTable.ajax.reload();
                }
            });
        }
        else
        {
            alert("Course Name, Number of students Fields are Required");
        }
    });
    
    $(document).on('click', '.update', function(){
        var id = $(this).attr("id");
        $.ajax({
            url:"fetch_single2.php",
            method:"POST",
            data:{id:id},
            dataType:"json",
            success:function(data)
            {
                $('#userModal').modal('show');
                $('#id').val(data.id);
                $('#lugar').val(data.lugar);
                $('#cargo').val(data.cargo);
                $('#tipo').val(data.tipo);
                $('#marca').val(data.marca);
                $('#procesador').val(data.procesador);
                $('#memoria').val(data.memoria);
                $('#disco').val(data.disco);
                $('#compatibilidad').val(data.compatibilidad);
                $('#sistemaop').val(data.sistemaop);
                $('#ofimatica').val(data.ofimatica);
                $('#correo').val(data.correo);
                $('#explorador').val(data.explorador);
                $('#otros').val(data.otros);
                $('#software').val(data.software);
                $('.modal-title').text("Editar Registro");
                $('#id').val(id);
                $('#action').val("Guardar");
                $('#operation').val("Edit");
            }
        });
     });

    $(document).on('click','.delete', function(){

        var id = $(this).attr("id");
        if(confirm("Are you sure want to delete this user?"))
        {
            $.ajax({
                url:"delete2.php",
                method:"POST",
                data:{id:id},
                success:function(data)
                {
                    dataTable.ajax.reload();
                }
            });
        }
        else
        {
            return false;
        }
     });

    });
</script>
