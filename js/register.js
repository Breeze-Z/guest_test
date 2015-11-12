//点击头像，触发单击事件 弹出弹窗
window.onload = function(){
    document.getElementById('faceimg').onclick=function(){
    window.open('face.php','face','width=400,height=400,top=0,left=0,scrollbars=1');
    }
}
//点击验证码刷新函数
document.getElementById('codeimg').onclick = function(){
    this.src = 'code.php?d='+Math.random();
}