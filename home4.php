<?php
session_start();
if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
	print "<script>alert(\"Acceso invalido!\");window.location='login.php';</script>";
}

?>
<html>


	<head>
	
	<?php include "php/navbar2.php"; ?>
     <title>Camas Hospitalarias y Rrhh</title>
    <link rel="Shortcut Icon" href="favicon.ico" type="image/favicon" />
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
     <h1>INFORMACION PERSONAL DE SALUD DEL ESTABLECIMIENTO</h1>
               <label>Hospital:</label>
                    <input type="text" name="hospital" id="hospital" class="form-control" value = "<?php echo $_SESSION['hospital']; ?>" disabled="disabled"/><br>
                <div align="right">
                <button type="button" id="add_button" data-toggle="modal" data-target="#userModal" class="btn btn-success"><span class="glyphicon glyphicon-hand-right"></span>  Adicionar Registro</button>
                </div>
                <br>
               <table id="course_table" class="table table-striped">  
                    <thead bgcolor="#8acb81">
                        <tr class="table-primary">
                         
                           <th width="40%">NRO DE PERSONAL LICENCIADO EN ENFERMERIA</th>  
                           <th width="40%">NRO DE PERSONAL MEDICO</th>
                           <th width="40%">NRO DE PERSONAL LABORATORIO</th>
                           <th width="40%">NRO DE PERSONAL AUXILIAR DE ENFERMERIA</th>
                           
                           
                           <th scope="col" width="5%">Editar</th>
                           <th scope="col" width="5%">Eliminar</th>
                           
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
                    <h4 class="modal-title">Adicionar</h4>
                </div>

                <div class="modal-body">
                    <input type="text" name="hosp" id="hosp" class="form-control" value = "<?php echo $_SESSION['hospital']; ?>" readonly="readonly"><br>
                    <?php
                    date_default_timezone_set('America/Asuncion');

                      ?>
                    <input type="text" name="fecha" id="fecha" class="form-control" value = "<?php echo $fechaActual = date('d-m-Y g:ia'); ?>" readonly="readonly"><br>
                    <label>Nro de Personal Licenciado de enfermeria</label>
                    <input type="number" name="nro_enf" id="nro_enf" class="form-control" value="0"/><br> 
                    <label>Nro de Personal medico</label>
                    <input type="number" name="nro_med" id="nro_med" class="form-control" value="0"/><br>
                    
                    <label>Nro de personal Laboratorio</label>
                    <input type="number" name="nro_lab" id="nro_lab" class="form-control" value="0"/><br>
                    <label>Nro de Personal Auxiliar de Enfermeria</label>
                    <input type="number" name="nro_aux" id="nro_aux" class="form-control" value="0"/><br>
                    
                    
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="hosp_id" id="hosp_id"/>
                    <input type="hidden" name="operation" id="operation"/>
                    <input type="submit" name="action" id="action" class="btn btn-primary" value="Add" />
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
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
            $('#action').val("Adicionar");
            $('#operation').val("Add")
        });

     var dataTable = $('#course_table').DataTable({
        "paging":true,
        "processing":true,
        "serverSide":true,
        "order": [],
        "info":true,
        "ajax":{
            url:"fetch4.php",
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
        var hosp = $('#hosp').val();
        var nro_enf = $('#nro_enf').val();
        var nro_med = $('#nro_med').val();
        var nro_lab = $('#nro_lab').val();
        var nro_aux = $('#nro_aux').val();
       
        
        if(hospital != '' && nro_enf != '' && nro_med != '' && nro_aux != '' && nro_lab != '')
        {
            $.ajax({
                url:"insert4.php",
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
            alert("");
        }
    });
    
    $(document).on('click', '.update', function(){
        var id = $(this).attr("id");
        $.ajax({
            url:"fetch_single4.php",
            method:"POST",
            data:{id:id},
            dataType:"json",
            success:function(data)
            {
                $('#userModal').modal('show');
                $('#id').val(data.id);
                $('#hosp').val(data.hosp);
                $('#nro_enf').val(data.nro_enf);
                $('#nro_med').val(data.nro_med);
                $('#nro_lab').val(data.nro_lab);
                $('#nro_aux').val(data.nro_aux);
                $('.modal-title').text("Editar Registro");
                $('#hosp_id').val(id);
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
                url:"delete4.php",
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
