---
title: "Internet Connection Diagnostics"
date: 2005-01-01
timeline_badge_color: "info"
fontawesome_icon: "fa-check-square"
technologies: ["Java", "Swing", "Applet"]
resources:
- name: featured
  src: "images/screen_diagnostics.gif"
---

There are a lot of great bandwidth testers out there (DSLReports, Speakeasy, etc.) but no free/open source solutions
I could find. The problem with a hosted bandwidth tester is that your results are subject to their bandwidth.
By having one of my own I can drop it on any computer and test the connectivity between them.
This project is no longer under development, but I was looking to build more functionality into it,
including traceroute utilities and other monitoring/troubleshooting tools... VoIP, QoS, etc. This utility
is implemented using a Java Applet with a Swing UI, and it tests uploads by making calls back to a Servlet.
It can therefore be conveniently packaged up in a WAR file and dropped into Tomcat as a webapp.