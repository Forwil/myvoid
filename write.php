<html>
<?php
	include_once("head.html");
?>
	<body>
		<?php
			include_once("header.php");
		?>
		<form action="/writecheck.php" method="post"> 
			<table>
				<tr>
					<td>Title</td>
					<td><input type="text" name="title"/>By <?php if(isset($_COOKIE["user"])) echo $_COOKIE["user"];?></td>
				</tr>
				<tr>
					<td>Content</td>
					<td><textarea name="content" id="tinyeditor" style="width: 400px; height: 200px"></textarea></td>
					<script>
					var editor = new TINY.editor.edit('editor', {
						id: 'tinyeditor',
						width: 584,
						height: 175,
						cssclass: 'tinyeditor',
						controlclass: 'tinyeditor-control',
						rowclass: 'tinyeditor-header',
						dividerclass: 'tinyeditor-divider',
						controls: ['bold', 'italic', 'underline', 'strikethrough', '|', 'subscript', 'superscript', '|',
							'orderedlist', 'unorderedlist', '|', 'outdent', 'indent', '|', 'leftalign',
							'centeralign', 'rightalign', 'blockjustify', '|', 'unformat', '|', 'undo', 'redo', 'n',
							'font', 'size', 'style', '|', 'image', 'hr', 'link', 'unlink', '|', 'print'],
						footer: true,
						fonts: ['Verdana','Arial','Georgia','Trebuchet MS'],
						xhtml: true,
						cssfile: 'custom.css',
						bodyid: 'editor',
						footerclass: 'tinyeditor-footer',
						toggle: {text: 'source', activetext: 'wysiwyg', cssclass: 'toggle'},
						resize: {cssclass: 'resize'}
					});
					</script>

				</tr>
				<tr>
					<td><input type="submit" value="Submit" style="height:50px;" onclick="editor.post();"></td>
				</tr>
			</table>
		</form>
			<?php
			include_once("footer.php");
			?>