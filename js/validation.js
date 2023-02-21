//////Function for validatin the student  form////
function valid_student(frm_obj)
{
	
	if(frm_obj.st_name.value=="")
	{		
		alert("Please enter your name.");
		frm_obj.st_name.focus();
		return false;
	}	
	if(frm_obj.st_father.value=="")
	{
		alert("Please enter your Father name.");
		frm_obj.st_father.focus();
		return false;
	}
	if(frm_obj.st_city.value==0)
	{
		alert("Please select your city.");
		frm_obj.st_city.focus();
		return false;
	}
	if(frm_obj.st_country.value==0)
	{
		alert("Please select Country.");
		frm_obj.st_country.focus();
		return false;
	}
	if(frm_obj.st_gender[0].checked==false && frm_obj.st_gender[1].checked==false)
	{
		alert("Please select your Gender.");
		frm_obj.st_gender[0].focus();
		return false;
	}
	///Validation for Multiple Checkeboxes/////
	var cck=false;
	var element_length=frm_obj.elements.length;
	for(i=0;i<element_length;i++)
	{		
		if(frm_obj.elements[i].name=="st_qul[]")
		{
			if(frm_obj.elements[i].checked==true)
			{
				cck=true;				
				break;
			}
		}
	}
	if(cck==false)
	{
		alert("Please select your Qualification.");
		return false;
	}
	return true;
}
///////Function for  Delete Student////
function delete_student(st_id)
{
	if(confirm("Do you want  to delte the Student "))
	{
		this.document.student_view.st_id.value=st_id;
		this.document.student_view.act.value="delete_student";
		this.document.student_view.submit();
	}
}
////Fonction for Delete Multiple Data of Students////
function delete_multiple_student()
{
	if(confirm("Do you want to delete the selected student?"))
	{
		this.student_view.act.value="delete_multiple_student";
		this.student_view.submit();
	}
}
////Function for Check All Student//////
function check_all(obj)
{
	var frm_obj = this.document.student_view;
	var length=frm_obj.elements.length;
	for(i=0;i,length;i++)
	{
		if(frm_obj.elements[i].type=="checkbox")
		{
			frm_obj.elements[i].checked=obj.checked;
		}
	}
}
		