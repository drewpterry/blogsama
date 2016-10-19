# -*- mode: ruby -*-
# vi: set ft=ruby :

# Vagrantfile API/syntax version. Don't touch unless you know what you're doing!
VAGRANTFILE_API_VERSION = "2"

Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|
    config.vm.define "kanjisama-blog.local" do |node|  
        node.vm.box = "ubuntu/trusty64"
        #config.vm.box_url = "https://cloud-images.ubuntu.com/vagrant/trusty/current/trusty-server-cloudimg-amd64-vagrant-disk1.box"

        node.vm.network :private_network, ip: "192.168.33.45"

        node.vm.provider :virtualbox do |vb|
          vb.customize ["modifyvm", :id, "--name", "kanjisamablog", "--memory", "512"]
          #node.vm.synced_folder "../../", "/vagrant/", mount_options: ['dmode=775', 'fmode=775']
        end

    # Shared folder from the host machine to the guest machine. Uncomment the line
    # below to enable it.
        #node.vm.synced_folder "../../", "/vagrant/"

    # Ansible provisioner.
        node.vm.provision "ansible" do |ansible|
          ansible.playbook = "ansible-wordpress/local-wordpress.yml"
          ansible.host_key_checking = false
          ansible.verbose = "v"
        end
    end
end
