<h2> <span class="mw-headline" id="Getting_Started"> Getting Started </span></h2>
<h3> <span class="mw-headline" id="UBot_Studio_API_Terms_of_Use"> UBot Studio API Terms of Use </span></h3>
<p>All use of the UBot Studio API is governed by the following Terms of Use: <a rel="nofollow" class="external text" href="https://tinyurl.com/apitos">UBot Studio API TOS</a>
</p>
<h3> <span class="mw-headline" id="Confirming_Your_Plugin_Key"> Confirming Your Plugin Key </span></h3>
<p>BEFORE you begin development, you will need to open a support ticket for review of your intended plugin. There is NO guarantee you will receive a key to develop your plugin, so it is extremely recommended that you do this first. Please see the section below on "Unreviewed Plugins" and follow the instructions there.
</p>
<h3> <span class="mw-headline" id="Recommended_Software"> Recommended Software </span></h3>
<p>The following software is recommended for creating UBot Studio plugin.
</p>
<ol><li> A .NET compiler that supports .NET 4.0:
        <ul><li> Microsoft Visual Studio 2010
            </li><li> Microsoft Visual C# 2010 Express
            </li><li> Microsoft Visual Basic 2010 Express
            </li><li> Microsoft Visual Studio 2012
            </li><li> Microsoft Visual Studio Express 2012 for Windows Desktop
            </li></ul>
    </li><li> UBot Studio
        <ul><li> This is needed to test the plugins you create, and verify they are working correctly inside of UBot Studio.
            </li></ul>
    </li></ol>
<h3> <span class="mw-headline" id="Installing_Visual_C.23.2FVisual_Basic_2010_Express"> Installing Visual C#/Visual Basic 2010 Express </span></h3>
<p>You can download Visual C# 2010 and Visual Basic 2010 express from: <a rel="nofollow" class="external free" href="https://www.microsoft.com/visualstudio/eng/downloads#d-2010-express">http://www.microsoft.com/visualstudio/eng/downloads#d-2010-express</a>
</p>
<h3> <span class="mw-headline" id="Downloading_The_UBotPlugin.dll_Library"> Downloading The UBotPlugin.dll Library </span></h3>
<p>You can download the <b>UBotPlugin.dll</b> from  <a rel="nofollow" class="external free" href="http://www.ubotstudio.com/files/plugins/UBotPlugin.dll">http://www.ubotstudio.com/files/plugins/UBotPlugin.dll</a>. You will need this library to create UBot Studio plugins.
</p>
<h2> <span class="mw-headline" id="Making_Your_First_Plugin"> Making Your First Plugin </span></h2>
<h3> <span class="mw-headline" id="Creating_The_Project"> Creating The Project </span></h3>
<ol><li> Download <b>UBotPlugin.dll</b> from <a rel="nofollow" class="external free" href="http://www.ubotstudio.com/files/plugins/UBotPlugin.dll">http://www.ubotstudio.com/files/plugins/UBotPlugin.dll</a>
    </li><li> Open Microsoft Visual C# 2010 Express and choose <b>New Project...</b> (<a href="/index.php?title=File:NewProject.png&amp;action=edit&amp;redlink=1" class="new" title="File:NewProject.png (page does not exist)">Screenshot</a>)
    </li><li> Choose the <b>WPF Application</b> template and name your project <b>MyFirstPlugin</b> (<a href="/index.php?title=File:WpfApplication.png&amp;action=edit&amp;redlink=1" class="new" title="File:WpfApplication.png (page does not exist)">Screenshot</a>)
    </li><li> From the <b>Solution Explorer</b> delete <b>App.xaml</b> and <b>MainWindow.xaml</b> (<a href="/index.php?title=File:DeleteXaml.png&amp;action=edit&amp;redlink=1" class="new" title="File:DeleteXaml.png (page does not exist)">Screenshot</a>)
    </li><li> From the <b>Main Menu</b> choose <b>Project -&gt; MyFirstPlugin Properties...</b> (<a href="/index.php?title=File:ProjectProperties.png&amp;action=edit&amp;redlink=1" class="new" title="File:ProjectProperties.png (page does not exist)">Screenshot</a>)
    </li><li> In the <b>Application Tab</b> change the <b>Output type</b> to <b>Class Library</b> (<a href="/index.php?title=File:ClassLibrary.png&amp;action=edit&amp;redlink=1" class="new" title="File:ClassLibrary.png (page does not exist)">Screenshot</a>)
    </li><li> From the <b>Main Menu</b> choose <b>File -&gt; Save All</b> (<a href="/index.php?title=File:SaveAll.png&amp;action=edit&amp;redlink=1" class="new" title="File:SaveAll.png (page does not exist)">Screenshot</a>)
    </li><li> If desired, change the location where the project is saved. Make a note of the location as you will need it in a later step then click Save.  (<a href="/index.php?title=File:SaveProject.png&amp;action=edit&amp;redlink=1" class="new" title="File:SaveProject.png (page does not exist)">Screenshot</a>)
    </li><li> From the <b>Solution Explorer</b> right click on the project and choose <b>Add Reference...</b> (<a href="/index.php?title=File:AddReference.png&amp;action=edit&amp;redlink=1" class="new" title="File:AddReference.png (page does not exist)">Screenshot</a>)
    </li><li> Select the <b>UBotPlugin.dll</b> downloaded in the first step and click OK (<a href="/index.php?title=File:UBotPluginReference.png&amp;action=edit&amp;redlink=1" class="new" title="File:UBotPluginReference.png (page does not exist)">Screenshot</a>)
    </li></ol>
<h3> <span class="mw-headline" id="Creating_The_Command"> Creating The Command </span></h3>
<ol>
    <li>From the <b>Solution Explorer</b> right click on the project and choose <b>Add -&gt; Class...</b> (<a href="/index.php?title=File:AddClass.png&amp;action=edit&amp;redlink=1" class="new" title="File:AddClass.png (page does not exist)">Screenshot</a>)</li>
    <li>For the name of the class enter <b>MyFirstCommand.cs</b>  (<a href="/index.php?title=File:MyFirstCommand.png&amp;action=edit&amp;redlink=1" class="new" title="File:MyFirstCommand.png (page does not exist)">Screenshot</a>)</li>
    <li>Modify your class to implement the <b>IUBotCommand</b> interface, and add a using directive: <b>using UBotPlugin;</b> at the bottom of the other using directives. Your script should now look like:

        <div dir="ltr" class="mw-geshi mw-content-ltr"><div class="csharp source-csharp"><pre class="de1"><span class="kw1">using</span> <span class="co3">System</span><span class="sy0">;</span>
<span class="kw1">using</span> <span class="co3">System.Collections.Generic</span><span class="sy0">;</span>
<span class="kw1">using</span> <span class="co3">System.Linq</span><span class="sy0">;</span>
<span class="kw1">using</span> <span class="co3">System.Text</span><span class="sy0">;</span>
<span class="kw1">using</span> <span class="co3">UBotPlugin</span><span class="sy0">;</span>
&#160;
<span class="kw1">namespace</span> MyFirstPlugin
<span class="br0">&#123;</span>
    <span class="kw1">public</span> <span class="kw4">class</span> MyFirstCommand <span class="sy0">:</span> IUBotCommand
    <span class="br0">&#123;</span>
    <span class="br0">&#125;</span>
<span class="br0">&#125;</span></pre></div></div></li>
    <li>Right click on the interface IUBotCommand, and choose Implement Interface-&gt;Implement Interface. Your script should now look like:

        <div dir="ltr" class="mw-geshi mw-content-ltr"><div class="csharp source-csharp"><pre class="de1"><span class="kw1">using</span> <span class="co3">System</span><span class="sy0">;</span>
<span class="kw1">using</span> <span class="co3">System.Collections.Generic</span><span class="sy0">;</span>
<span class="kw1">using</span> <span class="co3">System.Linq</span><span class="sy0">;</span>
<span class="kw1">using</span> <span class="co3">System.Text</span><span class="sy0">;</span>
<span class="kw1">using</span> <span class="co3">UBotPlugin</span><span class="sy0">;</span>
&#160;
<span class="kw1">namespace</span> MyFirstPlugin
<span class="br0">&#123;</span>
    <span class="kw1">public</span> <span class="kw4">class</span> MyFirstCommand <span class="sy0">:</span> IUBotCommand
    <span class="br0">&#123;</span>
        <span class="kw1">public</span> <span class="kw4">string</span> Category
        <span class="br0">&#123;</span>
            get <span class="br0">&#123;</span> <span class="kw1">throw</span> <span class="kw3">new</span> NotImplementedException<span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="br0">&#125;</span>
        <span class="br0">&#125;</span>
&#160;
        <span class="kw1">public</span> <span class="kw4">string</span> CommandName
        <span class="br0">&#123;</span>
            get <span class="br0">&#123;</span> <span class="kw1">throw</span> <span class="kw3">new</span> NotImplementedException<span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="br0">&#125;</span>
        <span class="br0">&#125;</span>
&#160;
        <span class="kw1">public</span> <span class="kw4">void</span> Execute<span class="br0">&#40;</span>IUBotStudio ubotStudio, Dictionary<span class="sy0">&lt;</span><span class="kw4">string</span>, <span class="kw4">string</span><span class="sy0">&gt;</span> parameters<span class="br0">&#41;</span>
        <span class="br0">&#123;</span>
            <span class="kw1">throw</span> <span class="kw3">new</span> NotImplementedException<span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
        <span class="br0">&#125;</span>
&#160;
        <span class="kw1">public</span> <span class="kw4">bool</span> IsContainer
        <span class="br0">&#123;</span>
            get <span class="br0">&#123;</span> <span class="kw1">throw</span> <span class="kw3">new</span> NotImplementedException<span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="br0">&#125;</span>
        <span class="br0">&#125;</span>
&#160;
        <span class="kw1">public</span> IEnumerable<span class="sy0">&lt;</span>UBotParameterDefinition<span class="sy0">&gt;</span> ParameterDefinitions
        <span class="br0">&#123;</span>
            get <span class="br0">&#123;</span> <span class="kw1">throw</span> <span class="kw3">new</span> NotImplementedException<span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="br0">&#125;</span>
        <span class="br0">&#125;</span>
&#160;
        <span class="kw1">public</span> UBotVersion UBotVersion
        <span class="br0">&#123;</span>
            get <span class="br0">&#123;</span> <span class="kw1">throw</span> <span class="kw3">new</span> NotImplementedException<span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="br0">&#125;</span>
        <span class="br0">&#125;</span>
    <span class="br0">&#125;</span>
<span class="br0">&#125;</span></pre></div></div></li>
    <li>Create a private member variable <b>_parameters</b> as a <b>List&lt;UBotParameterDefinition&gt;</b>. Then, create a constructor for your command. Your script should now look like:

        <div dir="ltr" class="mw-geshi mw-content-ltr"><div class="csharp source-csharp"><pre class="de1"><span class="kw1">using</span> <span class="co3">System</span><span class="sy0">;</span>
<span class="kw1">using</span> <span class="co3">System.Collections.Generic</span><span class="sy0">;</span>
<span class="kw1">using</span> <span class="co3">System.Linq</span><span class="sy0">;</span>
<span class="kw1">using</span> <span class="co3">System.Text</span><span class="sy0">;</span>
<span class="kw1">using</span> <span class="co3">UBotPlugin</span><span class="sy0">;</span>
&#160;
<span class="kw1">namespace</span> MyFirstPlugin
<span class="br0">&#123;</span>
    <span class="kw1">public</span> <span class="kw4">class</span> MyFirstCommand <span class="sy0">:</span> IUBotCommand
    <span class="br0">&#123;</span>
        <span class="kw1">private</span> List<span class="sy0">&lt;</span>UBotParameterDefinition<span class="sy0">&gt;</span> _parameters <span class="sy0">=</span> <span class="kw3">new</span> List<span class="sy0">&lt;</span>UBotParameterDefinition<span class="sy0">&gt;</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
&#160;
        <span class="kw1">public</span> MyFirstCommand<span class="br0">&#40;</span><span class="br0">&#41;</span>
        <span class="br0">&#123;</span>
&#160;
        <span class="br0">&#125;</span>
&#160;
        <span class="kw1">public</span> <span class="kw4">string</span> Category
        <span class="br0">&#123;</span>
            get <span class="br0">&#123;</span> <span class="kw1">throw</span> <span class="kw3">new</span> NotImplementedException<span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="br0">&#125;</span>
        <span class="br0">&#125;</span>
&#160;
        <span class="kw1">public</span> <span class="kw4">string</span> CommandName
        <span class="br0">&#123;</span>
            get <span class="br0">&#123;</span> <span class="kw1">throw</span> <span class="kw3">new</span> NotImplementedException<span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="br0">&#125;</span>
        <span class="br0">&#125;</span>
&#160;
        <span class="kw1">public</span> <span class="kw4">void</span> Execute<span class="br0">&#40;</span>IUBotStudio ubotStudio, Dictionary<span class="sy0">&lt;</span><span class="kw4">string</span>, <span class="kw4">string</span><span class="sy0">&gt;</span> parameters<span class="br0">&#41;</span>
        <span class="br0">&#123;</span>
            <span class="kw1">throw</span> <span class="kw3">new</span> NotImplementedException<span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
        <span class="br0">&#125;</span>
&#160;
        <span class="kw1">public</span> <span class="kw4">bool</span> IsContainer
        <span class="br0">&#123;</span>
            get <span class="br0">&#123;</span> <span class="kw1">throw</span> <span class="kw3">new</span> NotImplementedException<span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="br0">&#125;</span>
        <span class="br0">&#125;</span>
