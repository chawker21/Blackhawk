@extends('/guides/layouts.app')

@section('content')
    @include('guides.partials._profile')
    @include('guides.partials.aside')
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="panel panel-default">
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-primary border-dark">
                            <div class="panel-heading">Basic Template</div>
                            <div id="test" class="panel-body">
                                <div class=" code-info alert alert-info border border-dark" style="font-weight:bold">
                                    using UnityEngine;<br>

                                    public class JsonData : MonoBehaviour<br>
                                    {<br>
                                    private string filename = "data.json";<br>
                                    private string path;<br>

                                    private AppData appData = new AppData();<br>
                                    void Start () {<br>
                                    path = Application.persistentDataPath + "/" +  filename;<br>
                                    Debug.Log(path);<br>
                                    }<br>
                                    void Update () {<br>

                                    if (Input.GetKeyDown(KeyCode.F8))<br>
                                    {<br>
                                    appData.date = System.DateTime.Now.ToShortDateString();<br>
                                    appData.time = System.DateTime.Now.ToShortTimeString();<br>
                                    Quest q1 = new Quest();<br>
                                    q1.name = "find a quest item";<br>
                                    q1.desc = "find a quest item by looking";<br>
                                    appData.quests.Add(q1);<br>
                                    Quest q2 = new Quest();<br>
                                    q2.name = "find a use for List Data";<br>
                                    q2.desc = "find a use for List Data added to Json file";<br>
                                    appData.quests.Add(q2);<br>
                                    SaveData();<br>
                                    }<br>

                                    if (Input.GetKeyDown(KeyCode.F9))<br>
                                    {<br>
                                    ReadData();<br>
                                    }<br>
                                    }<br>

                                    void SaveData()<br>
                                    {<br>
                                    JsonWrapper wrapper = new JsonWrapper();<br>
                                    wrapper.appData = appData;<br>
                                    string contents = JsonUtility.ToJson(wrapper, true);<br>
                                    System.IO.File.WriteAllText(path, contents);<br>
                                    Debug.Log(appData.date + "," + appData.time);<br>
                                    foreach (Quest q in appData.quests)<br>
                                    {<br>
                                    Debug.Log(q.desc);<br>
                                    }<br>
                                    }<br>

                                    void ReadData()<br>
                                    {<br>
                                    string contents = System.IO.File.ReadAllText(path);<br>
                                    JsonWrapper wrapper = JsonUtility.FromJson&ltJsonWrapper&gt(contents);<br>
                                        appData = wrapper.appData;<br>
                                        Debug.Log(appData.date + "," + appData.time);<br>
                                    foreach (Quest q in appData.quests)<br>
                                    {<br>
                                    Debug.Log(q.desc);<br>
                                    }<br>
                                        }<br>
                                        }    <br>

                                </div>
                                <div class=" code-info alert alert-info border border-dark" style="font-weight:bold">

                                    using System.Collections.Generic;<br>

                                    [System.Serializable]<br>
                                    public class AppData<br>
                                    {<br>
                                    public string date = "";<br>
                                    public string time = "";<br>
                                    public List<Quest> quests = new List<Quest>();<br>
                                    }<br>
                                </div>
                                <div class=" code-info alert alert-info border border-dark" style="font-weight:bold">
                                    [System.Serializable]<br>
                                    public class JsonWrapper<br>
                                    {<br>

                                    public AppData appData;<br>
                                    }<br>
                                </div>
                                <div class=" code-info alert alert-info border border-dark" style="font-weight:bold">
                                [System.Serializable]<br>
                                public class Quest<br>
                                {<br>

                                public string name = "";<br>
                                public string desc = "";<br>
                                public int status = 0;<br>
                                }<br>
                                </div>
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/Y8XCoEt7zTU" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                            </div>
                    </ul>
                    </li>
                </div>

            </div>
        </div>
@endsection