
 
function checkfield(){
 
 if(document.addjoin.email.value==""){ //id값이 없을 경우
 alert("이메일을 입력하세요");         //메세지 경고창을 띄운 후
 document.addjoin.email.focus();     // id 텍스트박스에 커서를 위치
 exit;
 
 }else if(document.addjoin.passwd.value==""){
 alert("비밀번호를 입력하세요");
 document.addjoin.passwd.focus();
 exit;
 
 }else if(document.addjoin.user_name.value==""){
 alert("이름을 입력하세요");
 document.addjoin.user_name.focus();
 exit;
 
 }else if(document.addjoin.student_id.value==""){
 alert("학번을 입력하세요");
 document.addjoin.year.focus();
 exit;
 
 }else if(document.addjoin.o_phone2.value==""){
 alert("전화번호를 정확하게 입력해주세요");
 document.addjoin.year.focus();
 exit;
 
 }else if(document.addjoin.o_phone3.value==""){
 alert("전화번호를 정확하게 입력해주세요");
 document.addjoin.year.focus();
 exit;
 
 }
    
 
 var exptext = /^[A-Za-z0-9_\.\-]+@[A-Za-z0-9\-]+\.[A-Za-z0-9\-]+/;
 var pwcheck = /^(?=.*[a-zA-Z])(?=.*[!@#$%^*+=-])(?=.*[0-9]).{6,16}$/;
 var num_check=/^\d{4,4}$/;
 var student_number=/^\d{5,5}$/;
    
 if(exptext.test(document.addjoin.email.value)==false){
 //이메일 형식이 알파벳+숫자@알파벳+숫자.알파벳+숫자 형식이 아닐경우
 
 alert("이메일 형식이 올바르지 않습니다.");
 document.addjoin.email.focus();
 exit;
 }
    
 if(pwcheck.test(document.addjoin.passwd.value)==false){

 alert("비밀번호를 영어,숫자,특수문자를 포함한 8자리~18자리로 입력해주세요");
 document.addjoin.passwd.focus();
 exit;
 }
    
if(num_check.test(document.addjoin.o_phone2.value)==false){

 alert("전화번호를 정확하게 입력해주세요");
 document.addjoin.o_phone2.focus();
 exit;
 }
    
if(num_check.test(document.addjoin.o_phone3.value)==false){

 alert("전화번호를 정확하게 입력해주세요");
 document.addjoin.o_phone3.focus();
 exit;
 }
    
if(student_number.test(document.addjoin.student_id.value)==false){

 alert("학번을 정확하게 입력해주세요");
 document.addjoin.student_id.focus();
 exit;
 }
    
 
 document.addjoin.submit();
 
}
