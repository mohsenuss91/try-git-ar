
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
    
    var el = document.getElementById('terminal');
          window.cs_console = new CSConsole(el,{
                      prompt: '> ',
                      historyLabel: 'cs-console-git',
                      syntax: 'shell',
                      welcomeMessage: 'Git باللغة العربية!',
                      autoFocus: true,
                      commandValidate: function(line){
                                    return line.length > 0
                      },
                      commandHandle: function(line, report, prompt){
                                    /*
                                     *             We aren't doing anything with the console input.
                                     *
                                     *                         This is where you might send the input to the server and get a response
                                     *                                     for example, an irb response or you could eval javascript here.
                                     *                                               */
                            try {
                               //var content = eval.call(this,line)
                            } catch(e){
                               var content = e.message
                            }
                            report({content: (content ? content.toString() : '')})
                       }
                });

});

