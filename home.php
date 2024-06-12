<?php
session_start();
if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
	print "<script>alert(\"Acceso invalido!\");window.location='login.php';</script>";
}

?>
<html>


	<head>
	
	<?php include "php/navbar2.php"; ?>
     <title>Camas Hospitalarias</title>
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
     <h1>INFORMACION DE OTROS ESPACIOS, QUE ESTEN EN FUNCIONAMIENTO, Y QUE NO SEA DESTINADO A COVID-19</h1>
               <label>Hospital:</label>
                    <input type="text" name="hospital" id="hospital" class="form-control" value = "<?php echo $_SESSION['hospital']; ?>" disabled="disabled"/><br>
                <div align="right">
                <button type="button" id="add_button" data-toggle="modal" data-target="#userModal" class="btn btn-success"><span class="glyphicon glyphicon-hand-right"></span>  Adicionar Registro</button>
                </div>
                <br>
               <table id="course_table" class="table table-striped">  
                    <thead bgcolor="#8acb81">
                        <tr class="table-primary">
                         
                           <th width="40%">FECHA NOTIFICACION</th>
                           <th width="20%">NRO DE INGRESOS OTROS SERVICIOS</th>  
                           <th width="30%">NRO CAMAS DISPONIBLES OTROS SERVICIOS</th>
                           <th width="30%">NRO CAMAS OCUPADAS OTROS SERVICIOS</th>
                           <th width="40%">NRO TOTAL DE INGRESOS OTROS SERVICIOS</th>
                           <th width="20%">CAMAS CUIDADOS INTERMEDIOS</th>
                           <th width="20%">CAMAS CUIDADOS INTENSIVOS</th>
                           <th width="30%">TOTAL CAMAS</th>
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
                    <h4 class="modal-title">Adicionar</h4>
                </div>

                <div class="modal-body">
                    <input type="text" name="hospital" id="hospital" class="form-control" value = "<?php echo $_SESSION['hospital']; ?>" readonly="readonly"><br>
                    <?php
                    date_default_timezone_set('America/Asuncion');

                      ?>
                    <input type="text" name="fecha" id="fecha" class="form-control" value = "<?php echo $fechaActual = date('d-m-Y g:ia'); ?>" readonly="readonly"><br>
                    <label>Nro de Ingresos otros Servicios</label>
                    <input type="number" name="nroing" id="nroing" class="form-control" value="0"/><br> 
                    <label>Nro de Camas disponible otros Servicios</label>
                    <input type="number" name="totcamas" id="totcamas" class="form-control" value="0"/><br>
                    <label>Nro de Camas ocupadas otros servicios</label>
                    <input type="number" name="ingresos" id="ingresos" class="form-control" value="0"/><br>
                    <label>Nro Total de Egresos otros Servicios</label>
                    <input type="number" name="egresos" id="egresos" class="form-control" value="0"/><br>
                    <label>Camas de Cuidados Intermedios</label>
                    <input type="number" name="cuidinterm" id="cuidinterm" class="form-control" value="0"/><br>
                    <label>Camas de Cuidados Intensivos</label>
                    <input type="number" name="cuidint" id="cuidint" class="form-control" value="0"/><br>
                    <label>Total de Camas</label>
                    <input type="number" name="totalcamas" id="totalcamas" class="form-control" value="0"/><br>
                    
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
            url:"fetch.php",
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
        var fecha = $('#fecha').val();
        var hospital = $('#hosp').val();
        var nroing = $('#nroing').val();
        var totcamas = $('#totcamas').val();
        var ingresos = $('#ingresos').val();
        var egresos = $('#egresos').val();
        var cuidinterm = $('#cuidinterm').val();
        var cuidint = $('#cuidint').val();
        var total = $('#totalcamas').val();
        
        if(fecha != '' && hospital != '' && nroing != '' && totcamas != '' && ingresos != '' && egresos != '' && total != '')
        {
            $.ajax({
                url:"insert.php",
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
            url:"fetch_single.php",
            method:"POST",
            data:{id:id},
            dataType:"json",
            success:function(data)
            {
                $('#userModal').modal('show');
                $('#id').val(data.id);
                $('#hosp').val(data.hospital);
                $('#nroing').val(data.nroing);
                $('#totcamas').val(data.totcamas);
                $('#ingresos').val(data.ingresos);
                $('#egresos').val(data.egresos);
                $('#cuidinterm').val(data.cuidinterm);
                $('#cuidint').val(data.cuidint);
                $('#totalcamas').val(data.total);
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
                url:"delete1.php",
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