&#160;
        <span class="kw1">public</span> IEnumerable<span class="sy0">&lt;</span>UBotParameterDefinition<span class="sy0">&gt;</span> ParameterDefinitions
        <span class="br0">&#123;</span>
            get <span class="br0">&#123;</span> <span class="kw1">throw</span> <span class="kw3">new</span> NotImplementedException<span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="br0">&#125;</span>
        <span class="br0">&#125;</span>
&#160;
        <span class="kw1">public</span> UBotVersion UBotVersion
        <span class="br0">&#123;</span>
            get <span class="br0">&#123;</span> <span class="kw1">throw</span> <span class="kw3">new</span> NotImplementedException<span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="br0">&#125;</span>
        <span class="br0">&#125;</span>
    <span class="br0">&#125;</span>
<span class="br0">&#125;</span></pre></div></div></li>
    <li>Inside the constructor we are going to define the parameters our command uses. Our command is going to take the user's name as input, and display a message "Hello, name", where name is the name they entered. Since our command takes the input of the user's name, we will add one parameter Name, of type String to our _parameters list. Your constructor should now look like:

        <div dir="ltr" class="mw-geshi mw-content-ltr"><div class="csharp source-csharp"><pre class="de1"><span class="kw1">public</span> MyFirstCommand<span class="br0">&#40;</span><span class="br0">&#41;</span>
<span class="br0">&#123;</span>
    _parameters<span class="sy0">.</span><span class="me1">Add</span><span class="br0">&#40;</span><span class="kw3">new</span> UBotParameterDefinition<span class="br0">&#40;</span><span class="st0">&quot;Name&quot;</span>, UBotType<span class="sy0">.</span><span class="kw4">String</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="br0">&#125;</span></pre></div></div></li>
    <li>Next, we are going to define the category this command will be in. Since we want this command to be in the Action Commands category we will modify the Category property to return "Action Commands".

        <div dir="ltr" class="mw-geshi mw-content-ltr"><div class="csharp source-csharp"><pre class="de1"><span class="kw1">public</span> <span class="kw4">string</span> Category
<span class="br0">&#123;</span>
    get <span class="br0">&#123;</span> <span class="kw1">return</span> <span class="st0">&quot;Action Commands&quot;</span><span class="sy0">;</span> <span class="br0">&#125;</span>
<span class="br0">&#125;</span></pre></div></div></li>
    <li>Now we are going to define the command name. This is the name we will see in the toolbox when we want to use our name. The convention is to use all lowercase letters. Set the CommandName property to return "hello".

        <div dir="ltr" class="mw-geshi mw-content-ltr"><div class="csharp source-csharp"><pre class="de1"><span class="kw1">public</span> <span class="kw4">string</span> CommandName
<span class="br0">&#123;</span>
    get <span class="br0">&#123;</span> <span class="kw1">return</span> <span class="st0">&quot;hello&quot;</span><span class="sy0">;</span> <span class="br0">&#125;</span>
<span class="br0">&#125;</span></pre></div></div></li>
    <li>Next is the Execute method. This method is called when a user runs your command inside of UBot Studio. It is sent an instance of an IUBotStudio interface which can be used for getting and setting values of variables, lists and tables. For this tutorial we are going to ignore this. The second parameter contains the parameters that were passed from UBot Studio to our command. This is where we will be able to access the name the user typed. We can access the value by referencing parameters["Name"] since we defined our parameter as "Name" above. We will use this value along with a MessageBox.Show command to show a message "Hello name".

        <div dir="ltr" class="mw-geshi mw-content-ltr"><div class="csharp source-csharp"><pre class="de1"><span class="kw1">public</span> <span class="kw4">void</span> Execute<span class="br0">&#40;</span>IUBotStudio ubotStudio, Dictionary<span class="sy0">&lt;</span><span class="kw4">string</span>, <span class="kw4">string</span><span class="sy0">&gt;</span> parameters<span class="br0">&#41;</span>
<span class="br0">&#123;</span>
    <span class="kw4">string</span> name <span class="sy0">=</span> parameters<span class="br0">&#91;</span><span class="st0">&quot;Name&quot;</span><span class="br0">&#93;</span><span class="sy0">;</span>
    <span class="kw5">System</span><span class="sy0">.</span><span class="me1">Windows</span><span class="sy0">.</span><span class="me1">MessageBox</span><span class="sy0">.</span><span class="me1">Show</span><span class="br0">&#40;</span><span class="st0">&quot;Hello &quot;</span> <span class="sy0">+</span> name<span class="br0">&#41;</span><span class="sy0">;</span>
<span class="br0">&#125;</span></pre></div></div></li>
    <li>The IsContainer property should be next. Since this command will not have other commands contained inside of it, we will set it to false.

        <div dir="ltr" class="mw-geshi mw-content-ltr"><div class="csharp source-csharp"><pre class="de1"><span class="kw1">public</span> <span class="kw4">bool</span> IsContainer
<span class="br0">&#123;</span>
    get <span class="br0">&#123;</span> <span class="kw1">return</span> <span class="kw1">false</span><span class="sy0">;</span> <span class="br0">&#125;</span>
<span class="br0">&#125;</span></pre></div></div></li>
    <li>Next, the ParameterDefinitions property needs to return the _parameters list we defined above.

        <div dir="ltr" class="mw-geshi mw-content-ltr"><div class="csharp source-csharp"><pre class="de1"><span class="kw1">public</span> IEnumerable<span class="sy0">&lt;</span>UBotParameterDefinition<span class="sy0">&gt;</span> ParameterDefinitions
<span class="br0">&#123;</span>
    get <span class="br0">&#123;</span> <span class="kw1">return</span> _parameters<span class="sy0">;</span> <span class="br0">&#125;</span>
<span class="br0">&#125;</span></pre></div></div></li>
    <li>Finally, the UBotVersion property needs to return the version that this command should be available in. If you are using commands that are only available in UBot Studio Professiona/Developer editions, then you should choose your version accordingly. For this example we will choose Standard.

        <div dir="ltr" class="mw-geshi mw-content-ltr"><div class="csharp source-csharp"><pre class="de1"><span class="kw1">public</span> UBotVersion UBotVersion
<span class="br0">&#123;</span>
    get <span class="br0">&#123;</span> <span class="kw1">return</span> UBotVersion<span class="sy0">.</span><span class="me1">Standard</span><span class="sy0">;</span> <span class="br0">&#125;</span>
<span class="br0">&#125;</span></pre></div></div></li>
    <li>Your finished script should now look like:

        <div dir="ltr" class="mw-geshi mw-content-ltr"><div class="csharp source-csharp"><pre class="de1"><span class="kw1">using</span> <span class="co3">System</span><span class="sy0">;</span>
<span class="kw1">using</span> <span class="co3">System.Collections.Generic</span><span class="sy0">;</span>
<span class="kw1">using</span> <span class="co3">System.Linq</span><span class="sy0">;</span>
<span class="kw1">using</span> <span class="co3">System.Text</span><span class="sy0">;</span>
<span class="kw1">using</span> <span class="co3">UBotPlugin</span><span class="sy0">;</span>
&#160;
<span class="kw1">namespace</span> MyFirstPlugin
<span class="br0">&#123;</span>
    <span class="kw1">public</span> <span class="kw4">class</span> MyFirstCommand <span class="sy0">:</span> IUBotCommand
    <span class="br0">&#123;</span>
        <span class="kw1">private</span> List<span class="sy0">&lt;</span>UBotParameterDefinition<span class="sy0">&gt;</span> _parameters <span class="sy0">=</span> <span class="kw3">new</span> List<span class="sy0">&lt;</span>UBotParameterDefinition<span class="sy0">&gt;</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
&#160;
        <span class="kw1">public</span> MyFirstCommand<span class="br0">&#40;</span><span class="br0">&#41;</span>
        <span class="br0">&#123;</span>
            _parameters<span class="sy0">.</span><span class="me1">Add</span><span class="br0">&#40;</span><span class="kw3">new</span> UBotParameterDefinition<span class="br0">&#40;</span><span class="st0">&quot;Name&quot;</span>, UBotType<span class="sy0">.</span><span class="kw4">String</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span>
        <span class="br0">&#125;</span>
&#160;
        <span class="kw1">public</span> <span class="kw4">string</span> Category
        <span class="br0">&#123;</span>
            get <span class="br0">&#123;</span> <span class="kw1">return</span> <span class="st0">&quot;Action Commands&quot;</span><span class="sy0">;</span> <span class="br0">&#125;</span>
        <span class="br0">&#125;</span>
&#160;
        <span class="kw1">public</span> <span class="kw4">string</span> CommandName
        <span class="br0">&#123;</span>
            get <span class="br0">&#123;</span> <span class="kw1">return</span> <span class="st0">&quot;hello&quot;</span><span class="sy0">;</span> <span class="br0">&#125;</span>
        <span class="br0">&#125;</span>
&#160;
        <span class="kw1">public</span> <span class="kw4">void</span> Execute<span class="br0">&#40;</span>IUBotStudio ubotStudio, Dictionary<span class="sy0">&lt;</span><span class="kw4">string</span>, <span class="kw4">string</span><span class="sy0">&gt;</span> parameters<span class="br0">&#41;</span>
        <span class="br0">&#123;</span>
            <span class="kw4">string</span> name <span class="sy0">=</span> parameters<span class="br0">&#91;</span><span class="st0">&quot;Name&quot;</span><span class="br0">&#93;</span><span class="sy0">;</span>
            <span class="kw5">System</span><span class="sy0">.</span><span class="me1">Windows</span><span class="sy0">.</span><span class="me1">MessageBox</span><span class="sy0">.</span><span class="me1">Show</span><span class="br0">&#40;</span><span class="st0">&quot;Hello &quot;</span> <span class="sy0">+</span> name<span class="br0">&#41;</span><span class="sy0">;</span>
        <span class="br0">&#125;</span>
&#160;
        <span class="kw1">public</span> <span class="kw4">bool</span> IsContainer
        <span class="br0">&#123;</span>
            get <span class="br0">&#123;</span> <span class="kw1">return</span> <span class="kw1">false</span><span class="sy0">;</span> <span class="br0">&#125;</span>
        <span class="br0">&#125;</span>
&#160;
        <span class="kw1">public</span> IEnumerable<span class="sy0">&lt;</span>UBotParameterDefinition<span class="sy0">&gt;</span> ParameterDefinitions
        <span class="br0">&#123;</span>
            get <span class="br0">&#123;</span> <span class="kw1">return</span> _parameters<span class="sy0">;</span> <span class="br0">&#125;</span>
        <span class="br0">&#125;</span>
&#160;
        <span class="kw1">public</span> UBotVersion UBotVersion
        <span class="br0">&#123;</span>
            get <span class="br0">&#123;</span> <span class="kw1">return</span> UBotVersion<span class="sy0">.</span><span class="me1">Standard</span><span class="sy0">;</span> <span class="br0">&#125;</span>
        <span class="br0">&#125;</span>
    <span class="br0">&#125;</span>
<span class="br0">&#125;</span></pre></div></div></li>
</ol>
<h3> <span class="mw-headline" id="Testing_In_UBot_Studio"> Testing In UBot Studio </span></h3>
<ol><li> From the <b>Main Menu</b> choose <b>Debug-&gt;Build Solution</b>. This will create the library dll file that you can use in UBot Studio.  (<a href="/index.php?title=File:BuildSolution.png&amp;action=edit&amp;redlink=1" class="new" title="File:BuildSolution.png (page does not exist)">Screenshot</a>)
    </li><li> Open up <b>UBot Studio</b>, and from the <b>Main Menu</b> choose <b>Tools-&gt;Plugins</b>.  (<a href="/index.php?title=File:ToolsPlugins.png&amp;action=edit&amp;redlink=1" class="new" title="File:ToolsPlugins.png (page does not exist)">Screenshot</a>)
    </li><li> Click the <b>Add...</b> button and choose the plugin dll you built. This should be located in the project path specified in <b>Creating The Project - Step 8</b>, inside the following directory: <b>MyFirstPlugin/bin/Debug/MyFirstPlugin.dll</b>.  (<a href="/index.php?title=File:SelectPlugin.png&amp;action=edit&amp;redlink=1" class="new" title="File:SelectPlugin.png (page does not exist)">Screenshot</a>)
    </li><li> Close the Plugins dialog box.
    </li><li> Open the toolbox, and expand the Action Commands group. You should see your hello command there.  (<a href="/index.php?title=File:PluginToolbox.png&amp;action=edit&amp;redlink=1" class="new" title="File:PluginToolbox.png (page does not exist)">Screenshot</a>)
    </li><li> Drag the hello command into your script, fill out the Name parameter, and click run. You should see Hello name pop up in a MessageBox.  (<a href="/index.php?title=File:RunCommand.png&amp;action=edit&amp;redlink=1" class="new" title="File:RunCommand.png (page does not exist)">Screenshot</a>)
    </li><li> Congratulations, you've now successfully created your first plugin. Keep in mind, when you update your plugin, you will need to complete steps 1-4 of the Testing In UBot Studio section of this tutorial each time.
    </li></ol>
