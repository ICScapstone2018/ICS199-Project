<?php
	require_once 'header.php';
?>
<style>
    .bs-wizard {margin-top: 40px; margin-right: 500px; text-align: right;}

    /*Form Wizard*/
    .bs-wizard {border-bottom: solid 1px #e0e0e0; padding: 0 0 10px 0; width: 100%;}
    .bs-wizard > .bs-wizard-step {padding: 0; position: relative;}
    .bs-wizard > .bs-wizard-step + .bs-wizard-step {}
    .bs-wizard > .bs-wizard-step .bs-wizard-stepnum {color: #595959; font-size: 13px; margin-bottom: 5px; font-weight: bold;}
    .bs-wizard > .bs-wizard-step .bs-wizard-info {color: #999; font-size: 10px;}
    .bs-wizard > .bs-wizard-step > .bs-wizard-dot {position: absolute; width: 30px; height: 30px; display: block; background: #b6ddc2; top: 45px; left: 50%; margin-top: -15px; margin-left: -15px; border-radius: 50%;}
    .bs-wizard > .bs-wizard-step > .bs-wizard-dot:after {content: ' '; width: 14px; height: 14px; background: #97aa40; border-radius: 50px; position: absolute; top: 8px; left: 8px; }
    .bs-wizard > .bs-wizard-step > .progress {position: relative; border-radius: 0px; height: 8px; box-shadow: none; margin: 20px 0;}
    .bs-wizard > .bs-wizard-step > .progress > .progress-bar {width:0px; box-shadow: none; background: #b6ddc2;}
    .bs-wizard > .bs-wizard-step.complete > .progress > .progress-bar {width:100%;}
    .bs-wizard > .bs-wizard-step.active > .progress > .progress-bar {width:50%;}
    .bs-wizard > .bs-wizard-step:first-child.active > .progress > .progress-bar {width:0%;}
    .bs-wizard > .bs-wizard-step:last-child.active > .progress > .progress-bar {width: 100%;}
    .bs-wizard > .bs-wizard-step.disabled > .bs-wizard-dot {background-color: #f5f5f5;}
    .bs-wizard > .bs-wizard-step.disabled > .bs-wizard-dot:after {opacity: 0;}
    .bs-wizard > .bs-wizard-step:first-child  > .progress {left: 50%; width: 50%;}
    .bs-wizard > .bs-wizard-step:last-child  > .progress {width: 50%;}
    .bs-wizard > .bs-wizard-step.disabled a.bs-wizard-dot{ pointer-events: none; }
    /*END Form Wizard*/
</style>

<div class="container">
    <div class="row">
        <div class="col-md-4"><h1>Create Account</h1></div>
        <br>
        <div class="col-md-4">
            <div class="row bs-wizard" style="border-bottom:0;">
                <div class="col-xs-3 bs-wizard-step complete">
                    <div class="text-center bs-wizard-stepnum">Login</div>
                    <div class="progress"><div class="progress-bar"></div></div>
                    <a href="#" class="bs-wizard-dot"></a>
                    <div class="bs-wizard-info text-center"></div>
                </div>

                <div class="col-xs-3 bs-wizard-step disabled"><!-- complete -->
                    <div class="text-center bs-wizard-stepnum">Shipping/Billing</div>
                    <div class="progress"><div class="progress-bar"></div></div>
                    <a href="#" class="bs-wizard-dot"></a>
                    <div class="bs-wizard-info text-center"></div>
                </div>

                <div class="col-xs-3 bs-wizard-step disabled"><!-- complete -->
                    <div class="text-center bs-wizard-stepnum">Payment</div>
                    <div class="progress"><div class="progress-bar"></div></div>
                    <a href="#" class="bs-wizard-dot"></a>
                    <div class="bs-wizard-info text-center"></div>
                </div>

                <div class="col-xs-3 bs-wizard-step disabled"><!-- active -->
                    <div class="text-center bs-wizard-stepnum">Purchase</div>
                    <div class="progress"><div class="progress-bar"></div></div>
                    <a href="#" class="bs-wizard-dot"></a>
                    <div class="bs-wizard-info text-center"></div>
                </div>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>
    <br><br>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <form action="/signup_post.php" method="post">
                <div class="form-group">
                    <label for="firstname">First Name:</label>
                    <input type="text" name="firstname" pattern="^[A-Z][a-z]+$" pattern="^[A-Z]'?[- a-zA-Z]+$" required class="form-control" id="firstname" placeholder="First Name">
                </div>                
                <div class="form-group">
                    <label for="lastname">Last Name:</label>
                    <input type="text" name="lastname" pattern="^[A-Z]'?[- a-zA-Z]+$" required class="form-control" id="lastname" placeholder="Last Name">
                </div>
                <div class="form-group">
                    <label for="email">Email Address:</label>
					<input type="email" name="email" required id="email" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="Email Address">	                    
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="pwd" name="password" placeholder="Password">
                </div><br>
                <button type="submit" class="btn btn-primary pull-right">Submit</button>
            </form>
        </div>
        <div class="col-md-4"></div>
    </div><br>
</div><br><br>

</body>
</html>