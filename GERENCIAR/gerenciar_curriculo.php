<?php

/**
 * Created by PhpStorm.
 * User: italo
 * Date: 22/12/16
 * Time: 15:37
 */
include_once '../PDO/conexao.php';

function buscarCurriculos($pesquisa)
{
    $sql = "select * from db_curriculo.Curriculos where nome like '%{$pesquisa}%' or conteudo like '%{$pesquisa}%'";
    return pesquisar($sql);
}

function cadastrarCurriculo($dados)
{

    //$nascimento = DateTime::createFromFormat('d/m/Y', $dados['data_nascimento']);

    $cadastrar = "
        INSERT INTO db_curriculo.Curriculos SET
            nome_completo = '" . addslashes($dados['f_str_nome']) . "',
            foto = '" . $dados['foto'] . "',
            email = '" . addslashes($dados['f_str_email']) . "',
            data_nascimento = '" . $dados['data_nascimento'] . "',
            sexo = '" . addslashes($dados['f_str_sexo']) . "',
            estado_civil = '" . addslashes($dados['f_str_estado_civil']) . "',
            mae = '" . addslashes($dados['f_str_filiacao_mae']) . "',
            pai = '" . addslashes($dados['f_str_filiacao_pai']) . "',
            cat_cnh = '" . addslashes($dados['f_str_categoria_cnh']) . "',
            cep = '" . addslashes($dados['f_str_cep']) . "',
            estado = '" . addslashes($dados['f_str_estado']) . "',
            cidade = '" . addslashes($dados['cidade']) . "',
            endereco = '" . addslashes($dados['f_str_endereco']) . "',
            numero = '" . addslashes($dados['f_str_numero']) . "',
            bairro = '" . addslashes($dados['f_str_bairro']) . "',
            complemento = '" . addslashes($dados['f_str_complemento']) . "',
            ddd_telefone = '" . addslashes($dados['f_int_ddd_telefone']) . "',
            telefone = '" . addslashes($dados['f_int_telefone']) . "',
            ddd_celular = '" . addslashes($dados['f_int_ddd_celular']) . "',
            celular = '" . addslashes($dados['f_int_celular']) . "',
            ddd_telefone_recado = '" . addslashes($dados['f_int_ddd_telefone_recado']) . "',
            telefone_recado = '" . addslashes($dados['f_int_telefone_recado']) . "',
            contato_recado = '" . addslashes($dados['f_str_contato_recado']) . "',
            deficiencia = '" . addslashes($dados['f_str_deficiencia']) . "',
            informacao_deficiencia = '" . addslashes($dados['f_str_informacao_deficiencia']) . "',
            cargo_pretendido = '" . addslashes($dados['f_int_cargo_pretendido']) . "',
            outro_cargo = '" . addslashes($dados['f_str_cargo_pretendido_outro']) . "',
            cidade_pretendida = '" . addslashes($dados['f_str_cidade_pretendida']) . "',
            experiencia_profissional = '" . addslashes($dados['f_str_experiencia']) . "',
            estado_empregaticio = '" . addslashes($dados['f_str_experiencia']) . "',
            ultima_experiencia_profissional_nome_empresa = '" . addslashes($dados['f_str_empresa_1']) . "',
            ultima_experiencia_profissional_cargo = '" . addslashes($dados['f_str_cargo_1']) . "',
            ultima_experiencia_profissional_periodo_inicial = '" . addslashes($dados['f_str_data_inicial_1']) . "',
            ultima_experiencia_profissional_periodo_final = '" . addslashes($dados['f_str_data_final_1']) . "',
            escolaridade = '" . addslashes($dados['f_int_id_escolaridade']) . "',
            instituicao = '" . addslashes($dados['f_str_instituicao']) . "',
            curso = '" . addslashes($dados['f_str_curso']) . "',
            nivel_ingles = '" . addslashes($dados['f_str_nivel_ingles']) . "',
            nivel_espanhol = '" . addslashes($dados['f_str_nivel_espanhol']) . "',
            pretencao_profissional = '" . addslashes($dados['f_int_cargo_pretendido']) . "',
            conhecimento_informatica_editor_textos = '" . addslashes($dados['f_str_conhecimento_editor_textos']) . "',
            conhecimento_informatica_excel = '" . addslashes($dados['f_str_conhecimento_planilha_eletronica']) . "',
            conhecimento_informatica_editor_power_point = '" . addslashes($dados['f_str_conhecimento_apresentacao']) . "',
            curriculo = '" . addslashes($dados['f_str_curriculo']) . "'    
        ";

    return inserir($cadastrar);
}

