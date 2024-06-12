<?php
session_start();
if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
	print "<script>alert(\"Acceso invalido!\");window.location='login.php';</script>";
}

?>
<html>


	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<?php include "php/navbar2.php"; ?>
     <title>Camas Hospitalarias</title>
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
     <h1>INFORME DIARIO ESTADO HOSPITAL - CENTRO DE SALUD (PANDEMIA 19)</h1>
               <label>Hospital:</label>
                    <input type="text" name="hospital" id="hospital" class="form-control" value = "<?php echo $_SESSION['hospital']; ?>" disabled="disabled"/><br>
                <div align="right">
                <button type="button" id="add_button" data-toggle="modal" data-target="#userModal" class="btn btn-success"><span class="glyphicon glyphicon-hand-right"></span>  Adicionar Registros</button>
                </div>
                <br>
               <table id="course_table" class="table table-striped">  
                    <thead bgcolor="#8acb81">
                        <tr class="table-primary">
                         
                            
                           <th width="20%">FECHA</th>  
                           <th width="20%">PROCEDENCIA</th>
                           <th width="20%">DISPONE O2</th>
                           <th width="30%">SALA DE INTERNACION</th>
                           <th width="20%">SALA UTI/UCI</th>
                           <th width="20%">TOTAL DECESOS</th>
                           <th width="30%">TOTAL DECESOS POR FALTA DE O2</th>  
                           <th scope="col" width="5%">Detalle/Editar</th>
                           
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
                    

                    <?php
                    date_default_timezone_set('America/Asuncion');

                      ?>
                    <div class="row">
                        <div class="control-group">
                            <div class="col-xs-6">
                                <label for="procedencia">INSTITUCION/ENTE GESTOR</label>
                                <select class="form-control" id="procedencia"  name="procedencia">
                                    <option>GOBERNACION</option>
                                    <option>MUNICIPIO</option>
                                    <option>ENTE GESTOR</option>
                                    <option>PRIVADO</option>
                                </select>
                            </div>
                            <div class="col-xs-6">
                                <label>FECHA</label>
                                <input type="text" name="fecha" id="fecha" class="form-control" value = "<?php echo $fechaActual = date('d-m-Y g:ia'); ?>" readonly="readonly"><br>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="control-group">
                            <div class="col-xs-7">
                                <label>MUNICIPIO</label>
                                <input type="text" name="municipio" id="municipio" class="form-control"/><br>
                            </div>  
                        </div>
                    </div>
                    <label>HOSPITAL</label>
                    <input type="text" name="hosp" id="hosp" class="form-control" value = "<?php echo $_SESSION['hospital']; ?>" readonly="readonly"><br>
                
                    
                    <label for="dispox">DISPONIBILIDAD DE OXIGENO</label>
                                <select class="form-control" id="dispox"  name="dispox">
                                    <option>SI</option>
                                    <option>NO</option>
                                </select><br>

                    <center><label>________________N° PACIENTES COVID (+)HOSPITALIZADOS EN:______________</label></center><br>            
                    <div class="row">
                        <div class="control-group">
                            <div class="col-xs-6">
                                <label>SALAS DE INTERNACION</label>
                                <input type="text" name="nropac" id="nropac" class="form-control" value="0"/>
                            </div>
                            <div class="col-xs-6">
                                <label>SALAS UTI/UCI</label>
                                <input type="text" name="saluti" id="saluti" class="form-control" value="0"/>
                            </div><br>
                        </div>
                    </div>
                    <br>
                    <center><label>______________________N° DE FALLECIDOS COVID 19:________________</label></center><br>
                    <div class="row">
                        <div class="control-group">
                            <div class="col-xs-6">
                                    <label>TOTAL DECESOS</label><br>
                                    <input type="number" name="totdec" id="totdec" class="form-control" value="0"/>
                            </div>
                            <div class="col-xs-6">

                                    <label>TOTAL DECESOS POR FALTA DE OXIGENO</label>
                                    <input type="number" name="totdecox" id="totdecox" class="form-control" value="0"/>
                            </div>
                        </div>
                    </div>
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
            url:"fetch3.php",
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
        var municipio = $('#municipio').val();
        var procedencia = $('#procedencia').val();
        var hosp = $('#hosp').val();
        var dispox = $('#dispox').val();
        var nropac = $('#nropac').val();
        var saluti = $('#saluti').val();
        var totdec = $('#totdec').val();
        var totdecox = $('#totdecox').val();
        
        if(procedencia != '' && fecha != '' && municipio != '' && procedencia != '' && hosp != '' && dispox != '' && nropac != '' && saluti != '' && totdec != '')
        {
            $.ajax({
                url:"insert3.php",
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
            url:"fetch_single3.php",
            method:"POST",
            data:{id:id},
            dataType:"json",
            success:function(data)
            {
                $('#userModal').modal('show');
                $('#id').val(data.id);
                $('#fecha').val(data.fecha);
                $('#municipio').val(data.municipio);
                $('#procedencia').val(data.procedencia);
                $('#hosp').val(data.hosp);
                $('#dispox').val(data.dispox);
                $('#nropac').val(data.nropac);
                $('#saluti').val(data.saluti);
                $('#totdec').val(data.totdec);
                $('#totdecox').val(data.totdecox);
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
