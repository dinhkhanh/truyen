/*
L.A.M.P 2013
Duy Tan Unversity
International School
Copyright 2013 Tran Dinh Khanh
tdk
*/
(function(){
	$('#myTab a').click(function (e) {
		e.preventDefault();
	    $(this).tab('show');
	})
	$('#add-truyen-btn').on('click', function(e){
		$('.controls').children('input').val('');
		$('.badge').empty();
	})
	$('#add-tacgia-btn').on('click', function(e){
		$('.controls').children('input').val('');
		$('.badge').empty();
	})
	$('#add-loai-btn').on('click', function(e){
		$('.controls').children('input').val('');
		$('.badge').empty();
	})
	action = function (){
		$('.modaltruyentrigger').click(function (e){
			e.preventDefault();
			id = $(this).attr('data-id');
			$('#modaltruyen-'+id).modal('toggle');
		})
		$('.modaltacgiatrigger').click(function (e){
			e.preventDefault();
			id = $(this).attr('data-id');
			$('#modaltacgia-'+id).modal('toggle')
		})
		$('.modalloaitrigger').click(function (e){
			e.preventDefault();
			id = $(this).attr('data-id');
			$('#modalloai-'+id).modal('toggle')
		})
		$('[rel="clickover"]').clickover();
		$('.toolbar button a.delete').on('click', function(e){
		e.preventDefault();
		type = $(this).attr('data-type');
		id = $(this).attr('data-id');
		btn = $(this);
		$.ajax({
			type: 'GET',
			url: 'delete.php',
			dataType: 'json',
			data: 'itype='+type+'&id='+id,
			success: function(response){
				btn.html('Đang xóa');
				setTimeout(function(){
						btn.parent().parent().parent().empty();
				}, 1000);
			}
		});
	})
	}
	action(); //init

	$('.btnlogin').on('click', function(e){
		e.preventDefault();
		$('.tbuttons').fadeOut(200);
		$('.lgform').fadeOut(200);
		$('.login').delay(200).fadeIn();
	})
	$('.btnregister').on('click', function(e){
		e.preventDefault();
		$('.tbuttons').fadeOut(200);
		$('.lgform').fadeOut(200);
		$('.register').delay(200).fadeIn();
	})
	$('#registerform').on('submit', function(e){
		e.preventDefault();
		if($("#p").val() == $("#p2").val()) {
			$.ajax({
				type: 'GET',
				url: "register.php",
				dataType: "json",
				data: $(this).serialize(),
				success: function(response){			
					$('.tbuttons').fadeOut(200);
					$('.lgform').fadeOut(200);
					console.log(response['code']);
					if(response['code'] == 1 || response['code'] == '1'){
						$("#rgsuccess").delay(200).fadeIn();
					}
					else {
						$("#rgfail").delay(200).fadeIn();
					}
				}
			});
		}
	})
	$('#loginform').on('submit', function(e){
		e.preventDefault();
		$.ajax({
			type: 'GET',
			url: "login.php",
			dataType: "json",
			data: $(this).serialize(),
			success: function(response){			
				$('.tbuttons').fadeOut(200);
				$('.lgform').fadeOut(200);
				console.log(response['code']);
				if(response['code'] == 1 || response['code'] == '1'){
					$("#rgsuccess").delay(200).fadeIn().empty().append('<p class="alert alert-info">Bạn đã đăng nhập thành công. Nhấn <a href="/">vào đây</a> để về trang chủ.</p>');
					setTimeout(function(){
						window.location = 'http://127.0.0.1/';
					}, 1300)
				}
				else {
					$("#rgfail").delay(200).fadeIn();
				}
			}
		});
	})
	$('.updateForm').on('submit', function(e){
		e.preventDefault();
		btn = $(this).children().children('button.submit');	
		btn.delay(100).html('Đang cập nhật');
		$.ajax({
			type: 'GET',
			url: 'update.php',
			dataType: 'json',
			data: $(this).serialize(),
			success: function(response){
				if(response['code']== true || response['code']=="true"){
					btn.html('Đã cập nhật');
					setTimeout(function(){
						$('.myModal').modal('hide');					
					}, 1000);
					setTimeout(function(){
						window.location = 'http://127.0.0.1/';
					}, 1300)
				}
				else {
					btn.html('Có lỗi xảy ra');
				}
			}
		});
	})

	$('.addForm').on('submit', function(e){
		e.preventDefault();
		btn = $(this).children().children('button#addSubmit');
		btn.delay(100).html('Đang thêm');
		$.ajax({
			type: 'GET',
			url: 'add.php',
			dataType: 'json',
			data: $(this).serialize(),
			success: function(response){
				if(response['code']== true || response['code']=="true"){
					btn.html('Đã thêm');
					setTimeout(function(){
						$('.myModal').modal('hide');					
					}, 1000);
					setTimeout(function(){
						window.location = 'http://127.0.0.1/';
					}, 1300);
				}
				else {
					btn.html('Có lỗi xảy ra');
				}
			}
		});
	})
	$('.reset-timkiem').on('click', function(e){
		e.preventDefault();
		$('#iloai_id').children().removeAttr('selected');
		$('#iloai_id').children(1).attr('selected');
		$('#itg_id').children().removeAttr('selected');
		$('#itg_id').children(1).attr('selected');
		$('#iletter').val('');
	})
	$('#timkiemForm').on('submit', function(e){
		e.preventDefault();
		form = $('#timkiemResult');
		formHidden = $('#timkiemResultHidden');
		tg = $('#itg_id');
		loai = $('#iloai_id');
		$.ajax({
			type: 'GET',
			url: 'show.php',
			dataType: 'html',
			data: $(this).serialize(),
			success: function(response){
				form.empty().append(response);
				$('.modaltacgiatrigger').unbind();
				$('.modalloaitrigger').unbind();
				$('.modaltruyentrigger').unbind();
				action();
			}
		});	
	})
	$('#iloai_id').on('change', function(){
		$('#timkiemForm').submit();
	})
	$('#itg_id').on('change', function(){
		$('#timkiemForm').submit();
	})
	$('#iletter').on('keyup', function(){
		$('#timkiemForm').submit();
	})

	$('.btn-truyen-file').on('click', function(e){
		id = $(this).attr('data-id');
		$('#images-truyen-'+id).click();
	})
	$('.btn-loai-file').on('click', function(e){
		id = $(this).attr('data-id');
		$('#images-loai-'+id).click();
	})
	$('.btn-tacgia-file').on('click', function(e){
		id = $(this).attr('data-id');
		$('#images-tacgia-'+id).click();
	})
	$('.truyenimages').on('change', function(e){
		e.preventDefault();
		id = $(this).attr('data-id');
		var input = document.getElementById("images-truyen-"+id), 	
			formdata = false;
			console.log(input);

		if (window.FormData) {
	  		formdata = new FormData();
		}
		
		var i = 0, len = this.files.length, img, reader, file;

		for ( ; i < len; i++ ) {
			file = this.files[i];

			if (!!file.type.match(/image.*/)) {
				if ( window.FileReader ) {
					reader = new FileReader();
					reader.onloadend = function (e) { 
						console.log('loaded');
					};
					reader.readAsDataURL(file);
				}
				if (formdata) {
					formdata.append("images[]", file);
				}
			}	
		}

		if (formdata) {
			$.ajax({
				url: "upload.php",
				type: "POST",
				data: formdata,
				processData: false,
				contentType: false,
				success: function (res) {
					$('#hinh-truyen-'+id).val(res);				
					$('#badge-truyen-'+id).empty().html('Upload thành công');
				}
			});
		}
	})
	$('.tacgiaimages').on('change', function(e){
		e.preventDefault();
		id = $(this).attr('data-id');
		var input = document.getElementById("images-tacgia-"+id), 	
			formdata = false;
			console.log(input);

		if (window.FormData) {
	  		formdata = new FormData();
		}
		
		var i = 0, len = this.files.length, img, reader, file;

		for ( ; i < len; i++ ) {
			file = this.files[i];

			if (!!file.type.match(/image.*/)) {
				if ( window.FileReader ) {
					reader = new FileReader();
					reader.onloadend = function (e) { 
						console.log('loaded');
					};
					reader.readAsDataURL(file);
				}
				if (formdata) {
					formdata.append("images[]", file);
				}
			}	
		}

		if (formdata) {
			$.ajax({
				url: "upload.php",
				type: "POST",
				data: formdata,
				processData: false,
				contentType: false,
				success: function (res) {
					$('#hinh-tacgia-'+id).val(res);				
					$('#badge-tacgia-'+id).empty().html('Upload thành công');
				}
			});
		}
	})
	$('.loaiimages').on('change', function(e){
		e.preventDefault();
		id = $(this).attr('data-id');
		var input = document.getElementById("images-loai-"+id), 	
			formdata = false;
			console.log(input);

		if (window.FormData) {
	  		formdata = new FormData();
		}
		
		var i = 0, len = this.files.length, img, reader, file;

		for ( ; i < len; i++ ) {
			file = this.files[i];

			if (!!file.type.match(/image.*/)) {
				if ( window.FileReader ) {
					reader = new FileReader();
					reader.onloadend = function (e) { 
						console.log('loaded');
					};
					reader.readAsDataURL(file);
				}
				if (formdata) {
					formdata.append("images[]", file);
				}
			}	
		}

		if (formdata) {
			$.ajax({
				url: "upload.php",
				type: "POST",
				data: formdata,
				processData: false,
				contentType: false,
				success: function (res) {
					$('#hinh-loai-'+id).val(res);
					$('#badge-loai-'+id).empty().html('Upload thành công');
				}
			});
		}
	})
}());