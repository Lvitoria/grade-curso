<?php
if ($this->session->flashdata('success')) {
    $alert['msg'] = '<b>' . $this->session->flashdata('success') . '</b>';
}
if (isset($alert)) {
?>
    <div class="alert alert-success" role="alert">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <?php
        echo $alert['msg'];
        ?>
    </div>
<?php
}
?>
<div class="container">
    <div class="form-inline position">
        <a type="button" href="<?php echo base_url('novo-professor') ?>" class="btn btn-primary space-top">Novo professor</a>
        <input type="text" style="width: 50%; border-radius: .25rem;" placeholder="Pesquisar pelo nome" id="mybut" onkeyup="search()">
    </div>
    <div class="row">
        <table class="table table-dark space-top table-hover" id="myTably">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Férias inicio</th>
                    <th scope="col">Férias fim</th>
                    <th scope="col">Situação</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $number = 1;
                foreach ($teachers as $teacher) {
                ?>
                    <tr>
                        <th scope="row"><?php echo $number++; ?> </th>
                        <td><?php echo $teacher->name ?></td>
                        <td><?php echo  $teacher->holidayStart != "0000-00-00" ? dataBR($teacher->holidayStart) : "férias não marcadas" ?></td>
                        <td><?php echo  $teacher->holidayEnd != "0000-00-00" ? dataBR($teacher->holidayEnd) : "férias não marcadas" ?></td>
                        <td><?php echo $teacher->status ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<script type="text/javascript">
    function search() {
        var input, filter, table, tr, td, i;
        input = document.getElementById("mybut");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTably");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            if (td) {
                if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
</script>