
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