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