<h2> <span class="mw-headline" id="Unreviewed_Plugins"> Unreviewed Plugins </span></h2>
<h3> <span class="mw-headline" id="Submitting_A_Plugin_For_Review"> Submitting A Plugin For Review </span></h3>
<p>When you create a new plugin it will show up in UBot Studio as unreviewed. In order to have your plugin reviewed, you must submit a ticket to <a rel="nofollow" class="external free" href="http://support.ubotstudio.com">http://support.ubotstudio.com</a>. You may be emailed and asked to provide more information. Once approved, you will receive a plugin key.
</p>
<h3> <span class="mw-headline" id="Using_A_Plugin_Key"> Using A Plugin Key </span></h3>
<p>Once you have your plugin key, you need to add a PluginInfo class into your plugin with a HashCode property that returns your plugin key.
</p>
<div dir="ltr" class="mw-geshi mw-content-ltr"><div class="csharp source-csharp"><pre class="de1"><span class="kw1">public</span> <span class="kw4">class</span> PluginInfo
<span class="br0">&#123;</span>
    <span class="kw1">public</span> <span class="kw1">static</span> <span class="kw4">string</span> HashCode <span class="br0">&#123;</span> get <span class="br0">&#123;</span> <span class="kw1">return</span> <span class="st0">&quot;Put your plugin key here&quot;</span><span class="sy0">;</span> <span class="br0">&#125;</span> <span class="br0">&#125;</span>
<span class="br0">&#125;</span></pre></div></div>
<p>After recompiling your plugin, it should no longer show up as unreviewed in the list of plugins.
</p>
<h2> <span class="mw-headline" id="Plugin_Interfaces"> Plugin Interfaces </span></h2>
<h3> <span class="mw-headline" id="IUBotCommand"> IUBotCommand </span></h3>
<div dir="ltr" class="mw-geshi mw-content-ltr"><div class="csharp source-csharp"><pre class="de1"><span class="co1">/// &lt;summary&gt;</span>
<span class="co1">/// This interface is for implementing UBot Studio commands in a plugin.</span>
<span class="co1">/// &lt;/summary&gt;</span>
<span class="kw1">public</span> <span class="kw4">interface</span> IUBotCommand
<span class="br0">&#123;</span>
    <span class="co1">/// &lt;summary&gt;</span>
    <span class="co1">/// The name of the command as it will displayed in the UBot Studio toolbox.</span>
    <span class="co1">/// This should be lowercase to match the other commands.</span>
    <span class="co1">/// &lt;/summary&gt;</span>
    <span class="kw4">string</span> CommandName <span class="br0">&#123;</span> get<span class="sy0">;</span> <span class="br0">&#125;</span>
    <span class="co1">/// &lt;summary&gt;</span>
    <span class="co1">/// The category the command should be placed in.</span>
    <span class="co1">/// If you name a category not already in the toolbox, a new category will be created.</span>
    <span class="co1">/// &lt;/summary&gt;</span>
    <span class="kw4">string</span> Category <span class="br0">&#123;</span> get<span class="sy0">;</span> <span class="br0">&#125;</span>
    <span class="co1">/// &lt;summary&gt;</span>
    <span class="co1">/// The parameters the command takes when used in UBot Studio.</span>
    <span class="co1">/// &lt;/summary&gt;</span>
    IEnumerable<span class="sy0">&lt;</span>UBotParameterDefinition<span class="sy0">&gt;</span> ParameterDefinitions <span class="br0">&#123;</span> get<span class="sy0">;</span> <span class="br0">&#125;</span>
    <span class="co1">/// &lt;summary&gt;</span>
    <span class="co1">/// This method is called when UBot Studio executes your command when a user runs a script.</span>
    <span class="co1">/// &lt;/summary&gt;</span>
    <span class="co1">/// &lt;param name=&quot;ubotStudio&quot;&gt;A reference to UBot Studio that allows you do things such as get and set variables.&lt;/param&gt;</span>
    <span class="co1">/// &lt;param name=&quot;parameters&quot;&gt;A dictionary where the key is the parameter name defined in the ParameterDefinitions above, and the value is the value given in UBot Studio.&lt;/param&gt;</span>
    <span class="kw4">void</span> Execute<span class="br0">&#40;</span>IUBotStudio ubotStudio, Dictionary<span class="sy0">&lt;</span><span class="kw4">string</span>, <span class="kw4">string</span><span class="sy0">&gt;</span> parameters<span class="br0">&#41;</span><span class="sy0">;</span>
    <span class="co1">/// &lt;summary&gt;</span>
    <span class="co1">/// Whether or not your command allows other commands to be dragged inside of it.</span>
    <span class="co1">/// &lt;/summary&gt;</span>
    <span class="kw4">bool</span> IsContainer <span class="br0">&#123;</span> get<span class="sy0">;</span> <span class="br0">&#125;</span>
    <span class="co1">/// &lt;summary&gt;</span>
    <span class="co1">/// The version of UBot Studio that this command is available to.</span>
    <span class="co1">/// &lt;/summary&gt;</span>
    UBotVersion UBotVersion <span class="br0">&#123;</span> get<span class="sy0">;</span> <span class="br0">&#125;</span>
<span class="br0">&#125;</span></pre></div></div>
<h3> <span class="mw-headline" id="IUBotFunction"> IUBotFunction </span></h3>
<div dir="ltr" class="mw-geshi mw-content-ltr"><div class="csharp source-csharp"><pre class="de1"><span class="co1">/// &lt;summary&gt;</span>
<span class="co1">/// This interface is for implementing UBot Studio functions in a plugin.</span>
<span class="co1">/// &lt;/summary&gt;</span>
<span class="kw1">public</span> <span class="kw4">interface</span> IUBotFunction
<span class="br0">&#123;</span>
    <span class="co1">/// &lt;summary&gt;</span>
    <span class="co1">/// The name of the function as it will displayed in the UBot Studio toolbox.</span>
    <span class="co1">/// This should be lowercase and start with $ to match the other commands.</span>
    <span class="co1">/// &lt;/summary&gt;</span>
    <span class="kw4">string</span> FunctionName <span class="br0">&#123;</span> get<span class="sy0">;</span> <span class="br0">&#125;</span>
    <span class="co1">/// &lt;summary&gt;</span>
    <span class="co1">/// This property is accessed after Execute is called, and should return the value of your function.</span>
    <span class="co1">/// &lt;/summary&gt;</span>
    <span class="kw4">object</span> ReturnValue <span class="br0">&#123;</span> get<span class="sy0">;</span> <span class="br0">&#125;</span>
    <span class="co1">/// &lt;summary&gt;</span>
    <span class="co1">/// The type that your function returns. Supported types are strings and lists.</span>
    <span class="co1">/// &lt;/summary&gt;</span>
    UBotType ReturnValueType <span class="br0">&#123;</span> get<span class="sy0">;</span> <span class="br0">&#125;</span>
    <span class="co1">/// &lt;summary&gt;</span>
    <span class="co1">/// The category the function should be placed in.</span>
    <span class="co1">/// If you name a category not already in the toolbox, a new category will be created.</span>
    <span class="co1">/// &lt;/summary&gt;</span>
    <span class="kw4">string</span> Category <span class="br0">&#123;</span> get<span class="sy0">;</span> <span class="br0">&#125;</span>
    <span class="co1">/// &lt;summary&gt;</span>
    <span class="co1">/// This method is called when UBot Studio executes your command when a user runs a script.</span>
    <span class="co1">/// &lt;/summary&gt;</span>
    <span class="co1">/// &lt;param name=&quot;ubotStudio&quot;&gt;A reference to UBot Studio that allows you do things such as get and set variables.&lt;/param&gt;</span>
    <span class="co1">/// &lt;param name=&quot;parameters&quot;&gt;A dictionary where the key is the parameter name defined in the ParameterDefinitions above, and the value is the value given in UBot Studio.&lt;/param&gt;</span>
    IEnumerable<span class="sy0">&lt;</span>UBotParameterDefinition<span class="sy0">&gt;</span> ParameterDefinitions <span class="br0">&#123;</span> get<span class="sy0">;</span> <span class="br0">&#125;</span>
    <span class="co1">/// &lt;summary&gt;</span>
    <span class="co1">/// This method is called when UBot Studio executes your function when a user runs a script.</span>
    <span class="co1">/// &lt;/summary&gt;</span>
    <span class="co1">/// &lt;param name=&quot;ubotStudio&quot;&gt;A reference to UBot Studio that allows you do things such as get and set variables.&lt;/param&gt;</span>
    <span class="co1">/// &lt;param name=&quot;parameters&quot;&gt;A dictionary where the key is the parameter name defined in the ParameterDefinitions above, and the value is the value given in UBot Studio.&lt;/param&gt;</span>
    <span class="kw4">void</span> Execute<span class="br0">&#40;</span>IUBotStudio ubotStudio, Dictionary<span class="sy0">&lt;</span><span class="kw4">string</span>, <span class="kw4">string</span><span class="sy0">&gt;</span> parameters<span class="br0">&#41;</span><span class="sy0">;</span>
    <span class="co1">/// &lt;summary&gt;</span>
    <span class="co1">/// The version of UBot Studio that this command is available to.</span>
    <span class="co1">/// &lt;/summary&gt;</span>
    UBotVersion UBotVersion <span class="br0">&#123;</span> get<span class="sy0">;</span> <span class="br0">&#125;</span>
<span class="br0">&#125;</span></pre></div></div>
<h3> <span class="mw-headline" id="IUBotStudio"> IUBotStudio </span></h3>
<div dir="ltr" class="mw-geshi mw-content-ltr"><div class="csharp source-csharp"><pre class="de1"><span class="co1">/// &lt;summary&gt;</span>
<span class="co1">/// An instance of this interface is passed to Execute to allow you to do such things as get and set variables.</span>
<span class="co1">/// &lt;/summary&gt;</span>
<span class="kw1">public</span> <span class="kw4">interface</span> IUBotStudio
<span class="br0">&#123;</span>
    <span class="co1">/// &lt;summary&gt;</span>
    <span class="co1">/// This method allows you to ask UBot Studio to run specific code view scripts.</span>
    <span class="co1">/// &lt;/summary&gt;</span>
    <span class="co1">/// &lt;param name=&quot;script&quot;&gt;The code view script to run.&lt;/param&gt;</span>
    <span class="kw4">void</span> RunScript<span class="br0">&#40;</span><span class="kw4">string</span> script<span class="br0">&#41;</span><span class="sy0">;</span>
    <span class="co1">/// &lt;summary&gt;</span>
    <span class="co1">/// This method allows you to ask UBot Studio to change the current interface.</span>
    <span class="co1">/// &lt;/summary&gt;</span>
    <span class="co1">/// &lt;param name=&quot;name&quot;&gt;The name of the interface to change to, such as Browser.&lt;/param&gt;</span>
    <span class="kw4">void</span> ChangeUserInterface<span class="br0">&#40;</span><span class="kw4">string</span> name<span class="br0">&#41;</span><span class="sy0">;</span>
    <span class="co1">/// &lt;summary&gt;</span>
    <span class="co1">/// This property will return the parent IUBotCommand if your command is inside of a container command.</span>
    <span class="co1">/// &lt;/summary&gt;</span>
    IUBotCommand ContainerParent <span class="br0">&#123;</span> get<span class="sy0">;</span> set<span class="sy0">;</span> <span class="br0">&#125;</span>
    <span class="co1">/// &lt;summary&gt;</span>
    <span class="co1">/// This method allows you to ask UBot Studio to run the commands contained in the current command if it is a container.</span>
    <span class="co1">/// &lt;/summary&gt;</span>
    <span class="kw4">void</span> RunContainerCommands<span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
    <span class="co1">/// &lt;summary&gt;</span>
    <span class="co1">/// This method will set a variable in UBot Studio.</span>
    <span class="co1">/// &lt;/summary&gt;</span>
    <span class="co1">/// &lt;param name=&quot;variableName&quot;&gt;The name of the variable, such as #variable.&lt;/param&gt;</span>
    <span class="co1">/// &lt;param name=&quot;value&quot;&gt;The value to set the variable.&lt;/param&gt;</span>
    <span class="kw4">void</span> SetVariable<span class="br0">&#40;</span><span class="kw4">string</span> variableName, <span class="kw4">string</span> value<span class="br0">&#41;</span><span class="sy0">;</span>
    <span class="co1">/// &lt;summary&gt;</span>
    <span class="co1">/// This method will set a list in UBot Studio.</span>
    <span class="co1">/// &lt;/summary&gt;</span>
    <span class="co1">/// &lt;param name=&quot;listName&quot;&gt;The name of the list, such as&#160;%list.&lt;/param&gt;</span>
    <span class="co1">/// &lt;param name=&quot;value&quot;&gt;The value to set the list.&lt;/param&gt;</span>
    <span class="kw4">void</span> SetList<span class="br0">&#40;</span><span class="kw4">string</span> listName, List<span class="sy0">&lt;</span><span class="kw4">string</span><span class="sy0">&gt;</span> value<span class="br0">&#41;</span><span class="sy0">;</span>
    <span class="co1">/// &lt;summary&gt;</span>
    <span class="co1">/// This method will set a table in UBot Studio</span>
    <span class="co1">/// &lt;/summary&gt;</span>
    <span class="co1">/// &lt;param name=&quot;tableName&quot;&gt;The name of the table, such as &amp;table.&lt;/param&gt;</span>
    <span class="co1">/// &lt;param name=&quot;value&quot;&gt;The value to set the table.&lt;/param&gt;</span>
    <span class="kw4">void</span> SetTable<span class="br0">&#40;</span><span class="kw4">string</span> tableName, <span class="kw4">string</span><span class="br0">&#91;</span>,<span class="br0">&#93;</span> value<span class="br0">&#41;</span><span class="sy0">;</span>
    <span class="co1">/// &lt;summary&gt;</span>
    <span class="co1">/// Gets the value of a variable in UBot Studio.</span>
    <span class="co1">/// &lt;/summary&gt;</span>
    <span class="co1">/// &lt;param name=&quot;variableName&quot;&gt;The name of the variable, such as #variable.&lt;/param&gt;</span>
    <span class="co1">/// &lt;returns&gt;The value of the variable.&lt;/returns&gt;</span>
    <span class="kw4">string</span> GetVariable<span class="br0">&#40;</span><span class="kw4">string</span> variableName<span class="br0">&#41;</span><span class="sy0">;</span>
    <span class="co1">/// &lt;summary&gt;</span>
    <span class="co1">/// Gets the value of a list in UBot Studio.</span>
    <span class="co1">/// &lt;/summary&gt;</span>
    <span class="co1">/// &lt;param name=&quot;listName&quot;&gt;The name of the list, such as&#160;%list.&lt;/param&gt;</span>
    <span class="co1">/// &lt;returns&gt;The value of the list.&lt;/returns&gt;</span>
    List<span class="sy0">&lt;</span><span class="kw4">string</span><span class="sy0">&gt;</span> GetList<span class="br0">&#40;</span><span class="kw4">string</span> listName<span class="br0">&#41;</span><span class="sy0">;</span>
    <span class="co1">/// &lt;summary&gt;</span>
    <span class="co1">/// Gets the value of a table in UBot Studio.</span>
    <span class="co1">/// &lt;/summary&gt;</span>
    <span class="co1">/// &lt;param name=&quot;tableName&quot;&gt;The name of the table, such as &amp;table.&lt;/param&gt;</span>
    <span class="co1">/// &lt;returns&gt;The value of the table.&lt;/returns&gt;</span>
    <span class="kw4">string</span><span class="br0">&#91;</span>,<span class="br0">&#93;</span> GetTable<span class="br0">&#40;</span><span class="kw4">string</span> tableName<span class="br0">&#41;</span><span class="sy0">;</span>
