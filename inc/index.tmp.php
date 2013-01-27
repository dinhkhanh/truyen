<?php 
    $books = get_books();
    $authors = get_authors();
    $cats = get_categories();
?>
<ul class="nav nav-tabs" id="myTab">
  <li class="active"><a href="#truyen">Truyện</a></li>
  <li><a href="#tacgia">Tác giả</a></li>
  <li><a href="#theloai">Thể loại</a></li>
  <li><a href="#timkiem">Tìm kiếm</a></li>
</ul>
<div class="tab-content">
  <div class="tab-pane fade in active" id="truyen">
    <button class='btn btn-success pull-right' id='add-truyen-btn' data-toggle="modal" data-target="#add-truyen-div">Thêm truyện</button>
    <div class="clear-fix"></div>
    <hr />
  	<ul class="items">
  	  <?php include_once('inc/truyen.tmp.php'); ?>
	  </ul>
  </div><!-- end truyen -->


  <div class="tab-pane fade" id="tacgia">
    <button class='btn btn-success pull-right' id='add-tacgia-btn' data-toggle="modal" data-target="#add-tacgia-div">Thêm tác giả</button>
    <div class="clear-fix"></div>
    <hr />
  	<ul class="items">
  	   <?php include_once('inc/tacgia.tmp.php'); ?>
	  </ul>
  </div> <!-- end tacgia -->
  <div class="tab-pane fade" id="theloai">
    <button class='btn btn-success pull-right' id='add-loai-btn' data-toggle="modal" data-target="#add-loai-div">Thêm thể loại</button>
    <div class="clear-fix"></div>
    <hr />
  	<ul class="items">
  	   <?php include_once('inc/loai.tmp.php'); ?> 
	  </ul>
  </div> <!-- end timkiem -->
  <div class="tab-pane fade" id="timkiem">
    <form class="form-inline" id='timkiemForm' name='timkiemForm'>      
      <select name='tg_id' id='itg_id'>
        <option value=''>Chọn tác giả</option>
        <?php foreach($authors as $author) {
          echo "<option value='{$author->tg_id}'>{$author->ten}</option>";
        }
        ?>
      </select>
      <select name='loai_id' id='iloai_id'>
        <option value=''>Chọn thể loại</option>
        <?php foreach($cats as $cat) {
          echo "<option value='{$cat->loai_id}'>{$cat->ten}</option>";
        }
        ?>
      </select>
      <div class="input-append">
        <input type="text" class="span3" name='letter' id='iletter' placeholder="Tên truyện">
        <button class="btn" type="submit">Tìm!</button>
        <button class="btn reset-timkiem">Thử lại</button>
      </div>
    </form>    
    <div class="clear-fix"></div>
    <hr />
    <div id='timkiemResult'><p class='alert alert-info'>Tuỳ chọn tìm kiếm rồi nhấn nút <strong>Tìm!</strong></p></div>
  </div> <!-- end timkiem -->
  <div class="clear-fix"></div>


  <!--- truyen modal -->
  <div id='imodals'>
    <?php 
      include_once('inc/modal-add.tmp.php');
      include_once('inc/modal-add-tacgia.php');
      include_once('inc/modal-add-loai.php');
      include_once('inc/modal-item.tmp.php');
      include_once('inc/modal-item-tacgia.php');
      include_once('inc/modal-item-loai.php');
    ?>
  </div>
</div>