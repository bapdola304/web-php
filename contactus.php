<!DOCTYPE html>
<html lang="en">

    <link rel="stylesheet" href="css/Pretty-Registration-Form.css">
    <?php include('header.html') ?>
    <!-- content -->

    <div class="register-form">
        <div class="col-md-8" style="margin:auto">
            <form class="form-horizontal custom-form">
                <h1>CONTACT US</h1>
                <div class="form-group row">
                    <div class="col-sm-1"></div>
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="name" id="name">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-1"></div>
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Vi</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="vi" name="vi">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-1"></div>
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-6">
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-1"></div>
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Twitter</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="twitter" name="twitter">
                    </div>
                </div>
             </form>
             <center>
                     <button class="btn btn-primary"  name="submit" id="submit">Submit Form</button>
           </center>
        </div>
    </div>
    <!-- end-contact -->
    <?php include('footer.html') ?>
    

    <script type="text/javascript">
        $(document).ready(function(){
            $("#submit").click(function(){
                var ten = $("#name").val();
                var vi = $("#vi").val();
                var email = $("#email").val();
                var tw = $("#twitter").val();
                $.get("sendform.php",{ten:ten,vi:vi,email:email,tw:tw},function(data){
                    if(data == 1){
                       swal({
                          type: 'error',
                          title: 'Vui Lòng Nhập Đầy Đủ!',
                          footer: '<a href>Why do I have this issue?</a>'
                        })
                    }else{
                        swal({
                          type: 'success',
                          title: 'ok thanh cong!',
                          footer: '<a href>Why do I have this issue?</a>'
                        })
                    }
                   
                });
            });
        });
    </script>
</html>