<span class="br0">&#125;</span></pre></div></div>
<h3> <span class="mw-headline" id="IWizard"> IWizard </span></h3>
<div dir="ltr" class="mw-geshi mw-content-ltr"><div class="csharp source-csharp"><pre class="de1"><span class="co1">/// &lt;summary&gt;</span>
<span class="co1">/// This interface should be implemented for each wizard window you create.</span>
<span class="co1">/// &lt;/summary&gt;</span>
<span class="kw1">public</span> <span class="kw4">interface</span> IWizard
<span class="br0">&#123;</span>
    <span class="co1">/// &lt;summary&gt;</span>
    <span class="co1">/// This property should return an instance of a WPF Window that displays your wizard.</span>
    <span class="co1">/// &lt;/summary&gt;</span>
    Window WizardWindow <span class="br0">&#123;</span> get<span class="sy0">;</span> <span class="br0">&#125;</span>
    <span class="co1">/// &lt;summary&gt;</span>
    <span class="co1">/// This property should access your WPF Window to return the results of what the user typed into the wizard.</span>
    <span class="co1">/// The keys should be the parameter name you want to fill out, and the values should be the values the user entered in the wizard.</span>
    <span class="co1">/// &lt;/summary&gt;</span>
    Dictionary<span class="sy0">&lt;</span><span class="kw4">string</span>, <span class="kw4">string</span><span class="sy0">&gt;</span> WizardValues <span class="br0">&#123;</span> get<span class="sy0">;</span> <span class="br0">&#125;</span>
<span class="br0">&#125;</span></pre></div></div>
<h3> <span class="mw-headline" id="IWizardEnabled"> IWizardEnabled </span></h3>
<div dir="ltr" class="mw-geshi mw-content-ltr"><div class="csharp source-csharp"><pre class="de1"><span class="co1">/// &lt;summary&gt;</span>
<span class="co1">/// This interface can be used with an IUBotCommand or IUBotFunction.</span>
<span class="co1">/// It allows you to add a wizard to your command.</span>
<span class="co1">/// &lt;/summary&gt;</span>
<span class="kw1">public</span> <span class="kw4">interface</span> IWizardEnabled
<span class="br0">&#123;</span>
    <span class="co1">/// &lt;summary&gt;</span>
    <span class="co1">/// This method is called when dragging a command with a wizard into a script, or from clicking the Wizard button for a command.</span>
    <span class="co1">/// &lt;/summary&gt;</span>
    <span class="co1">/// &lt;returns&gt;You should return a new instance of an IWizard that you have defined.&lt;/returns&gt;</span>
    IWizard GenerateWizard<span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="br0">&#125;</span></pre></div></div>
<h3> <span class="mw-headline" id="IEventEnabled"> IEventEnabled </span></h3>
<div dir="ltr" class="mw-geshi mw-content-ltr"><div class="csharp source-csharp"><pre class="de1"><span class="co1">/// &lt;summary&gt;</span>
<span class="co1">/// This interface can be used with an IUBotCommand or IUBotFunction.</span>
<span class="co1">/// It allows you to setup event listeners for things like global hotkeys while the bot is running.</span>
<span class="co1">/// &lt;/summary&gt;</span>
<span class="kw1">public</span> <span class="kw4">interface</span> IEventEnabled
<span class="br0">&#123;</span>
    <span class="co1">/// &lt;summary&gt;</span>
    <span class="co1">/// This method is called when a user clicks the Run button on a bot.</span>
    <span class="co1">/// &lt;/summary&gt;</span>
    <span class="kw4">void</span> StartEventListener<span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
    <span class="co1">/// &lt;summary&gt;</span>
    <span class="co1">/// This method is called when the bot is stopped or finishes.</span>
    <span class="co1">/// &lt;/summary&gt;</span>
    <span class="kw4">void</span> StopEventListener<span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="br0">&#125;</span></pre></div></div>
<h3> <span class="mw-headline" id="UBotParameterDefinition"> UBotParameterDefinition </span></h3>
<div dir="ltr" class="mw-geshi mw-content-ltr"><div class="csharp source-csharp"><pre class="de1"><span class="co1">/// &lt;summary&gt;</span>
<span class="co1">/// A definition for a plugin parameter.</span>
<span class="co1">/// &lt;/summary&gt;</span>
<span class="kw1">public</span> <span class="kw4">class</span> UBotParameterDefinition
<span class="br0">&#123;</span>
    <span class="co1">/// &lt;summary&gt;</span>
    <span class="co1">/// The name of the parameter. This is displayed in UBot Studio above the value textbox.</span>
    <span class="co1">/// &lt;/summary&gt;</span>
    <span class="kw1">public</span> <span class="kw4">string</span> Name <span class="br0">&#123;</span> get<span class="sy0">;</span> <span class="kw1">private</span> set<span class="sy0">;</span> <span class="br0">&#125;</span>
    <span class="co1">/// &lt;summary&gt;</span>
    <span class="co1">/// The type of the parameter, such as string, variable, list or table.</span>
    <span class="co1">/// &lt;/summary&gt;</span>
    <span class="kw1">public</span> UBotType Type <span class="br0">&#123;</span> get<span class="sy0">;</span> <span class="kw1">private</span> set<span class="sy0">;</span> <span class="br0">&#125;</span>
    <span class="co1">/// &lt;summary&gt;</span>
    <span class="co1">/// This can be used to define a list of values that the user can select from with a dropbox.</span>
    <span class="co1">/// &lt;/summary&gt;</span>
    <span class="kw1">public</span> IEnumerable<span class="sy0">&lt;</span><span class="kw4">string</span><span class="sy0">&gt;</span> Options <span class="br0">&#123;</span> get<span class="sy0">;</span> set<span class="sy0">;</span> <span class="br0">&#125;</span>
    <span class="co1">/// &lt;summary&gt;</span>
    <span class="co1">/// This can be used to define a default parameter value when the user drags a node into their script.</span>
    <span class="co1">/// &lt;/summary&gt;</span>
    <span class="kw1">public</span> <span class="kw4">object</span> DefaultValue <span class="br0">&#123;</span> get<span class="sy0">;</span> set<span class="sy0">;</span> <span class="br0">&#125;</span>
&#160;
    <span class="kw1">public</span> UBotParameterDefinition<span class="br0">&#40;</span><span class="kw4">string</span> name, UBotType type<span class="br0">&#41;</span>
    <span class="br0">&#123;</span>
        Name <span class="sy0">=</span> name<span class="sy0">;</span>
        Type <span class="sy0">=</span> type<span class="sy0">;</span>
    <span class="br0">&#125;</span>
<span class="br0">&#125;</span></pre></div></div>
<h3> <span class="mw-headline" id="UBotType"> UBotType </span></h3>
<div dir="ltr" class="mw-geshi mw-content-ltr"><div class="csharp source-csharp"><pre class="de1"><span class="co1">/// &lt;summary&gt;</span>
<span class="co1">/// This is used when defining parameters and correlates to the types of UBot variables.</span>
<span class="co1">/// &lt;/summary&gt;</span>
<span class="kw1">public</span> <span class="kw4">enum</span> UBotType
<span class="br0">&#123;</span>
    <span class="kw4">String</span>,
    UBotVariable,
    UBotList,
    UBotTable
<span class="br0">&#125;</span></pre></div></div>
<h2> <span class="mw-headline" id="Plugin_Examples"> Plugin Examples </span></h2>
<p>You can download all of the examples listed below at: <a rel="nofollow" class="external free" href="http://www.ubotstudio.com/files/plugins/PluginExamples.zip">http://www.ubotstudio.com/files/plugins/PluginExamples.zip</a>
</p>
<h3> <span class="mw-headline" id="Basic_Commands_and_Functions"> Basic Commands and Functions </span></h3>
<h4> <span class="mw-headline" id="Command_Without_Parameters"> Command Without Parameters </span></h4>
<p>This is an example of a command that uses Process.Start to open Internet Explorer. It takes no parameters.
</p>
<div dir="ltr" class="mw-geshi mw-content-ltr"><div class="csharp source-csharp"><pre class="de1"><span class="kw1">using</span> <span class="co3">System</span><span class="sy0">;</span>
<span class="kw1">using</span> <span class="co3">System.Collections.Generic</span><span class="sy0">;</span>
<span class="kw1">using</span> <span class="co3">System.Linq</span><span class="sy0">;</span>
<span class="kw1">using</span> <span class="co3">System.Text</span><span class="sy0">;</span>
<span class="kw1">using</span> <span class="co3">UBotPlugin</span><span class="sy0">;</span>
<span class="kw1">using</span> <span class="co3">System.Diagnostics</span><span class="sy0">;</span>
&#160;
<span class="kw1">namespace</span> SimpleCommands
<span class="br0">&#123;</span>
    <span class="co1">/// &lt;summary&gt;</span>
    <span class="co1">/// This command is an example of a command with no parameters. It will open internet explorer when run.</span>
    <span class="co1">/// &lt;/summary&gt;</span>
    <span class="kw1">public</span> <span class="kw4">class</span> OpenInternetExplorerCommand <span class="sy0">:</span> IUBotCommand
    <span class="br0">&#123;</span>
        <span class="kw1">public</span> <span class="kw4">string</span> Category
        <span class="br0">&#123;</span>
            <span class="co1">// This is what category our command is categorized as. </span>
            <span class="co1">// If you choose something not already in the toolbox list, a new category will be created.</span>
            get <span class="br0">&#123;</span> <span class="kw1">return</span> <span class="st0">&quot;Browser Commands&quot;</span><span class="sy0">;</span> <span class="br0">&#125;</span>
        <span class="br0">&#125;</span>
&#160;
        <span class="kw1">public</span> <span class="kw4">string</span> CommandName
        <span class="br0">&#123;</span>
            <span class="co1">// The name of our node in UBot Studio.</span>
            get <span class="br0">&#123;</span> <span class="kw1">return</span> <span class="st0">&quot;open internet explorer&quot;</span><span class="sy0">;</span> <span class="br0">&#125;</span>
        <span class="br0">&#125;</span>
&#160;
        <span class="kw1">public</span> <span class="kw4">void</span> Execute<span class="br0">&#40;</span>IUBotStudio ubotStudio, Dictionary<span class="sy0">&lt;</span><span class="kw4">string</span>, <span class="kw4">string</span><span class="sy0">&gt;</span> parameters<span class="br0">&#41;</span>
        <span class="br0">&#123;</span>
            <span class="co1">// Start the Internet Explorer process.</span>
            Process<span class="sy0">.</span><span class="me1">Start</span><span class="br0">&#40;</span><span class="st0">&quot;iexplore.exe&quot;</span><span class="br0">&#41;</span><span class="sy0">;</span>
        <span class="br0">&#125;</span>
&#160;
        <span class="kw1">public</span> <span class="kw4">bool</span> IsContainer
        <span class="br0">&#123;</span>
            <span class="co1">// This command does not have any nested commands inside of it, so it is not a container command.</span>
            get <span class="br0">&#123;</span> <span class="kw1">return</span> <span class="kw1">false</span><span class="sy0">;</span> <span class="br0">&#125;</span>
        <span class="br0">&#125;</span>
&#160;
        <span class="kw1">public</span> IEnumerable<span class="sy0">&lt;</span>UBotParameterDefinition<span class="sy0">&gt;</span> ParameterDefinitions
        <span class="br0">&#123;</span>
            <span class="co1">// Since we have no parameters we return an empty list.</span>
            get <span class="br0">&#123;</span> <span class="kw1">return</span> <span class="kw3">new</span> List<span class="sy0">&lt;</span>UBotParameterDefinition<span class="sy0">&gt;</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="br0">&#125;</span>
        <span class="br0">&#125;</span>
