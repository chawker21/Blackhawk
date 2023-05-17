@extends('/guides/layouts.app')

@section('content')
    @include('guides.partials._profile')
    {{--@include('partials.aside')--}}
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="panel panel-default">
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-primary border-dark">
                            <div class="panel-heading">Basic Template</div>
                            <div id="test" class="panel-body">
                                <div class="alert alert-secondary border border-dark" style="font-weight:bold">
                                <p>Non-Command/Function Features</p>
                            <p>Captcha Services Accounts: Allows you to choose either manual captcha solving or choose a service from Bypass Captcha, Decaptcher and Death by Captcha</p>
                            <p>Start up Page in Options Menu: Allows you to start up page for your bot (Dev Editon Only)</p>
                            <p>Debugger: Allows you to debug your script for editing and troubleshooting purposes</p>
                            <p>Code View: allows you to write your script in code form(Pro and Dev Editions Only)</p>
                            <p>Image Recognition: Allows you to choose an item on a page using image recognition (Pro and Dev Editions Only)</p>

                        <p>COMMANDS</p>
                    <p>Browser Commands:</p>
                    <p>Navigate: Navigates the browser to a url</p>
                    <p>Download file: Downloads a file</p>
                    <p>Close Page:  Closes the current page within a browser</p>
                    <p>Load html: displays the given html in a browser</p>
                    <p>Run javascript: Runs javascript code</p>
                    <p>Save browser image: Saves a screenshot of the current page</p>
                    <p>Shell: Runs an executable</p>

                <p>Action Commands:</p>
                <p>Type text: Types text into a browser</p>
                <p>Click: Clicks and element within the browser</p>
                <p>Change dropdown: Changes the selected item in a drop down</p>
                <p>Mouse over: This will mouse over a specified element</p>
                <p>Change attribute: changes any attribute on an html element</p>
                <p>Change file field: selects a file form a file field</p>
                <p>Focus: changes the browser's focus to a specific element</p>
                <p>Scrape table: Scrapes an html table element into a UBot table (Pro and Dev Editions Only)</p>
                <p>Save element image: saves the image of an element</p>

            <p>Flow Commands:</p>
            <p>Pause script: Pauses the script. This is generally used for debugging purposes</p>
            <p>Stop Script: Stops the script. This is generally used for debugging purposes</p>
            <p>Wait: waits for a specified number of seconds</p>
            <p>Wait for element: Waits for a specificied element to sppear or dissapear from a page</p>
            <p>Wait for browser event: Waits for a browser event to happen, such as a page being loaded</p>
            <p>Return: Exits the current command or function and allows custom functions to return a value</p>
            <p>Loop: Runs the contained commands a specified amount of times</p>
            <p>Loop while: Runs the contains commands while a specified condition is true.</p>
            <p>Thread: Runs the contained commands in a spearate threat from the main script allowing multiple commands to run at the same time. (Pro and Dev Editions Only)</p>
            <p>If: Runs the contained commands if the condition is true</p>
            <p>Then: Use this inside of an if command to specify which command should run if the condition is true</p>
            <p>Else if: Use this inside of an if command to specify another condition to check if the last condition was not true</p>
            <p>Else: Use this inside of an if command to specify which command should run if the condition is not true</p>
            <p>Define: Defines a custom command or function that can be used in the currect bot.</p>
            <p>In new browser: Runs all commands inside a separate web browser in separate windows</p>
            <p>Divider: Visually divides up pieces of code to help the visual aesthetics of the scripting window</p>

        <p>System Commands:</p>
        <p>Save to file: Saves text, lists or tables to a file</p>
        <p>Rename file: Renames a file</p>
        <p>Move file: Moves a file to a specified location</p>
        <p>Delete file: Deletes a file</p>
        <p>Copy file: Copies a file to a specified location</p>
        <p>Rename folder: Renames a specified file</p>
        <p>Move folder: Moves a folder to a specified location</p>
        <p>Delete folder: deletes a specified folder</p>
        <p>Create folder: creates a new folder at a specified location</p>
        <p>Copy folder: Copies a specified folder to a specified location</p>

    <p>Data Commands:</p>
    <p>Reset account: Resets the account info in the account data function before</p>
    <p>Set: Allows you to store a value in a variable</p>
    <p>Increment: Adds 1 to a variable</p>
    <p>Decrement: Subtracts 1 from a variable</p>
    <p>Add item to list: Adds an item to the end of a list</p>
    <p>Add list to list: Adds every item in one list tot he end of the other list</p>
    <p>Remove from list: Removes and item from a list at a specified position</p>
    <p>Set list postion: sets the position of a list which is used by the next list item functions</p>
    <p>Clear list: empties the contents of a list and resets it's position to zero.</p>
    <p>Create table from file: Allows you to create a table based on a csv file.</p>
    <p>Set table cell: Allows you to set a specific cel in a table</p>
    <p>Add list to table as column: Inserts a list into a table at a specified location as a column</p>
    <p>Add list to table as row: Inserts a list into a table at a specified location as a row</p>
    <p>Clear table: empties the contents of a table</p>

    <p>Email Commands:</p>
    <p>Send Email: sends an email using an smtp server</p>
    <p>Connect to Mail Server: connects to an email server</p>
    <p>Verify emails: Scans your mail box for verification emails and opens the verification links</p>
    <p>Create Table From Emails: creates a table using all the emails in your mailbox</p>
    <p>Delete Mail: deletes an email from a mailbox at a specified position</p>

    <p>Settings Commands:</p>
    <p>Clear cookies: Clears all cookies in the browser</p>
    <p>Change proxy: Changes the proxy used in the browser</p>
    <p>Set user agent: Changes the user agent sent to websites</p>
    <p>Set referrer: changes the referrer sent to websites</p>
    <p>Set proxy credentials: sets the username and password credentials for the current proxy</p>
    <p>Set website credentials: Sets the username and password credentials for HTTP authentication on a website</p>
    <p>Set visibility: Determines whether or not the browser shows what it's doing while your bot or script is running (Pro and Dev Editons Only)</p>
    <p>Allow images: Determines whether or not the browser loads external images(Pro and Dev Editons Only)</p>
    <p>Allow CSS: Determines whether or not the browser loads external CSS (Pro and Dev Editons Only)</p>
    <p>Allow javascript: Determines whether or not the browser loads external javascript(Pro and Dev Editons Only)</p>
    <p>Allow flash: Determines whether or not the browser loads external flash swf files(Pro and Dev Editons Only)</p>

    <p>UI Commands:</p>
    <p>UI text box: creates a text box on the UI panel tied to a specific variable.</p>
    <p>UI block text: creates a large text box on the UI panel tied to a specific variable.</p>
    <p>UI check box: creates a check box on the UI panel tied to a specific variable.</p>
    <p>UI open file: creates an open file field on the UI panel tied to a specific variable.</p>
    <p>UI save file: creates a save file field on the UI panel tied to a specific variable.</p>
    <p>UI drop down: creates a drop down menu on the UI panel tied to a specific variable.</p>
    <p>UI list box: creates a list box on the UI panel tied to a specific variable.</p>
    <p>UI stat monitor: creates a stat tracker on the UI panel tied to a specific variable.</p>
    <p>UI window: creates a menu item under the settings menu that displays the contained UI</p>
    <p>UI button: creates a button on the UI Panel that contains the runs the contained commands when clicked.</p>
    <p>UI html panel:  allows you to build your own UI with html (Dev Editon Only)</p>
    <p>UI splash page: allows you to navigate to a specific url once the bot is loaded(Dev Editon Only)</p>
    <p>UI remove branding: removed the "powered by link" on compiled bots(Dev Editon Only)</p>
    <p>UI foreground color: changes the foreground color on compiled bots (Dev Editon Only)</p>
    <p>UI background color: changes the background color on compiled bots(Dev Editon Only)</p>
    <p>UI tab color: changes the tab color on compiled bots(Dev Editon Only)</p>

                                    <p>FUNCTIONS</p>
    <p>Qualifier Functions:</p>
    <p>Search page: Returns whether or not the specified text is present on the page</p>
    <p>Contains: Returns whether or not the specified text contains the search text</p>
    <p>Exists: Returns whether or not the specified text exists on the current page</p>
    <p>True: Returns True</p>
    <p>False: Returns false</p>
    <p>Both: Returns true if both conditions are met and true</p>
    <p>Either: Returns true if either conditions are met and true</p>
    <p>Not: Returns true if the condition is not true</p>
    <p>Comparison: Compares two values and returns the results</p>

    <p>Math Functions:</p>
    <p>Eval: Returns the results of executing a piece of javascript</p>
    <p>Rand: Returns a random number between the minimum and maximum values</p>

    <p>Account Functions:</p>
    <p>Account Data: Returns a piece of Account Data generated by UBot</p>

    <p>Email Functions:</p>
    <p>Email total messages: Compares two values and returns the results</p>
    <p>Email subject: Returns the subject of the email at the specified position</p>
    <p>Email recipient: Returns the recipients of the emails at a specified position</p>
    <p>Email from: Returns the sender of the email at the specified position</p>
    <p>Email date: Returns the date received of the email at a specified position</p>
    <p>Email body text: Returns the body text of the email at the specified position</p>
    <p>Email body html: Returns the body html of the email at the specified position</p>
    <p>Variable Functions:</p>
    <p>List total: Returns the total number of items in a list</p>
    <p>List position: Returns the position of a specific list item</p>
    <p>Random list item: Returns a randomly selected item from a list</p>
    <p>Next list item: Returns the list item at the list's current position and increments the list's position (used with the set list position command)</p>
    <p>Previous list item: Returns the list item at the list's current position and decrements the list's position</p>
    <p>List item: Returns a list item at a specified position</p>
    <p>Read file: Returns the contents of a file</p>
    <p>List from file: Returns a list made up of each item within a file.</p>
    <p>List from text: Returns a list of items by separating the text into separate items based on a delimiter</p>
    <p>Text from list: Returns text based on connecting each list item by a connector</p>
    <p>Subtract lists: Returns the first list with al items from the second list removed from it (Pro and Dev Editons Only)</p>
    <p>Sort lists: Returns the original list sorted in ascendign or descending order (Pro and Dev Editons Only)</p>
    <p>Common list items: Returns a new list containing the common items between the first and second list (Pro and Dev Editons Only)</p>
    <p>Table cell: Returns the value of a table cell</p>
    <p>Table total rows: Returns the number of rows in a table</p>
    <p>Table total columns: Returns the number of columns in a table</p>

    <p>Browser Functions:</p>
    <p>Solve captcha: The function will either prompt the user to type in a CAPTCHA, or send the CAPTCHA to a service to solve it</p>
    <p>Page scrape: Returns the text scraped from the currect page between two specified pieces of text</p>
    <p>Scrape attribute: Returns the value of s specified element on a selected element</p>
    <p>Element offset: If an element selected matches more than one element on a page, this allows you to return one of those elements</p>
    <p>Element parent: Returns the parent of an element</p>
    <p>Element child: Returns the child of an element</p>
    <p>Element sibling: Returns the sibling of an element</p>

    <p>Text Functions:</p>
    <p>Spin: Returns a spun version of a given text</p>
    <p>New line: Returns a line break</p>
    <p>Nothing: Returns an empty value</p>
    <p>Replace: Returns the original text with all instances of the search text replaced by the replace text</p>
    <p>Replace regular expression: Returns the original text with all instances of the pattern text replaced by the replace text</p>
    <p>Change text casing: Returns the text with the casing fo the text changed</p>
    <p>Trim:  Returns the text with all leading or trailing blank spaces removed</p>
    <p>Substring: Returns the specified part of an original string</p>
    <p>Random text: Returns a random alpha numeric string of user define length, including upper and lowercase text.</p>
    <p>Pad text: Returns a new string that is padded with a character</p>
    <p>Text lenght: Returns the tottal length of text</p>
    <p>Insert text:  Returns the original text with another piece of text inserted at a specified position</p>
    <p>Find index:  Returns the index of a piece of text with the original text</p>
    <p>Append line to text: Returns the original tetx with a new line of text appended at the end of the original text</p>
    <p>Find regular expression:  Returns a list fo all matches  of the regular expression in the original text</p>

    <p>Document functions:</p>
    <p>Url: Returns the current url</p>
    <p>Title: Returns the current page title</p>
    <p>Meta description: Returns the current meta description</p>
    <p>Meta keywords: Returns the current meta keywords</p>
    <p>Document text: Returns the current document text</p>

    <p>System Functions:</p>
    <p>Confirm: displays a yes/no confirmation box that returns true if yes is chosen</p>
    <p>Prompt: Prompts the user to respond and returns the text that was typed into the function</p>
    <p>Date: Returns the current date</p>

    <p>File Functions:</p>
    <p>Special Folder:  Returns the path of a special system folder</p>
    <p>Get Files:  Returns the list of all files within a given directory(Pro and Dev Editons Only)</p>


                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                </div>

            </div>
        </div>
@endsection