function verificarCurriculos($nome)
{
    $atleta = "select * from db_curriculo.Curriculos where nome = '{$nome}'";
    $verificar = pesquisar($atleta);
    return $verificar;
}

function excluirCurriculos($id)
{
    $excluir = "delete from db_curriculo.Curriculos where id = $id";
    return excluir($excluir);
}

function editarCurriculos($dados)
{

    $editar = "/* UPDATE db_curriculo.Curriculos SET
            nome_completo = '" . addslashes($dados['f_str_nome']) . "',
            email = '" . addslashes($dados['f_str_email']) . "',
            data_nascimento = '" . addslashes($dados['f_str_nascimento']) . "',
            sexo = '" . addslashes($dados['f_str_sexo']) . "',
            estado_civil = '" . addslashes($dados['f_str_estado_civil']) . "',
            mae = '" . addslashes($dados['f_str_filiacao_mae']) . "',
            pai = '" . addslashes($dados['f_str_filiacao_pai']) . "',
            cat_cnh = '" . addslashes($dados['f_str_categoria_cnh']) . "',
            cep = '" . addslashes($dados['f_str_cep']) . "',
            estado = '" . addslashes($dados['f_str_estado']) . "',
            cidade = '" . addslashes($dados['f_str_cidade_usuario']) . "',
            endereco = '" . addslashes($dados['f_str_endereco']) . "',
            numero = '" . addslashes($dados['f_int_numero']) . "',
            bairro = '" . addslashes($dados['f_str_bairro']) . "',
            complemento = '" . addslashes($dados['f_str_complemento']) . "',
            ddd_telefone = '" . addslashes($dados['f_int_ddd_telefone']) . "',
            telefone = '" . addslashes($dados['f_int_telefone']) . "',
            ddd_celular = '" . addslashes($dados['f_int_ddd_celular']) . "',
            celular = '" . addslashes($dados['f_int_celular']) . "',
            ddd_telefone_recado = '" . addslashes($dados['f_int_ddd_telefone_recado']) . "',
            telefone_recado = '" . addslashes($dados['f_int_telefone_recado']) . "',
            contato_recado = '" . addslashes($dados['f_str_contato_recado']) . "',
            deficiencia = '" . addslashes($dados['op1']) . "',
            informacao_deficiencia = '" . addslashes($dados['f_str_informacao_deficiencia']) . "',
            cargo_pretendido = '" . addslashes($dados['f_int_cargo_pretendido']) . "',
            outro_cargo = '" . addslashes($dados['f_str_cargo_pretendido_outro']) . "',
            cidade_pretendida = '" . addslashes($dados['f_str_cidade_pretendida']) . "',
            experiencia_profissional = '" . addslashes($dados['op2']) . "',
            estado_empregaticio = '" . addslashes($dados['op3']) . "',
            ultima_experiencia_profissional_nome_empresa = '" . addslashes($dados['f_str_empresa_1']) . "',
            ultima_experiencia_profissional_cargo = '" . addslashes($dados['f_str_cargo_1']) . "',
            ultima_experiencia_profissional_periodo_inicial = '" . addslashes($dados['f_str_data_inicial_1']) . "',
            ultima_experiencia_profissional_periodo_final = '" . addslashes($dados['f_str_data_final_1']) . "',
            escolaridade = '" . addslashes($dados['f_int_id_escolaridade']) . "',
            instituicao = '" . addslashes($dados['f_str_instituicao']) . "',
            curso = '" . addslashes($dados['f_str_curso']) . "',
            nivel_ingles = '" . addslashes($dados['f_str_nivel_ingles']) . "',
            nivel_espanhol = '" . addslashes($dados['f_str_nivel_espanhol']) . "',
            prentencao_profissional = '" . addslashes($dados['pretencao_prof']) . "',
            conhecimento_informatica_editor_textos = '" . addslashes($dados['f_str_conhecimento_editor_textos']) . "',
            conhecimento_informatica_editor_excel = '" . addslashes($dados['f_str_conhecimento_planilha_eletronica']) . "',
            conhecimento_informatica_editor_power_point = '" . addslashes($dados['f_str_conhecimento_apresentacao']) . "',
            curriculo = '" . addslashes($dados['f_str_curriculo']) . "',
            espaco_pessoal = '" . addslashes($dados['f_str_espaco_pessoal']) . "',
            texto_curriculo = '" . addslashes($dados['curriculo']) . "',
            where nome_pessoa = {$dados['id_pessoa']}*/";
    return editar($editar);
}

