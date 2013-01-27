<div id="login">
	<div class="tbuttons">
		<button class="btn btn-large btn-info btnlogin btn-block" type="button">Đăng nhập</button>
  		<button class="btn btn-large btnregister btn-block" type="button">Đăng ký</button>
  	</div>
  	<div class="login lgform">
  		<h2>Đăng nhập</h2>
  		<form class="form-horizontal" id="loginform">
		  <div class="control-group">
		    <label class="control-label" for="u3">Tài khoản</label>
		    <div class="controls">
		      <input type="text" id="u3" name="u3" required="required" placeholder="Tài khoản">
		    </div>
		  </div>
		  <div class="control-group">
		    <label class="control-label" for="p3">Mật khẩu</label>
		    <div class="controls">
		      <input type="password" required="required" id="p3" name="p3" placeholder="Mật khẩu">
		    </div>
		  </div>
		  <div class="control-group">
		    <div class="controls">
		      <button type="submit" class="btn btn-warning">Đăng nhập</button>
		      <button class="btn btnregister">Đăng ký</button>
		    </div>
		  </div>
		</form>
  	</div>
  	<div class="register lgform">
  		<h2>Đăng ký</h2>
  		<form class="form-horizontal" id="registerform">
		  <div class="control-group">
		    <label class="control-label" for="u">Tài khoản</label>
		    <div class="controls">
		      <input type="text" id="u" name="u" required="required" placeholder="Tài khoản">
		    </div>
		  </div>
		  <div class="control-group">
		    <label class="control-label" for="p">Mật khẩu</label>
		    <div class="controls">
		      <input type="password" required="required" id="p" name="p" placeholder="Mật khẩu">
		    </div>
		  </div>
		  <div class="control-group">
		    <label class="control-label" for="p2">Lặp lại</label>
		    <div class="controls">
		      <input type="password" required="required" id="p2" name="p2" placeholder="Lặp lại Mật khẩu">
		    </div>
		  </div>
		  <div class="control-group">
		    <div class="controls">
		      <button type="submit" class="btn btn-danger">Đăng ký</button>
		      <button class="btn btnlogin">Đăng nhập</button>
		    </div>
		  </div>
		</form>
  	</div>
  	<div class="lgform" id="rgsuccess">
  		<p class="alert alert-info">Bạn đã tạo tài khoản thành công. <a href="#" class="btnlogin">Đăng nhập</a></p>
  	</div>

  	<div class="lgform" id="rgfail">
  		<p class="alert alert-error">Có lỗi xảy ra. Vui lòng thử lại.<br />
  			<center>
  				<button type="submit" class="btn btn-danger btnregister">Đăng ký</button>
		      	<button class="btn btnlogin">Đăng nhập</button>
		    </center>
		</p>
  	</div>
</div>