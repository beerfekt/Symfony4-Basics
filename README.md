# Homestead-Symfony4  
  
  

Symfony4 - Basics nach dem Tutorial:    
Getting started with Symfony4  
<https://codereviewvideos.com/course/symfony-4-beginners-tutorial/video/getting-started-with-symfony-4>  


## SET UP THE PROJECT (Tested with Ubuntu(Linux))

0. Make sure that no laravel/homestead box / machine is there or running
  
1. Clone the Repo: 
  
    git clone https://github.com/beerfekt/homestead_test.git
 
2. Go into the cloned-folder:
   
     cd homestead_test  
     
 
3. Give execute permission to the script:  

    chmod +x setup.sh

4.1 Check if laravel/homestead box is already installed:  
  
  vagrant box list

4.2 If it's not installed, open setup.sh and uncomment in the line:  
  
  vagrant box add laravel/homestead


5. Run the script:  
  
    ./setup.sh

6. Add the .env file into the project

7. Add email-config into the .env (projekt-name/.env)
   (for sending emails from the form)  
   
 
#### information ####

8. Have a break in the development:
  
    //root of homestead:  
    
  
    //stop box  
    vagrant halt
    
    //continue developing  
    vagrant up  
    
    
    
9. After destroying vagrant box:  
  
  //remove entries from the /etc/hosts file!  
  homestead.info
  symfony-tutorial.test

### Entwicklungsumgebung:        

Vagrant-Box: Laravel/Homestead:  
<https://laravel.com/docs/5.7/homestead#installation-and-setup>  


### Symfony:  

Symfony4 - PHP Framework:  
<https://symfony.com/>