&#160;
        <span class="kw1">public</span> UBotVersion UBotVersion
        <span class="br0">&#123;</span>
            <span class="co1">// This is the lowest version of UBot Studio that this command can run in.</span>
            get <span class="br0">&#123;</span> <span class="kw1">return</span> UBotVersion<span class="sy0">.</span><span class="me1">Standard</span><span class="sy0">;</span> <span class="br0">&#125;</span>
        <span class="br0">&#125;</span>
    <span class="br0">&#125;</span>
<span class="br0">&#125;</span></pre></div></div>
<h4> <span class="mw-headline" id="Command_With_Parameters"> Command With Parameters </span></h4>
<p>This is an example of a command that displays a MessageBox using the error icon. It takes one parameter, the text that is displayed.
</p>
<div dir="ltr" class="mw-geshi mw-content-ltr"><div class="csharp source-csharp"><pre class="de1"><span class="kw1">using</span> <span class="co3">System</span><span class="sy0">;</span>
<span class="kw1">using</span> <span class="co3">System.Collections.Generic</span><span class="sy0">;</span>
<span class="kw1">using</span> <span class="co3">System.Linq</span><span class="sy0">;</span>
<span class="kw1">using</span> <span class="co3">System.Text</span><span class="sy0">;</span>
<span class="kw1">using</span> <span class="co3">UBotPlugin</span><span class="sy0">;</span>
<span class="kw1">using</span> <span class="co3">System.Windows</span><span class="sy0">;</span>
&#160;
<span class="kw1">namespace</span> SimpleCommands
<span class="br0">&#123;</span>
    <span class="co1">/// &lt;summary&gt;</span>
    <span class="co1">/// This command is an example of a command with one parameter. It will show a MessageBox with an error icon.</span>
    <span class="co1">/// Parameters: The MessageBox text to use for your error.</span>
    <span class="co1">/// &lt;/summary&gt;</span>
    <span class="kw1">public</span> <span class="kw4">class</span> ErrorAlertCommand <span class="sy0">:</span> IUBotCommand
    <span class="br0">&#123;</span>
        <span class="co1">// List to hold the parameters we define for our command.</span>
        <span class="kw1">private</span> List<span class="sy0">&lt;</span>UBotParameterDefinition<span class="sy0">&gt;</span> _parameters <span class="sy0">=</span> <span class="kw3">new</span> List<span class="sy0">&lt;</span>UBotParameterDefinition<span class="sy0">&gt;</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
&#160;
        <span class="kw1">public</span> ErrorAlertCommand<span class="br0">&#40;</span><span class="br0">&#41;</span>
        <span class="br0">&#123;</span>
            <span class="co1">// Add our parameter (Alert Text) with a String type since it is text.</span>
            _parameters<span class="sy0">.</span><span class="me1">Add</span><span class="br0">&#40;</span><span class="kw3">new</span> UBotParameterDefinition<span class="br0">&#40;</span><span class="st0">&quot;Alert Text&quot;</span>, UBotType<span class="sy0">.</span><span class="kw4">String</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span>
        <span class="br0">&#125;</span>
&#160;
        <span class="kw1">public</span> <span class="kw4">string</span> Category
        <span class="br0">&#123;</span>
            <span class="co1">// This is what category our command is categorized as. </span>
            <span class="co1">// If you choose something not already in the toolbox list, a new category will be created.</span>
            get <span class="br0">&#123;</span> <span class="kw1">return</span> <span class="st0">&quot;Flow Commands&quot;</span><span class="sy0">;</span> <span class="br0">&#125;</span>
        <span class="br0">&#125;</span>
&#160;
        <span class="kw1">public</span> <span class="kw4">string</span> CommandName
        <span class="br0">&#123;</span>
            <span class="co1">// The name of our node in UBot Studio.</span>
            get <span class="br0">&#123;</span> <span class="kw1">return</span> <span class="st0">&quot;error alert&quot;</span><span class="sy0">;</span> <span class="br0">&#125;</span>
        <span class="br0">&#125;</span>
&#160;
        <span class="kw1">public</span> <span class="kw4">void</span> Execute<span class="br0">&#40;</span>IUBotStudio ubotStudio, Dictionary<span class="sy0">&lt;</span><span class="kw4">string</span>, <span class="kw4">string</span><span class="sy0">&gt;</span> parameters<span class="br0">&#41;</span>
        <span class="br0">&#123;</span>
            <span class="co1">// Grab the value of the Alert Text parameter we defined.</span>
            <span class="kw4">string</span> value <span class="sy0">=</span> parameters<span class="br0">&#91;</span><span class="st0">&quot;Alert Text&quot;</span><span class="br0">&#93;</span><span class="sy0">;</span>
&#160;
            <span class="co1">// Display the MessageBox with an error icon and the text given.</span>
            MessageBox<span class="sy0">.</span><span class="me1">Show</span><span class="br0">&#40;</span>value, <span class="st0">&quot;Error Alert&quot;</span>, MessageBoxButton<span class="sy0">.</span><span class="me1">OK</span>, MessageBoxImage<span class="sy0">.</span><span class="me1">Error</span><span class="br0">&#41;</span><span class="sy0">;</span>
        <span class="br0">&#125;</span>
&#160;
        <span class="kw1">public</span> <span class="kw4">bool</span> IsContainer
        <span class="br0">&#123;</span>
            <span class="co1">// This command does not have any nested commands inside of it, so it is not a container command.</span>
            get <span class="br0">&#123;</span> <span class="kw1">return</span> <span class="kw1">false</span><span class="sy0">;</span> <span class="br0">&#125;</span>
        <span class="br0">&#125;</span>
&#160;
        <span class="kw1">public</span> IEnumerable<span class="sy0">&lt;</span>UBotParameterDefinition<span class="sy0">&gt;</span> ParameterDefinitions
        <span class="br0">&#123;</span>
            <span class="co1">// We reference our parameter list we defined above here.</span>
            get <span class="br0">&#123;</span> <span class="kw1">return</span> _parameters<span class="sy0">;</span> <span class="br0">&#125;</span>
        <span class="br0">&#125;</span>
&#160;
        <span class="kw1">public</span> UBotVersion UBotVersion
        <span class="br0">&#123;</span>
            <span class="co1">// This is the lowest version of UBot Studio that this command can run in.</span>
            get <span class="br0">&#123;</span> <span class="kw1">return</span> UBotVersion<span class="sy0">.</span><span class="me1">Standard</span><span class="sy0">;</span> <span class="br0">&#125;</span>
        <span class="br0">&#125;</span>
    <span class="br0">&#125;</span>
<span class="br0">&#125;</span></pre></div></div>
<h4> <span class="mw-headline" id="Function_Without_Parameters"> Function Without Parameters </span></h4>
<p>This is an example of a function that returns the time of a day (e.g. 3:45:12 PM). It takes no parameters.
</p>
<div dir="ltr" class="mw-geshi mw-content-ltr"><div class="csharp source-csharp"><pre class="de1"><span class="kw1">using</span> <span class="co3">System</span><span class="sy0">;</span>
<span class="kw1">using</span> <span class="co3">System.Collections.Generic</span><span class="sy0">;</span>
<span class="kw1">using</span> <span class="co3">System.Linq</span><span class="sy0">;</span>
<span class="kw1">using</span> <span class="co3">System.Text</span><span class="sy0">;</span>
<span class="kw1">using</span> <span class="co3">UBotPlugin</span><span class="sy0">;</span>
<span class="kw1">using</span> <span class="co3">System.Threading</span><span class="sy0">;</span>
&#160;
<span class="kw1">namespace</span> SimpleCommands
<span class="br0">&#123;</span>
    <span class="co1">/// &lt;summary&gt;</span>
    <span class="co1">/// This command is an example of a command that runs UScript.</span>
    <span class="co1">/// It will wait 5 seconds and then navigate to the given URL.</span>
    <span class="co1">/// &lt;/summary&gt;</span>
    <span class="kw1">public</span> <span class="kw4">class</span> TimeOfDayFunction <span class="sy0">:</span> IUBotFunction
    <span class="br0">&#123;</span>
        <span class="co1">// List to hold the parameters we define for our command.</span>
        <span class="kw1">private</span> List<span class="sy0">&lt;</span>UBotParameterDefinition<span class="sy0">&gt;</span> _parameters <span class="sy0">=</span> <span class="kw3">new</span> List<span class="sy0">&lt;</span>UBotParameterDefinition<span class="sy0">&gt;</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
        <span class="kw1">private</span> <span class="kw4">string</span> _returnValue<span class="sy0">;</span>
&#160;
        <span class="kw1">public</span> TimeOfDayFunction<span class="br0">&#40;</span><span class="br0">&#41;</span>
        <span class="br0">&#123;</span>
            <span class="co1">// Add our parameter (URL) with a String type since it is text.</span>
            _parameters<span class="sy0">.</span><span class="me1">Add</span><span class="br0">&#40;</span><span class="kw3">new</span> UBotParameterDefinition<span class="br0">&#40;</span><span class="st0">&quot;URL&quot;</span>, UBotType<span class="sy0">.</span><span class="kw4">String</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span>
        <span class="br0">&#125;</span>
&#160;
        <span class="kw1">public</span> <span class="kw4">string</span> FunctionName
        <span class="br0">&#123;</span>
            <span class="co1">// The name of our node in UBot Studio.</span>
            <span class="co1">// You need to use a $ sign in front of function names.</span>
            get <span class="br0">&#123;</span> <span class="kw1">return</span> <span class="st0">&quot;$time of day&quot;</span><span class="sy0">;</span> <span class="br0">&#125;</span>
        <span class="br0">&#125;</span>
&#160;
        <span class="kw1">public</span> <span class="kw4">string</span> Category
        <span class="br0">&#123;</span>
            <span class="co1">// This is what category our command is categorized as. </span>
            <span class="co1">// If you choose something not already in the toolbox list, a new category will be created.</span>
            get <span class="br0">&#123;</span> <span class="kw1">return</span> <span class="st0">&quot;Browser Commands&quot;</span><span class="sy0">;</span> <span class="br0">&#125;</span>
        <span class="br0">&#125;</span>
&#160;
        <span class="kw1">public</span> <span class="kw4">void</span> Execute<span class="br0">&#40;</span>IUBotStudio ubotStudio, Dictionary<span class="sy0">&lt;</span><span class="kw4">string</span>, <span class="kw4">string</span><span class="sy0">&gt;</span> parameters<span class="br0">&#41;</span>
        <span class="br0">&#123;</span>
            <span class="co1">// Set the return value to the current time formatted as 12:00:00 AM</span>
            _returnValue <span class="sy0">=</span> DateTime<span class="sy0">.</span><span class="me1">Now</span><span class="sy0">.</span><span class="me1">ToString</span><span class="br0">&#40;</span><span class="st0">&quot;HH:mm:ss tt&quot;</span><span class="br0">&#41;</span><span class="sy0">;</span>
        <span class="br0">&#125;</span>
&#160;
        <span class="kw1">public</span> <span class="kw4">bool</span> IsContainer
        <span class="br0">&#123;</span>
            <span class="co1">// This command does not have any nested commands inside of it, so it is not a container command.</span>
            get <span class="br0">&#123;</span> <span class="kw1">return</span> <span class="kw1">false</span><span class="sy0">;</span> <span class="br0">&#125;</span>
        <span class="br0">&#125;</span>
&#160;
        <span class="kw1">public</span> IEnumerable<span class="sy0">&lt;</span>UBotParameterDefinition<span class="sy0">&gt;</span> ParameterDefinitions
        <span class="br0">&#123;</span>
            <span class="co1">// We reference our parameter list we defined above here.</span>
            get <span class="br0">&#123;</span> <span class="kw1">return</span> _parameters<span class="sy0">;</span> <span class="br0">&#125;</span>
        <span class="br0">&#125;</span>
&#160;
        <span class="kw1">public</span> <span class="kw4">object</span> ReturnValue
        <span class="br0">&#123;</span>
            <span class="co1">// We return our variable _returnValue as the result of the function.</span>
            get <span class="br0">&#123;</span> <span class="kw1">return</span> _returnValue<span class="sy0">;</span> <span class="br0">&#125;</span>
        <span class="br0">&#125;</span>
&#160;
        <span class="kw1">public</span> UBotType ReturnValueType
        <span class="br0">&#123;</span>
            <span class="co1">// Our result is text, so the return value type is String.</span>
            get <span class="br0">&#123;</span> <span class="kw1">return</span> UBotType<span class="sy0">.</span><span class="kw4">String</span><span class="sy0">;</span> <span class="br0">&#125;</span>
        <span class="br0">&#125;</span>
&#160;
        <span class="kw1">public</span> UBotVersion UBotVersion
        <span class="br0">&#123;</span>
            <span class="co1">// This is the lowest version of UBot Studio that this function can run in.</span>
            get <span class="br0">&#123;</span> <span class="kw1">return</span> UBotVersion<span class="sy0">.</span><span class="me1">Standard</span><span class="sy0">;</span> <span class="br0">&#125;</span>
        <span class="br0">&#125;</span>
    <span class="br0">&#125;</span>
