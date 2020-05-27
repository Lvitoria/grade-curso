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
    <form class="space-top" action="<?php echo base_url('salvar-grade') ?>" method="post">
        <?php if (count($disciplines)) : ?>

            <label class="space-top" for="discipline">Materia</label>
            <select class="form-control " name="discipline" id="discipline" name="week">
                <?php foreach ($disciplines as $discipline) { ?>
                    <option value="<?php echo $discipline->iddiscipline ?>"><?php echo $discipline->name ?></option>
                <?php } ?>
            </select>

            <label class="space-top" for="grid">semana</label>
            <select class="form-control " name="grid" id="grid" name="week">
                <?php foreach ($grids as $grid) { ?>
                    <option value="<?php echo $grid->idgrid ?>"><?php echo $grid->week ?></option>
                <?php } ?>
            </select>

            <label class="space-top" for="period">periodo</label>
            <select class="form-control " name="period" id="grid" name="week">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>

            <button class="btn btn-primary space-top" type="submit">salvar</button>
        <?php else : ?>
            <div class="alert alert-danger" role="alert">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                Insira uma disciplina
            </div>
        <?php endif; ?>
    </form>
</div>