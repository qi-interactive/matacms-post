window.matacms = window.matacms || {};
matacms.post = matacms.post || {
	customSlugGenerated: false
};  


$(window).ready(function() {

	if (matacms.post.isNewModel()) {
		$("#post-title").on("keyup", function() {
			if (matacms.post.customSlugGenerated == false)
				matacms.post.generateSlug()
		});

		$("#post-uri").on("keyup", function() {
			if (matacms.post.customSlugGenerated == false && 
				matacms.post.generatedSlug != $(this).val())
				matacms.post.customSlugGenerated = true;
		})
	}
})

matacms.post.generateSlug = function() {
	matacms.post.generatedSlug = matacms.post.convertToSlug($("#post-title").val());
	$("#post-uri").val(matacms.post.generatedSlug);
}

matacms.post.convertToSlug = function(text){
	return text
	.toLowerCase()
	.replace(/ /g,'-')
	.replace(/[^\w-]+/g,'');
}

matacms.post.isNewModel = function() {
	return window.location.href.indexOf("update") == -1 && 
	window.location.href.indexOf("create") > -1;
}