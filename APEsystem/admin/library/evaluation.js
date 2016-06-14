// JavaScript Document
function checkDeanForm()
{
	with (window.document.frmAddSchedule) {
		if (isEmpty(dateEval, 'Please Rate')) {
			return;
		} else if (isEmpty(timeEval, 'Enter Subject')) {
			return;
		} else if (isEmpty(classSize, 'Enter Room')) {
			return;
		} else if (isEmpty(courseNum, 'Enter Room')) {
			return;
		} else if (isEmpty(courseDesc, 'Enter Room')) {
			return;
		} else {
			submit();
		}



	}
}

function checkPassword()
{
	with (window.document.frmAddUser) {
		if (isEmpty(txtPassword, 'Enter First Password')) {
			return;
		} else if (isEmpty(txtPassword2, 'Repeat Password')) {
			return;
		} else {
			submit();
		}
	}
}

function addUser()
{
	window.location.href = 'index.php?view=add';
}

function modifySchedule(userId)
{
	window.location.href = 'index.php?view=modify&userId=' + userId;
}

function deleteSchedule(userId)
{
	if (confirm('Delete this Time Slot?')) {
		window.location.href = 'processSchedule.php?action=delete&userId=' + userId;
	}
}

