<?php 
foreach ($authors as $author):
  
  echo "
  <div id='modaltacgia-{$author->tg_id}' class='modal myModal hide fade' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
    <form class='form-horizontal updateForm' id='updateTacgiaForm-{$author->tg_id}'>
      <input type='hidden' value='2' name='itype' id='itype'>
      <input type='hidden' value='{$author->tg_id}' name='tg_id' id='tg_id'>
      <div class='modal-header'>
        <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>
        <h3>{$author->ten}</h3>
      </div>
      <div class='modal-body'>
        <div class='control-group'>
          <label class='control-label' for='ten'>Tên tác giả</label>
          <div class='controls'>
            <input type='text' id='ten' name='ten'  class='span5' required='required' value='{$author->ten}'>
          </div>
        </div>
        <div class='control-group'>
          <label class='control-label' for='hinh'>Link hình</label>
          <div class='controls'>
            <input type='text' id='hinh-tacgia-{$author->tg_id}' name='hinh' class='span5' value='{$author->hinh}'>
          </div>
        </div>
        <div class='control-group'>
          <label class='control-label' for='excerpt'>Mô tả</label>
          <div class='controls'>
            <textarea id='excerpt' name='excerpt' rows='4' class='span5'>{$author->excerpt}</textarea>
          </div>
        </div>
        <div class='control-group'>
          <label class='control-label' for='link'>Link</label>
          <div class='controls'>
            <input id='link' type='text' name='link' class='span5' value='{$author->link}'>
          </div>
        </div>
      </div>
      <div class='modal-footer'>
        <button class='btn btn-primary submit' type='submit' id='tacgiaSubmit-{$author->tg_id}' data-tacgia-id='{$author->tg_id}'>Lưu thay đổi</button>       
        <button class='btn' data-dismiss='modal' aria-hidden='true'>Đóng</button>
        <form method='post' enctype='multipart/form-data' class='imagesupload pull-left'>  
            <input type='file' name='images' class='tacgiaimages pull-left' data-id='{$author->tg_id}' id='images-tacgia-{$author->tg_id}' accept='image/*'/>
            <button type='button' class='btn btn-success btn-tacgia-file pull-left' data-id='{$author->tg_id}'>Chọn ảnh</button>
            <span class='badge badge-notify badge-warning pull-left' id='badge-tacgia-{$author->tg_id}'></span>
        </form>  
      </div> 
    </form>
  </div>
  ";
  endforeach;