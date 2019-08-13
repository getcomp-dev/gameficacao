{extends 'layout.tpl'}

{block name=content}
    <div class="nova-oportunidade">
        <h4 align="center">Cadastrar Oportunidade</h4>

        {if isset($error)}
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {$error}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        {/if}
        {if isset($success)}
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Oportunidade cadastrada com sucesso!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        {/if}

        <form method="POST" action="{base_url}/admin/criar-oportunidade" enctype="multipart/form-data">

            <div class="form-row">
                <div class="custom-file">
                    <label class="custom-file-label" for="pdf-oportunidade">PDF da oportunidade:</label>
                    <input  type="file" class="custom-file-input" id="pdf-oportunidade" name="pdf_oportunidade">
                </div>
            </div>

            <div class="form-row">
                <div class="col-6">
                    <label for="tipo_oportunidade">Escolha o tipo:</label>
                    <select class="form-control" name="tipo_oportunidade">
                        <option value="0">Iniciação Científica</option>
                        <option value="1">Treinamento Profissional</option>
                        <option value="2">Estágio</option>
                    </select>
                </div>

                <div style="margin-left: 10%;" class="col-3">
                    <label for="numero_vagas">Quantidade de vagas:</label>
                    <input type="number" class="form-control" name="numero_vagas">
                </div>
            </div>

            <div class="form-row">
                <label for="nome_professor">Nome do Professor que está oferecendo:</label>
                <input class="form-control" type="text" name="nome_professor">
            </div>

            <label style="margin-top: 5%" for="remuneracao">Remuneração:</label for="remuneracao">
            <div class="form-row" style="margin-top: 0">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" name="tem_remuneracao" value="voluntario" type="radio">
                    <label for="tem_remuneracao" class="form-check-label">Voluntário</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" name="tem_remuneracao" value="remunerado" type="radio">
                    <label for="tem_remuneracao" class="form-check-label">Escolher Valor:</label>
                </div>
                <input type="number" class="form-control col-4" name="valor_remuneracao">
            </div>


            <div class="form-row">
                <div class="col-4">
                    <label for="validade">Data Limite para Inscrição:</label>
                    <input type="date" name="validade" class="form-control">
                </div>
            </div>

            <div class="form-row">
                <label for="requisitos">Pré-Requisitos:</label>
                <select name="pre_requisitos[]" multiple="multiple" class="form-control pre-requisitos">
                    {foreach $disciplinas as $disciplina}
                        <option value="{$disciplina->getId()}">{$disciplina->getCodigo()}</option>
                    {/foreach}
                </select>
            </div>

            <div class="form-row">
                <label for="descricao">Descrição da Oportunidade</label>
                <textarea class="form-control" name="descricao"  cols="30" rows="10"></textarea>
            </div>

            <button type="submit" class="btn btn-primary" style="margin-top: 5%;">Cadastrar Oportunidade</button>
        </form>
    </div>

{/block}

{block name="javascript"}
    <script>
        $(document).ready(function() {
            $('.pre-requisitos').select2();
        });
    </script>

{/block}