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
                                    Non-Command/Function Features

                                    Captcha Services Accounts: Allows you to choose either manual captcha solving or choose a service from Bypass Captcha, Decaptcher and Death by Captcha

                                    Start up Page in Options Menu: Allows you to start up page for your bot (Dev Editon Only)

                                    Debugger: Allows you to debug your script for editing and troubleshooting purposes

                                    Code View: allows you to write your script in code form(Pro and Dev Editions Only)

                                    Image Recognition: Allows you to choose an item on a page using image recognition (Pro and Dev Editions Only)





                                    COMMANDS

                                    Browser Commands:

                                    Navigate: Navigates the browser to a url

                                    Download file: Downloads a file

                                    Close Page:  Closes the current page within a browser

                                    Load html: displays the given html in a browser

                                    Run javascript: Runs javascript code

                                    Save browser image: Saves a screenshot of the current page

                                    Shell: Runs an executable



                                    Action Commands:

                                    Type text: Types text into a browser

                                    Click: Clicks and element within the browser

                                    Change dropdown: Changes the selected item in a drop down

                                    Mouse over: This will mouse over a specified element

                                    Change attribute: changes any attribute on an html element

                                    Change file field: selects a file form a file field

                                    Focus: changes the browser's focus to a specific element

                                    Scrape table: Scrapes an html table element into a UBot table (Pro and Dev Editions Only)

                                    Save element image: saves the image of an element



                                    Flow Commands:

                                    Pause script: Pauses the script. This is generally used for debugging purposes

                                    Stop Script: Stops the script. This is generally used for debugging purposes

                                    Wait: waits for a specified number of seconds

                                    Wait for element: Waits for a specificied element to sppear or dissapear from a page

                                    Wait for browser event: Waits for a browser event to happen, such as a page being loaded

                                    Return: Exits the current command or function and allows custom functions to return a value

                                    Loop: Runs the contained commands a specified amount of times

                                    Loop while: Runs the contains commands while a specified condition is true.

                                    Thread: Runs the contained commands in a spearate threat from the main script allowing multiple commands to run at the same time. (Pro and Dev Editions Only)

                                    If: Runs the contained commands if the condition is true

                                    Then: Use this inside of an if command to specify which command should run if the condition is true

                                    Else if: Use this inside of an if command to specify another condition to check if the last condition was not true

                                    Else: Use this inside of an if command to specify which command should run if the condition is not true

                                    Define: Defines a custom command or function that can be used in the currect bot.

                                    In new browser: Runs all commands inside a separate web browser in separate windows

                                    Divider: Visually divides up pieces of code to help the visual aesthetics of the scripting window



                                    System Commands:

                                    Save to file: Saves text, lists or tables to a file

                                    Rename file: Renames a file

                                    Move file: Moves a file to a specified location

                                    Delete file: Deletes a file

                                    Copy file: Copies a file to a specified location

                                    Rename folder: Renames a specified file

                                    Move folder: Moves a folder to a specified location

                                    Delete folder: deletes a specified folder

                                    Create folder: creates a new folder at a specified location

                                    Copy folder: Copies a specified folder to a specified location



                                    Data Commands:

                                    Reset account: Resets the account info in the account data function before

                                    Set: Allows you to store a value in a variable

                                    Increment: Adds 1 to a variable

                                    Decrement: Subtracts 1 from a variable

                                    Add item to list: Adds an item to the end of a list

                                    Add list to list: Adds every item in one list tot he end of the other list

                                    Remove from list: Removes and item from a list at a specified position

                                    Set list postion: sets the position of a list which is used by the next list item functions

                                    Clear list: empties the contents of a list and resets it's position to zero.

                                    Create table from file: Allows you to create a table based on a csv file.

                                    Set table cell: Allows you to set a specific cel in a table

                                    Add list to table as column: Inserts a list into a table at a specified location as a column

                                    Add list to table as row: Inserts a list into a table at a specified location as a row

                                    Clear table: empties the contents of a table


                                    Email Commands:

                                    Send Email: sends an email using an smtp server

                                    Connect to Mail Server: connects to an email server

                                    Verify emails: Scans your mail box for verification emails and opens the verification links

                                    Create Table From Emails: creates a table using all the emails in your mailbox

                                    Delete Mail: deletes an email from a mailbox at a specified position



                                    Settings Commands:

                                    Clear cookies: Clears all cookies in the browser

                                    Change proxy: Changes the proxy used in the browser

                                    Set user agent: Changes the user agent sent to websites

                                    Set referrer: changes the referrer sent to websites

                                    Set proxy credentials: sets the username and password credentials for the current proxy

                                    Set website credentials: Sets the username and password credentials for HTTP authentication on a website

                                    Set visibility: Determines whether or not the browser shows what it's doing while your bot or script is running (Pro and Dev Editons Only)

                                    Allow images: Determines whether or not the browser loads external images(Pro and Dev Editons Only)

                                    Allow CSS: Determines whether or not the browser loads external CSS (Pro and Dev Editons Only)

                                    Allow javascript: Determines whether or not the browser loads external javascript(Pro and Dev Editons Only)

                                    Allow flash: Determines whether or not the browser loads external flash swf files(Pro and Dev Editons Only)




                                    UI Commands:

                                    UI text box: creates a text box on the UI panel tied to a specific variable.

                                    UI block text: creates a large text box on the UI panel tied to a specific variable.

                                    UI check box: creates a check box on the UI panel tied to a specific variable.

                                    UI open file: creates an open file field on the UI panel tied to a specific variable.

                                    UI save file: creates a save file field on the UI panel tied to a specific variable.

                                    UI drop down: creates a drop down menu on the UI panel tied to a specific variable.

                                    UI list box: creates a list box on the UI panel tied to a specific variable.

                                    UI stat monitor: creates a stat tracker on the UI panel tied to a specific variable.

                                    UI window: creates a menu item under the settings menu that displays the contained UI

                                    UI button: creates a button on the UI Panel that contains the runs the contained commands when clicked.

                                    UI html panel:  allows you to build your own UI with html (Dev Editon Only)

                                    UI splash page: allows you to navigate to a specific url once the bot is loaded(Dev Editon Only)

                                    UI remove branding: removed the "powered by link" on compiled bots(Dev Editon Only)

                                    UI foreground color: changes the foreground color on compiled bots (Dev Editon Only)

                                    UI background color: changes the background color on compiled bots(Dev Editon Only)

                                    UI tab color: changes the tab color on compiled bots(Dev Editon Only)




                                    __________________________





                                    FUNCTIONS

                                    Qualifier Functions:

                                    Search page: Returns whether or not the specified text is present on the page

                                    Contains: Returns whether or not the specified text contains the search text

                                    Exists: Returns whether or not the specified text exists on the current page

                                    True: Returns True

                                    False: Returns false

                                    Both: Returns true if both conditions are met and true

                                    Either: Returns true if either conditions are met and true

                                    Not: Returns true if the condition is not true

                                    Comparison: Compares two values and returns the results



                                    Math Functions:

                                    Eval: Returns the results of executing a piece of javascript

                                    Rand: Returns a random number between the minimum and maximum values



                                    Account Functions:

                                    Account Data: Returns a piece of Account Data generated by UBot


                                    Email Functions:

                                    Email total messages: Compares two values and returns the results

                                    Email subject: Returns the subject of the email at the specified position

                                    Email recipient: Returns the recipients of the emails at a specified position

                                    Email from: Returns the sender of the email at the specified position

                                    Email date: Returns the date received of the email at a specified position

                                    Email body text: Returns the body text of the email at the specified position

                                    Email body html: Returns the body html of the email at the specified position


                                    Variable Functions:

                                    List total: Returns the total number of items in a list

                                    List position: Returns the position of a specific list item

                                    Random list item: Returns a randomly selected item from a list

                                    Next list item: Returns the list item at the list's current position and increments the list's position (used with the set list position command)

                                    Previous list item: Returns the list item at the list's current position and decrements the list's position

                                    List item: Returns a list item at a specified position

                                    Read file: Returns the contents of a file

                                    List from file: Returns a list made up of each item within a file.

                                    List from text: Returns a list of items by separating the text into separate items based on a delimiter

                                    Text from list: Returns text based on connecting each list item by a connector

                                    Subtract lists: Returns the first list with al items from the second list removed from it (Pro and Dev Editons Only)

                                    Sort lists: Returns the original list sorted in ascendign or descending order (Pro and Dev Editons Only)

                                    Common list items: Returns a new list containing the common items between the first and second list (Pro and Dev Editons Only)

                                    Table cell: Returns the value of a table cell

                                    Table total rows: Returns the number of rows in a table

                                    Table total columns: Returns the number of columns in a table



                                    Browser Functions:

                                    Solve captcha: The function will either prompt the user to type in a CAPTCHA, or send the CAPTCHA to a service to solve it

                                    Page scrape: Returns the text scraped from the currect page between two specified pieces of text

                                    Scrape attribute: Returns the value of s specified element on a selected element

                                    Element offset: If an element selected matches more than one element on a page, this allows you to return one of those elements

                                    Element parent: Returns the parent of an element

                                    Element child: Returns the child of an element

                                    Element sibling: Returns the sibling of an element



                                    Text Functions:

                                    Spin: Returns a spun version of a given text

                                    New line: Returns a line break

                                    Nothing: Returns an empty value

                                    Replace: Returns the original text with all instances of the search text replaced by the replace text

                                    Replace regular expression: Returns the original text with all instances of the pattern text replaced by the replace text

                                    Change text casing: Returns the text with the casing fo the text changed

                                    Trim:  Returns the text with all leading or trailing blank spaces removed

                                    Substring: Returns the specified part of an original string

                                    Random text: Returns a random alpha numeric string of user define length, including upper and lowercase text.

                                    Pad text: Returns a new string that is padded with a character

                                    Text lenght: Returns the tottal length of text

                                    Insert text:  Returns the original text with another piece of text inserted at a specified position

                                    Find index:  Returns the index of a piece of text with the original text

                                    Append line to text: Returns the original tetx with a new line of text appended at the end of the original text

                                    Find regular expression:  Returns a list fo all matches  of the regular expression in the original text



                                    Document functions:

                                    Url: Returns the current url

                                    Title: Returns the current page title

                                    Meta description: Returns the current meta description

                                    Meta keywords: Returns the current meta keywords

                                    Document text: Returns the current document text



                                    System Functions:

                                    Confirm: displays a yes/no confirmation box that returns true if yes is chosen

                                    Prompt: Prompts the user to respond and returns the text that was typed into the function

                                    Date: Returns the current date



                                    File Functions:

                                    Special Folder:  Returns the path of a special system folder

                                    Get Files:  Returns the list of all files within a given directory(Pro and Dev Editons Only)



                                </div>
                            </div>
                    </ul>
                    </li>
                </div>

            </div>
        </div>
        @endsection



