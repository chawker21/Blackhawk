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
                            <div class="panel-heading">adding remote files to existing repository</div>
                            <div id="test" class="panel-body">
                                <div class="alert alert-secondary border border-dark" style="font-weight:bold">

<p>In order to complete this project yourself you will need:</p>
<ol>
    <li>Raspberry Pi running Raspbian (or another OS), configured, running and accessible on the network or directly connected to KVM</li>
    <li>Internet Connection</li>
    <li>USB Webcam</li>
    <li>Optional: Powered USB Hub. Depending on the Raspberry Pi model and webcam, the Pi may not be able to supply enough power to the webcam. A powered USB hub should solve this.</li>
</ol>
<p>There are two ways of using a Raspberry Pi as a time-lapse recorder. We can either use the built-in <code>Raspistill</code> application if you are running Raspbian, or we can use the much more powerful >code>motion application which works on all variants of Linux.</p>
<a name="raspistill-inbuilt-timelapse-mode"></a>
<h2>Using Raspistill inbuilt time-lapse mode</h2>
<p>The raspistill application has a built in time-lapse mode, using the --timelapse (or -tl) command line switch.</p>
<p>The command takes a few options, but the one we are interested in is --timelapse followed by the time between shots, in milliseconds, and the -t parameter which is the maximum length to record the timelapse for.</p>
<p>Let's say we want to take a shot every 30 seconds for the next hour. The interval for --timelapse would be 30 seconds * 1000 = 30000, and the maximum length given to the -t parameter would be 60 minutes * 60 seconds * 1000 = 3600000. The next parameter is the output destination image name, which we can use a sequential number in the filename.</p>
<p>The command then looks like this:</p>
<div class="alert alert-secondary border border-dark" style="font-weight:bold"><pre class="btn-dark">raspistill -t 3600000 -tl 30000 -o image%04d.jpg</pre></div
><p>The %04d in the output filename indicates the point in the filename where you want a frame count number to appear. It will generate image1.jpg, image2.jpg, image3.jpg and so on.</p>
<p>You can read more in the <a href="https://www.raspberrypi.org/documentation/usage/camera/raspicam/raspistill.md" target="_blank" rel="nofollow">Raspistill documentation</a>.</p>
<a name="motion-capture-timelapse-videos"></a>
<h2>Using Motion to capture time-lapse videos</h2>
<p>Motion is a much more widely used application for using webcams in Linux. It can record at full frames per second, capture stills and time-lapse videos. It is widely available in many distribution repositories so compatibility shouldn't be an issue.</p>
<p>To install motion, type in the command to start the installation.</p>
<div class="alert alert-secondary border border-dark" style="font-weight:bold"><pre class="btn-dark">sudo apt-get update &amp;&amp; sudo apt-get upgrade
sudo apt-get install motion</pre></div>
<p>Once that is complete we can make sure that the camera is correctly detected and the driver has been installed. We can do this with the <code>lsusb</code> command. Simply type it in and hit enter.</p>
<div class="alert alert-secondary border border-dark" style="font-weight:bold"><pre class="btn-dark">lsusb</pre></div><p>You should see the name of your camera listed. If it is NOT there, then there is some problem with your camera or the camera is not supported in motion.</p>
<div class="alert alert-secondary border border-dark" style="font-weight:bold"><pre class="btn-dark">techman@raspberrypi:~$ lsusb
Bus 005 Device 001: ID 0000:0000
Bus 004 Device 001: ID 0000:0000
Bus 003 Device 001: ID 0000:0000
&lt;strong&gt;Bus 002 Device 002: ID 045e:00f7 Microsoft Corp.&lt;/strong&gt;
Bus 002 Device 001: ID 0000:0000
Bus 001 Device 004: ID 046d:c03f Logitech, Inc. UltraX Optical Mouse
Bus 001 Device 001: ID 0000:0000</pre></div>
<p>If all is well we should be able to go ahead and configure motion.</p>
<div class="alert alert-secondary border border-dark" style="font-weight:bold"><pre class="btn-dark">sudo nano /etc/motion/motion.conf</pre></div>
<p>You need to set a few of the options in the config file to these values.</p>
<ol><li>Make sure <code>daemon</code> is <strong>ON</strong>.</li>
    <li><p>Set <code>framerate</code> anywhere in between <strong>1000 to 1500.</strong></p></li>
    <li><p><code>Stream_quality</code> should be <strong>100</strong>.</p></li>
    <li><p>Change <code>Stream_localhost</code> to <strong>OFF</strong>.</p></li>
    <li><p>Change <code>webcontrol_localhost</code> to <strong>OFF</strong>.</p></li>
    <li><p>Set <code>quality</code> to <strong>100</strong>.</p></li>
    <li><p>Set <code>width</code> &amp; <code>height</code> to <strong>1280</strong> &amp; <strong>720</strong>.</p></li>
    <li><p>Set <code>Snapshot_interval</code> equals to <strong>10</strong>. ( <em><strong>every 10 seconds 1 photo will be taken</strong></em> )</p></li>
    <li><p>Set <code>target_dir</code> as the path that you have copied earlier.</p></li><li><p>Press <code>ctrl + x</code> to exit. Type <strong>y</strong> to save and <strong>enter</strong> to conform.</p></li></ol>
