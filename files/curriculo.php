<?php


ini_set("display_errors", E_ALL);

include_once __DIR__ . "/cabecalho.php";
include_once __DIR__ . '/../GERENCIAR/gerenciar_curriculo.php';

try {

    if (isset($_POST['cadastrar'])) {
        cadastrarCurriculo($_POST);

        echo "Curriculo enviado com êxito.";
    }
} catch (Exception $e) {
    throw new Exception("Algo deu errado");
}


?>
<head>
    <script type="text/javascript" src="/includes/habilita_campo.js?v1"></script>
    <link rel="stylesheet" type="text/css" href="../css/curriculo.css"/>
</head>
<form action="" method="post">
    <input type="hidden" name="cadastrar" value="1"/>
    <div id="body_bg">
        <div id="conteudo">
            <!-- CONTEUDO PRINCIPAL -->
            <div id="conteudo_principal">

                <div id="formulario_principal" class="cadastro_container">
                    <span id="formcadastro_lblMsg" class="erro"></span>
                    <input type="hidden" name="f_bln_cadastrar" value="1"/>
                    <div style="border: 1px solid #065638; border-radius: 10px;"></div>
                    <fieldset class="form_container">
                        <div class="padronizacao_div">
                            <dl class="informacoes_pessoais box_itens">
                                <dt>
                                <h2 class="title">Informacoes Pessoais</h2>
                                </dt>
                                <div id="foto_pessoal" style="float:right;">
                                    <dd>
                                        <img src="../usuario.png" width="113px" height="151px" id="f_str_foto"
                                             name="f_str_foto"/><br>
                                        <input type="file" name="foto" id="foto">
                                    </dd>
                                </div>
                                <div id="form_dados_pessoais">

                                    <dd>
                                        <label for="f_str_nome">
                                            Nome Completo<span class="req">*</span>:
                                        </label>
                                        <input type="text" name="f_str_nome" value=""
                                               id="f_str_nome" class="campos" size="40"/>
                                    </dd>
                                    <dd class="esquerda">
                                        <label for="">
                                            E-mail<span class="req">*</span>:
                                        </label>
                                        <input type="text" name="f_str_email" value="" id="f_str_email" class="campos"
                                               style="width: 200px;"/>
                                    </dd>
                                    <dd>
                                        <label for="">
                                            Confirmar E-Mail<span class="req">*</span>:
                                        </label>
                                        <input type="text" name="f_str_email_confirm" value="" id="f_str_email_confirm"
                                               class="campos" style="width: 200px;"/>
                                    </dd>
                                    <dd>
                                        <label for="">
                                            Data Nascimento<span class="req">*</span>:
                                        </label>
                                        <input type="date" name="data_nascimento" id="data_nascimento"/>
                                    </dd>
                                    <dd class="esquerda">
                                        <label for="">
                                            Sexo<span class="req">*</span>:
                                        </label>
                                        <select name="f_str_sexo" id="f_str_sexo" class="campos select">
                                            <option value="">Selecione</option>
                                            <option value="1"/>
                                            <small>Masculino</small>
                                            <option value="2"/>
                                            <small>Feminino</small>
                                        </select>
                                    </dd>
                                    <dd>
                                        <label for="">
                                            Estado Civil<span class="req">*</span>:
                                        </label>
                                        <select id="f_str_estado_civil" name="f_str_estado_civil" class="campos select">
                                            <option value="">Selecione</option>
                                            <option value="1">Solteiro(a)</option>
                                            <option value="2">Amasiado(a)</option>
                                            <option value="3">Casado(a)</option>
                                            <option value="4">Divorciado(a)</option>
                                            <option value="5">Viuvo(a)</option>
                                        </select>
                                    </dd>
                                    <dd>
                                        <label for="">
                                            M&atilde;e:
                                        </label>
                                        <input type="text" name="f_str_filiacao_mae" value="" id="f_str_filiacao_mae"
                                               class="esquerda"/>
                                    </dd>
                                    <dd>
                                        <label for="">
                                            Pai:
                                        </label>
                                        <input type="text" name="f_str_filiacao_pai" value="" id="f_str_filiacao_pai"
                                               class="esquerda"/>
                                    </dd>
                                    <dd>
                                        <label for="">
                                            Categoria CNH<span class="req">*</span>:
                                        </label>
                                        <select name="f_str_categoria_cnh" id="f_str_categoria_cnh"
                                                class="campos select">
                                            <option value="">Selecione</option>
                                            <option value="0">Nao Possui</option>
                                            <option value="A">A</option>
                                            <option value="AB">AB</option>
                                            <option value="AC">AC</option>
                                            <option value="AD">AD</option>
                                            <option value="AE">AE</option>
                                            <option value="B">B</option>
                                            <option value="C">C</option>
                                            <option value="D">D</option>
                                            <option value="E">E</option>
                                        </select>
                                    </dd>
                                    <dd>
                                        <label for="">
                                            CEP<span class="req">*</span>:
                                        </label>
                                        <input type="text" name="f_str_cep" value="" id="f_str_cep"
                                               class="campos_padronizados"
                                               size="8"/>
                                        <a href="http://www.buscacep.correios.com.br/" target="_blank">Esqueceu seu
                                            CEP?</a>
                                    </dd>
                                    <dd class="estado">
                                        <label for="">
                                            Estado<span class="req">*</span>:
                                        </label>
                                        <select name="f_str_estado" id="f_str_estado" class="campos select">
                                            <option value="">Selecione</option>
                                            <option value="AC">AC</option>
                                            <option value="AL">AL</option>
                                            <option value="AM">AM</option>
                                            <option value="AP">AP</option>
                                            <option value="BA">BA</option>
                                            <option value="CE">CE</option>
                                            <option value="DF">DF</option>
                                            <option value="ES">ES</option>
                                            <option value="GO">GO</option>
                                            <option value="MA">MA</option>
                                            <option value="MG">MG</option>
                                            <option value="MS">MS</option>
                                            <option value="MT">MT</option>
                                            <option value="PA">PA</option>
                                            <option value="PB">PB</option>
                                            <option value="PE">PE</option>
                                            <option value="PI">PI</option>
                                            <option value="PR">PR</option>
                                            <option value="RJ">RJ</option>
                                            <option value="RN">RN</option>
                                            <option value="RR">RR</option>
                                            <option value="RO">RO</option>
                                            <option value="RS">RS</option>
                                            <option value="SC">SC</option>
                                            <option value="SE">SE</option>
                                            <option value="SP">SP</option>
                                            <option value="TO">TO</option>
                                        </select>
                                    </dd>
                                    <dd>
                                        <label for="">
                                            Cidade<span class="req">*</span>:
                                        </label>
                                        <input type="text" id="cidade" name="cidade"/>
                                    </dd>
                                    <dd class="esquerda">
                                        <label for="">
                                            Endere&ccedil;o<span class="req">*</span>:
                                        </label>
                                        <input type="text" name="f_str_endereco" value="" id="f_str_endereco"
                                               class="campos_padronizados"/>
                                    </dd>
                                    <dd>
                                        <label for="">
                                            N&uacute;mero<span class="req">*</span>:
                                        </label>
                                        <input type="text" name="f_str_numero" value="" id="f_str_numero" class="campos"
                                               size="6"/>
                                        <small class="dicas">(Caso n&atilde;o possua, preencha com s/n)</small>
                                    </dd>
                                    <dd class="esquerda">
                                        <label for="">
                                            Bairro<span class="req">*</span>:
                                        </label>
                                        <input type="text" name="f_str_bairro" value="" id="f_str_bairro" class="campos"
                                               maxlength="30"/>
                                    </dd>
                                    <dd>
                                        <label for="">
                                            Complemento:
                                        </label>
                                        <input type="text" name="f_str_complemento" value="" id="f_str_complemento"
                                               class="campos_padronizados" size="30"/>
                                    </dd>
                                    <dd>
                                        <label for="">
                                            Telefone<span class="req">*</span>:
                                        </label>
                                        <input type="text" name="f_int_ddd_telefone" value="" id="f_int_ddd_telefone"
                                               class="ddd" maxlength="2"
                                               onkeyup="if (this.value.length == 2) document.getElementById('f_int_telefone').focus();"/>
                                        <input type="text" name="f_int_telefone" value="" id="f_int_telefone"
                                               maxlength="10"/>
                                        <small class="dicas">(Informe pelo menos um tipo de telefone.)</small>
                                    </dd>
                                    <dd>
                                        <label for="">
                                            Celular<span class="req">*</span>:
                                        </label>
                                        <input type="text" name="f_int_ddd_celular" value="" id="f_int_ddd_celular"
                                               class="ddd" maxlength="2"
                                               onkeyup="if (this.value.length == 2) document.getElementById('f_int_celular').focus();"/>
                                        <input type="text" name="f_int_celular" value="" id="f_int_celular"
                                               maxlength="10"/>
                                    </dd>
                                    <dd>
                                        <label for="">
                                            Telefone de Recado<span class="req">*</span>:
                                        </label>
                                        <input type="text" name="f_int_ddd_telefone_recado" value=""
                                               id="f_int_ddd_telefone_recado" class="ddd" maxlength="2"
                                               onkeyup="if (this.value.length == 2) document.getElementById('f_int_telefone_recado').focus();"/>
                                        <input type="text" name="f_int_telefone_recado" value=""
                                               id="f_int_telefone_recado" maxlength="10"/>
                                        Falar com:<input type="text" name="f_str_contato_recado" value=""
                                                         id="f_str_contato_recado" class="falar_com" size="30"/>
                                    </dd>
                                </div>

                            </dl>
                        </div>
                    </fieldset>
                </div>
            </div>
            <div id="conteudo_principal">
                <div style="border: 1px solid #065638; border-radius: 10px;"></div>
                <div class="form_container">
                    <div class="padronizacao_div">
                        <dl class="diversidade box_itens"></dl>
                        <h2 class="title">Diversidade</h2>
                        <dd class style="height: 40px;">

                            <label for="">
                                Possui alguma defici&ecirc;ncia f&iacute;sica ou necessidade especial<span
                                        class="req">*</span>:
                            </label>
                            <span class="radio">
                                <input type="radio" name="f_str_deficiencia" class="campos f_str_deficiencia"
                                       value="1"/><small>Sim</small>
                                <input type="radio" name="f_str_deficiencia" class="campos f_str_deficiencia"
                                       value="0"/><small>N&atilde;o</small>
                            </span>
                        </dd>
                        <dd style="clear: both;float:left;" id="informacao_deficiencia">
                            <label for="">
                                Informe a defici&ecirc;cia:
                            </label>
                            <input type="text" name="f_str_informacao_deficiencia" class="campos" value="" size="35"/>
                        </dd>
                    </div>

                    </fieldset>
                </div>
                <br>
                <div class="box_968_container">
                    <div style="border: 1px solid #065638; border-radius: 10px;"></div>
                </div>
                <div class="box_968_container">

                    <fieldset class="form_container">
                        <dl>
                            <div class="padronizacao_div">
                                <dt>
                                <h2 class="formacao_educacional">Informacoes Pessoais</h2>
                                </dt>

                                <dd>
                                    <label for="">
                                        Escolaridade<span class="req">*</span>:
                                    </label>
                                    <select id="f_int_id_escolaridade" name="f_int_id_escolaridade"
                                            class="campos select">
                                        <option value="">Selecione</option>
                                        <option value="1">Prim&aacute;rio Incompleto (at&eacute; a 4a S&eacute;rie)
                                        </option>
                                        <option value="2">Prim&aacute;rio Completo</option>
                                        <option value="3">Gin&aacute;sio Incompleto (at&eacute; a 8a S&eacute;rie)
                                        </option>
                                        <option value="4">Gin&aacute;sio Completo</option>
                                        <option value="5">Ensino M&eacute;dio Incompleto</option>
                                        <option value="6">Ensino M&aacute;dio Completo</option>
                                        <option value="7">Curso Superior Incompleto</option>
                                        <option value="8">Curso Superior em Curso</option>
                                        <option value="9">Curso Superior Completo</option>
                                        <option value="10">P&oacute;s Graduado</option>
                                        <option value="11">Mestrado</option>
                                        <option value="12">Doutorado</option>
                                    </select>
                                </dd>
                                <dd id="nivel_profissional_instituicao">
                                    <label for="">
                                        Institui&ccedil;&atilde;o:
                                    </label>
                                    <input type="text" value="" id="f_str_instituicao" name="f_str_instituicao"
                                           class="campos"
                                           size="40"/>
                                </dd>
                                <dd id="nivel_profissional_curso">
                                    <label for="">
                                        Curso<span class="req">*</span>:
                                    </label>
                                    <input type="text" value="" id="f_str_curso" name="f_str_curso" class="campos"
                                           size="40"/>
                                </dd>
                                <dd>
                                    <label for="">
                                        N&iacute;vel de Ingl&ecirc;s<span class="req">*</span>:
                                    </label>
                                    <select id="f_str_nivel_ingles" name="f_str_nivel_ingles" class="campos select">
                                        <option value="">Selecione</option>
                                        <option value="Nenhum">Nenhum</option>
                                        <option value="Basico">B&aacute;sico</option>
                                        <option value="Intermediario">Intermedi&aacute;rio</option>
                                        <option value="Avancado">Avan&ccedil;ado</option>
                                        <option value="Fluente">Fluente</option>
                                    </select>
                                </dd>
                                <dd>
                                    <label for="">
                                        N&iacute;vel de Espanhol<span class="req">*</span>:
                                    </label>
                                    <select id="f_str_nivel_espanhol" name="f_str_nivel_espanhol" class="campos select">
                                        <option value="">Selecione</option>
                                        <option value="Nenhum">Nenhum</option>
                                        <option value="Basico">B&aacute;sico</option>
                                        <option value="Intermediario">Intermedi&aacute;rio</option>
                                        <option value="Avancado">Avan&ccedil;ado</option>
                                        <option value="Fluente">Fluente</option>
                                    </select>
                                </dd>
                                <dd style="clear: both;float:left;">
                                    <label for="">
                                        Conhecimentos em Inform&aacute;tica<span class="req">*</span>:
                                    </label>
                                </dd>
                                <dd style="float:left;">
              <span class="radio">
                  <small>Editor de Textos (ex:Word):</small>
                  <input type="radio" name="f_str_conhecimento_editor_textos" value="Nenhum"
                         class="campos f_str_conhecimento_editor_textos"/><small>Nenhum</small>
                  <input type="radio" name="f_str_conhecimento_editor_textos" value="Basico"
                         class="campos f_str_conhecimento_editor_textos"/><small>Basico</small>
                  <input type="radio" name="f_str_conhecimento_editor_textos" value="Medio"
                         class="campos f_str_conhecimento_editor_textos"/><small>M&eacute;dio</small>
                  <input type="radio" name="f_str_conhecimento_editor_textos" value="Avancado"
                         class="campos f_str_conhecimento_editor_textos"/><small>Avan&ccedil;ado</small>
              </span>
                                </dd>
                                <dd style="float:left;margin-left:180px;margin-right: 300px">
              <span class="radio">
                  <small>Planilhas eletr&ocirc;nicas (ex:Excel):</small>
                  <input type="radio" name="f_str_conhecimento_planilha_eletronica" value="Nenhum"
                         class="campos f_str_conhecimento_planilha_eletronica"/><small>Nenhum</small>
                  <input type="radio" name="f_str_conhecimento_planilha_eletronica" value="Basico"
                         class="campos f_str_conhecimento_planilha_eletronica"/><small>Basico</small>
                  <input type="radio" name="f_str_conhecimento_planilha_eletronica" value="Medio"
                         class="campos f_str_conhecimento_planilha_eletronica"/><small>M&eacute;dio</small>
                  <input type="radio" name="f_str_conhecimento_planilha_eletronica" value="Avancado"
                         class="campos f_str_conhecimento_planilha_eletronica"/><small>Avan&ccedil;ado</small>
              </span>
                                </dd>
                                <dd style="float:left;margin-left:180px;">
                            <span class="radio">
                                <small>Apresenta&ccedil;&otilde;es (ex:Power Point):</small>
                                <input type="radio" name="f_str_conhecimento_apresentacao" value="Nenhum"
                                       class="campos f_str_conhecimento_apresentacao"/><small>Nenhum</small>
                                <input type="radio" name="f_str_conhecimento_apresentacao" value="Basico"
                                       class="campos f_str_conhecimento_apresentacao"/><small>Basico</small>
                                <input type="radio" name="f_str_conhecimento_apresentacao" value="Medio"
                                       class="campos f_str_conhecimento_apresentacao"/><small>M&eacute;dio</small>
                                <input type="radio" name="f_str_conhecimento_apresentacao" value="Avancado"
                                       class="campos f_str_conhecimento_apresentacao"/><small>Avan&ccedil;ado</small>
                            </span>
                                </dd>
                            </div>
                        </dl>
                    </fieldset>
                </div>
            </div>
            <div style="border: 1px solid #065638; border-radius: 10px;"></div>
            <div id="conteudo_principal">

                <fieldset class="form_container">
                    <div class="padronizacao_div">
                        <dl class="pretensao_profissional box_itens">
                            <dt>
                            <h2 class="title">Pretensao Profissional</h2>
                            </dt>
                            <dd>
                                <label for="">
                                    Cargo / Fun&ccedil;&atilde;o / &Aacute;rea<span class="req">*</span>:
                                </label>
                                <select name="f_int_cargo_pretendido" id="pretencao_prof" name="pretencao_prof"
                                        class="campos select">
                                    <option value="">Selecione o Cargo</option>
                                    <option value="2">ELETRICISTA</option>
                                    <option value="3">ESTAGIARIO</option>
                                    <option value="4">MOTORISTA</option>
                                    <option value="5">PORTEIRO/VIGILANTE</option>
                                    <option value="6">RECEPCIONISTA</option>
                                    <option value="7">SERVICOS GERAIS</option>
                                    <option value="8">SETOR ADMINISTRATIVO</option>
                                    <option value="9">SETOR CONTABIL</option>
                                    <option value="10">SETOR DE INFORMATICA</option>
                                    <option value="11">SETOR FINANCEIRO</option>
                                    <option value="12">SETOR FISCAL</option>
                                    <option value="13">SETOR JURIDICO</option>
                                    <option value="14">SETOR PESSOAL</option>
                                    <option value="15">SECRETARIA</option>
                                    <option value="16">XEROZ</option>
                                    <option value="17">OUTRO</option>
                                </select>
                            </dd>
                            <dd style="display:none;" id="cargo_pretendido_outro">
                                <label for="">
                                    Outro Cargo<span class="req">*</span>:
                                </label>
                                <input type="text" name="f_str_cargo_pretendido_outro" id="f_str_cargo_pretendido_outro"
                                       class="campos" value="" size="35"/>
                            </dd>
                            <dd style="height: 30px;">
                                <label for="">
                                    Para que Cidade?<span class="req">*</span>:
                                </label>
                                <select name="f_str_cidade_pretendida" id="f_str_cidade_pretendida"
                                        class="campos select">
                                    <option value="">Selecione a Cidade</option>
                                    <option value="SAO MATEUS - ES">SAO MATEUS - ES</option>
                                </select>
                            </dd>
                        </dl>
                    </div>
                </fieldset>
            </div>
            <div style="border: 1px solid #065638; border-radius: 10px;"></div>
            <div class="box_968_container">
                <fieldset class="form_container">
                    <div class="padronizacao_div">
                        <dl class="experiencia_profissional box_itens">
                            <dd style="height: 40px;">
                                <label for="">
                                    Possui experiencia profissional?<span class="req">*</span>
                                </label>
                                <span class="radio">
                                <input type="radio" name="f_str_experiencia" value="Sim" class="campos"/><small>Sim</small>
                                <input type="radio" name="f_str_experiencia" value="Nao" class="campos"/><small>N&atilde;o</small>
                            </span>
                            </dd>
                            <dd class="experiencias" style="clear: both;float:left;">
                                <label for="">
                                    Est&aacute; empregado atualmente?<span class="req">*</span>
                                </label>
                                <span class="radio">
                <input type="radio" name="f_str_empregado" class="campos experiencias" value="Sim"/><small>Sim</small>
                <input type="radio" name="f_str_empregado" class="campos experiencias" value="Nao"/><small>N&atilde;o</small>
              </span>
                            </dd>
                        </dl>
                    </div>
                </fieldset>
                <div class="box_968_container">
                    <div style="border: 1px solid #065638; border-radius: 10px;"></div>
                    <fieldset class="form_container experiencias">
                        <div class="padronizacao_div">
                            <dl class="experiencia_profissional_ultima box_itens">
                                <dt>
                                <h2 class="title">Ultima Experiencia Profissional</h2>
                                </dt>
                                <dd class="esquerda">
                                    <label for="">
                                        Nome da Empresa<span class="req">*</span>:
                                    </label>
                                    <input type="text" name="f_str_empresa_1" id="f_str_empresa_1" value=""
                                           class="campos experiencias" style="width: 200px;"/>
                                </dd>
                                <dd>
                                    <label for="">
                                        Cargo<span class="req">*</span>:
                                    </label>
                                    <input type="text" name="f_str_cargo_1" id="f_str_cargo_1" value=""
                                           class="campos experiencias" style="width: 200px;"/>
                                </dd>
                                <dd>
                                    <label for="">
                                        Per&iacute;odo<span class="req">*</span>:
                                    </label>
                                    <small>Inicial:
                                        <input type="date" name="f_str_data_inicial_1" id="f_str_data_inicial_1"
                                               value=""
                                               class="campos experiencias data_inicial" size="5"/>
                                    </small>
                                    <small>Final:
                                        <input type="date" name="f_str_data_final_1" id="f_str_data_final_1" value=""
                                               class="campos data_final experiencias" size="5"/>
                                    </small>
                                </dd>
                            </dl>
                        </div>
                    </fieldset>
                </div>
            </div>
            <div style="border: 1px solid #065638; border-radius: 10px;"></div>
            <div id="conteudo_principal">

                <fieldset class="form_container">
                    <div class="padronizacao_div">
                        <dl class="curriculo box_itens">
                            <dt>
                            <h2 class="title">Curriculo</h2>
                            </dt>
                            <dd style="height: 30px;">(Caso queira, copie e cole aqui seu curr&iacute;culo em Word ou em
                                qualquer
                                formato de texto. N&atilde;o se preocupe com a formata&ccedil;&atilde;o. O que interessa
                                &eacute; o conte&uacute;do
                                do seu curr&iacute;culo.)
                            </dd>
                            <br>
                            <dd style="height: 200px; padding-left: 4%;">
                                <textarea name="f_str_curriculo" style="width: 912px" id="f_str_curriculo"
                                          rows="12">
                                </textarea>
                            </dd>
                        </dl>
                    </div>
                </fieldset>
            </div>
            <input type="submit" value="CADASTRAR">
        </div>
</form>

