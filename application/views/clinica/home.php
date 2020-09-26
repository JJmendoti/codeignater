<div class="container-fluid mt-3 border border-primary">
    <h2 class="font-weight-bold text-info">Clinic Add Patient</h2>
    <div class="row">
        <div class="col col-sm-8 col-md-8 col-lg-8 col-xl-8">
            <div class="card card-body mb-3 border border-info ml-2">
                <form action="<?php echo base_url('clinica/savePatient'); ?>" method="post" onsubmit="return validate();">
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="document" id="document" aria-describedby="nameHelp" placeholder="Enter document" autofocus>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" id="name" aria-describedby="nameHelp" placeholder="Enter name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="lastname" id="lastname" aria-describedby="identificationHelp" placeholder="Enter lastname">
                            </div>
                            <div class="form-group">
                                <input type="date" name="birthdate" class="form-control" id="birthdate" placeholder="Enter birthdate">
                            </div>

                        </div>

                        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 ">
                            <div class="form-group">
                                <input type="text" class="form-control" name="city" id="city" aria-describedby="cityHelp" placeholder="Enter City">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="neighborhood" id="neighborhood" aria-describedby="cityHelp" placeholder="Enter neighborhood">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="number_phone" id="number_phone" aria-describedby="number_phoneHelp" placeholder="Enter number_phone">
                            </div>
                            <input type="submit" class="btn btn-primary btn-lg active text-capitalize mt-5 btn-block" role="button" aria-pressed="true" name="" value="save patiencs">
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- fomrulario de citas -->
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-raised btn-outline-primary col-md-4" data-toggle="modal" data-target="#Appointments">
            Agendar cita
        </button>

        <!-- Modal -->
        <div class="modal fade" id="Appointments" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Agenda tu Cita</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="card card-body mt-5 mb-4">
                            <form action="<?php echo base_url('clinica/saveAppointment'); ?>" method="post">
                                <p class="font-weight-bold h2 text-dark border border-success bg-info"></p>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="text" name="id" class="form-control"  value="<?php //echo $medical_appointment->id; ?>" id="id" placeholder="id" autofocus>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <input type="date" name="date" class="form-control" value="<?php //echo $medical_appointment->date; ?>" id="date" placeholder="Date" autofocus>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <input type="text" name="document_patient" class="form-control" value="<?php //echo $medical_appointment->document_patient;?>" id="document_patient " placeholder="Enter Document" autofocus>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col"> <button type="submit" class="btn btn-outline-primary btn-block mb-2">Save</button></div>
                                </div>
                            </form>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-info mb-2" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<div class='container mt-3 mb-4'>
    <div class='row'>
        <?php
        //    echo "<pre>";
        //    print_r($medical_appointment);
        //    echo "</pre>";
        foreach ($medical_appointments as $medical_appointment) {
            $edit = base_url("/clinica/?id={$medical_appointment->id}");
            $delete = base_url("/clinica/deleteAppointment?id={$medical_appointment->id}");
            $dataresult = "
            <div class='col-sm-6 col-md-6 col-lg-3 mt-3 mr-2 ml-2'>
                <div class='card bg-light border border-success'' style='width: 18rem;'>
                    <div class='card-body'>
                        <h5 class='card-title text-info font-weight-bold'>Citas Medicas</h5>
                        <p class='card-text text-center  bg-white text-dark'>
                        Cita # {$medical_appointment->id}
                        </p>
                        <p class='card-text text-center  bg-white text-dark'>
                        Fecha de la Cita: <span class='font-weight-bold  text-center '>{$medical_appointment->date}</span>
                        </p>
                        <p class='card-text text-center  bg-white text-dark'>
                        Documento del Paciente: <span class='font-weight-bold text-center '>{$medical_appointment->document_patient}</span>
                        </p>
                        <a href='{$edit}' class='btn btn-success mr-5 ' data-toggle='modal' data-target='#Appointments' id='Appointmentsbtn1'>
                        Edite
                        </a>
                        <a  href='{$delete}' class='btn btn-danger ml-3' data-toggle='modal' data-target='#Appointments' id='Appointmentsbtn2'>
                        Delete
                        </a>                     
                    </div>
                </div>
            </div>";
            echo $dataresult;
        }
        ?>
    </div>
</div>