<p>Now, to edit the daemon to start the service.</p>
<div class="alert alert-secondary border border-dark" style="font-weight:bold"><pre class="btn-dark">sudo nano /etc/default/motion</pre></div>
<ol><li>Set <code>start_motion_daemon</code> to <strong>yes</strong>.</li><li>Save and exit.</li>
</ol><p>To start capturing photos simply type the command and hit enter.</p>
<div class="alert alert-secondary border border-dark" style="font-weight:bold"><pre class="btn-dark">sudo service motion restart
sudo motion</pre></div><a name="stitching-multiple-images-video"></a>
<h2>Stitching Multiple Images into a Video</h2>
<p>When you have all the images you need we can then join the images to make a video. Since this process can be quite CPU intensive I found it easier to transfer the images to my desktop Linux machine. The commands are the same, you can do this on your Raspberry Pi as well, it'll just take a lot longer.</p>
<p>We are going to use ffmpeg to convert the images to video. FFmpeg is a cross-platform solution for streaming audio and video as well as recording and conversion. It's also useful to convert multimedia files between various formats.</p>
<p>We must first add the developers PPA repository then we can install the software. Just type in these commands and let the Raspberry Pi do the work.</p>
<div class="alert alert-secondary border border-dark" style="font-weight:bold"><pre class="btn-dark">sudo add-apt-repository ppa:jonathonf/ffmpeg-3
sudo apt-get update
sudo apt-get install ffmpeg  libav-tools x264 x265</pre></div>
<p>Next, chdir into the folder containing all the captured frames. We will issue one single command which will take these frames and convert them into a video which you can upload to Facebook or YouTube.</p>
<div class="alert alert-secondary border border-dark" style="font-weight:bold"><pre class="btn-dark">ffmpeg -r 30 -pattern_type glob -i &quot;*.jpg&quot; -c:v libx264 -pix_fmt yuv420p -movflags +faststart timelapse.mp4</pre></div>
<p>This will output an x264 encoded MP4.</p><ol><li>-r 30 is the framerate, 30 fps</li><li>-pattern_type glob is for creating a video from filenames matching the glob pattern</li>
    <li>-i "*.jpg" is the glob pattern, in this case picking up all jpegs,</li>
    <li>-c:v libx264 specifies the libx264 codec</li>
    <li>-pix_fmt sets the pixel format, in this case the YUV color encoding system</li></ol>
<p>Depending on the number of frames you captured and the specification of the machine running it, this process will take several hours or even days to complete.</p>
<p>If you need to resize the frames to shrink the video you can do that easily with ImageMagick.</p>
<div class="alert alert-secondary border border-dark" style="font-weight:bold"><pre class="btn-dark">mogrify -resize 1920x1080  *.jpg</pre></div>
<p>This will resize and overwrite the source image, so be sure to work on copies not the originals.</p>

                                    <hr>
                                    <div class="alert alert-secondary border border-dark" style="font-weight:bold">
                                    </div>


                                </div>
                            </div>
                        </li>
                    </ul>

                </div>
            </div>

        </div>
    </div>
@endsection