<form class="ui form new_post_container" enctype="multipart/form-data" id="new_post_container">
    <h1>Nueva publicación</h1>
    <p><b>Nombre de la publicación</b></p>
    <div class="ui input">
        <input type="text" class="txtNamePost" name="txtNamePost" placeholder="Nombre de la publicación">
    </div>

    <p><b>Categoría</b></p>
         <div class="field">
            <select class="txtCategoryPost" name="txtCategoryPost">
                <option value="0">--SELECCIONAR UNA CATEGORIA--</option>
            </select> 
        </div>
    
    <p><b>Seleccione una imagen</b></p>
    <div class="ui input">
        <input type="file" class="image_file" name="image_file">
    </div>

    <p><b>Publicación</b></p>
    <textarea name="txtDescription" id="txtDescription"></textarea>

    <button class="ui blue basic button">Subir publicación</button>

    <p class="clearfix"></p>

</form>
