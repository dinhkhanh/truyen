<?php 
echo "
<div id='add-truyen-div' class='modal myModal hide fade' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
  <form class='form-horizontal addForm' id='add-item'>
    <input type='hidden' value='1' name='itype' id='itype'>
    <div class='modal-header'>
      <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>
      <h3>Thêm truyện</h3>
    </div>
    <div class='modal-body'>
      <div class='control-group'>
        <label class='control-label' for='ten'>Tên truyện</label>
        <div class='controls'>
          <input type='text' id='ten' name='ten'  class='span5' required='required' value=''>
        </div>
      </div>
      <div class='control-group'>
        <label class='control-label' for='hinh'>Link hình</label>
        <div class='controls'>
          <input type='text' id='hinh-truyen-{$book->truyen_id}' name='hinh' class='span5' value=''>
        </div>
      </div>
      <div class='control-group'>
        <label class='control-label' for='excerpt'>Mô tả</label>
        <div class='controls'>
          <textarea id='excerpt' name='excerpt' rows='4' class='span5'></textarea>
        </div>
      </div>
      <div class='control-group'>
        <label class='control-label' for='tg_id'>Tác giả</label>
        <div class='controls'>
          <select name='tg_id' id='tg_id'>";

          foreach ($authors as $author) {
            echo "<option value='{$author->tg_id}'>{$author->ten}</option>";
          }

          echo "
          </select>
        </div>
      </div>
      <div class='control-group'>
        <label class='control-label' for='loai_id'>Thể loại</label>
        <div class='controls'>
          <select name='loai_id' id='loai_id'>";

          foreach ($cats as $theloai) {
            echo "<option value='{$theloai->loai_id}'>{$theloai->ten}</option>";
          }

          echo "
          </select>
        </div>
      </div>
      <div class='control-group'>
        <label class='control-label' for='link'>Link</label>
        <div class='controls'>
          <input id='link' type='text' class='span5'  name='link' value=''>
        </div>
      </div>
    </div>
    <div class='modal-footer'>
      <button class='btn btn-primary submit' type='submit' id='addSubmit'>Thêm truyện</button>      
      <button class='btn' data-dismiss='modal' aria-hidden='true'>Đóng</button>
      <form method='post' enctype='multipart/form-data' class='imagesupload pull-left'>  
            <input type='file' name='images' class='truyenimages pull-left' data-id='{$book->truyen_id}' id='images-truyen-{$book->truyen_id}' accept='image/*'/>
            <button type='button' class='btn btn-success btn-truyen-file pull-left' data-id='{$book->truyen_id}'>Chọn ảnh</button>
            <span class='badge badge-notify badge-warning pull-left' id='badge-truyen-{$book->truyen_id}'></span>
        </form> 
    </div>      
  </form>
</div>
";