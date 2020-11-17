<?php require 'inc/header.php'; ?>
  <div class="Container">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 pull-left">
                <select id='selectLang' class="lang-chooser" >
                    <option value="selectLang">Choose a Language</option>
                    <option value="volvo">C++</option>
                    <option value="saab">C#</option>
                    <option value="opel">Java</option>
                </select>
              
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="editor-buttons pull-right">
                    <button title="Editor Help" class="btn-ide-action fa fa-question ease"></button>
                    <input type="checkbox" checked data-toggle="toggle" data-on="Dark" data-off="Light" class="themeSwitcher" >
                    <button title="Download Your Code" class="btn-ide-action fa fa-download ease"></button>
                    <button title="Go Fullscreen" class="btn-ide-action fa fa-expand ease"></button>
                    <!-- <button title="Exit Fullscreen" class="btn-ide-action fa fa-compress ease"></button> -->
                </div>
            </div>
        </div>
        <div class="row code-editor-wrapper">
            <div class="col-lg-12 col-md-12">
                <form  id="userform">
                    <textarea placeholder="Your code goes here" rows="20" cols="50" name="comment" form="userform" class="code-editor" id="codes"></textarea>

                    <button class=go onclick='sendCodeAce(); focusEdit(); return false;'>Submit</button>
                    <button class=gray onclick='document.getElementById("results").innerHTML="<b>Solution:</b><pre>"+unescape("def sleep_in(weekday, vacation):%0a  if not weekday or vacation:%0a    return True%0a  else:%0a    return False%0a  # This can be shortened to: return(not weekday or vacation)" + "</pre>"); sendRemark("h2");' >Show Solution</button>


                </form>
                <p><div class="big">Description:</div><br /><div class="custom1">Create a number guessing game where the computer has a random number and the user has to guess.</div></p>
            </div>
        </div>
    </div>
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js"></script>
    <script src="js/lib/codemirror.js"></script>
    <script src="js/lib/modes/clike.js"></script>
    <script src="js/lib/modes/css.js"></script>
    <script src="js/lib/modes/htmlmixed.js"></script>
    <script src="js/lib/modes/javascript.js"></script>
    <script src="js/lib/modes/php.js"></script>
    <script src="js/lib/modes/python.js"></script>
    <script src="js/lib/modes/xml.js"></script>
    <script src="js/editor.js"></script>
    <script src="js/ide.js"></script>


			</div>
		</div>
	</div>
</div>
<?php require 'inc/footer.php'; ?>
