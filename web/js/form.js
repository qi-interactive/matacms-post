window.matacms = window.matacms || {};
matacms.post = matacms.post || {
	customSlugGenerated: false
};  


$(window).ready(function() {
	$("#post-title").on("keyup", function() {
		if (matacms.post.customSlugGenerated == false)
			matacms.post.generateSlug()
	});

	$("#post-uri").on("keyup", function() {
		if (matacms.post.customSlugGenerated == false && 
			matacms.post.generatedSlug != $(this).val())
			matacms.post.customSlugGenerated = true;
	})
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