
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
/*
    // code mirror call
	var editor = CodeMirror.fromTextArea(document.getElementById('terminal'), {
            mode: 'shell',
            lineNumbers: true,
            theme: 'night'
          });
*/
});
    var el = document.getElementById('terminal');
          window.cs_console = new CSConsole(el,{
                      prompt: '> ',
                      historyLabel: 'cs-console-demo',
                      syntax: 'javascript',
                      welcomeMessage: 'Welcome to the cs console demo, type some javascript',
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
                                                    var content = eval.call(this,line)
                        } catch(e){
                                        var content = e.message
                        }
                                              report({content: (content ? content.toString() : '')})
                                                          }
                });

