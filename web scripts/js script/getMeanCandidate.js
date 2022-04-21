
function meanCandidate()
{
let dateCompetition=document.getElementById("dateEndJob").value;
let CurrentYear=getYear(new Date());	
let finalRes=6;//6 represent starting mark
//-------------------------------------input------------
let fullName=document.getElementById("nameCandidate").value;
let dateBirthCandidate_=document.getElementById("dateBirthCandidate").value;
let inputMean= parseFloat(document.getElementById("meanCandidate_").value); 

let isTheFirstGraduation=document.getElementById("checkbox-1").checked;
let isHighNationalSchool=document.getElementById("checkbox-2").checked;
let certificateYear=parseFloat(document.getElementById("yearGraduation").value);//2017;
let markInterview=parseFloat(document.getElementById("markInterview").value);//2.5
let startingdateAsAworker=document.getElementById("dateStartJob").value;//"2021/5/5"
let isWorkedInTheSameEntreprise=document.getElementById("checkbox-3").checked;//true
let isWorkedInTheDiffrentEntreprise=document.getElementById("checkbox-4").checked;//true
let isContractedWorker=document.getElementById("checkbox-5").checked;//true
let isWorkedInThePrivateSector=document.getElementById("checkbox-6").checked;//true
let isWorkedInTheLowLevelEmplacement=document.getElementById("checkbox-7").checked;//true

//-------------------------------------------------------

markCertification=(CurrentYear-certificateYear)*0.5;
if(markCertification>5){//max mark is 5 
	markCertification=5;
}
finalRes+=markCertification;


finalRes+=meanStudy(inputMean);
let meanStudyVal=meanStudy(inputMean);

if(isTheFirstGraduation==true){
	finalRes+=1
	meanStudyVal+=1;
}if(isHighNationalSchool==true){
	finalRes+=2;
	meanStudyVal+=2;
}

let diffDayExperience=dateDiffInDays(new Date(startingdateAsAworker),new Date(dateCompetition));
let pointExpSameEntreprise=0;
if(isWorkedInTheSameEntreprise==true){
 pointExpSameEntreprise=getMarkAsWorkerInTheSameEntreprise(diffDayExperience);
finalRes+=pointExpSameEntreprise
}

let pointExpDiffrentEntreprise=0;
if(isWorkedInTheDiffrentEntreprise==true){
 pointExpDiffrentEntreprise=getMarkAsWorkerInTheDiffrentEntreprise(diffDayExperience);
finalRes+=pointExpDiffrentEntreprise
}

let pointExpContractedWorker=0;
if(isContractedWorker==true){
 pointExpContractedWorker=getMarkAsContractedWorker(diffDayExperience);
finalRes+=pointExpContractedWorker
}
let pointExpPrivateSector=0;
if(isWorkedInThePrivateSector==true){
 pointExpPrivateSector=getMarkAsWorkerInPrivateSector(diffDayExperience);
finalRes+=pointExpPrivateSector
}

let pointExpLowLevelEmplacement=0;
if(isWorkedInTheLowLevelEmplacement==true){
 pointExpLowLevelEmplacement=getMarkAsWorkerInLowLevelEmplacement(diffDayExperience);
finalRes+=pointExpLowLevelEmplacement
}

finalRes+=markInterview;

txt="";
txt+="اسم المترشح "+fullName+"\n";
txt+="تاريخ إزدياد المترشح " +dateBirthCandidate_+"\n";
txt+="نقطة أقدمية الشهادة " +markCertification+"\n";
txt+="نقطة المسار الدراسي " +meanStudy(inputMean)+"\n";
let curProfessionel=pointExpSameEntreprise+pointExpDiffrentEntreprise+pointExpContractedWorker+pointExpPrivateSector+pointExpLowLevelEmplacement;
txt+="نقطة المسار المهني " +curProfessionel.toFixed(2)+"\n";
txt+="نقطة الامتحان الشفهي "+markInterview.toFixed(2)+"\n";
txt+="المجموع "+finalRes+"\n";
meanStudyVal+=markCertification;
alert(txt);

 alertify.confirm("حفظ البيانات",
"هل تريد حفظ بيانات المترشح في قاعدة البيانات ؟",
  function(){
  	insertData(fullName,dateBirthCandidate_,meanStudyVal.toFixed(2),curProfessionel.toFixed(2),markInterview.toFixed(2),finalRes.toFixed(2));
    alertify.success('تمت اضافة المترشح بنجاح ');
  },
  function(){
    alertify.error('لم تتم اضافة المترشح ');
  });
  


return false;}
function getMarkAsWorkerInTheSameEntreprise(days){
tmp=days/365;// because 1 point for 365 days 
if(tmp>6){
	tmp=6;
}
return  tmp;
}function getMarkAsWorkerInTheDiffrentEntreprise(days){
tmp=days/365;// because 1 point for 365 days 
if(tmp>4){
	tmp=4;
}
return  tmp;
}
function getMarkAsContractedWorker(days){
tmp=(days*0.25)/365;// because 1 point for 365 days 
if(tmp>3){
	tmp=3;
}
return  tmp;
}
function getMarkAsWorkerInPrivateSector(days){
tmp=(days*0.5)/365;// because 1 point for 365 days 
if(tmp>2){
	tmp=2;
}
return  tmp;
}
function getMarkAsWorkerInLowLevelEmplacement(days){
tmp=(days*0.5)/365;// because 1 point for 365 days 
if(tmp>3){
	tmp=3;
}
return  tmp;
}

// a and b are javascript Date objects
function dateDiffInDays(a, b) {
  // Discard the time and time-zone information.
  const _MS_PER_DAY = 1000 * 60 * 60 * 24;
  const utc1 = Date.UTC(a.getFullYear(), a.getMonth(), a.getDate());
  const utc2 = Date.UTC(b.getFullYear(), b.getMonth(), b.getDate());

  return Math.floor((utc2 - utc1) / _MS_PER_DAY)+1;
 
}
function getYear(date){
	return date.getFullYear(); 
}
function meanStudy(meanMark){
	tmp=0;
if(meanMark>=10.5 && meanMark<=10.99){
tmp=1;
}else if(meanMark>=11 && meanMark<=11.99){
tmp=2;
}else if(meanMark>=12 && meanMark<=12.99){
tmp=3;
}else if(meanMark>=13 && meanMark<=13.99){
tmp=4;
}else if(meanMark>=14 && meanMark<=14.99){
tmp=5;
}else if(meanMark>=15 && meanMark<=15.99){
tmp=6;
}else if(meanMark>=16 ){
tmp=7;
}

return tmp;}



function insertData(fullName,date_birth,mean_school,mean_profes,mark_interv,total){
	let ajax=new XMLHttpRequest();
let method="POST";
let url="./php files/insertData.php";
ajax.open(method,url,true);
ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

ajax.onreadystatechange=function(){
	if(ajax.readyState==4 && ajax.status==200){
		let t=ajax.responseText;
		}

}
ajax.send("fullName="+fullName+"&date_birth="+date_birth+"&mean_school="+mean_school+"&mean_profes="+mean_profes+"&mark_interv="+mark_interv+"&total="+total);


}