	var FieldCheck = "0";
function validateForm()
{
	FieldCheck = "0";

	validateField(document.forms["CWPForm"]["CWPtxtFirstname"]);
	validateField(document.forms["CWPForm"]["CWPtxtLastname"]);
	validateField(document.forms["CWPForm"]["CWPtxtAddress"]);
	validateField(document.forms["CWPForm"]["CWPtxtCity"]);
	validateState(document.forms["CWPForm"]["CWPdrpState"]);
	validateZip(document.forms["CWPForm"]["CWPtxtZip"]);
	validatePhone(document.forms["CWPForm"]["CWPtxtPhone"]);
	
	if (FieldCheck == "0")
	{
  	return true;
    } else {
		return false;
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

function validateState(x)
{
  var fieldset = x.parentNode;
  var txt = x.value;
  if (txt=="")
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

function validateZip(x)
{
  var fieldset = x.parentNode;
  var txt = x.value;
  if (txt.length > 4)
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

function whileSelectingState(x) {
  var fieldset = x.parentNode;
  var txt = x.value;
  if (fieldset.className == "cwpincomplete" || fieldset.className == "cwpcomplete") {
    if (txt=="")
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

function whileTypingZip(whatYouTyped) {
  var fieldset = whatYouTyped.parentNode;
  var txt = whatYouTyped.value;
  if (fieldset.className == "cwpincomplete" || fieldset.className == "cwpcomplete") {
    if (txt.length > 4)
  {
  	fieldset.className = "cwpcomplete";
  } else {
    fieldset.className = "cwpincomplete";
  }
  }
}
	