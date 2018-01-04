jQuery(document).ready(function() {
	jQuery(document).on('click', '.t-datepicker', function(e) {
		jQuery(this).datetimepicker('destroy').datetimepicker({
			dateFormat : 'dd-mm-yy',
			timeFormat: 'HH:mm:ss'
		}).focus();
	});
});
