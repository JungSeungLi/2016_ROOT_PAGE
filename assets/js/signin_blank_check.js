 
function check_login_blank(){
 
 if(document.addjoin.email.value==""){ //id값이 없을 경우
 alert("이메일을 입력하세요");         //메세지 경고창을 띄운 후
 document.addjoin.email.focus();     // id 텍스트박스에 커서를 위치
 exit;
 
 }else if(document.addjoin.passwd.value==""){
 alert("비밀번호를 입력하세요");
 document.addjoin.passwd.focus();
 exit;
 
 }
    
    
 var exptext = /^[A-Za-z0-9_\.\-]+@[A-Za-z0-9\-]+\.[A-Za-z0-9\-]+/;
 var pwcheck = /^(?=.*[a-zA-Z])(?=.*[!@#$%^*+=-])(?=.*[0-9]).{6,16}$/;
    
    
if(exptext.test(document.addjoin.email.value)==false){
 //이메일 형식이 알파벳+숫자@알파벳+숫자.알파벳+숫자 형식이 아닐경우
 
 alert("이메일 형식이 올바르지 않습니다.");
 document.addjoin.email.focus();
 exit;
 }
    
if(pwcheck.test(document.addjoin.passwd.value)==false){

 alert("비밀번호 형식이 올바르지 않습니다.");
 document.addjoin.passwd.focus();
 exit;
}
    
 document.addjoin.button();