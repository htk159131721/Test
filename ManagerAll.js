jQuery.noConflict()


jQuery(document).ready(function($) {
	$("#select_picLienquan").change(function($) {
        var number = document.getElementById('select_picLienquan').value;
				jQuery.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
				}
		});
		jQuery.ajax({
				type:"POST",
				url:url + "/" + number,
				success: function(answer)
				{
					
				}
			});
    });
	
	$('#frm-sp').validate({
		errorElement:'span',
		rules:
		{
			filAvarta:
			{
				required: true,
			},
			cke_tarea_motachitiet:
			{
				required:true,
				},
		},
		messages:
		{
			filAvarta:
			{
				required: "Vui lòng chọn Ảnh đại diện cho sản phẩm.",
				},
			cke_tarea_motachitiet:
			{
				required:"Vui lòng nhập Mô tả chi tiết cho sản phẩm.",
				},
		},
		submitHandler: function(form)
		{
			$.ajax({
				
			});
		}
		});
		return false;
});