<!DOCTYPE html>
<html>
    <head>
        <link rel='stylesheet' type='text/css' href='<?=base_url("static/css/dist/css/bootstrap.min.css")?>' />
        <link rel='stylesheet' type='text/css' href='<?=base_url("static/css/css.css")?>' />
        <title>Grupo TMT</title>
    </head>
    <body>
        <form method='post' class='form-turma form-inline'>
            <p style='float:left;margin:6px 5px 0 0'>Selecione a turma:</p>
            <div class=''>
                <select name='slc_turma' class='form-control'>
                    <?php foreach($turmas as $turma){?>
                    <option value='<?=$turma->cod_turma?>'><?=$turma->$titulo;?></option>
                    <?php }?>
                </select>
                <button type='submit' class='btn btn-primary btn-sm'>Pesquisar</button>
            </div>
        </form>
        <div class='carometro'>
            <?php
            if($alunos)
            {
                foreach($alunos as $aluno){
                ?>
                <div class='aluno'>
                    <img src='<?=$aluno->foto;?>' width='80' height='100' />
                    <p><?=$aluno->nome;?></p>
                </div><!--aluno-->
                <?php
                }
            }
            else
            {
            ?>
            <div class='alert alert-info'>Selecione uma turma no acima.</div>
            <?php
            }
            ?>
            <div class='clear'></div>
        </div><!--carometro-->
    </body>
</html>