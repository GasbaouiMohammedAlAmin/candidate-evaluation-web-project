
function deleteData2(id){

	if( confirm("هل تريد حقا الحذف ؟")){
		window.location('../php files/delete.php?id=id')
	}
	
}

function deleteData(fullName){
	return confirm("هل تريد حقا الحذف ؟")
	
}

function buildTable(){
let table=document.getElementById('myTable');
let ajax=new XMLHttpRequest();
let method="GET";
let url="./php files/fetchData.php"
ajax.open(method,url,true);
ajax.send()
ajax.onreadystatechange=function(){
	if(this.readyState==4 && this.status==200){
		let  data=JSON.parse(this.responseText); 
		
		//console.log(data);
		
		for (var i = 0; i < data.length; i++) {
	
	
	let button="<a class=\"u-border-none u-btn u-button-style u-hover-palette-1-dark-1 u-palette-2-base u-btn-2\"  href ='php files/delete.php?id="+data[i].id+"'onclick='return deleteData()'>حذف</a>"
	
	let row="<tr style=\"height: 30px;\"> <td class=\"u-border-2 u-border-grey-30 u-table-cell\">"+data[i].id + "</td> <td class=\"u-border-2 u-border-grey-30 u-table-cell\">"+data[i].fullName+
	"</td><td class=\"u-border-2 u-border-grey-30 u-table-cell\">"+data[i].date_birth+"</td><td class=\"u-border-2 u-border-grey-30 u-table-cell\">"+data[i].mean_school+
"</td><td class=\"u-border-2 u-border-grey-30 u-table-cell\">"+data[i].mean_profes+"</td><td class=\"u-border-2 u-border-grey-30 u-table-cell\">"
	+data[i].mark_interv+"</td><td class=\"u-border-2 u-border-grey-30 u-table-cell\">"+data[i].total+ "</td><td class=\"u-border-2 u-border-grey-30 u-table-cell\">"+button+ "</td></tr>";
	table.innerHTML+=row;
	
	
	}

}


}
}

buildTable();



