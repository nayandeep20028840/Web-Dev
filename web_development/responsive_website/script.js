
var username = document.getElementById("username"); // declaring variables
var pass = document.getElementById("pass");
pass.onfocus = function(){
if(pass.value=="PASSWORD"){
pass.value="";
}
};
username.onfocus = function(){
if(this.value=="USERNAME"){
this.value="";
}
};
pass.onblur = function(){
if(this.value==""){
pass.value="PASSWORD";
}
};
username.onblur = function(){
if(this.value==""){
this.value="USERNAME";
}
};