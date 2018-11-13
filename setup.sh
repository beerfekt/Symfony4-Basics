#!/bin/bash

echo ""
echo ""

echo " ####### Installing The Homestead Vagrant Box ###### "
echo ""
echo "Removing old laravel/homestead boxes:"
echo ""

#EINKOMMENTIEREN FALLS KEINE BOX VORHANDEN
#vagrant box remove laravel/homestead --all
echo "DONE"
echo ""
echo "Installing The Homestead Vagrant Box..."
echo ""
#EINKOMMENTIEREN FALLS KEINE BOX VORHANDEN
#vagrant box add laravel/homestead
echo "updating vagrant laravel/homestead - box ..."
echo "DONE"


echo "DONE"
echo ""
echo "Installing Homestead: Downloading Repo ... "

git clone https://github.com/laravel/homestead.git Homestead
cd Homestead
echo "DONE"

echo "Clone the desired release.."
git checkout v7.18.0
echo "DONE"

echo "moving Homestead.yaml into Homestead Folder..."
mv ../Homestead.yaml Homestead.yaml
echo "moving projekte into Homestead Folder..."
mv ../projekte projekte
echo "DONE"


#testen
echo "host einträge setzen ... "
sudo sed -i "2i192.168.10.10 symfony-tutorial.test" /etc/hosts
sudo sed -i "2i192.168.10.10 homestead.info" /etc/hosts
#echo "host einträge setzen ... "
#sudo -- sh -c -e "echo '192.168.10.10 symfony-tutorial.test' >> /etc/hosts"
#sudo -- sh -c -e "echo '192.168.10.10 angular-tutorial.test' >> /etc/hosts"
#sudo -- sh -c -e "echo '192.168.10.10 homestead.info' >> /etc/hosts"
echo "DONE"

echo ""
echo "starting Vagrant box: "
vagrant box update
vagrant up
echo "go into box:"
vagrant ssh && cd /home/vagrant/projekte/tutorials/symfony4/basics/public
&& echo "install bootstrap via bower:" && bower install bootstrap
echo "DONE"

echo ""
echo ""



echo ""

echo "Your Page is available at this address: "
echo "  PHP Infos:                ----> homestead.info "
echo "  Symfony tutorial project: ----> symfony-tutorial.test "


##1. make your file executable : 
##    sudo chmod +x <path>
##2. start up the whole project:
##    install.sh
##Please insert your mail-configuration into .env!