<div class="container">
    <?php
    if ($this->session->flashdata('danger')) {
        $alert['msg'] = '<b>' . $this->session->flashdata('danger') . '</b>';
    }
    if (isset($alert)) {
    ?>
        <div class="alert alert-danger" role="alert">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <?php
            echo $alert['msg'];
            ?>
        </div>
    <?php
    }
    ?>
    <form class="space-top" action="<?php echo base_url('salvar-professor') ?>" method="post">
        <div class="form-group">
            <label for="exampleFormControlInput1">Nome</label>
            <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Fulano de tal">
        </div>
        <div class="form-group" id="btn">
            <label for="startDate">Inicio das férias</label>
            <input type="date" name="startDate" class="form-control" id="startDate" placeholder="Fulano de tal">
            <label for="endDate">Fim das férias</label>
            <input type="date" name="endDate" class="form-control" id="endDate" placeholder="Fulano de tal">
        </div>
        <div class="form-group" id="substitute">
            <label for="substitute">Nome</label>
            <input type="text" name="nameSubstitute" class="form-control" id="substitute" placeholder="Fulano de tal">
            <small id="emailHelp" class="form-text text-muted">Nome do professor para substituir durante o periodo de férias</small>
        </div>
        <button class="btn btn-primary space-top" type="submit">salvar</button>
    </form>
</div>

<script>
$('#substitute').hide()  
$('#btn').change(function(){
      let inicio = $('#startDate').val(),  fim = $('#endDate').val();       
        if(inicio && fim){
            $('#substitute').show().attr('required', true)
            $('#status').hide()
        }
       
    })
</script>