function formatarDadosNascimento($data)
{
    $dataFormatada = DateTime::createFromFormat('Y-m-d', $data);
    echo $dataFormatada->format('d/m/Y');
}

function validarDadosCurriculos($dados)
{

    if (empty($dados['f_str_nome'])) {
        throw new Exception('O campo nome completo precisa ser preechido');
    }
    if (empty($dados['f_str_email'])) {
        throw new Exception('O campo email precisa ser preenchido');
    }
    if (empty($dados['f_str_nascimento'])) {
        throw new Exception('O campo data de nascimento precisa ser preeenchido');
    }
    if (empty($dados['f_str_sexo'])) {
        throw new Exception('O campo sexo precisa ser preenchido');
    }
    if (empty($dados['f_str_estado_civil'])) {
        throw new Exception('O campo estado civil precisa ser preenchido');
    }
    if (empty($dados['f_str_filiacao_mae'])) {
        throw new Exception('O campo mae precisa ser preenchido');
    }
    if (empty($dados['f_str_filiacao_pai'])) {
        throw new Exception('O campo pai precisa ser preenchido');
    }
    if (empty($dados['f_str_cep'])) {
        throw new Exception('Favor preencha o campo cep');
    }
    if (empty($dados['f_str_estado'])) {
        throw new Exception('Favor selecione seu estado.');
    }
    if (empty($dados['f_str_cidade_usuario'])) {
        throw new Exception('Favor preecha o campo cidade');
    }
    if (empty($dados['f_str_endereco'])) {
        throw new Exception('Campo endereço precisa ser preenchido.');
    }
    if (empty($dados['f_int_numero'])) {
        throw new Exception('Favor preencha o numero da sua residencia caso não possua favor colocar s/n.');
    }
    if (empty($dados['f_str_bairro'])) {
        throw new Exception('O campo bairro precisa ser preenchido. Favor colocar o bairro correspondente a sua rua.');
    }
    if (empty($dados['f_int_ddd_telefone'])) {
        throw new Exception('Preencha o ddd do seu telefone.');
    }
    if (empty($dados['f_int_telefone'])) {
        throw new Exception('Preenha seu telefone.');
    }
    if (empty($dados[''])) {
        throw new Exception('');
    }
    if (empty($dados[''])) {
        throw new Exception('');
    }
    if (empty($dados[''])) {
        throw new Exception('');
    }
    if (empty($dados[''])) {
        throw new Exception('');
    }
    if (empty($dados[''])) {
        throw new Exception('');
    }
    if (empty($dados[''])) {
        throw new Exception('');
    }
    if (empty($dados[''])) {
        throw new Exception('');
    }
    if (empty($dados[''])) {
        throw new Exception('');
    }
    if (empty($dados[''])) {
        throw new Exception('');
    }
    if (empty($dados[''])) {
        throw new Exception('');
    }
}