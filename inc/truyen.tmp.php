<?php
	foreach ($books as $book):
    $icat = get_category_by_id($book->loai_id);
    $itacgia = get_author_by_id($book->tg_id);
		echo "<li class='item pull-left'>
				<a href='#' class='apopover' data-placement='right' data-content='{$book->excerpt}' data-title='{$icat->ten}' rel='clickover'>
          <img class='thumbnail' src='{$book->hinh}' /></a>
				<h2 class='alert alert-error'>
          {$book->ten}
        </h2>
        <p class='alert alert-info center'><i class='icon-user'></i> <small>{$itacgia->ten}</small></p>
        <div class='btn-group toolbar'>
          <button class='btn btn-mini'>
            <a href='{$book->link}' target='_blank'>
              <i class='icon-share'></i>Đọc
            </a>
          </button>
          <button class='btn btn-mini'>
            <a class='modaltruyentrigger' href='#modaltruyen-{$book->truyen_id}' data-id='{$book->truyen_id}'>
              <i class='icon-edit'></i>Sửa
            </a>
          </button>
          <button class='btn btn-mini'>
            <a href='#' data-id='{$book->truyen_id}' class='delete' data-type='1'>
              <i class='icon-trash'></i>Xóa
            </a>
          </button>
        </div>
				<div class='clear-fix'></div>
			</li>
		";
	endforeach;
?>