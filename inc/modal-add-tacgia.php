<?php   
  echo "
  <div id='add-tacgia-div' class='modal myModal hide fade' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
    <form class='form-horizontal addForm' id='addTruyenForm'>
      <input type='hidden' value='2' name='itype' id='itype'>
      <div class='modal-header'>
        <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>
        <h3>Thêm tác giả</h3>
      </div>
      <div class='modal-body'>
        <div class='control-group'>
          <label class='control-label' for='ten'>Tên tác giả</label>
          <div class='controls'>
            <input type='text' id='ten' name='ten'  class='span5' required='required' value=''>
          </div>
        </div>
        <div class='control-group'>
          <label class='control-label' for='hinh'>Link hình</label>
          <div class='controls'>
            <input type='text' id='hinh-tacgia-{$author->tg_id}' name='hinh' class='span5' value=''>
          </div>
        </div>
        <div class='control-group'>
          <label class='control-label' for='excerpt'>Mô tả</label>
          <div class='controls'>
            <textarea id='excerpt' name='excerpt' rows='4' class='span5'></textarea>
          </div>
        </div>
        <div class='control-group'>
          <label class='control-label' for='link'>Link</label>
          <div class='controls'>
            <input id='link' type='text'  class='span5' name='link' value=''>
          </div>
        </div>
      </div>
      <div class='modal-footer'>
        <button class='btn btn-primary submit' type='submit' id='addSubmit'>Lưu thay đổi</button>       
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