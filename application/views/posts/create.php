<h2><?= $title ?></h2>
<?php echo validation_errors();?>



<?php echo form_open_multipart('posts/create');?>
  <div class="form-group">
    <label >Titel</label>
    <input type="text" class="form-control" name="title" placeholder="Voeg een titel toe">
    <small id="emailHelp" class="form-text text-muted">Voeg hier je titel toe, dit komt op de homepagina.</small>
  </div>
  <div class="form-group">
    <label >Tekst</label>
    <textarea id="editor1" class="form-control" name="body" placeholder="Voeg tekst toe" ></textarea>
    <small class="form-text text-muted">Voeg hier de inhoud toe, hou het onder de 500 tekens.</small>
  </div>

  <div class="form-group">
	  <label>Category</label>
	  <select name="category_id" class="form-control">
		  <?php foreach($categories as $category): ?>
		  	<option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
		  <?php endforeach; ?>
	  </select>
    <p></p>
  <div class="form-group">
	  <label>Foto toevoegen</label>
	  <input type="file" name="userfile" size="20">
  </div>
  <button type="submit" class="btn btn-primary">Plaatsen</button>
</form>