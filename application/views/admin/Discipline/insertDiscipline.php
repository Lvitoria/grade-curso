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
    <form class="space-top" action="<?php echo base_url('salvar-disciplina') ?>" method="post">
        <?php if (count($teachers)) : ?>
            <label class="space-top" for="name">disciplina:</label>
            <select class="form-control " name="name" id="name">
                <option value="Português">Português</option>
                <option value="Inglês">Inglês</option>
                <option value="Espanhol">Espanhol</option>
                <option value="Literatura">Literatura</option>
                <option value="Matemática">Matemática</option>
                <option value="Geografia">Geografia</option>
                <option value="História">História</option>
                <option value="Física">Física</option>
            </select>
            <label class="space-top" for="teacher">Professor(a):</label>
            <select class="form-control " name="teacher" id="teacher" name="week">
                <?php foreach ($teachers as $teacher) { ?>
                    <option value="<?php echo $teacher->idteacher ?>"><?php echo $teacher->name ?></option>
                <?php } ?>
            </select>
            <button class="btn btn-primary space-top" type="submit">insert</button>
        <?php else : ?>
            <div class="alert alert-danger" role="alert">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                Insira um professor
            </div>
        <?php endif; ?>
    </form>
</div>