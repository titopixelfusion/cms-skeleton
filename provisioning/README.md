# CMS Skeleton

This repository contains everything you need to get started with development for this project. Once you have everything installed that is mentioned under the prerequisites below you can run the following command locally to check out the required repositories and setup the project.

    git clone git@github.com:titopixelfusion/cms-skeleton.git && cd cms-skeleton && bash provisioning/vagrant.sh

## Prerequisites

In order to simplify the installation process you should install [homebrew](http://brew.sh) which provides a friendly homebrew-style CLI workflow for the administration of Mac applications distributed as binaries. Refer to [this](https://github.com/Homebrew/homebrew/blob/master/share/doc/homebrew/Installation.md) article in order to install homebrew.

### Install required applications

Vagrant uses [VirtualBox](https://www.virtualbox.org/) to manage the virtual dependencies. You can [directly download virtualbox](https://www.virtualbox.org/wiki/Downloads) and install or use homebrew for it.

	$ brew cask install virtualbox

Vagrant also uses [Ansible](https://www.ansible.com/get-started) to provision machines for local development.

	$ brew install ansible

Now install Vagrant either [from the website](http://www.vagrantup.com/downloads.html) or use homebrew for installing it.

	$ brew cask install vagrant

[Vagrant-Hostsupdater](https://github.com/cogitatio/vagrant-hostsupdater) is used for local development to automatically add the correct hostnames to your `/etc/hosts` file.

	$ vagrant plugin install vagrant-hostsupdater

[Vagrant-Manager](http://vagrantmanager.com/) helps you manage all your virtual machines in one place directly from the menubar.

	$ brew cask install vagrant-manager

## Vagrant commands

When everything is setup we can start the machine using the following command:

	$ vagrant up

Once the VM is booted you can ssh into the machine:

	$ vagrant ssh

Halt the VM:

	$ vagrant halt

Other useful commands are `reload`, `suspend`, `destroy` etc.

## Provisioning the UAT/Production environments

The Ansbile scripts are also setup to provision the live servers (provision all the things). To do this run this command swapping out the environment and variables as applicable (Check 1Password for existing passwords).

    ansible-playbook ansible/aws.yml -i ansible/env/uat/inventory  --extra-vars "root_db_password={some generated password} db_pass={some generated password}"

This will install & configure all applications & services required by the project.
