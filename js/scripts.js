
$(document).ready(function(){
	var command = $('.commandField');
	var ioObject = new IO(); // create IO obeject.
	challengeStatus(); // update status bar.
    updateChallengeName(); // update challenge name in top bar

	// get command when user press enter.
	command.keyup(function(event){
		var valueOfCommand = $.trim(command.val()); //delete "space character".
		if(valueOfCommand.length != 0) {
			if(event.KeyCode == 13 || event.which == 13) { // Key Code of "Enter" is 13.
				ioObject.inputCommand(valueOfCommand); // call function member.
				event.preventDefault();
			}
		}
	});
});
