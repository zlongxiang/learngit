/**
 * Created by longxiangde on 2017/1/3.
 */
function sub() {
    var ou=document.myForm.username;
    var op = document.myForm.password;
    var oc = document.myForm.code;
    if(ou.value=='' || op.value=='' || oc.value==''){
        alert('请填写完整！');
    }else{
        document.myForm.submit();
    }
}