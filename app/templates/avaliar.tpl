{extends 'layout.tpl'}
{block name=content}
    <div class="form-row">
        <form action="{base_url}/formulario" method="post">
            <label for="teste">Nome Professor:</label>
            <input id="teste" type="text" name="teste" class="form-control">

            <button type="submit">Enviar</button>
        </form>
    </div>
{/block}