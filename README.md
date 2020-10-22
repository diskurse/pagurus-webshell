# Pagurus Webshell

Pagurus is a browser access (as opposed to "thick client") PHP webshell which implements Windows "[DOSfuscation](https://www.fireeye.com/blog/threat-research/2018/03/dosfuscation-exploring-obfuscation-and-detection-techniques.html)" style command line obfuscation as anti-forensic functionality.

The webshell is named after the humble hermit crab (Pagurus bernhardus) which has evolved various methods of camouflaging itself in the wild.

<p align="center">
  <img src="https://raw.githubusercontent.com/diskurse/pagurus-webshell/main/images/pagarus.jpg">
</p>

# Motivation

Looking at dozens of browser access webshells I saw a lot of similarities in the way they concealed themselves (fake 404 page, avoiding search engine crawlers, hidden in exif data) and the way that they tried to avoid detection in web access logs (POST commands, input concealed in user-agent string, cookies, etc). None of the webshells I examined made any attempt to hide or obfuscate commands run on the compromised webserver. This research was also partially inspired by [Antak webshell](https://github.com/samratashok/nishang/tree/master/Antak-WebShell) (uses PowerShell) and [ensiko webshell](http://blog.escanav.com/2020/08/the-ace-in-every-cybercriminals-arsenal-ensiko-malware/) (implements a limited ransomware attack method), they both implement functionality beyond their peers.

# Built With
* PHP

# Screenshots

# Features

On Windows boxes when a process is executed an EventID 4688 entry is created in the Windows Event Logs, depending on how up to date the system is and whether it has been enabled this event will include a field called "Process Command Line" which contains the command line as executed, Pagurus aims to add a layer of obfuscation to this field.

Below you can see "whoami" executed through a webshell with no command line obfuscation.

<p align="center">
  <img src="https://github.com/diskurse/pagurus-webshell/blob/main/images/pagu-5.png">
</p>

The resulting spawned process looks like this in WinEventLog.

<p align="center">
  <img src="https://github.com/diskurse/pagurus-webshell/blob/main/images/pagu-1.png">
</p>

Pagurus adds some basic obfuscation, here's what that looks like as "whoami" is executed.

<p align="center">
  <img src="https://github.com/diskurse/pagurus-webshell/blob/main/images/pagu-3.png">
</p>

And here is what the spawned process looks like in the logs.

<p align="center">
  <img src="https://github.com/diskurse/pagurus-webshell/blob/main/images/pagu-2.png">
</p>

# Usage

# To Do

* Password protection
* POST functionality
* Fake 404 page
* File upload
