var fd;
function ebook_store_popup(callback, obj) {
	jQuery(function() {
		jQuery('body *').css('z-index','auto');
		jQuery('.lean-overlay').css('z-index','100000');
		jQuery('#ebook_formData').css('z-index','100001');
		fd = jQuery('#ebook_formData').first();
		
		//var closeButton = jQuery('<div class="closeModal"><a href="javascript:fd.trigger(\'closeModal\');">CLOSE BUTTON</a></div>');
		//
		//var closeButton = jQuery('<button id="closeModal" class="btn btn-primary function_set" onclick="fd.trigger(\'closeModal\');" name="closeModal">Close</button>');
		//.appendTo(jQuery('button.btn-primary', fd));

		//jQuery('body').append(closeButton);
		//console.log(closeButton);

	    fd.easyModal({
		//top: 100,
		//autoOpen: true,
		overlayOpacity: 0.3,
		overlayColor: "#333",
		overlayClose: true,
		closeOnEscape: true
	});
	    jQuery.get('index.php?task=formContent',function(data) {
	    	//closeButton.after("button#submit",data);
	    	fd.html(data);
	    	fd.fadeIn().trigger('openModal');
	    	jQuery('button[name="submit"]:not(.function_set)').click(function(e) {
	    		e.preventDefault();
	    		var data = jQuery('form',fd).first().serialize();
	    		data = data + '&md5_nonce=' + jQuery(obj).attr('data-md5_nonce');
	    		fd.fadeOut();
	    		jQuery.post('index.php?task=ebook_store_form_input',data,function(ret) {
					fd.trigger('closeModal');
					callback();
					jQuery('.lean-overlay').remove();
	    		});
	   		}).addClass('function_set');
	    });
	});
	jQuery('.lean-overlay').click(function (e){
		jQuery('.lean-overlay').remove();
	});
}

jQuery(document).ready(function () {
	jQuery('.ebook_buy_link').click(function(e) {
		e.preventDefault();
		// jQuery('body *').css('z-index','auto');			
		// jQuery('#ebook_formData').css('z-index',10001);
		jQuery('.lean-overlay').css('z-index',10000).remove();

	});
	jQuery('.bookshelf .inner-right').css('height','auto');
});