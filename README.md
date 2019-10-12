# [Badge Plugin](https://github.com/SaifurRahmanMohsin/oc-badge-plugin) #
Badge plugin for OctoberCMS

## What is it ##
It enables your OctoberCMS projects to generate and serve badges as per the [Shields badge specification](https://github.com/badges/shields).

## Installation ##
#### MarketPlace Installation ####
You can use the plugin code **Mohsin.Badge** in your October backend to get this plugin. Enjoy!!!

#### Manual Installation ####
Some advanced users might prefer to use manually install the plugin. Fire up your terminal and `cd` into your OctoberCMS project folder and paste this:
```
[ -f artisan ] && cd plugins
mkdir -p mohsin && cd $_
wget https://github.com/SaifurRahmanMohsin/Badge-Plugin/archive/master.zip
[ -f master ] && unzip master || unzip master.zip && rm $_
mv Badge-Plugin-master badge && cd $_
composer up

```
Logout from your backend and login again. This will create the necessary tables for the plugin to work. You have now installed **the Badge plugin**! Enjoy!!!

## Thanks ##
[Alexey Bobkov and Samuel Georges](http://octobercms.com) for OctoberCMS.

[Badge Poser Team](https://poser.pugx.org) for [the badges library](https://github.com/badges/poser).
