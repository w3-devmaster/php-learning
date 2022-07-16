<h6 class="text-info">เปลี่ยนรหัสผ่าน</h6>
<form action="changepassword.php" method="post">
    <input id="pass1" class="form-control form-control-sm mb-2" name="password" type="password"
        placeholder="รหัสผ่านปัจจุบัน">
    <input id="pass2" class="form-control form-control-sm mb-2" name="new_password" type="password"
        placeholder="รหัสผ่านใหม่">
    <input id="pass3" class="form-control form-control-sm mb-2" name="new_password2" type="password"
        placeholder="ยืนยันรหัสผ่านใหม่">
    <hr>
    <input id="show-pass" type="checkbox" onclick="showPass()"> แสดงรหัสผ่าน
    <hr>
    <input class="btn btn-sm btn-success" name="do" type="submit" value="เปลี่ยนรหัสผ่าน">
</form>