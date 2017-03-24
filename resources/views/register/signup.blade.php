<script>

</script>
<script>



</script>

<div class="modal fade login" id="loginModal" ng-app="sign_form" ng-controller="sign_form_ctrl">
    <div class="modal-dialog login animated">
        <div class="modal-content">
           <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">Login with</h4>
          </div>
          <div class="modal-body">  
              <div class="box">
                   <div class="content">
                      <div class="social">
                          <a class="circle github" href="/auth/github">
                              <i class="fa fa-github fa-fw"></i>
                          </a>
                          <a id="google_login" class="circle google" href="/auth/google_oauth2">
                              <i class="fa fa-google-plus fa-fw"></i>
                          </a>
                          <a id="facebook_login" class="circle facebook" href="/auth/facebook">
                              <i class="fa fa-facebook fa-fw"></i>
                          </a>
                      </div>
                      <div class="division">
                          <div class="line l"></div>
                            <span>or</span>
                          <div class="line r"></div>
                      </div>
                      <div class="error"></div>
                      <div class="form loginBox">
                          <form method="post" action="/login" accept-charset="UTF-8">
                          <input id="email" class="form-control" type="text" placeholder="Email"  ng-model="email">
                          <input id="password" class="form-control" type="password" placeholder="Password" ng-model="pass" >
                          <input class="btn btn-default btn-login" type="button" value="Login" ng-click="sign_in()">
                          </form>
                      </div>
                   </div>
              </div>
              <div class="box">
                  <div class="content registerBox" style="display:none;">
                   <div class="form">
                      <form method="post" html="{:multipart=>true}" data-remote="true" action="/register" accept-charset="UTF-8">
                      <input id="email" class="form-control" type="text" placeholder="Email" name="email" value="sadadsad">
                      <input id="password" class="form-control" type="password" placeholder="Password" name="password">
                      <input id="password_confirmation" class="form-control" type="password" placeholder="Repeat Password" name="password_confirmation">
                      <input class="btn btn-default btn-register" type="submit" value="Create account" name="commit">
                      </form>
                      </div>
                  </div>
              </div>
          </div>
          <div class="modal-footer">
              <div class="forgot login-footer">
                  <span>Looking to 
                       <a href="javascript: showRegisterForm();">create an account</a>
                  ?</span>
              </div>
              <div class="forgot register-footer" style="display:none">
                   <span>Already have an account?</span>
                   <a href="javascript: showLoginForm();">Login</a>
              </div>
          </div>        
        </div>
    </div>
</div>

