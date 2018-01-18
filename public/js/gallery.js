$(function() {
    	$('img').on('click', function() {
			$('.enlargeImageModalSource').attr('src', $(this).attr('data-src'));
			$('#enlargeImageModal').modal('show');
		});
});
