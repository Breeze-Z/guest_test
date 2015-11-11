//获取face页面 头像的值，将值传递给person函数
window.onload = function() {
    var img = document.getElementsByTagName('img');
    for(var i=0;i<img.length;i++){
        img[i].onclick = function(){
            person(this.alt);
        }
    }   
}
//opener 被创建的窗口可以引用创建它的窗口所定义的属性和函数
function person(src){
    opener.document.getElementById('faceimg').src = src;
    //document后面的都为name属性名字
    //此方法用来提交时，录入数据库
    opener.document.register.face.value = src;
}

