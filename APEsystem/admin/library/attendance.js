// JavaScript Document
function checkAddForm()
{
	with (window.document.frmAdd) {
		if (isEmpty(attendance, 'choose')) {
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

function addSchedule(userId)
{
	window.location.href = 'index.php?view=add&userId=' + userId;
}
function modifySchedule(userId,aId)
{
	window.location.href = 'index.php?view=modify&userId=' + userId + '&aId=' + aId;
}

function deleteSchedule(userId)
{
	if (confirm('Delete this Time Slot?')) {
		window.location.href = 'processSchedule.php?action=delete&userId=' + userId;
	}
}

