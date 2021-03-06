<!-- File: /app/View/Trabajadores/edit.ctp -->
<?php 
    $this->assign("title", "Trabajadores - Editar");
?>

<h2>Trabajadores <small>Editar</small></h2>

<?php 
    echo $this->Form->create("Trabajador");
    echo $this->Html->para("lead", "Ingrese los datos del Trabajador:");
    echo $this->Form->input("idTrabajador", array("type" => "hidden"));
    echo $this->Form->input("dni", array(
        "label" => "DNI",
        "div" => "form-group",
        "class" => "form-control",
        "autofocus" => "autofocus"
    ));
    echo $this->Form->input("nombres", array(
        "label" => "Nombres",
        "div" => "form-group",
        "class" => "form-control"
    ));
    echo $this->Form->input("apellidoPaterno", array(
        "label" => "Apellido Paterno",
        "div" => "form-group",
        "class" => "form-control"
    ));
    echo $this->Form->input("apellidoMaterno", array(
        "label" => "Apellido Materno",
        "div" => "form-group",
        "class" => "form-control"
    ));
    echo $this->Form->input("cargo", array(
        "label" => "Cargo",
        "div" => "form-group",
        "class" => "form-control",
        "options" => array(
            "Tecnico de Mantenimiento" => "Técnico de Mantenimiento", 
            "Supervisor de Videovigilancia" => "Supervisor de Videovigilancia", 
            "Supervisor de Semaforos" => "Supervisor de Semáforos"
        ),
        "empty" => "Seleccionar un cargo"
    ));
    echo $this->Form->button($this->Html->tag("span", "", array("class" => "glyphicon glyphicon-ok")) . " Registrar", array("class" => "btn btn-default"));
    echo $this->Form->end();
    echo $this->Html->link("Regresar a Lista Trabajadores", array("controller" => "Trabajadores", "action" => "index"));
?>