<span class="br0">&#125;</span></pre></div></div>
<h4> <span class="mw-headline" id="Function_With_Parameters"> Function With Parameters </span></h4>
<p>This is an example of a function that returns the square of the number given as input. For example, an input of 3 would return 3<sup>2</sup> which is 9. It takes one parameter, the number to square.
</p>
<div dir="ltr" class="mw-geshi mw-content-ltr"><div class="csharp source-csharp"><pre class="de1"><span class="kw1">using</span> <span class="co3">System</span><span class="sy0">;</span>
<span class="kw1">using</span> <span class="co3">System.Collections.Generic</span><span class="sy0">;</span>
<span class="kw1">using</span> <span class="co3">System.Linq</span><span class="sy0">;</span>
<span class="kw1">using</span> <span class="co3">System.Text</span><span class="sy0">;</span>
<span class="kw1">using</span> <span class="co3">UBotPlugin</span><span class="sy0">;</span>
&#160;
<span class="kw1">namespace</span> SimpleCommands
<span class="br0">&#123;</span>
    <span class="co1">/// &lt;summary&gt;</span>
    <span class="co1">/// This function is an example of a function with one parameter. It will return the square of the input.</span>
    <span class="co1">/// Parameters: The MessageBox text to use for your error.</span>
    <span class="co1">/// &lt;/summary&gt;</span>
    <span class="kw1">public</span> <span class="kw4">class</span> SquareNumberFunction <span class="sy0">:</span> IUBotFunction
    <span class="br0">&#123;</span>
        <span class="co1">// The default return value of our function is 0.</span>
        <span class="kw4">string</span> _returnValue <span class="sy0">=</span> <span class="st0">&quot;0&quot;</span><span class="sy0">;</span>
&#160;
        <span class="co1">// List to hold the parameters we define for our function.</span>
        <span class="kw1">private</span> List<span class="sy0">&lt;</span>UBotParameterDefinition<span class="sy0">&gt;</span> _parameters <span class="sy0">=</span> <span class="kw3">new</span> List<span class="sy0">&lt;</span>UBotParameterDefinition<span class="sy0">&gt;</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
&#160;
        <span class="kw1">public</span> SquareNumberFunction<span class="br0">&#40;</span><span class="br0">&#41;</span>
        <span class="br0">&#123;</span>
            <span class="co1">// Add our parameter (Number to Square) with a String type since it is text.</span>
            _parameters<span class="sy0">.</span><span class="me1">Add</span><span class="br0">&#40;</span><span class="kw3">new</span> UBotParameterDefinition<span class="br0">&#40;</span><span class="st0">&quot;Number to Square&quot;</span>, UBotType<span class="sy0">.</span><span class="kw4">String</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span>
        <span class="br0">&#125;</span>
&#160;
        <span class="kw1">public</span> <span class="kw4">string</span> FunctionName
        <span class="br0">&#123;</span>
            <span class="co1">// The name of our node in UBot Studio.</span>
            <span class="co1">// You need to use a $ sign in front of function names.</span>
            get <span class="br0">&#123;</span> <span class="kw1">return</span> <span class="st0">&quot;$square number&quot;</span><span class="sy0">;</span> <span class="br0">&#125;</span>
        <span class="br0">&#125;</span>
&#160;
        <span class="kw1">public</span> <span class="kw4">object</span> ReturnValue
        <span class="br0">&#123;</span>
            <span class="co1">// We return our variable _returnValue as the result of the function.</span>
            get <span class="br0">&#123;</span> <span class="kw1">return</span> _returnValue<span class="sy0">;</span> <span class="br0">&#125;</span>
        <span class="br0">&#125;</span>
&#160;
        <span class="kw1">public</span> UBotType ReturnValueType
        <span class="br0">&#123;</span>
            <span class="co1">// Our result is text, so the return value type is String.</span>
            get <span class="br0">&#123;</span> <span class="kw1">return</span> UBotType<span class="sy0">.</span><span class="kw4">String</span><span class="sy0">;</span> <span class="br0">&#125;</span>
        <span class="br0">&#125;</span>
&#160;
        <span class="kw1">public</span> <span class="kw4">string</span> Category
        <span class="br0">&#123;</span>
            <span class="co1">// This is what category our function is categorized as. </span>
            <span class="co1">// If you choose something not already in the toolbox list, a new category will be created.</span>
            get <span class="br0">&#123;</span> <span class="kw1">return</span> <span class="st0">&quot;Math Functions&quot;</span><span class="sy0">;</span> <span class="br0">&#125;</span>
        <span class="br0">&#125;</span>
&#160;
        <span class="kw1">public</span> <span class="kw4">void</span> Execute<span class="br0">&#40;</span>IUBotStudio ubotStudio, Dictionary<span class="sy0">&lt;</span><span class="kw4">string</span>, <span class="kw4">string</span><span class="sy0">&gt;</span> parameters<span class="br0">&#41;</span>
        <span class="br0">&#123;</span>
            <span class="co1">// Grab the value of the Number to Square parameter we defined.</span>
            <span class="kw4">string</span> value <span class="sy0">=</span> parameters<span class="br0">&#91;</span><span class="st0">&quot;Number to Square&quot;</span><span class="br0">&#93;</span><span class="sy0">;</span>
&#160;
            <span class="co1">// Parse the input as a double, in case it has a decimal in it.</span>
            <span class="co1">// If we are able to parse it, we square the number</span>
            <span class="kw4">double</span> valueAsNumber<span class="sy0">;</span>
            <span class="kw1">if</span> <span class="br0">&#40;</span><span class="kw4">double</span><span class="sy0">.</span><span class="me1">TryParse</span><span class="br0">&#40;</span>value, <span class="kw1">out</span> valueAsNumber<span class="br0">&#41;</span><span class="br0">&#41;</span>
            <span class="br0">&#123;</span>
                valueAsNumber <span class="sy0">=</span> valueAsNumber <span class="sy0">*</span> valueAsNumber<span class="sy0">;</span>
            <span class="br0">&#125;</span>
            <span class="kw1">else</span>
            <span class="br0">&#123;</span>
                valueAsNumber <span class="sy0">=</span> <span class="nu0">0</span><span class="sy0">;</span>
            <span class="br0">&#125;</span>
&#160;
            <span class="co1">// Set the return value to the number we calculated.</span>
            _returnValue <span class="sy0">=</span> valueAsNumber<span class="sy0">.</span><span class="me1">ToString</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
        <span class="br0">&#125;</span>
&#160;
        <span class="kw1">public</span> IEnumerable<span class="sy0">&lt;</span>UBotParameterDefinition<span class="sy0">&gt;</span> ParameterDefinitions
        <span class="br0">&#123;</span>
            <span class="co1">// We reference our parameter list we defined above here.</span>
            get <span class="br0">&#123;</span> <span class="kw1">return</span> _parameters<span class="sy0">;</span> <span class="br0">&#125;</span>
        <span class="br0">&#125;</span>
&#160;
        <span class="kw1">public</span> UBotVersion UBotVersion
        <span class="br0">&#123;</span>
            <span class="co1">// This is the lowest version of UBot Studio that this function can run in.</span>
            get <span class="br0">&#123;</span> <span class="kw1">return</span> UBotVersion<span class="sy0">.</span><span class="me1">Standard</span><span class="sy0">;</span> <span class="br0">&#125;</span>
        <span class="br0">&#125;</span>
    <span class="br0">&#125;</span>
<span class="br0">&#125;</span></pre></div></div>
<h4> <span class="mw-headline" id="Function_With_List_Parameters"> Function With List Parameters </span></h4>
<p>This is an example of a command that takes a list parameter. It randomly shuffles the list and returns it as the result.
</p>
<div dir="ltr" class="mw-geshi mw-content-ltr"><div class="csharp source-csharp"><pre class="de1"><span class="kw1">using</span> <span class="co3">System</span><span class="sy0">;</span>
<span class="kw1">using</span> <span class="co3">System.Collections.Generic</span><span class="sy0">;</span>
<span class="kw1">using</span> <span class="co3">System.Linq</span><span class="sy0">;</span>
<span class="kw1">using</span> <span class="co3">System.Text</span><span class="sy0">;</span>
<span class="kw1">using</span> <span class="co3">UBotPlugin</span><span class="sy0">;</span>
&#160;
<span class="kw1">namespace</span> SimpleCommands
<span class="br0">&#123;</span>
    <span class="co1">/// &lt;summary&gt;</span>
    <span class="co1">/// This command is an example of a command using list parameters.</span>
    <span class="co1">/// It shuffles the input list sent to it..</span>
    <span class="co1">/// Parameters: The hexadecimal color to use to display the window.</span>
    <span class="co1">/// &lt;/summary&gt;</span>
    <span class="kw1">public</span> <span class="kw4">class</span> ShuffleListFunction <span class="sy0">:</span> IUBotFunction
    <span class="br0">&#123;</span>
        <span class="co1">// List to hold the parameters we define for our command.</span>
        <span class="kw1">private</span> List<span class="sy0">&lt;</span>UBotParameterDefinition<span class="sy0">&gt;</span> _parameters <span class="sy0">=</span> <span class="kw3">new</span> List<span class="sy0">&lt;</span>UBotParameterDefinition<span class="sy0">&gt;</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
        <span class="kw1">private</span> List<span class="sy0">&lt;</span><span class="kw4">string</span><span class="sy0">&gt;</span> _returnValue<span class="sy0">;</span>
&#160;
        <span class="kw1">public</span> ShuffleListFunction<span class="br0">&#40;</span><span class="br0">&#41;</span>
        <span class="br0">&#123;</span>
            <span class="co1">// Add our parameter (List To Shuffle) with a UBotList type since it is a list.</span>
            _parameters<span class="sy0">.</span><span class="me1">Add</span><span class="br0">&#40;</span><span class="kw3">new</span> UBotParameterDefinition<span class="br0">&#40;</span><span class="st0">&quot;List To Shuffle&quot;</span>, UBotType<span class="sy0">.</span><span class="me1">UBotList</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span>
        <span class="br0">&#125;</span>
&#160;
        <span class="kw1">public</span> <span class="kw4">string</span> Category
        <span class="br0">&#123;</span>
            <span class="co1">// This is what category our command is categorized as. </span>
            <span class="co1">// If you choose something not already in the toolbox list, a new category will be created.</span>
            get <span class="br0">&#123;</span> <span class="kw1">return</span> <span class="st0">&quot;Variable Functions&quot;</span><span class="sy0">;</span> <span class="br0">&#125;</span>
        <span class="br0">&#125;</span>
&#160;
        <span class="kw1">public</span> <span class="kw4">string</span> FunctionName
        <span class="br0">&#123;</span>
            <span class="co1">// The name of our node in UBot Studio.</span>
            <span class="co1">// You need to use a $ sign in front of function names.</span>
            get <span class="br0">&#123;</span> <span class="kw1">return</span> <span class="st0">&quot;$shuffle list&quot;</span><span class="sy0">;</span> <span class="br0">&#125;</span>
        <span class="br0">&#125;</span>
&#160;
        <span class="kw1">public</span> <span class="kw4">void</span> Execute<span class="br0">&#40;</span>IUBotStudio ubotStudio, Dictionary<span class="sy0">&lt;</span><span class="kw4">string</span>, <span class="kw4">string</span><span class="sy0">&gt;</span> parameters<span class="br0">&#41;</span>
        <span class="br0">&#123;</span>
            <span class="co1">// Get the name of the list they are using.</span>
            var listName <span class="sy0">=</span> parameters<span class="br0">&#91;</span><span class="st0">&quot;List To Shuffle&quot;</span><span class="br0">&#93;</span><span class="sy0">;</span>
&#160;
            <span class="co1">// Get the list items from the list by using the list variable name.</span>
            var list <span class="sy0">=</span> ubotStudio<span class="sy0">.</span><span class="me1">GetList</span><span class="br0">&#40;</span>listName<span class="br0">&#41;</span><span class="sy0">;</span>
&#160;
            <span class="co1">// Shuffle the list</span>
            var randomGenerator <span class="sy0">=</span> <span class="kw3">new</span> Random<span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
            list <span class="sy0">=</span> list<span class="sy0">.</span><span class="me1">OrderBy</span><span class="br0">&#40;</span>x <span class="sy0">=&gt;</span> randomGenerator<span class="sy0">.</span><span class="me1">Next</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">.</span><span class="me1">ToList</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
&#160;
            <span class="co1">// Set the return value to the shuffled list.</span>
            _returnValue <span class="sy0">=</span> list<span class="sy0">;</span>
        <span class="br0">&#125;</span>
&#160;
        <span class="kw1">public</span> <span class="kw4">bool</span> IsContainer
        <span class="br0">&#123;</span>
            <span class="co1">// This command does not have any nested commands inside of it, so it is not a container command.</span>
            get <span class="br0">&#123;</span> <span class="kw1">return</span> <span class="kw1">false</span><span class="sy0">;</span> <span class="br0">&#125;</span>
        <span class="br0">&#125;</span>
&#160;
        <span class="kw1">public</span> IEnumerable<span class="sy0">&lt;</span>UBotParameterDefinition<span class="sy0">&gt;</span> ParameterDefinitions
        <span class="br0">&#123;</span>
            <span class="co1">// We reference our parameter list we defined above here.</span>
            get <span class="br0">&#123;</span> <span class="kw1">return</span> _parameters<span class="sy0">;</span> <span class="br0">&#125;</span>
        <span class="br0">&#125;</span>
&#160;
        <span class="kw1">public</span> <span class="kw4">object</span> ReturnValue
        <span class="br0">&#123;</span>
            <span class="co1">// We return our variable _returnValue as the result of the function.</span>
            get <span class="br0">&#123;</span> <span class="kw1">return</span> _returnValue<span class="sy0">;</span> <span class="br0">&#125;</span>
        <span class="br0">&#125;</span>
