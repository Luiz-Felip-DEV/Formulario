<?php

    require_once "../../../bootstrap.php";

    if (isEmpty()){
        // flash('message', 'Preencha todos os campos');

        // return redirect('?page=contato');

        dd('Preencha todos os campos!');
    }

    $validate = validate([
        'name' => 's',
        'email' => 'e',
        'subject'=> 's',
        'message'   => 's'
    ]);

    dd($validate->name);

?>