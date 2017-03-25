<div class="modal fade login" id="loginModal" ng-app="sign_form" ng-controller="sign_form_ctrl">
    <div class="modal-dialog login animated">
        <div class="modal-content">
           <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">Đăng Nhập Với</h4>
          </div>
          <div class="modal-body">  
              <div class="box">
                   <div class="content">
                      <div class="social">
                          <a id="google_login" class="circle google" href="/auth/google_oauth2">
                              <i class="fa fa-google-plus fa-fw"></i>
                          </a>
                          <a id="facebook_login" class="circle facebook" href="/auth/facebook">
                              <i class="fa fa-facebook fa-fw"></i>
                          </a>
                      </div>
                      <div class="division">
                          <div class="line l"></div>
                            <span>Hoặc</span>
                          <div class="line r"></div>
                      </div>
                      <div class="error"></div>
                      <div class="form loginBox">
                          <form method="post" accept-charset="UTF-8">
                          <input id="email" class="form-control" type="text" placeholder="Email"  ng-model="email">
                          <input id="password" class="form-control" type="password" placeholder="Mật khẩu" ng-model="pass" >
                          <input class="btn btn-default btn-login" type="button" value="Đăng Nhập" ng-click="sign_in()">
                          </form>
                      </div>
                   </div>
              </div>
              <div class="box">
                  <div class="content registerBox" style="display:none;">
                   <div class="form">
                      <form method="post" html="{:multipart=>true}" data-remote="true" accept-charset="UTF-8">
                        <input class="form-control" type="text" placeholder="Email" ng-model="email_reg">
                        <input class="form-control" type="password" placeholder="Mật Khẩu" ng-model="pass_reg">
                        <input class="form-control" type="password" placeholder="Lặp Lại Mật Khẩu" ng-model="repass_reg">
                        <input class="form-control" type="text" placeholder="Họ, tên" ng-model="name_reg">
                        <input class="form-control" type="text" placeholder="Điện thoại" ng-model="phone_reg">
                        <input class="btn btn-default btn-register" type="button" value="Tạo tài khoản" ng-click="sign_up()">
                      </form>
                      </div>
                  </div>
              </div>
          </div>
          <div class="modal-footer">
              <div class="forgot login-footer">
                  <span>Chú ý
                       <a href="javascript: showRegisterForm();">Tạo tài khoản mới</a>
                  </span>
              </div>
              <div class="forgot register-footer" style="display:none">
                   <span>Bận đã có tài khoản chưa?</span>
                   <a href="javascript: showLoginForm();">Đăng nhập</a>
              </div>
          </div>        
        </div>
    </div>
</div>