&#160;
        <span class="kw1">public</span> UBotType ReturnValueType
        <span class="br0">&#123;</span>
            <span class="co1">// Our result is a list, so the return value type is UBotList.</span>
            get <span class="br0">&#123;</span> <span class="kw1">return</span> UBotType<span class="sy0">.</span><span class="me1">UBotList</span><span class="sy0">;</span> <span class="br0">&#125;</span>
        <span class="br0">&#125;</span>
&#160;
        <span class="kw1">public</span> UBotVersion UBotVersion
        <span class="br0">&#123;</span>
            <span class="co1">// This is the lowest version of UBot Studio that this function can run in.</span>
            get <span class="br0">&#123;</span> <span class="kw1">return</span> UBotVersion<span class="sy0">.</span><span class="me1">Standard</span><span class="sy0">;</span> <span class="br0">&#125;</span>
        <span class="br0">&#125;</span>
    <span class="br0">&#125;</span>
<span class="br0">&#125;</span></pre></div></div>
<h4> <span class="mw-headline" id="Command_With_Table_Parameters"> Command With Table Parameters </span></h4>
<p>This is an example of a command that uses a table parameter. It will download the response headers from a URL and store the results in a table. It has two parameters: URL, and Table.
</p>
<div dir="ltr" class="mw-geshi mw-content-ltr"><div class="csharp source-csharp"><pre class="de1"><span class="kw1">using</span> <span class="co3">System</span><span class="sy0">;</span>
<span class="kw1">using</span> <span class="co3">System.Collections.Generic</span><span class="sy0">;</span>
<span class="kw1">using</span> <span class="co3">System.Linq</span><span class="sy0">;</span>
<span class="kw1">using</span> <span class="co3">System.Text</span><span class="sy0">;</span>
<span class="kw1">using</span> <span class="co3">UBotPlugin</span><span class="sy0">;</span>
<span class="kw1">using</span> <span class="co3">System.Net</span><span class="sy0">;</span>
&#160;
<span class="kw1">namespace</span> SimpleCommands
<span class="br0">&#123;</span>
    <span class="co1">/// &lt;summary&gt;</span>
    <span class="co1">/// This command is an example of a command with a table parameter.</span>
    <span class="co1">/// It will download the response headers from a URL and store them in a table.</span>
    <span class="co1">/// Parameters: The URL to download the headers from.</span>
    <span class="co1">/// &lt;/summary&gt;</span>
    <span class="kw1">public</span> <span class="kw4">class</span> CreateTableFromHeadersCommand <span class="sy0">:</span> IUBotCommand
    <span class="br0">&#123;</span>
        <span class="co1">// List to hold the parameters we define for our command.</span>
        <span class="kw1">private</span> List<span class="sy0">&lt;</span>UBotParameterDefinition<span class="sy0">&gt;</span> _parameters <span class="sy0">=</span> <span class="kw3">new</span> List<span class="sy0">&lt;</span>UBotParameterDefinition<span class="sy0">&gt;</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
&#160;
        <span class="kw1">public</span> CreateTableFromHeadersCommand<span class="br0">&#40;</span><span class="br0">&#41;</span>
        <span class="br0">&#123;</span>
            <span class="co1">// Add our parameter (URL) with a String type since it is text.</span>
            _parameters<span class="sy0">.</span><span class="me1">Add</span><span class="br0">&#40;</span><span class="kw3">new</span> UBotParameterDefinition<span class="br0">&#40;</span><span class="st0">&quot;URL&quot;</span>, UBotType<span class="sy0">.</span><span class="kw4">String</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span>
&#160;
            <span class="co1">// Add our parameter (Table) with a UBotTable type since it is a table.</span>
            _parameters<span class="sy0">.</span><span class="me1">Add</span><span class="br0">&#40;</span><span class="kw3">new</span> UBotParameterDefinition<span class="br0">&#40;</span><span class="st0">&quot;Table&quot;</span>, UBotType<span class="sy0">.</span><span class="me1">UBotTable</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span>
        <span class="br0">&#125;</span>
&#160;
        <span class="kw1">public</span> <span class="kw4">string</span> Category
        <span class="br0">&#123;</span>
            <span class="co1">// This is what category our command is categorized as. </span>
            <span class="co1">// If you choose something not already in the toolbox list, a new category will be created.</span>
            get <span class="br0">&#123;</span> <span class="kw1">return</span> <span class="st0">&quot;Browser Commands&quot;</span><span class="sy0">;</span> <span class="br0">&#125;</span>
        <span class="br0">&#125;</span>
&#160;
        <span class="kw1">public</span> <span class="kw4">string</span> CommandName
        <span class="br0">&#123;</span>
            <span class="co1">// The name of our node in UBot Studio.</span>
            get <span class="br0">&#123;</span> <span class="kw1">return</span> <span class="st0">&quot;create table from headers&quot;</span><span class="sy0">;</span> <span class="br0">&#125;</span>
        <span class="br0">&#125;</span>
&#160;
        <span class="kw1">public</span> <span class="kw4">void</span> Execute<span class="br0">&#40;</span>IUBotStudio ubotStudio, Dictionary<span class="sy0">&lt;</span><span class="kw4">string</span>, <span class="kw4">string</span><span class="sy0">&gt;</span> parameters<span class="br0">&#41;</span>
        <span class="br0">&#123;</span>
            <span class="co1">// Grab the value of the parameter we defined.</span>
            <span class="kw4">string</span> url <span class="sy0">=</span> parameters<span class="br0">&#91;</span><span class="st0">&quot;URL&quot;</span><span class="br0">&#93;</span><span class="sy0">;</span>
&#160;
            <span class="co1">// Get the name of the table they are using.</span>
            <span class="kw4">string</span> tableName <span class="sy0">=</span> parameters<span class="br0">&#91;</span><span class="st0">&quot;Table&quot;</span><span class="br0">&#93;</span><span class="sy0">;</span>
&#160;
            <span class="co1">// Create an HttpWebRequest for the specified URL. </span>
            HttpWebRequest request <span class="sy0">=</span> <span class="br0">&#40;</span>HttpWebRequest<span class="br0">&#41;</span>WebRequest<span class="sy0">.</span><span class="me1">Create</span><span class="br0">&#40;</span>url<span class="br0">&#41;</span><span class="sy0">;</span>
&#160;
            <span class="co1">// Set method to HEAD since we only want the headers.</span>
            request<span class="sy0">.</span><span class="me1">Method</span> <span class="sy0">=</span> <span class="st0">&quot;HEAD&quot;</span><span class="sy0">;</span>
&#160;
            <span class="co1">// Send the HttpWebRequest and wait for the response, closing it when done.</span>
            <span class="kw1">using</span> <span class="br0">&#40;</span>HttpWebResponse response <span class="sy0">=</span> <span class="br0">&#40;</span>HttpWebResponse<span class="br0">&#41;</span>request<span class="sy0">.</span><span class="me1">GetResponse</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="br0">&#41;</span>
            <span class="br0">&#123;</span>
                <span class="co1">// Create a table to store the headers returned.</span>
                <span class="kw4">string</span><span class="br0">&#91;</span>,<span class="br0">&#93;</span> table <span class="sy0">=</span> <span class="kw3">new</span> <span class="kw4">string</span><span class="br0">&#91;</span>response<span class="sy0">.</span><span class="me1">Headers</span><span class="sy0">.</span><span class="me1">Count</span>, <span class="nu0">2</span><span class="br0">&#93;</span><span class="sy0">;</span>
&#160;
                <span class="kw1">for</span> <span class="br0">&#40;</span><span class="kw4">int</span> i <span class="sy0">=</span> <span class="nu0">0</span><span class="sy0">;</span> i <span class="sy0">&lt;</span> response<span class="sy0">.</span><span class="me1">Headers</span><span class="sy0">.</span><span class="me1">Count</span><span class="sy0">;</span> i<span class="sy0">++</span><span class="br0">&#41;</span>
                <span class="br0">&#123;</span>
                    <span class="co1">// Store the header name in column 0 for the current row.</span>
                    table<span class="br0">&#91;</span>i, <span class="nu0">0</span><span class="br0">&#93;</span> <span class="sy0">=</span> response<span class="sy0">.</span><span class="me1">Headers</span><span class="sy0">.</span><span class="me1">Keys</span><span class="br0">&#91;</span>i<span class="br0">&#93;</span><span class="sy0">;</span>
                    <span class="co1">// Store the header value in column 1 for the current row.</span>
                    table<span class="br0">&#91;</span>i, <span class="nu0">1</span><span class="br0">&#93;</span> <span class="sy0">=</span> response<span class="sy0">.</span><span class="me1">Headers</span><span class="br0">&#91;</span>i<span class="br0">&#93;</span><span class="sy0">;</span>
                <span class="br0">&#125;</span>
&#160;
                <span class="co1">// Set the new table in UBot Studio for the table name given.</span>
                ubotStudio<span class="sy0">.</span><span class="me1">SetTable</span><span class="br0">&#40;</span>tableName, table<span class="br0">&#41;</span><span class="sy0">;</span>
            <span class="br0">&#125;</span>
        <span class="br0">&#125;</span>
&#160;
        <span class="kw1">public</span> <span class="kw4">bool</span> IsContainer
        <span class="br0">&#123;</span>
            <span class="co1">// This command does not have any nested commands inside of it, so it is not a container command.</span>
            get <span class="br0">&#123;</span> <span class="kw1">return</span> <span class="kw1">false</span><span class="sy0">;</span> <span class="br0">&#125;</span>
        <span class="br0">&#125;</span>
&#160;
        <span class="kw1">public</span> IEnumerable<span class="sy0">&lt;</span>UBotParameterDefinition<span class="sy0">&gt;</span> ParameterDefinitions
        <span class="br0">&#123;</span>
            <span class="co1">// We reference our parameter list we defined above here.</span>
            get <span class="br0">&#123;</span> <span class="kw1">return</span> _parameters<span class="sy0">;</span> <span class="br0">&#125;</span>
        <span class="br0">&#125;</span>
&#160;
        <span class="kw1">public</span> UBotVersion UBotVersion
        <span class="br0">&#123;</span>
            <span class="co1">// This is the lowest version of UBot Studio that this command can run in.</span>
            get <span class="br0">&#123;</span> <span class="kw1">return</span> UBotVersion<span class="sy0">.</span><span class="me1">Standard</span><span class="sy0">;</span> <span class="br0">&#125;</span>
        <span class="br0">&#125;</span>
    <span class="br0">&#125;</span>
<span class="br0">&#125;</span></pre></div></div>
<h3> <span class="mw-headline" id="Container_Commands"> Container Commands </span></h3>
<p>This is an example of a container command that runs the nodes dragged inside of it twice as many times as specified. It has one parameter: Number of times to loop twice.
</p>
<div dir="ltr" class="mw-geshi mw-content-ltr"><div class="csharp source-csharp"><pre class="de1"><span class="kw1">using</span> <span class="co3">System</span><span class="sy0">;</span>
<span class="kw1">using</span> <span class="co3">System.Collections.Generic</span><span class="sy0">;</span>
<span class="kw1">using</span> <span class="co3">System.Linq</span><span class="sy0">;</span>
<span class="kw1">using</span> <span class="co3">System.Text</span><span class="sy0">;</span>
<span class="kw1">using</span> <span class="co3">UBotPlugin</span><span class="sy0">;</span>
&#160;
<span class="kw1">namespace</span> ContainerCommands
<span class="br0">&#123;</span>
    <span class="co1">/// &lt;summary&gt;</span>
    <span class="co1">/// This command is an example of a container command.</span>
    <span class="co1">/// It runs the nodes dragged inside of it 2 * the number of times specified to loop</span>
    <span class="co1">/// Parameters: Number of times to loop twice</span>
    <span class="co1">/// &lt;/summary&gt;</span>
    <span class="kw1">public</span> <span class="kw4">class</span> DoubleLoopCommand <span class="sy0">:</span> IUBotCommand
    <span class="br0">&#123;</span>
        <span class="co1">// List to hold the parameters we define for our command.</span>
        <span class="kw1">private</span> List<span class="sy0">&lt;</span>UBotParameterDefinition<span class="sy0">&gt;</span> _parameters <span class="sy0">=</span> <span class="kw3">new</span> List<span class="sy0">&lt;</span>UBotParameterDefinition<span class="sy0">&gt;</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
&#160;
        <span class="kw1">public</span> DoubleLoopCommand<span class="br0">&#40;</span><span class="br0">&#41;</span>
        <span class="br0">&#123;</span>
            <span class="co1">// Add our only parameter to the list of parameters.</span>
            _parameters<span class="sy0">.</span><span class="me1">Add</span><span class="br0">&#40;</span><span class="kw3">new</span> UBotParameterDefinition<span class="br0">&#40;</span><span class="st0">&quot;Number of times to loop twice&quot;</span>, UBotType<span class="sy0">.</span><span class="kw4">String</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span>
        <span class="br0">&#125;</span>
&#160;
        <span class="kw1">public</span> <span class="kw4">string</span> Category
        <span class="br0">&#123;</span>
            <span class="co1">// This is what category our command is categorized as. </span>
            <span class="co1">// If you choose something not already in the toolbox list, a new category will be created.</span>
            get <span class="br0">&#123;</span> <span class="kw1">return</span> <span class="st0">&quot;Flow Commands&quot;</span><span class="sy0">;</span> <span class="br0">&#125;</span>
        <span class="br0">&#125;</span>
