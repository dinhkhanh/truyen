<?php
foreach ($authors as $author):
	$count = get_author_post_count($author->tg_id);
	echo "<li class='item pull-left'>
				<a href='#' class='apopover' data-placement='right' data-content='{$author->excerpt}' data-title='{$author->ten}' rel='clickover'>
          			<img class='thumbnail' src='{$author->hinh}' /></a>
				<h2 class='alert alert-info'>
          {$author->ten}
        </h2>
        <p class='alert alert-success'><i class='icon-book'></i> {$count->post_count} tác phẩm</p>
        <div class='btn-group toolbar'>
          <button class='btn btn-mini'>
            <a href='{$author->link}' target='_blank'>
              <i class='icon-share'></i>Đọc
            </a>
          </button>
          <button class='btn btn-mini'>
            <a class='modaltacgiatrigger' href='#modaltacgia-{$author->tg_id}' data-id='{$author->tg_id}'>
              <i class='icon-edit'></i>Sửa
            </a>
          </button>
          <button class='btn btn-mini'>
            <a href='#' data-id='{$author->tg_id}' class='delete' data-type='2'>
              <i class='icon-trash'></i>Xóa
            </a>
          </button>
        </div>
				<div class='clear-fix'></div>
			</li>
		";
endforeach;
?>