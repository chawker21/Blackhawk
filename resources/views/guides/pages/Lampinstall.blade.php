@extends('/guides/layouts.app')

@section('content')
    @include('guides.partials._profile')
    @include('guides.partials.aside')
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="panel panel-default">
                    <div class="card-header"><h2>Lamp</h2></div>
                    <div id="test" class="panel-body">
                        <ul class="list-group">
                            <li class="list-group-item list-group-item-primary border-dark"><p>First thing is to update
                                    and upgrade the Linux installation. update will install the newest versions of all
                                    packages currently installed on the system.
                                    dist-upgrade does the same as upgrade but will also remove out of date packages or
                                    add new ones depending on dependencies.
                                    check <a href="http://linux.die.net/man/8/apt-get" target="_blank">Linux manual
                                        apt-get</a> for more info on these commands.</p>
                                <div class="alert alert-secondary border border-dark" style="font-weight:bold">sudo
                                    apt-get update && sudo apt-get dist-upgrade
                                </div>

                                <p> - optionally, Using the command <i
                                            class=" code-info alert alert-info border border-dark"
                                            style="font-weight:bold">adduser <i style="color:orange;">username</i></i>
                                    add a new user to installation.
                                    dont forget to change <i style="color:orange;">username</i> to your desired name.
                                </p>
                                <hr>
                                <div class="alert alert-secondary border border-dark" style="font-weight:bold">sudo
                                    adduser <i style="color:orange">username</i></div>
                                <p> the useradd command will then prompt you for a password and confirmation. Because we
                                    used adduser instead of useradd it will prompt for password automatically.</p>
                                <div class=" code-info alert alert-info border border-dark" style="font-weight:bold"><i
                                            style="font-weight:normal;">Set password prompts:</i><br>
                                    Enter new UNIX password:<br>
                                    Retype new UNIX password:<br>
                                    passwd: password updated successfully<br></div>
                                <p> The interface then prompts for user information, default is ok</p>
                                <div class=" code-info alert alert-info border border-dark" style="font-weight:bold"><i
                                            style="font-weight:normal;">User information prompts:</i><br>
                                    Changing the user information for username<br>
                                    Enter the new value, or press ENTER for the default<br>
                                    Full Name []:<br>
                                    Room Number []:<br>
                                    Work Phone []:<br>
                                    Home Phone []:<br>
                                    Other []:<br>
                                    Is the information correct? [Y/n]<br></div>
                                <p>To get started with installing and configuring the LAMP Server on the Raspberry Pi We
                                    install Apache, MySQL, PHP, PHPmyadmin and a few additional files for PHP. Ive found
                                    this can be done in
                                    one step for the most part. The following takes a few minutes.</p>
                                <p>First Create a new Source List:</p>
                                <div class="alert alert-secondary border border-dark" style="font-weight:bold">
                                    sudo nano /etc/apt/sources.list.d/10-buster.list
                                </div>
                                <p>In that file add the following</p>
                                <div class="alert alert-secondary border border-dark" style="font-weight:bold">
                                    deb http://mirrordirector.raspbian.org/raspbian/ buster main contrib non-free rpi
                                </div>
                                <p>Next Create the file</p>
                                <div class="alert alert-secondary border border-dark" style="font-weight:bold">
                                    sudo nano /etc/apt/preferences.d/10-buster
                                </div>
                                <p>Add the following to that file</p>
                                <div class="alert alert-secondary border border-dark" style="font-weight:bold">
                                    Package: *
                                    Pin: release n=stretch
                                    Pin-Priority: 900

                                    Package: *
                                    Pin: release n=buster
                                    Pin-Priority: 750
                                </div>

                                <p style="color:red"> if unable to locate packages do the following</p>
                                <div class="alert alert-secondary border border-dark" style="font-weight:bold">
                                    sudo nano /etc/apt/sources.list
                                </div>
                                <p>Make the System aware of the source list by updating</p>
                                <div class="alert alert-secondary border border-dark" style="font-weight:bold">
                                    sudo apt-get update
                                </div>
                                <div class="alert alert-secondary border border-dark" style="font-weight:bold">
                                    sudo apt install -y -t buster php7.3-fpm php7.3-curl php7.3-gd php7.3-intl php7.3-mbstring php7.3-mysql php7.3-imap php7.3-opcache php7.3-sqlite3 php7.3-xml php7.3-xmlrpc php7.3-zip php-apcu phpmyadmin -y
                                </div>
                                <p>Create an extra Config File</p>
                                <div class="alert alert-secondary border border-dark" style="font-weight:bold">
                                    sudo nano /etc/php/7.3/fpm/conf.d/90-pi-custom.ini
                                </div>
                                <p>Add this to the new config file</p>
                                <div class="alert alert-secondary border border-dark" style="font-weight:bold">
                                    cgi.fix_pathinfo=0

                                    upload_max_filesize=64m
                                    post_max_size=64m
                                    max_execution_time=600
                                </div>
                                <p> finally reload php</p>
                                <div class="alert alert-secondary border border-dark" style="font-weight:bold">
                                    sudo service php7.3-fpm reload
                                </div>
                                <p>- enable rewrite, this is part of the .htaccess configuration that is needed to
                                    rewrite URLs into a more code based query.</p>

                                <div class="alert alert-secondary border border-dark" style="font-weight:bold">
                                    sudo a2enmod rewrite
                                </div>

                                <p>Next is apache configuration, this involves granting permissions to users, allowing
                                    apache to look for index.php in the directory, and setting up Virtual hosts that
                                    allow for
                                    multiple websites seperated by ports.</p>

                                <div class="alert alert-secondary border border-dark" style="font-weight:bold">
                                    sudo nano /etc/apache2/apache2.conf
                                </div>
                                <div class=" code-info alert alert-info border border-dark" style="font-weight:bold">
                                    &ltDirectory /&gt <br>
                                    <p style="margin-left:40px;">Options Indexes FollowSymLinks<br>
                                        AllowOverride All<br>
                                        Require all granted</p>
                                    &lt/Directory&gt<br>
                                    <br>
                                    &ltDirectory /usr/share&gt<br>
                                    <p style="margin-left:40px;">AllowOverride All<br>
                                        Require all granted</p>
                                    &lt/Directory&gt<br>
                                    <br>
                                    &ltDirectory /var/www/public&gt<br>
                                    <p style="margin-left:40px;">Options Indexes FollowSymLinks<br>
                                        AllowOverride All<br>
                                        Require all granted</p>
                                    &lt/Directory&gt<br>
                                    <br>
                                    &ltIfModule dir_module&gt<br>
                                    <p style="margin-left:40px;"> DirectoryIndex index.php index.html</p>
                                    &lt/IfModule&gt<br>
                                    <br>
                                    &ltFilesMatch "^\.ht"&gt<br>
                                    <p style="margin-left:40px;">Order allow,deny<br>
                                        Deny from all<br>
                                        Satisfy All</p>
                                    &lt/FilesMatch&gt
                                </div>

                                <p>This is where we configure the virtual host, :80 is the regular port that websites
                                    are accessed on and does not require any special port fowarding or URL
                                    modification.</p>

                                <div class=" code-info alert alert-info border border-dark" style="font-weight:bold">
                                    &ltVirtualHost *:80&gt<br>

                                    <p style="margin-left:40px;">ServerName <i
                                                style="color:orange">local.project.com</i><br>
                                        ServerAdmin <i style="color:orange">admin@project.com</i><br>
                                        DocumentRoot /var/www/html/<i style="color:orange">project</i>/public<br>

                                        &ltDirectory "/var/www/html/<i style="color:orange">project</i>"&gt<br>
                                    <p style="margin-left:40px;">AllowOverride All</p>
                                    &lt/Directory&gt<br>

                                    <p style="margin-left:40px;">ErrorLog ${APACHE_LOG_DIR}/error.log<br>
                                        CustomLog ${APACHE_LOG_DIR}/access.log combined</p>

                                    &lt/VirtualHost&gt
                                </div>

                                <p> the next Virtual host is optional if you plan on using more than one webpage, by
                                    using a port which can be any port, I prefer to keep it around 81 to 100. Additional
                                    websites using
                                    ports are accessed by adding : and the port number you configure here after the
                                    initial URL.</p>
                                <div class=" code-info alert alert-info border border-dark" style="font-weight:bold">
                                    &ltVirtualHost *:<i style="color:orange">89</i>&gt<br>

                                    <p style="margin-left:40px;">ServerName <i
                                                style="color:orange">local.project2.com</i><br>
                                        ServerAdmin <i style="color:orange">admin@project2.com</i><br>
                                        DocumentRoot /var/www/html/<i style="color:orange">project2</i>/public</p>

                                    &ltDirectory "/var/www/html/<i style="color:orange">project2</i>"&gt
                                    <p style="margin-left:40px;"> AllowOverride All</p>
                                    &lt/Directory&gt<br>

                                    <p style="margin-left:40px;">ErrorLog ${APACHE_LOG_DIR}/error.log<br>
                                        CustomLog ${APACHE_LOG_DIR}/access.log combined</p>

                                    &lt/VirtualHost&gt
                                </div>
                                <p>Insert the following at the bottom of the config file for phpmyadmin</p>
                                <div class="alert alert-secondary border border-dark" style="font-weight:bold">Include
                                    /etc/phpmyadmin/apache.conf
                                </div>
                                <p>additionally if you use additional virtual hosts you will need to configure the ports
                                    file so the server knows to listen on the ports you assign</p>
                                <div class="alert alert-secondary border border-dark" style="font-weight:bold">
                                    sudo nano /etc/apache2/ports.conf
                                </div>
                                <p>insert the following following the section "Listen 80" making sure the port matches
                                    what you chose in the additional virtual host.</p>
                                <div class="alert alert-secondary border border-dark" style="font-weight:bold">Listen <i
                                            style="color:orange">89</i></div>
                                <p>- restart apache2 after configuriation is complete.</p>
                                <div class="alert alert-secondary border border-dark" style="font-weight:bold">
                                    sudo /etc/init.d/apache2 restart
                                </div>
                                <p>- the easiest way I have found to log into phpmyadmin is to simply create a new user.
                                    Ive had issues with using root
                                    mainly because mariadb does not use a password and phpmyadmin seems to generate a
                                    root pw randomly and there is no way to know it,
                                    the following logs into mysql as root and creates a new user and pw that you can use
                                    for both mysql and phpmyadmin with same root privelages.
                                    create new database user to log into phpmyadmin with</p>
                                <div class="alert alert-secondary border border-dark" style="font-weight:bold">
                                    sudo systemctl stop mariadb
                                </div>
                                <div class="alert alert-secondary border border-dark" style="font-weight:bold">
                                    sudo mysqld_safe --skip-grant-tables --skip-networking &
                                </div>
                                <div class="alert alert-secondary border border-dark" style="font-weight:bold">
                                    mysql -u root
                                </div>
                                <div class="alert alert-secondary border border-dark" style="font-weight:bold">
                                    FLUSH PRIVILEGES;
                                </div>
                                <div class="alert alert-secondary border border-dark" style="font-weight:bold">
                                    CREATE USER '<i style="color:orange">newuser</i>'@'localhost' IDENTIFIED BY '<i
                                            style="color:orange">complex_password</i>';
                                </div>
                                <div class="alert alert-secondary border border-dark" style="font-weight:bold">
                                    GRANT ALL PRIVILEGES ON * . * TO '<i style="color:orange">newuser</i>'@'localhost';
                                </div>
                                <div class="alert alert-secondary border border-dark" style="font-weight:bold">
                                    FLUSH PRIVILEGES;
                                </div>
                                <p>exit out of mysql and we can check for success by quickly logging back in with the
                                    newuser name and password</p>

                                <div class="alert alert-secondary border border-dark" style="font-weight:bold">
                                    mysql -u<i style="color:orange">newuser</i> -p
                                </div>
                                <p>- install composer</p>
                                <div class="alert alert-secondary border border-dark" style="font-weight:bold">
                                    sudo curl -sS https://getcomposer.org/installer | sudo php -- --install-dir=/usr/local/bin
                                    --filename=composer
                                </div>
                                <p>-install laravel</p>
                                <div class="alert alert-secondary border border-dark" style="font-weight:bold">
                                    composer global require "laravel/installer"
                                </div>
                                <div class="alert alert-secondary border border-dark" style="font-weight:bold">
                                    echo 'export PATH="$PATH:$HOME/.composer/vendor/bin"' >> ~/.bashrc
                                </div>
                                <p>- this is to add a URL to the local system so you dont have to type the IP address
                                    and can type a regular URL when accessing your page on the local network.
                                    Go to the following file in your windows directory.</p>
                                <div class=" code-info alert alert-info border border-dark" style="font-weight:bold">
                                    C:\Windows\System32\drivers\etc\hosts
                                </div>
                                <p>- next is to Install a webpage at the home directory that will be served by the
                                    server /var/www/html/<i style="color:orange">project</i> -</p>
                                <div class="alert alert-secondary border border-dark" style="font-weight:bold">
                                    cd /var/www/html/<i style="color:orange">project</i></div>
                                <p style="color:red;">I am unable to make composer install work on Raspbery Pi zero, I
                                    have had to zip the vendor folder from the source and transfer/unzip it on the
                                    Pi.</p>
                                <p>with the package.json file ready we can do composer install to add the vendor folder
                                    and install any package dependencies.</p>
                                <div class="alert alert-secondary border border-dark" style="font-weight:bold">
                                    composer create-project --prefer-dist laravel/laravel blog "5.5.*"
                                </div>
                                <p>this will set the key in the .env file required to be unique to the particular
                                    install of the website</p>
                                <div class="alert alert-secondary border border-dark" style="font-weight:bold">
                                    php artisan key:generate
                                </div>
                                <p>- from the project directory go into .env and check database login</p>
                                <div class="alert alert-secondary border border-dark" style="font-weight:bold">
                                    sudo nano .env
                                </div>
                                <p>- add database to phpmyadmin logging into phpmyadmin in a browser at the
                                    ipaddress/phpmyadmin</p>
                                <p>change group ownership of the public folders that need to be accessable to view the
                                    website</p>
                                <div class="alert alert-secondary border border-dark" style="font-weight:bold">
                                    sudo chgrp -R www-data /var/www/html/<i style="color:orange">project</i>/storage
                                </div>
                                <div class="alert alert-secondary border border-dark" style="font-weight:bold">
                                    sudo chgrp -R www-data /var/www/html/<i style="color:orange">project</i>/bootstrap/cache
                                </div>
                                <p>-webpage will not load because logfile is inaccesable do next to fix -</p>
                                <p>-truncate (empty) /storage/framework/sessions and /storage/framework/views but make
                                    sure the file directories are present.</p>
                                <div class="alert alert-secondary border border-dark" style="font-weight:bold">
                                    sudo chmod 755 -R /var/www/html/<i style="color:orange">project</i>/storage
                                </div>
                                <p>On raspberry pi 755 is not enough and storage needs 777 permissions</p>
                                <div class="alert alert-secondary border border-dark" style="font-weight:bold">
                                    php artisan cache:clear
                                </div>
                                <div class="alert alert-secondary border border-dark" style="font-weight:bold">
                                    composer dumpautoload
                                </div>
                                <p>
                                <p><h2>Step 7: ## Setup an FTP ##</h2>
                                <div class="step-body"><pre>$ sudo apt install vsftpd -y</pre>
                                    <pre>$ sudo nano /etc/vsftpd.conf</pre>
                                    <p>Find: (You can use Ctrl &amp; W to find)</p>
                                    <pre>local_enable=YES</pre><pre>ssl_enable=NO</pre>
                                    <p>Change to:</p><pre>#local_enable=YES</pre>
                                    <pre>#ssl_enable=NO</pre><p>Add to the bottom of the file:</p>
                                    <pre><p># CUSTOM<br/>
                                            ssl_enable=YES
local_enable=YES
chroot_local_user=YES
local_root=/var/www
user_sub_token=pi
write_enable=YES
local_umask=002
allow_writeable_chroot=YES
ftpd_banner=Welcome to my Raspberry Pi FTP service.</p></pre>
                                    <p>Ctrl &amp; O &gt; Enter &gt; Ctrl &amp; X</p>
                                    <pre>$ sudo usermod -a -G www-data pi</pre>
                                    <pre>$ sudo usermod -m -d /var/www pi</pre>
                                    <pre>$ sudo chown -R www-data:www-data /var/www</pre>
                                    <pre>$ sudo chmod -R 775 /var/www</pre>
                                    <pre>$ sudo reboot</pre>
                                    <p>The process is now complete.</p>

                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection