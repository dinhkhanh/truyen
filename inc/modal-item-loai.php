<?php 
foreach ($cats as $cat):  
  echo "
  <div id='modalloai-{$cat->loai_id}' class='modal myModal hide fade' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
    <form class='form-horizontal updateForm' id='updateLoaiForm-{$cat->loai_id}'>
      <input type='hidden' value='3' name='itype' id='itype'>
      <input type='hidden' value='{$cat->loai_id}' name='loai_id' id='loai_id'>
      <div class='modal-header'>
        <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>
        <h3>{$cat->ten}</h3>
      </div>
      <div class='modal-body'>
        <div class='control-group'>
          <label class='control-label' for='ten'>Tên tác giả</label>
          <div class='controls'>
            <input type='text' id='ten' name='ten'  class='span5' required='required' value='{$cat->ten}'>
          </div>
        </div>
        <div class='control-group'>
          <label class='control-label' for='hinh'>Link hình</label>
          <div class='controls'>
            <input type='text' id='hinh-loai-{$cat->loai_id}' name='hinh' class='span5' value='{$cat->hinh}'>
          </div>
        </div>
        <div class='control-group'>
          <label class='control-label' for='excerpt'>Mô tả</label>
          <div class='controls'>
            <textarea id='excerpt' name='excerpt' rows='4' class='span5'>{$cat->excerpt}</textarea>
          </div>
        </div>
      </div>
      <div class='modal-footer'>
        <button class='btn btn-primary submit' type='submit' id='tacgiaSubmit-{$cat->loai_id}' data-tacgia-id='{$cat->loai_id}'>Lưu thay đổi</button>       
        <button class='btn' data-dismiss='modal' aria-hidden='true'>Đóng</button>
      </form>
        <form method='post' enctype='multipart/form-data' class='imagesupload pull-left'>  
            <input type='file' name='images' class='loaiimages pull-left' data-id='{$cat->loai_id}' id='images-loai-{$cat->loai_id}' accept='image/*'/>
            <button type='button' class='btn btn-success btn-loai-file pull-left' data-id='{$cat->loai_id}'>Chọn ảnh</button>
            <span class='badge badge-notify badge-warning pull-left' id='badge-loai-{$cat->loai_id}'></span>
        </form>  
      </div>    
    </form>
  </div>
  ";
  endforeach;