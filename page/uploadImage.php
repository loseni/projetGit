<form id="uploadForm" enctype="multipart/form-data"
action="upload.php" target="uploadFrame" method="post">
	<label for="uploadFile">Image :</label>
	<input id="uploadFile" name="uploadFile" type="file" />
	<br /><br />
	<input id="uploadSubmit" type="submit" value="Upload !" />
</form>

<div id="uploadInfos">
	<div id="uploadStatus">Aucun upload en cours</div>
	<iframe id="uploadFrame" name="uploadFrame"></iframe>
</div>