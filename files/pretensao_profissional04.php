
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
