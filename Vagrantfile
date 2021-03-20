 # -*- mode: ruby -*-
# vi: set ft=ruby : 
Vagrant.configure('2') do |config|
config.vm.box = 'ubuntu/xenial64' 
config.vm.synced_folder  './data',  '/var/www/html'
config.vm.network 'private_network', ip: '192.168.33.90' 
config.vm.provision  "shell" , inline: <<-SHELL
    apt-get update
    apt-get install -y apache2 php7.0 libapache2-mod-php7.0 php7.0-mysql php7.0-mbstring 
	sudo service apache2 restart
    SHELL
end 
