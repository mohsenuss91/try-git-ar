
$(document).ready(function(){
	var command = $('.commandField');
    var challenge_ = $('#challengeStatus li a');
	var ioObject = new IO(); // create IO obeject.
    updateBar();

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
    
    // when the mouse over the cercl of challenge.
    challenge_.hover(function() {
            // get number of challenge.
            var numOfChallenge  = $(this).data('num-of-challenge');
            // show the name of challenge in the challenge name.
            updateChallengeName(numOfChallenge);
        },
        function() {
            // and if the mouse is out name of challenge become 
            // the current challenge.
            updateChallengeName_(); 
    });

    // when the cercle clicked the challenge changed.
    challenge_.click(function() {
        var numOfChallenge = $(this).data('num-of-challenge');
        changeChallenge(numOfChallenge);
    });
});
