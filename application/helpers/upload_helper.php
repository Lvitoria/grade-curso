<?php

    function upload($nome_arquivo, $name){
        //A linha a baixo faz com que a variável $CI aponte para o mesmo endereço de
        //memória onde está localizado o super objeto do CodeIgniter,
        $CI =& get_instance();

        $config['upload_path'] = './assets/upload';
        $config['allowed_types'] = 'jpg|png|pdf';
        $config['file_name'] = $nome_arquivo;
        // $config['max_size'] = '145';
        // $config['max_width'] = '1024';
        // $config['max_height'] = '768';
        
        $CI->load->library('upload');

        $CI->upload->initialize($config);

        if ($CI->upload->do_upload($name)){
            echo 'Arquivo salvo com sucesso.';
        }else{
            $error = array('error' => $CI->upload->display_errors());
            dd($error);
        }

    }
?>
