<?php
foreach ($cats as $cat):
	$count = get_category_post_count($cat->loai_id);
	echo "<li class='item pull-left'>
				<a href='#' class='apopover' data-placement='right' data-content='{$cat->excerpt}' data-title='{$cat->ten}' rel='clickover'>
          			<img class='thumbnail' src='{$cat->hinh}' /></a>
				<h2 class='alert alert-success'>
					{$cat->ten}
				</h2>
				<p class='alert alert-info'><i class='icon-book'></i> {$count->post_count} tác phẩm</p>
        <div class='btn-group toolbar'>
          <button class='btn btn-mini'>
            <a href='{$cat->link}' target='_blank'>
              <i class='icon-share'></i>Đọc
            </a>
          </button>
          <button class='btn btn-mini'>
            <a class='modalloaitrigger' href='#modalloai-{$cat->loai_id}' data-id='{$cat->loai_id}'>
              <i class='icon-edit'></i>Sửa
            </a>
          </button>
          <button class='btn btn-mini'>
            <a href='#' data-id='{$cat->loai_id}' class='delete' data-type='3'>
              <i class='icon-trash'></i>Xóa
            </a>
          </button>
        </div>
				<div class='clear-fix'></div>
			</li>
		";
endforeach;
?>