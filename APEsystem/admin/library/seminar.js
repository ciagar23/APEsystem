// JavaScript Document
function checkAdd()
{
	with (window.document.frmAddUser) {
		if (isEmpty(semName, 'Enter Seminar Name')) {
			return;
		} else if (isEmpty(Location, 'Enter Location')) {
			return;
		} else  if (isEmpty(date, 'Enter Date')) {
			return;
		} else  if (isEmpty(time, 'Enter Time')) {
			return;
		} else  {
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

function add()
{
	window.location.href = 'index.php?view=add';
}

function changePassword(userId)
{
	window.location.href = 'index.php?view=modify&userId=' + userId;
}

function deleteSem(userId)
{
	if (confirm('Delete this Seminar?')) {
		window.location.href = 'process.php?action=delete&userId=' + userId;
	}
}

