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
        <div class="form-group">
            <label for="startDate">inicio das férias</label>
            <input type="date" name="startDate" class="form-control" id="startDate" placeholder="Fulano de tal">
        </div>
        <div class="form-group">
            <label for="endDate">fim das férias</label>
            <input type="date" name="endDate" class="form-control" id="endDate" placeholder="Fulano de tal">
        </div>
        <select class="form-control" id="exampleFormControlSelect1" name="status">
            <option value="titular">titular</option>
            <option value="substituto">substituto</option>
        </select>
        <button class="btn btn-primary space-top" type="submit">salvar</button>
    </form>
</div>