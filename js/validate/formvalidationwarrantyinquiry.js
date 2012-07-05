	var FieldCheck = "0";
function validateForm()
{
	FieldCheck = "0";

	validateField(document.forms["CWPForm"]["CWPtxtFirstName"]);
	validateField(document.forms["CWPForm"]["CWPtxtLastName"]);
	validateField(document.forms["CWPForm"]["CWPtxtAddress"]);
	validateField(document.forms["CWPForm"]["CWPtxtCity"]);
	validateField(document.forms["CWPForm"]["CWPtxtState"]);
	checkYear(document.forms["CWPForm"]["CWPtxtYearPainted"]);
	checkEmail(document.forms["CWPForm"]["CWPtxtEmail"]);

	if (FieldCheck == "0")
	{
		return true;
	    } else {
		return false;
	}

};

function checkYear(x) {
	var fieldset = x.parentNode;
	var txt = x.value;
	if (!IsNumeric(txt) || (txt < 1900) || (txt > 2012)) {
		fieldset.className = "cwpincomplete";
		FieldCheck = "1";
	} else {
		fieldset.className = "cwpcomplete";
	}
};

function checkEmail(x) {
	var fieldset = x.parentNode;
	var txt = x.value;
	if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(txt)) {
		
		fieldset.className = "cwpcomplete";
	} else {
		fieldset.className = "cwpincomplete";
		FieldCheck = "1";
	}
};

function validateField(x)
{
  var fieldset = x.parentNode;
  var txt = x.value;
  if (txt==null || txt=="")
  {
  	fieldset.className = "cwpincomplete";
  	FieldCheck = "1";
  } else {
    fieldset.className = "cwpcomplete";
  }
};

function validatePhone(x)
{
  var fieldset = x.parentNode;
  var txt = x.value;
  if (txt.length > 9)
  {
  	fieldset.className = "cwpcomplete";
  } else {
    fieldset.className = "cwpincomplete";
	FieldCheck = "1";
  }
};
	
function whileTyping(whatYouTyped) {
  var fieldset = whatYouTyped.parentNode;
  var txt = whatYouTyped.value;
  if (fieldset.className == "cwpincomplete" || fieldset.className == "cwpcomplete") {
    if (txt==null || txt=="")
  {
  	fieldset.className = "cwpincomplete";
  } else {
    fieldset.className = "cwpcomplete";
  }
  }
}

function whileTypingEmail(whatYouTyped) {
  var fieldset = whatYouTyped.parentNode;
  var txt = whatYouTyped.value;
  if (fieldset.className == "cwpincomplete" || fieldset.className == "cwpcomplete") {
    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(txt))
  {
  	fieldset.className = "cwpcomplete";
  } else {
    fieldset.className = "cwpincomplete";
  }
  }
}

function whileTypingPhone(whatYouTyped) {
  var fieldset = whatYouTyped.parentNode;
  var txt = whatYouTyped.value;
  if (fieldset.className == "cwpincomplete" || fieldset.className == "cwpcomplete") {
    if (txt.length > 9)
  {
  	fieldset.className = "cwpcomplete";
  } else {
    fieldset.className = "cwpincomplete";
  }
  }
}

function IsNumeric(input)
{
   return (input - 0) == input && input.length > 0;
}

	