&#160;
        <span class="kw1">public</span> <span class="kw4">string</span> CommandName
        <span class="br0">&#123;</span>
            <span class="co1">// The name of our node in UBot Studio.</span>
            get <span class="br0">&#123;</span> <span class="kw1">return</span> <span class="st0">&quot;double loop&quot;</span><span class="sy0">;</span> <span class="br0">&#125;</span>
        <span class="br0">&#125;</span>
&#160;
        <span class="kw1">public</span> <span class="kw4">void</span> Execute<span class="br0">&#40;</span>IUBotStudio ubotStudio, Dictionary<span class="sy0">&lt;</span><span class="kw4">string</span>, <span class="kw4">string</span><span class="sy0">&gt;</span> parameters<span class="br0">&#41;</span>
        <span class="br0">&#123;</span>
            <span class="co1">// Grab the value of the Number of times to loop twice parameter we defined.</span>
            <span class="kw4">string</span> value <span class="sy0">=</span> parameters<span class="br0">&#91;</span><span class="st0">&quot;Number of times to loop twice&quot;</span><span class="br0">&#93;</span><span class="sy0">;</span>
&#160;
            <span class="co1">// Since they are giving us a number, we parse it into an integer</span>
            <span class="co1">// We default to 0 if we can't parse it.</span>
            <span class="kw4">int</span> valueAsNumber<span class="sy0">;</span>
            <span class="kw1">if</span> <span class="br0">&#40;</span><span class="sy0">!</span><span class="kw4">int</span><span class="sy0">.</span><span class="me1">TryParse</span><span class="br0">&#40;</span>value, <span class="kw1">out</span> valueAsNumber<span class="br0">&#41;</span><span class="br0">&#41;</span>
            <span class="br0">&#123;</span>
                valueAsNumber <span class="sy0">=</span> <span class="nu0">0</span><span class="sy0">;</span>
            <span class="br0">&#125;</span>
&#160;
            <span class="co1">// Loop input * 2 times and run the contained commands for each loop.</span>
            <span class="kw1">for</span> <span class="br0">&#40;</span><span class="kw4">int</span> i <span class="sy0">=</span> <span class="nu0">0</span><span class="sy0">;</span> i <span class="sy0">&lt;</span> valueAsNumber <span class="sy0">*</span> <span class="nu0">2</span><span class="sy0">;</span> i<span class="sy0">++</span><span class="br0">&#41;</span>
            <span class="br0">&#123;</span>
                ubotStudio<span class="sy0">.</span><span class="me1">RunContainerCommands</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
            <span class="br0">&#125;</span>
        <span class="br0">&#125;</span>
&#160;
        <span class="kw1">public</span> <span class="kw4">bool</span> IsContainer
        <span class="br0">&#123;</span>
            <span class="co1">// Since this is a container command (you can drag nodes inside of it), we return true.</span>
            get <span class="br0">&#123;</span> <span class="kw1">return</span> <span class="kw1">true</span><span class="sy0">;</span> <span class="br0">&#125;</span>
        <span class="br0">&#125;</span>
&#160;
        <span class="kw1">public</span> IEnumerable<span class="sy0">&lt;</span>UBotParameterDefinition<span class="sy0">&gt;</span> ParameterDefinitions
        <span class="br0">&#123;</span>
            <span class="co1">// We reference our parameter list we defined above here.</span>
            get <span class="br0">&#123;</span> <span class="kw1">return</span> _parameters<span class="sy0">;</span> <span class="br0">&#125;</span>
        <span class="br0">&#125;</span>
&#160;
        <span class="kw1">public</span> UBotVersion UBotVersion
        <span class="br0">&#123;</span>
            <span class="co1">// This is the lowest version of UBot Studio that this command can run in.</span>
            get <span class="br0">&#123;</span> <span class="kw1">return</span> UBotVersion<span class="sy0">.</span><span class="me1">Standard</span><span class="sy0">;</span> <span class="br0">&#125;</span>
        <span class="br0">&#125;</span>
    <span class="br0">&#125;</span>
<span class="br0">&#125;</span></pre></div></div>
<h3> <span class="mw-headline" id="Wizard_Commands"> Wizard Commands </span></h3>
<p>This is an example of a command that uses a wizard along with displaying a WPF window when it is executed. The command uses a wizard to allow a user to choose a color with a color picker. It then displays a WPF window with the background set to that color.
</p><p>For information on the WPF windows used in this example, download the Example Files.
</p>
<div dir="ltr" class="mw-geshi mw-content-ltr"><div class="csharp source-csharp"><pre class="de1"><span class="kw1">using</span> <span class="co3">System</span><span class="sy0">;</span>
<span class="kw1">using</span> <span class="co3">System.Collections.Generic</span><span class="sy0">;</span>
<span class="kw1">using</span> <span class="co3">System.Linq</span><span class="sy0">;</span>
<span class="kw1">using</span> <span class="co3">System.Text</span><span class="sy0">;</span>
<span class="kw1">using</span> <span class="co3">UBotPlugin</span><span class="sy0">;</span>
<span class="kw1">using</span> <span class="co3">System.Windows.Media</span><span class="sy0">;</span>
<span class="kw1">using</span> <span class="co3">System.Windows</span><span class="sy0">;</span>
<span class="kw1">using</span> <span class="co3">System.Windows.Threading</span><span class="sy0">;</span>
&#160;
<span class="kw1">namespace</span> WizardCommands
<span class="br0">&#123;</span>
    <span class="co1">/// &lt;summary&gt;</span>
    <span class="co1">/// This command is an example of a command with a wizard.</span>
    <span class="co1">/// It will show a window with a background color that you choose.</span>
    <span class="co1">/// Parameters: The hexadecimal color to use to display the window.</span>
    <span class="co1">/// &lt;/summary&gt;</span>
    <span class="kw1">public</span> <span class="kw4">class</span> ColoredWindowCommand <span class="sy0">:</span> IUBotCommand, IWizardEnabled
    <span class="br0">&#123;</span>
        <span class="co1">// List to hold the parameters we define for our command.</span>
        <span class="kw1">private</span> List<span class="sy0">&lt;</span>UBotParameterDefinition<span class="sy0">&gt;</span> _parameters <span class="sy0">=</span> <span class="kw3">new</span> List<span class="sy0">&lt;</span>UBotParameterDefinition<span class="sy0">&gt;</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
&#160;
        <span class="co1">// This holds our wizard Window.</span>
        <span class="kw1">private</span> ColorPickerWizardWindow _wizardWindow<span class="sy0">;</span>
&#160;
        <span class="kw1">public</span> ColoredWindowCommand<span class="br0">&#40;</span><span class="br0">&#41;</span>
        <span class="br0">&#123;</span>
            <span class="co1">// Add our parameter (Color) with a String type since it is text.</span>
            _parameters<span class="sy0">.</span><span class="me1">Add</span><span class="br0">&#40;</span><span class="kw3">new</span> UBotParameterDefinition<span class="br0">&#40;</span><span class="st0">&quot;Color&quot;</span>, UBotType<span class="sy0">.</span><span class="kw4">String</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span>
        <span class="br0">&#125;</span>
&#160;
        <span class="kw1">public</span> <span class="kw4">string</span> Category
        <span class="br0">&#123;</span>
            <span class="co1">// This is what category our command is categorized as. </span>
            <span class="co1">// If you choose something not already in the toolbox list, a new category will be created.</span>
            get <span class="br0">&#123;</span> <span class="kw1">return</span> <span class="st0">&quot;Flow Commands&quot;</span><span class="sy0">;</span> <span class="br0">&#125;</span>
        <span class="br0">&#125;</span>
&#160;
        <span class="kw1">public</span> <span class="kw4">string</span> CommandName
        <span class="br0">&#123;</span>
            <span class="co1">// The name of our node in UBot Studio.</span>
            get <span class="br0">&#123;</span> <span class="kw1">return</span> <span class="st0">&quot;colored window&quot;</span><span class="sy0">;</span> <span class="br0">&#125;</span>
        <span class="br0">&#125;</span>
&#160;
        <span class="kw1">public</span> <span class="kw4">void</span> Execute<span class="br0">&#40;</span>IUBotStudio ubotStudio, Dictionary<span class="sy0">&lt;</span><span class="kw4">string</span>, <span class="kw4">string</span><span class="sy0">&gt;</span> parameters<span class="br0">&#41;</span>
        <span class="br0">&#123;</span>
            <span class="co1">// Grab the value of the Color parameter we defined.</span>
            <span class="kw4">string</span> value <span class="sy0">=</span> parameters<span class="br0">&#91;</span><span class="st0">&quot;Color&quot;</span><span class="br0">&#93;</span><span class="sy0">;</span>
&#160;
            <span class="co1">// Create a colored window and set the background color to the color they choose.</span>
            var window <span class="sy0">=</span> <span class="kw3">new</span> ColoredWindow<span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
            window<span class="sy0">.</span><span class="me1">Background</span> <span class="sy0">=</span> <span class="kw3">new</span> SolidColorBrush<span class="br0">&#40;</span><span class="br0">&#40;</span>Color<span class="br0">&#41;</span>ColorConverter<span class="sy0">.</span><span class="me1">ConvertFromString</span><span class="br0">&#40;</span><span class="st0">&quot;#&quot;</span> <span class="sy0">+</span> value<span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span>
&#160;
            <span class="co1">// Display the colored window.</span>
            window<span class="sy0">.</span><span class="me1">ShowDialog</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
        <span class="br0">&#125;</span>
&#160;
        <span class="kw1">public</span> <span class="kw4">bool</span> IsContainer
        <span class="br0">&#123;</span>
            <span class="co1">// This command does not have any nested commands inside of it, so it is not a container command.</span>
            get <span class="br0">&#123;</span> <span class="kw1">return</span> <span class="kw1">false</span><span class="sy0">;</span> <span class="br0">&#125;</span>
        <span class="br0">&#125;</span>
&#160;
        <span class="kw1">public</span> IEnumerable<span class="sy0">&lt;</span>UBotParameterDefinition<span class="sy0">&gt;</span> ParameterDefinitions
        <span class="br0">&#123;</span>
            <span class="co1">// We reference our parameter list we defined above here.</span>
            get <span class="br0">&#123;</span> <span class="kw1">return</span> _parameters<span class="sy0">;</span> <span class="br0">&#125;</span>
        <span class="br0">&#125;</span>
&#160;
        <span class="kw1">public</span> IWizard GenerateWizard<span class="br0">&#40;</span><span class="br0">&#41;</span>
        <span class="br0">&#123;</span>
            <span class="kw1">return</span> <span class="kw3">new</span> ColoredWindowWizard<span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
        <span class="br0">&#125;</span>
&#160;
        <span class="kw1">public</span> UBotVersion UBotVersion
        <span class="br0">&#123;</span>
            <span class="co1">// This is the lowest version of UBot Studio that this command can run in.</span>
            get <span class="br0">&#123;</span> <span class="kw1">return</span> UBotVersion<span class="sy0">.</span><span class="me1">Standard</span><span class="sy0">;</span> <span class="br0">&#125;</span>
        <span class="br0">&#125;</span>
    <span class="br0">&#125;</span>
&#160;
    <span class="co1">/// &lt;summary&gt;</span>
    <span class="co1">/// This wizard contains a color picker control that allows a user to choose a color by clicking it.</span>
    <span class="co1">/// &lt;/summary&gt;</span>
    <span class="kw1">public</span> <span class="kw4">class</span> ColoredWindowWizard <span class="sy0">:</span> IWizard
    <span class="br0">&#123;</span>
        <span class="kw1">private</span> ColorPickerWizardWindow _wizardWindow <span class="sy0">=</span> <span class="kw3">new</span> ColorPickerWizardWindow<span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
&#160;
        <span class="kw1">public</span> Dictionary<span class="sy0">&lt;</span><span class="kw4">string</span>, <span class="kw4">string</span><span class="sy0">&gt;</span> WizardValues
        <span class="br0">&#123;</span>
            <span class="co1">// This property is checked after the wizard is displayed.</span>
            <span class="co1">// We return a Dictionary of values corresponding to the parameters.</span>
            get
            <span class="br0">&#123;</span>
                var parameterValues <span class="sy0">=</span> <span class="kw3">new</span> Dictionary<span class="sy0">&lt;</span><span class="kw4">string</span>, <span class="kw4">string</span><span class="sy0">&gt;</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
                <span class="co1">// We use our _wizardWindow reference to access the color they selected in the wizard.</span>
                <span class="co1">// We then add that color value to our list of parameter values from our wizard.</span>
                parameterValues<span class="br0">&#91;</span><span class="st0">&quot;Color&quot;</span><span class="br0">&#93;</span> <span class="sy0">=</span> _wizardWindow<span class="sy0">.</span><span class="me1">MainColorPicker</span><span class="sy0">.</span><span class="me1">SelectedColor</span><span class="sy0">.</span><span class="me1">ToString</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">.</span><span class="me1">Substring</span><span class="br0">&#40;</span><span class="nu0">1</span><span class="br0">&#41;</span><span class="sy0">;</span>
                <span class="kw1">return</span> parameterValues<span class="sy0">;</span>
            <span class="br0">&#125;</span>
        <span class="br0">&#125;</span>
&#160;
        <span class="kw1">public</span> Window WizardWindow
        <span class="br0">&#123;</span>
            <span class="co1">// This property is accessed to determine which window to display for the wizard.</span>
            get
            <span class="br0">&#123;</span>
                <span class="kw1">return</span> _wizardWindow<span class="sy0">;</span>
            <span class="br0">&#125;</span>
        <span class="br0">&#125;</span>
    <span class="br0">&#125;</span>
<span class="br0">&#125;</span></pre></div></div>