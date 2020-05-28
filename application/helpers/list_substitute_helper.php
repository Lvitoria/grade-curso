<?php

function substitute($idteacher)
{
    $CI = &get_instance();
    $teacher = $CI->model->GetId('teacher', 'teacher_idteacher', $idteacher);
    echo  "professor(a) substituto $teacher->name, neste periodo de férias";
}
